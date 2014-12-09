<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.05                                                  ##
##  Filename:      Templates/Adminadmin_log.tpl                                ##
##  Developed by:  Dzoki                                                       ##
##  Edited by:     ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
##                                                                             ##
#################################################################################

    if($_SESSION['access'] < ADMIN) die("Access Denied: You aren't Admin!");

    $no = count($database->getAdminLog());
    $log = $database->getAdminLog();
    for($i=0;$i<$no;$i++) {
        $admid = $log[$i]['user']
?>
----------------------------------------
<br />
<b>紀錄 ID:</b> <?php echo $log[$i]['id']; ?>
<br />
<b>管理員:</b>&nbsp;<?php
                        $user = $database->getUserField($admid,"username",0);
                        if($user == 'Multihunter') {
                            echo '<b>管理後台</b>';
                            } else { echo '<a href="index.php?p=player&uid='.$admid.'">'.$user.'</a>'; }
					?>
<br />
<b>紀錄:</b> <?php echo $log[$i]['log']; ?>
<br />
<b>時間:</b> <?php echo date("d.m.Y H:i:s",$log[$i]['time']+3600*2); ?>
<br />
<?php } ?>