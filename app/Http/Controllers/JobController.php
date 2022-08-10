<?php

namespace App\Http\Controllers;

use App\Jobs\JobTeste;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct()
    {
    }

    public function job()
    {
        JobTeste::dispatch();
        return json_encode([
            'message' => 'job dispatched!'
        ]);
    }
}
