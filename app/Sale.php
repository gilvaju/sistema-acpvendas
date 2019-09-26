<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['date', 'pieces', 'value', 'trade_pieces', 'trade_value'];
}
