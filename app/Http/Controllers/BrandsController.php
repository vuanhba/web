<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandsModel;
class BrandsController extends Controller
{
    public function getBrandsList()
    {
        $data =  BrandsModel::all();
        return view('page.backend.brand.list' , compact('data'));
    }

    public function addBrands(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:225',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deprecation' => 'required|string|max:225'
        ]);

        $imageName = time().'.'.$request->image->extension();  
        // $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $imagePath = 'uploads/' . $imageName;

        $request->image->move(public_path('uploads'), $imageName);


        $brands = BrandsModel::create(['image' => $imagePath] + $validatedData);

        
        return response()->json([
            'message' => 'User created successfully!',
            'brands' => $brands,
        ], 201);
    }

    public function showAddForm(Request $request)
    {
        return view('page.backend.brand.add');
    }

    public function edit($id)
    {
        if(empty($id)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
            return;
        }

        $data = BrandsModel::where('id' , '=' , $id )->first();
        // dd($data);
        return view('page.backend.brand.edit' , [
            'data' => $data
        ]);
    }

    public function update($id , request $request)
    {
        if(empty($id)) {
            return;
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:225',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deprecation' => 'required|string|max:225'
        ]);

        $imageName = time().'.'.$request->image->extension();  
        // $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $imagePath = 'uploads/' . $imageName;

        $request->image->move(public_path('uploads'), $imageName);

        if(!$request->hasFile('image')){
            return back()->with('error', 'Please upload an image file');
        }

        // dd($imageName);

        BrandsModel::find($id)->update(['image' => $imagePath] + $validatedData);
        
        return redirect()->to('admin/products/brands');
    }

    public function delete($id)
    {
        if(empty($id)) {
            return;
        }

        BrandsModel::where('id' , '=' , $id)->delete();
        return redirect()->to('admin/products/brands');
    }
}
