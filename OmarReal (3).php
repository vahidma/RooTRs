<?php
$botToken = "300049013:AAF7rMGcjvYIYcOjTgX8LgarAuGbr9NvkLI"; // توكن
$website = "https://api.telegram.org/bot".$botToken;
$sudo_id = 325384922;// ايدي المطور
$bot_id = 300049013; // ايدي البوت 
$group = -1001055207438; // ايدي الكروب لاستقبال الرسائل
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$chatId = $update["message"]["chat"]["id"];
$nm = $update["message"]["new_chat_member"];
$type = $update["message"]["chat"]["type"];
$user = $update["message"]["from"]["username"];
$name = $update["message"]["chat"]["title"];
$message = $update["message"]["text"];
$mse = $update["message"]["text"];
$for = $update["message"]["from"]["id"];
$nam = $update["message"]["from"]["first_name"];
$sticker = $update["message"]["sticker"];
$photo = $update["message"]["photo"];
$audio = $update["message"]["voice"];
$link = $update["message"]["[Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee]/"];
$fwd = $update["message"]["forward_from"];
$fwd2 = $update["message"]["forward_from"]["id"];
$fwd3 = $update["message"]["forward_to"];
$user2 = $update["message"]["forward_from"]["username"];
$fwd_name = $update["message"]["forward_from"]["first_name"];
$pin = $update["message"]["pinned_message"];
$gif = $update["message"]["document"];
$ed = $update["message"]["edited_channel_post"];
$nt = $update["message"]["new_chat_title"];
$np = $update["message"]["new_chat_photo"];
$dp = $update["message"]["delete_chat_photo"];
$nm = $update["message"]["new_chat_member"];
$left = $update["message"]["left_chat_member"];
$test = $update["message"]["contact"];
$song = $update["message"]["audio"];
$location = $update["message"]["location"];
$memb = $update["message"]["message_id"];
$game = $update["message"]["game"]; 
$reply = $update["message"]["reply_to_message"];
$replay = $update["message"]["reply_to_message"]["from"]["id"];
$replay_user = $update["message"]["reply_to_message"]["from"]["username"];
$user_id = $update['message']['from']['id'];
$replay_name = $update["message"]["reply_to_message"]["from"]["first_name"];
$text = $update['message']['text'];
$token =$botToken ;
$text = $update['message']['text'];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$chatID = $update['message']['reply_to_message']['chat']['id'];
$fwdrep = $update['message']['reply_to_message']['forward_from']['id'];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$number = str_word_count($message);
$numper = strlen($message);
include_once "groups.php";
include_once("ids.php");
$file = "ids.php";
$file2 = "groups.php";
include "start.php";
$file3 = "start.php";


if ($message == "/start"){
file_put_contents($file3, "\n" . '$id[] = ' . $for . ";" , FILE_APPEND);
}


if ($message == "/mods"){
sendmark($chatId, "مدراء المجموعة 🕴: \n 🔶 الايدي : " . print_r($ids[$ids]) . "\n" , $memb);
}

if ($message == "/remall"){
file_put_contents($file, "<?php");
}

if ($message == "/remall"){
sendmark ($chatId, "تم ✅ ازالة جميع الادمنية 🕴🔸",$memb);
}

if($reply && $message == "/promote" && $for == $sudo_id){
file_put_contents($file, "\n" . '$ids[] = ' . $replay . ";" ,FILE_APPEND);
}

if($message == "/add" && $for != $sudo_id){
sendmark($chatId, "عذرا ❗️هذا الامر للمطورين فقط 🕴🔹" , $memb);
}

if($message == "/add" && $for == $sudo_id){
file_put_contents($file2, "\n" . '$gpid[] = ' . $chatId . ";",FILE_APPEND);
}

if($message == "/add" && $for == $sudo_id){
sendmark($chatId, "تم ✅ تفعيل المجموعة 🍂" , $memb);
}

