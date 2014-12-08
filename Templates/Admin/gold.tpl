<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       gold.php                                                    ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

if($_SESSION['access'] < ADMIN) die("Access Denied: You are not Admin!");
?>

<?php $id = $_SESSION['id']; ?>

<h1>你可以在這裡將黃金 <?php if(ZRAVIANX4 == true){echo '或是銀子 ';} ?>給所有玩家。</h1>
<br />


<form action="../GameEngine/Admin/Mods/gold.php" method="POST">
	<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

	<br /><br /><br /><br /><br /><br /><br /><br /><br />

	<center><b>請輸入你要發派的金子數量?</b></center>
	<center>
		<br />
		<input class="give_gold" name="gold" id="gold" value="20" maxlength="4">&nbsp;<img src="../img/admin/gold.gif" class="gold" alt="Gold" title="Gold"/>&nbsp;&nbsp;<font color="gray" size="1">輸入數量然後按 "Enter"<img src="../img/admin/enter.gif" class="enter" alt="Enter" title="Enter"/></font>
	</center>
</form>
<?php
    if(isset($_GET['g'])) {

          echo '<br /><br /><font color="Red"><b>發送成功</font></b>';
		  }
?>


<form action="../GameEngine/Admin/Mods/silver.php" method="POST">
	<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

	<br /><br /><br /><br /><br /><br /><br /><br /><br />

	<center><b>請輸入你要發派的銀子數量?</b></center>
	<center>
		<br />
		<input class="give_gold" name="silver" id="silver" value="20" maxlength="4">&nbsp;<img src="../img/admin/silver.gif" class="silver" alt="Silver" title="Silver"/>&nbsp;&nbsp;<font color="gray" size="1">輸入數量然後按 "Enter"<img src="../img/admin/enter.gif" class="enter" alt="Enter" title="Enter"/></font>
	</center>
</form>
<?php
    if(isset($_GET['s'])) {

          echo '<br /><br /><font color="Red"><b>發送成功</font></b>';
		  }
?>
