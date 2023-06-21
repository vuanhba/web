<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
class CategoryController extends Controller
{

    public function getCategoryList()
    {
        $data =  CategoryModel::all();
        return view('page.backend.category.list' , compact('data'));
    }

    public function addCategory(Request $request)
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


        $category = CategoryModel::create(['image' => $imagePath] + $validatedData);

        
        return response()->json([
            'message' => 'User created successfully!',
            'category' => $category,
        ], 201);
    }

    public function showAddForm(Request $request)
    {
        return view('page.backend.category.add');
    }

    public function editCategory($id)
    {
        if(empty($id)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
            return;
        }

        $data = CategoryModel::where('id' , '=' , $id )->first();
        // dd($data);
        return view('page.backend.category.edit' , [
            'data' => $data
        ]);
    }

    public function updateCategory($id , request $request)
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

        CategoryModel::find($id)->update(['image' => $imagePath] + $validatedData);
        
        return redirect()->to('admin/products/categories');
    }

    public function delete($id)
    {
        if(empty($id)) {
            return;
        }

        CategoryModel::where('id' , '=' , $id)->delete();
        return redirect()->to('admin/products/categories');
    }
}
