<?php

namespace App\Services;

use Junges\Kafka\Facades\Kafka;
use Junges\Kafka\Message\Message;

class KafkaConsumer
{
    protected $topic;

    public function __construct()
    {
        $this->topic = 'your-topic'; // Đặt tên chủ đề Kafka của bạn ở đây
    }

    public function consume()
    {
        Kafka::createConsumer([$this->topic])
            ->withConfigOptions([
                'metadata.broker.list' => 'localhost:9092', // Cấu hình Kafka broker của bạn
            ])
            ->withHandler(function (Message $message) {
                // Xử lý tin nhắn tại đây
                $this->handleMessage($message);
            })
            ->build()
            ->consume();
    }

    protected function handleMessage(Message $message)
    {
        // Xử lý tin nhắn từ Kafka
        // Ví dụ: Lưu tin nhắn vào cơ sở dữ liệu
        // $data = $message->getBody();
    }
}
