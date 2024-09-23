<?php

namespace App\Http\Controllers;
use OpenApi\Attributes as OA;

#[
    OA\Info(version: "1.0.0", description: "Fusion Center Document", title: "No title "),
    OA\Server(url: 'http://127.0.0.1:8000/api', description: "local server"),
    OA\Server(url: 'http://staging.example.com', description: "Staging server"),
    OA\Server(url: 'http://example.com', description: "Product server"),
    OA\SecurityScheme(securityScheme: 'bearerAuth', type: "http", name: "Authorization", in: "header", scheme: "bearer"),
]

abstract class Controller
{
    
}
