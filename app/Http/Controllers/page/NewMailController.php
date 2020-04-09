<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Newsletter;

class NewMailController extends Controller
{
    public function store(Request $request)
    {
        $datos = $request->all();

        Newsletter::create($datos);
        $success = 'Newsletter creado correctamente';
        return back()->with('success', $success);
    }
}
