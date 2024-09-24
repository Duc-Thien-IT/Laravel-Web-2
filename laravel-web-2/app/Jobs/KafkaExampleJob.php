<?php

namespace App\Jobs;

use Junges\Kafka\Facades\Kafka;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class KafkaExampleJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        // Gửi message đến Kafka
        Kafka::publishOn('your-kafka-topic', [
            'key' => 'your-key',
            'body' => ['your' => 'message'],
        ]);
    }
}
