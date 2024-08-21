@extends('azzarip::base')

@section('body')
<div class="flex flex-row flex-1">
    <div class="w-[calc(50%-384px)] max-lg:hidden"></div>
    <main class="container flex-1 table text-xl">

<?php use Illuminate\Support\Facades\Request; ?>
<style>
    .text a {
        color:#3030F1;
    }
    .text ul {
        list-style-position: inside;
        list-style-type: disc;
    }
    .text ul > * + * {
        margin-top: 12px;
    }
</style>
<div class="text-lg text-y text mt-10">
<h1 class="h1">Privacy Policy von Pizza Azzari</h1>
<p class="mb-8">Diese Datenschutzerklärung für Pizza Azzari ("wir," "uns," oder "unser") beschreibt, wie und warum
            wir möglicherweise Ihre Informationen erfassen, speichern, verwenden und/oder teilen ("verarbeiten"), wenn Sie
            unsere Dienste ("Dienste") nutzen, wie zum Beispiel, wenn Sie:</p>

<ul class="pl-8 mb-8 list-disc">
    <li>Besuchen Sie unsere Website unter <a href="{{ Request::root() }}"
    class="text-blue-500 underline">{{ Request::root() }}</a> oder eine unserer Websites, die auf diese
    Datenschutzerklärung verlinken;</li>
    <li>Interagieren Sie auf andere Weise mit uns, einschließlich Verkäufen, Marketing oder Veranstaltungen.</li>
</ul>

<p class="mb-4">Fragen oder Bedenken? Durch das Lesen dieser Datenschutzerklärung werden Sie Ihre
Datenschutzrechte und -optionen verstehen. Wenn Sie nicht mit unseren Richtlinien und Praktiken einverstanden
sind, nutzen Sie bitte unsere Dienste nicht. Wenn Sie immer noch Fragen oder Bedenken haben, kontaktieren Sie
uns bitte unter <a href="mailto:marco.azzari@pizzazero.ch"
    class="text-blue-500 underline">marco.azzari@pizzazero.ch</a>.
</p>

<h2 class="h2">Zusammenfassung der wichtigsten Punkte</h2>

<p class="mb-4">Diese Zusammenfassung enthält die wichtigsten Punkte unserer Datenschutzerklärung. Weitere Details
    zu jedem dieser Themen finden Sie, indem Sie den Link nach jedem Schlüsselpunkt anklicken oder unser
    Inhaltsverzeichnis unten verwenden, um den Abschnitt zu finden, den Sie suchen.</p>

<ol class="pl-8 mb-8 space-y-4">
    <li><strong>Welche personenbezogenen Informationen verarbeiten wir?</strong> Wenn Sie unsere Dienste besuchen,
        nutzen oder navigieren, können wir personenbezogene Informationen verarbeiten, abhängig davon, wie Sie mit uns
        interagieren und mit den Diensten, die Entscheidungen, die Sie treffen, und die Produkte und Funktionen, die
        Sie nutzen. Erfahren Sie mehr über die personenbezogenen Informationen, die Sie uns offenlegen.</li>

    <li><strong>Verarbeiten wir sensible personenbezogene Informationen?</strong> Wir verarbeiten keine sensiblen
        personenbezogenen Informationen.</li>

    <li><strong>Erhalten wir Informationen von Dritten?</strong> Wir erhalten keine Informationen von Dritten.</li>

    <li><strong>Wie verarbeiten wir Ihre Informationen?</strong> Wir verarbeiten Ihre Informationen, um unsere
        Dienste bereitzustellen, zu verbessern und zu verwalten, um mit Ihnen zu kommunizieren, zur Sicherheit und
        Betrugsprävention und um gesetzliche Vorschriften einzuhalten. Wir können Ihre Informationen auch für andere
        Zwecke mit Ihrer Zustimmung verarbeiten. Wir verarbeiten Ihre Informationen nur, wenn wir einen gültigen
        rechtlichen Grund dafür haben. Erfahren Sie mehr darüber, wie wir Ihre Informationen verarbeiten.</li>

    <li><strong>In welchen Situationen und mit welchen Parteien teilen wir personenbezogene Informationen?</strong>
        Wir können Informationen in bestimmten Situationen und mit bestimmten Dritten teilen. Erfahren Sie mehr
        darüber, wann und mit wem wir Ihre personenbezogenen Informationen teilen.</li>

    <li><strong>Wie schützen wir Ihre Informationen?</strong> Wir haben organisatorische und technische Prozesse
        und Verfahren zum Schutz Ihrer personenbezogenen Informationen implementiert. Jedoch kann keine elektronische
        Übertragung über das Internet oder Informationsspeichertechnologie zu 100 % sicher sein, daher können wir
        nicht versprechen oder garantieren, dass Hacker, Cyberkriminelle oder andere unbefugte Dritte unsere
        Sicherheitsvorkehrungen nicht überwinden und Ihre Informationen unrechtmäßig sammeln, darauf zugreifen,
        stehlen oder ändern können. Erfahren Sie mehr darüber, wie wir Ihre Informationen schützen.</li>

    <li><strong>Was sind Ihre Rechte?</strong> Abhängig davon, wo Sie sich geografisch befinden, können die
        geltenden Datenschutzgesetze bedeuten, dass Sie bestimmte Rechte bezüglich Ihrer personenbezogenen
        Informationen haben. Erfahren Sie mehr über Ihre Datenschutzrechte.</li>

    <li><strong>Wie können Sie Ihre Rechte ausüben?</strong> Der einfachste Weg, Ihre Rechte auszuüben, besteht darin,
        einen Antrag auf Zugang zu personenbezogenen Daten zu stellen oder uns zu kontaktieren. Wir werden jeden
        Antrag gemäß den geltenden Datenschutzgesetzen prüfen und bearbeiten.</li>

    <li><strong>Möchten Sie mehr darüber erfahren, was wir mit den von uns erhobenen Informationen tun?</strong>
        Lesen Sie <a href="/privacy-policy#toc">die vollständige Datenschutzerklärung</a>.</li>
