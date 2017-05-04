<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
    protected $table = 'orders';
    protected $location = ['location'];
    protected $status = ['status'];


    public function items()
    {
        return $this->hasMany('Item');
    }
}
