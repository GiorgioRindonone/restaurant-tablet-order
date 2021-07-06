<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Order;
use App\Plate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function orders($id)
    {
        $user = Auth::user();
        return view('admin.orders.index', compact('user'));
    }
}
