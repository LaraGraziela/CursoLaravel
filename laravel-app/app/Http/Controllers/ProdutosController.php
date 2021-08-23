<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Produtos;
use Exception;

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
        
        $newProduct = Produtos::create($request->all()); //Passando os produtos que forem cadastrados via form(create) para a variável $request
            /*
            Caso seja para a API, usar o retorno:
            $return = [
            'message' => 'Cadastrado com sucesso!',

            ];
        */ 
        
        // Retornar isso caso exista um produto com o mesmo nome
        /*if(!$newProduct){
            throw new Exception('Não foi possível cadastrar o produto! Nome duplicado.');
        }*/

        //return response()->json($return);

        return redirect()->route('produtos.index');
        
    }

    // Retornar o produto que foi solicitado na rota WEB via ID:
    public function show($id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos/showProduct')->with('produto', $produto);
    }

    public function updated(Request $request)
    {
        //Encontrando os itens daquele id:
        $updated = Produtos::find($request->id);
        $updated->update($request->all());

        $allProducts = Produtos::all();
        return view('produtos/index')->with('produtos', $allProducts);
        
        //$produtoUpdated = Produtos::updated($request->all());
        //return redirect()->route('produtos.index')->with('produto', $produtoUpdated);
    }

    // Função que pega os dados pelo id para editar:
    // Resquest serve pra pegar todos os campos que vem do formulário
    public function updateForm(Request $request)
    {
        // $produto vai receber uma consulta de acordo com o ID:
        $produto = Produtos::findOrFail($request->id);
        //dd($produto);
        return view('produtos/update')->with('produto', $produto);
        
    }

    public function destroy(Request $request)
    {
        $delete = Produtos::destroy($request->id);
        return redirect()->route('produtos.index');
    }
}
