<?php

$stappen = 0;
$startGame = false;
$keuzes = array();

// het spel start alleen als de gebruiker start typt
echo("typ 'start' als je wilt beginnen" . PHP_EOL);
while ($startGame == false) {
    $start = readline();
    if ($start == "start") {
        $startGame = true;
    }
}

echo("Je wordt wakker in een verlaten school, je telefoon werkt niet. Je hoort een geluid in de gang" . PHP_EOL);
$keuze1 = readline("Ga je de gang in of probeer je uit het raam te klimmen (gang/raam) ");
$keuzes[] = $keuze1;
// check of gebruiker "gang" heeft ingevoerd
if ($keuze1 == "gang") {
    // voegt 1 toe aan stappen en print het aantal stappen
    $stappen++;
    echo("stappen: $stappen" . PHP_EOL);
    echo("Je ziet twee deuren" . PHP_EOL);
    $keuze2 = readline("Ga je naar links of naar rechts (links/rechts) ");
    $keuzes[] = $keuze2;
    // check of gebruiker "rechts" heeft ingevoerd
    if ($keuze2 == "rechts") {
        // voegt 1 toe aan stappen en print het aantal stappen
        $stappen++;
        echo("stappen: $stappen" . PHP_EOL);
        echo("Je komt in een gymzaal, achterin zie je een grote kast" . PHP_EOL);
        $keuze3 = readline("Kijk je in de kast of ga je een andere deur zoeken (kast/deur) ");
        $keuzes[] = $keuze3;
        // check of gebruiker "deur" heeft ingevoerd
        if ($keuze3 == "deur") {
            // voegt 1 toe aan stappen en print het aantal stappen
            $stappen++;
            echo("stappen: $stappen" . PHP_EOL);
            echo("Je vindt een trap naar het dak" . PHP_EOL);
            $keuze4 = readline("Ga je naar het dak of probeer je nog een deur te vinden (dak/deur) ");
            $keuzes[] = $keuze4;
            // check of gebruiker "dak" heeft ingevoerd
            if ($keuze4 == "dak") {
                // voegt 1 toe aan stappen en print het aantal stappen
                $stappen++;
                echo("stappen: $stappen" . PHP_EOL);
                echo("Op het dak zie je een helicopter en een ladder naar beneden" . PHP_EOL);
                $keuze5 = readline("Ga je de helicopter in of ga je met de ladder naar beneden (helicopter/ladder) ");
                $keuzes[] = $keuze5;
                // check of gebruiker "dak" heeft ingevoerd
                if ($keuze5 == "ladder") {
                    // voegt 1 toe aan stappen en print het aantal stappen
                    $stappen++;
                    echo("stappen: $stappen" . PHP_EOL);
                    echo("Je bent beneden en je ziet de hek van de school" . PHP_EOL);
                    $keuze6 = readline("Ga je door het hek of ga je terug de school in (hek/school) ");
                    $keuzes[] = $keuze6;
                    // check of gebruiker "hek" heeft ingevoerd
                    if ($keuze6 == "hek") {
                        // voegt 1 toe aan stappen en print het aantal stappen
                        $stappen++;
                        echo("stappen: $stappen" . PHP_EOL);
                        echo("Je bent uit de school ontsnapt, maar je weet nogsteeds niet waar je bent. Je ziet een weg" . PHP_EOL);
                        $keuze7 = readline("Ga je naar links of naar rechts (links/rechts) ");
                        $keuzes[] = $keuze7;
                        // check of gebruiker "links" heeft ingevoerd
                        if ($keuze7 == "links") {
                            // voegt 1 toe aan stappen en print het aantal stappen
                            $stappen++;
                            echo("stappen: $stappen" . PHP_EOL);
                            echo("Je komt na een paar minuten lopen bij een huis aan" . PHP_EOL);
                            $keuze8 = readline("Wil je aankloppen of ga je terug op de weg om iets anders te zoeken (aankloppen/terug) ");
                            $keuzes[] = $keuze8;
                            // check of gebruiker "aanklopppen" heeft ingevoerd
                            if ($keuze8 == "aankloppen") {
                                // voegt 1 toe aan stappen en print het aantal stappen
                                $stappen++;
                                echo("stappen: $stappen" . PHP_EOL);
                                echo("Je klopt op de deur maar niemand doet open, er staan twee huizen naast dit huis" . PHP_EOL);
                                $keuze9 = readline("Ga je naar links of naar rechts (links/rechts) ");
                                $keuzes[] = $keuze9;
                                // check of gebruiker "rechts" heeft ingevoerd
                                if ($keuze9 == "rechts") {
                                    // voegt 1 toe aan stappen en print het aantal stappen
                                    $stappen++;
                                    echo("stappen: $stappen" . PHP_EOL);
                                    echo("Je klopt op de deur en iemand doet open. Je verteld wat er is gebeurd en hij belt de politie. Even later ben je weer thuis" . PHP_EOL);
                                    $keuze10 = readline("Vond je dit een leuk spel (ja/nee) ");
                                    $keuzes[] = $keuze10;
                                    // check of gebruiker "ja" heeft ingevoerd
                                    if ($keuze10 == "ja") {
                                        // voegt 1 toe aan stappen en print het aantal stappen
                                        $stappen++;
                                        echo("stappen: $stappen" . PHP_EOL);
                                        echo("Einde" . PHP_EOL);
                                        exit("Je hebt gewonnen");
                                    // check of gebruiker "nee" heeft ingevoerd
                                    } elseif ($keuze10 == "nee") {
                                        echo(">:3c" . PHP_EOL);
                                        echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                                        foreach ($keuzes as $keuze) {
                                            echo("$keuze" . PHP_EOL);
                                        }
                                        exit();
                                    // als gebruiker niet een van de opties typet komt er "ongeldige invoer" in de terminal
                                    } else {
                                        exit("ongeldige invoer");
                                    }
                                // check of gebruiker "links" heeft ingevoerd
                                } elseif ($keuze9 == "links") {
                                    echo("je klopt op de deur maar niemand doet open. je hoort voetstappen achter je, je draait je om en ziet een man met een mes in zijn hand" . PHP_EOL);
                                    echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                                    foreach ($keuzes as $keuze) {
                                        echo("$keuze" . PHP_EOL);
                                    }
                                    exit();
                                } else {
                                    exit("ongeldige invoer");
                                }
                            // check of gebruiker "terug" heeft ingevoerd
                            } elseif ($keuze8 == "terug") {
                                echo("je draait om maar er is niks, alles is weg. je draait weer terug maar daar is ook niks meer" . PHP_EOL);
                                echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                                foreach ($keuzes as $keuze) {
                                    echo("$keuze" . PHP_EOL);
                                }
                                exit();
                            } else {
                                exit("ongeldige invoer");
                            }
                        // check of gebruiker "rechts" heeft ingevoerd
                        } elseif ($keuze7 == "rechts") {
                            echo("je loopt op een weg, je hoort een auto achter je" . PHP_EOL);
                            echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                            foreach ($keuzes as $keuze) {
                                echo("$keuze" . PHP_EOL);
                            }
                            exit();
                        } else {
                            exit("ongeldige invoer");
                        }
                    // check of gebruiker "school" heeft ingevoerd
                    } elseif ($keuze6 == "school") {
                        echo("waarom zou je dit doen, ik weet niet wat je had verwacht" . PHP_EOL);
                        echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                        foreach ($keuzes as $keuze) {
                            echo("$keuze" . PHP_EOL);
                        }
                        exit();
                    } else {
                        exit("ongeldige invoer");
                    }
                // check of gebruiker "helicopter" heeft ingevoerd
                } elseif ($keuze5 == "helicopter") {
                    echo("je probeert weg te vliegen in de helicopter, maar je weet niet hoe je het moet besturen" . PHP_EOL);
                    echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                    foreach ($keuzes as $keuze) {
                        echo("$keuze" . PHP_EOL);
                    }
                    exit();
                } else {
                    exit("ongeldige invoer");
                }
            // check of gebruiker "deur" heeft ingevoerd
            } elseif ($keuze4 == "deur") {
                echo("je komt in een lege kamer, het licht gaat uit en je kan niks meer zien. je probeert de muur te vinden maar het lijkt alsof er niks meer is" . PHP_EOL);
                echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                foreach ($keuzes as $keuze) {
                    echo("$keuze" . PHP_EOL);
                }
                exit();
            } else {
                exit("ongeldige invoer");
            }
        // check of gebruiker "kast" heeft ingevoerd
        } elseif ($keuze3 == "kast") {
            echo("voordat je kan reageren springt er iets op je uit de kast" . PHP_EOL);
            echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
            foreach ($keuzes as $keuze) {
                echo("$keuze" . PHP_EOL);
            }
            exit();
        } else {
            exit("ongeldige invoer");
        }
    // check of gebruiker "links" heeft ingevoerd
    } elseif ($keuze2 == "links") {
        // voegt 1 toe aan stappen en print het aantal stappen
        $stappen++;
        echo("stappen: $stappen" . PHP_EOL);
        echo("Je komt in een klaslokaal, er ligt een sleutel op tafel en er is een deur" . PHP_EOL);
        $keuze3b = readline("Sleutel pakken of verder gaan (sleutel/verder) ");
        $keuzes[] = $keuze3b;
        // check of gebruiker "verder" heeft ingevoerd
        if ($keuze3b == "verder") {
            // deze code is allemaal hetzelfde als de code hierboven
            $stappen++;
            echo("stappen: $stappen" . PHP_EOL);
            echo("Je komt in een gymzaal, achterin zie je een grote kast" . PHP_EOL);
            $keuze3 = readline("Kijk je in de kast of ga je een andere deur zoeken (kast/deur) ");
            $keuzes[] = $keuze3;
            if ($keuze3 == "deur") {
                $stappen++;
                echo("stappen: $stappen" . PHP_EOL);
                echo("Je vindt een trap naar het dak" . PHP_EOL);
                $keuze4 = readline("Ga je naar het dak of probeer je nog een deur te vinden (dak/deur) ");
                $keuzes[] = $keuze4;
                if ($keuze4 == "dak") {
                    $stappen++;
                    echo("stappen: $stappen" . PHP_EOL);
                    echo("Op het dak zie je een helicopter en een ladder naar beneden" . PHP_EOL);
                    $keuze5 = readline("Ga je de helicopter in of ga je met de ladder naar beneden (helicopter/ladder) ");
                    $keuzes[] = $keuze5;
                    if ($keuze5 == "ladder") {
                        $stappen++;
                        echo("stappen: $stappen" . PHP_EOL);
                        echo("Je bent beneden en je ziet de hek van de school" . PHP_EOL);
                        $keuze6 = readline("Ga je door het hek of ga je terug de school in (hek/school) ");
                        $keuzes[] = $keuze6;
                        if ($keuze6 == "hek") {
                            $stappen++;
                            echo("stappen: $stappen" . PHP_EOL);
                            echo("Je bent uit de school ontsnapt, maar je weet nogsteeds niet waar je bent. Je ziet een weg" . PHP_EOL);
                            $keuze7 = readline("Ga je naar links of naar rechts (links/rechts) ");
                            $keuzes[] = $keuze7;
                            if ($keuze7 == "links") {
                                $stappen++;
                                echo("stappen: $stappen" . PHP_EOL);
                                echo("Je komt na een paar minuten lopen bij een huis aan" . PHP_EOL);
                                $keuze8 = readline("Wil je aankloppen of ga je terug op de weg om iets anders te zoeken (aankloppen/terug) ");
                                $keuzes[] = $keuze8;
                                if ($keuze8 == "aankloppen") {
                                    $stappen++;
                                    echo("stappen: $stappen" . PHP_EOL);
                                    echo("Je klopt op de deur maar niemand doet open, er staan twee huizen naast dit huis" . PHP_EOL);
                                    $keuze9 = readline("Ga je naar links of naar rechts (links/rechts) ");
                                    $keuzes[] = $keuze9;
                                    if ($keuze9 == "rechts") {
                                        $stappen++;
                                        echo("stappen: $stappen" . PHP_EOL);
                                        echo("Je klopt op de deur en iemand doet open. Je verteld wat er is gebeurd en hij belt de politie. Even later ben je weer thuis" . PHP_EOL);
                                        $keuze10 = readline("Vond je dit een leuk spel (ja/nee) ");
                                        $keuzes[] = $keuze10;
                                        if ($keuze10 == "ja") {
                                            $stappen++;
                                            echo("stappen: $stappen" . PHP_EOL);
                                            echo("Einde" . PHP_EOL);
                                            exit("Je hebt gewonnen");
                                        } elseif ($keuze10 == "nee") {
                                            echo(">:3c" . PHP_EOL);
                                            echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                                            foreach ($keuzes as $keuze) {
                                                echo("$keuze" . PHP_EOL);
                                            }
                                            exit();
                                        } else {
                                            exit("ongeldige invoer");
                                        }
                                    } elseif ($keuze9 == "links") {
                                        echo("je klopt op de deur maar niemand doet open. je hoort voetstappen achter je, je draait je om en ziet een man met een mes in zijn hand" . PHP_EOL);
                                        echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                                        foreach ($keuzes as $keuze) {
                                            echo("$keuze" . PHP_EOL);
                                        }
                                        exit();
                                    } else {
                                        exit("ongeldige invoer");
                                    }
                                } elseif ($keuze8 == "terug") {
                                    echo("je draait om maar er is niks, alles is weg. je draait weer terug maar daar is ook niks meer" . PHP_EOL);
                                    echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                                    foreach ($keuzes as $keuze) {
                                        echo("$keuze" . PHP_EOL);
                                    }
                                    exit();
                                } else {
                                    exit("ongeldige invoer");
                                }
                            } elseif ($keuze7 == "rechts") {
                                echo("je loopt op een weg, je hoort een auto achter je" . PHP_EOL);
                                echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                                foreach ($keuzes as $keuze) {
                                    echo("$keuze" . PHP_EOL);
                                }
                                exit();
                            } else {
                                exit("ongeldige invoer");
                            }
                        } elseif ($keuze6 == "school") {
                            echo("waarom zou je dit doen, ik weet niet wat je had verwacht" . PHP_EOL);
                            echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                            foreach ($keuzes as $keuze) {
                                echo("$keuze" . PHP_EOL);
                            }
                            exit();
                        } else {
                            exit("ongeldige invoer");
                        }
                    } elseif ($keuze5 == "helicopter") {
                        echo("je probeert weg te vliegen in de helicopter, maar je weet niet hoe je het moet besturen" . PHP_EOL);
                        echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                        foreach ($keuzes as $keuze) {
                            echo("$keuze" . PHP_EOL);
                        }
                        exit();
                    } else {
                        exit("ongeldige invoer");
                    }
                } elseif ($keuze4 == "deur") {
                    echo("je komt in een lege kamer, het licht gaat uit en je kan niks meer zien. je probeert de muur te vinden maar het lijkt alsof er niks meer is" . PHP_EOL);
                    echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                    foreach ($keuzes as $keuze) {
                        echo("$keuze" . PHP_EOL);
                    }
                    exit();
                } else {
                    exit("ongeldige invoer");
                }
            } elseif ($keuze3 == "kast") {
                echo("voordat je kan reageren springt er iets op je uit de kast" . PHP_EOL);
                echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
                foreach ($keuzes as $keuze) {
                    echo("$keuze" . PHP_EOL);
                }
                exit();
            } else {
                exit("ongeldige invoer");
            }
        // check of gebruiker "sleutel" heeft ingevoerd
        } elseif ($keuze3b == "sleutel") {
            echo("je pakt de sleutel en opent de deur, maar de deur is een mimic" . PHP_EOL);
            echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
            foreach ($keuzes as $keuze) {
                echo("$keuze" . PHP_EOL);
            }
            exit();
        } else {
            exit("ongeldige invoer");
        }
    } else {
        exit("ongeldige invoer");
    }
// check of de gebruiker "raam" heeft ingevoerd
} elseif ($keuze1 == "raam") {
    echo("Je klimt uit het raam, maar het zit veel hoger dan je dacht" . PHP_EOL);
    echo("game over" . PHP_EOL . "dit waren je keuzes: " . PHP_EOL);
    foreach ($keuzes as $keuze) {
        echo("$keuze" . PHP_EOL);
    }
    exit();
} else {
    exit("ongeldige invoer");
}

?>