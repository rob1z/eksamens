<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbController extends Controller
{
    public function valorantData(){
        return DB::select(
            'SELECT * from abilities;'
        );
    }}