</ol>

<h2 class="mb-4 text-xl font-semibold" id="toc">Inhaltverzeichnis</h2>
<ol class="pl-8 mb-8 list-decimal">
    <li><a href="/privacy-policy#1">Welche Informationen erfassen wir?</a></li>
    <li><a href="/privacy-policy#2">Wie verarbeiten wir Ihre Informationen?</a></li>
    <li><a href="/privacy-policy#3">Auf welchen rechtlichen Grundlagen stützen wir uns, um Ihre persönlichen Informationen zu verarbeiten?</a></li>
    <li><a href="/privacy-policy#4">Wann und mit wem teilen wir Ihre persönlichen Informationen?</a></li>
    <li><a href="/privacy-policy#5">Verwenden wir Cookies und andere Tracking-Technologien?</a></li>
    <li><a href="/privacy-policy#6">Wie lange speichern wir Ihre Informationen?</a></li>
    <li><a href="/privacy-policy#7">Wie schützen wir Ihre Informationen?</a></li>
    <li><a href="/privacy-policy#8">Erheben wir Informationen von Minderjährigen?</a></li>
    <li><a href="/privacy-policy#9">Was sind Ihre Datenschutzrechte?</a></li>
    <li><a href="/privacy-policy#10">Steuerelemente für Nicht-Verfolgen-Funktionen</a></li>
    <li><a href="/privacy-policy#11">Machen wir Aktualisierungen dieser Erklärung?</a></li>
    <li><a href="/privacy-policy#12">Wie können Sie uns zu dieser Erklärung kontaktieren?</a></li>
    <li><a href="/privacy-policy#13">Wie können Sie die von uns erhobenen Daten überprüfen, aktualisieren oder löschen?</a></li>
</ol>

<h3 class="h2" id="1">Welche Informationen erfassen wir?</h3>
<p class="h3">Von Ihnen bereitgestellte persönliche Informationen</p>

<p>Wir sammeln persönliche Informationen, die Sie uns freiwillig zur Verfügung stellen, wenn Sie Interesse daran zeigen, Informationen über uns oder unsere Produkte und Dienstleistungen zu erhalten, wenn Sie an Aktivitäten auf den Diensten teilnehmen oder anderweitig Kontakt mit uns aufnehmen.</p>

<p>Von Ihnen bereitgestellte persönliche Informationen. Die persönlichen Informationen, die wir sammeln, hängen vom Kontext Ihrer Interaktionen mit uns und den Diensten, den von Ihnen getroffenen Entscheidungen sowie den von Ihnen verwendeten Produkten und Funktionen ab. Die von uns gesammelten persönlichen Informationen können Folgendes umfassen:</p>
<ul class="list-disc">
    <li>Namen</li>
    <li>Telefonnummern</li>
    <li>E-Mail-Adressen</li>
    <li>Postanschriften</li>
    <li>Kontaktpräferenzen</li>
</ul>
<p><strong>Empfindliche Informationen.</strong> Wir verarbeiten keine sensiblen Informationen.</p>

