<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::paginate(20)->all();

        return view('user.index', compact('user'));
    }

    public function add()
    {
        return view('user.add');
    }

    public function addStore(Request $request)
    {
        $user = new User;
        $passwordHash = Hash::make($request->password); 

        // data yg di request masukin ke kolom pada table
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;
        $user->email = $request->email;
        $user->password = $passwordHash;
        $user->save();

        Alert::info('Success', 'New user has been created!');
        return redirect('user');
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::where('id',$request->id)->first();

        // data yg di request masukin ke kolom pada table
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;
        $user->email = $request->email;
        $user->update();

        Alert::info('Success', 'User Updated!');
        return redirect('user');
    }

    public function delete($id) 
    {
        $user = User::where('id', $id )->first();
        $user->delete();

        Alert::warning('Success', 'User Berhasil di Hapus!');
        return redirect('user');
    }
}
