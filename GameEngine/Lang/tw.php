<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANX                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianX)                                 //
//                              - TravianX = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//////////////////////////////////////////////////////////////////////////////////////////////////////
                                    //                         //
									//         CHINESE         //
			                        //      Author: Lorex      //
									/////////////////////////////

//MAIN MENU
define("TRIBE1","羅馬人"); 
define("TRIBE2","條頓人");
define("TRIBE3","高盧人"); 
define("TRIBE4","自然界"); 
define("TRIBE5","賴達族");
define("TRIBE6","野獸");
 
define("HOME","首頁"); 
define("INSTRUCT","教學");
define("ADMIN_PANEL","管理頁面");
define("MASS_MESSAGE","廣播短訊息");
define("LOGOUT","登出");
define("PROFILE","個人資料");
define("SUPPORT","支援");
define("UPDATE_T_10","更新前十名");
define("SYSTEM_MESSAGE","系統訊息");
define("TRAVIAN_PLUS","OC Travian <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");
define("CONTACT","聯絡我們!");

define("HEADER_MESSAGES","訊息");
define("HEADER_PLUS","Plus");
define("HEADER_ADMIN","管理員");
define("HEADER_PLUSMENU","Plus 目錄");
define("HEADER_NOTICES","報告");
define("HEADER_STATS","狀態");
define("HEADER_MAP","地圖");
define("HEADER_DORF2","城鎮中心");
define("HEADER_DORF1","資源");
define("HEADER_GOLD","金");
define("HEADER_SILVER","銀");
define("HEADER_NIGHT","晚上");
define("HEADER_DAY","白天");
define("HEADER_NOTICES_NEW","新報告");


define("SIDEINFO_ADVENTURES","拍賣");
define("SIDEINFO_AUCTIONS","冒險");
define("SIDEINFO_PROFILE","個人資料");
define("SIDEINFO_ALLIANCE","聯盟");
define("SIDEINFO_ALLY_FORUM","聯盟討論區");
define("SIDEINFO_CHANGE_TITLE","雙擊以重新命名村莊");
define("SIDEINFO_CHANGEVIL_TITLE","更改村莊名稱");
define("SIDEINFO_CHANGEVIL_LABEL","新村莊名稱");
define("SIDEINFO_CHANGEVIL_BTN","接受");

define("LOGOUT_TITLE","登出成功!");
define("LOGOUT_H4","感謝您的造訪");
define("LOGOUT_DESC","如果您的電腦為公用電腦，基於安全考量，建議您清除 Cookies");
define("LOGOUT_LINK","清除 Cookies");

define("LOGIN_WELCOME","歡迎來到伺服器");
define("LOGIN_USERNAME","帳號");
define("LOGIN_PASSWORD","密碼");
define("LOGIN_LOWRES_DESC","低解析度模式");
define("LOGIN_LOWRES_OPTION","");
define("LOGIN_LOWRES_NOTICE","");
define("LOGIN_PW_FORGOTTEN","忘記密碼");

define("LOGIN_PW_REQUEST","索回密碼");
define("LOGIN_PW_EMAIL","電子郵箱");
define("LOGIN_PW_BTN","Go");

define("REGISTER_USERINFO","註冊");
define("REGISTER_USERNAME","帳號");
define("REGISTER_EMAIL","電子郵箱");
define("REGISTER_PASSWORD","密碼");
define("REGISTER_STARTER","");
define("REGISTER_SELECT_TRIBE","選擇種族");
define("REGISTER_LOCATION","方位");
define("REGISTER_NE","東北");
define("REGISTER_NW","西北");
define("REGISTER_SE","東南");
define("REGISTER_SW","西南");
define("REGISTER_RANDOM","隨機");
define("REGISTER_MOREINFO","使用條款");
define("REGISTER_CLOSED","本伺服器目前暫不開放註冊。");

//MENU
define("REG","註冊");
define("FORUM","論壇");
define("CHAT","討論區");
define("IMPRINT","版本說明");
define("MORE_LINKS","更多");
define("TOUR","遊戲簡介");


