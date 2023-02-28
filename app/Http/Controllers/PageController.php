<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $nav_menu = config('db.nav');
        $icons  =config('db.social_icons');
        return view('comics.index', compact('comics', 'nav_menu', 'icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons  =config('db.social_icons');
        return view('comics.create', compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());

        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->title = $form_data['title'];
        $newComic->description = $form_data['description'];
        $newComic->thumb = $form_data['thumb'];
        $newComic->price = $form_data['price'];
        $newComic->series = $form_data['series'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->type = $form_data['type'];

        $newComic->fill($form_data);

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        $icons  =config('db.social_icons');
        $single = [
            'single' => $comic
        ];

        return view('comics.show', $single, compact('icons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $icons  =config('db.social_icons');

        return view('comics.edit', compact('comic', 'icons'));
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
       
        $form_data = $this->validation($request->all());
        $comic = Comic::findOrFail($id);
        // $comic->title = $form_data['title'];
        // $comic->description = $form_data['description'];
        // $comic->thumb = $form_data['thumb'];
        // $comic->price = $form_data['price'];
        // $comic->series = $form_data['series'];
        // $comic->sale_date = $form_data['sale_date'];
        // $comic->type = $form_data['type'];

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validation($data){
        $validator = Validator::make($data, [
            'title'=> 'required|max:100',
            'description'=> 'max:2000',
            'thumb'=> 'max:300',
            'price'=> 'required|max:20',
            'series'=> 'required|max:50',
            'sale_date'=> 'required|date_format:Y-m-d',
            'type'=> 'required|max:50'
        ],[
            'title.required' => 'Devi inserire un titolo!',
            'title.max' => 'Il titolo deve avere massimo 100 caratteri!',
            'description.max' => 'La descrizione può avere massimo 2000 caratteri!',
            'thumb.max' => 'Il path può contenere massimo 300 caratteri!',
            'price.required' => 'Devi inserire il prezzo!',
            'price.max' => 'Il prezzo può avere massimo 20 caratteri!',
            'series.required' => 'Devi inserire la serie!',
            'series.max' => 'La serie può avere massimo 50 caratteri!',
            'sale_date.required' => 'Devi inserire la data di sconto!',
            'sale_date.date_format' => 'Devi inserire la data nel formato giusto!',
            'type.required' => 'Devi inserire la tipologia!',
            'type.max' => 'Puoi inserire massimo 50 caratteri per la tipologia!',
        ])->validate();

        return $validator;
    }
}
