<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Venda de Animes</title>
</head>
<body>
    <header>
        <h1>Venda de Animes</h1>
    </header>
    <main>
        <section class="signup-form">
            <h2>Dados do Cliente</h2>
            <form action="/cadastro/cliente" method="POST">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" maxlength="15" minlength="11" required >
                <br/><br/>
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" size="50" maxlength="50" required>

                <br/><br/>

                <label for="id--cliente">Id do cliente</label>
                <input type="text" id="id_cliente" name="id--cliente" required>

                <br/><br/>

                <label for="userTel">Telefone</label>
                <input type="number" id="telefone" name="userTel" required>

                <br/><br/>

                <label for="userMail">Email</label>
                <input type="email" id="email" name="userMail" required>

                <br/><br/>

                <label for="userAddres">Endereço</label>
                <input type="text" id="bairro" name="userAddres" required>

                <br/><br/>

                <label for="userComplement">complemento</label>
                <input type="text" id="complement" name="userComplement" required>

                <br/><br/>

                <label for="userCity">cidade</label>
                <input type="text" id="city" name="userCity" required>

                <br/><br/>

                <label for="useState">Estado</label>
                <input type="text" id="state" name="userState" required>

                <br/> <br/>
                <label for="userCep"> CEP</label>
                <input type="number" id="cep" name="userCep" required>

                <br/> <br/>

                <button>Enviar</button>

                <h2>
                    Acrescentar os campos<br>
                    id_cliente <br>
                    telefone <br>
                    email <br>
                    endereco(rua e número) <br>
                    bairro <br>
                    complemento <br>
                    cidade <br>
                    estado <br>
                    cep<br><br>
                    OS CAMPOS PRECISAM SER VALIDADOS
                </h2>
                <br/><br/>
                <button type="submit">Próximo</button>
            </form>
        </section>
    </main>
</body>
</html>