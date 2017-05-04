<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class OrderController extends Controller
{
    public function index()
    {
        $order = DB::collection('order')->get();

        return view('bookindex', compact('order'));
    }

    public function create()
    {
//        return view('bookadd');
    }

    public function store(Request $request)
    {
        $order = new Order;
        $order->id =  $request->input('id');
        $order->location =  $request->input('location');
        $order->save();
        $order = DB::collection('order')->get();

        return view('bookindex', compact('order'));
    }

    public function show($id)
    {
        // Get the document of given id and return the view

        $order = DB::collection('order')->where('id', $id)->get();

        return view('bookview', compact('order'));
    }

    public function edit($id)
    {

        $order = DB::collection('order')->where('_id', $id)->get();

        return view('bookedit', compact('order'));
    }

    public function update(Request $request, $id)
    {

        DB::collection('order')->where('_id', $id)
            ->update([
                'location' => $request->input('location'),
            ] );

        $books = DB::collection('order')->get();

        return view('bookindex', compact('order'));
    }

    public function destroy($id)
    {
        // Delete the document of given id and return index view
        DB::collection('books')->where('_id', $id)->delete();
        $order = DB::collection('order')->get();
        return view('bookindex', compact('order'));
    }


}
