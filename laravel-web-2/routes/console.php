<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Jobs\KafkaExampleJob;
use Junges\Kafka\Facades\Kafka;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('kafka:consume', function () {
    $consumer = Kafka::createConsumer()
        ->subscribe('your-kafka-topic')
        ->withHandler(function ($message) {
            KafkaExampleJob::dispatch($message);
        })
        ->build();

    $consumer->consume();
})->describe('Consume messages from Kafka');

Artisan::command('kafka:consume', function () {
    Kafka::createConsumer(['test_topic'])
        ->withHandler(function ($message) {
            // Handle the consumed message
        })
        ->build()
        ->consume();
})->describe('Consume messages from Kafka topic');