<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       gold.php                                                    ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
include_once("../../Account.php");
$con = mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysqli_select_db($con,SQL_DB);
if ($session->access < ADMIN) die("Access Denied: You are not Admin!");

$id = $_POST['id'];
$admid = $_POST['admid'];
mysqli_query($con,"UPDATE ".TB_PREFIX."users SET cp = cp + ".$_POST['cp']." WHERE id = ".$id."");

$name = $database->getUserField($id,"username",0);
mysqli_query($con,"Insert into ".TB_PREFIX."admin_log values (0,$admid,'Added ".$_POST['cp']." Cultural Points to user <a href=\'admin.php?p=player&uid=$id\'>$name</a> ',".time().")");

header("Location: ../../../Admin/admin.php?p=player&uid=".$id."&cp=ok");
?>