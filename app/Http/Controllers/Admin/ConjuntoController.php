<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConjuntoController extends Controller
{
    public function adicionar()
    {
      return view('admin.conjunto.adicionar');
    }
}
