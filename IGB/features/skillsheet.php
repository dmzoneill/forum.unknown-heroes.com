<?php
/**********************************************************/
/* License                                                */
/*                                                        */
/*                                                        */
/*                                                        */
/*                                                        */
/* License ?... what license ?                            */
/* This thing is free for you to take. You take all       */
/* responsabilities for using it. Whatever you do with it,*/
/* I don't care (although I would appreciate you send me  */
/* any enhancement - Isks donation are also accepted).    */
/* Although I'm no expert, I don't see much security      */
/* issues in this code.                                   */
/* The biggest potential security hole will most          */
/* probably be... you !                                   */
/*                                                        */
/* Some code are coming from many places here and there   */
/* and if you think that I stoled something from you,     */
/* please contact me. I will give all appropriate         */
/* credits.                                               */
/*                                                        */
/**********************************************************/
/* Isk donations to DeTox MinRohim are also accepted ;)   */
/**********************************************************/
/* All Eve-Online logos, images, trademark and related    */
/* material are copyright CCP http://www.ccpgames.com     */
/**********************************************************/

define('_SKILLSHEET_VERSION', 1.1);

//error_reporting(E_ALL);
// Including basic functions - PostNuke ftw!
include_once 'includes/eveclass.php';

$eve = new Eve();

$isigb  = $eve->IsMiniBrowser();
$encode = $eve->VarCleanFromInput('encode');

// Checking for wich page was called...
if (!empty($encode) && $encode == 'password') {

    // Redirected to the Encode Password func...
    EncodePassword($eve);

} else {

    require_once('eveconfig/eveconfig.php');

    $scriptname = $eve->ServerGetVar('SCRIPT_NAME');

    $cid = $eve->VarCleanFromInput('cid');

    if (empty($cid)) {
        $cid = $eveconfig['default'];
        if (!$cid) {
            $first = array_keys($eveconfig);
            $cid = $eveconfig[$first[0]]['charid'];
        }
    }

    if (!isset($eveconfig[$cid])) {
        echo 'This ID wasn\'t found !';
        exit;
    }

    $config = $eveconfig[$cid];

    $config['filepath'] = $eveconfig['filepath'];
    $config['igb']      = $isigb;

    // If no password or original password - send the noob to the password encoding page.
    if (empty($config['password']) || $config['password'] == 'YOURENCODEDORNOTPASSWORD') {
        echo 'Hola big noob... don\'t you think you forgot something ?<br />';
        echo 'Like....... <a href="'.substr($scriptname, 1).'?encode=password" title="GIMME !!!">WRITING A VALID PASSWORD</a> ???<br />';
        echo 'RTFM !!';
        exit;
    }

    /**************************************************************************/
    // Adding to configuration

    // The filename should not have spaces. It's... ugly and could fail on some system anyway.
    $config['filename']  = $config['filepath']. "/" . strtolower(str_replace(' ', '',$config['charname'])) . '.xml';
    $config['trainfile'] = $config['filepath']. "/" . strtolower(str_replace(' ', '',$config['charname'])) . 'training.xml';

    $config['eveclass'] = $eve;

    index($config);

}

