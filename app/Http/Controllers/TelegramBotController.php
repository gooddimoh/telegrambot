<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Illuminate\Http\Request;
use CoinbaseCommerce\ApiClient;


class TelegramBotController extends Controller
{
    public function index()
    {

        $telegram = new Api('1004513295:AAGtb1AdLi-TY1QGja57kT5d_ODeJq-kwvQ');
//        $response = Telegram::setWebhook(['url' => 'http://127.0.0.1:8000/1004513295:AAGtb1AdLi-TY1QGja57kT5d_ODeJq-kwvQ/webhook']);

        $updates = $telegram->getUpdates();
        $response = $telegram->getMe();
        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();

        $keyboard = [
            ['7', '8', '9'],
            ['4', '5', '6'],
            ['1', '2', '3'],
            ['0']
        ];

        //        $reply_markup = Telegram::replyKeyboardMarkup([
        //            'keyboard' => $keyboard,
        //            'resize_keyboard' => true,
        //            'one_time_keyboard' => true
        //        ]);
        //
        //        $response = Telegram::sendMessage([
        //            'chat_id' => 'CHAT_ID',
        //            'text' => 'Hello World',
        //            'reply_markup' => $reply_markup
        //        ]);

        $messageId = $response->getMessageId();

        echo "Telegram Bot Was Init";

        return (json_encode($updates));

    }
}