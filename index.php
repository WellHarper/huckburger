<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Huck Burger</title>
</head>
<body>
    <div class="container">
        <h1>Huck Burger</h1>
        <h3>Dados do Cliente</h3>
        
        <form action="gravar.php" method="post">
            <div class="form-group">
                <label for=""><strong>Nome:</strong></label><br>
                <input type="text" class="form-control col-sm-4" name="nome" required>
            </div>
            
            <div class="form-group">
                <label for=""><strong>Telefone:</strong></label><br>
                <input type="text" class="form-control col-sm-4" name="telefone" required>
            </div>
            
            <div class="form-group">
                <label for=""><strong>Monte seu lanche</strong></label><br>
                <div class="form-group custom-radio">
                <label for=""><strong>Ponto da carne:</strong></label><br>
                <input type="radio" value="Mal Passada" name="pontoCarne" required> Mal passada &nbsp;
    
                <input type="radio" value="Ao Ponto" name="pontoCarne" required> Ao ponto
            </div>
                <label for=""><strong>Pão:</strong></label><br>
                <select id="" class="custom-select col-sm-4" name="pao" required>
                    <option value="Brioche">Brioche</option>
                    <option value="Australiano">Australiano</option>
                    <option value="Integral">Integral</option>
                    <option value="Alho e Oregano">Alho e orégano</option>
                    <option value="Italiano com Ervas">Italiano com ervas</option>
                </select><br><br>
                <label for=""><strong>Queijo:</strong></label><br>
                <select id="" class="custom-select col-sm-4" name="queijo" required>
                    <option value="cheddar">Cheddar</option>
                    <option value="prato">Prato</option>
                    <option value="suico">Suiço</option>
                    <option value="mucarela">Muçarela</option>
                    <option value="sem-queijo">Sem queijo</option>
                </select><br><br>
                <label for=""><strong>Observações:</strong></label><br>
                <textarea name="observacoes" id="observacoes" cols="50" rows="3"></textarea>
                
            </div>
            
            
            <div class="form-group">
                <button type="submit" class="btn btn-success mb-2">Cadastrar</button>
            </div>
        </form>
        
    </div>
</body>
</html>