//ERRORS
define("USRNM_EMPTY","(帳號不能為空)");
define("USRNM_TAKEN","(此帳號已被使用)");
define("USRNM_SHORT","(帳號長度最短限制：".USRNM_MIN_LENGTH." 字元)");
define("USRNM_CHAR","(帳號含有非法字元)");
define("PW_EMPTY","(密碼不能為空)");
define("PW_SHORT","(帳號長度最短限制：".PW_MIN_LENGTH." 字元)");
define("PW_INSECURE","(密碼不夠安全，請使用另外一個密碼)");
define("EMAIL_EMPTY","(電子郵箱不能為空)");
define("EMAIL_INVALID","(電子郵箱格式不正確)");
define("EMAIL_TAKEN","(本組電子郵箱已被使用)");
define("TRIBE_EMPTY","<li>請選擇種族</li>");
define("AGREE_ERROR","<li>您必須同意使用條款方可進行註冊。</li>");
define("LOGIN_USR_EMPTY","請輸入帳號");
define("LOGIN_PASS_EMPTY","請輸入密碼");
define("EMAIL_ERROR","電子郵箱不能為空");
define("PASS_MISMATCH","密碼不正確");
define("ALLI_OWNER","在刪除前請先指派盟主");
define("SIT_ERROR","介紹人早已設定");
define("USR_NT_FOUND","此帳號不存在");
define("LOGIN_PW_ERROR","密碼錯誤");
define("WEL_TOPIC","錦囊妙計");
define("ATAG_EMPTY","標籤不能為空");
define("ANAME_EMPTY","聯盟名稱不能為空");
define("ATAG_EXIST","此標籤已被使用");
define("ANAME_EXIST","此名稱已被使用");

//COPYRIGHT
define("TRAVIAN_COPYRIGHT","OC Travian, server by SDTServ.");

//BUILD.TPL
define("CUR_PROD","目前產量");
define("NEXT_PROD","產量在等級 ");

//BUILDINGS
define("B1","伐木場");
define("B1_DESC","伐木場是砍伐木材的地方。伐木場等級越高，單位時間內能砍伐的木材也就越多。");

define("B2","泥坑");
define("B2_DESC","泥坑是生產泥土的地方。泥坑等級越高，單位時間內生產的磚塊也就越多。");

define("B3","鐵礦場");
define("B3_DESC","鐵礦場是用來採集鋼鐵的。鐵礦場等級越高，每小時能採集的鋼鐵就越多。");

define("B4","農場");
define("B4_DESC","農場是為居民生產穀物的地方。農場等級越高，所能生產的穀物也就越多。");

//DORF1
define("WOOD","木材");
define("CLAY","磚塊");
define("IRON","鋼鐵");
define("CROP","穀物");
define("LEVEL","等級");
define("CROP_COM","耗糧");
define("PER_HR","每小時");
define("PROD_HEADER","產量");
define("MULTI_V_HEADER","村莊");
define("ANNOUNCEMENT","公告");
define("GO2MY_VILLAGE","返回我的村莊");
define("VILLAGE_CENTER","城鎮中心");
define("FINISH_GOLD","花費 2 金完成所有進行中的建築及研究?");
define("WAITING_LOOP","(等待佇列)");
define("HRS","(小時)");
define("DONE_AT","完成在");
define("CANCEL","取消");
define("LOYALTY","忠誠度:"); 
define("CALCULATED_IN","運算耗時");
define("SEVER_TIME","伺服器時間:");  

//QUEST
define("Q_CONTINUE","繼續下一個任務。");
define("Q_REWARD","任務獎勵:");
define("Q0","歡迎來到 ");
define("Q0_DESC","As I see you have been made chieftain of this little village. I will be your counselor for the first few days and never leave your (right hand) side.");
define("Q0_OPT1","開始第一個任務!");
define("Q0_OPT2","我想先自己到處看看");
define("Q0_OPT3","我不想進行任務");

define("Q1","任務 1: 伐木場");
define("Q1_DESC","在您的村莊附近有４個森林。在其中一個森林裡興建伐木場。對於我們的新聚落來說，木材是一個非常重要的資源。");
define("Q1_ORDER","任務目標:<\/p>興建伐木場。");
define("Q1_RESP","非常好，這樣您的人民就有木材可以使用了。我會協助您立即完成你的建築進度。");
define("Q1_DESC","在您的村莊附近有４個森林。在其中一個森林裡興建伐木場。對於我們的新聚落來說，木材是一個非常重要的資源。");
define("Q1_ORDER","任務目標:<\/p>興建伐木場。");
define("Q1_RESP","非常好，這樣您的人民就有木材可以使用了。我會協助您立即完成你的建築進度。");

