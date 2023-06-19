<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::All();
        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'pages.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required'|'max:20'|'unique:comics',
                'description'=>'required'|'max:100',
                'thumb'=>'required',
                'price'=>'required',
                'series'=>'required'|'max:30',
                'type'=>'required',
            ],
            [
                'title.required'=>'Il campo è obbligatorio',
                'title.max'=>'Massimo 20 caratteri',
                'title.unique'=>'Il titolo deve essere unico',
                'description.required'=>'Il campo è obbligatorio',
                'description.max'=>'Massimo 100 caratteri',
                'thumb.required'=>'Il campo è obbligatorio',
                'price.required'=>'Il campo è obbligatorio',
                'series.required'=>'Il campo è obbligatorio',
                'series.max'=>'Massimo 30 caratteri',
                'type.required'=>'Il campo è obbligatorio',
            ]
        );

        $form_data = $request->all();

        $new_comic = new Comic();

        $new_comic->fill( $form_data );

        $new_comic->save();

        return redirect()->route( 'home' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route( 'home' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route( 'home' );
    }
}
