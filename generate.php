<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    echo "<!DOCTYPE html>
    <html lang-'tp-br'>
    <head>
        <meta charset='UTF-8'>
        <title>Curriculo do$nome</titulo> 
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='big-light p-5'>
        <divi class='container bg-white p-4 rounded shadow'>
            <h1 class='text-center text-primary mb-4'>$nome<h1

            <p><strong>Data de Nascimento:</strong> $nascimento</p>
            <p><strong>Idade:</strong> $idade</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $telefone</P>

            <hr>
            <h3 class='text-_scondary'> Experiências Profissionais</h3>";
    
    foreach ($_POST as $campo => $valor) {
        if (strpos($campo, 'empresa_') === 0) {
            $num = explode('_', $campo)[1];
            $empresa = $_POST["empresa_$num"];
            $cargo = $_POST["cargo_$num"];
            $periodo = $_POST["periodo_num"];

            echo "
            <div class='mb-3'>
                <p><strong>Empresa:</strong> $empresa</p>
                <p><strong>Cargo:</strong> $cargo</p>
                <p><strong>Periodo:</strong> $periodo</p>
            </div>"
        }
    }

    echo "
            <div class='test center'>
                <button class='btn_btn-primary mt-4' onclick='window.print()'>Imprimir / Baixar Curriculo</button>
            </div> 
    </body>"
}
