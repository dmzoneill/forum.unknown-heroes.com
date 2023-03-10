<?
  require_once( "class.page.php" );
  require_once( "class.box.php" );
  require_once( "class.toplist.php" );
  
  $page = new Page( "Awards" );

  $month = $_GET['m'];
  $year = $_GET['y'];
  
  if ( $month == "" )
    $month = date( "m" ) - 1;
  
  if ( $year == "" )
    $year = date( "Y" );

  if ( $month == 0 ) {
    $month = 12;
    $year = $year - 1;
  }
    
  if ( $month == 12 ) {
    $nmonth = 1;
    $nyear = $year + 1;
  }
  else {
    $nmonth = $month + 1;
    $nyear = $year;
  }
  if ( $month == 1 ) {
    $pmonth = 12;
    $pyear = $year - 1;
  }
  else {
    $pmonth = $month - 1;
    $pyear = $year;
  }

  $monthname = date( "F", strtotime( "2000-".$month."-1" ) );
    
  $html .= "<div class=block-header2>Awards for ".$monthname." ".$year."</div>";
  
  // main table
  $html .= "<table height=600 width=\"100%\"><tr>";

  // top killers
  $tklist = new TopKillsList();
  $tklist->setMonth( $month );
  $tklist->setYear( $year );
  if ( CORP_ID )
    $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
  if ( ALLIANCE_ID )
    $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
  $tklist->generate();
  $tkbox = new AwardBox( $tklist, "Top killers", "kills", "kills", "eagle" );
  $html .= "<td align=center>".$tkbox->generate()."</td>";

  // top scorers
  $killboard = $page->killboard_;
  $config = $killboard->getConfig();
  if ( $config->getKillPoints() ) {
    $tklist = new TopScoreList();
    $tklist->setMonth( $month );
    $tklist->setYear( $year );
    if ( CORP_ID )
      $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
    if ( ALLIANCE_ID )
      $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
    $tklist->generate();
    $tkbox = new AwardBox( $tklist, "Top scorers", "points", "points", "redcross" );
    $html .= "<td align=center>".$tkbox->generate()."</td>";
  }

  // top solo killers
  $tklist = new TopSoloKillerList();
  $tklist->setMonth( $month );
  $tklist->setYear( $year );
  if ( CORP_ID )
    $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
  if ( ALLIANCE_ID )
    $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
  $tklist->generate();
  $tkbox = new AwardBox( $tklist, "Top solokillers", "solo kills", "kills", "cross" );
  $html .= "<td align=center>".$tkbox->generate()."</td>";

  // top damage dealers
  $tklist = new TopDamageDealerList();
  $tklist->setMonth( $month );
  $tklist->setYear( $year );
  if ( CORP_ID )
    $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
  if ( ALLIANCE_ID )
    $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
  $tklist->generate();
  $tkbox = new AwardBox( $tklist, "Top damagedealers", "kills w/ most damage", "kills", "wing1" );
  $html .= "<td align=center>".$tkbox->generate()."</td>";

  $html .= "</tr><tr>";

  // top final blows
  $tklist = new TopFinalBlowList();
  $tklist->setMonth( $month );
  $tklist->setYear( $year );
  if ( CORP_ID )
    $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
  if ( ALLIANCE_ID )
    $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
  $tklist->generate();
  $tkbox = new AwardBox( $tklist, "Top finalblows", "final blows", "kills", "skull" );
  $html .= "<td align=center>".$tkbox->generate()."</td>";

  // top podkillers
  $tklist = new TopPodKillerList();
  $tklist->setMonth( $month );
  $tklist->setYear( $year );
  if ( CORP_ID )
    $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
  if ( ALLIANCE_ID )
    $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
  $tklist->generate();
  $tkbox = new AwardBox( $tklist, "Top podkillers", "podkills", "kills", "globe" );
  $html .= "<td align=center>".$tkbox->generate()."</td>";

  // top griefers
  $tklist = new TopGrieferList();
  $tklist->setMonth( $month );
  $tklist->setYear( $year );
  if ( CORP_ID )
    $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
  if ( ALLIANCE_ID )
    $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
  $tklist->generate();
  $tkbox = new AwardBox( $tklist, "Top griefers", "carebear kills", "kills", "star" );
  $html .= "<td align=center>".$tkbox->generate()."</td>";
  
  // top capital killers
  $tklist = new TopCapitalShipKillerList();
  $tklist->setMonth( $month );
  $tklist->setYear( $year );
  if ( CORP_ID )
    $tklist->addInvolvedCorp( new Corporation( CORP_ID ) );
  if ( ALLIANCE_ID )
    $tklist->addInvolvedAlliance( new Alliance( ALLIANCE_ID ) );
    
  $tklist->generate();
  $tkbox = new AwardBox( $tklist, "Top ISK killers", "capital shipkills", "kills", "wing2" );
  $html .= "<td align=center>".$tkbox->generate()."</td>";

  $html .= "</td></tr></table>";

  $menubox = new Box("Menu");
  $menubox->setIcon("menu-item.gif");
  $menubox->addOption("caption", "Navigation" );
  $menubox->addOption("link", "Previous month ", "?a=awards&m=".$pmonth."&y=".$pyear );
  if ( ! ($month == date( "m" ) - 1 && $year == date( "Y" ) ) )
    $menubox->addOption("link", "Next month", "?a=awards&m=".$nmonth."&y=".$nyear );
  $page->addContext( $menubox->generate() );
  
  $page->setContent( $html );
  $page->generate();
?>
