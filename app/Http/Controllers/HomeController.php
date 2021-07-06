<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;
use App\Plate;
use App\Category;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $media = DB::table("plates")->avg('price');

        $plates = Plate::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        //dd($user->address);
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.home', compact('plates', 'user', 'media', 'categories'));
    }
}
