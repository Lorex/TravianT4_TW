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
define("U0","英雄");

//ROMAN UNITS
define("U1","古羅馬步兵");
define("U2","禁衛兵");
define("U3","帝國兵");
define("U4","使者騎士");
define("U5","帝國騎士");
define("U6","將軍騎士");
define("U7","衝撞車");
define("U8","火焰投石機");
define("U9","參議員");
define("U10","開拓者");

//TEUTON UNITS
define("U11","棍棒兵");
define("U12","矛兵");
define("U13","斧頭兵");
define("U14","偵查兵");
define("U15","遊俠");
define("U16","條頓騎士");
define("U17","衝撞車");
define("U18","投石車");
define("U19","司令官");
define("U20","開拓者");

//GAUL UNITS
define("U21","方陣兵");
define("U22","劍士");
define("U23","探路者");
define("U24","雷法師");
define("U25","德魯伊騎兵");
define("U26","海頓聖騎");
define("U27","衝撞車");
define("U28","投石車");
define("U29","族長");
define("U30","開拓者");
define("U99","陷阱");

//NATURE UNITS
define("U31","老鼠");
define("U32","蜘蛛");
define("U33","毒蛇");
define("U34","蝙蝠");
define("U35","野豬");
define("U36","野狼");
define("U37","灰熊");
define("U38","鱷魚");
define("U39","老虎");
define("U40","大象");

//NATARS UNITS
define("U41","賴達矛兵");
define("U42","賴達戰士");
define("U43","賴達守衛者");
define("U44","賴達獵鷹");
define("U45","賴達斧騎");
define("U46","賴達聖騎");
define("U47","賴達戰象");
define("U48","賴達投石機");
define("U49","賴達酋長r");
define("U50","賴達開拓者");

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
define("U60","Monster 開拓者");

//INDEX.php
define("LOGIN","登入");
define("PLAYERS","");
define("ONLINE","在線");
define("TUTORIAL","新手教學");
define("PLAYER_STATISTICS","玩家狀態");
define("TOTAL_PLAYERS","註冊玩家 ".PLAYERS);
define("ACTIVE_PLAYERS","活躍玩家");
define("ONLINE_PLAYERS","".PLAYERS." 在線");
define("MP_STRATEGY_GAME","".SERVER_NAME." - 大型多人即時戰略遊戲");
define("WHAT_IS","".SERVER_NAME." 是架構於瀏覽器的遊戲，".SERVER_NAME."世界內有數千至數萬名玩家，一名玩家就是一個村莊的領主，他們要不斷攻城掠池，以外交、權謀、諜戰、結盟、分工等等謀略，成為中世紀霸主。");
define("REGISTER_FOR_FREE","完全免費!");
define("LATEST_GAME_WORLD","最新的遊戲世界");
define("LATEST_GAME_WORLD2","你可以在最新的遊戲世界註冊帳號，另你可比<br />別人更早發展你的勢力。");
define("PLAY_NOW","立即加入 ".SERVER_NAME." !");
define("LEARN_MORE","了解 ".SERVER_NAME."<br/>更多 !");
define("LEARN_MORE2","全新的英雄系統、華麗的遊戲介面及強化的<br />互動地圖。");
define("COMUNITY","社群");
define("BECOME_COMUNITY","加入我們社群!");
define("BECOME_COMUNITY2","成為世界最大的遊戲社群一份子。");
define("NEWS","新聞");
define("SCREENSHOTS","遊戲畫面");
define("LEARN1","發展你的資源田以增強村莊的經濟力。資源是發展村莊及軍隊時不可或缺的。");
define("LEARN2","發展及升級你的建築物可讓你獲得更多的資源和訓練更強的軍隊！");
define("LEARN3","常常留意你的四周，除了可結交戰友外，亦有不少敵人對你虎視眈眈。");
define("LEARN4","在各範疇中發展你的帝國，每星期我們都會送給全服中不同方面的最佳十名玩家獨一無二的獎勵。");
define("LEARN5","留意報告的內容，你可得知你帝國內的詳細資料。");
define("LEARN6","跟其他玩家互動，認識多一位朋友比樹立多一位敵人要好得多。");
define("LOGIN_TO","登入 ". SERVER_NAME);
define("REGIN_TO","註冊 ". SERVER_NAME);
define("P_ONLINE","在線玩家: ");
define("P_TOTAL","註冊玩家: ");
define("CHOOSE","請選擇伺服器");
define("STARTED","伺服器已於 ". round((time()-COMMENCE)/86400) ." 天前啟動");