<p><strong>Zahlungsdaten.</strong> Wir können Daten erfassen, die zur Abwicklung Ihrer Zahlung erforderlich sind, wenn Sie Einkäufe tätigen, wie Ihre Zahlungsinstrumentennummer und den Sicherheitscode, der mit Ihrem Zahlungsinstrument verbunden ist. Alle Zahlungsdaten werden von Stripe gespeichert. Sie finden deren Datenschutz-Hinweis hier: <a href="https://stripe.com/en-ch/privacy">https://stripe.com/en-ch/privacy</a>.</p>

<p>Alle von Ihnen bereitgestellten persönlichen Informationen müssen wahr, vollständig und korrekt sein, und Sie müssen uns über etwaige Änderungen solcher persönlichen Informationen informieren.</p>

<h4 class="h3">Automatisch gesammelte Informationen</h4>

<p>Wir erfassen automatisch bestimmte Informationen, wenn Sie die Dienste besuchen, nutzen oder navigieren. Diese Informationen geben Ihre spezifische Identität nicht preis (wie Ihren Namen oder Ihre Kontaktdaten), können jedoch Geräte- und Nutzungsdaten wie Ihre IP-Adresse, Browser- und Gerätecharakteristika, Betriebssystem, Spracheinstellungen, Weiterleitungs-URLs, Gerätenamen, Land, Standortinformationen, Informationen darüber, wie und wann Sie unsere Dienste nutzen, und andere technische Informationen umfassen. Diese Informationen werden hauptsächlich zur Aufrechterhaltung der Sicherheit und Funktionsfähigkeit unserer Dienste sowie zu internen Analyse- und Berichtszwecken benötigt.</p>

<p>Wie viele Unternehmen erfassen wir auch Informationen über Cookies und ähnliche Technologien. Weitere Informationen dazu finden Sie in unserer Cookie-Policy: <a href="/cookie-policy">{{ Request::root() . '/cookie-policy' }}</a>.</p>

<p>Die von uns gesammelten Informationen umfassen:</p>
<ul>
    <li><strong> Protokoll- und Nutzungsdaten.</strong> Protokoll- und Nutzungsdaten sind dienstbezogene, diagnostische, Nutzungs- und Leistungsinformationen, die unsere Server automatisch erfassen, wenn Sie auf unsere Dienste zugreifen oder diese nutzen, und die wir in Protokolldateien aufzeichnen. Abhängig davon, wie Sie mit uns interagieren, können diese Protokolldaten Ihre IP-Adresse, Geräteinformationen, Browsertyp und -einstellungen sowie Informationen zu Ihrer Aktivität in den Diensten (wie die mit Ihrer Nutzung verbundenen Datum-/Uhrzeitstempel, angesehenen Seiten und Dateien, Suchanfragen und andere von Ihnen vorgenommene Aktionen wie verwendete Funktionen) sowie Geräteereignisinformationen (wie Systemaktivität, Fehlerberichte (manchmal "Absturzberichte" genannt) und Hardwareeinstellungen) umfassen.</li>
    <li><strong>Gerätedaten.</strong> Wir erfassen Gerätedaten wie Informationen zu Ihrem Computer, Telefon, Tablet oder anderen Geräten, die Sie zum Zugriff auf die Dienste verwenden. Abhängig vom verwendeten Gerät können diese Gerätedaten Informationen wie Ihre IP-Adresse (oder Proxyserver), Geräte- und Anwendungsidentifikationsnummern, Standort, Browsertyp, Hardwaremodell, Internetdienstanbieter und/oder Mobilfunkanbieter, Betriebssystem und Systemkonfigurationsinformationen umfassen.</li>
    <li><strong>Standortdaten.</strong> Wir erfassen Standortdaten wie Informationen zum Standort Ihres Geräts, die entweder genau oder ungenau sein können. Wie viele Informationen wir erfassen, hängt vom Typ und den Einstellungen des von Ihnen zur Nutzung der Dienste verwendeten Geräts ab. Zum Beispiel können wir GPS und andere Technologien verwenden, um Geolokalisierungsdaten zu erfassen, die uns Ihren aktuellen Standort mitteilen (basierend auf Ihrer IP-Adresse). Sie können sich dafür entscheiden, uns die Erfassung dieser Informationen zu untersagen, indem Sie den Zugriff auf die Informationen verweigern oder die Standorteinstellung auf Ihrem Gerät deaktivieren. Wenn Sie sich jedoch dafür entscheiden, dies zu unterlassen, können Sie möglicherweise bestimmte Aspekte der Dienste nicht nutzen.  </li>
</ul>

<h3 class="h2" id="2">Wie verarbeiten wir Ihre Informationen?</h3>

