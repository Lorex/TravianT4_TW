<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       results_villages.tpl                                        ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<?php
$result = $admin->search_village($_POST['s']);
?>
<table id="member">
  <thead>
    <tr>
        <th class="dtbl"><a href="">1 «</a></th><th>找到村莊 (<?php echo count($result);?>)</th><th class="dtbl"><a href="">» 100</a></th>
    </tr>
  </thead> 

</table>
<table id="profile">    
    <tr>
        <td class="b">ID</td>
        <td class="b">名稱</td>
        <td class="b">擁有者</td>         
        <td class="b">人口數</td>
		<td></td>
    </tr>
<?php      
if($result){  
for ($i = 0; $i <= count($result)-1; $i++) {    
	if($_SESSION['access'] == ADMIN){
	$delLink = '<a href="?action=delVil&did='.$varray[$i]['wref'].'" onClick="return del(\'did\','.$varray[$i]['wref'].');"><img src="../img/admin/del.gif" class="del"></a>';
  }else if($_SESSION['access'] == MULTIHUNTER){
	$delLink = '<a href="#"><img src="../img/admin/x.gif" class="del"></a>';
	}
echo '
    <tr>
        <td>'.$result[$i]["wref"].'</td>
        <td><a href="?p=village&did='.$result[$i]["wref"].'">'.$result[$i]["name"].'</a></td>
        <td><a href="?p=player&uid='.$result[$i]["owner"].'">'.$database->getUserField($result[$i]["owner"],'username',0).'</a></td>
        <td>'.$result[$i]["pop"].'</td>
		<td>'.$delLink.'</td>
    </tr>  
'; 
}}
else{  
echo '
    <tr>
        <td colspan="4">查無資料</td>  
    </tr>  
';
}
?>    
  
</table>
