<?php

    $golds = $database->getUserArray($session->username, 0);

    $MyVilId = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."bdata WHERE `wid`='".$village->wid."'") or die(mysqli_error());
    $uuVilid = mysqli_fetch_array($MyVilId);
    $MyVilId2 = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."research WHERE `vref`='".$village->wid."'") or die(mysqli_error());
    $uuVilid2 = mysqli_fetch_array($MyVilId2);

    $goldlog = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."gold_fin_log") or die(mysqli_error());

if($session->gold >= 2) {

if (mysqli_num_rows($MyVilId) || mysqli_num_rows($MyVilId2)) {

mysqli_query($con,"UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type != '25' OR type != '26'") or die(mysqli_error());
mysqli_query($con,"UPDATE ".TB_PREFIX."research set timestamp = '1' where vref = '".$village->wid."'") or die(mysqli_error());



$done1 = "&nbsp;&nbsp; All construction orders and Researches in this village has been Completed";
    mysqli_query($con,"UPDATE ".TB_PREFIX."users set gold = ".($session->gold-2)." where `username`='".$session->username."'") or die(mysqli_error());
    mysqli_query($con,"INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysqli_num_rows($goldlog)+1)."', '".$village->wid."', 'Finish construction and research with gold')") or die(mysqli_error());

} else {
$done1 = "&nbsp;&nbsp; Nothing has been Completed";
    mysqli_query($con,"INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysqli_num_rows($goldlog)+1)."', '".$village->wid."', 'Failed construction and research with gold')") or die(mysqli_error());

}
} else {
        $done1 = "&nbsp;&nbsp;You need more Gold";
}


echo $done1;

header("Location: plus.php?id=3&g");

 ?>