<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       mainteneceUnban.php                                         ##
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

$users = mysqli_num_rows(mysqli_query($con,"SELECT * FROM ".TB_PREFIX."users"));

$reason = $_POST['unbanreason'];
$admin = $session;
$active = '0';
$access = '2';
$actualend = time();

$sql = "SELECT id FROM ".TB_PREFIX."users ORDER BY ID DESC LIMIT 1";
$loops = mysqli_result(mysqli_query($con,$sql), 0);

for($i = 0; $i < $loops + 1; $i++)
{
	$query = "SELECT * FROM ".TB_PREFIX."users WHERE id = ".$i." AND access = ".$access."";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result))
	{
		mysqli_query($con,"UPDATE ".TB_PREFIX."banlist SET active = '".$active."', end = '".$actualend."' WHERE reason = '".$reason."'");
	}
}

header("Location: ../../../Admin/admin.php?p=ban");
?>