<?php
    const TOKEN = '5462005495:AAHMvWfZrFYd4dR6mrSYg_A7LRJr4lxQB2M';
//    const BASE_URL
    echo $url = 'https://api.telegram.org/bot'.TOKEN.'/getUpdates';

//    function sendRequest($method, $params = [])
//    {
//        if (!empty($params)){
//            $url = BASE_URL . $method . '?' . http_build_query($params)
//        } else {
//            $url = BASE_URL . $method;
//        }
//        return json_decode(
//            file_get_contents($url),
//            JSON_OBJECT_AS_ARRAY
//        );
//    }
//
//    $updates = sendRequest('getUpdates');
//
//    foreach ($updates['result'] as $update) {
//        $chat_id = $update['message']['chat']['id'];
//        sendReuest('sendMessage', ['chat_id' => $chat_id, 'text' => 'answer']);
//    }

