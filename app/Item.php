<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";
    protected $fillable = ['item_name', 'price'];

    public function orders()
    {
         return $this->hasMany('App\Order');
    }
}
