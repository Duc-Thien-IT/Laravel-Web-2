<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\KafkaConsumer;

class KafkaConsumeCommand extends Command
{
    protected $signature = 'kafka:consume';
    protected $description = 'Consume messages from Kafka';

    protected $kafkaConsumer;

    public function __construct(KafkaConsumer $kafkaConsumer)
    {
        parent::__construct();
        $this->kafkaConsumer = $kafkaConsumer;
    }

    public function handle()
    {
        $this->info('Starting Kafka consumer...');
        $this->kafkaConsumer->consume();
    }
}
