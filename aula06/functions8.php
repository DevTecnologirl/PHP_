<?php
    $var1 = 0;
    $var2 = '';
    $var3 = '0';
    $var4 = false;
    $var5 = null;
    $var6 = array();
    
    if(empty($var1)) {
            echo 'variavel vazia';
    }
?>

<?php
    $nome = $_POST['nome'];
    if(empty($nome)) {
            echo 'Preencha o seu nome';
    }
?>