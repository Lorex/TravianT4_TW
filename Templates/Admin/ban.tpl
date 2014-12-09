<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       ban.tpl                                                     ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<style>
.del {width:12px; height:12px; background-image: url(../../img/admin/icon/del.gif);} 
</style>
<form action="" method="get">
<input name="action" type="hidden" value="addBan">
<table id="member" cellpadding="1" cellspacing="1">
    <thead>
    <tr>
        <th colspan="6">封禁</th>
    </tr>                                       
    </thead>
    <tr>
        <td>玩家 ID</td>                                    
        <td>                                                   
          <input type="text" class="fm" name="uid" value="<?php echo $_GET['uid'];?>">
        </td>      
    </tr>
    <tr>
        <td>理由</td>
        <td>
        <select name="reason" class="fm">         
          <?php     
          $arr = array('囤積資源','作弊','嘗試駭取','Bug','不雅名稱','多帳號','不雅言論');            
          foreach($arr as $r){
            echo '<option value="'.$r.'">'.$r.'</option>';                         
          }
          ?>
          </select>    
        </td>      
    </tr>       
    <tr>
        <td>時間</td>
        <td>
          <select name="time" class="fm">         
          <?php
          $arr = array(1,2,5,10,12);             
          foreach($arr as $r){
            echo '<option value="'.($r*3600).'">'.$r.' 小時</option>';
          }       
          $arr2 = array(1,2,5,10,30,50,90);
          foreach($arr2 as $r){
            echo '<option value="'.($r*3600*24).'">'.$r.' 天</option>';
          }
            echo '<option value="">永遠</option>';
          ?>
          </select>
        </td>      
    </tr>
    <tr>
        <td colspan="2" class="on"><input type="submit" value="送出"></td>     
    </tr>
</table>
</form>
<?php $bannedUsers = $admin->search_banned(); ?>
<br>
<table id="member" cellpadding="1" cellspacing="1">
    <thead>
    <tr>
        <th colspan="6">封禁清單</th>
    </tr>                                       
    </thead><tbody>
    <tr>
        <td><b>玩家</b></td>
        <td><b>時間 (從 / 到)</b></td>      
        <td><b>原因</b></td> 
        <td></td>        
    </tr>
    <?php
    if($bannedUsers){
    for ($i = 0; $i <= count($bannedUsers)-1; $i++) {
      if($database->getUserField($bannedUsers[$i]['uid'],'username',0)==''){
        $name = $bannedUsers[$i]['name'];
        $link = "<span class=\"c b\">[".$name."]</span>";
      }else{
        $name = $database->getUserField($bannedUsers[$i]['uid'],'username',0);
        $link = '<a href="?p=player&uid='.$bannedUsers[$i]['uid'].'">'.$name.'<a/>';
      } 
      if($bannedUsers[$i]['end']){$end = date("d.m.y H:i",$bannedUsers[$i]['end']);}else{$end = '*';}     
    echo '                                           
    <tr>
        <td>'.$link.'</td> 
        <td ><span class="f7">'.date("d.m.y H:i",$bannedUsers[$i]['time']).' - '.$end.'</td>     
        <td>'.$bannedUsers[$i]['reason'].'</td>
        <td class="on"><a href="?action=delBan&uid='.$bannedUsers[$i]['uid'].'&id='.$bannedUsers[$i]['id'].'" onClick="return del(\'unban\',\''.$name.'\')"><img src="img/admin/del.gif" class="del" title="cancel" alt="cancel"></img></a></td>           
    </tr>
    ';
    }
    }else{
    echo '<tr><td colspan="6" class="on">沒有結果...</td></tr>';
    }
    ?>
    </tbody>
</table>