define("Q1_REWARD","伐木場 立刻完成。");

define("Q2","任務 2: 穀物");
define("Q2_DESC","您的人民因為工作了一整天，肚子已經很餓了。為了使他們更有氣力工作，您需要將一塊個農場升級，增加穀物產量。完成升級後立刻回到這裡來。");
define("Q2_ORDER","任務目標:<\/p>升級一個農場。");
define("Q2_RESP","非常好。現在您的人民又有足夠的食糧了...");

define("Q3","任務 3: 您的村莊名稱");
define("Q3_DESC","請運用您的創作力，為您的村莊起一個名稱。\r\n<br \/><br \/>\r\n在左方選單按「玩家資料」，然後選「個人資料」...");
define("Q3_ORDER","任務目標:<\/p>或許您可以幫您的村莊起一個更好的名稱。");
define("Q3_RESP","英雄所見略同！這是一個美好的村莊名稱。");

define("Q4","任務 4: 其他玩家");
define("Q4_DESC","您在 ". SERVER_NAME ." 會和無數玩家互動。在頂部清單按「統計」查閱自己的排名，然後在此輸入。");
define("Q4_ORDER","任務目標:<\/p>請查閱您的排名，然後在此輸入它");
define("Q4_BUTN","完成任務");
define("Q4_RESP","答對了！這就是您的排名。");

define("Q5","任務 5: 兩項建築任務");
define("Q5_DESC","您需要興建一個鐵礦場和一個泥坑。要知道，鋼鐵和磚塊常常不足。");
define("Q5_ORDER","任務目標:<\/p><ul><li>* 升級一個鐵礦場<\/li><li>* 升級一個泥坑<\/li><\/ul>");
define("Q5_RESP","您應該發現，完成建築任務需要頗長時間。但即使您在離線狀態，". SERVER_NAME ." 世界依然繼續運作；就算只是數個月的時間，這裡總會有很多新奇事物讓您發現。\r\n<br \/><br \/>\r\n最好偶爾留意一下您的村莊以及委派新任務給您的人民。");

define("Q6","訊息");
define("Q6_DESC","您可以透過通訊系統與其他玩家談話。我已送出一條訊息給您，看完後再回到這裡。");
define("Q6_ORDER","任務目標:<\/p>看新訊息");
define("Q6_RESP","您收到了？很好");

//define("Q5","任務 5: Two Building Orders");
//define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
//define("Q5_ORDER","任務目標:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
//define("Q5_RESP","As you noticed, building orders take rather long. The world of ". SERVER_NAME ." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.\r\n<br \/><br \/>\r\nThe best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
// HEROE UNIT
define("U0","Hero");

//ROMAN UNITS
define("U1","Legionnaire");
define("U2","Praetorian");
define("U3","Imperian");
define("U4","Equites Legati");
define("U5","Equites Imperatoris");
define("U6","Equites Caesaris");
define("U7","Battering Ram");
define("U8","Fire Catapult");
define("U9","Senator");
define("U10","Settler");

//TEUTON UNITS
define("U11","Clubswinger");
define("U12","Spearman");
define("U13","Axeman");
define("U14","Scout");
define("U15","Paladin");
define("U16","Teutonic Knight");
define("U17","Ram");
define("U18","Catapult");
define("U19","Chief");
define("U20","Settler");

//GAUL UNITS
define("U21","Phalanx");
define("U22","Swordsman");
define("U23","Pathfinder");
define("U24","Theutates Thunder");
define("U25","Druidrider");
define("U26","Haeduan");
define("U27","Ram");
define("U28","Trebuchet");
define("U29","Chieftain");
define("U30","Settler");
define("U99","Trap");

//NATURE UNITS
define("U31","Rat");
define("U32","Spider");
define("U33","Snake");
define("U34","Bat");
define("U35","Wild Boar");
define("U36","Wolf");
define("U37","Bear");
define("U38","Crocodile");
define("U39","Tiger");
define("U40","Elephant");

