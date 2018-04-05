<?php include"cabecalho,php"?>
    <?php
      $nome = $_GET["nome"];
      $preco = $_GET["preco"];
    ?>
        <p class="alert-success">produto <?= $nome?>, preço: <?= $preco?> com sucesso!</p>
<?php include"rodape.php"?>