// The small big thing...
function index($config = array())
{

    include_once('includes/charxml.php');

    // This will write the xml file in case it must be created or updated. Otherwise, it'll do nothing.
    $do = WriteCharXMLFile($config);

    // just making reaaallly sure we don't leave that behind...
    @unlink($config['filepath']. '/cookies.txt');

    $xml = null;

    if ($fp = @fopen($config['filename'], 'r')) {
        $content = fread($fp, 1000000);
        fclose($fp);
    } else {
        echo "ARGG !!! PODKILLED BY THE MAIN FILE!";
        exit;
    }


    // Reading the XML !
    $xml = explode("\n", $content);

    // Get update time
    $time     = time();
    $filetime = filemtime($config['filename']);
    $left     = ($filetime + 3600) - $time;
    $diffDate = $left;
    $days     = floor($diffDate / 24 / 60 / 60 );
    $diffDate = $diffDate - ($days*24*60*60);
    $hours    = floor($diffDate / 60 / 60);
    $diffDate = ($diffDate - ($hours*60*60));
    $minutes  = floor($diffDate/60);
    $diffDate = $diffDate - ($minutes*60);
    $seconds  = floor($diffDate);


    $i = 0;
    // FIX
    $exstart = '<character name="';
    $exend   = '"></character>';
    // ENDFIX

    $final = '';

    foreach($xml as $line) {
        if (!stristr($line, $exend)) {
            $final .= $line ."\n";
        }

        // Adding the xml stylesheet to the second line.
        if ($i == 0) {
            $final .= "<?xml-stylesheet type=\"text/xsl\" href=\"includes/template.xsl\" ?>\n";
        }

        // Adding the training information before the skill looping group
        if (stristr($line, "</attributes>")) {
            $final .= "<pageupdateminutes>" . $minutes . "</pageupdateminutes>\n";
            $final .= "<pageupdateseconds>" . $seconds . "</pageupdateseconds>\n";
            $final .= "<localtime>"         . $time    . "</localtime>\n";

            $training = GetTrainingData($config['trainfile']);

            if ($training) {
                $traininglines = explode("\n", $training);
                foreach($traininglines as $trainline) {
                    // FIX
                    if (!stristr($trainline, "$exend")) {
                        $final .= $trainline . "\n";
                    }
                    // ENDFIX
                }
            }
        }

        $i++;
    }

    include_once('includes/xml.php');

    $parse = XML_parsecontent($final);

    $attr = $parse['charactersheet']['characters']['character attr'];
    $char = $parse['charactersheet']['characters']['character'];

    $timeInCache     = $attr['timeInCache'];
    $timeLeftInCache = $attr['timeLeftInCache'];
    $characterID     = $attr['characterID'];

    $name            = $attr['name'];
    $race            = $char['race'];
    $bloodLine       = $char['bloodLine'];
    $gender          = $char['gender'];
    $corporationName = $char['corporationName'];
    $balance         = $char['balance'];
    $attributes      = array('intelligence' => $char['attributes']['intelligence'],
                             'charisma'     => $char['attributes']['charisma'],
                             'perception'   => $char['attributes']['perception'],
                             'memory'       => $char['attributes']['memory'],
                             'willpower'    => $char['attributes']['willpower']);

    $skillTraining   = $char['skillTraining'];

    $skills          = $char['skills']['skillGroup'];

    $x = 0;
    $y = 0;
    $count = count($skills)/2;
    $skilltree   = array();
    $skilltreeX  = array();
    $skillgroups = array();
    $skillpointstotal = 0;

    // Simplifying the skill tree...
    for ($x = 0; $x < $count; $x++) {

        $groupName = $skills["$x attr"]['groupName'];
        $groupID   = $skills["$x attr"]['groupID'];

        $skillgroups[$groupID] = $groupName;
        //$x++;

        $ycount = count($skills[$x]);
        if ($ycount < 2) {
            $ycount =  count($skills[$x]['skill'])/2;
        }
        for ($y = 0; $y < $ycount; $y++) {

            if (isset($skills[$x]['skill attr'])) {
                $typeID = $skills[$x]['skill attr']['typeID'];
                $skilltree[$groupID][$typeID] = array('groupID'     => $groupID,
                                                      'groupName'   => $groupName,
                                                      'typeName'    => $skills[$x]['skill attr']['typeName'],
                                                      'typeID'      => $skills[$x]['skill attr']['typeID'],
                                                      'flag'        => $skills[$x]['skill']['flag'],
                                                      'rank'        => $skills[$x]['skill']['rank'],
                                                      'skillpoints' => $skills[$x]['skill']['skillpoints'],
                                                      'level'       => $skills[$x]['skill']['level'],
                                                      'skilllevel1' => $skills[$x]['skill']['skilllevel1'],
                                                      'skilllevel2' => $skills[$x]['skill']['skilllevel2'],
                                                      'skilllevel3' => $skills[$x]['skill']['skilllevel3'],
                                                      'skilllevel4' => $skills[$x]['skill']['skilllevel4'],
                                                      'skilllevel5' => $skills[$x]['skill']['skilllevel5']);
                $y++;
                $skillpointstotal = $skillpointstotal + $skills[$x]['skill']['skillpoints'];
            } else {
                $typeID = $skills[$x]['skill']["$y attr"]['typeID'];
                $skilltree[$groupID][$typeID] = array('groupID'     => $groupID,
                                                      'groupName'   => $groupName,
                                                      'typeName'    => $skills[$x]['skill']["$y attr"]['typeName'],
                                                      'typeID'      => $skills[$x]['skill']["$y attr"]['typeID'],
                                                      'flag'        => $skills[$x]['skill'][$y]['flag'],
                                                      'rank'        => $skills[$x]['skill'][$y]['rank'],
                                                      'skillpoints' => $skills[$x]['skill'][$y]['skillpoints'],
                                                      'level'       => $skills[$x]['skill'][$y]['level'],
                                                      'skilllevel1' => $skills[$x]['skill'][$y]['skilllevel1'],
                                                      'skilllevel2' => $skills[$x]['skill'][$y]['skilllevel2'],
                                                      'skilllevel3' => $skills[$x]['skill'][$y]['skilllevel3'],
                                                      'skilllevel4' => $skills[$x]['skill'][$y]['skilllevel4'],
                                                      'skilllevel5' => $skills[$x]['skill'][$y]['skilllevel5']);
                $skillpointstotal = $skillpointstotal + $skills[$x]['skill'][$y]['skillpoints'];
            }

        }
    }


    // Attributes are defined by some skills... changing them here !
    Attributes($attributes, $skilltree);

    // Include Render class
    include_once('includes/eveRender.class.php');

    // Creating a Render instance
    $eveRender = New eveRender($config);

    // Assign the information
    $eveRender->Assign('name',              $name);
    $eveRender->Assign('race',              $race);
    $eveRender->Assign('bloodLine',         $bloodLine);
    $eveRender->Assign('gender',            $gender);
    $eveRender->Assign('corporationName',   $corporationName);
    $eveRender->Assign('balance',           number_format($balance, 2, '.', ' '));
    if($skillTraining['skill']['skillName'] != '') {
        $eveRender->Assign('Training',          $skillTraining['skill']['skillName']);
        $eveRender->Assign('ToLevel',           $skillTraining['skill']['trainingToLevel']);
        $eveRender->Assign('TrainingID',        $skillTraining['skill attr']['typeID']);
        $eveRender->Assign('trainingStartTime', $skillTraining['skill attr']['trainingStartTime']);
        $eveRender->Assign('trainingEndTime',   $skillTraining['skill attr']['trainingEndTime']);
        $eveRender->Assign('TrainingTimeLeft',  $skillTraining['skill']['TrainingTimeLeft']);
    }
    $eveRender->Assign('skilltree',         $skilltree);
    $eveRender->Assign('skillgroups',       $skillgroups);
    $eveRender->Assign('characterID',       $characterID);
    $eveRender->Assign('attributes',        $attributes);
    $eveRender->Assign('pageupdateminutes', $char['pageupdateminutes']);
    $eveRender->Assign('pageupdateseconds', $char['pageupdateseconds']);
    $eveRender->Assign('skillpointstotal',  number_format($skillpointstotal, 0, '', ' '));

    // Version
    $eveRender->Assign('version',           _SKILLSHEET_VERSION);

    $eveclass = $config['eveclass'];

    // Display the template.
    if ($config['igb']) {
        echo $eveRender->Fetch('templateigb.tpl');
    } else {
        $outigb = $eveclass->VarCleanFromInput('outigb');
        if (!empty($outigb)) {
            echo $eveRender->Fetch('templateigb.tpl');
        } else {
            echo $eveRender->Fetch('template.tpl');
        }
    }

    // We're done !
    exit;

}

