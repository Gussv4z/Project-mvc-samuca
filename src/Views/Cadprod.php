
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../../styles/Cadprod.css">
</head>
<html lang="pt-br">
<body>
    <div class="container-all">
        <form action="" method="POST">
        <div class="container-insert-product">        
            
            <h2>Cadastro/Produto</h2>

        <div class="camps name">
            <label for="nameProduct">Nome do produto</label>
            <input type="text" class="nameProduct" name="nameProduct" required>
        </div> 
            
        <div class="camps">
            <label for="id-product">Id do produto</label>
            <input type="text" name="id-product" required>
        </div>
        
        
        <div class="camps">
            <label for="description">Descrição</label>
            <input type="text" name="description" required>
        </div>
        
        <div class="camps">
            <label for="marc">Marca/Fabricante</label>
            <input type="text" name="marc" required>
        </div>
  
        <div class="value">
            <label for="id-product">Pre</label>
            <input type="text" name="value" required>
        </div>
        
        <div class="camps">
            <label for="qtd">Qt. em estoque</label>
            <input type="text" name="qtd" >
        </div>

        <div class="camps">
            <label for="size">Cor/Tamanho/Peso</label>
            <input type="text" name="size" >
        </div>
        <button type="submit">Enviar</button>
        </div>  
        </form>
    </div>


        
</body>
</html>