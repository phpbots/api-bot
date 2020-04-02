<?php1135345138:AAG73satjWPlmzofkMoK3a1cJ7A_Gl_1gdU
1
efine('API_KEY',"توکن");countmsgbot($method,$datas=[])unction countmsgbot($method,$datas=[])


{
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
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;

$startnb = "متن شروع ربات جدید:-)";

$bot = json_decode(file_get_contents("https://binaam.000webhostapp.com/bot/countbot/api.php?token=$text&admin=$chat_id&start=$startnb"));

if($text == "/start"){
    countmsgbot("sendMessage",[
        "chat_id"=>$chat_id,
     countmsgbot($method,$datas=[])
   "text"=>"توکن ربات خود را ارسال کنید"
    ]);
}else if($bot->result->tag == "new") {
        countmsgbot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "
            ربات شما ساخته شد
            @".$bot->result->username
        ]);
    }elseif($bot->result->tag == "update"){
        countmsgbot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "ربات شما بروز شد
            @sadeghi_you_bo
"sadeghi
.$bot->result-sadeghi
>username
        ]);
    }else if($bot->result->error == countmsgbot($method,$datas=[])Token Not Found"){
        countmsgbot("sendMessage", [1135345138:AAG73satjWPlmzofkMoK3a1cJ7A_Gl_1gdU

            "chat_idhttps://t.me/pharq
> $chat_id,
            "text" => "توکن صحیح نمیباشد"
        ]);1135345138:AAG73satjWPlmzofkMoK3a1cJ7A_Gl_1gdU

    }else if($bot->result->error == "Admin Id is empty"){
        countmsgbot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "آیدی ادمین صحیح نیست"
        ]);https://t.me/pharq

    }else if($bot->result->error == "Start Text is empty"){
        countmsgbot("sendMessage", [
            "chat_id" => $chat_id,
            "text"جوین
 => "متن شروع خالی است"
        ]);
    }else if($bot->result->error ==on
 "Admin Id and Start Text is empty"){
        countmsgbot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "متن شروع و نام کاربری مدیر خالی است"
        ]);
    }
