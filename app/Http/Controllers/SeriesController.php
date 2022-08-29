<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class SeriesController extends Controller
{
    public function home()
    {
        return view(layouts.home);
    }
    public function index(Request $request)
    {

            // $series = DB::select('SELECT nome FROM series;'); //array

            $series = Serie::query()->orderBy('nome')->get();      //collection


          return view('series.index')->with('series', $series);

    }
    public function create()
    {
        return view('series.create');
    }

    public function store( Request $request )
     {
        $nomeSerie = $request -> input('nome');
        $serie = new Serie();
        $serie -> nome = $nomeSerie;
        $serie -> save();


        // DB::insert('INSERT INTO series (nome) values (?)', [$nomeSerie]);
            return redirect('/series');

    }
    public function delete( Serie $serie, Request $request)
    {
        // $nomeSerie = $request -> input('nome');
        $serie->delete();
        return redirect()->route('series.index', ['' => $serie->id])->with('success', 'Série Removida com Sucesso');
        
    }
}
