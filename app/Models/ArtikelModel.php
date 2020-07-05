<?php

namespace App\Models;

use Illuminate\support\Facades\DB;

class ArtikelModel 
{
    public static function get_all()
    {
        $items = DB::table('artikels')->get();
        return $items;
    }
}
