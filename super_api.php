<?php 

/*
<mroan8>
	«mroan1235»
*/
ob_start();
$API_KEY = '459160517:AAFRlgLy-7gW2MIqtq1w1NsjzeyTxXUZIY4'; //add your bot token
$bot_ = "k_8bot";
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendsticker($chat_id, $photo, $captionl){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption,
 ]);
 }

 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
	
	function save($filename,$TXTdata)
	{
	$myfile = fopen("data/".$filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
 //====================the file by mounir======================//

$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$textid = $message->text->id;
$text = $message->text;
$textmessage = isset($update->message->text)?$update->message->text:'';
$myphoto = $update->message->file_size;
$edit = $update->message->edited_channel_post;
$new_gp_name = $update->message->new_chat_title;
$new_gp_photo = $update->message->new_chat_photo;
$del_gp_photo = $update->message->delete_chat_photo;
$new_member = $update->message->new_chat_member;
$left = $update->message->left_chat_member;
$test = $update->message->contact;
$audio = $update->message->audio;
$location = $update->message->location;
$memb = $update->message->message_id;
$game = $update->message->game; 
$name = $update->message->from->first_name;
$gp_name = $update->message->chat->title;
$user = $update->message->from->username;
$for = $update->message->from->id;
$sticker = $update->message->sticker;
$video = $update->message->video;
$photo = $update->message->photo;
$voice = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$fwd_id = $update->message->forward_from->id;
$fwd_to = $update->message->forward_to;
$fwd_user = $update->message->forward_from->username;
$fwd_name = $update->message->forward_from->first_name;
$pin = $update->message->pinned_message;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_id = $update->message->message_id;
$type = $update->message->chat->type;

$cllchatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$cllmsegid = $update->callback_query->message->message_id;
$cllfor = $update->callback_query->from->id;

$gplink = file_get_contents("data/$chat_id/gplink.txt");
$getruels = file_get_contents("data/$chat_id/rules.txt");
$getwelcome = file_get_contents("data/$chat_id/welcome.txt");
$photo1 = file_get_contents("data/$chat_id/photo.txt");
$sticker1 = file_get_contents("data/$chat_id/sticker.txt");
$pin1 = file_get_contents("data/$chat_id/pin.txt");
$doc1 = file_get_contents("data/$chat_id/doc.txt");
$game1 = file_get_contents("data/$chat_id/game.txt");
$fwd1 = file_get_contents("data/$chat_id/fwd.txt");
$voice1 = file_get_contents("data/$chat_id/voice.txt");
$link1 = file_get_contents("data/$chat_id/link.txt");
$audio1 = file_get_contents("data/$chat_id/audio.txt");
$video1 = file_get_contents("data/$chat_id/video.txt");
$text1 = file_get_contents("data/$chat_id/text.txt");
$tag1 = file_get_contents("data/$chat_id/tag.txt");

$photo12 = file_get_contents("data/$cllchatid/photo.txt");
$sticker12 = file_get_contents("data/$cllchatid/sticker.txt");
$pin12 = file_get_contents("data/$cllchatid/pin.txt");
$doc12 = file_get_contents("data/$cllchatid/doc.txt");
$game12 = file_get_contents("data/$cllchatid/game.txt");
$fwd12 = file_get_contents("data/$cllchatid/fwd.txt");
$voice12 = file_get_contents("data/$cllchatid/voice.txt");
$link12 = file_get_contents("data/$cllchatid/link.txt");
$audio12 = file_get_contents("data/$cllchatid/audio.txt");
$video12 = file_get_contents("data/$cllchatid/video.txt");
$text12 = file_get_contents("data/$cllchatid/text.txt");
$tag12 = file_get_contents("data/$cllchatid/tag.txt");

$warn = file_get_contents("data/$chat_id/warn/warn.txt");
$warn_ = file_get_contents("data/$cllchatid/warn/warn.txt");
$warn_2 = file_get_contents("data/$chat_id/warn/$re_id.txt");
$warn_3 = file_get_contents("data/$chat_id/warn/$re_id.txt");


$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$you_ = $info['result']['user']['id'];

$get_ = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$cllchatid&user_id=".$cllfor);
$info_ = json_decode($get_, true);
$you_ = $info_['result']['status'];
//====================the file by mounir======================//
if($text == '/start'){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اهلا بك 
‎يمكنك من خلال هذا البوت ان تحمي مجموعتك الخاصة 👁‍🗨
‎سيحذف لكل رابط + صور + ملصقات + روابط ..الخ  💡
فقط أضف البوت الى المجموعه الخاصة بك ثم ارفعه اداري وأرسل له. /add ✨➖
        🐾➖➖➖➖➖🐾
Welcome Sir ، 
You can above this bot security 🚨 your Group
It Delete All Links + Photo + Stickers + Fwds , 💡
Just add a bot to group , up a mod and send it /add ✨➖
ENJOY ⚗️🔱", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
		['text'=>"⚛ more «~» اكثر ⚛",'callback_data'=>"start"]
	  ]
	 
		]
		])
  ]);
}

