<?php

namespace App\Services;

use Junges\Kafka\Facades\Kafka;

class KafkaProducer
{
    protected $topic;

    public function __construct()
    {
        $this->topic = 'your-topic'; // Đặt tên chủ đề Kafka của bạn ở đây
    }

    public function produce(array $messageBody)
    {
        Kafka::publishOn($this->topic)
            ->withConfigOptions([
                'metadata.broker.list' => 'localhost:9092', // Cấu hình Kafka broker của bạn
            ])
            ->withBody($messageBody)
            ->send();
    }
}
