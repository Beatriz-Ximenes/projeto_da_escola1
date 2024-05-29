<?php
 
include_once('config.php');
include_once('conecta.php');
    
$desc = filter_input(INPUT_POST, 'descri', FILTER_SANITIZE_SPECIAL_CHARS); 
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS); 
$preco  = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS); 

$pasta_destino = 'imagens/';
$arquivo_destino = "C:\wamp64\www\Projeto_corrigido_dnv\Projeto/";
$nome_arquivo = basename($_FILES['imagem']['name']);
$arquivo_temp = $_FILES['imagem']['tmp_name'];
$return =  (pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION));

$unidade = uniqid();
$uniao = $pasta_destino . $unidade ."." . $return;

$sql = "INSERT INTO Produtos(Descricao, quantidade, preco, imagem, diretorio) 
VALUES ('$desc', '$quantidade', '$preco', '$uniao', '$arquivo_destino')"; 


if (move_uploaded_file($arquivo_temp, $arquivo_destino. $uniao)):
echo "<p>Arquivo enviado com sucesso.</p>";

else:
echo "<p>Não foi possível fazer o upload do arquivo!</p>";

endif;


if (mysqli_query($conn, $sql)): 
printf("<h1>Dados inseridos com sucesso!</h1>");
else:
    printf("Nao foi possivel");
endif; 
mysqli_close($conn);
var_dump($_POST);

?>
<a href="lista.php">Lista Produtos</a>