if ($reply && $message == "/promote" && $for == $sudo_id){
sendmark($chatId, "العضو 👤 تم اضافته ادمن ✅ : "."[$replay_name](https://t.me/$replay_user)",$memb);
}


if($number > 100 && $for != $sudo_id or $numper > 1000 && $for != $sudo_id){
sendMessage($chatId, "لا ❗️ترسل اكثر من 100 كلمة 🗒🔒 " . "\nسيد ❄️ @" . $user,$memb );
}

if ($message == "/help"){
sendMessage($chatId, "اهلا 💡بك عزيزي \n
	
	كيفية 🗒 استخدام البوت 🤖🍃
	\n\n
	1~ اضف البوت لاي مجموعة وقم بجعله ادمن سوف يبدأ تلقائيا في التحذير 
	\n
	2~ لاضهار الايدي الخاص بك اكتب id/
	\n
	3~ لاضهار ايدي عضو بل قم بل رد عليه بل امر id
	\n
	4~ قم بتحويل رسالة من عضو الى البوت للحصول على معلوماته
	\n
	5~ اكتب الوقت لمعرفة الوقت 
	\n
	6~ اكتب التاريخ لمعرفت التاريخ 
	\n
	7~ ارسل رسالة للبوت سيتم تحوليها الى المطور ليتم الرد عليك 
	\n
	8~ لجعل البوت يكلم العضو قم بل رد على العضو وقم بكتابة كلة + الكلام سيقوم البوت بكتابت ما طلبت
	\n
	10~ قم بكتاب الامر (عدد الرسائل) لمعرفة هل مجموعتك متفاعلة ام لا 
	\n
	11~ قم بكتابة (me/) لمعرفة موقعك 
	\n\n
	مطور البوت 💡 @Omar_Real
	" 
	 ,$memb);
	 
}
	 
if ($message && $chatId != $group && $type == "private" && $message != "/start"){
	forwardMessage($group ,$chatId, $memb, $photo);
//	sendMessage($chatId, "TEST", $mensagens['message']['message_id'],$mensagemID , true);
}


if ($message && $fwdrep){
sendMessage($fwdrep, " $message " );	
}

if ($message){
sendMessage($for, $fwd3);	
}

$shit = explode(".", $message);


if ($shit[0] == "كلة"){
sendmark($chatId, "$shit[1] " ,$replay);
}

if ($reply && $message == "هينة"){
real($chatId, "دي زبالة" , $replay);
}

$matches = explode(".", $message); // Group id and msg / ايدي المجموعة او القناة + الرسالة سيرسلها البووت 

if($message){
sendmark($matches[0], "$matches[1]");
}

if($fwd2 and $type == "private"){
sendmark($for, "💡Id : " . $fwd2 . "\n💡user : " . "[$fwd_name](https://t.me/$user2)",$memb);	
}

if ($replay && $message == "/id" && in_array($chatId,$gpid)){
sendmark($chatId, "_💡Id_ : " . $replay . "\n_💡User_ : " . "[$replay_name](https://t.me/$replay_user",$memb);
}

if ($nm && in_array($chatId,$gpid)){
sendmark($chatId, "*🔥اهلا عزيزي *\n[💡تابع جديدنا](https://t.me/set_web)🍂 ",$memb);
}

if($message == "/me" and $for == $sudo_id && $type == "supergroup" && in_array($chatId,$gpid)){
sendmark($chatId, "انت ♦️ مطور البوت 🕴 : " . "[$nam](https://t.me/$user)",$memb);
}

elseif($message == "/me" && $type == "private"){
sendMessage($chatId, "عذرا 🍂 هذا الامر في المجموعات فقط 👥❇️");
}

if($message == "/me" && in_array($for,$ids) && $type == "supergroup" && $for != $sudo_id){
sendmark($chatId, "انت ☘ ادمن في البوت 🤖❄️ : " . "[$nam](https://t.me/$user)" , $memb);
}

if($message == "/me" and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "انت ♦️ مجرد عضو 👤 : " . "[$nam](https://telegram.me/$user)",$memb);
}

