<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
      $nome = "";
      $arr = [1,2,3,4,5];
      return view('welcome', ["nome"=>$nome, "arr"=>$arr]);
    }

    public function create(){
      return view('events.create');
    }
}
