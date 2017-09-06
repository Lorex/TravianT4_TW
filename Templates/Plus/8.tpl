<?php

    $golds = $database->getUserArray($session->username, 0);
    $goldlog = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."gold_fin_log") or die(mysqli_error());

if($session->gold >= 10) {

	if($golds['plus'] <= time()) {
		mysqli_query($con,"UPDATE ".TB_PREFIX."users set plus = '0' where `username`='".$session->username."'") or die(mysqli_error());
	}


	if($golds['plus'] == 0) {
		mysqli_query($con,"UPDATE ".TB_PREFIX."users set plus = ".time()."+".PLUS_TIME." where `username`='".$session->username."'") or die(mysqli_error());
	} else {
		mysqli_query($con,"UPDATE ".TB_PREFIX."users set plus = plus + ".PLUS_TIME." where `username`='".$session->username."'") or die(mysqli_error());
	}


    mysqli_query($con,"UPDATE ".TB_PREFIX."users set gold = ".($session->gold-10)." where `username`='".$session->username."'") or die(mysqli_error());

    mysqli_query($con,"INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysqli_num_rows($goldlog)+1)."', '".$village->wid."', 'Activate Plus+ Account')") or die(mysqli_error());

}

header("Location: plus.php?id=3");

 ?>