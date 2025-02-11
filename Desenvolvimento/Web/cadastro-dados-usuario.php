<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--===============================================================================================-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--===============================================================================================-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--===============================================================================================-->
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!--===============================================================================================-->
            <link href="https://fonts.googleapis.com/css2?family=Molengo&display=swap" rel="stylesheet">
        <!--===============================================================================================-->
            <link rel="stylesheet" href="css/slider.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/main.css">

        <title>SoSCardio</title>
    </head>
    <body>

    <?php
if(isset($_POST['cpf'])){
    // ordem das colunas do banco de dados: (id, nome, email, senha, cpf, endereco, telefone, idade, peso, altura, profissao, experiencie, grau exp, comorbidade, atv. fisica, info., conv. medico, tipo conv.)
    $sql = $pdo->prepare("INSERT INTO logininicial VALUES (null, null, null,null,?,?,?,?,?,?)");
    $sql->execute(array($_POST['cpf'], $_POST['endereco'], $_POST['telefone'], $_POST['idade'], $_POST['peso'], $_POST['altura']));

     header('Location:cadastro-plano-saude.php');
}
?>

        <div class="limiter"> 

            <div class="container-login100">
                <div class="wrap-login100">
                    <h1 id="register">Cadastrar</h1>
                    <p class="adictional-informations">Informações complementares</p>
                    <form class="login100-form validate-form">
                        <label for="input-cpf" class="lbl-input">
                            <input id="input-cpf" class="form-input cpf" type="text" placeholder="CPF" required />
                        </label>
                        
                        <label for="input-endereco" class="lbl-input">
                            <input id="input-endereco" class="form-input endereco" type="text" placeholder="Endereço" required />
                        </label>
            
                        <label for="input-phone" class="lbl-input">
                            <input id="input-phone" class="form-input phone" type="text" placeholder="Telefone" required />
                        </label>
                        
                        <label for="input-age" class="lbl-input">
                            <input id="input-input-age" class="form-input input-age" type="text" placeholder="Idade" required />
                        </label>

                        <label for="input-weigth" class="lbl-input">
                            <input id="input-weigth" class="form-input weigth" type="text" placeholder="Peso" required />
                        </label>
                        
                        <label for="input-age" class="lbl-input">
                            <input id="input-input-age" class="form-input input-age" type="text" placeholder="Altura" required />
                        </label>
                        </div>

                            <div class="container-login100-form-btn m-t-17">
                                
                                <button class="login100-form-btn">
                                PRÓXIMO
                                </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>