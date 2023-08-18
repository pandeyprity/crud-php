<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Crud;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request, User $User)
    {
        //
        //print_r($request);

        $record = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
            "user_type_id" => 1, // By default User
        ]);
        if ($record) {
            return redirect("/");
        } else {
            return redirect("/register");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request, User $user)
    {
        //
        $email = $request->input("email");
        $password = $request->input("password");
        $record = User::where("email", $email)
            ->where("password", $password)->first();
        if ($record) {
            return redirect("/user/show");
        } else {
            return redirect("/");
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $user = User::all();
        return view("user.show", ["list" => $user]);
    }


    public function create(User $user)
    {
        $usertypes = Crud::all();
        return view("user.create", ["usertypes"=> $usertypes]);
    }

    public function store(Request $request, User $user)
    {
        //

        $record = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ]);
        return redirect("/user/show");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id, User $user)
    {
        $user = User::findOrFail($id);
        $userTypes = Crud::all(); // Fetch all user types from the 'crud' table

        return view('user.edit', ["user"=> $user, "userTypes"=> $userTypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, User $user)
    {
        //
        $record = User::find($id);
        // print_r($request->all());
        if ($record) {
            $record->name = $request->input('name');
            $record->email = $request->input('email');
            $record->password = $request->input('password');
            $record->user_type_id = $request->input("user_type_id");
            $record->save();
            return redirect("user/show");
        }
    }


    public function delete($id, User $user)
    {
        //
        $record = User::find($id);
        $record->delete();
        return redirect("/user/show");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
