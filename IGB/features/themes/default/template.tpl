<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
  <meta name="description" content="Eve Online Skill sheet" />
  <meta name="robots" content="index,follow" />
  <meta name="resource-type" content="document" />
  <meta http-equiv="expires" content="0" />
  <meta name="author" content="Eve Online Onewayweb Solutions" />
  <meta name="copyright" content="Copyright (c) 2004 by Onewayweb Solutions" />
  <meta name="revisit-after" content="1 days" />
  <meta name="distribution" content="Global" />
  <meta name="generator" content="Eve Online Onewayweb Solutions" />
  <meta name="rating" content="General" />
  <meta name="KEYWORDS" content="eveonline, skills" />
  <title>Skill Sheet</title>
  <style type="text/css">
  /*<![CDATA[*/
    body
    {
      font-size: 8pt;
      padding-right: 0px;
      padding-left: 0px;
      padding-bottom: 0px;
      margin: 0px;
      color: white;
      padding-top: 0px;
      font-family: Verdana,Arial;
    }
    <!--[* /*.png
    {
      behavior: url('pngbehavior.htc');
    }*/ *]-->
    .newsTitleImage
    {
      <!--[* behavior: url('pngbehavior.htc'); *]-->
      left: 5px;
      float: left;
      margin-right: -40px;
      position: relative;
    }
    .navdot
    {
      padding-right: 5px;
      font-size: 6pt;
      vertical-align: 0px;
    }
    table.dataTable
    {
      border-right: #666666 1px solid;
      border-top: #666666 1px solid;
    }
    td.dataTableHeader
    {
      padding-right: 5px;
      padding-left: 5px;
      font-weight: bolder;
      font-size: 10px;
      padding-bottom: 5px;
      border-left: #666666 1px solid;
      color: white;
      padding-top: 5px;
      border-bottom: #666666 1px solid;
      background-color: #434343;
    }
    td.dataTableCell
    {
      padding-right: 4px;
      padding-left: 4px;
      font-size: 10px;
      padding-bottom: 4px;
      border-left: #666666 1px solid;
      padding-top: 4px;
      border-bottom: #666666 1px solid;
    }
  /*]]>*/
  </style>
