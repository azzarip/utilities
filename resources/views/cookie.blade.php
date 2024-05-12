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
<div class="text-lg text-y text">
<h1 class="h1">Cookie Policy von Pizza Azzari</h1>
<p>Diese Cookie-Richtlinie erklärt, wie Pizza Azzari ("Unternehmen", "wir", "uns" und "unser") Cookies und ähnliche Technologien verwendet, um Sie zu erkennen,
wenn Sie unsere Website unter <a href="{{ Request::root() }}"
class="text-blue-500 underline">{{ Request::root() }}</a>
("Website") besuchen. Sie erklärt, was diese Technologien sind, warum wir sie verwenden, sowie Ihre Rechte zur Kontrolle unserer Nutzung.</p>

<p>In einigen Fällen können wir Cookies verwenden, um personenbezogene Informationen zu sammeln,
oder es werden personenbezogene Informationen, wenn wir sie mit anderen Informationen kombinieren.</p>

<h2 class="h2">Was sind Cookies?</h2>

<p>Cookies sind kleine Datendateien, die auf Ihrem Computer oder Mobilgerät platziert werden,
wenn Sie eine Website besuchen. Cookies werden von Website-Betreibern weit verbreitet eingesetzt,
um ihre Websites zu betreiben oder effizienter zu arbeiten, sowie um Berichtsinformationen bereitzustellen.
</p>

<p>Cookies, die vom Website-Betreiber (in diesem Fall Pizza Azzari) festgelegt werden,
    werden als "First-Party-Cookies" bezeichnet. Cookies, die von Parteien festgelegt werden, die nicht der Website-Betreiber sind,
    werden als "Third-Party-Cookies" bezeichnet. Third-Party-Cookies ermöglichen es, Funktionen oder Inhalte von Drittanbietern auf
    oder durch die Website bereitzustellen (z. B. Werbung, interaktiver Inhalt und Analytik).
    Die Parteien, die diese Third-Party-Cookies setzen, können Ihren Computer sowohl erkennen, wenn er die betreffende Website besucht,
    als auch, wenn er bestimmte andere Websites besucht.
</p>

<h2 class="h2">Warum verwenden wir Cookies?</h2>

<p>Wir verwenden First- und Third-Party-Cookies aus mehreren Gründen.
Einige Cookies sind aus technischen Gründen erforderlich, damit unsere Website funktioniert,
und wir bezeichnen diese als "essenzielle" oder "streng notwendige" Cookies.
Andere Cookies ermöglichen es uns auch, die Interessen unserer Benutzer zu verfolgen und zu zielen,
um die Erfahrung auf unseren Online-Eigenschaften zu verbessern.
Dritte setzen Cookies über unsere Website für Werbung, Analytik und andere Zwecke. Dies wird im Folgenden genauer beschrieben.
</p>

<h2 class="h2">Wie kann ich Cookies kontrollieren?</h2>

<p>Sie haben das Recht zu entscheiden, ob Sie Cookies akzeptieren oder ablehnen möchten.
    Sie können Ihre Cookie-Einstellungen im Cookie-Einwilligungsmanager festlegen.
    Der Cookie-Einwilligungsmanager ermöglicht es Ihnen, auszuwählen, welche Kategorien von Cookies Sie akzeptieren oder ablehnen.
    Essenzielle Cookies können nicht abgelehnt werden, da sie streng notwendig sind, um Ihnen Dienste zur Verfügung zu stellen.
</p>

<p>Der Cookie-Einwilligungsmanager befindet sich im Benachrichtigungsbanner und auf unserer Website.
Wenn Sie Cookies ablehnen, können Sie unsere Website weiterhin nutzen, obwohl Ihr Zugriff auf einige Funktionen und Bereiche unserer Website eingeschränkt sein kann.
Sie können auch Ihre Webbrowser-Steuerungen festlegen oder ändern, um Cookies zu akzeptieren oder abzulehnen.
</p>

<p>Die spezifischen Arten von First- und Third-Party-Cookies, die über unsere Website gesetzt werden, und die Zwecke, die sie erfüllen, sind in der nachfolgenden Tabelle beschrieben (bitte beachten Sie, dass die spezifischen Cookies, die bedient werden, je nach den spezifischen Online-Eigenschaften variieren können, die Sie besuchen):</p>

<h2 class="h2">Wie kann ich Cookies in meinem Browser kontrollieren?</h2>

<p>Da die Möglichkeiten, wie Sie Cookies über die Steuerelemente Ihres Webbrowsers ablehnen können, von Browser zu Browser variieren,
sollten Sie das Hilfe-Menü Ihres Browsers für weitere Informationen besuchen. Hier sind Informationen dazu,
wie Sie Cookies in den beliebtesten Browsern verwalten können: </p>

<ul>
    <li>Chrome</li>
    <li>Internet Explorer</li>
    <li>Firefox</li>
    <li>Safari</li>
    <li>Edge</li>
    <li>Opera</li>
</ul>
<p>Darüber hinaus bieten die meisten Werbenetzwerke Ihnen die Möglichkeit,
    sich von zielgerichteter Werbung abzumelden. Wenn Sie weitere Informationen erhalten möchten, besuchen Sie bitte:</p>

<ul>
    <li><a href="https://optout.aboutads.info/?lang=EN&c=2">Digital Advertising Alliance</a></li>
    <li><a href="https://www.youronlinechoices.com/ch-de/">European Interactive Digital Advertising Alliance</a></li>
</ul>

