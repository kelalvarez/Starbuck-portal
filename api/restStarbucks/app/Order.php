<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
    protected $table = 'orders';

    protected $id = ['id'];
    protected $location = ['location'];
}