// Getting the training stuff... and only the training stuff... rest is useless.
// We also create the time left info.
function GetTrainingData($trainfile = '')
{

    $string = "";

    if ($fp = @fopen($trainfile, 'r')) {
        $content = fread($fp, 1000000);
        fclose($fp);
    } else {
        //echo "ARRRG !! PODKILLED BY THE TRAINING FILE!";
        //exit;
        return $string;
    }
    if (strpos($content, "<?xml")===false) {
        return $string;
    }

    $start = '<skillTraining>';
    $end   = '</skillTraining>';

    $null = eregi("$start(.*)$end", $content, $data);

    include_once('includes/skills.php');

    $string = $data[0];
    $pos    = strpos($string, 'typeID');
    $typeID = substr($string, $pos+8, 5);
    if (substr($typeID, -1, 1) == '"') {
        $typeID = substr($typeID, 0, 4);
    }
    $string = str_replace('</skill>', '<skillName>'.$skills[$typeID].'</skillName></skill>', $string);

    $data = array();
    $start = 'EndTime="';
    $end   = '"><characterID>';
    $null  = eregi("$start(.*)$end", $content, $data);

    $trainingleft = substr($data[0], 9, 19);

    // FIX FOR GMT
    $now       = time();
    $gmmktime  = gmmktime();
    $finaltime = $gmmktime - $now;

    $day    = (int)substr($trainingleft, 0, 2);
    $month  = (int)substr($trainingleft, 3, 2);
    $year   = (int)substr($trainingleft, 6, 4);
    $hour   = (int)substr($trainingleft, 11, 2) + floor($finaltime / 60 / 60);
    //if ($hour+1 == 24)
    $minute = (int)substr($trainingleft, 14, 2);
    $second = (int)substr($trainingleft, 17, 2);


    //$difference = gmmktime($hour, $minute, $second, $month, $day, $year) - $now;
    $difference = mktime($hour, $minute, $second, $month, $day, $year) - $now;
    if ($difference >= 1) {
        $days = floor($difference/86400);
        $difference = $difference - ($days*86400);
        $hours = floor($difference/3600);
        $difference = $difference - ($hours*3600);
        $minutes = floor($difference/60);
        $difference = $difference - ($minutes*60);
        $seconds = $difference;
        $output = "$days Days, $hours Hours, $minutes Minutes and $seconds Seconds.";
    } else {
        $output = "Done !";
    }

    $string = str_replace('</skill>', '<TrainingTimeLeft>'.$output.'</TrainingTimeLeft></skill>', $string);

    return $string;

}

