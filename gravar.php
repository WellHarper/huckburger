<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $carne = $_POST["pontoCarne"];
    $pao = $_POST["pao"];
    $queijo = $_POST["queijo"];
    $observacoes = $_POST['observacoes'];

    
    
  
      $con = mysqli_connect("localhost", "root", "", "huckburger"); 
      mysqli_set_charset($con, 'utf8');


    
    $sql = "INSERT INTO pedidos  VALUES(null, '{$nome}', '{$telefone}', '{$carne}', '{$pao}', '{$queijo}', '{$observacoes}')";
 
            
            
   if (mysqli_query($con, $sql)) {
       
       echo "Gravado com sucesso!";
       
       
   }
    else {
        
        
        echo("Erro ao gravar");
        
    }

