<?php 
if (!isset($_COOKIE['InfoUser-Nome'])){
    $msg = 'Você não é cadastrado em nosso site! Para ter acesso ao conteúdo exclusivo do assinante <a href="cadastro.php">Clique aqui!</a>';
} else{
    $nome = $_COOKIE['InfoUser-Nome'];
    $idade = $_COOKIE['InfoUser-Idade'];
    $contaVisitas = $_COOKIE['InfoUser-contaVisitas'];
    if ($idade < 10){
        $msg = 'Você não tem idade para acessar esse site';
    } else{
        $cor = $_COOKIE['InfoUser-Cor'];
        if ($contavisitas > 0){
            $msg = 'Olá '.$nome.'! Bem vindo de volta ao nosso site...';
        } else{
            $msg = 'Olá '.$nome.'! Bem vindo ao nosso site...';
            $contavisitas++;
            setcookie('InfoUser-contaVisitas', $contaVisitas, time()+3600, '/');
        }
    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?=$cor?>;
        }
    </style>
</head>
<body>
    <?=$msg?>
</body>
</html>