<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('usuarios.create',[
            'user' => new User
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->proceedings = $request->get('proceedings');
        $user->ableness = $request->get('ableness');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->note = $request->get('note');
        $user->password = Hash::make('12345678');
        $user->save();

        return redirect()->route('user.index');
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
    public function edit(Request $request, User $user)
    {

        return view('usuarios.edit',[
            'user' =>$user
        ]);
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
        $user = User::find($id);

        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->proceedings = $request->get('proceedings');
        $user->ableness = $request->get('ableness');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->note = $request->get('note');
        $restablecer=$request->input('restablecer');

        if ($restablecer == true){
            $user->password = Hash::make('123456789');
        }
        $user->update();

        return redirect()->route('user.index',$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