<p>Wir verarbeiten Ihre personenbezogenen Informationen aus verschiedenen Gründen, je nachdem, wie Sie mit unseren Diensten interagieren, einschließlich:</p>

<ul>
    <li>Um die Bereitstellung und Durchführung von Diensten für den Benutzer zu erleichtern. Wir können Ihre Informationen verarbeiten, um Ihnen den angeforderten Service bereitzustellen.</li>
    <li>Um auf Benutzeranfragen zu antworten/Unterstützung für Benutzer anzubieten. Wir können Ihre Informationen verarbeiten, um auf Ihre Anfragen zu antworten und eventuelle Probleme zu lösen, die Sie mit dem angeforderten Service haben könnten.</li>
    <li>Um Ihnen administrative Informationen zuzusenden. Wir können Ihre Informationen verarbeiten, um Ihnen Details zu unseren Produkten und Dienstleistungen, Änderungen unserer Geschäftsbedingungen und Richtlinien sowie ähnliche Informationen zuzusenden.</li>
    <li>Um Ihre Bestellungen zu erfüllen und zu verwalten. Wir können Ihre Informationen verarbeiten, um Ihre Bestellungen, Zahlungen, Rücksendungen und Umtäusche, die über die Dienste getätigt werden, zu erfüllen und zu verwalten.</li>
    <li>Um Feedback anzufordern. Wir können Ihre Informationen verarbeiten, wenn es erforderlich ist, um Feedback zu erbitten und Sie über Ihre Nutzung unserer Dienste zu kontaktieren.</li>
    <li>Um Ihnen Marketing- und Werbekommunikationen zuzusenden. Wir können die von Ihnen an uns gesendeten persönlichen Informationen für unsere Marketingzwecke verarbeiten, sofern dies Ihren Marketingpräferenzen entspricht. Sie können sich jederzeit von unseren Marketing-E-Mails abmelden. Weitere Informationen finden Sie unter <a href="/privacy-policy#9">Was sind Ihre Datenschutzrechte?</a> unten.</li>
    <li>Um Ihnen zielgerichtete Werbung zuzustellen. Wir können Ihre Informationen verarbeiten, um personalisierte Inhalte und Werbung zu entwickeln und anzuzeigen, die auf Ihre Interessen, Ihren Standort und mehr zugeschnitten sind. Weitere Informationen finden Sie in unserer Cookie-Policy: <a href="/cookie-policy">{{ Request::root() . '/cookie-policy' }}</a>.</li>
    <li>Um unsere Dienste zu schützen. Wir können Ihre Informationen im Rahmen unserer Bemühungen verarbeiten, unsere Dienste sicher und geschützt zu halten, einschließlich der Überwachung und Prävention von Betrug.</li>
    <li>Um Nutzungstrends zu identifizieren. Wir können Informationen darüber verarbeiten, wie Sie unsere Dienste nutzen, um besser zu verstehen, wie sie genutzt werden, damit wir sie verbessern können.</li>
    <li>Um die Wirksamkeit unserer Marketing- und Werbekampagnen zu bestimmen. Wir können Ihre Informationen verarbeiten, um besser zu verstehen, wie wir Marketing- und Werbekampagnen bereitstellen können, die für Sie am relevantesten sind.</li>
    <li>Um das Leben oder die lebenswichtigen Interessen einer Person zu retten oder zu schützen. Wir können Ihre Informationen verarbeiten, wenn dies erforderlich ist, um das Leben oder die lebenswichtigen Interessen einer Person zu retten oder zu schützen, beispielsweise um Schaden zu verhindern.</li>
</ul>


<h3 class="h2" id="3">Auf welchen rechtlichen Grundlagen stützen wir uns, um ihre persönlichen Informationen zu verarbeiten?</h3>

<p>Die Schweizer Datenschutzgesetz (DSG) verlangen von uns, die gültigen rechtlichen Grundlagen zu erklären, auf die wir uns stützen, um Ihre personenbezogenen Informationen zu verarbeiten. Daher können wir uns auf folgende rechtliche Grundlagen stützen, um Ihre personenbezogenen Informationen zu verarbeiten:</p>

<ul>
<li><strong>Zustimmung.</strong> Wir können Ihre Informationen verarbeiten, wenn Sie uns die Erlaubnis (d. h. Zustimmung) gegeben haben, Ihre liersonenbezogenen Informationen für einen bestimmten Zweck zu verwenden. Sie können Ihre Zustimmung jederzeit widerrufen. Erfahren Sie mehr über den Widerruf Ihrer Zustimmung.</li>