<p class="font-semibold">Was ist mit anderen Tracking-Technologien wie Web Beacons?</p>
<p>Cookies sind nicht der einzige Weg, um Besucher einer Website zu erkennen oder zu verfolgen.
     Wir können von Zeit zu Zeit auch andere ähnliche Technologien verwenden, wie z.B. Web Beacons (manchmal auch "Tracking-Pixel" oder "Clear GIFs" genannt). Dies sind winzige Grafikdateien, die einen eindeutigen Identifikator enthalten, der es uns ermöglicht zu erkennen, wann jemand unsere Website besucht hat oder eine E-Mail geöffnet hat, die sie enthält. Dies ermöglicht es uns zum Beispiel, die Verkehrswege von Benutzern von einer Seite innerhalb einer Website zur anderen zu überwachen, Cookies zu liefern oder mit ihnen zu kommunizieren, zu verstehen, ob Sie von einer Online-Werbung auf einer Website eines Drittanbieters auf die Website gekommen sind, die Leistung der Website zu verbessern und den Erfolg von E-Mail-Marketingkampagnen zu messen. In vielen Fällen sind diese Technologien auf Cookies angewiesen, um ordnungsgemäß zu funktionieren, und daher beeinträchtigt das Ablehnen von Cookies ihre Funktion.
</p>

<h2 class="h2">Verwenden Sie Flash-Cookies oder Local Shared Objects?</h2>

<p>Websites können auch sogenannte "Flash-Cookies" (auch bekannt als Local Shared Objects oder "LSOs") verwenden,
    um unter anderem Informationen über Ihre Nutzung unserer Dienste, Betrugsprävention und andere Website-Betrieb zu sammeln und zu speichern.</p>

<p>Wenn Sie nicht möchten, dass Flash-Cookies auf Ihrem Computer gespeichert werden, können Sie die Einstellungen Ihres Flash-Players anpassen,
    um die Speicherung von Flash-Cookies mithilfe der Tools im Website-Speichereinstellungen-Panel zu blockieren.
    Sie können auch Flash-Cookies steuern, indem Sie zum Globalen Speichereinstellungen-Panel gehen und den Anweisungen folgen
     (die Anweisungen enthalten können, wie z.B. vorhandene Flash-Cookies zu löschen (auf der Macromedia-Website als "Informationen" bezeichnet),
     wie man Flash-LSOs verhindert, dass sie ohne Ihre Zustimmung auf Ihrem Computer platziert werden, und (für Flash Player 8 und höher)
     wie man Flash-Cookies blockiert, die nicht vom Betreiber der Seite geliefert werden, auf der Sie sich gerade befinden).
</p>

<p>Bitte beachten Sie, dass das Festlegen des Flash-Players zur Einschränkung oder Begrenzung der Akzeptanz von
    Flash-Cookies die Funktionalität einiger Flash-Anwendungen, einschließlich möglicherweise Flash-Anwendungen,
    die im Zusammenhang mit unseren Diensten oder Online-Inhalten verwendet werden, reduzieren oder beeinträchtigen kann.</p>

<h2 class="h2">Bieten Sie zielgerichtete Werbung an?</h2>

<p>Dritte können Cookies auf Ihrem Computer oder Mobilgerät platzieren, um Werbung über unsere Website zu schalten.
    Diese Unternehmen können Informationen über Ihre Besuche auf dieser und anderen Websites verwenden, um relevante Anzeigen
     für Waren und Dienstleistungen anzuzeigen, die für Sie von Interesse sein könnten. Sie können auch Technologien einsetzen,
     die verwendet werden, um die Wirksamkeit von Anzeigen zu messen. Dies können sie tun, indem sie Cookies oder Web Beacons verwenden,
      um Informationen über Ihre Besuche auf dieser und anderen Websites zu sammeln, um relevante Anzeigen für Waren und Dienstleistungen
      von potenziellem Interesse für Sie anzuzeigen. Die im Rahmen dieses Prozesses gesammelten Informationen ermöglichen es uns oder ihnen nicht,
      Ihren Namen, Ihre Kontaktdaten oder andere Details, die Sie direkt identifizieren,
    zu identifizieren, es sei denn, Sie entscheiden sich dafür, diese anzugeben.</p>


<h2 class="h2">Wie oft werden Sie diese Cookie-Richtlinie aktualisieren?</h2>

<p>    Wir können diese Cookie-Richtlinie von Zeit zu Zeit aktualisieren, um beispielsweise
    Änderungen an den von uns verwendeten Cookies oder aus anderen betrieblichen, rechtlichen oder regulatorischen Gründen widerzuspiegeln.
    Bitte besuchen Sie daher regelmäßig diese Cookie-Richtlinie, um sich über unsere Verwendung von Cookies und verwandten Technologien zu informieren.</p>

<p>Das Datum in dieser Cookie-Richtlinie zeigt an, wann sie zuletzt aktualisiert wurde.</p>

<h2 class="h2">Wo kann ich weitere Informationen erhalten?</h2>

<p>    Wenn Sie Fragen zu unserer Verwendung von Cookies oder anderen Technologien haben, kontaktieren Sie uns bitte unter:</p>

    <div class="">
        <p>Pizza Azzari</p>
        <p>    Knüslistrasse 8</p>
        <p>Zürich, ZH 8004</p>
        <p>Schweiz</p>

    </div>
    <p class="mb-12">Aktualisiert am am 8. Februar 2024</p>
</div>
<div class="h-12"></div>
</div>
</main>
<div class="w-[calc(50%-384px)] max-lg:hidden"></div>
</div>
@endsection
