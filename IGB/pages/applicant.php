<?php


require_once("base/db.php");
require_once("base/global.php");
	
$sqlConnection = new MySQL_Service();
$sqlConnection->initConnection();
$sqlConnection->useDatabase($sqlConnection->db_database);


$id=$_GET['filename'];

function getfile($id,$val,$p_charid){
	global $sqlConnection;
	$old = $id;
	$name = md5(time());
	$e_charid = $p_charid;

	$savefile= "/home/strobelix/screenshots/$name.jpg";
	@touch("/home/strobelix/screenshots/$name.jpg");
	
	if($ch = curl_init ($id)){
		if($fp = fopen ($savefile, "w")){
			curl_setopt ($ch, CURLOPT_FILE, $fp);
			curl_setopt ($ch, CURLOPT_HEADER, 0);
			curl_exec ($ch);
			curl_close ($ch);
			fclose ($fp);
		}
		$hash = substr(shell_exec("md5sum /home/strobelix/screenshots/$name.jpg"),0,32);	
		$e_charid = @$_SERVER['HTTP_EVE_CHARID'];
		$datetaken = time();
		$sqlConnection->runExecute("INSERT INTO eve_sshots VALUES ('','$e_charid','$savefile','$hash','$datetaken','$val')");
	}
	else{
		$e_charid = @$_SERVER['HTTP_EVE_CHARID'];
		$datetaken = time();
		$sqlConnection->runExecute("INSERT INTO eve_sshots VALUES ('','$e_charid','$old','$hash','$datetaken','$val')");
	}
}


function url_exists($url) {
    if (!$fp = curl_init($url)) return false;
    return true;
}

$e_corpid = @$_SERVER['HTTP_EVE_CORPID'];
$e_charid = @$_SERVER['HTTP_EVE_CHARID'];


