<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       medals.php                                                  ##
##  Developed by:  aggenkeech                                                  ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
#################################################################################

include_once("../../Account.php");
$con = mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysqli_select_db($con,SQL_DB);
if ($session->access < ADMIN) die("Access Denied: You are not Admin!");



$deleteweek = $_POST['medalweek'];
mysqli_query($con,"DELETE FROM ".TB_PREFIX."medal WHERE week = ".$deleteweek."");

header("Location: ../../../Admin/admin.php?p=delmedal");
?>