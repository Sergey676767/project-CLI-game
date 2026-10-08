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
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

?>