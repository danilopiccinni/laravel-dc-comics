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
        $linksNav = config('nav');
        $footerData = config('footer');
        $signUpData = config('signUp');
        $comics = Comic::all();
        $buyData = config('buy');

        $data = [
            'links' => $linksNav,
            'columns' => $footerData,
            'socialIcons' => $signUpData,
            'comics' => $comics,
            'buyLinks' => $buyData,
        ];

        return view('comics/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $linksNav = config('nav');
        $footerData = config('footer');
        $signUpData = config('signUp');
        $comics = Comic::all();
        $buyData = config('buy');

        $data = [
            'links' => $linksNav,
            'columns' => $footerData,
            'socialIcons' => $signUpData,
            'comics' => $comics,
            'buyLinks' => $buyData,
        ];
        return view('comics.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newComic = new Comic();

        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->thumb = $formData['thumb'];
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];
        $newComic->artists =  json_encode(explode(',',$formData['artists']));
        $newComic->writers = json_encode(explode(',',$formData['writers']));

        $newComic->save();

        return redirect()->route('comics.show' , $newComic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $linksNav = config('nav');
        $footerData = config('footer');
        $signUpData = config('signUp');


        $data = [
            'links' => $linksNav,
            'columns' => $footerData,
            'socialIcons' => $signUpData,
            'comic' => $comic,

        ];
        
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        $linksNav = config('nav');
        $footerData = config('footer');
        $signUpData = config('signUp');


        $data = [
            'links' => $linksNav,
            'columns' => $footerData,
            'socialIcons' => $signUpData,
            'comic' => $comic,

        ];
        return view('comics.edit' , $data);
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
        $formData = $request->all();

        $comic->update($formData);

        $comic->save();

        
        return redirect()->route('comics.show' , $comic->id);
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

        return redirect()->route('comics.index');
    }
}
