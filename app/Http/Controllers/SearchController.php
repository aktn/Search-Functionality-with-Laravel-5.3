<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	//if nth found, show this message
    	$noResult = ['error'=>'Nothing found on here'];

    	//when entered keyword
    	if($request->has('q')){
    		//search from product table with Scout
    		$query = Product::search($request->get('q'))->get();

    		//IF found return products otherwise display no result
    		return $query->count() ? $query:$noResult;
    	}
    	
    return $noResult;
	}
}