function Attributes(&$attributes, &$skilltree)
{

    $learning = 1;
    if (isset($skilltree[267][3374]['level'])) {
        $learning = $learning + (float)($skilltree[267][3374]['level'] * 0.02);
    }

    // Intelligence
    $int = $attributes['intelligence'];
    if (isset($skilltree[267][3377]['level'])) {
        $int = $int + $skilltree[267][3377]['level'];
        if (isset($skilltree[267][12376]['level'])) {
            $int = $int + $skilltree[267][12376]['level'];
        }
    }
    $int = (float)($int * $learning);

    $attributes['intelligence'] = $int;

    // Perception
    $per = $attributes['perception'];
    if (isset($skilltree[267][3379]['level'])) {
        $per = $per + $skilltree[267][3379]['level'];
        if (isset($skilltree[267][12387]['level'])) {
            $per = $per + $skilltree[267][12387]['level'];
        }
    }
    $per = (float)($per * $learning);

    $attributes['perception'] = $per;

    // Charisma
    $cha = $attributes['charisma'];
    if (isset($skilltree[267][3376]['level'])) {
        $cha = $cha + $skilltree[267][3376]['level'];
        if (isset($skilltree[267][12383]['level'])) {
            $cha = $cha + $skilltree[267][12383]['level'];
        }
    }
    $cha = (float)($cha * $learning);

    $attributes['charisma'] = $cha;

    // Willpower
    $wil = $attributes['willpower'];
    if (isset($skilltree[267][3375]['level'])) {
        $wil = $wil + $skilltree[267][3375]['level'];
        if (isset($skilltree[267][12386]['level'])) {
            $wil = $wil + $skilltree[267][12386]['level'];
        }
    }
    $wil = (float)($wil * $learning);

    $attributes['willpower'] = $wil;

    // Memory
    $mem = $attributes['memory'];
    if (isset($skilltree[267][3378]['level'])) {
        $mem = $mem + $skilltree[267][3378]['level'];
        if (isset($skilltree[267][12385]['level'])) {
            $mem = $mem + $skilltree[267][12385]['level'];
        }
    }
    $mem = (float)($mem * $learning);

    $attributes['memory'] = $mem;

}

// Encode password function.
function EncodePassword($eve)
{

    $scriptname = substr($eve->ServerGetVar('SCRIPT_NAME'), 1);

    if ($eve->ServerGetVar('REQUEST_METHOD') == 'POST') {
        $password = $eve->VarCleanFromInput('password');

        if (!empty($password)) {
            echo "Now paste this exact gibberish in the configuration file: <strong>" . base64_encode($password) ."</strong><br /><br />\n";
            echo "And go to <a href=\"" . $scriptname . "\" title=\"Your crappy char sheet\">Your skill sheet</a>\n";
        } else {
            echo "Give a damn password to encode will ya... you paranoid ! Got podkilled recently or what ?? Now <a href=\"" . $scriptname . "?encode=password\" title=\"paranoid\">GO BACK</a>\n";
        }
    } else {
        $content  = "<form action=\"".$scriptname."?encode=password\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">\n";
        $content .= "<div>\n";
        $content .= "  <label for=\"field_password\">Enter your password</lable>\n";
        $content .= "  <input type=\"text\" id=\"field_password\" name=\"password\" size=\"30\" />\n";
        $content .= "  <input type=\"submit\" value=\"Encode\" />\n";
        $content .= "</div>\n";
        $content .= "</form>\n";

        echo $content;
    }

}

// PHPDoc might come one day...

?>