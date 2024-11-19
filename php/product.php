<?php
    $activePage = 'Product';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <title>GlowFlow • Product</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../java/main.js"></script>
    <style>
        .content { display: none; }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php include 'pageup.php'; ?>

    <video src="../img/video.mp4" class="videoProduct" autoplay muted loop></video>

    <div class="product-container">
        <h3>Bewegingssensoren</h3>
        <div>
            <p>De GlowFlow-lampen zijn uitgerust met geavanceerde tijdsgebonden bewegingssensoren. Deze sensoren detecteren beweging van voetgangers, fietsers en voertuigen binnen een bepaalde radius. Wanneer beweging wordt gedetecteerd, stuurt de sensor een signaal naar de LED-verlichting, die vervolgens inschakelt om de weg veilig te verlichten.</p>
        </div>

        <h3>Energiezuinige LED-Verlichting</h3>
        <div>
            <p>De verlichting in GlowFlow bestaat uit LED-lampen die niet alleen energiezuinig zijn, maar ook een langere levensduur hebben dan traditionele straatlampen. LED-verlichting verbruikt aanzienlijk minder stroom en is snel in en uit te schakelen, wat ideaal is voor een systeem dat gebaseerd is op beweging. Dankzij de combinatie van LED-verlichting en bewegingssensoren kan GlowFlow het energieverbruik met wel 90% verminderen in vergelijking met traditionele straatverlichting.</p>
        </div>

        <h3>Gedetailleerde beschrijving van de werking en voordelen</h3>
        <div>
            <p>GlowFlow is zo ontworpen dat de verlichting alleen actief is wanneer dat noodzakelijk is, wat resulteert in aanzienlijke energiebesparing en minder CO₂-uitstoot. Zodra een bewegingssensor activiteit detecteert, wordt het licht onmiddellijk ingeschakeld en blijft het aan zolang er beweging wordt geregistreerd. Na enkele seconden of minuten van inactiviteit schakelt de verlichting automatisch weer uit. Dit slimme systeem zorgt ervoor dat het energieverbruik beperkt blijft tot momenten waarop daadwerkelijk verlichting nodig is, zonder de veiligheid van weggebruikers in gevaar te brengen.</p>
        </div>

        <h3 >Voordelen van GlowFlow</h3>
        <div>
            <ul>
                <li><strong>Energiebesparing:</strong> Door het energieverbruik met wel 90% te verminderen, bespaart GlowFlow gemeenten en bedrijven aanzienlijk op hun energiekosten.</li>
                <li><strong>Duurzaamheid:</strong> Minder energiegebruik betekent een lagere CO₂-uitstoot, wat direct bijdraagt aan klimaatdoelen en een beter milieu.</li>
                <li><strong>Minder Lichtvervuiling:</strong>  Doordat de lampen alleen branden wanneer het nodig is, wordt de lichtvervuiling aanzienlijk verminderd, wat de natuur en het nachtelijke stadsbeeld ten goede komt.</li>
                <li><strong>Lange Levensduur en Lage Onderhoudskosten:</strong> De LED-verlichting en de robuuste sensoren zijn duurzaam en vergen weinig onderhoud, wat kostenbesparingen oplevert.</li>
            </ul>
        </div>

        <h2>Mogelijke Gebruiksscenario’s</h2>
        <div class="usage-scenarios">

            <div class="faq-item">
                <input type="checkbox" id="faq1" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq1">
                    <div class="Faq-QuestionContainer">
                        Voetgangers en Fietsers in Woonwijken:
                    </div>
                </label>
                <div id="faq1-content" class="faq-answer">
                    In rustige woonwijken detecteert GlowFlow beweging van voetgangers en fietsers, waardoor straatverlichting alleen brandt als iemand in de buurt is. Dit draagt bij aan de veiligheid zonder dat lampen de hele nacht door blijven branden.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq2" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq2">
                    <div class="Faq-QuestionContainer">
                        Parkeerterreinen:
                    </div>
                </label>
                <div id="faq2-content" class="faq-answer">
                    GlowFlow is ideaal voor parkeerterreinen waar lampen 's nachts vaak onnodig blijven branden. De sensoren activeren de verlichting enkel wanneer er voertuigen of mensen worden gedetecteerd.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq3" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq3">
                    <div class="Faq-QuestionContainer">
                        Drukke Stadsstraten:
                    </div>
                </label>
                <div id="faq3-content" class="faq-answer">
                    In stadscentra kunnen GlowFlow zo worden ingesteld dat ze tijdens piekuren continu branden en na middernacht, als er weinig verkeer is, enkel aangaan bij beweging. Dit bespaart energie en vermindert overbodige verlichting.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq4" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq4">
                    <div class="Faq-QuestionContainer">
                        Industrie- en Bedrijventerreinen:                   
                    </div>
                </label>
                <div id="faq4-content" class="faq-answer">
                    Op bedrijventerreinen waar 's nachts vaak weinig activiteit is, zorgt GlowFlow ervoor dat verlichting alleen aangaat wanneer voertuigen of medewerkers aanwezig zijn. Dit helpt om onnodige verlichting te voorkomen, wat energiebesparing oplevert en de veiligheid verhoogt door potentiële indringers af te schrikken.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq5" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq5">
                    <div class="Faq-QuestionContainer">
                        Schoolcampussen en Sportvelden:
                    </div>
                </label>
                <div id="faq5-content" class="faq-answer">
                    Op schoolcampussen en sportterreinen waar 's avonds geen activiteiten plaatsvinden, kan GlowFlow verlichting activeren bij aanwezigheid van studenten of sporters, wat veiligheid waarborgt zonder energie te verspillen.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq6" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq6">
                    <div class="Faq-QuestionContainer">
                        Openbare Parken:
                    </div>
                </label>
                <div id="faq6-content" class="faq-answer">
                    In parken en recreatiegebieden, waar het aantal bezoekers 's nachts laag is, zorgt GlowFlow ervoor dat lampen alleen oplichten bij de aanwezigheid van wandelaars of joggers. Dit creëert een veilige, aangename omgeving zonder onnodige lichtvervuiling.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq7" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq7">
                    <div class="Faq-QuestionContainer">
                        Bushaltes en Transportplekken:
                    </div>
                </label>
                <div id="faq7-content" class="faq-answer">
                    Bij bushaltes of treinstations activeert GlowFlow de verlichting wanneer passagiers wachten, wat zorgt voor een goed verlicht platform bij de komst van bussen of treinen, vooral op afgelegen haltes.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq8" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq8">
                    <div class="Faq-QuestionContainer">
                        Tunnels en Onderdoorgangen:
                    </div>
                </label>
                <div id="faq8-content" class="faq-answer">
                    In tunnels en onderdoorgangen kan GlowFlow verlichting activeren bij beweging, waardoor deze ruimtes veilig blijven zonder constante verlichting, wat energie en onderhoudskosten bespaart.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq9" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq9">
                    <div class="Faq-QuestionContainer">
                        Wandel- en Fietspaden in Natuurgebieden:
                    </div>
                </label>
                <div id="faq9-content" class="faq-answer">
                    Op wandel- en fietspaden in natuurgebieden verlicht GlowFlow alleen de paden waar wandelaars of fietsers zich bevinden, zonder de natuur onnodig te verstoren.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq10" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq10">
                    <div class="Faq-QuestionContainer">
                        Ziekenhuizen:
                    </div>
                </label>
                <div id="faq10-content" class="faq-answer">
                    Op zorgcampussen kan GlowFlow verlichting automatisch aanpassen op basis van activiteit, wat zorgt voor een veilige omgeving zonder overmatig energieverbruik.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq11" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq11">
                    <div class="Faq-QuestionContainer">
                        Evenemententerreinen:
                    </div>
                </label>
                <div id="faq11-content" class="faq-answer">
                    Op evenemententerreinen kan GlowFlow verlichting activeren tijdens gebruik en automatisch dimmen of uitschakelen buiten evenementtijden, wat energiekosten verlaagt en onnodige verlichting voorkomt.
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq12" class="faq-checkbox" onclick="toggleDropdown(this)">
                <label class="faq-question" for="faq12">
                    <div class="Faq-QuestionContainer">
                        Snelwegen:
                    </div>
                </label>
                <div id="faq12-content" class="faq-answer">
                    Op snelwegen en opritten kan GlowFlow verlichting activeren op basis van verkeersactiviteit in de nacht. Dit is vooral nuttig in afgelegen gebieden waar weinig verkeer is. Het systeem detecteert voertuigen en schakelt verlichting in, waarna de lichten weer worden gedimd zodra de voertuigen verder rijden.
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>

    <?php include 'footer.php'; ?>
</body>
</html>
