<?php

use App\Item;

class OrderTableSeeder extends Seeder {

    public function run()
    {
        DB::table('order')->delete();
//
//        Order::create(array(
//            'location' => 'takeAway',
//            'status' => 'pending',
//             'items' => array(
//                      Item::create(array(
//
//
//                )))
//        ));
//
//
//        [
//            'username' => 'firstuser',
//            'name' => 'first user',
//            'email' => 'firstuser@email.com'
//        ],
//        Order::create(array(
//            'username' => 'seconduser',
//            'password' => Hash::make('second_password')
//        ));
    }

}