if($location and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 ارسال المواقع 🏝🔒   " . "[$nam](https://t.me/$user)",$memb);
}

if($game and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 لعب الالعاب 🕹🔒  : " . "[$nam](https://t.me/$user)",$memb);
}

if($song and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 ارسال الاغاني 🎵🔒  : " . "[$nam](https://t.me/$user)",$memb);
}

if($message == "نوع المجموعة" && $type == "supergroup" && in_array($chatId,$gpid)){
sendMessage($chatId, "نوع 📛 المجموعة 👥 : " . $type); 
}

if($message == "عدد الرسائل" && $memb > 1000 && $type == "supergroup" && in_array($chatId,$gpid)){
sendmark($chatId, "عدد 📈 رسائل المجموعة 👥🔹  : " . "*$memb*" . "\nتهانيا 💡 مجموعتك متفاعلة 💯 ",$memb); 
}
elseif($message == "عدد الرسائل" && $type == "private"){
	sendMessage($chatId, "عذرا 🍂 هذا الامر في المجموعات فقط 👥❇️");
}

if($message == "عدد الرسائل" && $memb < 1000 && $type == "supergroup" && in_array($chatId,$gpid)){
sendmark($chatId, "عدد 📉 رسائل المجموعة 👥🔹  : " . "*$memb*" . "\nللاسف 💎 مجموعتك غير متفاعلة 💭",$memb); 
}


if($dp && in_array($chatId,$gpid)){
sendmark($chatId, "تم ✅ ازالة صورة المجموعة 🎑 بواسطت  : " . "[$nam](https://t.me/$user)",$memb);
}

if($np && in_array($chatId,$gpid)){
sendmark($chatId, "قام 👤 بتغير صورة المجموعة 🎑❕ :  " . "[$nam](https://t.me/$user)",$memb);
}

if($nt && in_array($chatId,$gpid)){
sendmark($chatId, "قام بتغير ❕اسم المجموعة 👥 : " . "[$nam](https://t.me/$user)",$memb);
}

if($gif and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 ارسال الصور المتحركة 🎆🔒 : " . "[$nam](https://t.me/$user)",$memb);
}

if($pin and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 عمل التثبيت 📍🔒  " . "[$nam](https://t.me/$user)",$memb);
}



if($fwd && !$photo and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 عمل التوجيه 🔄🔒 : " . "[$nam](https://t.me/$user)",$memb);
}


if($link and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 ارسال الروابط ⚙🔒 : " . "[$nam](https://t.me/$user)",$memb);
}

if($audio and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 ارسال الصوتيات 📣🔒  " . "[$nam](https://t.me/$user)",$memb);
}

if($photo and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 ارسال الصور 🎆🔒   " . "[$nam](https://t.me/$user)",$memb);
}

if($test and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع 🚫 ارسال جهات الاتصال 📱🔒  : " . "[$nam](https://telegram.me/$user)",$memb);
}

if ($left && in_array($chatId,$gpid)){
sendMessage($chatId, "وداعا عزيز 📩");
}

if ($sticker and $for != $sudo_id && $type == "supergroup" && !in_array($for,$ids) && in_array($chatId,$gpid)){
sendmark($chatId, "ممنوع 🚫 ارسال الملصقات 🔆🔒 : " . "[$nam](https://t.me/$user)", $memb); // OmarReal
}

if ($message == "/start" && $type == "private"){
sendmark($chatId, "اهلا بك 💡 بك يا : [$nam](https://t.me/$user)" . "\nاضفني 💭 الى مجموعتك 👥 " . "\nوسوف اقوم بل تحذير 📵 " . "\n" . "[تابع جديدنا ☘](https://telegram.me/set_web)" ,$memb);
}

// code by omar

if ($message === "/id" && !$replay && in_array($chatId,$gpid)){
	sendmark($chatId, "🎈 Gp Id : " . $chatId 
	. "\n" . "🎈 User : " 
	. "[$nam](https://t.me/$user)"
	. "\n" 
	. "🎈 Gp name : " . $name
	
	. "\n" . "🎈 Msg text : " . $mse
	. "\n" . "🎈 Your Id : " . $for
	. "\n" . "🎈 Msg Number : " . $memb
	. "\n" . "🎈 Type : " . $type
	. "\n" . "🎈 Your Name : " . $nam
	,$memb );
}

// This File By @Omar_Real
/*
if ($message == "/id"){
	sendMessage($chatId, "اهلا 👋 يا @" . $user . "\n" . "لقدم تم ارسال 📩 طلبك في الخاص 💡\n تفقد الخاص ارسل 📪 رسالة للبوت اذا لم تتلقى شيئا 💸");
}
*/
$time = time() + (979 * 11 + 1 + 30);
if ($message ==  'الوقت' && in_array($chatId,$gpid)){
sendmark($chatId, "🕛 البلد : العراق" . "\n" . "🕛 الساعة : " . date('g', $time) . "\n" . "🕛 الدقيقة : " . date('i', $time) ,$memb);
}

if ($message == "التاريخ" && in_array($chatId,$gpid)){
sendmark($chatId, "📆 البلد : العراق \n" . "📆  السنة : " . date("Y") . "\n" . "📆 الشهر : " . date("n") . "\n" . "📆 اليوم :" . date("j"), $memb);	
}
date_default_timezone_set("Asia/Baghdad");

if ($message == "/kickme" && $for != $sudo_id && in_array($chatId,$gpid)){
kick($chatId , $for);
}
if ($message == "/kickme" && $for != $sudo_id && in_array($chatId,$gpid)){
sendmark($chatId, "وداعا عزيزي 🌝☘ : " . "[$nam](https://t.me/$user",$memb);
}

if ($message == "/kick" && $for == $sudo_id && in_array($chatId,$gpid)){
rekick($chatId,$for,$replay);
}

if ($message == "/kick" && $for == in_array($for,$ids) && in_array($chatId,$gpid)){
rekick($chatId,$for,$replay);
}

if($replay && $message == "/kick" && $for == !in_array($for,$ids) && $for != $sudo_id){
sendmark ($chatId, "للمشرفين فقط 👥❗️: " ."[$nam](https://t.me/$user)" , $memb);
}

if ($replay && $message == "/kick" && $for == $sudo_id && in_array($chatId,$gpid)){
sendmark($chatId, "تم ✅ طرد العضو 👤 : " . "[$replay_name](https://t.me/$replay_user)", $memb);	
}

if ($replay && $message == "/kick" && $for == in_array($for,$ids)){
sendmark($chatId, "تم ✅ طرد العضو 👤 : " . "[$replay_name](https://t.me/$replay_user)",$memb);
}
	function forwardMessage ($group, $chatId, $memb, $photo){
		   $url = $GLOBALS[website].'/forwardMessage?chat_id='.$group.'&from_chat_id='.$chatId.'&message_id='.$memb;
			file_get_contents($url);
		}
     
     function real ($chatId, $message, $replay){
     	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message).'&message_id='.$replay;
		file_get_contents($url);
     	
     }
     
     
    function sendmark ($chatId, $message, $memb){
    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=Markdown'.'&text='.urlencode($message).'&reply_to_message_id='.$memb.'&disable_web_page_preview=true';
    file_get_contents($url);
     }
     
     function kick($chatId,$for){
  
    $url = $GLOBALS[website]."/kickChatMember?chat_id=".$chatId."&user_id=".$for."&text=".urlencode($message);
    file_get_contents($url);
    } 
     
     function rekick ($chatId, $for, $replay){
    $url = $GLOBALS[website].'/kickChatMember?chat_id='.$chatId.'&user_id='.$replay.'&text='.urlencode($message).'&reply_to_message_id='.$replay.'&disable_web_page_preview=true';
    file_get_contents($url);
     } 
     
	function sendMessage ($chatId, $message){
		

		$sim = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
		file_get_contents($url);
		}

	?>