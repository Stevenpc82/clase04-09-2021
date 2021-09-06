<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Companies;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {
        $companies = Companies::get();
        return view('products.create', compact('companies'))->with('status.products', 'Se ha agregado un nuevo producto');
    }

    public function store(Request $request)
    {
        if($request->hasFile('img'))
        {
            $destination_path = 'public/images/products';
            $img = $request->file('img');
            $img_name = $img->getClientOriginalName();
            $path = $request->file('img')->storeAs($destination_path,$img_name);

            $input['image'] = $img_name;
        }

        $product = Products::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'precio'=>$request->input('precio'),
            'img' =>$img_name,
            'companies_id'=>$request->input('companies_id'),

        ]);
        return redirect('products')->with('create.products', 'Se ha agregado un nuevo producto');
    }

    public function show($id)
    {
        $products = Products::find($id);
        return view('products.show', compact('products'));
    }

    public function destroy($id){
        $companies = Products::find($id)->delete();
        return redirect('products')->with('product.destroy','Se ha elimindo correctamente el producto');
    }

    public function edit($id){

        $products = Products::find($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('capture')){
            $destination_path='public/image/products';
            $capture=$request->file('capture');
            $image_name=$capture->getClientOriginalName();
            $path=$request->file('capture')->storeAs($destination_path,$image_name);
            $input['capture']=$image_name;
        }
        $products = Products::find($id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'precio' => $request->input('precio'),
            'img' => $image_name,
            'companies_id' => $request->input('companies_id'),
        ]);
        return redirect('products')->with('products.status','Se ha actualizado correctamente el articulo: '.$id );
    }
}
