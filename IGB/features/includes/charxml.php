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
/* any enhancement).                                      */
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

/**********************************************************/
/* All Eve-Online logos, images, trademark and related    */
/* material are copyright CCP http://www.ccpgames.com     */
/**********************************************************/

// The REAL big beef !!!
// Might do the PHPDoc thing one day but for now, this
// thing do a login on you account on the eve-online
// website and pull the XML data from your character.
// The xml is saved in a folder so that it doesn't try to
// login on every load. By default, the cache time is 1 hour.
function WriteCharXMLFile($config=array())
{

    if ($config['eveconnect']) {

        $username  = $config['username'];
        $password  = (($config['encoded'] == 'yes') ? base64_decode($config['password']) : $config['password']);
        $filename  = $config['filename'];
        $trainfile = $config['trainfile'];
        $filepath  = $config['filepath'];
        $charid    = $config['charid'];

        if (!file_exists($filename) || (time()-filemtime($filename)) > 60*60) {

            @unlink($filepath.'/cookies.txt');

            $handle = curl_init("https://myeve.eve-online.com/login.asp");

            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($handle, CURLOPT_POST, 1);
            curl_setopt($handle, CURLOPT_POSTFIELDS, "username=$username&password=$password&Check=OK&t=/character/skilltree.asp?characterID=$charid");
            curl_setopt($handle, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($handle, CURLOPT_HEADER, 1);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($handle, CURLOPT_COOKIEJAR, $filepath.'/cookies.txt');
            curl_setopt($handle, CURLOPT_COOKIEFILE, $filepath.'/cookies.txt');
            $return=curl_exec($handle);
            curl_close($handle);

            preg_match("/document\.onload=window\.location\.href='(.*?)';/sUi", $return, $matches);

            $handle = curl_init($matches[1]);

            curl_setopt($handle, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($handle, CURLOPT_HEADER, 1);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($handle, CURLOPT_COOKIEJAR, $filepath.'/cookies.txt');
            curl_setopt($handle, CURLOPT_COOKIEFILE, $filepath.'/cookies.txt');
            curl_exec($handle);
            curl_close($handle);

            $handle = curl_init("http://myeve.eve-online.com/character/xml.asp?characterID=$charid"); //&m=t
            curl_setopt($handle, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($handle, CURLOPT_COOKIEJAR, $filepath.'/cookies.txt');
            curl_setopt($handle, CURLOPT_COOKIEFILE, $filepath.'/cookies.txt');

            $return = curl_exec($handle);

            curl_close($handle);

            /**************************************************/
            /* Getting training file                          */
            $handle = curl_init("http://myeve.eve-online.com/character/xml.asp?characterID=$charid&m=t"); //&m=t

            curl_setopt($handle, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($handle, CURLOPT_COOKIEJAR, $filepath.'/cookies.txt');
            curl_setopt($handle, CURLOPT_COOKIEFILE, $filepath.'/cookies.txt');

            $training = curl_exec($handle);

            curl_close($handle);
            /**************************************************/

            if (stristr($return, "<?xml")) {
                $file = fopen($filename, 'w');
                fwrite($file, $return);
                fclose($file);
            }

            if ($training) {
                if (stristr($training, "<?xml")) {
                    $file = fopen($trainfile, 'w');
                    fwrite($file, $training);
                    fclose($file);
                } else {
                    //echo $training;
                    //exit;
                }
            }

        }

        @unlink($filepath.'/cookies.txt');
    }

    return true;

}

?>