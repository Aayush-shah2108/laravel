<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CrudController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        // $abc = Crud::create($crud->all());
        // return response()->json($crud,201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
        // return view("read")->with('readArr',crud::all());
        return response()->json(Crud::all(),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $abcd = crud::find($id);
        if (is_null($abcd)) {
            return response()->json(['message' => 'no data found'], 404);
        }
        $abcd->update($request->all());
        return response($abcd,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud,$id)
    {
    $abc = crud::find($id);
    if(is_null($abc)){
        return response()->json(['message' => 'no data available'],404);
    }
    $abc->delete();
    return response($crud,204);
    }
    public function get($id){
        $abc = crud::find($id);
        if(is_null($abc)){
            return response()->json(['message' => 'data not found'],404);
        }
        return response()->json($abc::find($id));
    }
    public function add(Request $request){
        $abc = Crud::create($request->all());
        return response($abc,201);

    }
    public function chang(Request $request ,$id){
        $abc = crud::find($id);
        if(is_null($abc)){
            return response()->json(['message' => 'data not found'],404);
        }
   $abc->update($request->all());
   return response($abc,200);
    }
}