//NATARS UNITS
define("U41","Pikeman");
define("U42","Thorned Warrior");
define("U43","Guardsman");
define("U44","Birds Of Prey");
define("U45","Axerider");
define("U46","Natarian Knight");
define("U47","War Elephant");
define("U48","Ballista");
define("U49","Natarian Emperor");
define("U50","Natarian Settler");

//MONSTER UNITS
define("U51","Monster Peon");
define("U52","Monster Hunter");
define("U53","Monster Warrior");
define("U54","Ghost");
define("U55","Monster Steed");
define("U56","Monster War Steed");
define("U57","Monster Ram");
define("U58","Monster Catapult");
define("U59","Monster Chief");
define("U60","Monster Settler");

//INDEX.php
define("LOGIN","Login");
define("PLAYERS","Players");
define("ONLINE","Online");
define("TUTORIAL","Tutorial");
define("PLAYER_STATISTICS","Player statistics");
define("TOTAL_PLAYERS","".PLAYERS." in total");
define("ACTIVE_PLAYERS","Active players");
define("ONLINE_PLAYERS","".PLAYERS." online");
define("MP_STRATEGY_GAME","".SERVER_NAME." - the multiplayer strategy game");
define("WHAT_IS","".SERVER_NAME." is one of the most popular browser games in the world. As a player in ".SERVER_NAME.", you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.");
define("REGISTER_FOR_FREE","Register here for free!");
define("LATEST_GAME_WORLD","Latest game world");
define("LATEST_GAME_WORLD2","Register on the latest<br/>game world and enjoy<br/>the advantages of<br/>being one of the<br/>first players.");
define("PLAY_NOW","Play ".SERVER_NAME." now");
define("LEARN_MORE","Learn more <br/>about ".SERVER_NAME."!");
define("LEARN_MORE2","Now with a revolutionised<br>server system, completely new<br>graphics <br>This clone is The Shiz!");
define("COMUNITY","Community");
define("BECOME_COMUNITY","Become part of our community now!");
define("BECOME_COMUNITY2","Become a part of one of<br>the biggest gaming<br>communities in the<br>world.");
define("NEWS","News");
define("SCREENSHOTS","Screenshots");
define("LEARN1","Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.");
define("LEARN2","Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.");
define("LEARN3","View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.");
define("LEARN4","Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.");
define("LEARN5","Receive detailed reports about your adventures, trades and battles. Don't forget to check the brand new reports about the happenings taking place in your surroundings.");
define("LEARN6","Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.");
define("LOGIN_TO","Log in to ". SERVER_NAME);
define("REGIN_TO","Register in ". SERVER_NAME);
define("P_ONLINE","Players online: ");
define("P_TOTAL","Players in total: ");
define("CHOOSE","Please choose a server.");
define("STARTED"," The server started ". round((time()-COMMENCE)/86400) ." days ago.");

//ANMELDEN.php
define("NICKNAME","Nickname");
define("EMAIL","Email");
define("PASSWORD","Password");
define("ROMANS","Romans");
define("TEUTONS","Teutons");
define("GAULS","Gauls");
define("NW","North West");
define("NE","North East");
define("SW","South West");
define("SE","South East");
define("RANDOM","random");
define("ACCEPT_RULES"," I accept the game rules and general terms and conditions.");
define("ONE_PER_SERVER","Each player may only own ONE account per server.");
define("BEFORE_REGISTER","Before you register an account you should read the <a href='../anleitung.php' target='_blank'>instructions</a> of TravianX to see the specific advantages and disadvantages of the three tribes.");
define("BUILDING_UPGRADING","Building:");
define("HOURS","hours");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","Troop Movements:");
define("ARRIVING_REINF_TROOPS","Arriving reinforcing troops");
define("ARRIVING_REINF_TROOPS_SHORT","Reinf.");
define("OWN_ATTACKING_TROOPS","Own attacking troops");
define("ATTACK","Attack");
define("OWN_REINFORCING_TROOPS","Own reinforcing troops");
define("TROOPS_DORF","Troops:");


