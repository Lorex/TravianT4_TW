<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.08                                                  ##
##  Filename:      Templates/Admin/config.tpl                                  ##
##  Developed by:  Dzoki                                                       ##
##  Improved by:   ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
##                                                                             ##
#################################################################################

$con = mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysqli_select_db($con,SQL_DB);
if ($_SESSON['access'] == MULTIHUNTER) die("<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><b><font color='Red'><center>Access Denied: You aren't Admin</b></font></center>");
?>
<style>
	.del {width:12px; height:12px; background-image: url(img/admin/icon/del.gif);}
</style>
<table id="member">
	<thead>
		<tr>
			<th>~ 伺服器設定 ~</th>
		</tr>
	</thead>
</table>
<table id="profile">
	<tr>
		<td class="b">摘要</td>
		<td class="b">數值</td>
	</tr>
	<tr>
		<td>伺服器名稱</td>
		<td><?php echo SERVER_NAME; ?></td>
	</tr>
	<tr>
		<td>伺服器版本</td>
		<td><font color='Red'><?php include ("../Templates/version.tpl"); ?></font></td>
	</tr>
	<tr>
		<td>啟動時間</td>
		<td><?php echo date("d.m.y H:i",COMMENCE);?> (<?php echo round((time()-COMMENCE)/86400); ?> 天前)</td>
    </tr>
    <tr>
        <td>語言</td>
        <td><?php
        		if(LANG == en){echo "English";}
        		else if(LANG == es){echo "Spanish";}
        		elseif (LANG == tw) {echo "繁體中文";}
        		else {echo LANG;} ?></td>
	</tr>
	<tr>
		<td>伺服器速度</td>
		<td><?php echo SPEED.'x';?></td>
	</tr>
	<tr>
		<td>地圖大小</td>
		<td><?php echo WORLD_MAX;?>x<?php echo WORLD_MAX;?></td>
	</tr>
	<tr>
		<td>材質包</td>
		<td><b><?php if(GP_ENABLE == true){echo "<font color='Green'>啟用</font>";} else if(GP_ENABLE == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>材質包路徑</td>
		<td><?php echo GP_LOCATE; ?></td>
	</tr>
	<tr>
		<td>倉儲量</td>
		<td><?php echo STORAGE_MULTIPLIER; ?></td>
	</tr>
	<tr>
		<td>商人載運量</td>
		<td><?php echo TRADER_CAPACITY; ?></td>
	</tr>
	<tr>
		<td>軍隊速度</td>
		<td><?php echo INCREASE_SPEED;?>x</td>
    </tr>
	<tr>
		<td>村莊發展速度/td>
        <td><?php if(CP == 0){echo "快";} else if(CP == 1){echo "慢";} ?></td>
    </tr>
    <tr>
		<td>新手保護</td>
		<td><?php echo (PROTECTION/3600);?> 小時</td>
    </tr>
	<tr>
		<td>信箱驗證</td>
		<td><b><?php if(AUTH_EMAIL == true){echo "<font color='Green'>啟用</font>";} else if(AUTH_EMAIL == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>任務系統</td>
		<td><b><?php if(QUEST == true){echo "<font color='Green'>啟用</font>";} else if(QUEST == false){echo "<font color='Red'>停用</font>";} ?></td>
    </tr>
	<tr>
		<td>拆除所需最低等級</td>
		<td><?php echo DEMOLISH_LEVEL_REQ; ?></td>
	</tr>
	<tr>
		<td>世界奇觀</td>
		<td><b><?php if(WW == true){echo "<font color='Green'>開啟</font>";} else if(WW == false){echo "<font color='Red'>關閉</font>";} ?></b></td>
    </tr>
	<tr>
		<td><b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> 帳號時間</td>
        <td><?php if(PLUS_TIME >= 86400){echo (PLUS_TIME/86400).' 天';} else if(PLUS_TIME < 86400){echo (PLUS_TIME/3600).' 小時';} ?></td>
	</tr>
	<tr>
		<td>+25% 產量時間</td>
		<td><?php if(PLUS_PRODUCTION >= 86400){echo (PLUS_PRODUCTION/86400).' 天';} else if(PLUS_PRODUCTION < 86400){echo (PLUS_PRODUCTION/3600).' 小時';} ?></td>
	</tr>
	<tr>
		<td>大工場</td>
		<td><b><?php if(GREAT_WKS == true){echo "<font color='Green'>啟用</font>";} else if(GREAT_WKS == false){echo "<font color='Red'>停用</font>";} ?></b></td>
    </tr>
	<tr>
		<td>Tourn 閥值</td>
		<td><b><?php echo TS_THRESHOLD; ?></b></td>
    </tr>
</table>
<table id="member">
	<thead>
		<tr>
			<th>~ 紀錄檔設定 ~</th>
		</tr>
	</thead>
</table>
<table id="profile">
	<tr>
		<td class="b">摘要</td>
		<td class="b">數值</td>
	</tr>
	<tr>
		<td>建築紀錄</td>
		<td><b><?php if(LOG_BUILD == true){echo "<font color='Green'>啟用</font>";} else if(LOG_BUILD == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>研發紀錄</td>
		<td><b><?php if(LOG_TECH == true){echo "<font color='Green'>啟用</font>";} else if(LOG_TECH == false){echo "<font color='Red'>停用</font>";} ?></b></td>
    </tr>
    <tr>
		<td>登入紀錄</td>
		<td><b><?php if(LOG_LOGIN == true){echo "<b><font color='Green'>啟用</font></b>";} else if(LOG_LOGIN == false){echo "<font color='Red'>停用</font>";} ?></b></td>
    </tr>
    <tr>
		<td>金幣紀錄</td>
		<td><b><?php if(LOG_GOLD_FIN == true){echo "<font color='Green'>啟用</font>";} else if(ALOG_GOLD_FIN == false){echo "<font color='Red'>停用</font>";} ?></b></td>
    </tr>
    <tr>
        <td>管理紀錄</td>
        <td><b><?php if(LOG_ADMIN == true){echo "<font color='Green'>啟用</font>";} else if(LOG_ADMIN == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>戰爭紀錄</td>
		<td><b><?php if(LOG_WAR == true){echo "<font color='Green'>啟用</font>";} else if(LOG_WAR == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>市場紀錄</td>
		<td><b><?php if(LOG_MARKET == true){echo "<font color='Green'>啟用</font>";} else if(LOG_MARKET == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>非法行為紀錄</td>
		<td><b><?php if(LOG_ILLEGAL == true){echo "<font color='Green'>啟用</font>";} else if(LOG_ILLEGAL == false){echo "<font color='Red'>停用</font>";} ?></td>
	</tr>
</table>
<table id="member">
	<thead>
		<tr>
			<th>~ 新聞訊息設定 ~</th>
		</tr>
	</thead>
</table>
<table id="profile">
	<tr>
		<td class="b">摘要</td>
		<td class="b">數值</td>
	</tr>
	<tr>
		<td>Newsbox 1</td>
		<td><b><?php if(NEWSBOX1 == true){echo "<font color='Green'>啟用</font>";} else if(NEWSBOX1 == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>Newsbox 2</td>
		<td><b><?php if(NEWSBOX2 == true){echo "<font color='Green'>啟用</font>";} else if(NEWSBOX2 == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>Newsbox 3</td>
		<td><b><?php if(NEWSBOX3 == true){echo "<font color='Green'>啟用</font>";} else if(NEWSBOX3 == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
    <tr>
		<td>Home 1</td>
		<td><b><?php if(HOME1 == true){echo "<font color='Green'>啟用</font>";} else if(HOME1 == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
    <tr>
		<td>Home 2</td>
		<td><b><?php if(HOME2 == true){echo "<font color='Green'>啟用</font>";} else if(HOME2 == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
    <tr>
		<td>Home 3</td>
		<td><b><?php if(HOME3 == true){echo "<font color='Green'>啟用</font>";} else if(HOME3 == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
</table>
<table id="member">
	<thead>
		<tr>
			<th>~ 資料庫設定 ~</th>
		</tr>
	</thead>
</table>
<table id="profile">
	<tr>
		<td class="b">摘要</td>
		<td class="b">數值</td>
	</tr>
	<tr>
		<td>DB 伺服器</td>
		<td><?php echo SQL_SERVER;?></td>
	</tr>
	<tr>
		<td>DB 名稱</td>
		<td><?php echo SQL_DB;?></td>
    </tr>
	<tr>
		<td>DB 帳號</td>
		<td><?php echo SQL_USER;?></td>
	</tr>
	<tr>
		<td>DB 密碼</td>
		<td>**********</td>
	</tr>
	<tr>
		<td>DB 資料表前綴</td>
		<td><?php echo TB_PREFIX;?></td>
	</tr>
	<tr>
		<td>DB 格式</td>
		<td><?php if(DB_TYPE == 0){echo "MYSQL";} else if(DB_TYPE == 1) { echo "MYSQLi";} ?></td>
	</tr>
</table>
<table id="member">
	<thead>
		<tr>
			<th>~ 額外設定 ~</th>
		</tr>
	</thead>
</table>
<table id="profile">
	<tr>
		<td class="b">摘要</td>
		<td class="b">數值</td>
	</tr>
	<tr>
		<td>限制郵件數量</td>
		<td><b><?php if(LIMIT_MAILBOX == true){echo "<font color='Green'>啟用</font>";} else if(LIMIT_MAILBOX == false){echo "<font color='Red'>停用</font>";} ?></b></td>
	</tr>
	<tr>
		<td>郵件數量最大值</td>
		<td><?php if(LIMIT_MAILBOX == true){echo MAX_MAIL;} else if(LIMIT_MAILBOX == false){echo "<font color='Gray'>限制郵件數量已停用</font>";} ?></td>
	</tr>
	<tr>
		<td>管理員排名</td>
		<td><b><?php if(INCLUDE_ADMIN == true){echo "<font color='Green'>是</font>";} else if(INCLUDE_ADMIN == false){echo "<font color='Red'>否</font>";} ?></b></td>
	</tr>
</table>
<table id="member">
	<thead>
		<tr>
			<th>~ 管理員資訊 ~</th>
		</tr>
	</thead>
</table>
<table id="profile">
	<tr>
		<td class="b">摘要</td>
		<td class="b">數值</td>
	</tr>
	<tr>
		<td>管理員電郵</td>
		<td><?php if(ADMIN_EMAIL == ''){echo "<b><font color='Red'>未設定！</b></font>";} else if(ADMIN_EMAIL != ''){echo ADMIN_EMAIL;} ?></td>
	</tr>
	<tr>
		<td>管理員名稱</td>
		<td><?php if(ADMIN_NAME == ''){echo "<b><font color='Red'>未設定！</b></font>";} else if(ADMIN_NAME != ''){echo ADMIN_NAME;} ?></td>
	</tr>
</table>
<?php
function define_array( $array, $keys = NULL )
{
    foreach( $array as $key => $value )
    {
        $keyname = ($keys ? $keys . "_" : "") . $key;
        if( is_array( $array[$key] ) )
            define_array( $array[$key], $keyname );
        else
            define( $keyname, $value );
    }
}
//define_array($array);
?>