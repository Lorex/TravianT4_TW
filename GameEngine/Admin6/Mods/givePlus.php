<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       mainteneceBan.php                                           ##
##  Developed by:  aggenkeech                                                  ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2012. All rights reserved.                ##
##                                                                             ##
#################################################################################

include_once("../../config.php");

$con = mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysqli_select_db($con,SQL_DB);

$session = $_POST['admid'];

$sql = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."users WHERE id = ".$session."");
$access = mysqli_fetch_array($sql);
$sessionaccess = $access['access'];

if($sessionaccess != 9) die("<h1><font color=\"red\">Access Denied: You are not Admin!</font></h1>");

$sql = "SELECT id FROM ".TB_PREFIX."users ORDER BY ID DESC LIMIT 1";
$loops = mysqli_result(mysqli_query($con,$sql), 0);

$plusdur = $_POST['plus'] * 86400;

for($i = 0; $i < $loops + 1; $i++)
{
	$query = "SELECT * FROM ".TB_PREFIX."users WHERE id = ".$i."";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result))
	{
		if($row['plus'] < time()) { $plusbefore = time(); $addplus = $plusbefore + $plusdur; } elseif($row['plus'] > time()) { $plusbefore = $row['plus']; $addplus = $plusbefore + $plusdur; }
		mysqli_query($con,"UPDATE ".TB_PREFIX."users SET
			plus = '".$addplus."'
			WHERE id = '".$row['id']."'");
	}
}

header("Location: ../../../Admin/admin.php?p=givePlus&g");
?>