if($data == 'start'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"بعض الاوامر التي تساعدك 💡
اختر ماتريده 👁‍🗨
          🐾➖➖➖➖➖🐾
Some Orders help you 💡
Select would you want 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"🇮🇶 العربية 🇮🇶",'callback_data'=>"super_"]
 	  ],
 	  [
     ['text'=>"اضفني الى مجموعتك ♣️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
     ],
    	[
     ['text'=>"مراسلة المطور 🚶", 'url'=>"t.me/mroan8"]
     ],
	   [
  		['text'=>"🇦🇺 English 🇦🇺",'callback_data'=>"super_"]
 	  ],
	   [
    ['text'=>"Add me to your Gp ♣️️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
    ],
     [
     ['text'=>"support 💡", 'url'=>"t.me/ mroan1235"]
     ],
    ]
    ])
    ]);
    }
 if($photo  && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $photo1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($voice   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $voice1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($audio   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $audio1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($video   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $video1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
 if( !$fwd && $type == "supergroup" && $link1 == "❌" && $you != "creator" && $you != "administrator" ){
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
 if( !$fwd && $type == "supergroup" && $tag1 == "❌" && $you != "creator" && $you != "administrator" ){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if($doc   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $doc1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($game   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $game1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($sticker   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $sticker1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->message->forward_from && $you != "creator" && $you != "administrator" ){
if( $fwd1 == "❌"){
	bot('deleteMessage',[
 'chat_id'=>$chat_id,
'message_id'=>$message->message_id
   ]);
	}
	}
if($text   && $you != "creator" && $you != "administrator" && $type == "supergroup" && $text1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($you == "creator" or $you == "administrator") {
if($re  &&  $text == "/del" ){
bot('deleteMessage',[
'chat_id'=>$re_chatid,
'message_id'=>$re_msgid
]);
}
}

//########
/////////////////########

if($you == "creator" or $you == "administrator") {
if($text == "/add"){
    mkdir("data");
    mkdir("data/$chat_id");
    file_put_contents("data/$chat_id/game.txt","❌");
    file_put_contents("data/$chat_id/tag.txt","❌");
    file_put_contents("data/$chat_id/photo.txt","❌");
    file_put_contents("data/$chat_id/fwd.txt","❌");
    file_put_contents("data/$chat_id/sticker.txt","❌");
    file_put_contents("data/$chat_id/pin.txt","❌");
    file_put_contents("data/$chat_id/doc.txt","❌");
    file_put_contents("data/$chat_id/link.txt","❌");
    file_put_contents("data/$chat_id/video.txt","❌");
    file_put_contents("data/$chat_id/audio.txt","❌");
    file_put_contents("data/$chat_id/voice.txt","❌");
    file_put_contents("data/$chat_id/text.txt","✅");
    file_put_contents("data/$chat_id/rules.txt", "‼️ لا توجد قوانين هنا 🤦‍♂ من فضلك اكتب /setrules لوضع قوانين 🅿️!");
    sendaction($chat_id, typing);
    bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"🐭 تم تفعيل المجموعة بنجاح 😊",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   } 
 if($you == "creator" or $you == "administrator") {
if($text == '/lock all'){
    file_put_contents("data/$chat_id/game.txt","❌");
    file_put_contents("data/$chat_id/photo.txt","❌");
    file_put_contents("data/$chat_id/fwd.txt","❌");
    file_put_contents("data/$chat_id/sticker.txt","❌");
    file_put_contents("data/$chat_id/pin.txt","❌");
    file_put_contents("data/$chat_id/doc.txt","❌");
    file_put_contents("data/$chat_id/link.txt","❌");
    file_put_contents("data/$chat_id/video.txt","❌");
    file_put_contents("data/$chat_id/audio.txt","❌");
    file_put_contents("data/$chat_id/voice.txt","❌");
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"🌐 تم قفل جميع الوسائط 🚷",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  	 [
 	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	   ]
    ]
    ])
    ]);
    }
    }
 if($you == "creator" or $you == "administrator") {
if($text == '/unlock all'){
    file_put_contents("data/$chat_id/game.txt","✅");
    file_put_contents("data/$chat_id/photo.txt","✅");
    file_put_contents("data/$chat_id/fwd.txt","✅");
    file_put_contents("data/$chat_id/sticker.txt","✅");
    file_put_contents("data/$chat_id/pin.txt","✅");
    file_put_contents("data/$chat_id/doc.txt","✅");
    file_put_contents("data/$chat_id/link.txt","✅");
    file_put_contents("data/$chat_id/video.txt","✅");
    file_put_contents("data/$chat_id/audio.txt","✅");
    file_put_contents("data/$chat_id/voice.txt","✅");
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"🌐 تم فتح جميع الوسائط 🚷",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }
   }
 if($you == "creator" or $you == "administrator") {
if($text == '/settings'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"⚙ اعدادات المجموعة كما يلي يا صديقي 💬
              🔐 مقفول = ❌
              🔓 مفتوح = ✅",
              'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=>"الصور",'url'=>"http://telegram.me/mroan1235"],['text'=> "$photo1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"الروابط",'url'=>"http://telegram.me/mroan1235"],['text'=> "$link1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"الاغاني",'url'=>"http://telegram.me/mroan1235"],['text'=> "$audio1" ,'url'=>"http://telegram.me/mran1235"]
	  ],
	  [
	  ['text'=>"البصمات",'url'=>"http://telegram.me/mroan1235"],['text'=> "$voice1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"الفيديو",'url'=>"http://telegram.me/mroan1235"],['text'=> "$video1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"الملصقات",'url'=>"http://telegram.me/mroan1235"],['text'=> "$sticker1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
   [
	  ['text'=>"التوجيه",'url'=>"http://telegram.me/mroan1235"],['text'=> "$fwd1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"المحادثة",'url'=>"http://telegram.me/mroan1235"],['text'=> "$text1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"الالعاب",'url'=>"http://telegram.me/mroan1235"],['text'=> "$game1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"الملفات",'url'=>"http://telegram.me/mroan1235"],['text'=> "$doc1" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	  ['text'=>"التثبيت",'url'=>"http://telegram.me/mroan1235"],['text'=> "$pin1" ,'url'=>"http://telegram.me/mroan1235"]
	  ]
   ]
   ])
   ]);
   }  
   }
//========================== الطرد ===============
if($you == "creator" or $you == "administrator") {
if($re && $text =="/kick"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم طرد العضو بنجاح 👞",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
   ]
   ])
   ]);
   }    
   }
 if($you == "creator" or $you == "administrator") {
 if (strpos($textmessage,"/kick") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تم طرد العضو بنجاح 👞",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    }
 
 if($you == "creator" or $you == "administrator") {
if($re && $text =="/ban"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id, // by @wounds1 = mounir
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم حظر العضو بنجاح 🚫",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
	  ]
   ])
   ]);
   }    
   }
 if($you == "creator" or $you == "administrator") {
 if (strpos($textmessage,"/ban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تم حظر العضو بنجاح  🚫",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
 //========================== وضع ترحيب ===============
if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "administrator"){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان الترحيب_ 🔃
*Please now send new  welcome* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "administrator"){
     file_put_contents("data/$chat_id/welcome.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
   
    if($new_member){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$welcom", 
      'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
 		]
 		])
   ]);
   } 

 //========================== المساعدة ===============  
