<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       renameVillage.php                                           ##
##  Developed by:  aggenkeech                                                  ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
#################################################################################

include_once("../../Account.php");

$con = mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysqli_select_db($con,SQL_DB);

if ($session->access < ADMIN) die("Access Denied: You are not Admin!");

$did = $_POST['did'];
$name = $_POST['villagename'];
$sql = "UPDATE ".TB_PREFIX."vdata SET name = '$name' WHERE wref = $did";

mysqli_query($con,$sql);

header("Location: ../../../Admin/admin.php?p=village&did=".$did."&name=".$name."");
?>