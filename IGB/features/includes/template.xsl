<?xml version="1.0" encoding="iso-8859-1" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="html" indent="yes" />
  <xsl:template match="charactersheet">
    <html>
      <head>
        <title>Skill Sheet</title>
        <!--<title>Skills</title>-->
        <style type="text/css">
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
          /*.png
          {
            behavior: url('pngbehavior.htc');
          }*/
          .newsTitleImage
          {
            behavior: url('pngbehavior.htc');
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
            border-left:: #666666 1px solid;
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
        </style>
      </head>
      <body bgcolor="black">
        <xsl:apply-templates select="characters/character" />
      </body>
    </html>
  </xsl:template>
  <xsl:template match="character">
    <xsl:if test="race != ''">
      <xsl:variable name="TrainingStart">
        <xsl:value-of select="@trainingStartTime" />
      </xsl:variable>
      <table align="center" width="70%">

        <tr>
          <td>
            <br />
            <br />
            <table style="margin-left: 80px" cellSpacing="0" cellPadding="2" border="0">
              <tr>
                <td vAlign="top">
                  <xsl:element name="img">
                    <xsl:attribute name="src">http://img.eve.is/serv.asp?c=<xsl:value-of select="@characterID" /><xsl:text>&amp;</xsl:text>s=256</xsl:attribute>
                    <!--<xsl:attribute name="src">images/<xsl:value-of select="@characterID" />.jpg</xsl:attribute>-->

                    <xsl:attribute name="alt">
                      <xsl:value-of select="@name" />
                    </xsl:attribute>
                    <xsl:attribute name="style">BORDER-RIGHT: gray 1px solid; BORDER-TOP: gray 1px solid; BORDER-LEFT: gray 1px solid; BORDER-BOTTOM: gray 1px solid</xsl:attribute>
                  </xsl:element>
                </td>
                <td vAlign="top">
                  <table class="dataTable" cellSpacing="0" cellPadding="2" width="420" border="0">

                    <xsl:variable name="learn">
                      <xsl:choose>
                        <xsl:when test="skills/skillGroup/skill[@typeID = 3374]/level !=  ''">
                          <xsl:value-of select="(skills/skillGroup/skill[@typeID = 3374]/level * 0.02) + 1" />
                        </xsl:when>
                      </xsl:choose>
                    </xsl:variable>
                    <xsl:variable name="learning">
                      <xsl:choose>

                        <xsl:when test="$learn =  ''">
                          <xsl:value-of select="1.0" />
                        </xsl:when>
                        <xsl:when test="$learn !=  ''">
                          <xsl:value-of select="$learn" />
                        </xsl:when>
                      </xsl:choose>
                    </xsl:variable>
                    <tr>

                      <td class="dataTableHeader" colSpan="2">Info</td>
                      <td class="dataTableHeader" colSpan="2">Attributes</td>
                    </tr>
                    <tr>
                      <td class="dataTableCell">Charactername</td>
                      <td class="dataTableCell">
                        <xsl:value-of select="@name" />

                      </td>
                      <td class="dataTableCell">Intelligence</td>
                      <xsl:variable name="iboost">
                        0<xsl:choose>
                          <xsl:when test="attributeEnhancers/intelligenceBonus/augmentatorValue !=  ''">
                            <xsl:value-of select="attributeEnhancers/intelligenceBonus/augmentatorValue" />
                          </xsl:when>
                        </xsl:choose>

                      </xsl:variable>
                      <xsl:variable name="iskills1">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 3377]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 3377]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>

                      <xsl:variable name="iskills2">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 12376]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 12376]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <td class="dataTableCell" align="center">

                        <xsl:value-of select="format-number($learning * (attributes/intelligence + $iskills1 +$iskills2 + $iboost), '##.##')" />
                      </td>
                    </tr>
                    <tr>
                      <td class="dataTableCell">Corporation</td>
                      <td class="dataTableCell">
                        <xsl:value-of select="corporationName" />
                      </td>

                      <td class="dataTableCell">Perception</td>
                      <xsl:variable name="pboost">
                        0<xsl:choose>
                          <xsl:when test="attributeEnhancers/perceptionBonus/augmentatorValue !=  ''">
                            <xsl:value-of select="attributeEnhancers/perceptionBonus/augmentatorValue" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>

                      <xsl:variable name="pskills1">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 3379]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 3379]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <xsl:variable name="pskills2">

                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 12387]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 12387]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <td class="dataTableCell" align="center">
                        <xsl:value-of select="format-number($learning * (attributes/perception + $pskills1 + $pskills2 + $pboost), '##.##')" />

                      </td>
                    </tr>
                    <tr>
                      <td class="dataTableCell">Total Cash</td>
                      <td class="dataTableCell"><xsl:value-of select="format-number(balance, '###,###,###')" /> ISK</td>
                      <td class="dataTableCell">Charisma</td>
                      <xsl:variable name="cboost">

                        0<xsl:choose>
                          <xsl:when test="attributeEnhancers/charismaBonus/augmentatorValue !=  ''">
                            <xsl:value-of select="attributeEnhancers/charismaBonus/augmentatorValue" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <xsl:variable name="cskills1">
                        0<xsl:choose>

                          <xsl:when test="skills/skillGroup/skill[@typeID = 3376]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 3376]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <xsl:variable name="cskills2">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 12383]/level !=  ''">

                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 12383]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <td class="dataTableCell" align="center">
                        <xsl:value-of select="format-number($learning * (attributes/charisma + $cboost + $cskills1 +$cskills2), '##.##')" />
                      </td>
                    </tr>
                    <tr>

                      <td class="dataTableCell">Total skill points</td>
                      <td class="dataTableCell">
                        <xsl:value-of select="format-number(sum(skills/skillGroup/skill/skillpoints), '###,###')" />
                      </td>
                      <td class="dataTableCell">Willpower</td>
                      <xsl:variable name="wboost">
                        0<xsl:choose>

                          <xsl:when test="attributeEnhancers/willpowerBonus/augmentatorValue !=  ''">
                            <xsl:value-of select="attributeEnhancers/willpowerBonus/augmentatorValue" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <xsl:variable name="wskills1">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 3375]/level !=  ''">

                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 3375]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <xsl:variable name="wskills2">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 12386]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 12386]/level" />

                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>
                      <td class="dataTableCell" align="center">
                        <xsl:value-of select="format-number($learning * (attributes/willpower + $wboost + $wskills1 +$wskills2), '##.##')" />
                      </td>
                    </tr>
                    <tr>
                      <td class="dataTableCell">Race / Blood line</td>

                      <td class="dataTableCell"><xsl:value-of select="race" /> / <xsl:value-of select="bloodLine" /></td>
                      <td class="dataTableCell">Memory</td>
                      <xsl:variable name="mboost">
                        0<xsl:choose>
                          <xsl:when test="attributeEnhancers/perceptionBonus/augmentatorValue !=  ''">
                            <xsl:value-of select="attributeEnhancers/intelligenceBonus/augmentatorValue" />
                          </xsl:when>

                        </xsl:choose>
                      </xsl:variable>
                      <xsl:variable name="mskills1">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 3378]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 3378]/level" />
                          </xsl:when>
                        </xsl:choose>

                      </xsl:variable>
                      <xsl:variable name="mskills2">
                        0<xsl:choose>
                          <xsl:when test="skills/skillGroup/skill[@typeID = 12385]/level !=  ''">
                            <xsl:value-of select="skills/skillGroup/skill[@typeID = 12385]/level" />
                          </xsl:when>
                        </xsl:choose>
                      </xsl:variable>

                      <td class="dataTableCell" align="center">
                        <xsl:value-of select="format-number($learning * (attributes/memory + $mboost + $mskills1 +$mskills2), '##.##')" />
                      </td>
                    </tr>
                    <tr>
                      <td class="dataTableCell" colSpan="4"></td>
                    </tr>
                    <tr>
                      <td class="dataTableCell" colSpan="2">Currently training</td>
                      <td class="dataTableCell" style="color:gold;font-weight:bold;">
                        <xsl:element name="a">
                          <xsl:attribute name="href">#<xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/@typeID" /></xsl:attribute>
                          <xsl:attribute name="style">color:gold;font-weight:bold;text-decoration: none</xsl:attribute>
                          <xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/skillName" />
                        </xsl:element>
                        <!--<xsl:element name="a">
                          <xsl:attribute name="href"><xsl:value-of selec="/charactersheet/characters/character/skillTraining/skill/@typeID" /></xsl:attribute>
                          <xsl:attribute name="alt">Goto skill</xsl:attribute>-->
                          <!--<xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/skillName" />-->
                        <!--</xsl:element>-->
                      </td>
                      <td class="dataTableCell" style="text-align:center;">
                        <xsl:element name="img">
                          <xsl:attribute name="src">images/level<xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/trainingToLevel" />_act.gif</xsl:attribute>
                          <xsl:attribute name="alt">Level <xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/trainingToLevel" /></xsl:attribute>
                        </xsl:element>
                      </td>
                    </tr>
                    <tr>
                      <td class="dataTableCell" colSpan="4"></td>
                    </tr>
                    <tr>
                      <td class="dataTableCell" colSpan="4" style="text-align:center;">
                      <xsl:element name="a">
                        <xsl:attribute name="href">
                        <xsl:choose>
                          <xsl:when test="@name = 'Valkyriena'">
                            dunland.php
                            <xsl:variable name="otherChar" select="Dunland" />
                          </xsl:when>
                          <xsl:otherwise>
                            valkyriena.php
                            <xsl:variable name="otherChar" select="Valkyriena" />
                          </xsl:otherwise>
                        </xsl:choose>
                      </xsl:attribute>
                      <xsl:attribute name="style">color:white;text-decoration: none;</xsl:attribute>
                      <xsl:choose>
                        <xsl:when test="@name = 'Valkyriena'">
                          See also <span style="color:gold; font-weight:bold;">Dunland</span> skill page
                        </xsl:when>
                        <xsl:otherwise>
                          See also <span style="color:gold; font-weight:bold;">Valkyriena</span> skill page
                        </xsl:otherwise>
                      </xsl:choose>
                      </xsl:element>
                      </td>
                    </tr>
                    <tr>
                      <td class="dataTableCell" style="text-align:center; color:gold; font-weight:bold;" colSpan="4">This page will be updated in <xsl:value-of select="pageupdateminutes" /> minutes and <xsl:value-of select="pageupdateseconds" /> seconds.</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <xsl:apply-templates select="skills/skillGroup" mode="skillGroup" />
            <br />
            <br />
            <br />
            <br />
          </td>
        </tr>
        <tr>
          <td>
            <div style="margin:auto; width:100%; text-align:center;">

            <br />
            <br />
            </div>
          </td>
        </tr>
      </table>
      <table style="margin:auto; width:100%; margin-bottom:20px;">
        <tr>
          <td style="text-align:center;width:100%;">All images and logos are Copyright &#xA9;
          <xsl:element name="a">
            <xsl:attribute name="href">http://www.ccpgames.com/</xsl:attribute>
            <xsl:attribute name="title">Copyright CCP</xsl:attribute>
            CCP
          </xsl:element></td>
        </tr>
      </table>
    </xsl:if>
  </xsl:template>

  <xsl:template match="*" mode="skillGroup">
    <div style="margin-top:50px;margin-bottom:-24px;">
      <div style="margin-top:10px;">
        <xsl:element name="div">
          <xsl:attribute name="style">margin-bottom:10px;background: url('images/<xsl:value-of select="@groupID" />.jpg'); background-color: #2C2C38; background-repeat: no-repeat; border-top:1px solid #434343; border-bottom:1px solid #434343; background-position: 74px 5px ; norepeat; height:21px;</xsl:attribute>
        </xsl:element>

        <xsl:element name="a">
          <xsl:attribute name="id"><xsl:value-of select="skill/@typeID" /></xsl:attribute>
          <xsl:attribute name="href">http://www.eve-online.com/itemdatabase/skillsaccessories/skills/<xsl:value-of select="translate(translate(@groupName,' ', ''), 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz')" />/</xsl:attribute>

          <xsl:attribute name="target">_blank</xsl:attribute>
          <xsl:attribute name="style">border:0px;color:white;text-decoration: none</xsl:attribute>
          <xsl:value-of select="@typeName" />

        <xsl:element name="img">
          <xsl:attribute name="class">newsTitleImage</xsl:attribute> <!--<xsl:attribute name="class">png</xsl:attribute>-->

          <xsl:attribute name="style">border:0px;width:64px;height:64px;top:-52px;</xsl:attribute>
          <xsl:attribute name="src">images/<xsl:value-of select="@groupID" />.png</xsl:attribute>
          <xsl:attribute name="alt">
            <xsl:value-of select="@groupName" />
          </xsl:attribute>
        </xsl:element>

        </xsl:element>
        <div style="margin-left:82px;">

          <xsl:apply-templates select="*" mode="skill" />
        </div>
        <div style="line-height: 1.45em;margin-left:82px;font-size:11px"><br />
          <font color="gold">
            <span class="navdot">&#xB7;</span><strong><xsl:value-of select="count(skill)" /></strong><xsl:text> </xsl:text>
            <xsl:value-of select="@groupName" /> skills trained, for a total of <strong><xsl:value-of select="format-number(sum(skill/skillpoints), '###,###')" /></strong> skillPoints.
          </font>
        </div>
      </div>
    </div>
  </xsl:template>
  <xsl:template match="*" mode="skill">

    <xsl:variable name="skilllevel">
      <xsl:choose>
        <xsl:when test="level=0">
          <xsl:value-of select="skilllevel1" />
        </xsl:when>
        <xsl:when test="level=1">
          <xsl:value-of select="skilllevel2" />
        </xsl:when>
        <xsl:when test="level=2">

          <xsl:value-of select="skilllevel3" />
        </xsl:when>
        <xsl:when test="level=3">
          <xsl:value-of select="skilllevel4" />
        </xsl:when>
        <xsl:when test="level=4">
          <xsl:value-of select="skilllevel5" />
        </xsl:when>
        <xsl:when test="level=5">

          <xsl:value-of select="skilllevel5" />
        </xsl:when>
      </xsl:choose>
    </xsl:variable>
    <div>
      <div style="float:right;">
        <xsl:choose>
          <xsl:when test="flag=7">
            <xsl:element name="img">

              <xsl:attribute name="src">images/level<xsl:value-of select="level" />.gif</xsl:attribute>
              <xsl:attribute name="alt">level<xsl:value-of select="level" /></xsl:attribute>
            </xsl:element>
          </xsl:when>
          <xsl:when test="flag=61">
            <xsl:element name="img">
              <xsl:attribute name="src">images/level<xsl:value-of select="level+1" />_act.gif</xsl:attribute>

              <xsl:attribute name="alt">level<xsl:value-of select="level" /></xsl:attribute>
            </xsl:element>
          </xsl:when>
        </xsl:choose>
      </div>
      <div style="line-height: 1.45em;font-size:11px">
      <xsl:element name="a">
          <xsl:attribute name="id"><xsl:value-of select="@typeID" /></xsl:attribute>
          <xsl:attribute name="href">http://www.eve-online.com/itemdatabase/skillsaccessories/skills/<xsl:value-of select="translate(../@groupName,' ', '')" />/<xsl:value-of select="@typeID" />.asp</xsl:attribute>

          <xsl:attribute name="target">_blank</xsl:attribute>
          <xsl:attribute name="style">color:white;text-decoration: none</xsl:attribute>
          <xsl:value-of select="@typeName" />
        </xsl:element>
      / <i>Rank <xsl:value-of select="rank" /></i> / <i>SP:
        <xsl:value-of select="skillpoints" /> of <xsl:value-of select="$skilllevel" /> </i>

      </div>
    </div>
    <xsl:choose>
      <xsl:when test="flag=61">
        <div>
          <div style="line-height: 1.5em;margin-left:12px;font-size:11px">
            <div>
              <font color="gold"><span class="navdot">&#xB7;</span>Currently training to: </font>

              <strong>Level <xsl:value-of select="level+1" /></strong>
            </div>
            <div>
              <font color="gold"><span class="navdot">&#xB7;</span>SP done: </font>
              <strong><xsl:value-of select="skillpoints" /> of <xsl:value-of select="$skilllevel" /></strong>
            </div>
            <div>
              <font color="gold"><span class="navdot">&#xB7;</span>Started: </font>
              <xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/@trainingStartTime" />
            </div>
            <div>
              <font color="gold"><span class="navdot">&#xB7;</span>Ending: </font>
              <xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/@trainingEndTime" />
            </div>
            <div>
              <font color="gold"><span class="navdot">&#xB7;</span>Time left: </font>
              <xsl:value-of select="/charactersheet/characters/character/skillTraining/skill/TrainingTimeLeft" />
            </div>
          </div>

        </div>
      </xsl:when>
    </xsl:choose>
  </xsl:template>
</xsl:stylesheet>
