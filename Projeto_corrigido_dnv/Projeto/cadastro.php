<?php
include_once('config.php');
?>
<style>
p
{
    
        font-family: Georgia, 'Times New Roman', Times, serif;
        
}
h1
{
    text-align: center;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
fieldset
{
    
    width: 40%;
    margin: auto;
}
h2
{
    
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: blue;
}
button
{
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    border-radius: 20px;
    width: 50%;
    border: 1px solid black;
    border-radius: 12px;
    padding: 5px;
}
button:hover
{
    background-color: grey;
    color: white;

}
input
{
    
    font-family: Georgia, 'Times New Roman', Times, serif;
    border: 1px solid black;
    border-radius: 12px;
    padding: 5px;

}
fieldset
{
    width: 30%;
    margin: auto;
}
h3
{
    text-align: center;
}
</style>

<h3>Novo Cadastro - Usuário</h3>
<fieldset>
<form action="inserir.php" method="post" enctype="multipart/form-data">
    <input type="text" name="descri" id="descri" placeholder="Descrição" />
    <input type="text" name="quantidade" id="quantidade" placeholder="Quantidade" />
    <input type="text" name="preco" id="preco" placeholder="Preço" />
    <input type="file" name="imagem" id="imagem" placeholder="Imagem" />

    <button type="submit" name="btn_cadastrar">Cadastrar</button>
</form>
</fieldset>
