<?php


require_once("base/db.php");
require_once("base/global.php");
	
$sqlConnection = new MySQL_Service();
$sqlConnection->initConnection();
$sqlConnection->useDatabase($sqlConnection->db_database);


$pages = $sqlConnection->runSelectResult("SELECT * FROM eve_pages where id='1'");
	
	while($eppe = $sqlConnection->getArray($pages)){
		$page_id = $eppe[0];
		$page_name = $eppe[1];
		$page_content = $eppe[2];
		$page_content = eregi_replace("&lt;","<",$page_content);
		$page_content = eregi_replace("&gt;",">",$page_content);
		$page_content = eregi_replace("&amp;","&",$page_content);
		echo ($page_content);
	}			
				
?>