<li><strong>Vertragserfüllung.</strong> Wir können Ihre personenbezogenen Informationen verarbeiten, wenn wir glauben, dass es notwendig ist, um unsere vertraglichen Verpflichtungen Ihnen gegenüber zu erfüllen, einschließlich der Bereitstellung unserer Dienste oder auf Ihre Anfrage hin, bevor wir einen Vertrag mit Ihnen abschließen.</li>

<li><strong>Berechtigte Interessen.</strong> Wir können Ihre Informationen verarbeiten, wenn wir glauben, dass es vernünftigerweise notwendig ist, um unsere berechtigten Geschäftsinteressen zu erreichen, und diese Interessen nicht Ihre Interessen und grundlegenden Rechte und Freiheiten überwiegen. Zum Beispiel können wir Ihre personenbezogenen Informationen für einige der beschriebenen Zwecke verarbeiten, um:</li>
<ul class="ml-5">
<li>Benutzer über Sonderangebote und Rabatte auf unsere Produkte und Dienstleistungen zu informieren </li>
<li>Personalisierte und relevante Werbeinhalte für unsere Benutzer zu entwickeln und anzuzeigen </li>
<li>Analysieren, wie unsere Dienste genutzt werden, um sie zu verbessern und Benutzer zu gewinnen und zu halten </li>
<li>Unsere Marketingaktivitäten unterstützen </li>
<li>Probleme diagnostizieren und/oder betrügerische Aktivitäten verhindern</li>
<li>Verstehen, wie unsere Benutzer unsere Produkte und Dienstleistungen nutzen, um die Benutzererfahrung zu verbessern.</li>
</ul>

<li><strong>Gesetzliche Verpflichtungen.</strong> Wir können Ihre Informationen verarbeiten, wenn wir glauben, dass es notwendig ist, um unsere gesetzlichen Verpflichtungen zu erfüllen, wie z. B. um mit einer Strafverfolgungsbehörde oder einer Regulierungsbehörde zusammenzuarbeiten, unsere rechtlichen Rechte auszuüben oder zu verteidigen oder Ihre Informationen als Beweismittel in Rechtsstreitigkeiten offenzulegen, an denen wir beteiligt sind.</li>

<li><strong>Lebenswichtige Interessen.</strong> Wir können Ihre Informationen verarbeiten, wenn wir glauben, dass es notwendig ist, um Ihre lebenswichtigen Interessen oder die lebenswichtigen Interessen einer dritten Person zu schützen, wie z. B. Situationen, die potenzielle Bedrohungen für die Sicherheit einer Person beinhalten.</li>
</ul>

<h3 class="h2" id="4">Wann und mit wem teilen wir ihre Personenbezogenen daten?</h3>

<p><strong> Lieferanten, Berater und andere Drittanbieter.</strong> Wir können Ihre Daten mit Drittanbieter-Lieferanten, Dienstleistern, Auftragnehmern oder Agenten ("Dritte") teilen, die Dienstleistungen für uns oder in unserem Auftrag erbringen und Zugang zu solchen Informationen benötigen, um diese Arbeit zu erledigen.</p>
<p>Wir haben Verträge mit unseren Drittanbietern abgeschlossen, die dazu dienen sollen, Ihre personenbezogenen Daten zu schützen.</p>
<p>Das bedeutet, dass sie nichts mit Ihren personenbezogenen Daten tun können, es sei denn, wir haben sie angewiesen, dies zu tun. Sie werden Ihre personenbezogenen Daten auch nicht mit einer Organisation außer uns teilen. Sie verpflichten sich außerdem, die von uns in ihrem Auftrag gehaltenen Daten zu schützen und sie für den Zeitraum, den wir anweisen, aufzubewahren. Die Drittanbieter, mit denen wir personenbezogene Daten teilen können, sind wie folgt:</p>
<p><strong>Werbung, Direktmarketing und Lead-Generation</strong></p>
<p>Google AdSense und Facebook Audience Network</p>
<p><strong>Content Optimization</strong></p>
<p>Google Site Search</p>
<p><strong>Data Backup und Security</strong></p>
<p>Dropbox Backup</p>
<p><strong>Rechnungsstellung und Abrechnung</strong></p>
<p>Stripe</p>
<p><strong>Retargeting Platforms</strong></p>
<p>Google Ads Remarketing, LinkedIn Website Retargeting, Facebook Custom Audience, Facebook Remarketing und Google Analytics Remarketing</p>
<p><strong>Social Media Sharing und Werbung</strong></p>
<p>Facebook-Werbung und Facebook-Social-Plugins</p>
<p><strong>Web- und mobile Analytik</strong></p>
<p>Google Analytics und Google Tag Manager</p>
<p><strong>Website Hosting</strong></p>
<p>Digital Ocean</p>
<p><strong>User database</strong></p>
<p>Digital Ocean</p>