if($sqlConnection->runCheck("SELECT * FROM eve_applications WHERE p_charid='".$e_charid."'")){
	if($e_corpid=="713611672"){

		echo("<br>	
		<h2>Horaayyyy!!!!</h2>
		<br><br>You are already a member :)");

	}
	else {
				
			$e_charid = $_SERVER['HTTP_EVE_CHARID'];
	
		
			$rowf = $sqlConnection->runSelect("SELECT * FROM eve_applications WHERE p_charid='$e_charid'");
			$e_status = $rowf[17];
		
			if($e_status<3){
				echo("<h4>Pending Application For ". $_SERVER['HTTP_EVE_CHARNAME'] ."</h4><br>");
			
			}
		
			if($e_status=="0"){
				echo("Your application has not been viewed yet, call back later :).<br>");
			}
			
			if($e_status=="1"){
				echo("Your application has been viewed by a director and is being processed.<br>");
			}
			if($e_status=="2"){
				echo("Your application has been denied.<br>");
			}
			if($e_status=="3"){
				// sdfsdfsdf
			}		

		
	}
}
else {
if($_GET['apply']){
	
	$p_char = $_SERVER['HTTP_EVE_CHARNAME'];
	$p_charid = $_SERVER['HTTP_EVE_CHARID'];
	$p_skills = $_POST['p_skills'];
	$p_login = $_POST['p_login'];
	$p_char1 = $_POST['p_char1'];
	$p_char2 = $_POST['p_char2'];
	$p_char3 = $_POST['p_char3'];
	$p_name = $_POST['p_name'];
	$p_age = $_POST['p_age'];
	$p_start = $_POST['p_start'];
	$p_end = $_POST['p_end'];
	$p_days = $_POST['p_days'];
	$p_about = $_POST['p_about'];
	$p_goals = $_POST['p_goals'];
	$p_terms = $_POST['p_terms'];
	$p_refer = $_POST['p_refer'];
	
	if(strlen($p_skills)<100){ $data = "bad";}
	
	if(strlen($p_login)>10){ 
		if(url_exists($p_login)){ 
			getfile($p_login,0,$p_charid);
			$data = "";
		}
		else { 
			$data = "bad";
		}
	} 
	else {
		$data = "bad";
	}
	
	if(strlen($p_char1)>10){ 
		if(url_exists($p_char1)){ 
			getfile($p_char1,1,$p_charid);
			$data = "";
		}
		else { 
			$data = "bad";
		}
	} 
	else {
		$data = "bad";
	}
	
	if(strlen($p_char2)>10){ 
		if(url_exists($p_char2)){ 
			getfile($p_char2,1,$p_charid);
			$data = "";
		}
		else { 
			$data = "bad";
		}
	} 
	else { 
		$data = "";
	}
	
	if(strlen($p_char3)>10){ 
		if(url_exists($p_char3)){ 
			getfile($p_char3,1,$p_charid);
			$data = "";
		}
		else { 
			$data = "bad";
		}
	} 
	else { 
		$data = "";
	}
		
	
	if(strlen($p_name)<3){ $data = "bad";}
	
	if($p_age<10){ $data = "bad";}
	
	if(!stristr($p_start,":")){ $data = "bad";}
	
	if(!stristr($p_end,":")){ $data = "bad";}
	
	if(!$p_days>=1){ $data = "bad";}

	if(strlen($p_about)<30){ $data = "bad";}
	
	if(strlen($p_goals)<30){ $data = "bad";}
	
	if(!$p_terms){ $data = "bad";}
	
	
	
	if(!$data=="bad"){
	
	$p_char = $_SERVER['HTTP_EVE_CHARNAME'];
	$p_charid = $_SERVER['HTTP_EVE_CHARID'];
	$p_skills = rawurlencode($_POST['p_skills']);
	$p_login = addslashes($_POST['p_login']);
	$p_char1 = addslashes($_POST['p_char1']);
	$p_char2 = addslashes($_POST['p_char2']);
	$p_char3 = addslashes($_POST['p_char3']);
	$p_name = addslashes($_POST['p_name']);
	$p_age = addslashes($_POST['p_age']);
	$p_start = addslashes($_POST['p_start']);
	$p_end = addslashes($_POST['p_end']);
	$p_days = addslashes($_POST['p_days']);
	$p_about = addslashes($_POST['p_about']);
	$p_goals = addslashes($_POST['p_goals']);
	$p_terms = addslashes($_POST['p_terms']);
	$p_refer = addslashes($_POST['p_refer']);
	$p_date = time();
			
		$sqlConnection->runExecute("insert into eve_applications  values('','$p_char','$p_charid','$p_skills','$p_login','$p_char1',	'$p_char2','$p_char3','$p_name','$p_age','$p_start','$p_end','$p_days','$p_about','$p_goals','$p_terms','$p_refer','0','$p_date','')");
		
		echo("<br>
	<h2>Membership Application</h2>
	<br><br><h5>Your Application Has been submitted Successfully :) </h5><br>You can check this status of your application at anytime just by visiting our In Game site and clicking Join Corporation</a><br><br> - Unkh");
	
	}
	
	else {
	
	?>
	
	
	
	
	
	
	
	
	
<br /><h5>Please Correct The Fields With A <font color='#ff0000'>X</font> Next To Them</h5><br /><br />
	<form name='memberform' action='index.php?p=applicant&apply=true' method='post'>
	<h2>Membership Application</h2>
	<br><br>
		<table width=700 cellpadding="5"><tr><td colspan=2>
		So you want to become a member of Unknown Heroes :). <br>
			To do so, please read the following carefully and follow the steps below.<br><br>
			</td>
		</tr>
		<tr>
			<td colspan=2>
			<hr>
				<h2>My Character</h2>
		
		
			</td>
		</tr>
			<tr>
		<td align=left valign=top width=200>Primary Character Name</td><td align=left><?php print $_SERVER['HTTP_EVE_CHARNAME']; ?> ( <?php print $_SERVER['HTTP_EVE_CHARID']; ?> )</td>
		</tr>
		<tr>
		<td align=left valign=top width=200>Primary Character Skills</td><td align=left><?php if(strlen($p_skills)<100){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><textarea cols=35 rows=5  name='p_skills'><?php echo $p_skills; ?></textarea></td>
		</tr>
		
		
		
	<tr>
			<td colspan=2>
	
		
		<br>XML DATA only, Copy and paste the code into the above box.<br><br>Simply go here - > <a href='shellexec:http://myeve.eve-online.com/character/xml.asp?characterID=<?php print $_SERVER['HTTP_EVE_CHARID']; ?>'>http://myeve.eve-online.com/character/xml.asp?characterID=<?php print $_SERVER['HTTP_EVE_CHARID']; ?></a><br><br>
		</td>
		</tr>
		
			<tr>
			<td colspan=2>
			<hr>
				<h2>My Character's Screenshot(s)</h2>
			
			</td>
		</tr>
		<tr>
		<td align=left valign=top width=200>Login Screenshot</td><td align=left>
		
		<?php 
		if(strlen($p_login)>10){ 
			if(url_exists($p_login)){
			
			}
			else {
				echo "<h5><font color='#ff0000'>X</font></h5>";
			}
		} 
		else {
			echo "<h5><font color='#ff0000'>X</font></h5>";
		}
		?>
		
		<input type=text name='p_login' value='<?php echo $p_login; ?>'><br />eg. http://mydomain.com/login-screenshot.jpg</td>
		</tr>
		
			<tr>
			<td colspan=2 width=700>
		Please make sure the drop down menu is selected while taking a screenshot,<br /> otherwise your application will be rejected. <a href='imgs/loginex.jpg'>View Example</a><br><br><br>
			</td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Character Selection Screenshot 1</td><td align=left>
		<?php 
		if(strlen($p_char1)>10){ 
			if(url_exists($p_char1)){
			
			}
			else {
				echo "<h5><font color='#ff0000'>X</font></h5>";
			}
		} 
		else {
			echo "<h5><font color='#ff0000'>X</font></h5>";
		}
		?>
		
		<input type=text name='p_char1' value='<?php echo $p_char1; ?>'><br />eg. http://mydomain.com/login-screenshot.jpg</td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Character Selection Screenshot 2</td><td align=left>
		<?php 
		if(strlen($p_char2)>10){ 
			if(url_exists($p_char2)){
			
			}
			else {
				echo "<h5><font color='#ff0000'>X</font></h5>";
			}
		} 
		?>
		<input type=text name='p_char2' value='<?php echo $p_char2; ?>'></td>
		</tr>
		
				<tr>
		<td align=left valign=top width=200>Character Selection Screenshot 3</td><td align=left>
				<?php 
		if(strlen($p_char3)>10){ 
			if(url_exists($p_char3)){
			
			}
			else {
				echo "<h5><font color='#ff0000'>X</font></h5>";
			}
		} 
		?>
		<input type=text name='p_char3' value='<?php echo $p_char3; ?>'></td>
		</tr>
		
		<tr>
			<td colspan=2 width=700>
Please attach the character's selection screenshot(s) of the/each account,<br /> in the above fields. <a href='imgs/charex.jpg'>View Example</a><br /><br /><br />
You can put your screenshots on this site <a href='shellexec:http://beta.localhostr.com'>http://beta.localhostr.com</a><br /> for free. Copy the links given to you after uploading your screenshots.

			
			</td>
		</tr>
		
		
			
		<tr>
			<td colspan=2>
			<hr>
				<h2>A Bit about ME :)</h2>			
			</td>
		</tr>
		
		
				<tr>
		<td align=left valign=top width=200>Name </td><td><?php if(!$p_name){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><input type=text value='<?php echo $p_name; ?>' name="p_name" /></td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Age </td><td width=500><?php if(!$p_age){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><select name=p_age>
		<?php
		print "<option value=''>Select</option>";
		for($u=10;$u<70;$u++){
		print "<option value='$u'";
		if($p_age==$u){ echo " selected";} 		
		print ">$u</option>";
		}
		?>
		</select>
		
		</td>
		</tr>
		
				<tr>
		<td align=left valign=top width=200>Country </td><td><?php include("./features/ip2country.php"); ?></td>
		</tr>
		
			<tr>
		<td align=left valign=top width=200>Play time </td><td width=500><?php if(!$p_start){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><select size=5 name=p_start>
		<?php
		
		for($u=1;$u<25;$u++){
		print "<option value='$u:00'";
		if($p_start=="$u:00"){ echo " selected";} 
		print ">$u:00 Eve Time</option>";
		}
		?>
		</select> to <?php if(!$p_end){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><select size=5 name=p_end>
		<?php
		
		for($u=1;$u<25;$u++){
		print "<option value='$u:00'";
		if($p_end=="$u:00"){ echo " selected";} 
		print ">$u:00 Eve Time</option>";
		}
		?>
		</select>
		
		</td>
		</tr>
		
			<tr>
		<td align=left valign=top width=200>Days a Week</td><td>
		<?php if(!$p_days){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?>
		1 <input type="radio" name="p_days" value="1" <?php if($p_days=="1"){ echo "checked";} ?> /> 
		2 <input type="radio" name="p_days" value="2" <?php if($p_days=="2"){ echo "checked";} ?> /> 
		3 <input type="radio" name="p_days" value="3" <?php if($p_days=="3"){ echo "checked";} ?> /> 
		4 <input type="radio" name="p_days" value="4" <?php if($p_days=="4"){ echo "checked";} ?> /> 
		5 <input type="radio" name="p_days" value="5" <?php if($p_days=="5"){ echo "checked";} ?> /> 
		6 <input type="radio" name="p_days" value="6" <?php if($p_days=="6"){ echo "checked";} ?> />   
		7 <input type="radio" name="p_days" value="7" <?php if($p_days=="7"){ echo "checked";} ?> /> 
		
		</td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>A few words About Me and <?php print $_SERVER['HTTP_EVE_CHARNAME']; ?></td><td align=left><?php if(strlen($p_about)<30){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><textarea cols=35 rows=5  name='p_about'><?php echo $p_about; ?></textarea></td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Why you would like to become a member and what would you like to achieve in Unknown Heroes.</td><td align=left><?php if(strlen($p_goals)<30){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><textarea cols=35 rows=5  name='p_goals'><?php echo $p_goals; ?></textarea></td>
		</tr>	
		
		
		
		<tr>
			<td colspan=2 width=700>
<?php htmlspecialchars(include("pages/constitution.php")); ?>

<br /><br />
<?php if(!$p_terms){ echo "<h5><font color='#ff0000'>X</font></h5>";} ?><input type='checkbox' name='p_terms' <?php if($p_terms){ echo "checked";} ?>> I agree to the Consitution

			</td>
		</tr>
		
		<tr>
			<td colspan=2>
				<hr><h2>Finish up</h2><br>
				
			</td>
		</tr>	
					
					
			<tr>
		<td align=left valign=top width=200>Refered By</td><td align=left><input type=text value='<?php echo $p_refer; ?>' name="p_refer" /></td>
		</tr>	
		
			<tr>
		<td align=left valign=top colspan=2>If your are applying as a friend of a current corp member. Please type his name here.</td>
		</tr>				
									
		
		<tr>
		
		<td>
				<input type=submit value='Submit Membership Application' />
			</td>
			<td>
				
			</td>
		</tr>		
	</table>
	</form>
	
	
	
	
	
	
	
	<?php
	
	
	
	}

}
else {

?>


	
	
	
	
	
	
<hr />
	<form name='memberform' action='index.php?p=applicant&apply=true' method='post'>
	<h2>Membership Application</h2>
	<br><br>
		<table width=700 cellpadding="5"><tr><td colspan=2>
		So you want to become a member of Unknown Heroes :). <br>
			To do so, please read the following carefully and follow the steps below.<br><br>
			</td>
		</tr>
		<tr>
			<td colspan=2>
			<hr>
				<h2>My Character</h2>
		
		
			</td>
		</tr>
			<tr>
		<td align=left valign=top width=200>Primary Character Name</td><td align=left><?php print $_SERVER['HTTP_EVE_CHARNAME']; ?> ( <?php print $_SERVER['HTTP_EVE_CHARID']; ?> )</td>
		</tr>
		<tr>
		<td align=left valign=top width=200>Primary Character Skills</td><td align=left><textarea cols=35 rows=5  name='p_skills'></textarea></td>
		</tr>
		
		
		
	<tr>
			<td colspan=2>
	
		
		<br>XML DATA only, Copy and paste the code into the above box.<br><br>Simply go here - > <a href='shellexec:http://myeve.eve-online.com/character/xml.asp?characterID=<?php print $_SERVER['HTTP_EVE_CHARID']; ?>'>http://myeve.eve-online.com/character/xml.asp?characterID=<?php print $_SERVER['HTTP_EVE_CHARID']; ?></a><br><br>
		</td>
		</tr>
		
			<tr>
			<td colspan=2>
			<hr>
				<h2>My Character's Screenshot(s)</h2>
			
			</td>
		</tr>
		<tr>
		<td align=left valign=top width=200>Login Screenshot</td><td align=left><input type=text name='p_login'><br />eg. http://mydomain.com/login-screenshot.jpg</td>
		</tr>
		
			<tr>
			<td colspan=2 width=700>
		Please make sure the drop down menu is selected while taking a screenshot,<br /> otherwise your application will be rejected. <a href='imgs/loginex.jpg'>View Example</a><br><br><br>
			</td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Character Selection Screenshot 1</td><td align=left><input type=text name='p_char1'><br />eg. http://mydomain.com/login-screenshot.jpg</td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Character Selection Screenshot 2</td><td align=left><input type=text name='p_char2'></td>
		</tr>
		
				<tr>
		<td align=left valign=top width=200>Character Selection Screenshot 3</td><td align=left><input type=text name='p_char3'></td>
		</tr>
		
		<tr>
			<td colspan=2 width=700>
Please attach the character's selection screenshot(s) of the/each account,<br /> in the above fields. <a href='imgs/charex.jpg'>View Example</a><br /><br /><br />
You can put your screenshots on this site <a href='shellexec:http://beta.localhostr.com'>http://beta.localhostr.com</a><br /> for free. Copy the links given to you after uploading your screenshots.

			
			</td>
		</tr>
		
		
			
		<tr>
			<td colspan=2>
			<hr>
				<h2>A Bit about ME :)</h2>			
			</td>
		</tr>
		
		
				<tr>
		<td align=left valign=top width=200>Name </td><td><input type=text value='' name="p_name" /></td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Age </td><td width=500><select name=p_age>
		<?php
		print "<option value=''>Select</option>";
		for($u=10;$u<70;$u++){
		print "<option value='$u'>$u</option>";
		}
		?>
		</select>
		
		</td>
		</tr>
		
				<tr>
		<td align=left valign=top width=200>Country </td><td><?php include("./features/ip2country.php"); ?></td>
		</tr>
		
			<tr>
		<td align=left valign=top width=200>Play time </td><td width=500><select size=5 name=p_start>
		<?php
		
		for($u=1;$u<25;$u++){
		print "<option value='$u:00'>$u:00 Eve Time</option>";
		}
		?>
		</select> to <select size=5 name=p_end>
		<?php
		
		for($u=1;$u<25;$u++){
		print "<option value='$u:00'>$u:00 Eve Time</option>";
		}
		?>
		</select>
		
		</td>
		</tr>
		
			<tr>
		<td align=left valign=top width=200>Days a Week</td><td>
		1 <input type="radio" name="p_days" value="1" /> 
		2 <input type="radio" name="p_days" value="2" /> 
		3 <input type="radio" name="p_days" value="3" /> 
		4 <input type="radio" name="p_days" value="4" /> 
		5 <input type="radio" name="p_days" value="5" /> 
		6 <input type="radio" name="p_days" value="6" />   
		7 <input type="radio" name="p_days" value="7" /> 
		
		</td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>A few words About Me and <?php print $_SERVER['HTTP_EVE_CHARNAME']; ?></td><td align=left><textarea cols=35 rows=5  name='p_about'></textarea></td>
		</tr>
		
		<tr>
		<td align=left valign=top width=200>Why you would like to become a member and what would you like to achieve in Unknown Heroes.</td><td align=left><textarea cols=35 rows=5  name='p_goals'></textarea></td>
		</tr>	
		
		
		
		<tr>
			<td colspan=2 width=700>
<?php htmlspecialchars(include("pages/constitution.php")); ?>

<br /><br />
<input type='checkbox' name='p_terms' value='agree'> I agree to the Consitution

			</td>
		</tr>
		
		<tr>
			<td colspan=2>
				<hr><h2>Finish up</h2><br>
				
			</td>
		</tr>	
					
					
			<tr>
		<td align=left valign=top width=200>Refered By</td><td align=left><input type=text value='' name="p_refer" /></td>
		</tr>	
		
			<tr>
		<td align=left valign=top colspan=2>If your are applying as a friend of a current corp member. Please type his name here.</td>
		</tr>				
									
		
		<tr>
		
		<td>
				<input type=submit value='Submit Membership Application' />
			</td>
			<td>
				
			</td>
		</tr>		
	</table>
	</form>


	
<?php
	}
}
?>
