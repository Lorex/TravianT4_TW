<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       home.tpl                                                    ##
##  Developed by:  Dzoki                                                       ##
##  Reworked:      aggenekech												   ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<font size="3">
	<b>
		<center>
			歡迎來到
				<?php 
				if($_SESSION['access'] == MULTIHUNTER)
				{
					echo 'MULTIHUNTER';
				} 
				else if($_SESSION['access'] == ADMIN)
				{ 
					echo '管理員'; 
				} ?> 
			CONTROL PANEL
		</center>
	</b>
</font>
	
	
<br /><br /><br /><br />

	您好， <b><?php echo $_SESSION['username']; ?></b>, 您現在正以<b><font color="Red">管理員</font></b>權限登入</center>
	<br /><br /><br />
	
	<br /><br /><br /><br /><br />


	<font color="#c5c5c5" size="1">
		Credits: Akakori & Elmar<br />
		Fixed, remade and new features added by <b>Dzoki</b><br />
		Reworked by <b>aggenkeech</b>
	</font>