<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use CoinbaseCommerce\ApiClient;
use Illuminate\Http\Request;

class TelegramBotController extends Controller {
    public function index(){

        $telegram = new Api('1004513295:AAGtb1AdLi-TY1QGja57kT5d_ODeJq-kwvQ');
        $updates = $telegram->getWebhookUpdates();
        $response = Telegram::getMe();
        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();
        echo "Telegram Bot Was Init";

    }
}