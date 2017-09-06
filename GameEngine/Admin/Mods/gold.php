<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.12.03                                                  ##
##  Filename:      GameEngine/Admin/Mods/gold.php                              ##
##  Developed by:  Dzoki                                                       ##
##  Edited by:     ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
##                                                                             ##
#################################################################################

include_once("../../Account.php");
$con = mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysqli_select_db($con,SQL_DB);
if ($session->access < ADMIN) die("Access Denied: You aren't Admin!");
$id = $_POST['id'];
$gold = $_POST['gold'];
$q = "UPDATE ".TB_PREFIX."users SET gold = gold + ".$_POST['gold']." WHERE id != '0'";
mysqli_query($con,$q);
mysqli_query($con,"Insert into ".TB_PREFIX."admin_log values (0,$id,'Added <b>$gold</b> gold to all users',".time().")");
header("Location: ../../../Admin/index.php?p=give&g=$gold");
?>