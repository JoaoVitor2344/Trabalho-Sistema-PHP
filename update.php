<?php
    require('conexao.php');

    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtos SET descricao = '$descricao', marca = '$marca', estoque = '$estoque', preco = '$preco' WHERE id = '$id'";
    if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Produto Atualizado!'); 
        window.location.href='index.html'</script>";
    }

    mysqli_close($conn);
?>