if ($you == "creator" or $you == "administrator"){
if($text == '/help'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"هذه قائمة الاومر للدمنية فقط 🤠
اضغط على ما تريد وتحكم في اوامر مجموعتك ♋️
 عن طريق لمس الكيبورد ✋🏻
This list Just For admins ✨✋🏻
Click to you want and get a order your Gp🚨",
                           'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	 	['text'=>"🔒 setting media «~»  المديا 🔒",'callback_data'=>"help"]
	  ],
	  [
  	['text'=>"🕴Mods «~»  الادارة 🕴",'callback_data'=>"ss"]
	  ],
   [
  	['text'=>"🎭 mroan8«~»  المطورين 🎭",'callback_data'=>"dev"]
	  ]
   ]
   ])
   ]);
   } 
   }
  if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "administrator"){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>" هذه قائمة الاومر للدمنية فقط 🤠
اضغط على ما تريد وتحكم في اوامر مجموعتك ♋️
 عن طريق لمس الكيبورد ✋🏻
This list Just For admins ✨✋🏻
Click to you want and get a order your Gp🚨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"🔒 setting media «~»  المديا 🔒",'callback_data'=>"help"]
 	  ],
	   [
  		['text'=>"🕴Mods «~»  الادارة 🕴",'callback_data'=>"ss"]
 	  ],
	   [
	  	['text'=>"🎭 mroan8 «~»  المطورين 🎭",'callback_data'=>"dev"]
	   ]
    ]
    ])
    ]);
    }
    else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
       ]);
       }
       } 
       elseif ($data == 'mroan8' )
      {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"مطور البوت 1 mroan8😊",
       ]);
       }   
