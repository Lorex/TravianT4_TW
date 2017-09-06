<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.10                                                  ##
##  Filename:      Templates/Admin/server_info.tpl                             ##
##  Developed by:  Dzoki                                                       ##
##  Edited by:     ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
##                                                                             ##
#################################################################################

$tribe1 = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 1");
$tribe2 = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 2");
$tribe3 = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 3");
$tribe4 = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 4");
$tribe5 = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 5");
$tribes = Array(mysqli_num_rows($tribe1),mysqli_num_rows($tribe2),mysqli_num_rows($tribe3),mysqli_num_rows($tribe4),mysqli_num_rows($tribe5));
?>
<br />
<br />
<table id="profile">
	<thead>
		<tr>
            <th colspan="2">玩家統計</th>
        </tr>
	</thead>
	<tbody>
		<tr>
			<td>註冊玩家</td>
			<td>
            	<?php
                    $result = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users");
                    $users = mysqli_num_rows($result);
                    echo $users;
                ?>
			</td>
		</tr>
		<tr>
			<td>活躍玩家</td>
			<td>
            	<?php
                    $result = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."active");
                    $num_rows = mysqli_num_rows($result);
                    echo $num_rows;
                ?>
			</td>
		</tr>
		<tr>
			<td>在線玩家</td>
			<td>
                <?php
                    $t =time();
                    $result = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE ".$t." - timestamp < 300") or die(mysqli_error());;
                    $num_rows = mysqli_num_rows($result);
                    echo $num_rows;
                ?>
			</td>
		</tr>
		<tr>
			<td>封禁玩家</td>
			<td>
                <?php
                    $result = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE access = 0");
                    $num_rows = mysqli_num_rows($result);
                    echo $num_rows;
                ?>
			</td>
		</tr>
		<tr>
			<td>村莊設置</td>
			<td>
                <?php
                    $result = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."vdata");
                    $num_rows = mysqli_num_rows($result);
                    echo $num_rows;
                ?>
			</td>
		</tr>
	</tbody>
</table>
<br />
<table id="profile">
	<thead>
		<tr>
			<th colspan="3">玩家資訊</th>
		</tr>
			<td class="b">種族</td>
			<td class="b">數量</td>
			<td class="b">百分比</td>
	</thead>
	<tbody>
		<tr>
			<td>羅馬人</td>
			<td><?php echo $tribes[0]; ?></td>
			<td>
                <?php
                    $percents = 100*($tribes[0] / $users);
                    echo $percents = intval ($percents);
                    echo "%";
                ?>
			</td>
		</tr>
		<tr>
			<td>條頓人</td>
			<td><?php echo $tribes[1]; ?></td>
			<td>
                <?php
                    $percents = 100*($tribes[1] / $users);
                    echo $percents = intval ($percents);
                    echo "%";
                ?>
			</td>
		</tr>
		<tr>
			<td>高盧人</td>
			<td><?php echo $tribes[2]; ?></td>
			<td>
				<?php
                    $percents = 100*($tribes[2] / $users);
                    echo $percents = intval ($percents);
                    echo "%";
				?>
			</td>
		</tr>
		<tr>
			<td>自然界</td>
			<td><?php echo $tribes[3]; ?></td>
			<td>
				<?php
                    $percents = 100*($tribes[3] / $users);
                    echo $percents = intval ($percents);
                    echo "%";
				?>
			</td>
		</tr>
		<tr>
			<td>賴達族</td>
			<td><?php echo $tribes[4]; ?></td>
			<td>
				<?php
                    $percents = 100*($tribes[4] / $users);
                    echo $percents = intval ($percents);
                    echo "%";
				?>
			</td>
		</tr>
	</tbody>
</table>
