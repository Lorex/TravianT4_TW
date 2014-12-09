<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.05                                                  ##
##  Filename:      Templates/Admin/home.tpl                                    ##
##  Developed by:  Dzoki                                                       ##
##  Edited by:     ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
##                                                                             ##
#################################################################################
?>
<br />
<font size="3">
    <b>
        <center>
            歡迎來到 <?php if($_SESSION['access'] == MULTIHUNTER) { echo 'MULTIHUNTER';	} else if($_SESSION['access'] == ADMIN){ echo '管理員'; } ?> 後台
        </center>
    </b>
</font>

<br /><br /><br /><br />

您好，<b><?php echo $_SESSION['username']; ?></b>:

<br /><br />


<center>
    您現在正以 <b><?php if($_SESSION['access'] == MULTIHUNTER) { echo '<font color="Blue">Multihunter</font>'; } else if($_SESSION['access'] == ADMIN){ echo '<font color="Red">管理員</font>'; } ?></b>權限登入
</center>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<font color="#c5c5c5" size="1">
	Translation and Rebuild by <b>Lorex</b>.
</font>