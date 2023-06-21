<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accounts;
use App\Http\Requests\UserRequest;
use App\Models\Roles;
use Illuminate\Support\Facades\Session;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $successMessage = session('success');
        $pageTitle="Users";
        $users = Accounts::with('role')->latest()->get();
        return view('page.backend.user.list',compact('pageTitle','users','successMessage'));
        }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        $pageTitle="Add New User";
    
        return view('page.backend.user.add',compact('pageTitle'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
      

        $data = $request->all();
    
        $data['password'] = bcrypt($data['password']);
        $user=Accounts::create($data);
        Session::flash('success', 'Add new user successfully!');
        return redirect()->route('user.list');
        
        
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       

        $user = Accounts::find($id);
        $role = Roles::all();
        $pageTitle="Edit User";
        // dd($user);
        // if(!$user){

        //     Session::flash('failed', 'Not found');

        // }

        return view('page.backend.user.edit', compact('user','pageTitle','role'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   $data = $request->all();
        $user = Accounts::find($id);
        $update = $user->update($data);
        Session::flash('success', 'Update user successfully');
        return redirect()->route('user.list');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
        $user = Accounts::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Delete user successfully!');

        return redirect()->route('user.list');
    
    }
}