//ANMELDEN.php
define("NICKNAME","暱稱");
define("EMAIL","電子郵箱");
define("PASSWORD","密碼");
define("ROMANS","羅馬人");
define("TEUTONS","條頓人");
define("GAULS","高盧人");
define("NW","西北");
define("NE","東北");
define("SW","西南");
define("SE","東南");
define("RANDOM","隨機");
define("ACCEPT_RULES"," 我接受使用協議。");
define("ONE_PER_SERVER","每一位使用者只能擁有一個帳號");
define("BEFORE_REGISTER","在你註冊帳號以前，你可以先閱讀 <a href='../anleitung.php' target='_blank'>伺服器介紹</a> 以確認三個種族的優劣及特性。");
define("BUILDING_UPGRADING","建築中:");
define("HOURS","小時");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","移動中的軍隊:");
define("ARRIVING_REINF_TROOPS","增援抵達中");
define("ARRIVING_REINF_TROOPS_SHORT","援軍");
define("OWN_ATTACKING_TROOPS","進攻中的軍隊");
define("ATTACK","攻擊");
define("OWN_REINFORCING_TROOPS","增援中的軍隊");
define("TROOPS_DORF","軍隊:");


//LOGIN.php
define("COOKIES","您必須啟用 Cookie 以登入，如果您使用的是公用電腦，基於安全考量請記得登出。");
define("NAME","帳號");
define("PW_FORGOTTEN","忘記密碼?");
define("PW_REQUEST","然後你可以申請一個新的電子郵箱地址");
define("PW_GENERATE","所有欄位皆為必填");
define("EMAIL_NOT_VERIFIED","電子郵箱未啟用!");
define("EMAIL_FOLLOW","點此連結以啟用您的帳號");
define("VERIFY_EMAIL","電子郵箱驗證");
define("LOGIN_SERVER_START","伺服器將於以下時間內啟動:");


//404.php
define("NOTHING_HERE","找不到頁面!");
define("WE_LOOKED","我們已經搜尋了 404 次，但是還是找不到任何東西 :(");

//TIME RELATED
define("CALCULATED","運算耗時");
define("SERVER_TIME","伺服器時間:");

//MASSMESSAGE.php
define("MASS","訊息內容");
define("MASS_SUBJECT","主旨:");
define("MASS_COLOR","訊息顏色:");
define("MASS_REQUIRED","所有欄位皆為必填");
define("MASS_UNITS","圖片 (單位):");
define("MASS_SHOWHIDE","顯示 / 隱藏");
define("MASS_READ","注意: 添加表情符號後，您必須將訊息插入在其前或其後，否則圖片將無法正常顯示。");
define("MASS_CONFIRM","確認");
define("MASS_REALLY","您確定要送出廣播訊息?");
define("MASS_ABORT","取消");
define("MASS_SENT","廣播訊息已寄出");

// Menu items

	define("GAME_TOUR","遊戲導覽");
	define("FORUM","論壇");
	define("FORUM_LINK","http://220.132.233.59");
	define("MORE_GAMES","更多遊戲");
	define("REGISTER","註冊");
	define("LOGIN","登入");
	define("MANUAL","幫助");
	define("TUTORIAL","新手教學");
	define("SCREENSHOTS","遊戲畫面");
	define("FAQ","FAQ");
	define("SPIELREGELN","遊戲規則");
	define("AGB","使用條款");
	define("IMPRINT","重要");
	define("SUPPORT","支援");
	define("LINKS","連結");
	define("HOME","首頁");
	define("PROFILE","個人資料");
	define("INSTRUCTIONS","說明");
	define("ADMIN_PANEL","管理員後台");
	define("MULTIHUNTER_PANEL","MH 後台");
	define("MASS_MESSAGE","廣播訊息");
	define("UPDATE_TOP_TEN","更新前十名");
	define("SYSTEM_MESSAGE","系統訊息");
	define("LOGOUT","登出");
	define("HELP","幫助");
	define("TRAVIAN_PLUS",SERVER_NAME." <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");

// Index

	define("WELCOME","歡迎來到 ".SERVER_NAME);
	define("PLAY_NOW","完全免費!");
	define("WHAT_IS",SERVER_NAME." 是什麼?");
	define("GAME_DESCRIPTION",SERVER_NAME." 是架構於瀏覽器的遊戲，TRAVIAN世界內有數千至數萬名玩家，一名玩家就是一個村莊的領主，他們要不斷攻城掠池，以外交、權謀、諜戰、結盟、分工等等謀略，成為中世紀霸主。");
	define("CLICK_HERE","點這裡開始玩 ".SERVER_NAME);
	define("ABOUT","遊戲導覽");
	define("ABOUT1","You will begin as the chief of a tiny village and will embark on an exciting quest.");
	define("ABOUT2","Build up villages, wage wars or establish trade routes with your neighbours.");
	define("ABOUT3","Play with and against thousands of other real players and conquer the world of ".SERVER_NAME.".");
	define("NEWS","最新消息");
	define("CHOOSE_WORLD","選擇世界");
	
