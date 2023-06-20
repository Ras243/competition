<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->alamat = $request->alamat;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $user->save();
        return redirect('masuk');
    }
}
