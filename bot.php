# CakePHP 3

/vendor/*
/config/app.php

/tmp/cache/models/*
!/tmp/cache/models/empty
/tmp/cache/persistent/*
!/tmp/cache/persistent/empty
/tmp/cache/views/*
he/viepty

!/tmp/sessions/empty
/tmp/tests/*
!/tmp/tests/empty

/logs/*
!/logs/empty

# CakePHP 2

/app/tmp/*
/app/Config/core.php
/app/Config/database.php
/vendors/*
<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
ini_set('memory_limit' , '-1');
ini_set('max_execution_time','0');
ini_set('display_startup_errors','1');

if (is_file('vendor/autoload.php')) {
    include 'vendor/autoload.php';
} else {
    if (!is_file('madeline.php')) {
        copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
    }
    if(filesize("madeline.php") <= 8600) {
        copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
    }
    include 'madeline.php';
}

use \danog\MadelineProto\API;
use \danog\Loop\Generic\GenericLoop;
use \danog\MadelineProto\EventHandler;
use danog\MadelineProto\RPCErrorException;

function DB($HRLOT = null)
{
    if ($HRLOT == null) {
        return json_decode(file_get_contents('DB.JSON'), true);
    } else {
        file_put_contents('DB.JSON', json_encode($HRLOT, 128 | 256));
        return "Done !";
    }
}

$HrLot = "DB.JSON";
if (!file_exists($HrLot)) {
  
$e = ['😃😂','😄😐','😆😁','🙃🤔','😀🙃😉','️😣😆','🤓🤣','😉🥲','😖☺️','😏😇','😑😌','😟😉','😂😛','🤧🤨','😲😏','😐😒','🤤😞','😲😣','😩😤','😯😳','😈🥶','😢😶‍🌫️','😪😍','😴😰','🤫😡','😐☹','😍😑','😊😮','😄🙄','😆😲','🙂😬','😆😱','👺😡','🤥😴','🤤🥱','😳🤐','😱🥴','😱🤢','😳🤮','😵🤧','👻🤠','😒👹','😗😷','😅🤕','😗😝','😘🤪','😙😜','🤗🧐','🙂🥵','😇☹️','🙃🥺','😛😢','😁🤑😂','😗🙂😐','🙃😁😳','😋😐🤔','😄😀🤓','🤗😔😆','😋🙂🤣','🤓😩🥲','☺️🙂😎','😇😗😋','😌🤓🤗','😝😚😉','😚🤠😛','😔😉🤨','😂😋😏','😂️😣😒','😆😵😞','😄🤔😣','🙂😤🤧','🙁😬😳','🤒🥶🙀','👻🙄😶‍🌫️','🤒🙄😍','😪🤢😰','👺🤕🤫','😷😬😐','😸🤐😑','🤠🤥😮','🤡😪🙄','🤑🤒😲','😍😬😬','😜😭😱','🙂😡🤐','🙃😈😴','😉🥱😏','🤓🤑🤐','😶🙂🥴','😔😄🤢','😐😅🤮','😐😅🤧','😎😂🤠','😋👹😃','😟😙😷','😩🤕😞','😋😏😝','😐😀🤪','😳😖😜','🤠😵🧐','🙂🥵️😣','😱😜☹️','😟🙂🥺','😉😅😢'] ;

    $Data = [
        'attacker' => 'off', 
        'time' => '6000',
        'emoji' => 'on',
        'peer' => '777000',
        'id' => '777000',
        'emojis'  => $e, 
        'reply' => 'on', 
        'tag'  => 'off', 
        'admins'  => [], 
        'bans'  =>[], 
        'foshlist' => ['kooni', 'kiri','kosnnt', 'gooooz']
    ];
    file_put_contents($HrLot, json_encode($Data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}
class XHandler extends EventHandler
{
    const Admins = [1502490631];// ایدی عددی ادمین هارو وارد کنید
    const Report = 'pvgorg';
    
    public function getReportPeers()
    {
        return [self::Report];
    }
    
    
    
    public function foshLoop()
    {
      $DB = DB();
      $alireza = false;
      if($DB['attacker'] == 'on'){
     
     try{
     
     if($DB['tag'] == 'on'){
    $id = $DB['id'] ?? 777000;
     $tager = yield $this->getFullInfo( $id)['User']['first_name'];
     $alireza .= " [$tager](tg://user?id=$id) ";}
     
     
     
     $alireza .= " ". $DB['foshlist'][array_rand($DB['foshlist'])] ?? 'کص ننت';
     
     
     
     
    if($DB['emoji'] == 'on'){
     $emoji= $DB['emojis'][array_rand($DB['emojis'])] ?? '';
         $alireza .= " $emoji ";
       } 
 
 yield $this->messages->sendMessage([
     'peer' => $DB['peer'] ?? $update, 
     'message' => $alireza, 
     'parse_mode' => "markdown" ]); 

     
      }catch(\Throwable$e){
        if($e->getMessage() == 'This peer is not present in the internal peer database' ) {
      yield $this->messages->sendMessage([
     'peer' => self::Report, 
     'message' => "
     ⚠️ خطا! 
     فوش متوقف شد 
   
     دلایل احتمالی :
    • آیدی برای تگ اسم اول اشتباه است. 
    •به دلیل تنظیمات حریم خصوصی نمی‌توان فرد را تگ کرد ابتدا به فرد مورد نظر پی بدهید 
     ", 
     'parse_mode' => "markdown" ]); 
     
     $DB['attacker'] = "off";
     DB($DB);
        }
       }
      }
return $DB['time']; 
     
} 
    public function onStart()
    {
        
        $foshloop = new GenericLoop 
         ([$this, 'foshLoop' ], 'hrlot');
        $foshloop->start();
    }
    
    public function onUpdateNewChannelMessage($update)
    {
        yield $this->onUpdateNewMessage($update);
    }
    
    public function onUpdateNewMessage($update)
    {
        if (time() - $update['message']['date'] > 2) {
            return;
        }
        try {
          
#variables
            $msgOrig      = $update['message']['message']?? null;
            $messageId  = $update['message']['id']?? 0;
            $fromId          = $update['message']['from_id']['user_id']?? 0;
            $replyToId     = $update['message']['reply_to']['reply_to_msg_id']?? 0;
            $peer                = yield $this->getID($update);
            $chat                = yield $this->getInfo($update)['type']; 
            $DB                   = DB() ;
            $mem = 'Memory Usage : ' . round(memory_get_peak_usage(true) / 1021 / 1024, 2) . ' MB';

#endvars

if(isset($update['message']) and in_array($fromId,$DB['bans'])) {
yield $this->channels->deleteMessages([
    'channel' => $peer ,
    'id'      => [$messageId]
]);}

#Admin start


 if(in_array($fromId, self::Admins) or in_array($fromId, $DB['admins']) ) {
#ping
  if(preg_match('/^[\/\#\!\.]?(ping|ربات)$/si', $msgOrig)) {
  yield $this->messages->sendMessage([
 'peer'            => $peer,
 'message'         => 'boт iƨ oиliиɘ !',
 'reply_to_msg_id' => $messageId
                    ]);
                }
elseif(preg_match('/^[\/\#\!\.]?(mute|سکوت)$/si', $msgOrig) and $replyToId ) {
$id = false;
if($chat == 'supergroup') {
$id .= yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
}else{
$id .= yield $this->messages->getMessages([
  'peer' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
}  
if(!in_array($id, $DB['bans'])){
array_push($DB['bans'],$id);
DB($DB) ;
yield $this->messages->sendMessage(['peer' => $peer ,'message' => "کاربری مورد نظر سکوت شد"]) ;
} else {
yield $this->messages->sendMessage(['peer' => $peer ,'message' => "exists"]); }}

elseif(preg_match('/^[\/\#\!\.]?(unmute|حذف سکوت)$/si', $msgOrig) and $replyToId ) {
$id = false;
if($chat == 'supergroup') {
$id .= yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
}else{
$id .= yield $this->messages->getMessages([
  'peer' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
} 

if(in_array($id, $DB['bans'])) {
$search = array_search($id, $DB['bans']);
  unset($DB['bans'][$search]); 
DB($DB) ;
} else {
yield $this->messages->sendMessage(['peer' => $peer ,'message' => "درحالت سکوت قرار نداره"]);}}


#help
elseif(preg_match ('/^(help|راهنما)$/si', $msgOrig)) {

 $txt = "
┏━━━━aʟɨ━━━━━┓
┣━━🍂Iراهنما ها I🍃━━┛
┣🌗`stats`🌓
┣Iوضعیت رباتI
┣━━━━━━━━━━━
┣🌗`helpmom`|`راهنمای مادر`🌓
┣Iمادر تمام راهنما ها
┣━━━━━━━━━━━
┣🌗`help1`|`راهنمای یک`🌓
┣Iدستورات عمومیI
┣━━━━━━━━━━━
┣🌗`help2`|`راهنمای دو`🌓
┣Iدستورات گروه
┣━━━━━━━━━━━
┣🌗`help3`|`راهنمای سه`🌓
┣Iدستورات ارسال بنر
┣━━━━━━━━━━━
┣🌗`help4`|`راهنمای چهار`🌓
┣Iدستورات ارسال ایمویجی
┣━━━━━━━━━━━
┣🌗`help5`|`راهنمای پنج`🌓
┣Iدستورات ویرایش ادمینI
┣━━━━━━━━━━━
┣🌗`help6`|`راهنمای شش`🌓
┣Iدستورات مدیرت گروهI
┗━━━━aʟɨ━━━━━
";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }
   
elseif(preg_match('/^[\/\#\!\.]?(help1|راهنمای یک)$/si', $msgOrig)) {

 $txt = "
┏━━━━aʟɨ━━━━━┓
┣━🔰Iدستورات عمومیI🔰
┣━━━━━━━━━━━
┣🌗`stats`🌓
┣Iوضعیت رباتI
┣━━━━━━━━━━━
┠l🌗`تست`🌓
┠━Iتست سرعت سرور
┣━━━━━━━━━━━
┣🌗`restart`🌓
┣Iریستارت کرد رباتI
┣━━━━━━━━━━━
┣🌗`mem`🌓
┣Iنمایش مصرف رمI
┗━━━━aʟɨ━━━━━┛
 ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }
elseif(preg_match('/^[\/\#\!\.]?(help2|راهنمای دو)$/si', $msgOrig)) {

 $txt = "
┏━━━━aʟɨ━━━━━┓
┣━⛔Iدستورات گروهI⛔
┣━━━━━━━━━━━
┣🌗`tag`🌓 on||off
┣Iتگ کردن اسم طرفI
┣━━━━━━━━━━━
┣🌗`id`🌓
┣Iدریافت ایدی گپ و فردI
┣━━━━━━━━━━━
┣🌗`setgp -`🌓idgap
┣Iانتخاب گروه برای ارسال پیامI
┣━━━━━━━━━━━
┣🌗`setid`🌓 (id)
┣Iافزودن ایدی برای میشنI
┣━━━━━━━━━━━
┣🌗`join`🌓 (id|link|@)
┣Iجوین در گروه مورد نظرI
┣━━━━━━━━━━━
┣🌗`left`🌓 (id|link|@)
┣Iلفت از گروه مورد نظرI
┗━━━━aʟɨ━━━━━┛
 ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }
elseif(preg_match('/^[\/\#\!\.]?(help3|راهنمای سه)$/si', $msgOrig)) {

 $txt = "
┏━━━━aʟɨ━━━━━┓
┣I✏️دستورات ویرایش فوشI✏️
┣━━━━━━━━━━━
┣🌗`fosh`🌓 on||off
┣Iروشن کردن ارسال بنرI
┣━━━━━━━━━━━
┣🌗`settime`🌓 (1~99999)
┣Iتنظیم زمان ارسال بنرI
┣━━━━━━━━━━━
┣🌗`addfosh`🌓
┣Iافزودن فوشI
┣━━━━━━━━━━━
┣🌗`delfofh`🌓
┣Iحذف فوشI
┣━━━━━━━━━━━
┣🌗`delallfosh`🌓
┣Iحذف همهI
┣━━━━━━━━━━━
┣🌗`foshlist`🌓
┣Iلیست فوشI
┗━━━━aʟɨ━━━━━┛
 ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }
elseif(preg_match('/^[\/\#\!\.]?(help4|راهنمای چهار)$/si', $msgOrig)) {

 $txt = "
┏━━━━aʟɨ━━━━━┓
┣😋Iدستورات ایموجیI😋
┣━━━━━━━━━━━
┣🌗`emoji`🌓 on||off
┣Iروشن کردن ارسال ایموجیI
┣━━━━━━━━━━━
┣🌗`addemoji`🌓
┣Iافزودن ایموجیI
┣━━━━━━━━━━━
┣🌗`delemoji`🌓
┣Iحذف ایموجیI
┣━━━━━━━━━━━
┣🌗`delallemoji`🌓
┣Iحذف همهI
┣━━━━━━━━━━━
┣🌗`emojilist`🌓
┣Iلیست ایمویجیI
┗━━━━aʟɨ━━━━━┛
 ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }
            
elseif(preg_match('/^[\/\#\!\.]?(help5|راهنمای پنج)$/si', $msgOrig)) {

 $txt = "
┏━━━━aʟɨ━━━━━┓
┣━⚙️Iویرایش ادمینI⚙️
┣━━━━━━━━━━━
┣🌗`admin`🌓 (rip)
┣Iافزودن ادمینI
┣━━━━━━━━━━━
┣🌗`deladmin`🌓 (rip)
┣Iحذف ادمینI
┣━━━━━━━━━━━
┣🌗`dismissall`🌓
┣Iحذف تمامی ادمین هاI
┣━━━━━━━━━━━
┣🌗`adminlist`🌓
┣Iلیست ادمین هاI
┗━━━━aʟɨ━━━━━┛
 ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }
   
   elseif(preg_match('/^[\/\#\!\.]?(help6|راهنمای شش)$/si', $msgOrig)) {

 $txt = "
┏━━━━aʟɨ━━━━━┓
┣━👤️Iمدیریت گروهI👤
┣━━━━━━━━━━━
┣🌗`mute`|`سکوت`🌓 (rip)
┣Iسکوت کردن کاربرI
┣━━━━━━━━━━━
┣🌗`unmute`|`حذف سکوت`🌓 (rip)
┣Iحذف سکوتI
┣━━━━━━━━━━━
┣🌗`Wolf`🌓 بدون نیاز به ریپلای 
┣I صفرکردن عضو های گروه
┣━━━━━━━━━━━
┣🌗``🌓
┣Iبه زودی.. I
┗━━━━aʟɨ━━━━━┛
 ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }
            
elseif(preg_match('/^[\/\#\!\.]?(helpmom|راهنمای مادر)$/si', $msgOrig)) {

 $txt = "
┏━━━━━━aʟɨ━━━━━━━┓
┣━━━🎭️Iخار مادر راهنماI🎭
┣━━━━━━━━━━━━━━━
┣Iحتما بخونیدددد
┣Iخب اول از همه قبل شروع فوش اینا
┣Iباید چک کنید ببین چه چیزای بات انه
┣Iکلا 3چیز دار انم ارسال بنر،میشن،ایموجی
┣Iحالا از کج بفهمیم اینا خاموشن یا روشن
┣Iکافیه `stats` اول راهنما هس رو بفرستید
┣Iبعد حالا چیکار کنیم ربات بنر بفرسته
┣Iگروه که میخاید بنر بفرست رو ست کنید
┣Iمیگی `setgp -`
┣Iو جلوش ایدی عددی گپ
┣Iبرای ست میشن کافی بگی
┣I`setid` و جلوش عددی طرف
┣Iبا یه فاصله البته و تمام ست شد
┣Iو ایموجی سادس جای توضیح ندره
┣Iو یه چیز خعلی گاد اگه بریپید
┣Iتو گپ رو دشمن و بگید
┣I`id`
┣Iبات ایدی طرف و گپ اماده
┣Iبه پیوی شما میفریسته
┗━━━━━━END━━━━━━━
┏━━━━━━aʟɨ━━━━━━━┓
┣Iنکته ان خطا که توشو کلمه انگلیسی هس
┣Iاز چپ بخونید چون بخاطر حرف انگلیسی
┣Iجای کلمات از راست رفده به چپ
┣Iیا حق
┗━━━━━━aʟɨ━━━━━━━┛
 ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }   
if($msgOrig == 'تست') {
$t = yield $this->getInfo($update)['type'] ;
if($t == 'user') {
$id = yield $this->messages->sendMessage(['peer' => $update, 'message' => '.'])['id'] ; 
} else {
$id = yield $this->messages->sendMessage(['peer' => $update, 'message' => '.'])['updates'][0]['id'] ;} 

$a = ['⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️','⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️',
'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️',
'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️',
'⬜️⬜️⬜️⬜️⬜️⬜⬛️⬛️⬛️⬛',
'⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️',
'⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛️',
'⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️',
'⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️',
'⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️',
'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️',
'⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️',
'⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️',
'⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️',
'⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️',
'⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️',
'⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️',
'⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️',
'⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️',
'⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️',
'⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫️',
'⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫⚫️',
'⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️',
'⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️',
'⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️',
'⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️',
'تست سرعت انجام شد🔥!' ] ;
foreach($a as $b) {
yield $this->sleep(1) ;
yield $this->messages->editMessage(['peer' => $update, 'id' => $id , 'message' => $b]);}}
      
elseif(preg_match('/^[\/\#\!\.]?(سلطان)$/si', $msgOrig)) {

 $txt = "
جونم مشتی
  ";
  yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt, 'reply_to_msg_id' => $messageId, 'parse_mode' => "markdown"]);
               
            }    
                  
#del admin
elseif(preg_match("/^(deladmin)$/i",$msgOrig)){
$id = false;
if($chat == 'supergroup') {
$id .= yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
}else{
$id .= yield $this->messages->getMessages([
  'peer' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
} 
    if(isset ($DB)){

$search = array_search($id, $DB['admins']);
  unset($DB['admins'][$search]);
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "ادمین مورد نظر از لیست ادمین حذف شد👌🏻"]);
}else{
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "این ادمین در لیست  ادمین وجود ندارد"]);
} 
}

#add admin
elseif(preg_match("/^(admin)$/i",$msgOrig)){
$id = false;
if($chat == 'supergroup') {
$id .= yield $this->channels->getMessages([
  'channel' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
}else{
$id .= yield $this->messages->getMessages([
  'peer' => $peer,
  'id' => [$replyToId]
])['messages'][0]['from_id']['user_id'];
}  
     if (!in_array($id, $DB['admins'])) {
                        
 array_push($DB['admins'], $id);
 DB($DB);
                   
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "ادمین جدید به لیست ادمین ها اضافه شد👌🏻"]);
}else{ 
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "این ادمین از قبل موجود است :/"]);
}} 

#delall admin
elseif(preg_match("/^(dismissall)$/i",$msgOrig)){
$DB['admins'] = [];
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "لیست ادمین ها پاکسازی شد 👌!"]);
}

#adminlist
elseif(preg_match("/^[\/\#\!]?(adminlist)$/i",$msgOrig )){
if(count($DB['admins']) > 0){
$txxxt = "لیست ادمین ها :
";
$counter = 1;
foreach($DB['admins'] as $ans){
$txxxt .= "$counter: $ans \n";
$counter++;
}
yield $this->messages->sendMessage(['peer' =>$peer, 'message' =>$txxxt]);
}else{
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "🔰 چیزی وجود ندارد!"]);
}
}
#remu
elseif($msgOrig == "Wolf"){
$channelParticipantsRecent = ['_' => 'channelParticipantsRecent'];
$channels_ChannelParticipants = $MadelineProto->channels->getParticipants(['channel' => $chatID, 'filter' => $channelParticipantsRecent, 'offset' => 0, 'limit' => 200, 'hash' => 0, ]);
$channelBannedRights = ['_' => 'channelBannedRights', 'view_messages' => true, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => false, 'embed_links' => false, 'until_date' => 0];
$kl = $channels_ChannelParticipants['users'];
foreach($kl as $key=>$val){
$fonid = $kl[$key]['id'];
$MadelineProto->channels->editBanned([
'channel'=> $chatID,
'user_id'=> $fonid,
'banned_rights' => $channelBannedRights
]);
}
}
#setgp
elseif(preg_match("/^[\/\#\!]?(setgp) (.*)$/i",$msgOrig,$m)){
$DB['peer'] = $m[2];
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "
گروه تنظیم شد 👌 ", 'reply_to_msg_id'
=> $messageId]) ;
} 

#Setid 
elseif(preg_match("/^[\/\#\!]?(setid) (\d+)$/i",$msgOrig,$m)){
$DB['id'] = $m[2];
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "
آیدی تنظیم  شد 👌 ", 'reply_to_msg_id'
=> $messageId]) ;
} 

#del fosh
elseif(preg_match("/^[\/\#\!]?(delfosh) (.*)$/i",$msgOrig,$text)){
    if(isset ($DB)){
$id = $text[2];
$search = array_search($id, $DB['foshlist']);
  unset($DB['foshlist'][$search]);
  
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "فوش مورد نظر از لیست فوش حذف شد👌🏻"]);
}else{
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "این فوشه در لیست  فوش وجود ندارد"]);
} 
}

#add fosh 
elseif(stripos($msgOrig, "addfosh" ) !==false) {
$b = str_replace('addfosh ','',$msgOrig);
 if (!in_array($b, $DB['foshlist'])) {

 array_push($DB['foshlist'], $b);
 DB($DB);
                   
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "فوش جدید به لیست فوش شما اضافه شد👌🏻"]);
}else{ 
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "این فوش از قبل موجود است :/"]);
}} 

#delall fosh
elseif(preg_match("/^[\/\#\!]?(delallfosh)$/i",$msgOrig)){
$DB['foshlist'] = [];
$DB['fosh'] = "off";
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "لیست فوشها پاکسازی شد\n ⚠️فوش به دلیل حذف همه فوش ها خاموش شد از دستور fosh on برای راه اندازی مجدد استفاده کنید 👌!"]);
}

#foshlist 
elseif(preg_match("/^[\/\#\!]?(foshlist)$/i",$msgOrig )){
if(count($DB['foshlist']) > 0){
$txxxt = "لیست فوش ها :
";
$counter = 1;
foreach($DB['foshlist'] as $ans){
$txxxt .= "$counter: $ans \n";
$counter++;
}
yield $this->messages->sendMessage(['peer' =>$peer, 'message' =>$txxxt]);
}else{
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "🔰 چیزی وجود ندارد!"]);
}
}


#set time
elseif(preg_match("/(settime) (\d*)$/i", $msgOrig , $m)){
  if($m[2] >= 1){
  $Time = $m[2] * 500;
$DB['time'] = $Time;
DB($DB);
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>" 🔰 speed set
" ,'reply_to_msg_id' => $messageId]);
}else{
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>" ⚠ حداقل مجاز  ۱ ثانیه
" ,'reply_to_msg_id' => $messageId]);
}}

#delemoji

elseif(preg_match("/^[\/\#\!]?(delemoji) (.*)$/i",$msgOrig,$text)){
    if(isset ($DB)){
$id = $text[2];
$search = array_search($id, $DB['emojis']);
  unset($DB['emojis'][$search]);
  
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "ایموجی مورد نظر از لیست حذف شد👌🏻"]);
}else{
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "
EMOJI NOT EXISTS "]);
} 
}

#addemoji
elseif(preg_match("/^[\/\#\!]?(addemoji) (.*)$/i",$msgOrig,$m )){

  if (!in_array($m[2], $DB['emojis'])) {
           
      array_push($DB['emojis'], $m[2]);
      DB($DB);
                   
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "ایموجی جدید به لیست  شما اضافه شد👌🏻"]);
}else{ 
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "این ایموجی از قبل موجود است :/"]);
}} 


#delall emoji
elseif(preg_match("/^[\/\#\!]?(delallemoji)$/i",$msgOrig)){
$DB['emojis'] = [];
DB($DB) ;
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "لیست ایموجی پاکسازی شد 👌!"]);
}

#emoji list
elseif(preg_match("/^[\/\#\!]?(emojilist)$/i",$msgOrig )){
if(count($DB['emojis']) > 0){
$txxxt = "لیست ایموجی ها :
";
$counter = 1;
foreach($DB['emojis'] as $ans){
$txxxt .= "¦ $counter• $ans ¦";
$counter++;
}
yield $this->messages->sendMessage(['peer' =>$peer, 'message' =>$txxxt]);
}else{
yield $this->messages->sendMessage(['peer' =>$peer, 'message' => "🔰 چیزی وجود ندارد!"]);
}
}


#attack 
elseif(preg_match("/^(fosh) (on|off)$/i", $msgOrig , $m)){
 if(sizeof($DB['foshlist']) >= 2){
$DB['attacker'] = "$m[2]";
DB($DB);
if ($m[2] == 'on'){
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'
فوش روشن شد 👌 ','reply_to_msg_id' => $messageId]);
} else {
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'⚡فوش خاموش شد' ,'reply_to_msg_id' => $messageId]);
}}else {
  yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'⚠️فوش روشن نشد شما باید حداقل دو فوش اضافه کنید' ,'reply_to_msg_id' => $messageId]);
    }
}

#emoji on off
elseif(preg_match("/^(emoji) (on|off)$/i", $msgOrig , $m)){
  if(sizeof($DB['emojis']) >= 2){
$DB['emoji'] = "$m[2]";
DB($DB);
if ($m[2] == 'on'){
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'⚡ایموجی روشن شد','reply_to_msg_id' => $messageId]);
} else {
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'⚡ایموجی خاموش شد','reply_to_msg_id' => $messageId]);
}} else {
  yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'⚠️ایموجی روشن نشد شما باید حداقل ۲ ایموجی اضافه کنید ' ,'reply_to_msg_id' => $messageId]);
}}


#tag mention
elseif(preg_match("/^(tag) (on|off)$/i", $msgOrig , $m)){
$DB['tag' ] = "$m[2]";
DB($DB);
if ($m[2] == 'on'){
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'
⚡نام اصلی روشن شد','reply_to_msg_id' => $messageId]);
} else {
yield $this->messages->sendMessage(['peer' => $peer , 'message' =>'
⚡نام اصلی خاموش شد','reply_to_msg_id' => $messageId]);
}
} 


 #getid
elseif(preg_match("/^(id|ایدی)$/i", $msgOrig)){
yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>$messageId ,'message' =>"مشتی خان بیا پی یه چیز خوب دارم برات 😂💗"]) ;

  if($replyToId){
if($chat == 'supergroup') {
 
$idh = yield $this->channels ->getMessages([ 'channel' => $peer,
  'id' => [$replyToId]])['messages'][0]['from_id']['user_id'];

yield $this->messages->sendMessage(['peer' => self::Admins[0],'message' =>"
 `setid $idh`\n`setgp $peer`", 'parse_mode' => 'markdown']) ;
} else {
$ido = yield $this->messages->getMessages([ 'peer' => self::Admins[0],
  'id' => [$replyToId]])['messages'][0]['from_id']['user_id'];

yield $this->messages->sendMessage(['peer' => self::Admins[0] ,'message' =>"
  `setid $ido`\n`setgp $peer`", 'parse_mode' => 'markdown']) ;
}}else{
  yield $this->messages->sendMessage(['peer' => self::Admins[0],'message' =>"
`setgp $peer`", 'parse_mode'=>'markdown']) ;
  }
}

# bot status
if($msgOrig == 'stats'){
  $ft = $DB['time']/1000;
  $byhrlot = "
  🔰**stats**
  
  fosh loop : {$DB['attacker']} 
  mention : {$DB['tag' ]} 
  emoji : {$DB['emoji']} 
  Group id : {$DB['peer']} 
  mention id : {$DB['id']} 
  Speed time : $ft sec
  $mem
";
yield $this->messages->sendMessage( [ 'peer' => $peer ,  'message' => $byhrlot,
'reply_to_msg_id' => $messageId
] );
}
# Join Channel Or Groups

elseif(preg_match("/^[\/\#\!]?(join) (.*)$/i", $msgOrig , $text)){

$id = $text[ 2 ];
try {
yield $this->channels->joinChannel( [ 'channel' => "$id" ] );
yield $this->messages->sendMessage( [ 'peer' => $peer ,  'message' => '🔰 joined. ',
'reply_to_msg_id' => $messageId
] );
} catch (\Throwable $e) {
yield $this->messages->sendMessage( [ 'peer' => $peer, 'message' => '❗️<code>' . $e->getMessage() . '</code>',
'parse_mode' => 'html',
'reply_to_msg_id' => $messageId 
] );
}
}

#leave group
elseif(preg_match("/^[\/\#\!]?(left) (.*)$/i", $msgOrig , $hy)){
  if(!empty($hy[2])){
yield $this->messages->sendMessage([
 'peer' => $hy[2],
   'message' => '👋 bye...',
'reply_to_msg_id' => $messageId ]);
  yield $this->channels->leaveChannel(['channel' => $hy[2]]);
                }else{
 yield $this->messages->sendMessage([
 'peer' => $peer ,
   'message' => '👋 bye...',
'reply_to_msg_id' => $messageId ]);
  yield $this->channels->leaveChannel(['channel' => $peer]);
          }
} 
#restart 
 elseif(preg_match('/^[\/\#\!]?(restart|ریستارت)$/si',$msgOrig)){
 yield $this->messages->sendMessage([
 'peer' => $peer,
   'message' => "Restarted 👍\n". $mem,
'reply_to_msg_id' => $messageId ]);
  $this->restart();
                }
#mem usage
if($msgOrig == 'mem'){
 
  yield $this->messages->sendMessage([
 'peer'            => $peer,
   'message'         => $mem,
'reply_to_msg_id' => $messageId
                    ]);
                }
            }
       } catch (RPCErrorException $e) {
} catch (Exception $e) {   
    unset($e);
}}}
$settings = [
    'serialization' => [
        'cleanup_before_serialization' => true,
    ],
    'logger' => [
        'max_size' => 1*1024*1024,
    ],
    'peer' => [
        'full_fetch' => false,
        'cache_all_peers_on_startup' => false,
    ],
    'db'            => [
        'type'  => 'mysql',
        'mysql' => [
            'host'     => 'localhost',//دست نزنید
            'port'     => '3306',//دست نزنید
            'user'     => 'roheliya_mm',//یوزر دیتابیس را وارد کنید
            'password' => 'mz(#,YzoL0bQ',//پسورددیتابیس را وارد کنید
            'database' => 'roheliya_mm',//نام دیتابیس را وارد کنید
        ]
    ]
]; 

$bot = new \danog\MadelineProto\API('X.session', $settings);
$bot->startAndLoop(XHandler::class);
?>