// Index Travian 4

	define("","");

	$lang['index2']['description'] = '掌握古老的羅馬、條頓、高盧的戰爭藝術!';
	$lang['index2']['shop title'] = SERVER_NAME.' 商店';
	$lang['index2']['shop'] = '進入商店';
	$lang['index2']['shop link'] = '#';
	$lang['index2']['facebook'] = 'https://www.facebook.com/lorex.yang';
	$lang['index2']['strategy game'] = SERVER_NAME.' - 網頁遊戲 - 羅馬、高盧和條頓';
	$lang['index2']['what is'] = SERVER_NAME.' 是架構於瀏覽器的遊戲， '.SERVER_NAME.'世界內有數千至數萬名玩家，一名玩家就是一個村莊的領主，他們要不斷攻城掠池，以外交、權謀、諜戰、結盟、分工等等謀略，成為中世紀霸主。';
	$lang['index2']['register free'] = '免費註冊!';
	$lang['index2']['title1'] = '最後登入';
	$lang['index2']['desc1'] = '你可以在最新的遊戲世界註冊帳號，另你可比<br />別人更早發展你的勢力。';
	$lang['index2']['text1'] = '立即加入 '.SERVER_NAME.' !';
	$lang['index2']['link1'] = '#serverRegister';
	$lang['index2']['title2'] = '全新的 '.SERVER_NAME;
	$lang['index2']['desc2'] = '全新的英雄系統、華麗的遊戲介面及強化的<br />互動地圖。';
	$lang['index2']['text2'] = '了解 '.SERVER_NAME.' 的全新功能';
	$lang['index2']['link2'] = '#serverRegister';
	$lang['index2']['title3'] = '遊戲社群';
	$lang['index2']['desc3'] = '成為世界最大的遊戲社群一份子。';
	$lang['index2']['text3'] = '成為遊戲社群的一份子。';
	$lang['index2']['link3'] = '#';
	$lang['index2']['learn more'] = '了解 '.SERVER_NAME.'<br />更多。';
	$lang['index2']['strip1'] = '發展你的資源田以增強村莊的經濟力。資源是發展村莊及軍隊時不可或缺的。';
	$lang['index2']['strip2'] = '發展及升級你的建築物可讓你獲得更多的資源和訓練更強的軍隊！';
	$lang['index2']['strip3'] = '常常留意你的四周，除了可結交戰友外，亦有不少敵人對你虎視眈眈。';
	$lang['index2']['strip4'] = '在各範疇中發展你的帝國，每星期我們都會送給全服中不同方面的最佳十名玩家獨一無二的獎勵。';
	$lang['index2']['strip5'] = '留意報告的內容，你可得知你帝國內的詳細資料。';
	$lang['index2']['strip6'] = '跟其他玩家互動，認識多一位朋友比樹立多一位敵人要好得多。';

