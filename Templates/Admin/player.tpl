<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       player.tpl                                                  ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<?php
$id = $_GET['uid'];
if(isset($id)){        
$user = $database->getUserArray($id,1);    
$varray = $database->getProfileVillages($id);
if($user){
$totalpop = 0;
foreach($varray as $vil) {
	$totalpop += $vil['pop'];
}
include('search2.tpl');
?>
<?php
$deletion = false;
if($deletion){
?>  
<table id="member" cellpadding="1" cellspacing="1">
  <tr>
    <td>這隻帳號將會於 <span class="c2">79:56:11</span> 以內刪除
      <a href="?action=StopDel&uid=<?php echo $user['id'];?>" onClick="return del('stopDel','<?php echo $user['username'];?>');"><img src="../img/x.gif" class="del"></a>
    </td>
  </tr>
</table>
<?php
}
?>
<br>
<table id="profile" cellpadding="1" cellspacing="1" >
    <thead>
    <tr>
        <th colspan="2">玩家 <a href="index.php?p=player&uid=<?php echo $user['id'];?>"><?php echo $user['username'];?></a></th>
    </tr>                                       
    <tr>
        <td>詳細資訊</td>
        <td>描述</td>

    </tr>
    </thead><tbody>
    <tr>
        <td class="empty"></td><td class="empty"></td>
    </tr>
    <tr>
        <td class="details">
            <table cellpadding="0" cellspacing="0">
            <tr>

                <th>排名</th>
                <td><!--?php echo $ranking->getUserRank($id); ?--></td>
            </tr>
            <tr>
                <th>種族</th>
                <td><?php                        
                if($user['tribe'] == 1) {
                echo "羅馬人";
                }
                else if($user['tribe'] == 2) {
                echo "條頓人";
                }
                else if($user['tribe'] == 3) {
                echo "高盧人";
                }
                else if($user['tribe'] == 4) {
                echo "自然界";
                }
				else if($user['tribe'] == 5) {
                echo "賴達族";
                } ?></td>
            </tr>

            <tr>
                <th>聯盟</th>
                <td>
                <?php if($user['alliance'] == 0) {
                  echo "-";
                }
                else {
                  echo "<a href=\"?p=alliance&aid=".$user['alliance']."\">".$database->getAllianceName($user['alliance'])."</a>";
                } ?>
                </td>
            </tr>
            <tr>
                <th>村莊數量</th>
                <td><?php echo count($varray);?></td>

            </tr>
            <tr>
                <th>人口數</th>
                <td><?php echo $totalpop;?><!-- <a href="?action=recountPopUsr&uid=<?php echo $user['id'];?>">Recount</a> --></td>
            </tr>
            <?php 
            if(isset($user['birthday']) && $user['birthday'] != 0) {
            $age = date("Y")-substr($user['birthday'],0,4);
            echo "<tr><th>年齡</th><td>$age</td></tr>";
            }
            if(isset($user['gender']) && $user['gender'] != 0) {
            $gender = ($user['gender']== 1)? "男" : "女";
            echo "<tr><th>性別</th><td>".$gender."</td></tr>";
            }
                        
            echo "<tr><th>區域</th><td><input disabled class=\"fm\" name=\"location\" value=\"".$user['location']."\"></td></tr>";
            echo "<tr><th><b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b></th><td>";
			if(date('d.m.Y H:i',$user['plus']) == '01.01.1970 00:00') {
			echo "未啟用！</tr></th>";
			} else { echo "".date('d.m.Y H:i',$user['plus']+3600*2)."</tr></th>"; }
            echo "<tr><th>電子郵箱</th><td><input disabled class=\"fm\" name=\"email\" value=\"".$user['email']."\"></td></tr>";
            echo '<tr><td colspan="2" class="empty"></td></tr>';
		
			if($_SESSION['access'] == ADMIN){
            echo '<tr><td colspan="2"><a href="?p=editUser&uid='.$user['id'].'">&raquo; 修改個人資料</a></td></tr>';
			} else if($_SESSION['access'] == MULTIHUNTER){
			echo '';
			}
            echo '<tr><td colspan="2"> <a href="nachrichten.php?t=1&id='.$user['id'].'">&raquo; 寫新訊息</a></td></tr>';

			 if($_SESSION['access'] == ADMIN){
            echo '<tr><td colspan="2"> <a class="rn3" href="?p=deletion&uid='.$user['id'].'">&raquo; 刪除帳號</a></td></tr>';
			 } else if($_SESSION['access'] == MULTIHUNTER){
			echo '';
			}
		
            echo '<tr><td colspan="2"> <a href="?p=ban&uid='.$user['id'].'">&raquo; 封禁</a></td></tr>';
            echo '<tr><td colspan="2" class="desc2"><div class="desc2div"><center>'.nl2br($user['desc1']).'</center></div></td></tr>';
            ?>      
            </table>
        </td>
        <td class="desc1">
<center><?php echo nl2br($user['desc2']); ?></center>
        </td>
    </tr>
    </tbody>
</table>
<!-- ADDITIONAL USER INFORMATION -->
<table id="member"> 
  <thead>
    <tr>
        <th colspan="2">其他資料</th>
    </tr>
  </thead>    
    <tr>
        <td>權限</td>
        <td><?php 
		if($user['access'] == 0){
		echo "封禁";
		}
		else if($user['access'] == 2){
		echo "普通玩家";
		}
		else if($user['access'] == 8){
		echo "<b><font color=\"Blue\">Multihunter</font></b>";
		}
		else if($user['access'] == 9){
		echo "<b><font color=\"Red\">管理員</font></b>";
		}?></td>
    </tr>
    <tr>
        <td>剩餘金幣</td>
        <td><?php
		if($user['gold'] == 0){ ?>
		此玩家沒有金幣！ (<img src='../img/admin/gold_g.gif' class='gold' alt='Gold' title='這個玩家擁有: <?php echo $user['gold']; ?> 金'/> <?php echo $user['gold']; ?>) <?php if($_SESSION['access'] == ADMIN){ ?><a href='index.php?p=player&uid=<?php echo $id; ?>&g'>派金 <?php } ?></a>
		<?php }
		else if($user['gold'] > 0){ ?>
		<img src='../img/admin/gold.gif' class='gold' alt='Gold' title='這個玩家擁有: <?php echo $user['gold']; ?> 金'/> <?php echo $user['gold']; ?>  <?php if($_SESSION['access'] == ADMIN){ ?><a href='index.php?p=player&uid=<?php echo $id; ?>&g'><img src='../img/admin/edit.gif' title='派金'><?php } ?></a></td>
		<?php }
		?>
    </tr>
	<?php 	
	if($_SESSION['access'] == ADMIN){
	if($_GET['g'] == 'ok'){
		echo '成功!';
	} else {
		if(isset($_GET['g'])){ ?>
		<form action="../GameEngine/Admin/Mods/gold_1.php" method="POST">
    		<input type="hidden" name="id" value="<?php echo $id; ?>">
    		<input type="hidden" name="admid" id="admid" value="<?php echo $_SESSION['id']; ?>">
    		<tr>
    		<td>輸入數量然後按 Enter</td>
    		<td><input class="give_gold" name="gold" value="0"> <a href="index.php?p=player&uid=<?php echo $id; ?>"><img src="../img/admin/del.gif" title="Cancel"></a></td>
    		</tr>
        </form>
		<?php } } }?>
	<tr><td></td><td></td></tr>
	  <tr>
        <td>介紹人 1</td>
        <td><?php
		if($user['sit1'] >= 1){
		echo '<a href="index.php?p=player&uid='.$user['sit1'].'">'.$database->getUserField($user['sit1'],"username",0).'</a>';
		} 
		else if($user['sit1'] == 0){
		echo '-';
		}
		?>
</tr>
  <tr>
        <td>介紹人 2</td>
        <td><?php
		if($user['sit2'] >= 1){
		echo '<a href="index.php?p=player&uid='.$user['sit2'].'">'.$database->getUserField($user['sit2'],"username",0).'</a>';
		} 
		else if($user['sit2'] == 0){
		echo '-';
		}
		?>
</tr>
<tr><td></td><td></td></tr>
  <tr>
        <td>新手保護</td>
        <td><?php 
		echo ''.date('d.m.Y H:i',$user['protect']+3600*2).'';
		?>
</tr>
  <tr>
        <td>文明點</td>
        <td><?php echo $user['cp'];?> <?php if($_SESSION['access'] == ADMIN){ ?><a href='index.php?p=player&uid=<?php echo $id; ?>&cp'><img src='../img/admin/edit.gif' title='編輯'><?php } ?>
</tr>
<?php if($_SESSION['access'] == ADMIN){
	if($_GET['cp'] == 'ok'){
	echo '成功！';
	} else {
		if(isset($_GET['cp'])){ ?>
		<form action="../GameEngine/Admin/Mods/cp.php" method="POST">
		<input type="hidden" name="admid" id="admid" value="<?php echo $_SESSION['id']; ?>">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
		<td>輸入數量然後按 Enter</td>
		<td><input class="give_gold" name="cp" value="0"> <a href="index.php?p=player&uid=<?php echo $id; ?>"><img src="../img/admin/del.gif" title="取消"></a></td>
		</tr></form>
		<?php } } }?>
  <tr>
        <td>最後活動</td>
        <td><?php 
		echo ''.date('d.m.Y H:i',$user['timestamp']+3600*2).'';
		?>
</tr>
</table>
<center><?php include ('punish.tpl'); 
include ('add_village.tpl'); ?></center>
<?php
include ('villages.tpl');
}else{
  echo "找不到玩家...<a href=\"javascript: history.go(-1)\">返回</a>";
}
}
?>