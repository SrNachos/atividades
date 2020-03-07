<?php
    include "cabecalho.php";
?>
<form action="indexjogo.php" method="POST">
    <fieldset><label>jogador 1</label>
        <input type="text" placeholder="linha" name="linha"><br>
        <input type="text" placeholder="coluna" name="coluna">
    </fieldset>
    <?php
        include "tabuleiro.php";
    ?>
</form>
</body>
</html>
