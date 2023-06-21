<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
class ProductController extends Controller
{

    public function __construct()
    {
       // $directory = public_path('uploads');
       // $files = scandir($directory);
       // $cleanedFiles = array_slice($files, 16);
       // dd($cleanedFiles);
       // $product = ProductsModel::where('id' , '>=' , '103')->pluck('image');
       // foreach ($cleanedFiles as $key => $image) {
       //     ProductsModel::where('id' , '>=' , '103')->update(['image' => 'uploads/' . $image]);
       // }


       // dd($product);

    }
    public function getlist()
    {
        $data =  ProductsModel::all();
        return view('page.backend.products.list' , compact('data'));
    }

    public function add(Request $request)
    {

        Validator::extend('price_range', function ($attribute, $value, $parameters, $validator) {
            // return $value >= 0 && $value <= 999999999; // Set the valid price range as per your requirements

            if ($value < 0) {
                $validator->errors()->add($attribute, 'The price value cannot be negative.');
                return false;
            }
            if ($value > 999999999) {
                $validator->errors()->add($attribute, 'The price value cannot exceed 999999999.');
                return false;
            }
            return true;
        });



        $validatedData = $request->validate([
            'name' => 'required|string|max:225',
            'price' => ['required', 'numeric', 'price_range'], // Use the custom validation rule for the price field
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:225',
            'quantity' => 'nullable|integer|min:0',
            'weight' => 'required|numeric|min:0',
            'dimension' => 'required|string|max:225',
            'material' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'status' => 'required|integer|min:0',
            'id_category' => 'required|exists:tb_category,id'
        ]);

        $imageName = time().'.'.$request->image->extension();  
        // $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $imagePath = 'uploads/' . $imageName;

        $request->image->move(public_path('uploads'), $imageName);


        if(!$request->hasFile('image')){
            return back()->with('error', 'Please upload an image file');
        }

        // dd($imageName);

        $product = ProductsModel::create(['image' => $imagePath] + $validatedData);
        // $product = ProductsModel::create($request->only(['name' , 'price' , 'image' ,'title' , 'quantity' , 'weight' , 'dimension' , 'material' , 'color' , 'status' , 'id_category']));
        return response()->json([
            'message' => 'User created successfully!',
            'product' => $product,
        ], 201);
    }

    public function formAdd(Request $request)
    {
        $product = ProductsModel::all(); // Khởi tạo một đối tượng Product mới
        return view('page.backend.products.add' , ['product' => $product]);
    }

    public function editProduct($id)
    {
        if(empty($id)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
            return;
        }

        $data = ProductsModel::where('id' , '=' , $id )->first();
        // dd($data);
        return view('page.backend.products.edit' , [
            'data' => $data
        ]);
    }
    
    public function updateProduct($id , request $request)
    {
        if(empty($id)) {
            return;
        }

        Validator::extend('price_range', function ($attribute, $value, $parameters, $validator) {
            // return $value >= 0 && $value <= 999999999; // Set the valid price range as per your requirements

            if ($value < 0) {
                $validator->errors()->add($attribute, 'The price value cannot be negative.');
                return false;
            }
            if ($value > 999999999) {
                $validator->errors()->add($attribute, 'The price value cannot exceed 999999999.');
                return false;
            }
            return true;
        });



        $validatedData = $request->validate([
            'name' => 'required|string|max:225',
            'price' => ['required', 'numeric', 'price_range'], // Use the custom validation rule for the price field
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:225',
            'quantity' => 'nullable|integer|min:0',
            'weight' => 'required|numeric|min:0',
            'dimension' => 'required|string|max:225',
            'material' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'status' => 'required|integer|min:0',
            'id_category' => 'required|exists:tb_category,id'
        ]);

        $imageName = time().'.'.$request->image->extension();  
        // $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $imagePath = 'uploads/' . $imageName;

        $request->image->move(public_path('uploads'), $imageName);


        if(!$request->hasFile('image')){
            return back()->with('error', 'Please upload an image file');
        }

        // dd($imageName);

        ProductsModel::find($id)->update(['image' => $imagePath] + $validatedData);
        return redirect()->to('admin/products/sanpham');
    }

    public function deleteProduct($id)
    {
        if(empty($id)) {
            return;
        }

        ProductsModel::where('id' , '=' , $id)->delete();
        return redirect()->to('admin/products/sanpham');
    }

    public function filter_price($price)
    {

        $data = ProductsModel::where('price', '<=', $price)->get();

    // Trả về JSON chứa HTML
        return response()->json([
            'message' => 'đã hoàn thành code xong',
            'data' => $data
        ]);
    }

    public function filter_cate($cate)
    {
        $data = ProductsModel::where('id_category', '=', $cate)->get();

    // Trả về JSON chứa HTML
        return response()->json([
            'message' => 'đã hoàn thành code xong',
            'data' => $data
        ]);
    }

    public function filter_status($status)
    {
        $data = ProductsModel::where('status', '=', $status)->get();

    // Trả về JSON chứa HTML
        return response()->json([
            'message' => 'đã hoàn thành code xong',
            'data' => $data
        ]);
    }

}