</head>
<body bgcolor="black">
  <table align="center" width="70%" summary="Main">
  <tbody>
    <tr>
      <td><br /><br />
        <table style="margin-left: 80px;" border="0" cellpadding="2" cellspacing="0" summary="Character Info">
        <tbody>
          <tr>
            <td valign="top">
              <a style="color: gold; font-weight: bold; text-decoration: none;" href="http://myeve.eve-online.com/ingameboard.asp?a=bigshot&amp;cid=<!--[$characterID]-->"><img style="border: 1px solid gray;" alt="<!--[$name]-->" src="http://img.eve.is/serv.asp?c=<!--[$characterID]-->&amp;s=256" /></a>
            </td>
            <td valign="top"><table class="dataTable" border="0" cellpadding="2" cellspacing="0" width="460" summary="Character Info">
              <tbody>
                <tr>
                  <td colspan="2" class="dataTableHeader">Info</td>
                  <td colspan="2" class="dataTableHeader">Attributes</td>
                </tr>
                <tr>
                  <td class="dataTableCell">Charactername</td>
                  <td class="dataTableCell"><!--[$name]--></td>
                  <td class="dataTableCell">Intelligence</td>
                  <td class="dataTableCell" align="center"><!--[$attributes.intelligence]--></td>
                </tr>
                <tr>
                  <td class="dataTableCell">Corporation</td>
                  <td class="dataTableCell"><!--[$corporationName]--></td>
                  <td class="dataTableCell">Perception</td>
                  <td class="dataTableCell" align="center"><!--[$attributes.perception]--></td>
                </tr>
                <tr>
                  <td class="dataTableCell">Total Cash</td>
                  <td class="dataTableCell"><!--[$balance]--></td>
                  <td class="dataTableCell">Charisma</td>
                  <td class="dataTableCell" align="center"><!--[$attributes.charisma]--></td>
                </tr>
                <tr>
                  <td class="dataTableCell">Total skill points</td>
                  <td class="dataTableCell"><!--[$skillpointstotal]--></td>
                  <td class="dataTableCell">Willpower</td>
                  <td class="dataTableCell" align="center"><!--[$attributes.willpower]--></td>
                </tr>
                <tr>
                  <td class="dataTableCell">Race / Blood line</td>
                  <td class="dataTableCell"><!--[$race]--> / <!--[$bloodLine]--></td>
                  <td class="dataTableCell">Memory</td>
                  <td class="dataTableCell" align="center"><!--[$attributes.memory]--></td>
                </tr>
                <tr>
                  <td colspan="4" class="dataTableCell"></td>
                </tr>
                <tr>
                  <td colspan="2" class="dataTableCell">Currently training</td>
                  <td style="color: gold; font-weight: bold;" class="dataTableCell"><a style="color: gold; font-weight: bold; text-decoration: none;" href="#s<!--[$TrainingID]-->"><!--[$Training]--></a></td>
                  <td style="text-align: center;" class="dataTableCell"><img alt="Level <!--[$ToLevel]-->" src="themes/default/images/level<!--[$ToLevel]-->_act.gif" /></td>
                </tr>
                <tr>
                  <td colspan="4" class="dataTableCell"></td>
                </tr>
                <tr>
                  <td colspan="4" style="text-align: center; color: gold; font-weight: bold;" class="dataTableCell">This page will be updated in <!--[if $pageupdateminutes eq 0 and $pageupdateseconds eq 0]-->60<!--[else]--><!--[$pageupdateminutes]--><!--[/if]--> minutes and <!--[$pageupdateseconds]--> seconds.</td>
                </tr>
              </tbody>
              </table>
            </td>
          </tr>
        </tbody>
        </table>
      <!--[foreach item='skillgroup' key='groupid' from=$skilltree]-->
        <!--[assign var='totalsp' value=0]-->
        <!--[assign var='countsk' value=0]-->
        <!--[assign var='groupname' value=$skillgroups.$groupid]-->
        <!--[if $groupid eq 256]-->
          <!--[assign var='groupname' value='Missiles']-->
        <!--[/if]-->
        <div style="margin-top: 50px; margin-bottom: -24px;">
          <div style="margin-top: 10px;">
            <div style="border-top: 1px solid rgb(67, 67, 67); border-bottom: 1px solid rgb(67, 67, 67); background: rgb(44, 44, 56) url(themes/default/images/<!--[$groupid]-->.jpg) no-repeat scroll 74px 5px; margin-bottom: 10px; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; height: 21px;"></div>
            <a style="border: 0px none ; color: white; text-decoration: none;" target="_blank" href="http://www.eve-online.com/itemdatabase/skillsaccessories/skills/<!--[$groupname|lower|replace:' ':'']-->/"<!--[* id="<!--[$groupid]-->"*]-->><img alt="<!--[$skillgroups.$groupid]-->" src="themes/default/images/<!--[$groupid]-->.png" style="border: 0px none ; width: 64px; height: 64px; top: -52px;" class="newsTitleImage" /></a>
            <div style="margin-left: 82px;">
            <!--[foreach item='skill' key='skillid' from=$skillgroup]-->
              <div style="border-top: 1px dotted rgb(34, 85, 85);">
                <div style="float: right;margin-top:4px;"><img alt="level<!--[$skill.level]-->" src="themes/default/images/level<!--[if $skill.flag neq 61]--><!--[$skill.level]--><!--[else]--><!--[math equation="x + y" x=$skill.level y=1]-->_act<!--[/if]-->.gif" /></div>
                <div style="line-height: 1.45em; font-size: 11px;">
                  <a style="color: white; text-decoration: none;" target="_blank" href="http://www.eve-online.com/itemdatabase/skillsaccessories/skills/<!--[$groupname|lower|replace:' ':'']-->/<!--[$skill.typeID]-->.asp" id="s<!--[$skill.typeID]-->"><!--[$skill.typeName]--></a> / <i>Rank <!--[$skill.rank]--></i> / <i>SP: <!--[$skill.skillpoints]--> of <!--[$skill.skilllevel5]--></i>
                </div>
                <!--[if $skill.flag eq 61]-->
                <div>
                  <div style="line-height: 1.5em;margin-left:12px;font-size:11px">
                    <div>
                      <span class="navdot">&#xB7;</span><span style="color:gold;">Currently training to: </span>
                      <strong>Level <!--[math equation="x + y" x=$skill.level y=1]--></strong>
                    </div>
                    <div>
                     <span class="navdot">&#xB7;</span><span style="color:gold;">SP done: </span>
                      <strong><!--[$skill.skillpoints]--> of <!--[$skill.skilllevel5]--></strong>
                    </div>
                    <div>
                      <span class="navdot">&#xB7;</span><span style="color:gold;">Started: </span>
                      <!--[$trainingStartTime]-->
                    </div>
                    <div>
                      <span class="navdot">&#xB7;</span><span style="color:gold;">Ending: </span>
                      <!--[$trainingEndTime]-->
                    </div>
                    <div>
                      <span class="navdot">&#xB7;</span><span style="color:gold;">Time left: </span>
                      <!--[$TrainingTimeLeft]-->
                    </div>
                  </div>
                </div>
                <!--[/if]-->
              </div>
              <!--[math equation="x + y" x=$totalsp y=$skill.skillpoints assign='totalsp']-->
              <!--[math equation="x + y" x=$countsk y=1 assign='countsk']-->
            <!--[/foreach]-->
            </div>
            <div style="line-height: 1.45em; margin-left: 82px; font-size: 11px;">
              <br /><span style="color:gold;"><span class="navdot">&bull;</span><strong><!--[$countsk]--></strong> <!--[$skill.groupName]--> skills trained, for a total of <strong><!--[$totalsp]--></strong> skillPoints.</span>
            </div>
          </div>
        </div>
      <!--[/foreach]-->
        <br /><br />
        <br /><br />
      </td>
    </tr>
    <tr>
      <td><div style="margin: auto; width: 100%; text-align: center;"><br /><br /></div></td>
    </tr>
  </tbody>
  </table>
  <table style="margin: auto auto 20px; width: 70%;" summary="Copyright Info">
  <tbody>
    <tr>
      <td style="text-align: center;">All images and logos are Copyright &copy; <a title="Copyright CCP" href="http://www.ccpgames.com/">CCP</a></td>
    </tr>
    <tr>
      <td style="text-align: center;"><br /><a style="text-decoration: none;color:grey;" href="http://eve.onewayweb.com/" title="Skillsheet Website">PHP Skill sheet version <!--[$version]--></a></td>
    </tr>
  </tbody>
  </table>
</body>
</html>