//LOGIN.php
define("COOKIES","You must have cookies enabled to be able to log in. If you share this computer with other people you should log out after each session for your own safety.");
define("NAME","Name");
define("PW_FORGOTTEN","Password forgotten?");
define("PW_REQUEST","Then you can request a new one which will be sent to your email address.");
define("PW_GENERATE","All fields required");
define("EMAIL_NOT_VERIFIED","Email not verified!");
define("EMAIL_FOLLOW","Follow this link to activate your account.");
define("VERIFY_EMAIL","Verify Email.");
define("LOGIN_SERVER_START","Server will start in:");


//404.php
define("NOTHING_HERE","Nothing here!");
define("WE_LOOKED","We looked 404 times already but can't find anything");

//TIME RELATED
define("CALCULATED","Calculated in");
define("SERVER_TIME","Server time:");

//MASSMESSAGE.php
define("MASS","Message Content");
define("MASS_SUBJECT","Subject:");
define("MASS_COLOR","Message color:");
define("MASS_REQUIRED","All fields required");
define("MASS_UNITS","Images (units):");
define("MASS_SHOWHIDE","Show/Hide");
define("MASS_READ","Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","Confirmation");
define("MASS_REALLY","Do you really want to send MassIGM?");
define("MASS_ABORT","Aborting right now");
define("MASS_SENT","Mass IGM was sent");

// Menu items

	define("GAME_TOUR","Game Tour");
	define("FORUM","Forum");
	define("FORUM_LINK","http://forum.travian.com");
	define("MORE_GAMES","More games");
	define("REGISTER","Register");
	define("LOGIN","Login");
	define("MANUAL","Manual");
	define("TUTORIAL","Tutorial");
	define("SCREENSHOTS","Screenshots");
	define("FAQ","FAQ");
	define("SPIELREGELN","Game Rules");
	define("AGB","Terms");
	define("IMPRINT","Imprint");
	define("SUPPORT","Support");
	define("LINKS","Links");
	define("HOME","Homepage");
	define("PROFILE","Profile");
	define("INSTRUCTIONS","Instructions");
	define("ADMIN_PANEL","Admin Panel");
	define("MULTIHUNTER_PANEL","Multihunter Panel");
	define("MASS_MESSAGE","Mass Message");
	define("UPDATE_TOP_TEN","Update Top 10");
	define("SYSTEM_MESSAGE","System Message");
	define("LOGOUT","Logout");
	define("HELP","Help");
	define("TRAVIAN_PLUS",SERVER_NAME." <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");

// Index

	define("WELCOME","Welcome to ".SERVER_NAME);
	define("PLAY_NOW","Play now, for free!");
	define("WHAT_IS","What is ".SERVER_NAME);
	define("GAME_DESCRIPTION",SERVER_NAME." is a <b>browser game</b> featuring an engaging ancient world with thousands of other real players.</p><p>It`s <strong>free to play</strong> and requires <strong>no downloads</strong>.");
	define("CLICK_HERE","Click here to play ".SERVER_NAME);
	define("ABOUT","About the game");
	define("ABOUT1","You will begin as the chief of a tiny village and will embark on an exciting quest.");
	define("ABOUT2","Build up villages, wage wars or establish trade routes with your neighbours.");
	define("ABOUT3","Play with and against thousands of other real players and conquer the world of ".SERVER_NAME.".");
	define("NEWS","News");
	define("CHOOSE_WORLD","Choose your world");
	