// Screenshots Travian 4

	define("SCREENSHOTS_T4_TITLE1","村莊中心");
	define("SCREENSHOTS_T4_TITLE2","村莊總覽");
	define("SCREENSHOTS_T4_TITLE3","英雄系統");
	define("SCREENSHOTS_T4_TITLE4","建築物");
	define("SCREENSHOTS_T4_TITLE5","外來威脅");
	define("SCREENSHOTS_T4_TITLE6","戰爭報告");
	define("SCREENSHOTS_T4_TITLE7","徽章系統");
	define("SCREENSHOTS_T4_TITLE8","任務系統");

	define("SCREENSHOTS_T4_DESC1","帝國不是一天可建成的，一切都從一個小村莊開始。");
	define("SCREENSHOTS_T4_DESC2","發展經濟及養活你的人民，當有足夠的基礎時，你可以開始發展你的戰力。");
	define("SCREENSHOTS_T4_DESC2","發展經濟及養活你的人民，當有足夠的基礎時，你可以開始發展你的戰力。");
	define("SCREENSHOTS_T4_DESC3","英雄可在新設的冒險系統中得到極為有用的道具。而且在 OC TRAVIAN T4 中，英雄更會協助村莊的生產。");
	define("SCREENSHOTS_T4_DESC4","要發展成一個大帝國，不同的建築物是不可或缺的。而且建築的先後次序絕對影響日後的發展。");
	define("SCREENSHOTS_T4_DESC5","TRAVIAN 中是有成千上萬的玩家在競爭，是和是戰，全取決於你的外交手段。");
	define("SCREENSHOTS_T4_DESC6","愈早建立部隊，你愈早可以有足夠的防衛力量。而且更可攻擊其他的玩家以獲取大量的資源。");
	define("SCREENSHOTS_T4_DESC7","每一個星期初，各範疇的最佳十名玩家都會獲得獨一無二的徽章以表揚他們的成就。");
	define("SCREENSHOTS_T4_DESC8","TRAVIAN 中設有任務指導，讓新加入的玩家更快的掌握遊戲技巧，而且提供不少的獎勵。");

	$lang['screenshots2']['desc1'] = '帝國不是一天可建成的，一切都從一個小村莊開始。';
	$lang['screenshots2']['desc2'] = '發展經濟及養活你的人民，當有足夠的基礎時，你可以開始發展你的戰力。';
	$lang['screenshots2']['desc2'] = '發展經濟及養活你的人民，當有足夠的基礎時，你可以開始發展你的戰力。';
	$lang['screenshots2']['desc3'] = '英雄可在新設的冒險系統中得到極為有用的道具。而且在 OC TRAVIAN T4 中，英雄更會協助村莊的生產。';
	$lang['screenshots2']['desc4'] = '要發展成一個大帝國，不同的建築物是不可或缺的。而且建築的先後次序絕對影響日後的發展。';
	$lang['screenshots2']['desc5'] = 'TRAVIAN 中是有成千上萬的玩家在競爭，是和是戰，全取決於你的外交手段。';
	$lang['screenshots2']['desc6'] = '愈早建立部隊，你愈早可以有足夠的防衛力量。而且更可攻擊其他的玩家以獲取大量的資源。';
	$lang['screenshots2']['desc7'] = '每一個星期初，各範疇的最佳十名玩家都會獲得獨一無二的徽章以表揚他們的成就。';
	$lang['screenshots2']['desc8'] = 'TRAVIAN 中設有任務指導，讓新加入的玩家更快的掌握遊戲技巧，而且提供不少的獎勵。';

// Player statics

	define("TOTAL_PLAYERS","註冊玩家");
	define("PLAYERS_ACTIVE","活躍玩家");
	define("PLAYERS_ONLINE","在線玩家");
	define("PLAYERS","註冊玩家");
	define("ACTIVE","活躍玩家");
	define("ONLINE","在線玩家");
	define("PLAYER_STATISTICS","玩家統計");
	
//NOTICES
define("REPORT_SUBJECT","主旨:");
define("REPORT_ATTACKER","攻擊方");
define("REPORT_DEFENDER","防禦方");
define("REPORT_RESOURCES","資源");
define("REPORT_FROM_VIL","從村莊");
define("REPORT_FROM_ALLY","從援軍");
define("REPORT_SENT","發送時間");
define("REPORT_SENDER","發送者");
define("REPORT_RECEIVER","接收者");
define("REPORT_AT","從");
define("REPORT_TO","至");
define("REPORT_SEND_RES","發送資源");
define("REPORT_DEL_BTN","刪除報告");
define("REPORT_DEL_QST","你確定要刪除報告嗎?");
define("REPORT_WARSIM","戰鬥模擬器");
define("REPORT_ATK_AGAIN","回到戰鬥畫面");
define("REPORT_TROOPS","軍隊");
define("REPORT_REINF","增援");
define("REPORT_CASUALTIES","傷亡");
define("REPORT_PRISONERS","俘虜");
define("REPORT_INFORMATION","資訊");
define("REPORT_BOUNTY","賞金");
define("REPORT_CLOCK","時間");
define("REPORT_UPKEEP","維持");
define("REPORT_PER_HOURS","每小時");
define("REPORT_SEND_REINF_TO","發送援軍至村莊");

//added by Danter14

//Help.php
$lang['HELP1']['TITRE'] = "系統幫助";
$lang['HELP1']['Partie_1'] = "FAQ - 知識庫";
$lang['HELP1']['Text_1'] = "您可在這裡找到有關 Travian 的知識。";
$lang['HELP1']['Partie_2'] = "遊戲規則";
$lang['HELP1']['Text_2'] = "遊戲規則";
$lang['HELP1']['Partie_3'] = "聯絡我們";
$lang['HELP1']['Text_3'] = "如果在遊戲中有任何問題，請聯絡 Lorex。";
$lang['HELP1']['Partie_4'] = "更多問題";
$lang['HELP1']['Text_4'] ="您可以在這裡找到關於遊戲交易方面的解答。";
$lang['HELP1']['Partie_5'] = "討論區";
$lang['HELP1']['Text_5'] ="與其他玩家討論。";
$lang['HELP1']['Partie_6'] = "快速幫助";
$lang['HELP1']['Text_6'] ="您可以在這裡快速取得遊戲資訊。";

?>
