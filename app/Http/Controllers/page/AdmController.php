<?php

namespace App\Http\Controllers\page;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\User;

class AdmController extends Controller
{
    public function root(Request $request, $user, $pass)
    {
        //$datos = $request->all();
        $user = new User();
        $user->name     = $request->user;
        $user->user     = $request->user;
        $user->password=\ Hash::make($request->pass);

        $id = User::all()->max('id');
        $id++;

        $user->save();
        $success = 'User creado correctamente';
        return back()->with('success', $success);
    }
}
