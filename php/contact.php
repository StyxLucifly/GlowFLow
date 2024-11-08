<?php
    $activePage = 'Contact';
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/BulbIcon.png">
    <title>GlowFlow • Contact</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php include 'navbar.php'; ?>
<?php include 'pageup.php'; ?>

<div class="contact-form-section">
    <h2>Contactformulier</h2>
    <form action="verzend_formulier.php" method="post" class="contact-form">
        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" required placeholder="Uw e-mailadres" />

        <label for="phone">Telefoonnummer:</label>
        <input type="tel" id="phone" name="phone" required placeholder="Uw telefoonnummer" pattern="[0-9]{10}" title="Voer een geldig telefoonnummer van 10 cijfers in." />

        <label for="subject">Onderwerp:</label>
        <input type="text" id="subject" name="subject" required placeholder="Onderwerp van uw bericht" />

        <label for="message">Bericht (max 500 tekens):</label>
        <textarea id="message" name="message" rows="4" maxlength="500" placeholder="Uw bericht" required></textarea>

        <button type="submit">Verstuur</button>
    </form>
</div>

<div class="faq-section">
    <h2>FAQ</h2>

    <div class="faq-item">
        <input type="checkbox" id="faq1">
        <label class="faq-question" for="faq1">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Wat is GlowFlow en hoe werkt het systeem?
        </label>
        <div class="faq-answer">
            GlowFlow is een innovatief straatverlichtingssysteem dat werkt op basis van bewegingssensoren. Het activeert de verlichting alleen als er beweging wordt gedetecteerd, wat energie bespaart en lichtvervuiling vermindert.
        </div>
    </div>

    <div class="faq-item">
        <input type="checkbox" id="faq2">
        <label class="faq-question" for="faq2">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Hoeveel energie kan ik besparen met GlowFlow?
        </label>
        <div class="faq-answer">
            Het systeem kan het energieverbruik met 70-90% verlagen, afhankelijk van de drukte en het aantal uren dat de verlichting normaal gesproken aan zou staan.
        </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq3">
        <label class="faq-question" for="faq3">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Waarom zou ik GlowFlow kiezen in plaats van een standaard LED-verlichtingssysteem?
        </label>
        <div class="faq-answer">
        "Hoewel LED-lampen energiezuinig zijn, blijven ze vaak onnodig aan. GlowFlow gaat een stap verder door de verlichting alleen aan te zetten bij daadwerkelijke beweging, wat nog meer energie bespaart.
        </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq4">
        <label class="faq-question" for="faq4">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Kan GlowFlow worden geïnstalleerd op bestaande straatverlichting?
        </label>
        <div class="faq-answer">
        Ja, GlowFlow is ontworpen om compatibel te zijn met bestaande verlichtingsinfrastructuren, wat installatie eenvoudiger en kosteneffectiever maakt.
        </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq5">
        <label class="faq-question" for="faq5">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            
        Welke voordelen biedt GlowFlow op het gebied van duurzaamheid? 
        
        </label>
        <div class="faq-answer">
        Door minder energie te verbruiken, draagt GlowFlow bij aan een lagere CO₂-uitstoot en een vermindering van lichtvervuiling. Dit bevordert de leefbaarheid en helpt gemeenten en bedrijven bij hun duurzaamheidsdoelen.
        </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq6">
        <label class="faq-question" for="faq6">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Voor welke locaties is GlowFlow het meest geschikt? 

        </label>
        <div class="faq-answer">
        GlowFlow is ideaal voor locaties met wisselende drukte, zoals woonwijken, fietspaden, parkeerterreinen en industrieterreinen waar het licht vaak onnodig blijft branden.
        </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq7">
        <label class="faq-question" for="faq7">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Hoe verloopt het onderhoud van het GlowFlow-systeem?
        </label>
        <div class="faq-answer">
        Het systeem vereist minimaal onderhoud en biedt via het dashboard een overzicht van de onderhoudsstatus. Sensoren en lampen worden regelmatig gecontroleerd en kunnen gemakkelijk worden vervangen.
        </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq8">
        <label class="faq-question" for="faq8">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Hoe kan ik de instellingen aanpassen, zoals gevoeligheid en tijdschema’s?
        </label>
        <div class="faq-answer">
        Via de GlowFlow-webapplicatie kan de beheerder de gevoeligheid van de bewegingssensoren en de tijdsinstellingen eenvoudig aanpassen. Dit kan op afstand via een beveiligd dashboard.
    </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq9">
        <label class="faq-question" for="faq9">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Hoe veilig is het systeem tegen inbraak of hacking?
            </label>
        <div class="faq-answer">
        GlowFlow maakt gebruik van geavanceerde beveiligingsmaatregelen, zoals encryptie en authenticatie. Dit voorkomt ongeoorloofde toegang en beschermt de gegevens van het systeem.
            </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq10">
        <label class="faq-question" for="faq10">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Is GlowFlow geschikt voor afgelegen of landelijke gebieden? 
            </label>
        <div class="faq-answer">
        Ja, GlowFlow kan ook in minder drukbevolkte gebieden worden ingezet. De bewegingssensoren activeren verlichting wanneer dat nodig is, wat ideaal is voor locaties waar weinig verkeer is.        </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq11">
        <label class="faq-question" for="faq11">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Hoeveel kost de installatie en wat zijn de terugverdientijden?
        </label>
        <div class="faq-answer">
        De kosten variëren per locatie en schaalgrootte, maar dankzij de aanzienlijke energiebesparing verdient GlowFlow zichzelf meestal binnen enkele jaren terug.
            </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq12">
        <label class="faq-question" for="faq12">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Zijn er subsidies beschikbaar voor de installatie van GlowFlow?
            </label>
        <div class="faq-answer">
        Verschillende overheden bieden subsidies voor energiebesparende projecten. Wij helpen graag bij het zoeken naar subsidiemogelijkheden voor de installatie van GlowFlow.      
      </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq13">
        <label class="faq-question" for="faq13">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Kan het systeem worden geïntegreerd met andere smart city-technologieën?
        </label>
        <div class="faq-answer">
        Ja, GlowFlow kan eenvoudig worden geïntegreerd in bredere smart city-platformen. De verzamelde gegevens kunnen ook worden gebruikt om andere stadsprocessen te optimaliseren.     
       </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq14">
        <label class="faq-question" for="faq14">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Wat gebeurt er als de sensor niet werkt of de verbinding wordt verbroken?
            </label>
        <div class="faq-answer">
        Als een sensor of verbinding tijdelijk uitvalt, schakelt GlowFlow over naar een vooraf ingesteld verlichtingsschema om te zorgen dat de verlichting in noodsituaties blijft werken.
            </div>
    </div>
    <div class="faq-item">
        <input type="checkbox" id="faq15">
        <label class="faq-question" for="faq15">
            <img src="../img/arrowdownblue.png" class="faq-arrow" alt="arrow icon">
            Hoe kan ik GlowFlow aanschaffen en implementeren? 
            </label>
        <div class="faq-answer">
        Neem contact met ons op via het contactformulier op de website voor een consultatie. We helpen graag bij het plannen van een implementatiestrategie die het best bij uw locatie en doelen past.  
          </div>
    </div>
</div>

    <?php include 'footer.php'; ?>

</body>
</html>