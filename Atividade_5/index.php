<!DOCTYPE html>
<html>
    <html lang="pt-br">    
    <head>
        <title>Atividade_3</title>
      <link rel="stylesheet" type="text/css" href="css/estilo.css"/>   
    </head>
         
    <body>    
    
    <div class="dados">
      <form>
          Nome:<br>
          <input class="campo" type="text" name="nome"><br>
          Endereço:<br>
          <input class="campo" type="text" name="endereco">
          Telefone:<br>
          <input class="campo" type="text" name="telefone">
          <button>Formatar</button>
      </form>
        <div class="resultado">
           <?php
       $nome = $_GET['nome']; 
       $endereco = $_GET['endereco'];
       $telefone = $_GET['telefone']; 
        
       echo "Nome: <h3>$nome</h3><br><br>";
       echo "Endereço:<h3> $endereco</h3><br><br>";
       echo "Telefone: <h3>$telefone</h3";
            
        
    ?> 
        </div>
               
    </div>
 
</body>
</html>    



