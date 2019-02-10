<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['user_id', 'item_id'];

    public function item()
    {
        return $this->beLongsTo('App\Item');
    }

    public function user()
    {
        return $this->beLongsTo('App\User');
    }
}
