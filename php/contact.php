<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - GlowFlow</title>
    <link rel="stylesheet" href="../css/contact.css"> 
    <script src="script.js" defer></script> 
</head>
<body>
<?php include 'navbar.php'; ?>
<?php include 'pageup.php'; ?>


    <!-- Navigatie Menu -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Over Ons</a></li>
            <li><a href="product.php">Ons Product</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <!-- Contact Informatie -->
    <div class="contact-container">
        <h1>Contacteer Ons</h1>
        <p>Voor vragen of ondersteuning, neem gerust contact met ons op!</p>
        
        <!-- FAQ Sectie -->
        <div class="faq-container">
            <h2>Veelgestelde Vragen (FAQ)</h2>

            <?php 
            // FAQ-vragen en antwoorden array
            $faqs = [
                "Wat is GlowFlow en hoe werkt het systeem?" => "GlowFlow is een innovatief straatverlichtingssysteem dat werkt op basis van bewegingssensoren. Het activeert de verlichting alleen als er beweging wordt gedetecteerd, wat energie bespaart en lichtvervuiling vermindert.",
                "Hoeveel energie kan ik besparen met GlowFlow" => "Het systeem kan het energieverbruik met 70-90% verlagen, afhankelijk van de drukte en het aantal uren dat de verlichting normaal gesproken aan zou staan.",
                "Waarom zou ik GlowFlow kiezen in plaats van een standaard LED-verlichtingssysteem?" => "Hoewel LED-lampen energiezuinig zijn, blijven ze vaak onnodig aan. GlowFlow gaat een stap verder door de verlichting alleen aan te zetten bij daadwerkelijke beweging, wat nog meer energie bespaart.",
                "Kan GlowFlow worden geïnstalleerd op bestaande straatverlichting?" => "Ja, GlowFlow is ontworpen om compatibel te zijn met bestaande verlichtingsinfrastructuren, wat installatie eenvoudiger en kosteneffectiever maakt.",
                "Welke voordelen biedt GlowFlow op het gebied van duurzaamheid?" => "Door minder energie te verbruiken, draagt GlowFlow bij aan een lagere CO₂-uitstoot en een vermindering van lichtvervuiling. Dit bevordert de leefbaarheid en helpt gemeenten en bedrijven bij hun duurzaamheidsdoelen.",
                "Voor welke locaties is GlowFlow het meest geschikt?" => "GlowFlow is ideaal voor locaties met wisselende drukte, zoals woonwijken, fietspaden, parkeerterreinen en industrieterreinen waar het licht vaak onnodig blijft branden.",
                "Hoe verloopt het onderhoud van het GlowFlow-systeem?" => "Het systeem vereist minimaal onderhoud en biedt via het dashboard een overzicht van de onderhoudsstatus. Sensoren en lampen worden regelmatig gecontroleerd en kunnen gemakkelijk worden vervangen.",
                "Hoe kan ik de instellingen aanpassen, zoals gevoeligheid en tijdschema’s?" => "Via de GlowFlow-webapplicatie kan de beheerder de gevoeligheid van de bewegingssensoren en de tijdsinstellingen eenvoudig aanpassen. Dit kan op afstand via een beveiligd dashboard.",
                "Hoe veilig is het systeem tegen inbraak of hacking?" => "GlowFlow maakt gebruik van geavanceerde beveiligingsmaatregelen, zoals encryptie en authenticatie. Dit voorkomt ongeoorloofde toegang en beschermt de gegevens van het systeem.",
                "Is GlowFlow geschikt voor afgelegen of landelijke gebieden?" => "Ja, GlowFlow kan ook in minder drukbevolkte gebieden worden ingezet. De bewegingssensoren activeren verlichting wanneer dat nodig is, wat ideaal is voor locaties waar weinig verkeer is.",
                "Hoeveel kost de installatie en wat zijn de terugverdientijden?" => "De kosten variëren per locatie en schaalgrootte, maar dankzij de aanzienlijke energiebesparing verdient GlowFlow zichzelf meestal binnen enkele jaren terug.",
                "Zijn er subsidies beschikbaar voor de installatie van GlowFlow?" => "Verschillende overheden bieden subsidies voor energiebesparende projecten. Wij helpen graag bij het zoeken naar subsidiemogelijkheden voor de installatie van GlowFlow.",
                "Kan het systeem worden geïntegreerd met andere smart city-technologieën?" => "Ja, GlowFlow kan eenvoudig worden geïntegreerd in bredere smart city-platformen. De verzamelde gegevens kunnen ook worden gebruikt om andere stadsprocessen te optimaliseren.",
                "Wat gebeurt er als de sensor niet werkt of de verbinding wordt verbroken?" => "Als een sensor of verbinding tijdelijk uitvalt, schakelt GlowFlow over naar een vooraf ingesteld verlichtingsschema om te zorgen dat de verlichting in noodsituaties blijft werken.",
                "Hoe kan ik GlowFlow aanschaffen en implementeren?" => "Neem contact met ons op via het contactformulier op de website voor een consultatie. We helpen graag bij het plannen van een implementatiestrategie die het best bij uw locatie en doelen past."
            ];

            // Genereer de FAQ dropdowns
            foreach ($faqs as $question => $answer) {
                static $index = 0;
                echo "
                <div class='faq-item'>
                    <button class='faq-question' onclick='toggleAnswer($index)'>$question</button>
                    <div class='faq-answer' id='answer-$index'>
                        <p>$answer</p>
                    </div>
                </div>";
                $index++;
            }
            ?>
        </div>
    </div>

</body>
</html>