<p>Wir müssen Ihre personenbezogenen Daten auch in den folgenden Situationen teilen:</p>

<p><strong>Unternehmensübertragungen.</strong> Wir können Ihre Informationen im Zusammenhang mit, oder während Verhandlungen über, jede Fusion, den Verkauf von Unternehmensvermögen, Finanzierung oder Erwerb unseres gesamten Unternehmens oder eines Teils davon an ein anderes Unternehmen teilen oder übertragen.</p>
<p>Wenn wir Google Analytics verwenden. Wir können Ihre Informationen mit Google Analytics teilen, um die Nutzung der Dienste zu verfolgen und zu analysieren. Die von uns verwendeten Google Analytics-Werbedienste umfassen: Berichte zu Impressionen im Google Display-Netzwerk, Remarketing mit Google Analytics und Berichte zu Demografie und Interessen von Google Analytics. Um nicht von Google Analytics über die Dienste verfolgt zu werden, besuchen Sie <a href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a>.</p>
<p> Sie können die Google Analytics-Werbedienste über die Anzeigen-Einstellungen und die Anzeigen-Einstellungen für mobile Apps deaktivieren. Weitere Opt-out-Möglichkeiten sind <a href="http://optout.networkadvertising.org/">http://optout.networkadvertising.org/</a> und <a href="http://www.networkadvertising.org/mobile-choice">http://www.networkadvertising.org/mobile-choice</a>. Weitere Informationen zu den Datenschutzpraktiken von Google finden Sie auf der Google Datenschutz & Nutzungsbedingungen-Seite.</p>

<h3 class="h2" id="5">Verwenden wir Cookies und andere Tracking-Technologien?</h3>

<p>Wir können Cookies und ähnliche Tracking-Technologien (wie Web-Beacons und Pixel) verwenden, um auf Informationen zuzugreifen oder diese zu speichern. Spezifische Informationen darüber, wie wir solche Technologien verwenden und wie Sie bestimmte Cookies ablehnen können, finden Sie in unserem Cookie-Hinweis: <a href="/cookie-policy">{{ Request::root() . '/cookie-policy' }}</a>.</p>

<h3 class="h2" id="6">Wie lange behalten wir Ihre Informationen?</h3>

<p>Wir werden Ihre personenbezogenen Daten nur so lange aufbewahren, wie es für die in diesem Datenschutzhinweis festgelegten Zwecke erforderlich ist, es sei denn, eine längere Aufbewahrungsfrist ist gesetzlich vorgeschrieben oder zulässig (wie z. B. steuerliche, buchhalterische oder andere rechtliche Anforderungen).
</p>

<p>Wenn wir keinen laufenden legitimen geschäftlichen Grund haben, Ihre personenbezogenen Daten zu verarbeiten, werden wir entweder solche Informationen löschen oder anonymisieren, oder, falls dies nicht möglich ist (zum Beispiel, weil Ihre personenbezogenen Daten in Backup-Archiven gespeichert wurden), werden wir Ihre personenbezogenen Daten sicher aufbewahren und sie von jeder weiteren Verarbeitung isolieren, bis eine Löschung möglich ist.</p>

<h3 class="h2" id="7">Wie halten wir ihre Informationen sicher?</h3>

<p>Wir haben angemessene und vernünftige technische und organisatorische Sicherheitsmaßnahmen implementiert, die darauf abzielen, die Sicherheit aller personenbezogenen Daten, die wir verarbeiten, zu schützen. Trotz unserer Vorkehrungen und Bemühungen, Ihre Informationen zu sichern, kann jedoch keine elektronische Übertragung über das Internet oder Technologie zur Informationsaufbewahrung zu 100 % sicher garantiert werden. </p>

<p>Daher können wir nicht versprechen oder garantieren, dass Hacker, Cyberkriminelle oder andere nicht autorisierte Dritte unsere Sicherheitsvorkehrungen überwinden und Ihre Informationen nicht unbefugt sammeln, darauf zugreifen, stehlen oder ändern können. Obwohl wir unser Bestes tun werden, um Ihre personenbezogenen Daten zu schützen, erfolgt die Übertragung personenbezogener Daten zu und von unseren Diensten auf Ihr eigenes Risiko. Sie sollten nur innerhalb einer sicheren Umgebung auf die Dienste zugreifen.</p>


<h3 class="h2" id="8">Sammeln wir Informationen von Minderjährigen?</h3>

