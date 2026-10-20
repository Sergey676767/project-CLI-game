<?php

echo("Je wordt wakker in een verlaten school, je telefoon werkt niet. Je hoort een geluid in de gang" . PHP_EOL);
$keuze1 = readline("Ga je de gang in of probeer je uit het raam te klimmen (gang/raam) ");
// check of gebruiker "gang" heeft ingevoerd
if ($keuze1 == "gang") {
    echo("Je ziet twee deuren" . PHP_EOL);
    $keuze2 = readline("Ga je naar links of naar rechts (links/rechts) ");
    // check of gebruiker "rechts" heeft ingevoerd
    if ($keuze2 == "rechts") {
        echo("Je komt in een gymzaal, achterin zie je een grote kast" . PHP_EOL);
        $keuze3 = readline("Kijk je in de kast of ga je een andere deur zoeken (kast/deur) ");
        // check of gebruiker "deur" heeft ingevoerd
        if ($keuze3 == "deur") {
            echo("Je vindt een trap naar het dak" . PHP_EOL);
            $keuze4 = readline("Ga je naar het dak of probeer je nog een deur te vinden (dak/deur) ");
            // check of gebruiker "dak" heeft ingevoerd
            if ($keuze4 == "dak") {
                echo("Op het dak zie je een helicopter en een ladder naar beneden" . PHP_EOL);
                $keuze5 = readline("Ga je de helicopter in of ga je met de ladder naar beneden (helicopter/ladder) ");
                // check of gebruiker "dak" heeft ingevoerd
                if ($keuze5 == "ladder") {
                    echo("Je bent beneden en je ziet de hek van de school" . PHP_EOL);
                    $keuze6 = readline("Ga je door het hek of ga je terug de school in (hek/school) ");
                    // check of gebruiker "hek" heeft ingevoerd
                    if ($keuze6 == "hek") {
                        echo("Je bent uit de school ontsnapt, maar je weet nogsteeds niet waar je bent. Je ziet een weg" . PHP_EOL);
                        $keuze7 = readline("Ga je naar links of naar rechts (links/rechts) ");
                        // check of gebruiker "links" heeft ingevoerd
                        if ($keuze7 == "links") {
                            echo("Je komt na een paar minuten lopen bij een huis aan" . PHP_EOL);
                            $keuze8 = readline("Wil je aankloppen of ga je terug op de weg om iets anders te zoeken (aankloppen/terug) ");
                            // check of gebruiker "aanklopppen" heeft ingevoerd
                            if ($keuze8 == "aankloppen") {
                                echo("Je klopt op de deur maar niemand doet open, er staan twee huizen naast dit huis" . PHP_EOL);
                                $keuze9 = readline("Ga je naar links of naar rechts (links/rechts) ");
                                // check of gebruiker "rechts" heeft ingevoerd
                                if ($keuze9 == "rechts") {
                                    echo("Je klopt op de deur en iemand doet open. Je verteld wat er is gebeurd en hij belt de politie. Even later ben je weer thuis" . PHP_EOL);
                                    $keuze10 = readline("Vond je dit een leuk spel (ja/nee) ");
                                    // check of gebruiker "ja" heeft ingevoerd
                                    if ($keuze10 == "ja") {
                                        echo("Einde" . PHP_EOL);
                                        exit("Je hebt gewonnen");
                                    // check of gebruiker "nee" heeft ingevoerd
                                    } elseif ($keuze10 == "nee") {
                                        echo(">:3c" . PHP_EOL);
                                        exit("game over");
                                    }
                                // check of gebruiker "links" heeft ingevoerd
                                } elseif ($keuze9 == "links") {
                                    echo("je klopt op de deur maar niemand doet open. je hoort voetstappen achter je, je draait je om en ziet een man met een mes in zijn hand" . PHP_EOL);
                                    exit("game over");
                                }
                            // check of gebruiker "terug" heeft ingevoerd
                            } elseif ($keuze8 == "terug") {
                                echo("je draait om maar er is niks, alles is weg. je draait weer terug maar daar is ook niks meer" . PHP_EOL);
                                exit("game over");
                            }
                        // check of gebruiker "rechts" heeft ingevoerd
                        } elseif ($keuze7 == "rechts") {
                            echo("je loopt op een weg, je hoort een auto achter je" . PHP_EOL);
                            exit("game over");
                        }
                    // check of gebruiker "school" heeft ingevoerd
                    } elseif ($keuze6 == "school") {
                        echo("waarom zou je dit doen, ik weet niet wat je had verwacht" . PHP_EOL);
                        exit("game over");
                    }
                // check of gebruiker "helicopter" heeft ingevoerd
                } elseif ($keuze5 == "helicopter") {
                    echo("je probeert weg te vliegen in de helicopter, maar je weet niet hoe je het moet besturen" . PHP_EOL);
                    exit("game over");
                }
            // check of gebruiker "deur" heeft ingevoerd
            } elseif ($keuze4 == "deur") {
                echo("je komt in een lege kamer, het licht gaat uit en je kan niks meer zien. je probeert de muur te vinden maar het lijkt alsof er niks meer is" . PHP_EOL);
                exit("game over");
            }
        // check of gebruiker "kast" heeft ingevoerd
        } elseif ($keuze3 == "kast") {
            echo("voordat je kan reageren springt er iets op je uit de kast" . PHP_EOL);
            exit("game over");
        }
    // check of gebruiker "links" heeft ingevoerd
    } elseif ($keuze2 == "links") {
        echo("Je komt in een klaslokaal, er ligt een sleutel op tafel" . PHP_EOL);
        $keuze3b = readline("Sleutel pakken of verder gaan (sleutel/verder)");
        // check of gebruiker "verder" heeft ingevoerd
        if ($keuze3b == "verder") {
            // deze code is allemaal hetzelfde als de code hierboven
            echo("Je komt in een gymzaal, achterin zie je een grote kast" . PHP_EOL);
            $keuze3 = readline("Kijk je in de kast of ga je een andere deur zoeken (kast/deur) ");
            if ($keuze3 == "deur") {
                echo("Je vindt een trap naar het dak" . PHP_EOL);
                $keuze4 = readline("Ga je naar het dak of probeer je nog een deur te vinden (dak/deur) ");
                if ($keuze4 == "dak") {
                    echo("Op het dak zie je een helicopter en een ladder naar beneden" . PHP_EOL);
                    $keuze5 = readline("Ga je de helicopter in of ga je met de ladder naar beneden (helicopter/ladder) ");
                    if ($keuze5 == "ladder") {
                        echo("Je bent beneden en je ziet de hek van de school" . PHP_EOL);
                        $keuze6 = readline("Ga je door het hek of ga je terug de school in (hek/school) ");
                        if ($keuze6 == "hek") {
                            echo("Je bent uit de school ontsnapt, maar je weet nogsteeds niet waar je bent. Je ziet een weg" . PHP_EOL);
                            $keuze7 = readline("Ga je naar links of naar rechts (links/rechts) ");
                            if ($keuze7 == "links") {
                                echo("Je komt na een paar minuten lopen bij een huis aan" . PHP_EOL);
                                $keuze8 = readline("Wil je aankloppen of ga je terug op de weg om iets anders te zoeken (aankloppen/terug) ");
                                if ($keuze8 == "aankloppen") {
                                    echo("Je klopt op de deur maar niemand doet open, er staan twee huizen naast dit huis" . PHP_EOL);
                                    $keuze9 = readline("Ga je naar links of naar rechts (links/rechts) ");
                                    if ($keuze9 == "rechts") {
                                        echo("Je klopt op de deur en iemand doet open. Je verteld wat er is gebeurd en hij belt de politie. Even later ben je weer thuis" . PHP_EOL);
                                        $keuze10 = readline("Vond je dit een leuk spel (ja/nee) ");
                                        if ($keuze10 == "ja") {
                                            echo("Einde" . PHP_EOL);
                                            exit("Je hebt gewonnen");
                                        } elseif ($keuze10 == "nee") {
                                            echo(">:3c" . PHP_EOL);
                                            exit("game over");
                                        }
                                    } elseif ($keuze9 == "links") {
                                        echo("je klopt op de deur maar niemand doet open. je hoort voetstappen achter je, je draait je om en ziet een man met een mes in zijn hand" . PHP_EOL);
                                        exit("game over");
                                    }
                                } elseif ($keuze8 == "terug") {
                                    echo("je draait om maar er is niks, alles is weg. je draait weer terug maar daar is ook niks meer" . PHP_EOL);
                                    exit("game over");
                                }
                            } elseif ($keuze7 == "rechts") {
                                echo("je loopt op een weg, je hoort een auto achter je" . PHP_EOL);
                                exit("game over");
                            }
                        } elseif ($keuze6 == "school") {
                            echo("waarom zou je dit doen, ik weet niet wat je had verwacht" . PHP_EOL);
                            exit("game over");
                        }
                    } elseif ($keuze5 == "helicopter") {
                        echo("je probeert weg te vliegen in de helicopter, maar je weet niet hoe je het moet besturen" . PHP_EOL);
                        exit("game over");
                    }
                } elseif ($keuze4 == "deur") {
                    echo("je komt in een lege kamer, het licht gaat uit en je kan niks meer zien. je probeert de muur te vinden maar het lijkt alsof er niks meer is" . PHP_EOL);
                    exit("game over");
                }
            } elseif ($keuze3 == "kast") {
                echo("voordat je kan reageren springt er iets op je uit de kast" . PHP_EOL);
                exit("game over");
            }
        // check of gebruiker "sleutel" heeft ingevoerd
        } elseif ($keuze3b == "sleutel") {
            echo("je pakt de sleutel en opent de deur, maar de deur is een mimic" . PHP_EOL);
            exit("game over");
        }
    }
// check of de gebruiker "raam" heeft ingevoerd
} elseif ($keuze1 == "raam") {
    echo("Je klimt uit het raam, maar het zit veel hoger dan je dacht" . PHP_EOL);
    exit("game over");
}

?>