<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Junges\Kafka\Facades\Kafka;

class KafkaController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = [
            'key' => 'your-key',
            'body' => ['your' => 'message'],
        ];

        Kafka::publishOn('your-kafka-topic', $message);

        return response()->json(['status' => 'Message sent to Kafka']);
    }
}
