# Laravel-Web-2
Build Website with Framework Laravel and using PostgreSQL

Step run project
1. composer install
2. npm install
3. npm run build
4. docker-compose up -d --build
5. docker exec -it laravel-app bash
6. php artisan migrate
7. composer require mateusjunges/laravel-kafka


-Zookeeper:
zookeeper-server-start.bat .\config\zookeeper.properties

-Kafka:
.\bin\windows\kafka-server-start.bat .\config\server.properties

-Consumer:
.\bin\windows\kafka-console-consumer.bat --topic MyFirstTopic --from-beginning --bootstrap-server localhost:9092

-Producer:
.\bin\windows\kafka-console-producer.bat --topic MyFirstTopic --bootstrap-server localhost:9092


