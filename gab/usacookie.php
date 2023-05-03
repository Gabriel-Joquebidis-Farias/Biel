<?php
if (!isset($_COOKIE['Nome'])){
    $msg = "Você não é cadastrado em nosso site! Para ter acesso ao conteúdo exclusivo do assinante, <a href='aula.php'> clique aqui!</a>"
;} 
else{

    
}

if ($idade <18){
    $msg = "<span style='color:red;'>Você não tem idade para acessar esse seite!</span>";
}
else{
    $cor = $_COOKIE["cor"];
    if($contaVisitas>0){
        $msg = "Olá". $nome ."! Bem vindo de volta ao nosso site ...";
    }
    else{
        $msg = "Olá" . $nome . "! Bem vindo ao nosso site ...";
        setcookie("contaVisitas",$contaVisitas,time()+3600,"/");
    }
}
