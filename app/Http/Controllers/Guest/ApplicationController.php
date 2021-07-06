<?php

namespace App\Http\Controllers\Guest;

use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use App\Plate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->get();
        $plates = Plate::all();
        $categories = Category::all();

        return view('guest.index', compact('users', 'categories', 'plates'));
    }


    public function show(User $user, Order $order )
    {
        return view('guest.show', ['user' => $user , 'order' => $order]);
    }
    
}