<p>Wir fordern wissentlich keine Daten von Kindern unter 18 Jahren an oder vermarkten nicht an sie. Durch die Nutzung der Dienste erklären Sie, dass Sie mindestens 18 Jahre alt sind oder dass Sie der Elternteil oder Erziehungsberechtigte eines solchen Minderjährigen sind und der Nutzung der Dienste durch diesen minderjährigen Abhängigen zustimmen.</p>
<p>Wenn wir feststellen, dass personenbezogene Daten von Nutzern unter 18 Jahren erhoben wurden, werden wir das Konto deaktivieren und angemessene Maßnahmen ergreifen, um solche Daten schnellstmöglich aus unseren Aufzeichnungen zu löschen. Wenn Sie sich bewusst werden, dass wir Daten von Kindern unter 18 Jahren erhoben haben könnten, kontaktieren Sie uns bitte unter pizza.azzari@gmail.com.</p>

<h3 class="h2" id="9">Was sind Ihre Datenschutzrechte?</h3>

<p>In einigen Regionen (wie der EWR, UK und der Schweiz) haben Sie bestimmte Rechte gemäß den geltenden Datenschutzgesetzen. Dazu gehören möglicherweise das Recht (i) auf Zugang und Erhalt einer Kopie Ihrer personenbezogenen Daten, (ii) auf Berichtigung oder Löschung; (iii) auf Einschränkung der Verarbeitung Ihrer personenbezogenen Daten; (iv) gegebenenfalls auf Datenübertragbarkeit; und (v) nicht Gegenstand einer automatisierten Entscheidungsfindung zu sein. In bestimmten Fällen haben Sie möglicherweise auch das Recht, der Verarbeitung Ihrer personenbezogenen Daten zu widersprechen. Sie können eine solche Anfrage stellen, indem Sie uns über die unten angegebenen Kontaktdaten im Abschnitt "<a href="/privacy-policy#12">Wie können Sie uns zu dieser Erklärung kontaktieren?</a>" kontaktieren.</p>

<p>Wir werden alle Anfragen gemäß den geltenden Datenschutzgesetzen prüfen und entsprechend handeln.</p>

<p>Wenn Sie sich im EWR oder UK befinden und der Ansicht sind, dass wir Ihre personenbezogenen Daten unrechtmäßig verarbeiten, haben Sie auch das Recht, sich an die Datenschutzbehörde Ihres Mitgliedstaates oder die Datenschutzbehörde des Vereinigten Königreichs zu wenden.</p>

<p>Wenn Sie sich in der Schweiz befinden, können Sie sich an den Eidgenössischen Datenschutz- und Öffentlichkeitsbeauftragten (EDÖB) wenden.</p>

<p><strong>Widerruf Ihrer Einwilligung</strong>: Wenn wir uns auf Ihre Einwilligung stützen, um Ihre personenbezogenen Daten zu verarbeiten, haben Sie das Recht, Ihre Einwilligung jederzeit zu widerrufen. Sie können Ihre Einwilligung jederzeit widerrufen, indem Sie uns über die unten angegebenen Kontaktdaten im Abschnitt "<a href="/privacy-policy#12">Wie können Sie uns zu dieser Erklärung kontaktieren?</a>" kontaktieren.
</p>
<p>Bitte beachten Sie jedoch, dass dies die Rechtmäßigkeit der Verarbeitung vor ihrem Widerruf nicht beeinträchtigt, ebenso wenig wie die Verarbeitung Ihrer personenbezogenen Daten, die auf anderen rechtmäßigen Verarbeitungsgründen als der Einwilligung beruht.
</p>

<p><strong>Abmeldung von Marketing- und Werbekommunikationen:</strong>
    Sie können sich jederzeit von unseren Marketing- und Werbekommunikationen abmelden, indem Sie auf den Abmelde-Link in den von uns gesendeten E-Mails klicken oder uns über die im Abschnitt "<a href="/privacy-policy#12">Wie können Sie uns zu dieser Erklärung kontaktieren?</a>" angegebenen Details kontaktieren. Sie werden dann von den Marketinglisten entfernt. Wir können jedoch weiterhin mit Ihnen kommunizieren — zum Beispiel, um Ihnen servicebezogene Nachrichten zu senden, die für die Verwaltung und Nutzung Ihres Kontos erforderlich sind, um auf Serviceanfragen zu antworten oder für andere nicht-marketingbezogene Zwecke.
</p>

