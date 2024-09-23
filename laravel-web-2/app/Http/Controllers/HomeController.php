<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @OA\GET(
     *      path="/home",
     *      tags={"home"},
     *      summary="Get all Data",
     *      description="Get list of all data",
     *      @OA\Response(response=200, description="To retrieved successfully")
     * )
     */

    public function index()
    {
        return view('admin.index');
    }
}
