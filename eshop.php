<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link rel="stylesheet" href="css/eshop.css">
    <title>Logmodel</title>
    <link rel="icon" type="image/png" href="images/Logo2.png">
</head>
<header>
    <h1 class="header">Logmodel</h1>
</header>
<br>
<br>

<body>
    <div class="info">
        <div class="preface">
            <h1>E-shop</h1>
        </div>

        <div class="nav">
            <nav>
                <ul>
                    <li><a href="index.html">Úvod</a></li>
                    <li><a href="about.html">O nás</a></li>
                    <li><a href="catalog.php">Katalog</a></li>
                    <li class="active"><a href="eshop.php">Eshop</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                </ul>
            </nav>
        </div>
        <div class="disclaimer">
            <p>- Klády jsou určeny pro modeláře v měřítku H0. Balení je ve volném provedení (klády balím jako volně ložené), takže je možno s nimi dělat cokoliv a jakkoliv je
                rovnat jak do vozů, tak i volně do lesa jako imitaci určeného dřeva na odvoz, či na nakládací plochy a jiná místa, kde se pracuje se dřevem.
            </p>
            <p>- K výrobě využívám přírodní dřevo. Název dřeviny v mém katalogu je pouze "obchodní" název pro jednodušší orientaci, tudíž s reálným druhem dřeviny nemusí mít
                nic společného
            </p>
            <p>- Jakostní třída A je nejvyšší třída jakosti. Jakostní třída B je v pořadí 2. třída jakosti a oproti jakostní třídě A se liší pouze v trochu horším zbarvení dřeviny, dále
                tedy není nijak jinak závadná.
            </p>
            <p>- Kód výrobku se v souvislosti s jakostní třídou nijak obzvlášť nemění, jen se ke kódu připíše písmeno A nebo B, například klády smrkové délky 0,5m jakosti A
                má kód výrobku 0101A.
            </p>
            <p>- Odchylky v délce klády jsou v rozmezí cca ±1 mm. Odchylky v množství na balení jsou ±10 cm3
            </p>
            <p>- Kód výrobku podbarvený červenou barvou znamená, že výrobek je vyráběn pouze na objednávku</p>
            <p>- Množství 250 cm3 odpovídá přibližně množství plně loženého vozu Sggmrrs typu Innofreight od firmy Sudexpress.</p>
            <p>- Množství 160 cm3 odpovídá přibližně množství dvou plně ložených vozů Eas od firmy Piko. </p>
            <p>- Množství 90 cm3 odpovídá přibližně množství dvou plně ložených vozů Es od firmy Roco. </p>
            <p>- Množství 70 cm3 odpovídá přibližně množství dvou ložených vozů Es od firmy Roco.</p>
            <p>- Pokud by však někdo chtěl množství nebo vlastní délku dřeviny podle svých potřeb, tak mě neváhejte kontaktovat na E-mail, v <a href="contact.html">Kontaktech</a></p>
        </div><br>
        <div class="order_form">
            <h2>Objednávkový formulář</h2>
            <form action="php/order_db.php" method="post">
                <label for="info">
                    <h3>Kontaktní údaje</h3>
                </label>
                <label for="name">Jméno</label><br>
                <input type="text" name="name" id="name" required width=""><br>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email" required><br>
                <input name="subject" type="hidden" value="Objednávka-Logmodel">
                <label for="phone">Telefon + Předvolba</label><br>
                <input type="tel" name="phone" id="phone" required><br>


                <label for="order">
                    <h3>Objednávka</h3>
                </label>
                <label for="product">
                    <h3>Druh dřeva</h3>
                </label>
                <div class="product_form">
                    <div class="smrk_form">
                        <input type="checkbox" id="smrk" onclick="toggleInputs('smrk', 'smrk-inputs')"><label for=""><a href="html/wood/smrk/smrk.html" target="_blank">Smrkové dřevo</a></label><br>
                        <div id="smrk-inputs" class="hidden">
                            <input type="checkbox" id="smrka" onclick="toggleInputs('smrka', 'smrka-inputs')"><label style="font-weight: bold;">Jakost A</label><br>

                            <div id="smrka-inputs" class="hidden">
                                <label for="0101A"><a href="html/wood/smrk/0,5.html" target="_blank">Smrkové dřevo 0,5m <br> (0101A)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="Smrk05" id="0101A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0102A"><a href="html/wood/smrk/0,5st.html" target="_blank">Smrkové dřevo 0,5m štípané <br> (0102A)</a></label><br>
                                <label>Cena za kus: 220 Kč</label><br>
                                <input type="number" name="Smrk05st" id="0102A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0103A"><a href="html/wood/smrk/1.html" target="_blank">Smrkové dřevo 1m <br> (0103A)</a></label><br>
                                <label>Cena za kus: 160 Kč</label><br>
                                <input type="number" name="Smrk1" id="0103A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0104A"><a href="html/wood/smrk/1st.html" target="_blank">Smrkové dřevo 1m štípané <br> (0104A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="Smrk1st" id="0104A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0105A"><a href="html/wood/smrk/1,5.html" target="_blank">Smrkové dřevo 1,5m <br> (0105A)</a></label><br>
                                <label>Cena za kus: 220 Kč</label><br>
                                <input type="number" name="Smrk1,5" id="0105A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0106A"><a href="html/wood/smrk/1,5st.html" target="_blank">Smrkové dřevo 1,5m štípané <br> (0106A)</a></label><br>
                                <label>Cena za kus: 270 Kč</label><br>
                                <input type="number" name="Smrk1,5st" id="0106A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0107A"><a href="html/wood/smrk/2.html" target="_blank">Smrkové dřevo 2m <br> (0107A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="Smrk2" id="0107A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0108A"><a href="html/wood/smrk/2,0.html" target="_blank">Smrkové dřevo 2,0m <br> (0108A)</a></label><br>
                                <label>Cena za kus: 260 Kč</label><br>
                                <input type="number" name="Smrk2,0" id="0108A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0109A"><a href="html/wood/smrk/2,5.html" target="_blank">Smrkové dřevo 2,5m <br> (0109A)</a></label><br>
                                <label>Cena za kus: 370 Kč</label><br>
                                <input type="number" name="Smrk2,5" id="0109A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0110A"><a href="html/wood/smrk/2,5st.html" target="_blank">Smrkové dřevo 2,5m štípané <br> (0110A)</a></label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="Smrk2,5st" id="0110A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0111A"><a href="html/wood/smrk/4.html" target="_blank">Smrkové dřevo 4m <br> (0111A)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="Smrk4" id="0111A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0112A"><a href="html/wood/smrk/4,0.html" target="_blank">Smrkové dřevo 4,0m <br> (0112A)</a></label><br>
                                <label>Cena za kus: 500 Kč</label><br>
                                <input type="number" name="Smrk4,0" id="0112A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0113A"><a href="html/wood/smrk/6.html" target="_blank">Smrkové dřevo 6m <br> (0113A)</a></label><br>
                                <label>Cena za kus: 310 Kč</label><br>
                                <input type="number" name="Smrk6" id="0113A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0114A"><a href="html/wood/smrk/12.html" target="_blank">Smrkové dřevo 12m <br> (0114A)</a></label><br>
                                <label>Cena za kus: - Kč</label><br>
                                <input type="number" name="Smrk12" id="0114A" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                            </div>

                            <input type="checkbox" id="smrkb" onclick="toggleInputs('smrkb', 'smrkb-inputs')"><label style="font-weight: bold;">Jakost B</label><br>

                            <div id="smrkb-inputs" class="hidden">
                                <label for="0101B"><a href="html/wood/smrk/0,5.html">Smrkové dřevo 0,5m <br> (0101B)</a></label><br>
                                <label>Cena za kus: 160 Kč</label><br>
                                <input type="number" name="product_0101B" id="0101B" min="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0102B"><a href="html/wood/smrk/0,5st.html">Smrkové dřevo 0,5m štípané <br> (0102B)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0102B" id="0102B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0103B"><a href="html/wood/smrk/1.html">Smrkové dřevo 1m <br> (0103B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0103B" id="0103B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0104B"><a href="html/wood/smrk/1st.html">Smrkové dřevo 1m štípané <br> (0104B)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0104B" id="0104B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0105B"><a href="html/wood/smrk/1,5st.html">Smrkové dřevo 1,5m <br> (0105B)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0105B" id="0105B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0106B"><a href="html/wood/smrk/1,5st.html">Smrkové dřevo 1,5m štípané <br> (0106B)</a></label><br>
                                <label>Cena za kus: 260 Kč</label><br>
                                <input type="number" name="product_0106B" id="0106B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0107B"><a href="html/wood/smrk/2.html">Smrkové dřevo 2m <br> (0107B)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0107B" id="0107B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0108B"><a href="html/wood/smrk/2,0.html">Smrkové dřevo 2,0m <br> (0108B)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0108B" id="0108B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0109B"><a href="html/wood/smrk/2,5.html">Smrkové dřevo 2,5m <br> (0109B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0109B" id="0109B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0110B"><a href="html/wood/smrk/2,5st.html">Smrkové dřevo 2,5m štípané <br> (0110B)</a></label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="product_0110B" id="0110B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0111B"><a href="html/wood/smrk/4.html">Smrkové dřevo 4m <br> (0111B)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0111B" id="0111B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0112B"><a href="html/wood/smrk/4,0.html">Smrkové dřevo 4,0m <br> (0112B)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0112B" id="0112B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0113B"><a href="html/wood/smrk/6.html">Smrkové dřevo 6m <br> (0113B)</a></label><br>
                                <label>Cena za kus: 300 Kč</label><br>
                                <input type="number" name="product_0113B" id="0113B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                                <label for="0114B"><a href="html/wood/smrk/12.html">Smrkové dřevo 12m <br> (0114B)</a></label><br>
                                <label>Cena za kus: - Kč</label><br>
                                <input type="number" name="product_0114B" id="0114B" min="0" value="0" oninput="calculateSubtotalSmrk()"><br>
                                <br>
                            </div>
                        </div>
                        <br><label for="subtotal">Mezisoučet (Kč):</label><br>
                        <input type="text" id="subtotal_smrk" value="0" readonly><br>
                    </div>

                    <div class="bor_form">
                        <input type="checkbox" id="bor" onclick="toggleInputs('bor', 'bor-inputs')"><label for=""><a href="html/wood/bor/bor.html" target="_blank">Borové dřevo</a></label><br>
                        <div id="bor-inputs" class="hidden">

                            <input type="checkbox" id="bora" onclick="toggleInputs('bora', 'bora-inputs')"><label style="font-weight: bold;">Jakost A</label><br>
                            <div id="bora-inputs" class="hidden">
                                <label for="0201A"><a href="html/wood/bor/0,5.html">Borové dřevo 0,5m <br> (0201A)</a></label><br>
                                <label>Cena za kus: 160 Kč</label><br>
                                <input type="number" name="product_0201A" id="0201A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0202A"><a href="html/wood/bor/0,5st.html">Borové dřevo 0,5m štípané <br> (0202A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0202A" id="0202A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0203A"><a href="html/wood/bor/1.html">Borové dřevo 1m <br> (0203A)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0203A" id="0203A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0204A"><a href="html/wood/bor/1st.html">Borové dřevo 1m štípané <br> (0204A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0204A" id="0204A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0205A"><a href="html/wood/bor/1,5.html">Borové dřevo 1,5m <br> (0205A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0205A" id="0205A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0206A"><a href="html/wood/bor/1,5st.html">Borové dřevo 1,5m štípané <br> (0206A)</a></label><br>
                                <label>Cena za kus: 260 Kč</label><br>
                                <input type="number" name="product_0206A" id="0206A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0207A"><a href="html/wood/bor/2.html">Borové dřevo 2m <br> (0207A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0207A" id="0207A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0208A"><a href="html/wood/bor/2st.html">Borové dřevo 2,5m <br> (0208A)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0208A" id="0208A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0209A"><a href="html/wood/bor/2,5.html">Borové dřevo 2,5m <br> (0209A)</a></label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="product_0209A" id="0209A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0210A"><a href="html/wood/bor/4.html">Borové dřevo 4m <br> (0210A)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0210A" id="0210A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0211A"><a href="html/wood/bor/6.html">Borové dřevo 6m <br> (0211A)</a></label><br>
                                <label>Cena za kus: 300 Kč</label><br>
                                <input type="number" name="product_0211A" id="0211A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0212A"><a href="html/wood/bor/12.html">Borové dřevo 12m <br> (0212A)</a></label><br>
                                <label>Cena za kus: - Kč</label><br>
                                <input type="number" name="product_0212A" id="0212A" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                            </div>

                            <input type="checkbox" id="borb" onclick="toggleInputs('borb', 'borb-inputs')"><label style="font-weight: bold;">Jakost B</label><br>
                            <div id="borb-inputs" class="hidden">
                                <label for="0201B"><a href="html/wood/bor/0,5.html">Borové dřevo 0,5m <br> (0201B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0201B" id="0201B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0202B"><a href="html/wood/bor/0,5st.html">Borové dřevo 0,5m štípané <br> (0202B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0202B" id="0202B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0203B"><a href="html/wood/bor/1.html">Borové dřevo 1m <br> (0203B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0203B" id="0203B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0204B"><a href="html/wood/bor/1st.html">Borové dřevo 1m štípané <br> (0204B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0204B" id="0204B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0205B"><a href="html/wood/bor/1,5.html">Borové dřevo 1,5m <br> (0205A)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0205B" id="0205B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0206B"><a href="html/wood/bor/1,5st.html">Borové dřevo 1,5m štípané <br> (0206B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0206B" id="0206B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0207B"><a href="html/wood/bor/2.html">Borové dřevo 2m <br> (0207B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0207B" id="0207B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0208B"><a href="html/wood/bor/2st.html">Borové dřevo 2m štípané <br> (0208B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0208B" id="0208B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0209B"><a href="html/wood/bor/2,5.html"></a>Borové dřevo 2,5m <br> (0209B)</label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="product_0209B" id="0209B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0210B"><a href="html/wood/bor/4.html">Borové dřevo 4m (0210B)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0210B" id="0210B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0211B"><a href="html/wood/bor/6.html">Borové dřevo 6m <br> (0211B)</a></label><br>
                                <label>Cena za kus: 300 Kč</label><br>
                                <input type="number" name="product_0211B" id="0211B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                                <label for="0212B"><a href="html/wood/bor/12.html">Borové dřevo 12m <br> (0212B)</a></label><br>
                                <label>Cena za kus: - Kč</label><br>
                                <input type="number" name="product_0212B" id="0212B" min="0" value="0" oninput="calculateSubtotalBor()"><br>
                                <br>
                            </div>

                        </div>
                        <br><label for="subtotal">Mezisoučet (Kč):</label><br>
                        <input type="text" id="subtotal_bor" value="0" readonly><br>
                    </div>

                    <div class="buk_form">
                        <input type="checkbox" id="buk" onclick="toggleInputs('buk', 'buk-inputs')"><label for=""><a href="html/wood/buk/buk.html" target="_blank">Bukové dřevo</a></label><br>
                        <div id="buk-inputs" class="hidden">

                            <input type="checkbox" id="buka" onclick="toggleInputs('buka', 'buka-inputs')"><label style="font-weight: bold;">Jakost A</label><br>
                            <div id="buka-inputs" class="hidden">

                                <label for="0301A"><a href="html/wood/buk/0,5.html">Bukové dřevo 0,5m <br> (0301A)</a></label><br>
                                <label>Cena za kus: 160 Kč</label><br>
                                <input type="number" name="product_0301A" id="0301A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0302A"><a href="html/wood/buk/0,5st.html">Bukové dřevo 0,5m štípané <br> (0302A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0302A" id="0302A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0303A"><a href="html/wood/buk/1.html">Bukové dřevo 1m <br> (0303A)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0303A" id="0303A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0304A"><a href="html/wood/buk/1st.html">Bukové dřevo 1m štípané <br> (0304A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0304A" id="0304A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0305A"><a href="html/wood/buk/1,5.html">Bukové dřevo 1,5m <br> (0305A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0305A" id="0305A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0306A"><a href="html/wood/buk/1,5st.html">Bukové dřevo 1,5m štípané <br> (0306A)</a></label><br>
                                <label>Cena za kus: 260 Kč</label><br>
                                <input type="number" name="product_0306A" id="0306A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0307A"><a href="html/wood/buk/2.html">Bukové dřevo 2m <br> (0307A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0307A" id="0307A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0308A"><a href="html/wood/buk/2st.html">Bukové dřevo 2m štípané <br> (0308A)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0308A" id="0308A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0309A"><a href="html/wood/buk/2,5.html">Bukové dřevo 2,5m <br> y(0309A)</a></label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="product_0309A" id="0309A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0310A"><a href="html/wood/buk/3.html">Bukové dřevo 3m <br>(0310A)</a></label><br>
                                <label>Cena za kus: 350 Kč</label><br>
                                <input type="number" name="product_0310A" id="0310A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0311A"><a href="html/wood/buk/4.html">Bukové dřevo 4m <br> (0311A)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0311A" id="0311A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0312A"><a href="html/wood/buk/6.html">Bukové dřevo 6m <br> (0312A)</a></label><br>
                                <label>Cena za kus: 300 Kč</label><br>
                                <input type="number" name="product_0312A" id="0312A" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                            </div>

                            <input type="checkbox" id="bukb" onclick="toggleInputs('bukb', 'bukb-inputs')"><label style="font-weight: bold;">Jakost B</label><br>
                            <div id="bukb-inputs" class="hidden">

                                <label for="0301B"><a href="html/wood/buk/0,5.html">Bukové dřevo 0,5m <br> (0301B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0301B" id="0301B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0302B"><a href="html/wood/buk/0,5st.html">Bukové dřevo 0,5m štípané <br> (0202B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0302B" id="0302B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0303B"><a href="html/wood/buk/1.html">Bukové dřevo 1m <br> (0303B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0303B" id="0303B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0304B"><a href="html/wood/buk/1st.html">Bukové dřevo 1m štípané <br> (0304B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0304B" id="0304B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0305B"><a href="html/wood/buk/1,5.html">Bukové dřevo 1,5m <br> (0305B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0305B" id="0305B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0306B"><a href="html/wood/buk/1,5st.html">Bukové dřevo 1,5m štípané <br> (0306B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0306B" id="0306B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0307B"><a href="html/wood/buk/2.html">Bukové dřevo 2m <br> (0307B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0307B" id="0307B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0308B"><a href="html/wood/buk/2st.html">Bukové dřevo 2m štípané <br> (0308B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0308B" id="0308B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0309B"><a href="html/wood/buk/2,5.html">Bukové dřevo 2,5m <br> (0309B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0309B" id="0309B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0310B"><a href="html/wood/buk/3.html">Bukové dřevo 3m <br> (0310B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0310B" id="0310B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0311B"><a href="html/wood/buk/4.html">Bukové dřevo 4m <br> (0311B)</a></label><br>
                                <label>Cena za kus: 240 Kč</label><br>
                                <input type="number" name="product_0311B" id="0311B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                                <br>
                                <label for="0312B"><a href="html/wood/buk/6.html">Bukové dřevo 6m <br> (0312B)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0312B" id="0312B" min="0" value="0" oninput="calculateSubtotalBuk()"><br>
                            </div><br>
                        </div>

                        <br><label for="subtotal">Mezisoučet (Kč):</label><br>
                        <input type="text" id="subtotal_buk" value="0" readonly><br>
                    </div>

                    <div class="dub_form">
                        <input type="checkbox" id="dub" onclick="toggleInputs('dub', 'dub-inputs')"><label for=""><a href="html/wood/dub/dub.html" target="_blank">Dubové dřevo</a></label><br>
                        <div id="dub-inputs" class="hidden">

                            <input type="checkbox" id="duba" onclick="toggleInputs('duba', 'duba-inputs')"><label style="font-weight: bold;">Jakost A</label><br>
                            <div id="duba-inputs" class="hidden">

                                <label for="0401A"><a href="html/wood/dub/0,5.html">Dubové dřevo 0,5m <br> (0401A)</a></label><br>
                                <label>Cena za kus: 160 Kč</label><br>
                                <input type="number" name="product_0401A" id="0401A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0402A"><a href="html/wood/dub/0,5st.html">Dubové dřevo 0,5m štípané <br> (0402A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0402A" id="0402A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0403A"><a href="html/wood/dub/1.html">Dubové dřevo 1m <br> (0403A)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0403A" id="0403A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0404A"><a href="html/wood/dub/1st.html">Dubové dřevo 1m štípané <br> (0404A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0404A" id="0404A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0405A"><a href="html/wood/dub/1,5.html">Dubové dřevo 1,5m <br> (0405A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0405A" id="0405A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0406A"><a href="html/wood/dub/1,5st.html">Dubové dřevo 1,5m štípané <br>(0406A)</a></label><br>
                                <label>Cena za kus: 260 Kč</label><br>
                                <input type="number" name="product_0406A" id="0406A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0407A"><a href="html/wood/dub/2.html">Dubové dřevo 2m <br> (0407A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0407A" id="0407A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0408A"><a href="html/wood/dub/2st.html">Dubové dřevo 2m štípané <br> (0408A)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0408A" id="0408A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0409A"><a href="html/wood/dub/2,5.html">Dubové dřevo 2,5m <br> (0409A)</a></label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="product_0409A" id="0409A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0410A"><a href="html/wood/dub/3.html">Dubové dřevo 3m <br> (0410A)</a></label><br>
                                <label>Cena za kus: 350 Kč</label><br>
                                <input type="number" name="product_0410A" id="0410A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0411A"><a href="html/wood/dub/4.html">Dubové dřevo 4m <br> (0411A)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0411A" id="0411A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0412A"><a href="html/wood/dub/6.html">Dubové dřevo 6m <br> (0412A)</a></label><br>
                                <label>Cena za kus: 300 Kč</label><br>
                                <input type="number" name="product_0412A" id="0412A" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                            </div>
                            <input type="checkbox" id="dubb" onclick="toggleInputs('dubb', 'dubb-inputs')"><label style="font-weight: bold;">Jakost B</label><br>
                            <div id="dubb-inputs" class="hidden">

                                <label for="0401B"><a href="html/wood/dub/0,5.html">Dubové dřevo 0,5m <br> (0401B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0401B" id="0401B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0402B"><a href="html/wood/dub/0,5st.html">Dubové dřevo 0,5m štípané <br> (0402B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0402B" id="0402B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0403B"><a href="html/wood/dub/1.html">Dubové dřevo 1m <br> (0403B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0403B" id="0403B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0404B"><a href="html/wood/dub/1st.html">Dubové dřevo 1m štípané <br> (0404B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0404B" id="0404B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0405B"><a href="html/wood/dub/1,5.html">Dubové dřevo 1,5m <br> (0405B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0405B" id="0405B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0406B"><a href="html/wood/dub/1,5st.html">Dubové dřevo 1,5m štípané <br> (0406B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0406B" id="0406B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0407B"><a href="html/wood/dub/2.html">Dubové dřevo 2m <br> (0407B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0407B" id="0407B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0408B"><a href="html/wood/dub/2st.html">Dubové dřevo 2m štípané <br> (0408B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0408B" id="0408B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0409B"><a href="html/wood/dub/2,5.html">Dubové dřevo 2,5m <br> (0409B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0409B" id="0409B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0410B"><a href="html/wood/dub/3.html">Dubové dřevo 3m <br> (0410B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0410B" id="0410B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0411B"><a href="html/wood/dub/4.html">Dubové dřevo 4m <br> (0411B)</a></label><br>
                                <label>Cena za kus: 240 Kč</label><br>
                                <input type="number" name="product_0411B" id="0411B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                                <label for="0412B"><a href="html/wood/dub/6.html">Dubové dřevo 6m <br> (0412B)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0412B" id="0412B" min="0" value="0" oninput="calculateSubtotalDub()"><br>
                                <br>
                            </div>
                        </div>
                        <br><label for="subtotal">Mezisoučet (Kč):</label><br>
                        <input type="text" id="subtotal_dub" value="0"><br>
                    </div>

                    <div class="topol_form">
                        <input type="checkbox" id="topol" onclick="toggleInputs('topol', 'topol-inputs')"><label for=""><a href="html/wood/topol/topol.html" target="_blank">Topolové dřevo</a></label><br>
                        <div id="topol-inputs" class="hidden">

                            <input type="checkbox" id="topola" onclick="toggleInputs('topola', 'topola-inputs')"><label style="font-weight: bold;">Jakost A</label><br>
                            <div id="topola-inputs" class="hidden">

                                <label for="0501A"><a href="html/wood/topol/0,5.html">Topolové dřevo 0,5m <br> (0501A)</a></label><br>
                                <label>Cena za kus: 160 Kč</label><br>
                                <input type="number" name="product_0501A" id="0501A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0502A"><a href="html/wood/topol/0,5st.html">Topolové dřevo 0,5m štípané <br> (0502A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0502A" id="0502A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0503A"><a href="html/wood/topol/1.html">Topolové dřevo 1m <br> (0503A)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0503A" id="0503A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0504A"><a href="html/wood/topol/1st.html">Topolové dřevo 1m štípané <br> (0504A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0504A" id="0504A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0505A"><a href="html/wood/topol/1,5.html">Topolové dřevo 1,5m <br> (0505A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0505A" id="0505A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0506A"><a href="html/wood/topol/1,5st.html">Topolové dřevo 1,5m štípané <br> (0506A)</a></label><br>
                                <label>Cena za kus: 260 Kč</label><br>
                                <input type="number" name="product_0506A" id="0506A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0507A"><a href="html/wood/topol/2.html">Topolové dřevo 2m <br> (0507A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0507A" id="0507A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0508A"><a href="html/wood/topol/2st.html">Topolové dřevo 2m štípané <br> (0508A)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0508A" id="0508A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0509A"><a href="html/wood/topol/2,5.html">Topolové dřevo 2,5m <br> (0509A)</a></label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="product_0509A" id="0509A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0510A"><a href="html/wood/topol/3.html">Topolové dřevo 3m <br> (0510A)</a></label><br>
                                <label>Cena za kus: 350 Kč</label><br>
                                <input type="number" name="product_0510A" id="0510A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0511A"><a href="html/wood/topol/4.html">Topolové dřevo 4m <br> (0511A)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0511A" id="0511A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0512A"><a href="html/wood/topol/6.html">Topolové dřevo 6m <br> (0512A)</a></label><br>
                                <label>Cena za kus: 300 Kč</label><br>
                                <input type="number" name="product_0512A" id="0512A" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                            </div>
                            <input type="checkbox" id="topolb" onclick="toggleInputs('topolb', 'topolb-inputs')"><label style="font-weight: bold;">Jakost B</label><br>
                            <div id="topolb-inputs" class="hidden">

                                <label for="0501B"><a href="html/wood/topol/0,5.html">Topolové dřevo 0,5m <br> (0501B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0501B" id="0501B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0502B"><a href="html/wood/topol/0,5st.html">Topolové dřevo 0,5m štípané <br> (0502B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0502B" id="0502B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0503B"><a href="html/wood/topol/1.html">Topolové dřevo 1m <br> (0503B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0503B" id="0503B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0504B"><a href="html/wood/topol/1st.html">Topolové dřevo 1m štípané <br> (0504B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0504B" id="0504B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0505B"><a href="html/wood/topol/1,5.html">Topolové dřevo 1,5m <br> (0505B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0505B" id="0505B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0506B"><a href="html/wood/topol/1,5st.html">Topolové dřevo 1,5m štípané <br> (0506B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0506B" id="0506B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0507B"><a href="html/wood/topol/2.html">Topolové dřevo 2m <br> (0507B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0507B" id="0507B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0508B"><a href="html/wood/topol/2st.html">Topolové dřevo 2m štípané <br> (0508B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0508B" id="0508B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0509B"><a href="html/wood/topol/2,5.html">Topolové dřevo 2,5m <br> (0509B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0509B" id="0509B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0510B"><a href="html/wood/topol/3.html">Topolové dřevo 3m <br> (0510B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0510B" id="0510B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0511B"><a href="html/wood/topol/4.html">Topolové dřevo 4m <br> (0511B)</a></label><br>
                                <label>Cena za kus: 240 Kč</label><br>
                                <input type="number" name="product_0511B" id="0511B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                                <label for="0512B"><a href="html/wood/topol/6.html"></a>Topolové dřevo 6m <br> (0512B)</label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0512B" id="0512B" min="0" value="0" oninput="calculateSubtotalTopol()"><br>
                                <br>
                            </div>
                        </div>
                        <br><label for="subtotal">Mezisoučet (Kč):</label><br>
                        <input type="text" id="subtotal_topol" value="0" readonly><br>
                    </div>

                    <div class="javor_form">
                        <input type="checkbox" id="javor" onclick="toggleInputs('javor', 'javor-inputs')"><label for=""><a href="html/wood/javor/javor.html" target="_blank">Javorové dřevo</a></label><br>
                        <div id="javor-inputs" class="hidden">

                            <input type="checkbox" id="javora" onclick="toggleInputs('javora', 'javora-inputs')"><label style="font-weight: bold;">Jakost A</label><br>
                            <div id="javora-inputs" class="hidden">

                                <label for="0601A"><a href="html/wood/javor/0,5.html">Javorové dřevo 0,5m <br> (0601A)</a></label><br>
                                <label>Cena za kus: 160 Kč</label><br>
                                <input type="number" name="product_0601A" id="0601A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0602A"><a href="html/wood/javor/0,5st.html">Javorové dřevo 0,5m štípané <br> (0602A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0602A" id="0602A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0603A"><a href="html/wood/javor/1.html">Javorové dřevo 1m <br> (0603A)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0603A" id="0603A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0604A"><a href="html/wood/javor/1st.html">Javorové dřevo 1m štípané <br> (0604A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0604A" id="0604A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0605A"><a href="html/wood/javor/1,5.html">Javorové dřevo 1,5m <br> (0605A)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0605A" id="0605A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0606A"><a href="html/wood/javor/1,5st.html">Javorové dřevo 1,5m štípané <br> (0606A)</a></label><br>
                                <label>Cena za kus: 260 Kč</label><br>
                                <input type="number" name="product_0606A" id="0606A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0607A"><a href="html/wood/javor/2.html">Javorové dřevo 2m <br> (0607A)</a></label><br>
                                <label>Cena za kus: 200 Kč</label><br>
                                <input type="number" name="product_0607A" id="0607A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0608A"><a href="html/wood/javor/2st.html">Javorové dřevo 2m štípané <br> (0608A)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0608A" id="0608A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0609A"><a href="html/wood/javor/2,5.html">Javorové dřevo 2,5m <br> (0609A)</a></label><br>
                                <label>Cena za kus: 360 Kč</label><br>
                                <input type="number" name="product_0609A" id="0609A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0610A"><a href="html/wood/javor/3.html">Javorové dřevo 3m <br> (0610A)</a></label><br>
                                <label>Cena za kus: 350 Kč</label><br>
                                <input type="number" name="product_0610A" id="0610A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0611A"><a href="html/wood/javor/4.html">Javorové dřevo 4m <br> (0611A)</a></label><br>
                                <label>Cena za kus: 340 Kč</label><br>
                                <input type="number" name="product_0611A" id="0611A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0612A"><a href="html/wood/javor/6.html">Javorové dřevo 6m <br> (0612A)</a></label><br>
                                <label>Cena za kus: 300 Kč</label><br>
                                <input type="number" name="product_0612A" id="0612A" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                            </div>
                            <input type="checkbox" id="javorb" onclick="toggleInputs('javorb', 'javorb-inputs')"><label style="font-weight: bold;">Jakost B</label><br>
                            <div id="javorb-inputs" class="hidden">

                                <label for="0601B"><a href="html/wood/javor/0,5.html">Javorové dřevo 0,5m <br> (0601B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0601B" id="0601B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0602B"><a href="html/wood/javor/0,5st.html">Javorové dřevo 0,5m štípané <br> (0602B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0602B" id="0602B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0603B"><a href="html/wood/javor/1.html">Javorové dřevo 1m <br> (0603B)</a></label><br>
                                <label>Cena za kus: 110 Kč</label><br>
                                <input type="number" name="product_0603B" id="0603B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0604B"><a href="html/wood/javor/1st.html">Javorové dřevo 1m štípané <br> (0604B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0604B" id="0604B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0605B"><a href="html/wood/javor/1,5.html">Javorové dřevo 1,5m <br> (0605B)</a></label><br>
                                <label>Cena za kus: 150 Kč</label><br>
                                <input type="number" name="product_0605B" id="0605B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0606B"><a href="html/wood/javor/1,5st.html">Javorové dřevo 1,5m štípané <br> (0606B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0606B" id="0606B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0607B"><a href="html/wood/javor/2.html">Javorové dřevo 2m <br> (0607B)</a></label><br>
                                <label>Cena za kus: 140 Kč</label><br>
                                <input type="number" name="product_0607B" id="0607B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0608B"><a href="html/wood/javor/2st.html">Javorové dřevo 2m štípané <br> (0608B)</a></label><br>
                                <label>Cena za kus: 180 Kč</label><br>
                                <input type="number" name="product_0608B" id="0608B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0609B"><a href="html/wood/javor/2,5.html">Javorové dřevo 2,5m <br> (0609B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0609B" id="0609B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0610B"><a href="html/wood/javor/3.html">Javorové dřevo 3m <br> (0610B)</a></label><br>
                                <label>Cena za kus: 250 Kč</label><br>
                                <input type="number" name="product_0610B" id="0610B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0611B"><a href="html/wood/javor/4.html">Javorové dřevo 4m <br> (0611B)</a></label><br>
                                <label>Cena za kus: 240 Kč</label><br>
                                <input type="number" name="product_0611B" id="0611B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                                <br>
                                <label for="0612B"><a href="html/wood/javor/6.html">Javorové dřevo 6m <br> (0612B)</a></label><br>
                                <label>Cena za kus: 210 Kč</label><br>
                                <input type="number" name="product_0612B" id="0612B" min="0" value="0" oninput="calculateSubtotalJavor()"><br>
                            </div><br>

                        </div>
                        <br><label for="subtotal">Mezisoučet (Kč):</label><br>
                        <input type="text" id="subtotal_javor" value="0" readonly><br>
                    </div>
                </div><br><br>
                <select name="dop" id="dop">
                    <option value="Osobni_vyzvednuti">Osobní odběr 0Kč (Domluva přes email)</option>
                    <option value="Zasilkovna">Zásilkovna 89Kč (Z-Box)</option>
                    <option value="Ceska_Posta">Česká Pošta 99Kč (domů)</option>
                </select><br><br>
                <input type="text" id="subtotal_dop" value="0 Kč" readonly hidden><br>
                <label for="total">Celková Cena</label><br>
                <input type="text" name="total" id="total" value="0" readonly><br><br>
                <input type="checkbox" required>
                <label for="gdpr"><a href="Other/GDPR.pdf" target="_blank">Souhlasím se zpracováním osobních údajů</a></label> <br><br>
                <input type="submit" value="Odeslat">
            </form>
        </div>
    </div>
</body>
<footer>
    <p>Created by <a href="https://www.knapf.eu">Filip Knap</a> with lot of ☕ and ❤️</p>
    <p>© 2025 Knap Filip Všechna práva vyhrazena.</p>
</footer>
<script src="Javascript/checkbox.js"></script>
<script src="Javascript/price.js"></script>
<script src="Javascript/ban.js"></script>

</html>
<?php
// Uzavření spojení s databází
$mysqli->close();
?>