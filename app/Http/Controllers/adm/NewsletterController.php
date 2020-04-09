<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        $usuario = Auth::user();
        $newsletter_seccion = 'active';
        $newsletter_create = 'active';

        return view('adm.newsletter.crearNewsletter', compact('productos', 'usuario','newsletter_seccion','newsletter_create'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'publicidad');
        $file_save ? $datos['imagen'] = $file_save : false;

        Newsletter::create($datos);
        $success = 'Newsletter creado correctamente';
        return back()->with('success', $success);
    }

    public function show()
    {
        $usuario = Auth::user();
        $newsletter = Newsletter::all();
        $newsletter_seccion = 'active';
        $newsletter_edit = 'active';
        $newsletter = Newsletter::paginate(9);
       

        return view('adm.newsletter.editarNewsletters', compact('productos', 'usuario', 'newsletter','newsletter_seccion','newsletter_edit'));
    }

    public function edit($id)
    {
        $newsletter = Newsletter::find($id);
        $usuario = Auth::user();
        $newsletter_seccion = 'active';
        $newsletter_edit = 'active';

        return view('adm.newsletter.editarNewsletter', compact('productos', 'newsletter','usuario','newsletter_seccion','newsletter_edit'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), $id.'');
        $file_save ? $datos['imagen'] = $file_save : false;

        $newsletter = Newsletter::find($id);
        $newsletter->fill($datos);
        $newsletter->save();
        $success = 'Newsletter editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();
        $success = 'Newsletter eliminado correctamente';
        return back()->with('success', $success);
    }
}
