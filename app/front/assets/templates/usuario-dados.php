<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require_once '../security/path.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo CSS ;?>bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo CSS ;?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS ;?>index.css">
    <link rel="stylesheet" href="<?php echo CSS ;?>comum.css">
    <script src="<?php echo JS ;?>bootstrap.min.js"></script>
    <title>eTransporte-</title>
</head>
<body>
    <div class="conteudo">
        <div class="home-title">
            <span class="usuario-dados">
                <div class="foto">
                    <img src="<?php echo IMAGES; ?>usuario.png" width="150px" alt="" class="usuario"><br>
                    <div id="nome-usuario"class="nome-usuario">
                        Usuário
                    </div>
                    <!-- <div id="nome" class="nome">< ?php echo $nome;?></div> -->
                </div>
                <div class="informacoes">
                    <div id="nome" class="nome">
                        Nome
                        
                            <input type="text" id="input-nome" placeholder="Nome">
                        
                        
                    </div>
                    <div id="sobrenome" class="sobrenome">
                        Sobrenome
                        
                            <input type="text" id="input-sobrenome" placeholder="Sobrenome">
                        
                        
                    </div>
                    <div id="email" class="email">
                        Email
                        
                            <input type="text" id="input-email" placeholder="Email">
                        
                        
                    </div>
                    <div id="senha" class="senha">
                        Senha
                        
                            <input type="text" id="input-senha" placeholder="Senha">
                        
                        
                    </div>
                    <div id="telefone" class="telefone">
                        Telefone
                        
                            <input type="text" id="input-telefone" placeholder="Telefone">
                        
                        
                    </div>
                    <div id="cidade" class="cidade">
                        Cidade
                        
                            <input type="text" id="input-cidade" placeholder="Cidade">
                        
                        
                    </div>
                    <div id="endereco" class="endereco">
                        Endereço
                        
                            <input type="text" id="input-endereco" placeholder="Endereço">
                        
                        
                    </div>
                    <div id="estudante" class="estudante">
                        Estudante
                        
                            <select name="" id=""></select>
                        
                        
                    </div>
                    <div id="universidade" class="universidade">
                        Universidade
                        
                            <input type="text" id="input-universidade" placeholder="Universidade">
                        
                        
                    </div>
                    <div id="matricula" class="matricula">
                        Matrícula
                        
                            <input type="text" id="input-matricula" placeholder="Matrícula">
                        
                        
                    </div>
                    <div id="motorista" class="motorista">
                        Motorista
                        
                            <select name="" id=""></select>
                        
                        
                    </div>
                    <div id="cnh" class="cnh">
                        CNH
                        
                            <input type="text" id="input-cnh" placeholder="CNH">
                        
                        
                    </div>
                    <div id="transporte" class="transporte">
                        Transporte
                        
                            <input type="text" id="input-transporte" placeholder="Transporte">
                        
                        
                    </div>
                    <div id="administrador" class="administrador">
                        Administrador
                        
                            <select name="" id=""></select>
                        
                        
                    </div>
                </div>
            </span>
        </div>
    </div>
</body>
</html>