// Index Travian 4

	define("","");

	$lang['index2']['description'] = 'Master the art of ancient tactics as Roman, Gaul or Teuton!';
	$lang['index2']['shop title'] = SERVER_NAME.' shop';
	$lang['index2']['shop'] = 'Go to shop';
	$lang['index2']['shop link'] = '#';
	$lang['index2']['facebook'] = 'http://www.facebook.com/ZravianX';
	$lang['index2']['strategy game'] = SERVER_NAME.' - the multiplayer strategy game';
	$lang['index2']['what is'] = SERVER_NAME.' is one of the most popular browser games in the world. As a player in '.SERVER_NAME.', you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.';
	$lang['index2']['register free'] = 'Register here for free!';
	$lang['index2']['title1'] = 'Latest game world';
	$lang['index2']['desc1'] = 'Register on the latest<br />game world and enjoy<br />the advantages of<br />being one of the<br />first players.';
	$lang['index2']['text1'] = 'Play '.SERVER_NAME.' now';
	$lang['index2']['link1'] = '#serverRegister';
	$lang['index2']['title2'] = 'The new '.SERVER_NAME;
	$lang['index2']['desc2'] = 'Now with a revolutionized<br />hero system,<br />completely new graphics<br />and an interactive<br />map!';
	$lang['index2']['text2'] = 'Explore the new '.SERVER_NAME;
	$lang['index2']['link2'] = '#serverRegister';
	$lang['index2']['title3'] = 'Community';
	$lang['index2']['desc3'] = 'Become a part of one<br />of the biggest gaming<br />communities in the<br />world.';
	$lang['index2']['text3'] = 'Become part of our community now!';
	$lang['index2']['link3'] = '#';
	$lang['index2']['learn more'] = 'Learn more<br />about '.SERVER_NAME.'!';
	$lang['index2']['strip1'] = 'Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.';
	$lang['index2']['strip2'] = 'Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.';
	$lang['index2']['strip3'] = 'View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.';
	$lang['index2']['strip4'] = 'Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.';
	$lang['index2']['strip5'] = 'Receive detailed reports about your adventures, trades and battles. Don\'t forget to check the brand new reports about the happenings taking place in your surroundings.';
	$lang['index2']['strip6'] = 'Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.';

// Screenshots Travian 4

	define("SCREENSHOTS_T4_TITLE1","Village centre");
	define("SCREENSHOTS_T4_TITLE2","Village overview");
	define("SCREENSHOTS_T4_TITLE3","The hero");
	define("SCREENSHOTS_T4_TITLE4","Building information");
	define("SCREENSHOTS_T4_TITLE5","Surrounding territories");
	define("SCREENSHOTS_T4_TITLE6","Battle report");
	define("SCREENSHOTS_T4_TITLE7","Medals system");
	define("SCREENSHOTS_T4_TITLE8","Task system");
	define("SCREENSHOTS_T4_DESC1","Your village could like this one day, becoming the starting point for your vast empire.");
	define("SCREENSHOTS_T4_DESC2","Wood, clay, iron and crop are the vital resources which will fuel the economy of your village and feed your people; they will provide you with the materials necessary for construction and war. With these valuable resources, you can train a powerful conquering army.");
	define("SCREENSHOTS_T4_DESC2","Lumber, clay, iron and crop are the vital resources which will fuel the economy of your village and feed your people; they will provide you with the materials necessary for construction and war. With these valuable resources, you can train a powerful conquering army.");

	define("SCREENSHOTS_T4_DESC3","You can send your hero to adventures, where he will have to face great danger and pass difficult challenges. If your hero is successful, he stands a chance of bringing something valuable home.");
	define("SCREENSHOTS_T4_DESC4","For it to become powerful and productive, your village will need a great number of buildings. At the beginning, choose well what you want to construct first, as resources are scarce.");
	define("SCREENSHOTS_T4_DESC5","Explore your surrounding territories in order to get to know your neighbors; you can opt for a path of peace, creating alliances and confederacies, or you can wage war and conquer the surrounding lands. There may be rich oases in your vicinity; conquer them to gain various valuable bonuses, but always be aware of the dangerous wild animals that inhabit them.");
	define("SCREENSHOTS_T4_DESC6","It is wise to train your army early on, so you can defend yourself and attack others. This way, you can raid more resources and build up your empire more quickly.");
	define("SCREENSHOTS_T4_DESC7","At the end of every week, the very best 10 players and alliances will be elected, topping in different categories; as a reward for their prowess they will receive medals, celebrating their achievements.");
	define("SCREENSHOTS_T4_DESC8","To assist you when you first start managing your empire, we have sent the Taskmaster; he will guide you with tips and advice in order to help you build up your village. Just click on the image of the Taskmaster to your left to activate him.");

	$lang['screenshots2']['desc1'] = 'Your village could like this one day, becoming the starting point for your vast empire.';
	$lang['screenshots2']['desc2'] = 'Wood, clay, iron and crop are the vital resources which will fuel the economy of your village and feed your people; they will provide you with the materials necessary for construction and war. With these valuable resources, you can train a powerful conquering army.';
	$lang['screenshots2']['desc2'] = 'Lumber, clay, iron and crop are the vital resources which will fuel the economy of your village and feed your people; they will provide you with the materials necessary for construction and war. With these valuable resources, you can train a powerful conquering army.';

	$lang['screenshots2']['desc3'] = 'You can send your hero to adventures, where he will have to face great danger and pass difficult challenges. If your hero is successful, he stands a chance of bringing something valuable home.';
	$lang['screenshots2']['desc4'] = 'For it to become powerful and productive, your village will need a great number of buildings. At the beginning, choose well what you want to construct first, as resources are scarce.';
	$lang['screenshots2']['desc5'] = 'Explore your surrounding territories in order to get to know your neighbors; you can opt for a path of peace, creating alliances and confederacies, or you can wage war and conquer the surrounding lands. There may be rich oases in your vicinity; conquer them to gain various valuable bonuses, but always be aware of the dangerous wild animals that inhabit them.';
	$lang['screenshots2']['desc6'] = 'It is wise to train your army early on, so you can defend yourself and attack others. This way, you can raid more resources and build up your empire more quickly.';
	$lang['screenshots2']['desc7'] = 'At the end of every week, the very best 10 players and alliances will be elected, topping in different categories; as a reward for their prowess they will receive medals, celebrating their achievements.';
	$lang['screenshots2']['desc8'] = 'To assist you when you first start managing your empire, we have sent the Taskmaster; he will guide you with tips and advice in order to help you build up your village. Just click on the image of the Taskmaster to your left to activate him.';

