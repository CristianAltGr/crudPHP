
                        <section>
                            <?php
                            foreach($producte as $card) {
                                echo "<div class='divGran'>";
                                    echo "<div class='divFoto'>";
                                    echo " <img src='" . $row['foto'] . "' id='imgProducte'></img>";
                                    echo "</div>";
                                    echo "<div>";
                                    echo $card['nom'];
                                    echo $card['preu'];
                                    echo "</div>";
                                echo "</div>";
                            }
                           ?>
                        </section>