<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class MysqlController extends Controller
{
   public  function  obtenerTodosClientes(){
    return cliente::all();
   }
}
