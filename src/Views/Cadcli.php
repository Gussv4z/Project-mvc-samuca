<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/Cadcli.css">
    <title>Venda de Animes</title>
</head>
<body>
    <header>
        <h1>Cadastro cliente</h1>
    </header>
    <main>
        <section class="signup-form">
            <h2>Dados do Cliente</h2>
            <form action="" method="POST" class="form-login">

            <div class="one part">
                <div class="camp cpf">

                    
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" maxlength="15" minlength="11" >
                </div>
                
                <div class="camp ">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" size="50" maxlength="50">
                </div>
                
                <div class="camp ">
                    <label for="id">Id cliente:</label>
                    <input type="text" id="id" name="id" size="50" maxlength="50">
                </div>  
                
                <div class="camp ">
                    <label for="tell">Telefone:</label>
                    <input type="text" id="tell" name="tell" size="50" maxlength="50">
                </div>

                <div class="camp ">
                    <label for="mail">Email:</label>
                    <input type="text" id="mail" name="mail" size="50" maxlength="50">
                </div>  
            </div>
                
            <div class="two part">
                <div class="camp">
                    <label for="address">Endereço:</label>
                    <input type="text" id="address" name="address" size="50" maxlength="50">
                </div>
                
                <div class="camp">
                    <label for="nome">Bairro:</label>
                    <input type="text" id="street" name="street" size="50" maxlength="50">
                </div>

                <div class="camp">
                    <label for="complement">Complemento</label>
                    <input type="text" id="complement" name="complement" size="50" maxlength="50">
                </div>

                <div class="camp">
                    <label for="city">Cidade:</label>
                    <input type="text" id="city" name="city" size="50" maxlength="50">
                </div>

                <div class="camp">
                    <label for="state">Estado:</label>
                    <input type="text" id="state" name="state" size="50" maxlength="50">
                </div>  

                <div class="camp">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" size="50" maxlength="50">
                </div>
                
                
            </div>
                <button type="submit">Próximo</button>
            </form>
        </section>
    </main>
</body>
</html>