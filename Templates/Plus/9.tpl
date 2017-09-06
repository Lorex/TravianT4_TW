<?php

    $golds = $database->getUserArray($session->username, 0);
    $goldlog = mysqli_query($con,"SELECT * FROM ".TB_PREFIX."gold_fin_log") or die(mysqli_error());

if($session->gold >= 5) {

	if($golds['b1'] <= time()) {
		mysqli_query($con,"UPDATE ".TB_PREFIX."users set b1 = '0' where `username`='".$session->username."'") or die(mysqli_error());
	}


	if($golds['b1'] == 0) {
		mysqli_query($con,"UPDATE ".TB_PREFIX."users set b1 = ".time()."+".PLUS_PRODUCTION." where `username`='".$session->username."'") or die(mysqli_error());
	} else {
		mysqli_query($con,"UPDATE ".TB_PREFIX."users set b1 = b1 + ".PLUS_PRODUCTION." where `username`='".$session->username."'") or die(mysqli_error());
	}


    mysqli_query($con,"UPDATE ".TB_PREFIX."users set gold = ".($session->gold-5)." where `username`='".$session->username."'") or die(mysqli_error());

    mysqli_query($con,"INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysqli_num_rows($goldlog)+1)."', '".$village->wid."', '+25%  Production: Wood')") or die(mysqli_error());

}

header("Location: plus.php?id=3");

 ?>