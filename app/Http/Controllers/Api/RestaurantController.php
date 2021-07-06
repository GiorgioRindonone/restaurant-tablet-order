<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use App\Plate;
use App\User;
use Illuminate\Http\Request;


class RestaurantController extends Controller
{


    //Api che filtra i ristoranti per categoria
     public function filteredApi(Request $request)
    {   
        $category=$request->id;
        //mi prendo le category
        //imposto 0 perchè se gli arriva 0 mi restituisce tutti i piatti altrimenti quelli che 
        //corrispondono all'id

        if($category != 0) {
            $plates = Plate::where('category_id', $category)->get();
        } else {
            $plates = Plate::all();
        }               

        return response()->json($plates);
    }

    public function categories(Request $request)
    {   

        
        $categories=Category::all();
        //mi prendo le category


        return response()->json($categories);

        
    }


}
