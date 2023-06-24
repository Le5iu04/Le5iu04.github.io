<html>
    <head>
    <title></title>
    <meta charset="utf-8">
    <link href="styl.css" rel="stylesheet">
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <body>
            <h1>Generator przeciwników Earthdawn</h1>
            <form action="index.php" method="post">
                <input type="submit" value="Generuj">
            </form>
            <div id="generator">
            <?php

                $con=mysqli_connect("localhost", "root", "", "earthdawn");

                    $nazwaPool1=array(
                        "Straszliwy",
                        "Przerażający",
                        "Wielki",
                        "Trujący",
                        "Agresywny",
                        "Pełzający",
                        "Skalny",
                        "Lodowy",
                        "Ognisty",
                        "Latający",
                        "Nieumarły",
                        "Człapiący",
                        "Waleczny",
                        "Pancerny",
                        "Tajemniczy",
                        "Doskonały",
                        "Silny",
                        "Szybki",
                        "Niepokonany",
                        "Gnijący",
                        "Beznogi",
                        "Uzbrojony",
                        "Nieustraszony",
                        "Topniejący",
                        "Ropiejący",
                        "Kopiący",
                        "Kolczasty",
                        "Magiczny",
                        "Splugawiony",
                        "Świecący",
                        "Szarżujący",
                        "Wierzgający",
                        "Ostronożny",
                        "Tęgi",
                        "Wielogłowy",
                        "Dwugłowy",
                        "Czteronożny",
                        "Fluorescencyjny",
                        "Morski",
                        "Szkarłatny",
                        "Zmiennokształtny",
                        "Przeklęty",
                        "Eteryczny",
                        "Astralny",
                        "Dziki",
                        "Mglisty",
                        "Międzywymiarowy",
                        "Przerośnięty",
                        "Zarośnięty bluszczem",
                        "Toksyczny",
                        "Krwawy",
                        "Metaliczny",
                        "Nienaturalny",
                        "Zabójczy",
                        "Wzmocniony",
                        "Zaklęty",
                        "Chitynowy",
                        "Bagienny",
                        "Podniebny",
                        "Jaskiniowy",
                        "Nocny",
                        "Mroczny"
                    );

                    $nazwaPool2=array(
                        "pająk",
                        "stawonóg",
                        "troll",
                        "ork",
                        "obsydianin",
                        "wietrzniak",
                        "elf",
                        "człowiek",
                        "t'skrang",
                        "krasnolud",
                        "skorupiak",
                        "rekin",
                        "krab",
                        "szkielet",
                        "kapitan",
                        "wojownik",
                        "strzelec",
                        "pomiot",
                        "rycerz",
                        "złodziej",
                        "łupieżca",
                        "zębacz",
                        "przedmiot",
                        "glut",
                        "ptak",
                        "wilk",
                        "żółw",
                        "czarownik",
                        "czarnoksiężnik",
                        "smok",
                        "strażnik",
                        "obrońca",
                        "wąż",
                        "niedźwiedź",
                        "pijawek",
                        "bluszcz",
                        "koń",
                        "nosorożec",
                        "żywiołak",
                        "glizd",
                        "wijec",
                        "szympans",
                        "golem",
                        "drzewiec",
                        "pnączak",
                        "humanoid",
                        "grzyb",
                        "Węgorz",
                        "bizon",
                        "moloch",
                        "aligator",
                        "cień",
                        "tytan",
                        "goblin",
                        "wampir",
                        "wężo-człek",
                        "robal",
                        "duch",
                        "mara",
                        "olbrzym",
                        "posąg",
                        "ghul",
                        "trupojad",
                        "cyklop",
                        "ogr",
                        "pełzacz",
                        "stonóg",
                        "wędrowiec",
                        "rozpruwacz",
                        "mackogłów",
                        "skalniak",
                        "skorpion",
                        "behemot",
                        "lewiatan",
                        "gryzak",
                        "kruk"
                    );

                    $predkoscPool=array(
                        "50/25",
                        "75/32",
                        "60/30",
                        "100/50",
                        "150/75",
                        "80/40",
                        "120/60",
                        "70/35",
                        "30/15",
                        "130/65",
                        "40/20",
                        "43/22",
                        "35/18",
                        "57/29"
                    );

                    $kosciPool=array(
                        "k12",
                        "2k6",
                        "k8+k6",
                        "k10+k6",
                        "k10+k8",
                        "2k10",
                        "k12+k10",
                        "k20+k4",
                        "k20+k6"
                    );

                $rand1 = $nazwaPool1[array_rand($nazwaPool1)];
                $rand2 = $nazwaPool2[array_rand($nazwaPool2)];
                $rand3 = $kosciPool[array_rand($kosciPool)];
                $rand4 = $kosciPool[array_rand($kosciPool)];
                $rand5=rand(5, 12);
                $rand6=rand(5, 12);
                $rand7=rand(5, 12);
                $rand8=rand(0, 7);
                $rand9=rand(24, 62);
                $rand11 = rand(true, false);
                $rand12 = $predkoscPool[array_rand($predkoscPool)];
                $rand13 = $kosciPool[array_rand($kosciPool)];
                $rand14 = $kosciPool[array_rand($kosciPool)];

                $nazwa=$rand1." ".$rand2;
                $atak=$rand3;
                $obrazenia=$rand4;
                $obrFiz=$rand5;
                $obrMag=$rand6;
                $obrSpol=$rand7;
                $pancerz=$rand8;
                $pZycia=$rand9;
                $pPrzyt=ceil(($rand9/2) + ($rand9/3));
                $czary=$rand11;
                $predkosc=$rand12;
                $tkanieWatkow=$rand13;
                $rzucanieCzarow=$rand14;

                if ($czary == true) {
                  $czary = "Tak";
                } else {
                  $czary = "Nie";
                }

                echo $nazwa."<br> Atak: ".$atak."<br> Obrażenia: ".$obrazenia."<br> Obrona fizyczna: ".$obrFiz."<br> Obrona magiczna: ".$obrMag."<br> Obrona społeczna: ".$obrSpol."<br> Pancerz: ".$pancerz."<br> Próg życia: ".$pZycia."<br> Próg przytomności: ".$pPrzyt."<br> Czary: ".$czary."<br> Prędkość: ".$predkosc."<br>";

              if ($czary == "Tak") {
                echo "Tkanie wątków: ".$tkanieWatkow."<br> Rzucanie czarów: ".$rzucanieCzarow;
              } else if ($czary == "Nie"){
                echo "";
              }

                //$query=mysqli_query($con, "INSERT INTO przeciwnicy(ID, Nazwa, Atak, Obrazenia, Obr_fiz, Obr_mag, Obr_spol, Pancerz, Prog_Zycia, Prog_Przyt, Czary, Predkosc) VALUES (NULL, '$nazwa', '$atak', '$obrazenia', '$obrFiz', '$obrMag', '$obrSpol', '$pancerz', '$pZycia', '$pPrzyt', '$czary', '$predkosc');");

                mysqli_close($con);
            ?>
</body>
</html>
