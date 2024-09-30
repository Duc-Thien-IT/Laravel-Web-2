<?php 

return [
    'brokers' => env('KAFKA_BROKERS', 'localhost:9092'),  
    'schema_registry' => env('KAFKA_SCHEMA_REGISTRY', 'http://schema-registry:8081'),  
    'topics' => [
        'test' => env('KAFKA_TOPIC_TEST', 'test_topic'),
    ],
    'schema_avro' => [
        'test' => env('KAFKA_SCHEMA_AVRO_TEST', 'test_schema'),
    ],
    'consumers' => [
        'test' => env('KAFKA_CONSUMER_TEST', 'test_consumer'),
    ],
    'offset' => [
        'test' => env('KAFKA_OFFSET_TEST', 'latest'),
    ],
];
