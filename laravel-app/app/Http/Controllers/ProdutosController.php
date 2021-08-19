<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Produtos = Produtos::all();

        /*$Produtos = [
            'name' => 'TV'
        ];*/
        
        return response()->json($Produtos);

        // Mostrar a view que fiz em index.php:
        //return view('produtos/index');
        
    }
     //Criando a função direta, mas posso criar o file "create.php"
    public function create()
    {
        
    }
}
