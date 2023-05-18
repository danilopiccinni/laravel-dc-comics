<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        $this->validatorDataForm($request);
    
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

        $this->validatorDataForm($request);

        $formData = $request->all();

        $formData['artists'] = json_encode(explode(',',$formData['artists']));
        $formData['writers'] = json_encode(explode(',',$formData['writers']));

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

    private function validatorDataForm($request) {
        $formData = $request->all();

        $validator = Validator::make($formData, [
            'title' => 'required|max:50|min:2',
            'description' => 'required|max:300|min:2',
            'thumb' => 'required|max:50|min:2',
            'price' => 'required|max:50|min:2',
            'series' => 'required|max:50|min:2',
            'sale_date' => 'required|max:50|min:2',
            'type' => 'required|max:50|min:2',
            'artists' => 'required|max:300|min:2',
            'writers' => 'required|max:300|min:2',
        ], [
            'title.required' => 'inserisci il titolo, non puoi lasciare questo campo vuoto',
            'title' => 'lunghezza caratteri massima 50',
            'title' => 'lunghezza caratteri minima 2',
            'description.required' => 'inserisci la descrizione, non puoi lasciare questo campo vuoto',
            'description' =>  'lunghezza caratteri massima 300',
            'description' => 'lunghezza caratteri minima 2',
            'thumb.required' => 'inserisci il link, non puoi lasciare questo campo vuoto',
            'thumb' => 'lunghezza caratteri massima 50',
            'thumb' => 'lunghezza caratteri minima 2',
            'price.required' => 'inserisci il prezzo, non puoi lasciare questo campo vuoto',
            'price' => 'lunghezza caratteri massima 50',
            'price' => 'lunghezza caratteri minima 2',
            'series.required' => 'inserisci la serie, non puoi lasciare questo campo vuoto',
            'series' => 'lunghezza caratteri massima 50',
            'series' => 'lunghezza caratteri minima 2',
            'sale_date.required' => 'inserisci la data, non puoi lasciare questo campo vuoto',
            'sale_date' => 'lunghezza caratteri massima 50',
            'sale_date' => 'lunghezza caratteri minima 2',
            'type.required' => 'inserisci la tipologia, non puoi lasciare questo campo vuoto',
            'type' => 'lunghezza caratteri massima 50',
            'type' => 'lunghezza caratteri minima 2',
            'artists.required' => 'inserisci almeno un "artist", non puoi lasciare questo campo vuoto',
            'artists' =>  'lunghezza caratteri massima 300',
            'artists' => 'lunghezza caratteri minima 2',
            'writers.required' => 'inserisci almeno un "writer" non puoi lasciare questo campo vuoto',
            'writers' =>  'lunghezza caratteri massima 300',
            'writers' => 'lunghezza caratteri minima 2',


        ])->validate();

        return $validator;

    }
}
