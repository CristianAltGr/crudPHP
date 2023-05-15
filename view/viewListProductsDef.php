<section class="sectionCard">
    <?php
    foreach ($producte as $card) {
        echo "<div class='divCard'>";
        echo "<div class='divFoto'>";
        echo " <img src='" . $card['foto'] . "' class='imgProducte'></img>";
        echo "<p>" . $card['nom'] . "</p>";
        echo "</div>";
        echo "<div class='divInfo'>";
        echo "<p>" . $card['preu'] . "€</p>";
        echo '<a href="?action=showProd&id=' . $card['id'] . '" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true"> Mostrar més</a>';
        echo "</div>";
        echo "</div>";
    }
    ?>
</section>