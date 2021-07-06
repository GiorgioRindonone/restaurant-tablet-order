<?php

namespace App\Http\Controllers\Guest;

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use App\Plate;

use Illuminate\Http\Request;
class OrderController extends Controller
{

    public function formOrder($id)
    {

        $restaurant = User::find($id)->first();

        return view('guest.checkout', compact('restaurant', 'token'));


    }

    public function storePayment(Request $request)
    {
         $request->validate([
            'table_order' => 'required', 'string', 'max:255',
            'total' => 'required', 'numeric',
        ]);

        foreach ($request->plates_id as $id) {
            intval($id);
        }

    
            

        $data = $request->all();

        // $data['total'] = 20;
        $data['plates'] = $request->plates_id;

        $plates = Plate::find($request->plates_id[0]);

        $restaurant = User::where('id', $plates->user_id)->first();


        $newOrder = new Order();
        $newOrder->table_order = $data['table_order'];
        $newOrder->total = $data['total'];
        $newOrder->save();
        
        $newOrder->plates()->attach($data['plates']);



        return view('guest.success');
    }
}