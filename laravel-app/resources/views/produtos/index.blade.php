<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Produtos</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Produtos</h1>

        <a href="{{route('produtos.create')}}" class="btn btn-success">Cadastrar Produto</a>
        <table class="table table-bordered">
        <?php
            //Posso colocar aqui os itens da function index() do controller (HTML);
            if(!empty($produtos)){
                echo "<thead>
                            <tr>
                            <th>Nome</th>
                            <th>Marca</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Opções</th>
                        </tr>
                    </thead>";
            }        
        ?>
          
            <tbody>
            
            @foreach($produtos as $produto)
                <tr>
                        <td>{{$produto->name}}</td>
                        <td>{{$produto->brand}}</td>
                        <td>{{$produto->description}}</td>
                        <td>R${{number_format($produto->price, 2,',','.')}} <!--FORMATA O VALOR INSERIDO ADICIONANDO , E . --></td>
                        <td>{{$produto->quantity}}</td>
                        <td><button class='btn btn-warning'> Editar </button><button class='btn btn-danger'> Deletar </button>
                      </tr>
            @endforeach    
            
        
        
        
       
            </tbody>
        </table>
    </div>


              

    
</body>
</html>

