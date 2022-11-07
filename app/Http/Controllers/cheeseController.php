<?php

namespace App\Http\Controllers;

use App\Models\cheese;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class cheeseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cheeses =  cheese::where('cheese_id', Auth::id())->latest('updated_at')->paginate(10);
        $cheeses =  cheese::paginate(2);

        return view('cheese.index')->with('cheeses', $cheeses);
      
       /*  return view('users'); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cheese.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:120',
            'description' =>'required'
        ]
        );
/* 
        $cheese = new cheese([
            	'cheese_id' =>Auth:: id(),
                'name'=> $request ->name,
                'description'=> $request ->description,
        ]); */

        cheese::create([
            'cheese_id' =>Auth:: id(),
                'name'=> $request ->name,
                'description'=> $request ->description,
                'type'=>$request ->type,
                'country_origin' => $request ->country_origin,
        ]);

        return to_route('cheese.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
