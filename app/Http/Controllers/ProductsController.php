<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(){
        $prds = DB::table('products')->get();
        return view('products.index', compact('prds'));
    }

    public function create(){
        return view('products.create');
    }

    public function insert(Request $request){
        $validatedData = [
            'libelle' =>$request->libelle,
            'marque' => $request->marque,
            'prix' => $request->prix,
            'stock' => $request->stock,
            'image' => $request-> image,
        ];

        DB::table('products')->insert($validatedData);
        return response('Yuuupi! inserted successfully!')->with(redirect()->route('products'));
//        return $validatedData;
    }
    public function edit($id){
        $prds = DB::table('products')->where('id' , $id)->first();
//        return $prds;
        return view('products.edit', compact('prds'));
    }

    public function update(Request $request, $id){
        DB::table('products')->where('id', $id)->update([
            'libelle'=>$request->libelle,
            'marque'=>$request->marque,
            'prix'=>$request->prix,
            'stock'=>$request->stock,
            'image'=>$request->image,
        ]);
        return response('Yuuupi! updated successfully!', redirect()->route('products'));
}

public function delete($id){
        $deleted =DB::table('products')->where('id', $id)->delete();
    if ($deleted) {
        return redirect()->route('products')->with('success', 'Yuuupi! Product deleted successfully!');
    } else {
        return response('Echec lors de la suppression du produit.');
    }



}

public function deleteAllTruncate(){
        DB::table('products')->truncate();
        return redirect()->route('products');

}


}
