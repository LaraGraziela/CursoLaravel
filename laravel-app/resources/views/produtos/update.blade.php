<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Atualizar Produto</title>
</head>
<body>
<style>
.box {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 30px;
  padding: 30px;
  box-shadow: 1px 1px 10px 1px gray;
}

.box div {
  width: 500px;
  height: 100px;
}
</style>

<body>
    <div class="container">
        <div class=" row">
            <div class="col-sm-12 box">
                <form action="/produtos/store" method=POST class="was-validated">
                    <h1>Atualizar Produto</h1></br>
                    @csrf <!-- Token de segurança do Laravel (SEMPRE USAR EM FORM)-->
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" value="{{$produto->name}}" name="name" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor digite o nome.</div>
                    </div>
                    <div class="form-group">
                        <label for="brand">Marca:</label>
                        <input type="text" class="form-control" id="brand" placeholder="Marca do produto" name="brand" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor digite a marca.</div>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição:</label>
                        <input type="text" class="form-control" id="description" placeholder="Descrição do produto" name="description" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor digite a descrição.</div>
                    </div>
                    <div class="form-group">
                        <label for="price">Valor (apenas números):</label>
                        <input type="text" class="form-control" id="price" placeholder="Digite o valor do produto (apenas números)" name="price" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor digite o valor do produto.</div>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantidade (apenas números):</label>
                        <input type="number" class="form-control" id="quantity" placeholder="Quantidade em estoque" name="quantity" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor digite a quantidade em estoque.</div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>   
    </div>
</body>
</body>
</html>