<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class TelegramHelpers
{
    public static $token = '5676123114:AAG97ThZM-6yG6Y2p0bVzYIZYTB2GqBX_Mc';

    public static function sendMessage($text = '',$chat_id= null ){
        $params = [
            'chat_id' =>$chat_id ?? 702547418,
            'text' => $text,
            'parse_mode' => 'html'
        ];
        Http::get('https://api.telegram.org/bot'. static::$token .'/sendMessage', $params);
    }
}