<p><strong>Cookies und ähnliche Technologien:</strong>
    Sie können sich jederzeit von unseren Marketing- und Werbekommunikationen abmelden, indem Sie auf den Abmelde-Link in den von uns gesendeten E-Mails klicken oder uns über die im Abschnitt "<a href="/privacy-policy#12">Wie können Sie uns zu dieser Erklärung kontaktieren?</a>" angegebenen Details kontaktieren. Sie werden dann von den Marketinglisten entfernt. Wir können jedoch weiterhin mit Ihnen kommunizieren — zum Beispiel, um Ihnen servicebezogene Nachrichten zu senden, die für die Verwaltung und Nutzung Ihres Kontos erforderlich sind, um auf Serviceanfragen zu antworten oder für andere nicht-marketingbezogene Zwecke.
</p>
<p>
    Die meisten Webbrowser sind standardmäßig so eingestellt, dass sie Cookies akzeptieren. Wenn Sie möchten, können Sie in der Regel festlegen, dass Ihr Browser Cookies entfernt und Cookies ablehnt. Wenn Sie sich dafür entscheiden, Cookies zu entfernen oder abzulehnen, kann dies bestimmte Funktionen oder Dienste unserer Dienste beeinträchtigen. Weitere Informationen finden Sie in unserem Cookie-Hinweis:  <a href="/cookie-policy">{{ Request::root() . '/cookie-policy' }}</a>.
</p>
<p>
    Wenn Sie Fragen oder Kommentare zu Ihren Datenschutzrechten haben, können Sie uns eine E-Mail an pizza.azzari@gmail.com senden.
</p>

<h3 class="h2" id="10">Kontroller für Do-Not-Track Funktionen</h3>
<p>Die meisten Webbrowser und einige mobile Betriebssysteme und mobile Anwendungen enthalten eine Funktion oder Einstellung für "Do-Not-Track" ("DNT"), die Sie aktivieren können, um Ihre Datenschutzeinstellung zu signalisieren, dass keine Daten über Ihre Online-Browsing-Aktivitäten überwacht und gesammelt werden sollen. Derzeit wurde noch kein einheitlicher Technologiestandard für die Anerkennung und Umsetzung von DNT-Signalen finalisiert. Aus diesem Grund reagieren wir derzeit nicht auf DNT-Browser-Signale oder andere Mechanismen, die automatisch Ihre Wahl kommunizieren, online nicht verfolgt zu werden. Wenn in Zukunft ein Standard für Online-Tracking angenommen wird, dem wir folgen müssen, werden wir Sie über diese Praxis in einer überarbeiteten Version dieses Datenschutzhinweises informieren.
</p>

<h3 class="h2" id="11">Aktualisieren wir diese Erklärung?</h3>
<p>
    Wir können diesen Datenschutzhinweis von Zeit zu Zeit aktualisieren. Die aktualisierte Version wird durch ein aktualisiertes "Überarbeitet" -Datum angezeigt, und die aktualisierte Version wird wirksam, sobald sie zugänglich ist. Wenn wir wesentliche Änderungen an diesem Datenschutzhinweis vornehmen, können wir Sie entweder durch auffälliges Veröffentlichen einer Mitteilung über solche Änderungen oder durch direkte Zusendung einer Benachrichtigung informieren. Wir empfehlen Ihnen, diesen Datenschutzhinweis regelmäßig zu überprüfen, um darüber informiert zu sein, wie wir Ihre Informationen schützen.
</p>

<h3 class="h2" id="12">Wie können Sie uns zu dieser Erklärung kontaktieren?</h3>

<p>
    Wenn Sie Fragen oder Kommentare zu diesem Hinweis haben, können Sie sich an unseren Datenschutzbeauftragten (DPO), Paride Azzari, per E-Mail unter pizza.azzari@gmail.com, telefonisch unter +41787131882 oder per Post unter folgender Adresse wenden:
</p>

<p>Pizza Azzari</p>
<p>Paride Azzari</p>
<p>Knüslistrasse 8</p>
<p>8004, Zürich (CH)</p>

<h3 class="h2" id="13">Wie können Sie die von uns erhobenen Daten überprüfen, aktualisieren oder löschen?</h3>

<p>Basierend auf den geltenden Gesetzen Ihres Landes haben Sie möglicherweise das Recht, Zugang zu den personenbezogenen Daten zu verlangen, die wir von Ihnen erheben, diese Informationen zu ändern oder zu löschen. Um eine Überprüfung, Aktualisierung oder Löschung Ihrer personenbezogenen Daten zu beantragen, füllen Sie bitte ein Datenzugriffsanfrageformular aus und senden Sie es ein.</p>

    <p class="mb-4">aktualisiert am 30. Januar 2024</p>
</div>
</main>
<div class="w-[calc(50%-384px)] max-lg:hidden"></div>
</div>
@endsection
