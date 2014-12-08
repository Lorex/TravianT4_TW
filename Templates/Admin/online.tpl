<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       online.tpl                                                  ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<?php
$active = $admin->getUserActive(); 
?>
<style>
.del {width:12px; height:12px; background-image: url(img/admin/icon/del.gif);} 
</style>  

<table id="member"> 
  <thead>
    <tr>
        <th colspan="6">在線玩家 (<?php echo count($active);?>)</th>
    </tr>
  </thead>    
    <tr>
        <td>玩家 [ID]</td>
        <td>時間</td>
        <td>種族</td> 
        <td>人口</td> 
        <td>村莊數</td> 
        <td>金</td>  
    </tr>
<?php 
if($active){         
for ($i = 0; $i <= count($active)-1; $i++) {
$uid = $database->getUserField($active[$i]['username'],'id',1);
$varray = $database->getProfileVillages($uid);
$totalpop = 0;
foreach($varray as $vil) {
	$totalpop += $vil['pop'];
}
		if($active[$i]['tribe'] == 1){
		$tribe = "羅馬人";
		} else if($active[$i]['tribe'] == 2){
		$tribe = "條頓人";
		} else if($active[$i]['tribe'] == 3){
		$tribe = "高盧人";
		} else if($active[$i]['tribe'] == 4){
		$tribe = "自然界";
		} else if($active[$i]['tribe'] == 5){
		$tribe = "賴達族";
		}
echo '
    <tr>
        <td><a href="?p=player&uid='.$uid.'">'.$active[$i]['username'].' ['.$active[$i]['access'].']</a></td>
        <td>'.date("d.m.y H:i:s",$active[$i]['timestamp']).'</td>
        <td>'.$tribe.'</td>
        <td>'.$totalpop.'</td>
        <td>'.count($varray).'</td>
        <td><img src="../img/admin/gold.gif" class="gold" alt="Gold" title="這個玩家擁有 '.$active[$i]['gold'].' 金"/> '.$active[$i]['gold'].'</td>
    </tr>  
'; 
} 
}else{
echo '<tr><td  colspan="6" class="hab">無在線玩家</td></tr>';

} 

?>    
  
</table>