// Player statics

	define("TOTAL_PLAYERS","Players in total");
	define("PLAYERS_ACTIVE","Active players");
	define("PLAYERS_ONLINE","Players online");
	define("PLAYERS","Players");
	define("ACTIVE","Active");
	define("ONLINE","Online");
	define("PLAYER_STATISTICS","Players statistics");
	
//NOTICES
define("REPORT_SUBJECT","Subject:");
define("REPORT_ATTACKER","Attacker");
define("REPORT_DEFENDER","Defender");
define("REPORT_RESOURCES","Resources");
define("REPORT_FROM_VIL","from village");
define("REPORT_FROM_ALLY","from ally");
define("REPORT_SENT","Sent on:");
define("REPORT_SENDER","Sender");
define("REPORT_RECEIVER","Receiver");
define("REPORT_AT","At");
define("REPORT_TO","To");
define("REPORT_SEND_RES","send resources");
define("REPORT_DEL_BTN","delete report");
define("REPORT_DEL_QST","Are you sure that you want to delete the report?");
define("REPORT_WARSIM","combat simulator");
define("REPORT_ATK_AGAIN","return on the attack");
define("REPORT_TROOPS","Troops");
define("REPORT_REINF","Reinforecment");
define("REPORT_CASUALTIES","Casualties");
define("REPORT_PRISONERS","Prisoners");
define("REPORT_INFORMATION","information");
define("REPORT_BOUNTY","Bounty");
define("REPORT_CLOCK","Time");
define("REPORT_UPKEEP","Upkeep");
define("REPORT_PER_HOURS","per hour");
define("REPORT_SEND_REINF_TO","send reinforcement to village");

//added by Danter14

//Help.php
$lang['HELP1']['TITRE'] = "system help";
$lang['HELP1']['Partie_1'] = "FAQ - Answers";
$lang['HELP1']['Text_1'] = "Here you will find the answer to your question about Travian. If that does not satisfy you or seems incomplete or if you still missing elements, you can contact support game.";
$lang['HELP1']['Partie_2'] = "Rules of the game";
$lang['HELP1']['Text_2'] = "Rules of the game.";
$lang['HELP1']['Partie_3'] = "Contact the game medium";
$lang['HELP1']['Text_3'] = "If you have not found your answer: contact support play here.";
$lang['HELP1']['Partie_4'] = "More Questions";
$lang['HELP1']['Text_4'] ="Here you can ask your question about options or more payment systems.";
$lang['HELP1']['Partie_5'] = "Forum";
$lang['HELP1']['Text_5'] ="On the forum, chat with other players.";
$lang['HELP1']['Partie_6'] = "Quick information";
$lang['HELP1']['Text_6'] ="Here you can find short and quick information about the troops and buildings Travian";

?>
