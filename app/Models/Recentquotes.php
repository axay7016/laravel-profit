<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recentquotes extends Model
{
    //
    protected $table = 'recent_quotes';
    public function getdata()
    {
        $data=Recentquotes::orderBy('quote_date', 'desc')->take(7)->get();
        return $data;
    }
}
