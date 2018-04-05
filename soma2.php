<?php include"cabecalho,php"?>

    <?php
        function somar($vetor)
        {
            $res = 0;
            for($i = 0; $i < sizeof($vetor); $i++)
            {
                $res += $vetor[$i];
            } 
            return $res;
        }
        $vetor = array($_GET["v1"], $_GET["v2"], $_GET["v3"], $_GET["v4"], $_GET["v5"]);
 
        echo "Resultado: ".somar($vetor);
    ?>

<?php include"rodape.php"?>
