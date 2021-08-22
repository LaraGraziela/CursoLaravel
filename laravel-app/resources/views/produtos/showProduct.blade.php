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
    <title>Produto</title>
</head>
<body>
@if($produto)
<div class="card" style="width:500px">
    <img class="card-img-top" src="/images/produtos/delineador.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title">{{$produto->name}}</h4>
        <p class="card-text">{{$produto->brand}}</p>
        <p class="card-text">{{$produto->description}}</p>
        <p class="card-text">R${{number_format($produto->price, 2,',','.')}}</p>
        <p class="card-text">{{$produto->quantity}}</p>
        <a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>
    </div>
</div>
@endif
</body>
</html>