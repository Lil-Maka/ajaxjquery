<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;
use Redirect,Response;
class GroceryController extends Controller
{
	public function index()
	{
		$data['groceries'] = Grocery::orderBy('id', 'desc')->paginate(8);
		return view('grocery', $data);
	}
    public function store(Request $request)
	{
	    $grocery = new Grocery();
	    $grocery->name = $request->name;
	    $grocery->type = $request->type;
	    $grocery->price = $request->price;

	    $grocery->save();
	    return response()->json(['success'=>'Data is successfully added']);
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$grocery = Grocery::where($where)->first();
		return Response::json($grocery);
	}

	public function destroy($id)
    {
        $grocery = Grocery::where('id',$id)->delete();
   
        return Response::json($grocery);
    }
}
