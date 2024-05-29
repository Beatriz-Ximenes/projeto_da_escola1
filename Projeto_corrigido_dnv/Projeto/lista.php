<?php
        include_once('config.php');
        include_once('conecta.php');

?>
<form action = "" method = "post"> 

<style>
th,tr 
{ 
    font-size: 30; 
    padding: 100px;
    text-align: center; 
} 
table 
{ 
    border: 2px solid black; 
    float: center;
    width: 30%;

    
}
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
    text-align: center;
    width: 50%;
    margin: auto;
    float: center;

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
    width: 30%;
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
    text-align: center;

}
h3
{
    text-align: center;
}
div
{
    color: black;
    text-align: center;
   float: center;
}
img
{
    widht: 50px;
    height: 50px;
}
</style>
    </style>

    <input type = "text" name="busca"/>
    <button type = "submit">Pesquisar </button>
    <input type = "text" name="excluir"/>
    <button type = "submit">Excluir </button>
</form>
<fieldset>
<div>
    <h3>Coisas do banco</h3>
    <table>
        <thead>
            <tr>
                <td>Descrição</td>
                <td>Quantidade</td>
                <td>Preço</td>
                <td>imagem</td>
            </tr>
        </thead>
        <tbody>

        <?php


       if(!empty($_POST['busca'])): 


        $busca = $_POST['busca'];
        $sql = "select * from Produtos where id = '$busca'";
        $result= mysqli_query($conn, $sql);
      
        if(mysqli_num_rows($result) > 0):
            while($lista = mysqli_fetch_array($result)):

        
            
        ?>
            <tr>
                <td><?php echo $lista['Descricao'] ?></td>
                <td><?php echo $lista['quantidade'] ?></td>
                <td><?php echo $lista['preco'] ?></td>
                <td><img src = "<?php echo $lista['imagem'] ?>" > </td>
            </tr>

        <?php

            endwhile;
    else:
        ?>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>

        <?php 
        endif;
    endif;
        //$ex = $_POST['excluir'];
        

        if(isset($ex))
        {
            $sql2 = "delete from Produtos where id = '$ex'";
            $result2= mysqli_query($conn, $sql2);
        }
        
        ?>


        </tbody>
    </table>

</div>
    </fieldset>


<a href="cadastro.php">Inserir Produto</a>