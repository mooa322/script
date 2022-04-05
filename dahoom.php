
<?php
$name = $update->message->from->first_name;
$fn = $update->message->from->first_name;
$username = $update->message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$bot = bot('getme',['bot'])->result->username;
echo "<br><a  href='https://t.me/$bot'>@$bot</a>";

if ($text == '/start'){
 bot('sendMessage',[
 'chat_id' => $chat_id,
 'text'=>" • اهلآ بك ،  [$fn](tg://user?id=$chat_id)
في بوت التحميل  
- اختر احد الاوامر من الاسفل",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"youtu، 💚",'callback_data'=>'y'],["text"=>"instagram، ♥️",'callback_data'=>'i']],
[["text"=>"feacbook، 💛",'callback_data'=>'f']],
[["text"=>"tiktok، ❣️",'callback_data'=>'t'],["text"=>"Twitter،🌸",'callback_data'=>'w']],
] 
]) 
]); 
}
if($data=="bak"){
bot('deletemessage', [
'chat_id' => $chat_id2, 
'message_id' =>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"
-اهلا بك عزيزي في بوت التحميل
- اختر احد الاوامر من الاسفل",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"youtu، 💚",'callback_data'=>'y'],["text"=>"instagram، ♥️",'callback_data'=>'i']],
[["text"=>"feacbook، 💛",'callback_data'=>'f']],
[["text"=>"tiktok، ❣️",'callback_data'=>'t'],["text"=>"Twitter،🌸",'callback_data'=>'w']],
] 
]) 
]); 
}
if($data=="f"){
bot('deletemessage', [
'chat_id' => $chat_id2, 
'message_id' =>$message_id
]);
bot('sendMessage',[
 'chat_id'=>$chat_id2,
 'text'=>"
• Now send video or photo link 🔱 •
• الان ارسل رابط الفيديو  🔱•
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع", 'callback_data'=>'bak']],
]
])]);}
if($data=="y"){
bot('deletemessage', [
'chat_id' => $chat_id2, 
'message_id' =>$message_id
]);
bot('sendMessage',[
 'chat_id'=>$chat_id2,
 'text'=>"
• Now send video or photo link 🔱 •
• الان ارسل رابط الفيديو 🔱•
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع", 'callback_data'=>'bak']],
]
])]);}
if($data == "i"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• Now send video or photo link 🔱 •
• الان ارسل رابط الفيديو 🔱•
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ، 💚",'callback_data'=>'bak']],
] 
]) 
]); 
}
if($data == "t"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• Now send video or photo link 🔱 •
• الان ارسل رابط الفيديو 🔱•
***https://t.me/c_941/1535***
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع ، 💚",'callback_data'=>'bak']],
] 
]) 
]); 
}
if($data=="w"){
bot('deletemessage', [
'chat_id' => $chat_id2, 
'message_id' =>$message_id
]);
bot('sendMessage',[
 'chat_id'=>$chat_id2,
 'text'=>"
• Now send video or photo link 🔱 •
• الان ارسل رابط الفيديو او الصورة 🔱•
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع", 'callback_data'=>'bak']],
]
])]);
}


if(preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $text)){
$motaz = json_decode(file_get_contents("https://sand65.ml/api/free/youtup.php?vid=$text&q=360"),true);
$aldrsy = $motaz['url'];
$sand = $motaz['title'];
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$aldrsy,
'caption'=>$sand ,
'reply_to_message_id'=>$message->message_id,
]);}

if(preg_match('/.*twitter\.com.*/i',$text)){
$motaz = json_decode(file_get_contents("https://sand65.ml/api/free/twetar.php?url=$text"));
$ok_taz = $motaz->url;
bot('sendVideo', [
'chat_id'=>$chat_id,
'video'=>$ok_taz,
'reply_to_message_id'=>$message->message_id,
]);}

if(preg_match('/.*instagram\.com.*/i',$text)){
$motaz = json_decode(file_get_contents("https://sand65.ml/api/free/insta.php?url=$text"));
$taz = $motaz->url;
bot('sendVideo', [
'chat_id'=>$chat_id,
'video'=>$taz,
'reply_to_message_id'=>$message->message_id,
]);}


