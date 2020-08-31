<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmModel;

$films = FilmModel::all();

class FilmController extends Controller
{
    // public function index() {
    //
    //   // $data_film = [
    //   //   [
    //   //     'titolo'=>'ciao',
    //   //     'anno'=>'2001',
    //   //     'autore'=>'pippo'
    //   //   ],
    //   //   [
    //   //     'titolo'=>'arrivederci',
    //   //     'anno'=>'1993',
    //   //     'autore'=>'franco'
    //   //   ],
    //   //   [
    //   //     'titolo'=>'addio',
    //   //     'anno'=>'2010',
    //   //     'autore'=>'pluto'
    //   //   ]
    //   // ];
    //
    //   return view('films', compact('data_film'));
    //   // return view('films', ['data_film'=>$data_film]);  VERSIONE ESTESA DI 'compact()' vedi riga sopra
    // }
}
