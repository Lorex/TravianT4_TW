<?php
//////////////     made by alq0rsan   /////////////////////////
    $MyGold = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."users WHERE `username`='".$session->username."'") or die(mysqli_error());
    $golds = mysqli_fetch_array($MyGold);

    $MyVilId = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."vdata WHERE `wref`='".$village->wid."'") or die(mysqli_error());
    $uuVilid = mysqli_fetch_array($MyVilId);

    $totalT = ($T1+$T2+$T3+$T4);
    $totalR = ($uuVilid['6']+$uuVilid['7']+$uuVilid['8']+$uuVilid['10']);

    $goldlog = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."gold_fin_log") or die(mysqli_error());

if($totalT <= $totalR) {
mysqli_query($con,"UPDATE ".TB_PREFIX."vdata set wood = '".$T1."' where `wref`='".$village->wid."'") or die(mysqli_error());
mysqli_query($con,"UPDATE ".TB_PREFIX."vdata set clay = '".$T2."' where `wref`='".$village->wid."'") or die(mysqli_error());
mysqli_query($con,"UPDATE ".TB_PREFIX."vdata set iron = '".$T3."' where `wref`='".$village->wid."'") or die(mysqli_error());
mysqli_query($con,"UPDATE ".TB_PREFIX."vdata set crop = '".$T4."' where `wref`='".$village->wid."'") or die(mysqli_error());
    mysqli_query($con,"UPDATE ".TB_PREFIX."users set gold = ".($session->gold-3)." where `username`='".$session->username."'") or die(mysqli_error());
    mysqli_query($con,"INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysqli_num_rows($goldlog)+1)."', '".$village->wid."', 'trade 1:1')") or die(mysqli_error());
echo "";
} else {
echo "";
    mysqli_query($con,"INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysqli_num_rows($goldlog)+1)."', '".$village->wid."', 'Failed trade 1:1')") or die(mysqli_error());

}

include("Templates/Plus/3.tpl");

 ?>