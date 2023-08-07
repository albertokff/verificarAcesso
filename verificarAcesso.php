<?php
    function verificarAcesso($a, $b) {
        if ($a >= 18 && $b == true)
            echo "Maior de 18 anos";
        else if ($a < 18)
            echo "Acesso negado. Idade mínima requerida: 18 anos.";
        else if ($a >= 18 && $b == false)
            echo "Acesso negado. Autorização necessária.";
    }

    verificarAcesso(20, true);

?>