<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.05                                                  ##
##  Filename:      GameEngine/Admin/Mods/gold_1.php                            ##
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
if ($session->access < ADMIN) die("Access Denied: You are not Admin!");

$id = $_POST['id'];
$admid = $_POST['admid'];
mysqli_query($con,"UPDATE ".TB_PREFIX."users SET gold = gold + ".$_POST['gold']." WHERE id = ".$id."");

$name = $database->getUserField($id,"username",0);
mysqli_query($con,"Insert into ".TB_PREFIX."admin_log values (0,$admid,'Added <b>".$_POST['gold']."</b> gold to user <a href=\'index.php?p=player&uid=$id\'>$name</a> ',".time().")");

header("Location: ../../../Admin/index.php?p=player&uid=".$id."&g=ok");
?>