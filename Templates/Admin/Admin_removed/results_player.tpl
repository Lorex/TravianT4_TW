<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       results_player.tpl                                          ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<?php
$result = $admin->search_player($_POST['s']);
?>
<table id="member">
  <thead>
    <tr>
        <th class="dtbl"><a href="">1 «</a></th><th>找到玩家 (<?php echo count($result);?>)</th><th class="dtbl"><a href="">» 100</a></th>
    </tr>
  </thead> 

</table>
<table id="profile">    
    <tr>
        <td class="b">玩家 ID</td>
        <td class="b">玩家</td>
        <td class="b">村莊數</td>
        <td class="b">人口</td>
    </tr>
<?php      
if($result){  
for ($i = 0; $i <= count($result)-1; $i++) {    
$varray = $database->getProfileVillages($result[$i]["id"]);
$totalpop = 0;
foreach($varray as $vil) {
	$totalpop += $vil['pop'];
}
echo '
    <tr>
        <td>'.$result[$i]["id"].'</td>
        <td><a href="?p=player&uid='.$result[$i]["id"].'">'.$result[$i]["username"].'</a></td>
        <td>'.count($varray).'</td>
        <td>'.$totalpop.'</td>
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