//==========================تسهيل عمل ويبهوك ===============
 
 elseif (strpos($textmessage,"/setweb") !== false) {
  $text = explode(" ",$textmessage);
  if ($text['2'] != "" && $text['1'] != "") {
    $web = "https://api.telegram.org/bot" . $text['1'] . "/setwebhook?url=" . $text['2'];
    sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم انشاء ويبهوك بنجاح اضغط على في الاسفل", 
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
	   ['text'=>"من فضلك اضغط هنا🌐" ,'url'=>"$web"]
 	  ]
    ]
    ])
    ]);
    }    
    }
//========================== المطور ===============
  if($text == 'المطور' or $text == '/dev')
{
 $phone = '+9647801681195';
 $nameea = 'mroan';
bot('sendContact',[
 'chat_id'=>$chat_id,
 'phone_number'=>$phone,
 'first_name'=>$nameea
     ]);
     }
 //========================== القوانين ===============
 if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "administrator"){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان القوانين_ 🔃
*Please now send new go  rules* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
	 	['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "administrator"){
     file_put_contents("data/$chat_id/rules.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }

 if($text == '/rules'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"تابع 🌐" ,'url'=>"http://telegram.me/mroan1235"]
	  ]
   ]
   ])
   ]);
   }
 //==========================الرابط ===============
 if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "administrator"){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_من فضلك ارسل الان الرابط_ 🔃
*Please now send new go link* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "تالع 💡" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
     ]);
     } 
     }
  if ($gplink == "setlink" ){
if ($you == "creator" or $you == "administrator"){
     file_put_contents("data/$chat_id/gplink.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" تم الحفظ بنجاح ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"تابع 💡" ,'url'=>"http://telegram.me/mroan1235"]
	  ],
	  [
 		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }

if($text == '/link'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
              'text' =>"$gplink",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }   
 //==========================الحظر ===============
 if($message->reply_to_message && $text == "/unban" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'💡 العضو تم رفع الحظر عنه 🔚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
     [
     ['text'=>$message->reply_to_message->from->first_name, 'url'=>"https://telegram.me/".$message->reply_to_message->from->username]
     ]
     ]
     ])
     ]);
     } 
 if($you == "creator" or $you == "administrator") {
 if (strpos($textmessage,"/unban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'💡 العضو تم رفع الحظر عنه 🔚',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }

if($data == 'help'){
sendaction($chat_id, typing);
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					[
					['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
					[
					['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	     ],
	 	   [
		    ['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	     ]		
      ]
      ])
      ]);
      } 
 if ( $data == "link" && $link12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/link.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [
    	 ['text'=>"link ~» ✅",'callback_data'=>"link"],['text'=>"الروابط ~» ✅",'callback_data'=>"link"]
					],
					[
					['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	     ['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	     ],
      [
	     ['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	     ],
      [
	     ['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	     ],
      [
	     ['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	     ],
	     [
	     ['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	     ],
 	 	  [
 	    ['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
 	    ],
	     [
	     ['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	     ],
	   	 [
  		  ['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
 	    ]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "link" && $link12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/link.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[
						['text'=>"link ~» ❌",'callback_data'=>"link"],['text'=>"الروابط ~» ❌",'callback_data'=>"link"]
 					],
						[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
		 			],
		 			[
      	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
     	 ],
       [
      	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
     	 ],
       [
      	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
     	 ],
       [
      	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
     	 ],
       [
      	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
     	 ],
     	 [
      	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	      ],
	      [
      	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
     	 ],
   	 	 [
      	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
     	 ],
    	  [
      	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
     	 ],
   	 	 [
     		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
    	  ]		
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}


if ( $data == "tag" && $tag12 == "❌") {
 if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/tag.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» ✅",'callback_data'=>"tag"],	 ['text'=>"التاك ~» ✅",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "tag" && $tag12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/tag.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» ❌",'callback_data'=>"tag"],	 ['text'=>"التاك ~» ❌",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
if ( $data == "photo" && $photo12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/photo.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» ✅",'callback_data'=>"photo"],	 ['text'=>"الصور ~» ✅",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "photo" && $photo12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/photo.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» ❌",'callback_data'=>"photo"],	 ['text'=>"الصور ~» ❌",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}



if ( $data == "fwd" && $fwd12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/fwd.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» ✅",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» ✅",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "fwd" && $fwd12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/fwd.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» ❌",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» ❌",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}






if ( $data == "game" && $game12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/game.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» ✅",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» ✅",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "game" && $game12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/game.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» ❌",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» ❌",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

if ( $data == "video" && $video12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/video.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» ✅",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» ✅",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "video" && $video12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/video.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» ❌",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» ❌",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

if ( $data == "voice" && $voice12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/voice.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» ✅",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» ✅",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "voice" && $voice12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/voice.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» ❌",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» ❌",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}


if ( $data == "audio" && $audio12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/audio.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» ✅",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» ✅",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "audio" && $audio12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/audio.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» ❌",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» ❌",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}


if ( $data == "file" && $doc12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/doc.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» ✅",'callback_data'=>"file"],	 ['text'=>"الملفات ~» ✅",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "file" && $doc12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/doc.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» ❌",'callback_data'=>"file"],	 ['text'=>"الملفات ~» ❌",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}



if ( $data == "all" && $text12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/text.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					], //the file by mounir
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» ✅",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» ✅",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "all" && $text12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/text.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"الملصقات ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» ❌",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» ❌",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

if ( $data == "sticker" && $sticker12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/sticker.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» ✅",'callback_data'=>"sticker"],['text'=>"الملصقات ~» ✅",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "sticker" && $sticker12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/sticker.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"صديقي هذه لائحة الميديا ⚓️
اضغط على الائحة للتحكم بلقفل والفقتح في الميديا 🚦
الميديا المقفولة == ❌
الميديا المفتوحة == ✅ ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"الروابط ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» ❌",'callback_data'=>"sticker"],['text'=>"الملصقات ~» ❌",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"الصور ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"التاك ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"توجيه ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"الالعاب ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"الفيديو ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"البصمات ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"الاغاني ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"الملفات ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"المحادثة ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}




if($data == "ss"  ){
if ($you_ == "creator" or $you_ == "administrator"){
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
/kick [ id/ reply ] لطرد عضو 👞
/ban [ id/ reply ] لحظر عضو ⛓
/unban [ id/ reply ] لرفع الحظر ⚖
/del [ reply ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] لتحذير عضو 📍 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 welcom - الترحيب 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍رابط المجموعة - gp link 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 القوانين - rules 📜",'callback_data'=>"rul"]
					],
         [
						['text'=>"♣️ تحدد التحذير - setting warn ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  elseif ($data == '#' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"هذا هو الحد الاقصى لعدد التحذيرات ♣️",
]);
}   
 elseif ($data == 'muner' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"قم بلضغط على 
➕ ليزادة التحذير
➖ لتقليل التحذير️",
]);
}   
elseif($data == '+'){
if ($you_ == "creator" or $you_ == "administrator"){
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
/kick [ id/ reply ] لطرد عضو 👞
/ban [ id/ reply ] لحظر عضو ⛓
/unban [ id/ reply ] لرفع الحظر ⚖
/del [ reply ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] لتحذير عضو 📍 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
						['text'=>"🔲 welcom - الترحيب 🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"📍رابط المجموعة - gp link 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 القوانين - rules 📜",'callback_data'=>"rul"]
					],
        [
						['text'=>"♣️ تحدد التحذير - setting warn ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
 elseif($data == '-' ){
 if ($you_ == "creator" or $you_ == "administrator"){
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
/kick [ id/ reply ] لطرد عضو 👞
/ban [ id/ reply ] لحظر عضو ⛓
/unban [ id/ reply ] لرفع الحظر ⚖
/del [ reply ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] لتحذير عضو 📍 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [
			 			['text'=>"🔲 welcom - الترحيب 🔳",'callback_data'=>"welc"]
  					],
  					[
	 	 			['text'=>"📍رابط المجموعة - gp link 📍",'callback_data'=>"gplink"]
		  			],
	   			[
						['text'=>"🗒 القوانين - rules 📜",'callback_data'=>"rul"]
						],
        [
       	['text'=>"♣️ تحدد التحذير - setting warn ⬇️",'callback_data'=>"muner"]
  					],
  	     [
	   			['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
			  		],
         [
         ['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
         ]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  
$warns = $warn - 1;
if ($warns != $warn_2){ 
 if($re &&$text == "/warn"){  
 if($you == "creator" or $you == "administrator"){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"عذرا يا صديقي 😒✋🏻
انتبه لتصرفاتك داخل المجموعة 👥
هذا تحذير من قبل الدارة 👨‍🏫
عدد تحذيراتك هية ( $nnwarn | $warn )",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  }  
 }
 }
 $warns = $warn - 1;
 if ($warns == $warn_2){
if($re && $text == "/warn"){     
if($you == "creator" or $you == "administrator"){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"اسف يا صديقي 💂
لم تلتزمم بلقواعد في المجموعة 👨‍💼
وصلت الى الحد الاقصى من التحذيرات وتم طردك 👞
تحذيراتك هية ( $warn | $warn )",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
  }
  }
  }
  if($data == "bagg"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  هذه اوالامر المدراء 📛
/kick [ id/ reply ] لطرد عضو 👞
/ban [ id/ reply ] لحظر عضو ⛓
/unban [ id/ reply ] لرفع الحظر ⚖
/del [ reply ] لمسح رسالة بواسطة الرد 🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] لتحذير عضو 📍 ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 welcom - الترحيب 🔳",'callback_data'=>"welc"]
		 			],
		 			[
						['text'=>"📍رابط المجموعة - gp link 📍",'callback_data'=>"gplink"]
		 			],
	 				[
		 			['text'=>"🗒 القوانين - rules 📜",'callback_data'=>"rul"]
	  			],
       [
  				['text'=>"♣️ تحدد التحذير - setting warn ⬇️",'callback_data'=>"muner"]
	  			],
	      [
			 		['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
	 				],
					 [
     		['text'=>"العودة 🔙 Back",'callback_data'=>"bag"]
	      ]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
  
  
if($data == "welc"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"هذه قائمة اعدادات الترحيب 🤗
اضغط على (⬛️ تعديل الترحيب - edit welcom ⬜️) لتعديل الترحيب الخاص بلمجموعة 😄",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"⬛️ Edit welcmo - تعديل الترحيب ⬜️",'callback_data'=>"welcom"]
					],
					 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
// by @wounds1 = mounir
if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"اهلا بك في قائمة القوانين 👁‍🗨
اضغط على ♣️👇🏻
(🖇Edit rules-تعديل القوانين 📨️)
لوضع قوانين جديدة للمجموعة 🖊",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🖇Edit rules-تعديل القوانين 📨️",'callback_data'=>"rules"]
					],
					 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}
if($data == "gplink"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"اهلا بك في قائمة رابط المجموعة 🖇
اضغط على 🔍👇🏻
(📍تعديل الرابط - set link 📍)
لوضع رابط جديد 📨",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"📍تعديل الرابط - set link 📍️",'callback_data'=>"setlink"]
					],
					 [
		['text'=>"العودة 🔙 Back",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عذرا 📛 هذا الامر يخص الادمنية فقط ⚠️",
        'show_alert'=>true
        ]);
}
}

?>
/*

Programmer
 < Mroan8 >
 ch = @mroan1235


*/
