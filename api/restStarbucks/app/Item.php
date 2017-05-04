<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Item extends Eloquent {
    protected $table = 'items';

    protected $name = ['name'];
    protected $quantity = ['quantity'];
    protected $milk = ['milk'];
    protected $size = ['size'];

    public function order()
    {
        return $this->belongsTo('Order');
    }
}
