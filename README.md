# Laravel-Web-2
Build Website with Framework Laravel and using PostgreSQL

Step run project
1. composer install
2. npm install
3. npm run build
4. docker-compose up -d --build
5. docker exec -it laravel-app bash
6. php artisan migrate
7. docker compose exec app bash -c "php -m | grep rdkafka" rdkafka
8. docker compose exec app composer require mateusjunges/laravel-kafka
9. 


-Zookeeper:
zookeeper-server-start.bat .\config\zookeeper.properties

-Kafka:
.\bin\windows\kafka-server-start.bat .\config\server.properties

-Consumer:
.\bin\windows\kafka-console-consumer.bat --topic MyFirstTopic --from-beginning --bootstrap-server localhost:9092

-Producer:
.\bin\windows\kafka-console-producer.bat --topic MyFirstTopic --bootstrap-server localhost:9092

==================== RUN SWAGGER ======================= <br>
composer require zircote/swagger-php
laravel-web-2>composer require darkonline/l5-swagger
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
php artisan l5-swagger:generate

