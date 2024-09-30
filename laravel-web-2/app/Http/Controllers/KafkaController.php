<?php

namespace App\Http\Controllers;

use App\Services\KafkaProducer;
use Illuminate\Http\Request;

class KafkaController extends Controller
{
    protected $kafkaProducer;

    public function __construct(KafkaProducer $kafkaProducer)
    {
        $this->kafkaProducer = $kafkaProducer;
    }

    public function produce(Request $request)
    {
        $message = $request->input('message');
        $this->kafkaProducer->produce(['message' => $message]);

        return response()->json(['status' => 'Message sent to Kafka']);
    }

    //Run cmd php artisan kafka:consume

}
