<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrdContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prds=DB::table('products')->get();
        return view('products.index',compact('prds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=[
            'libelle' =>$request->libelle,
            'marque' => $request->marque,
            'prix' => $request->prix,
            'stock' => $request->stock,
            'image' => $request-> image,
        ];
        DB::table('products')->insert($data);
        return 'inserted succefully ';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prds= DB::table('producta')->where('id', $id)->first();
        return view('products.edit', compact('prds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('products')->where('id', $id)->update([
            'libelle'=>$request->libelle,
            'marque'=>$request->marque,
            'prix'=>$request->prix,
            'stock'=>$request->stock,
            'image'=>$request->image,
        ]);
        return view('products')->with('updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')->truncate();
    }
}
