<?php

namespace App\Http\Controllers;

use App\Models\Sana;
use Illuminate\Http\Request;

use App\Http\Requests;

class SanawaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Sana::orderBy('sana')->get();

        return view('sanawaat.index', ['title' => 'Sanawaat', 'list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sanawaat.create', ['title' => 'Sanawaat', 'sana' => date('Y')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'sana' => 'required|numeric|min:2003|max:2569|unique:sanawaat',
        ]);

        $Sana = new Sana();
        $Sana->sana = $request->get('sana');
        $Sana->save();

        return redirect(route('sanawaat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sana = Sana::query()->findOrFail($id);
        $Sana->delete();

        return redirect(route('sanawaat.index'));
    }
}
