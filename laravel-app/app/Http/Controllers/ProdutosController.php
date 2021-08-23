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
        
        //--return response()->json($Produtos);

        // Mostrar a view que fiz em index.php:
        return view('produtos/index')->with('produtos', $Produtos);
        
    }
     //Criando a função direta, mas posso criar o file "create.php"
    public function create()
    {
        return view('produtos/create');
    }

    public function store(Request $request) //Receber os dados da requisição para que possa usar
    {
        Produtos::create($request->all()); //Passando os produtos que forem cadastrados via form(create) para a variável $request
            /*
            Caso seja para a API, usar o retorno:
            $return = [
            'message' => 'Cadastrado com sucesso!',

        ];

        return response()->json($return);*/

        return redirect()->route('produtos.index');
        
    }

    // Retornar o produto que foi solicitado na rota WEB via ID:
    public function show($id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos/showProduct')->with('produto', $produto);
    }

    public function update(Request $request, $id)
    {
        $produtoUpdated = Produtos::updated($request->all());
        return redirect()->route('produtos.index')->with('produto', $produtoUpdated);
    }

    public function destroy(Request $request)
    {
        $delete = Produtos::destroy($request->id);
        return redirect()->route('produtos.index');


    }
}
