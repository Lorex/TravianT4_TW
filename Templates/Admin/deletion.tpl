<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       deletion.tpl                                                ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<style>
.del {width:12px; height:12px; background-image: url(img/admin/icon/del.gif);}
</style>

<?php
if($_GET['uid']){
$user = $database->getUserArray($_GET['uid'],1);
$varray = $database->getProfileVillages($_GET['uid']);
if($user){
$totalpop = 0;
foreach($varray as $vil) {
	$totalpop += $vil['pop'];
}

?>
<form action="" method="post">
<input type="hidden" name="action" value="DelPlayer">
<input type="hidden" name="uid" value="<?php echo $user['id'];?>">
<input type="hidden" name="admid" id="admid" value="<?php echo $_SESSION['id']; ?>">
<table id="member">
  <thead>
    <tr>
        <th colspan="4">刪除玩家帳號</th>
    </tr>
  </thead>
    <tr>
        <td>名稱</td>
        <td><a href="?p=player&uid=<?php echo $user['id'];?>"><?php echo $user['username'];?></a></td>
        <td>金幣:</td>
        <td><?php echo $user['gold'];?></td>
    </tr>
    <tr>
        <td>排行</td>
        <td>???</td>
        <td>人口數:</td>
        <td><?php echo $totalpop;?></td>
    </tr>
    <tr>
        <td>村莊</td>
        <td><?php

    $result = mysqli_query($con,"SELECT SQL_CACHE * FROM ".TB_PREFIX."vdata WHERE owner = ".$user['id']."");
    $num_rows = mysqli_num_rows($result);

    echo $num_rows;

    ?></td>
        <td><b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b>:</td>
        <td><?php
		$plus = date('d.m.Y H:i',$user['plus']);
		echo $plus;?></td>
    </tr>
    <tr>
        <td>聯盟</td>
        <td><?php echo $database->getAllianceName($user['alliance']);?></td>
        <td>狀態</td>
        <td>-</td>
    </tr>
    <tr>
    <td colspan="4" class="empty"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="text" name="pass"></td>
        <td colspan="2"><input type="submit" class="c5" value="刪除玩家帳號"></td>
    </tr>
</table>
<br /><br /><font color="Red"><b>刪除玩家帳號以前，請先刪除以下村莊！</font></b><br /><br />
<table id="profile">
    <tr>
        <td>名稱</td>
        <td>人口數</td>
        <td>座標</td>
		<td></td>
    </tr>
<?php
for ($i = 0; $i <= count($varray)-1; $i++) {
$coorproc = $database->getCoor($varray[$i]['wref']);
if($varray[$i]['capital']){
$capital = '<span class="c">(主村)</span>';
$delLink = '<a href="?action=delVil&did='.$varray[$i]['wref'].'" onClick="return del(\'did\','.$varray[$i]['wref'].');"><img src="../img/admin/del.gif" class="del"></a>';
}else{
$capital = '';
$delLink = '<a href="?action=delVil&did='.$varray[$i]['wref'].'" onClick="return del(\'did\','.$varray[$i]['wref'].');"><img src="../img/admin/del.gif" class="del"></a>';

}

echo '
    <tr>
        <td><a href="?p=village&did='.$varray[$i]['wref'].'">'.$varray[$i]['name'].'</a> '.$capital.'</td>
        <td>'.$varray[$i]['pop'].'</td>
        <td>('.$coorproc['x'].'|'.$coorproc['y'].')</td>
		<td>'.$delLink.' </td>
    </tr>
';
}

?>
</form>
<?php
}
}
?>
