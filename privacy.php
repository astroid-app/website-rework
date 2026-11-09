<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>💖 Astroid | Privacy</title>

  <link href="./src/styles/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link rel="stylesheet" href="./src/assets/overrides.css">
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <meta content="Privacy | 💖 Astroid" property="og:title" />
  <meta content="Your data? Find out how Astroid uses your data and how you can delete it." property="og:description"/>
  <meta content="https://astroid.cc/privacy" property="og:url" />
  <meta content="https://astroid.cc/src/assets/img/astroid_logo.png" property="og:image" />
  <meta content="#3D60FF" data-react-helmet="true" name="theme-color" />

  <?php include 'inc/head.php'; ?>
</head>

<body class="bg-gray-900">

<?php include 'inc/nav.php'; ?>

  <div class="relative isolate overflow-hidden bg-gray-900">
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)] animate-fade-down" aria-hidden="true">
      <defs>
        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M.5 200V.5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
        <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
    </svg>
    <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)] animate-fade animate-duration-[3000ms]" aria-hidden="true">
      <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#00AEFFFF] to-[ #0051FFFF] opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40 animate-fade">
      <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Privacy Policy</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">Datenschutzerklärung · Stand: 12. November 2026 · Last updated: 12 November 2026</p>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-6 py-10 text-white">

        <div class="mb-8 flex items-center gap-x-2">
            <a href="#de" data-lang-link="de" class="px-3 py-1 rounded-md text-sm font-medium border border-gray-700 text-white">Deutsch</a>
            <a href="#en" data-lang-link="en" class="px-3 py-1 rounded-md text-sm font-medium border border-gray-700 text-white">English</a>
            <span class="text-sm text-gray-400">Maßgeblich ist die deutsche Fassung. · The German version is binding.</span>
        </div>

        <!-- Deutsche Fassung (maßgeblich) -->
        <section id="de" lang="de" data-lang="de" class="privacy-section space-y-8">
            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">1. Verantwortlicher</h2>
                <p class="mt-4 text-gray-300">Verantwortlich für die Datenverarbeitung im Sinne der Datenschutz-Grundverordnung (DSGVO) ist:</p>
                <p class="mt-4 text-gray-300">Jason Herrmann<br>U6 17<br>68161 Mannheim<br>Deutschland<br>E-Mail: <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a></p>
                <p class="mt-4 text-gray-300">Weitere Angaben finden Sie in unserem <a href="/imprint" class="text-blue-500 underline">Impressum</a>. Einen Datenschutzbeauftragten haben wir nicht benannt, da hierzu keine gesetzliche Pflicht besteht. Für Fragen zum Datenschutz und zur Ausübung Ihrer Rechte schreiben Sie uns bitte an <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">2. Allgemeines</h2>
                <p class="mt-4 text-gray-300">Astroid ist ein kostenloses Open-Source-Projekt, das Kanäle auf den Plattformen Discord, Guilded, Nerimity und Revolt miteinander verbindet („Bridge“). Diese Datenschutzerklärung informiert Sie nach Art. 13 und 14 DSGVO darüber, welche personenbezogenen Daten wir beim Besuch unserer Website astroid.cc und bei der Nutzung des Bridge-Dienstes (Bots, API und Dashboard) verarbeiten.</p>
                <p class="mt-4 text-gray-300">Personenbezogene Daten sind alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person beziehen (Art. 4 Nr. 1 DSGVO). Dazu gehören auch Nutzer-IDs, Nutzernamen, Profilbilder, Nachrichteninhalte und IP-Adressen.</p>
                <p class="mt-4 text-gray-300">Wir setzen keine Analyse-, Tracking- oder Werbedienste ein, erstellen keine Nutzerprofile und verkaufen keine Daten. Der Quellcode von Astroid ist <a href="https://github.com/astroid-app" class="text-blue-500 underline">auf GitHub</a> öffentlich einsehbar, sodass Sie die hier beschriebene Verarbeitung nachvollziehen können.</p>
                <p class="mt-4 text-gray-300">Wir verarbeiten personenbezogene Daten auf folgenden Rechtsgrundlagen, die wir bei den einzelnen Verarbeitungen jeweils angeben:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>Art. 6 Abs. 1 lit. b DSGVO – Erfüllung des Nutzungsvertrags (<a href="/terms" class="text-blue-500 underline">Nutzungsbedingungen</a>)</li>
                    <li>Art. 6 Abs. 1 lit. c DSGVO – Erfüllung rechtlicher Verpflichtungen</li>
                    <li>Art. 6 Abs. 1 lit. f DSGVO – Wahrung berechtigter Interessen, sofern Ihre Interessen nicht überwiegen</li>
                    <li>§ 25 Abs. 2 Nr. 2 TDDDG – Speichern von Informationen auf Ihrem Endgerät, soweit dies für einen von Ihnen ausdrücklich gewünschten Dienst unbedingt erforderlich ist</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">3. Besuch unserer Website</h2>

                <h3 class="text-xl font-semibold text-white mt-6">3.1 Hosting und Server-Logfiles</h3>
                <p class="mt-4 text-gray-300">Unsere Website, die API, die Bots und die Datenbanken werden bei den Hosting-Anbietern <a href="https://datalix.eu" class="text-blue-500 underline">Datalix</a> und <a href="https://www.hetzner.com" class="text-blue-500 underline">Hetzner Online GmbH</a> betrieben. Beide Anbieter haben ihren Sitz in Deutschland und verarbeiten die Daten in unserem Auftrag (Art. 28 DSGVO).</p>
                <p class="mt-4 text-gray-300">Beim Aufruf unserer Website übermittelt Ihr Browser automatisch folgende Informationen, die in Server-Logfiles gespeichert werden:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>IP-Adresse</li>
                    <li>Datum und Uhrzeit des Zugriffs</li>
                    <li>aufgerufene Seite bzw. Datei</li>
                    <li>HTTP-Statuscode und übertragene Datenmenge</li>
                    <li>zuvor besuchte Seite (Referrer)</li>
                    <li>Browsertyp, Browserversion und Betriebssystem (User-Agent)</li>
                </ul>
                <p class="mt-4 text-gray-300">Wir verarbeiten diese Daten, um die Website auszuliefern, ihre Stabilität und Sicherheit zu gewährleisten und Angriffe abzuwehren. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO; unser berechtigtes Interesse liegt in einem sicheren und funktionsfähigen Betrieb. Die Logfiles werden nach spätestens 7 Tagen gelöscht. Länger speichern wir sie nur, wenn und solange dies zur Aufklärung eines konkreten Sicherheitsvorfalls erforderlich ist.</p>

                <h3 class="text-xl font-semibold text-white mt-6">3.2 Cloudflare</h3>
                <p class="mt-4 text-gray-300">Anfragen an unsere Website und unsere API (astroid.cc einschließlich Subdomains) werden über das Netzwerk der Cloudflare, Inc. (USA) geleitet. Cloudflare dient als Reverse-Proxy und Content-Delivery-Network und schützt unsere Dienste vor Angriffen und Überlastung. Dabei verarbeitet Cloudflare die zwischen Ihrem Gerät und unseren Servern übertragenen Daten, insbesondere Ihre IP-Adresse und die Inhalte der Anfragen. Cloudflare kann technisch notwendige Cookies (z. B. „__cf_bm“) setzen, um Menschen von automatisierten Zugriffen zu unterscheiden.</p>
                <p class="mt-4 text-gray-300">Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO; unser berechtigtes Interesse liegt in einer schnellen, sicheren und zuverlässigen Bereitstellung unserer Dienste. Das Setzen technisch notwendiger Cookies beruht auf § 25 Abs. 2 Nr. 2 TDDDG. Cloudflare ist als Auftragsverarbeiter für uns tätig. Die Übermittlung in die USA stützt sich auf die Zertifizierung von Cloudflare nach dem EU-US Data Privacy Framework (Angemessenheitsbeschluss der EU-Kommission, Art. 45 DSGVO) sowie ergänzend auf Standardvertragsklauseln (Art. 46 Abs. 2 lit. c DSGVO). Weitere Informationen finden Sie in der <a href="https://www.cloudflare.com/privacypolicy/" class="text-blue-500 underline">Datenschutzerklärung von Cloudflare</a>.</p>

                <h3 class="text-xl font-semibold text-white mt-6">3.3 Externe Inhalte</h3>
                <p class="mt-4 text-gray-300">Einige Bestandteile unserer Website werden von externen Servern geladen. Beim Aufruf der betreffenden Seiten baut Ihr Browser eine direkte Verbindung zu diesen Servern auf und übermittelt dabei insbesondere Ihre IP-Adresse, die Adresse der aufgerufenen Seite und Informationen über Ihren Browser:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>cdnjs.cloudflare.com (Cloudflare, Inc., USA): Symbolschriftart Font Awesome und Kompatibilitätsskripte (Polyfills)</li>
                    <li>cdn.jsdelivr.net (jsDelivr): Animationsbibliothek AnimXYZ</li>
                    <li>rsms.me: Schriftart „Inter“, bereitgestellt vom Entwickler der Schriftart</li>
                    <li>cdn.datalix.de (Datalix, Deutschland): Logo im Seitenfuß</li>
                    <li>api.thecatapi.com (TheCatAPI), nur auf der Einladungsseite: zufälliges Katzenbild</li>
                </ul>
                <p class="mt-4 text-gray-300">Die Server von Cloudflare, jsDelivr, rsms.me und TheCatAPI können sich außerhalb der EU bzw. des EWR befinden, insbesondere in den USA. In Ländern ohne Angemessenheitsbeschluss besteht das Risiko, dass Behörden auf die Daten zugreifen und Sie Ihre Rechte nur eingeschränkt durchsetzen können. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO; unser berechtigtes Interesse liegt in einer einheitlichen, ansprechenden Darstellung und schnellen Auslieferung unserer Website. Die Anbieter verarbeiten die Daten nach ihren eigenen Datenschutzbestimmungen.</p>

                <h3 class="text-xl font-semibold text-white mt-6">3.4 Dashboard</h3>
                <p class="mt-4 text-gray-300">Wenn Sie sich im Dashboard anmelden, werden Ihre Endpoint-ID, Ihr Zugangstoken und eine Kopie der Endpoint-Konfiguration im lokalen Speicher (localStorage) Ihres Browsers abgelegt. Diese Daten bleiben auf Ihrem Gerät und werden nur für Anfragen an unsere API verwendet, die Sie im Dashboard auslösen. Beim Abmelden werden Zugangstoken und Endpoint-ID entfernt; Sie können den lokalen Speicher außerdem jederzeit über die Einstellungen Ihres Browsers leeren. Rechtsgrundlage ist § 25 Abs. 2 Nr. 2 TDDDG, da die Speicherung für die von Ihnen gewünschte Nutzung des Dashboards unbedingt erforderlich ist, sowie Art. 6 Abs. 1 lit. b DSGVO.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">4. Bridge-Dienst (Bots und API)</h2>

                <h3 class="text-xl font-semibold text-white mt-6">4.1 Einrichtung und Konfiguration</h3>
                <p class="mt-4 text-gray-300">Wenn Serverbetreiber Astroid einrichten, legen wir einen „Endpoint“ an, der die verbundenen Server und Kanäle zusammenfasst. Dazu speichern wir:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>IDs der verbundenen Server und Kanäle auf Discord, Guilded, Nerimity und Revolt</li>
                    <li>Webhook-URLs der verbundenen Kanäle</li>
                    <li>Endpoint-ID und Zugangstoken</li>
                    <li>Einstellungen, z. B. Log-Kanäle, Emoji-Zuordnungen und Emoji-Filter</li>
                    <li>von Serverbetreibern hinterlegte Nutzer-IDs, z. B. in der Liste zugelassener IDs</li>
                    <li>manuell eingetragene Blacklist-Einträge (Wörter, Sätze, Links, Zahlen)</li>
                </ul>
                <p class="mt-4 text-gray-300">Zweck ist die Bereitstellung der Bridge. Rechtsgrundlage ist gegenüber den Serverbetreibern Art. 6 Abs. 1 lit. b DSGVO. Soweit Daten Dritter betroffen sind, etwa hinterlegte Nutzer-IDs, ist Rechtsgrundlage Art. 6 Abs. 1 lit. f DSGVO; das berechtigte Interesse liegt darin, die Bridge nach den Vorgaben der Serverbetreiber zu konfigurieren. Die Daten werden gespeichert, bis der Endpoint gelöscht wird.</p>
                <p class="mt-4 text-gray-300">Serverbetreiber können ihren Endpoint jederzeit mit dem Befehl <code class="bg-gray-800 text-white px-1 py-0.5 rounded">/delete</code> auf Discord, über die API oder per E-Mail an <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a> löschen. Dabei werden die Endpoint-Konfiguration und die Zugangstoken dauerhaft gelöscht (zu Sperrvermerken siehe Abschnitt 4.5).</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.2 Übertragung von Nachrichten</h3>
                <p class="mt-4 text-gray-300">Wenn jemand in einem überbrückten Kanal eine Nachricht schreibt, erhalten unsere Bots von der jeweiligen Plattform:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>den Inhalt der Nachricht (Text, Embeds, Emojis)</li>
                    <li>Anzeigename, Nutzer-ID und Profilbild-URL der verfassenden Person</li>
                    <li>bei Antworten: Inhalt und Verfasser der beantworteten Nachricht</li>
                    <li>Dateianhänge (siehe Abschnitt 4.3)</li>
                    <li>Plattform und Kanal, aus dem die Nachricht stammt</li>
                </ul>
                <p class="mt-4 text-gray-300">Astroid gleicht die Nachricht mit den vom Serverbetreiber eingerichteten Filtern ab und überträgt sie in die verbundenen Kanäle der anderen Plattformen, in der Regel über Webhooks. Dort erscheint sie mit dem Anzeigenamen und dem Profilbild der verfassenden Person.</p>
                <p class="mt-4 text-gray-300">Bis zur Zustellung wird die Nachricht in einer Warteschlange in unserer Datenbank zwischengespeichert. Sobald sie an alle verbundenen Plattformen übertragen wurde, wird sie gelöscht, im Normalfall innerhalb weniger Sekunden. Einen Nachrichtenverlauf speichern wir nicht. Ausnahmen bilden die Logfiles (Abschnitt 4.6) und Fehlerberichte (Abschnitt 4.7).</p>
                <p class="mt-4 text-gray-300">Die Daten stammen von der Plattform, auf der die Nachricht verfasst wurde (Art. 14 Abs. 2 lit. f DSGVO). Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO. Das berechtigte Interesse liegt darin, Communities plattformübergreifend zu verbinden: Die Serverbetreiber haben die Bridge eingerichtet, die Mitglieder können sich über Plattformgrenzen hinweg austauschen, und wir stellen hierfür den Dienst bereit. Welche Kanäle überbrückt werden, entscheiden allein die Serverbetreiber; sie sind verpflichtet, ihre Mitglieder darauf hinzuweisen.</p>
                <p class="mt-4 text-gray-300">Empfänger sind die verbundenen Plattformen sowie alle Personen, die die Zielkanäle lesen können. Die Plattformen speichern die übertragenen Nachrichten in eigener Verantwortung nach ihren eigenen Datenschutzbestimmungen. Möchten Sie eine bereits übertragene Nachricht entfernen, nutzen Sie bitte die Funktionen der jeweiligen Plattform oder wenden Sie sich an den Serverbetreiber, da wir selbst keine Kopie mehr vorhalten.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.3 Dateianhänge</h3>
                <p class="mt-4 text-gray-300">Dateianhänge bis 50 MB laden wir auf unseren Server herunter, speichern sie vorübergehend unter einer zufällig erzeugten ID und laden sie anschließend auf die verbundenen Plattformen hoch. Der ursprüngliche Dateiname wird dabei durch diese ID ersetzt. Zusätzlich speichern wir Metadaten (Dateityp, Größe, Zeitpunkt, Zielplattformen, Übertragungsstatus). Wir sehen uns die Dateien nicht an und verändern oder analysieren ihren Inhalt nicht.</p>
                <p class="mt-4 text-gray-300">Dateien und Metadaten werden gelöscht, sobald die Übertragung abgeschlossen ist. Dateien, die wegen eines Fehlers nicht übertragen oder gelöscht werden konnten, entfernt eine stündliche automatische Bereinigung. Rechtsgrundlage ist wie bei Nachrichten Art. 6 Abs. 1 lit. f DSGVO.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.4 Nutzung der API</h3>
                <p class="mt-4 text-gray-300">Bei Anfragen an unsere API, direkt oder über das Dashboard, verarbeiten wir die Endpoint-ID, das Zugangstoken, Ihre IP-Adresse sowie die Anfragedaten (Methode, Pfad, Zeitpunkt, übermittelte Inhalte). Zum Schutz vor Überlastung begrenzen wir die Zahl der Anfragen pro IP-Adresse. Die IP-Adresse wird dafür nur für die Dauer des Begrenzungszeitfensters (standardmäßig eine Sekunde) im Arbeitsspeicher gehalten; wird das Limit überschritten, werden IP-Adresse und Zeitpunkt protokolliert (Abschnitt 4.6). Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO und für die Missbrauchsabwehr Art. 6 Abs. 1 lit. f DSGVO.</p>
                <p class="mt-4 text-gray-300">Wer über die API Daten abruft oder überträgt, ist für deren weitere Verarbeitung selbst verantwortlich.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.5 Sperrungen</h3>
                <p class="mt-4 text-gray-300">Sperren wir einen Endpoint wegen eines Verstoßes gegen unsere Nutzungsbedingungen, speichern wir die Endpoint-ID, den Grund der Sperrung, das Teammitglied, das die Sperrung veranlasst hat, sowie Beginn und gegebenenfalls Ende der Sperrung. Zweck ist die Durchsetzung unserer Nutzungsbedingungen und der Schutz des Dienstes vor Missbrauch; Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO. Die Daten werden für die Dauer der Sperrung und anschließend sechs Monate gespeichert und danach gelöscht. Das gilt auch, wenn der Endpoint zwischenzeitlich gelöscht wird, damit Sperrungen nicht durch Löschen und Neuanlegen umgangen werden können.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.6 Logfiles des Dienstes</h3>
                <p class="mt-4 text-gray-300">Unsere API und unsere Bots schreiben Logfiles, um den Betrieb zu überwachen, Fehler zu beheben und Missbrauch zu erkennen. Die Logfiles enthalten Zeitpunkt und Art von Ereignissen, API-Anfragen (Methode und Pfad einschließlich Endpoint-IDs), IP-Adressen bei Überschreitung des Anfragelimits sowie Fehlermeldungen. Zur Fehleranalyse werden außerdem ausgehende Anfragen an die Plattformen in gekürzter Form protokolliert; dadurch können die Logfiles Nachrichteninhalte, Anzeigenamen und Nutzer-IDs enthalten.</p>
                <p class="mt-4 text-gray-300">Nur wir haben Zugriff auf die Logfiles. Sie werden nach spätestens 7 Tagen gelöscht. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO; unser berechtigtes Interesse liegt in einem stabilen und sicheren Betrieb.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.7 Fehlerüberwachung mit Sentry</h3>
                <p class="mt-4 text-gray-300">Zur Erkennung und Behebung von Fehlern sowie zur Leistungsüberwachung nutzen wir Sentry, einen Dienst der Functional Software, Inc. (USA). Tritt ein Fehler auf, übermitteln die API und die Bots einen Fehlerbericht mit Fehlermeldung, Stacktrace und technischem Kontext (z. B. beteiligte Funktionen und Variablen, Anfrage-URL und -Methode). Außerdem werden Leistungsdaten wie die Laufzeiten von Anfragen und Funktionen übermittelt. Fehlerberichte können personenbezogene Daten enthalten, die zum Zeitpunkt des Fehlers verarbeitet wurden, etwa Nutzer-IDs, Anzeigenamen oder Nachrichteninhalte.</p>
                <p class="mt-4 text-gray-300">Die Daten werden auf Servern von Sentry in den USA gespeichert und nach Ablauf der eingestellten Aufbewahrungsfrist, spätestens nach 90 Tagen, automatisch gelöscht. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO; unser berechtigtes Interesse liegt darin, Fehler schnell zu erkennen und zu beheben. Sentry ist als Auftragsverarbeiter für uns tätig. Die Übermittlung in die USA stützt sich auf die Zertifizierung nach dem EU-US Data Privacy Framework (Art. 45 DSGVO) sowie ergänzend auf Standardvertragsklauseln (Art. 46 Abs. 2 lit. c DSGVO). Weitere Informationen finden Sie in der <a href="https://sentry.io/privacy/" class="text-blue-500 underline">Datenschutzerklärung von Sentry</a>.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.8 Statistiken</h3>
                <p class="mt-4 text-gray-300">Auf unserer Website zeigen wir Statistiken wie die Gesamtzahl übertragener Nachrichten und die Zahl der Endpoints. Dafür speichern wir ausschließlich Zählerstände ohne Personenbezug.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">5. Kontaktaufnahme</h2>
                <p class="mt-4 text-gray-300">Wenn Sie uns per E-Mail oder über unsere Support-Server auf Discord oder Guilded kontaktieren, verarbeiten wir Ihre Angaben (z. B. Name oder Nutzername, E-Mail-Adresse, Inhalt Ihrer Anfrage), um Ihr Anliegen zu bearbeiten. Rechtsgrundlage ist Art. 6 Abs. 1 lit. b DSGVO, wenn Ihre Anfrage mit der Nutzung von Astroid zusammenhängt, ansonsten Art. 6 Abs. 1 lit. f DSGVO. Wir löschen die Daten, sobald Ihr Anliegen abschließend bearbeitet ist und keine gesetzlichen Aufbewahrungspflichten entgegenstehen. Auf den Support-Servern gelten zusätzlich die Datenschutzbestimmungen der jeweiligen Plattform.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">6. Empfänger</h2>
                <p class="mt-4 text-gray-300">Personenbezogene Daten geben wir nur weiter, soweit dies in dieser Datenschutzerklärung beschrieben ist:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>Datalix (Hosting, Auftragsverarbeiter, Deutschland)</li>
                    <li>Hetzner Online GmbH (Hosting, Auftragsverarbeiter, Deutschland)</li>
                    <li>Cloudflare, Inc. (Netzwerk und Sicherheit, Auftragsverarbeiter, USA)</li>
                    <li>Functional Software, Inc. – Sentry (Fehlerüberwachung, Auftragsverarbeiter, USA)</li>
                    <li>die verbundenen Plattformen Discord, Guilded, Nerimity und Revolt als eigenständige Verantwortliche sowie die Mitglieder der überbrückten Kanäle</li>
                    <li>Anbieter externer Inhalte auf unserer Website (Abschnitt 3.3)</li>
                    <li>Behörden und Gerichte, soweit wir gesetzlich dazu verpflichtet sind (Art. 6 Abs. 1 lit. c DSGVO)</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">7. Übermittlung in Drittländer</h2>
                <p class="mt-4 text-gray-300">Einige Empfänger haben ihren Sitz außerhalb der EU bzw. des EWR, insbesondere in den USA. Für Cloudflare und Sentry stützen wir die Übermittlung auf das EU-US Data Privacy Framework und ergänzend auf Standardvertragsklauseln (Abschnitte 3.2 und 4.7). Ob ein US-Unternehmen zertifiziert ist, können Sie unter <a href="https://www.dataprivacyframework.gov" class="text-blue-500 underline">dataprivacyframework.gov</a> prüfen.</p>
                <p class="mt-4 text-gray-300">Nachrichten übertragen wir an Plattformen mit Sitz in einem Drittland, weil dies für die Zustellung an die vom Serverbetreiber gewählte Plattform erforderlich ist. Die Übermittlung stützt sich auf einen Angemessenheitsbeschluss, sofern vorhanden (z. B. eine Zertifizierung der Plattform nach dem Data Privacy Framework), andernfalls auf Art. 49 Abs. 1 lit. c DSGVO (Erfüllung eines im Interesse der betroffenen Person mit dem Serverbetreiber geschlossenen Vertrags). Zu den Anbietern externer Inhalte siehe Abschnitt 3.3.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">8. Ihre Rechte</h2>
                <p class="mt-4 text-gray-300">Sie haben uns gegenüber folgende Rechte hinsichtlich Ihrer personenbezogenen Daten:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>Auskunft (Art. 15 DSGVO)</li>
                    <li>Berichtigung (Art. 16 DSGVO)</li>
                    <li>Löschung (Art. 17 DSGVO)</li>
                    <li>Einschränkung der Verarbeitung (Art. 18 DSGVO)</li>
                    <li>Datenübertragbarkeit (Art. 20 DSGVO)</li>
                    <li>Widerspruch gegen die Verarbeitung (Art. 21 DSGVO, siehe unten)</li>
                </ul>
                <p class="mt-4 text-gray-300">Zur Ausübung Ihrer Rechte genügt eine E-Mail an <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. Damit wir Ihre Anfrage zuordnen können, benötigen wir gegebenenfalls Ihre Nutzer-ID auf der jeweiligen Plattform oder die Endpoint-ID. Bitte beachten Sie, dass wir Nachrichten nach der Zustellung nicht mehr speichern; Auskunft über bereits übertragene Nachrichten und deren Löschung erhalten Sie bei der jeweiligen Plattform.</p>
                <p class="mt-4 text-gray-300">Sie haben außerdem das Recht, sich bei einer Datenschutz-Aufsichtsbehörde zu beschweren (Art. 77 DSGVO), insbesondere in dem Mitgliedstaat Ihres gewöhnlichen Aufenthalts, Ihres Arbeitsplatzes oder des mutmaßlichen Verstoßes. Für uns zuständig ist der <a href="https://datenschutz.sachsen-anhalt.de" class="text-blue-500 underline">Landesbeauftragte für den Datenschutz Sachsen-Anhalt</a>.</p>
                <div class="mt-4 p-6 rounded-lg border border-gray-700 bg-gray-800">
                    <h3 class="text-xl font-semibold text-white">Widerspruchsrecht nach Art. 21 DSGVO</h3>
                    <p class="mt-4 text-gray-300">Soweit wir Ihre Daten auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO verarbeiten, haben Sie das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, jederzeit gegen diese Verarbeitung Widerspruch einzulegen. Wir verarbeiten Ihre Daten dann nicht mehr, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die Ihre Interessen, Rechte und Freiheiten überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.</p>
                    <p class="mt-4 text-gray-300">Ihren Widerspruch können Sie formlos an <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a> richten. Wenn Sie nicht möchten, dass Ihre Nachrichten übertragen werden, können Sie außerdem davon absehen, in überbrückten Kanälen zu schreiben, oder sich an den Serverbetreiber wenden.</p>
                </div>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">9. Weitere Hinweise</h2>
                <p class="mt-4 text-gray-300"><strong>Bereitstellung der Daten:</strong> Die Bereitstellung Ihrer Daten ist weder gesetzlich noch vertraglich vorgeschrieben. Ohne die beschriebenen Daten können Sie Astroid jedoch nicht nutzen, und Nachrichten in überbrückten Kanälen können nicht übertragen werden.</p>
                <p class="mt-4 text-gray-300"><strong>Keine automatisierte Entscheidungsfindung:</strong> Eine automatisierte Entscheidungsfindung einschließlich Profiling im Sinne von Art. 22 DSGVO findet nicht statt. Die von Serverbetreibern eingerichteten Filter bewirken lediglich, dass betroffene Nachrichten nicht übertragen werden.</p>
                <p class="mt-4 text-gray-300"><strong>Datensicherheit:</strong> Die Verbindung zu unserer Website und unserer API ist per TLS (HTTPS) verschlüsselt. Endpoints sind durch Zugangstoken geschützt; bitte geben Sie Ihr Token nicht an Dritte weiter.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">10. Änderungen dieser Datenschutzerklärung</h2>
                <p class="mt-4 text-gray-300">Wir passen diese Datenschutzerklärung an, wenn sich unsere Datenverarbeitung oder die Rechtslage ändert. Es gilt die jeweils auf dieser Seite veröffentlichte Fassung. Über wesentliche Änderungen informieren wir zusätzlich vorab über unsere Support-Server.</p>
            </div>
        </section>

        <!-- English version (translation) -->
        <section id="en" lang="en" data-lang="en" class="privacy-section space-y-8 mt-10">
            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">1. Controller</h2>
                <p class="mt-4 text-gray-300">The controller responsible for data processing within the meaning of the General Data Protection Regulation (GDPR) is:</p>
                <p class="mt-4 text-gray-300">Jason Herrmann<br>U6 17<br>68161 Mannheim<br>Germany<br>Email: <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a></p>
                <p class="mt-4 text-gray-300">Further details can be found in our <a href="/imprint" class="text-blue-500 underline">imprint</a>. We have not appointed a data protection officer, as there is no legal obligation to do so. For questions about data protection and to exercise your rights, please email <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">2. General Information</h2>
                <p class="mt-4 text-gray-300">Astroid is a free open-source project that connects channels on Discord, Guilded, Nerimity and Revolt (a "bridge"). In accordance with Art. 13 and 14 GDPR, this privacy policy explains which personal data we process when you visit our website astroid.cc and when you use the bridge service (bots, API and dashboard).</p>
                <p class="mt-4 text-gray-300">Personal data is any information relating to an identified or identifiable natural person (Art. 4(1) GDPR). This includes user IDs, usernames, profile pictures, message content and IP addresses.</p>
                <p class="mt-4 text-gray-300">We do not use analytics, tracking or advertising services, we do not create user profiles and we do not sell data. Astroid's source code is publicly available <a href="https://github.com/astroid-app" class="text-blue-500 underline">on GitHub</a>, so you can verify the processing described here.</p>
                <p class="mt-4 text-gray-300">We process personal data on the following legal bases, which we state for each processing activity:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>Art. 6(1)(b) GDPR – performance of the user agreement (<a href="/terms" class="text-blue-500 underline">Terms of Service</a>)</li>
                    <li>Art. 6(1)(c) GDPR – compliance with legal obligations</li>
                    <li>Art. 6(1)(f) GDPR – legitimate interests, unless your interests override them</li>
                    <li>Section 25(2) no. 2 TDDDG (German Telecommunications Digital Services Data Protection Act) – storing information on your device where this is strictly necessary for a service you have explicitly requested</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">3. Visiting Our Website</h2>

                <h3 class="text-xl font-semibold text-white mt-6">3.1 Hosting and Server Log Files</h3>
                <p class="mt-4 text-gray-300">Our website, API, bots and databases are operated by the hosting providers <a href="https://datalix.eu" class="text-blue-500 underline">Datalix</a> and <a href="https://www.hetzner.com" class="text-blue-500 underline">Hetzner Online GmbH</a>. Both providers are based in Germany and process the data on our behalf (Art. 28 GDPR).</p>
                <p class="mt-4 text-gray-300">When you visit our website, your browser automatically transmits the following information, which is stored in server log files:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>IP address</li>
                    <li>date and time of access</li>
                    <li>requested page or file</li>
                    <li>HTTP status code and amount of data transferred</li>
                    <li>previously visited page (referrer)</li>
                    <li>browser type, browser version and operating system (user agent)</li>
                </ul>
                <p class="mt-4 text-gray-300">We process this data to deliver the website, to ensure its stability and security and to fend off attacks. The legal basis is Art. 6(1)(f) GDPR; our legitimate interest is the secure and functional operation of the website. Log files are deleted after 7 days at the latest. We only keep them longer if and as long as this is necessary to investigate a specific security incident.</p>

                <h3 class="text-xl font-semibold text-white mt-6">3.2 Cloudflare</h3>
                <p class="mt-4 text-gray-300">Requests to our website and API (astroid.cc including subdomains) are routed through the network of Cloudflare, Inc. (USA). Cloudflare acts as a reverse proxy and content delivery network and protects our services against attacks and overload. In doing so, Cloudflare processes the data transmitted between your device and our servers, in particular your IP address and the content of the requests. Cloudflare may set technically necessary cookies (e.g. "__cf_bm") to distinguish humans from automated access.</p>
                <p class="mt-4 text-gray-300">The legal basis is Art. 6(1)(f) GDPR; our legitimate interest is the fast, secure and reliable provision of our services. Technically necessary cookies are set on the basis of Section 25(2) no. 2 TDDDG. Cloudflare acts as our processor. Transfers to the USA are based on Cloudflare's certification under the EU-U.S. Data Privacy Framework (adequacy decision of the European Commission, Art. 45 GDPR) and additionally on standard contractual clauses (Art. 46(2)(c) GDPR). For more information, see <a href="https://www.cloudflare.com/privacypolicy/" class="text-blue-500 underline">Cloudflare's privacy policy</a>.</p>

                <h3 class="text-xl font-semibold text-white mt-6">3.3 External Content</h3>
                <p class="mt-4 text-gray-300">Some parts of our website are loaded from external servers. When you open the pages concerned, your browser connects directly to these servers and transmits in particular your IP address, the address of the page you are visiting and information about your browser:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>cdnjs.cloudflare.com (Cloudflare, Inc., USA): Font Awesome icon font and compatibility scripts (polyfills)</li>
                    <li>cdn.jsdelivr.net (jsDelivr): AnimXYZ animation library</li>
                    <li>rsms.me: "Inter" font, provided by the font's developer</li>
                    <li>cdn.datalix.de (Datalix, Germany): logo in the page footer</li>
                    <li>api.thecatapi.com (TheCatAPI), on the invite page only: random cat picture</li>
                </ul>
                <p class="mt-4 text-gray-300">The servers of Cloudflare, jsDelivr, rsms.me and TheCatAPI may be located outside the EU/EEA, in particular in the USA. In countries without an adequacy decision, there is a risk that authorities may access the data and that you can only enforce your rights to a limited extent. The legal basis is Art. 6(1)(f) GDPR; our legitimate interest is a consistent, appealing presentation and fast delivery of our website. The providers process the data in accordance with their own privacy policies.</p>

                <h3 class="text-xl font-semibold text-white mt-6">3.4 Dashboard</h3>
                <p class="mt-4 text-gray-300">When you log in to the dashboard, your endpoint ID, your access token and a copy of your endpoint configuration are saved in your browser's local storage (localStorage). This data stays on your device and is only used for API requests that you trigger in the dashboard. When you log out, the access token and endpoint ID are removed; you can also clear local storage at any time in your browser settings. The legal basis is Section 25(2) no. 2 TDDDG, as this storage is strictly necessary for the use of the dashboard you requested, and Art. 6(1)(b) GDPR.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">4. Bridge Service (Bots and API)</h2>

                <h3 class="text-xl font-semibold text-white mt-6">4.1 Setup and Configuration</h3>
                <p class="mt-4 text-gray-300">When server operators set up Astroid, we create an "endpoint" that groups the connected servers and channels. For this we store:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>IDs of the connected servers and channels on Discord, Guilded, Nerimity and Revolt</li>
                    <li>webhook URLs of the connected channels</li>
                    <li>endpoint ID and access tokens</li>
                    <li>settings, e.g. log channels, emoji mappings and emoji filtering</li>
                    <li>user IDs entered by server operators, e.g. in the list of allowed IDs</li>
                    <li>manually entered blacklist entries (words, sentences, links, numbers)</li>
                </ul>
                <p class="mt-4 text-gray-300">The purpose is to provide the bridge. With regard to server operators, the legal basis is Art. 6(1)(b) GDPR. Where data of third parties is concerned, such as user IDs entered by server operators, the legal basis is Art. 6(1)(f) GDPR; the legitimate interest is configuring the bridge as specified by the server operators. The data is stored until the endpoint is deleted.</p>
                <p class="mt-4 text-gray-300">Server operators can delete their endpoint at any time using the <code class="bg-gray-800 text-white px-1 py-0.5 rounded">/delete</code> command on Discord, via the API or by emailing <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. This permanently deletes the endpoint configuration and the access tokens (for suspension records, see section 4.5).</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.2 Transmission of Messages</h3>
                <p class="mt-4 text-gray-300">When someone writes a message in a bridged channel, our bots receive the following from the respective platform:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>the content of the message (text, embeds, emojis)</li>
                    <li>display name, user ID and profile picture URL of the author</li>
                    <li>for replies: content and author of the message being replied to</li>
                    <li>attachments (see section 4.3)</li>
                    <li>the platform and channel the message comes from</li>
                </ul>
                <p class="mt-4 text-gray-300">Astroid checks the message against the filters set up by the server operator and transmits it to the connected channels on the other platforms, usually via webhooks. There it appears with the author's display name and profile picture.</p>
                <p class="mt-4 text-gray-300">Until it is delivered, the message is held in a queue in our database. As soon as it has been transmitted to all connected platforms, it is deleted, normally within a few seconds. We do not keep a message history. The exceptions are log files (section 4.6) and error reports (section 4.7).</p>
                <p class="mt-4 text-gray-300">The data originates from the platform on which the message was written (Art. 14(2)(f) GDPR). The legal basis is Art. 6(1)(f) GDPR. The legitimate interest is connecting communities across platforms: the server operators have set up the bridge, members can talk to each other across platforms, and we provide the service for this. Only the server operators decide which channels are bridged, and they are obliged to inform their members about it.</p>
                <p class="mt-4 text-gray-300">Recipients are the connected platforms and everyone who can read the target channels. The platforms store the transmitted messages under their own responsibility and in accordance with their own privacy policies. If you want to remove a message that has already been transmitted, please use the functions of the respective platform or contact the server operator, as we no longer hold a copy.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.3 Attachments</h3>
                <p class="mt-4 text-gray-300">We download attachments of up to 50 MB to our server, store them temporarily under a randomly generated ID and then upload them to the connected platforms. The original file name is replaced by this ID. We also store metadata (file type, size, time, target platforms, transfer status). We do not look at the files, and we do not modify or analyse their content.</p>
                <p class="mt-4 text-gray-300">Files and metadata are deleted as soon as the transfer is complete. Files that could not be transferred or deleted due to an error are removed by an automatic hourly cleanup. As with messages, the legal basis is Art. 6(1)(f) GDPR.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.4 Use of the API</h3>
                <p class="mt-4 text-gray-300">For requests to our API, whether made directly or through the dashboard, we process the endpoint ID, the access token, your IP address and the request data (method, path, time, transmitted content). To protect against overload, we limit the number of requests per IP address. For this purpose, the IP address is only kept in memory for the duration of the rate limit window (one second by default); if the limit is exceeded, the IP address and time are logged (section 4.6). The legal basis is Art. 6(1)(b) GDPR and, for abuse prevention, Art. 6(1)(f) GDPR.</p>
                <p class="mt-4 text-gray-300">Anyone who retrieves or transmits data via the API is responsible for its further processing.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.5 Suspensions</h3>
                <p class="mt-4 text-gray-300">If we suspend an endpoint for violating our Terms of Service, we store the endpoint ID, the reason for the suspension, the team member who issued it, and the start and, where applicable, the end of the suspension. The purpose is to enforce our Terms of Service and to protect the service against abuse; the legal basis is Art. 6(1)(f) GDPR. The data is stored for the duration of the suspension and for six months afterwards, and is then deleted. This also applies if the endpoint is deleted in the meantime, so that suspensions cannot be circumvented by deleting and re-creating an endpoint.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.6 Service Log Files</h3>
                <p class="mt-4 text-gray-300">Our API and bots write log files to monitor operations, fix errors and detect abuse. The log files contain the time and type of events, API requests (method and path, including endpoint IDs), IP addresses when the rate limit is exceeded, and error messages. For troubleshooting, outgoing requests to the platforms are also logged in shortened form; as a result, the log files may contain message content, display names and user IDs.</p>
                <p class="mt-4 text-gray-300">Only we have access to the log files. They are deleted after 7 days at the latest. The legal basis is Art. 6(1)(f) GDPR; our legitimate interest is stable and secure operation.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.7 Error Monitoring with Sentry</h3>
                <p class="mt-4 text-gray-300">To detect and fix errors and to monitor performance, we use Sentry, a service of Functional Software, Inc. (USA). When an error occurs, the API and the bots send an error report containing the error message, stack trace and technical context (e.g. the functions and variables involved, request URL and method). Performance data, such as the duration of requests and functions, is also transmitted. Error reports may contain personal data that was being processed at the time of the error, such as user IDs, display names or message content.</p>
                <p class="mt-4 text-gray-300">The data is stored on Sentry's servers in the USA and is automatically deleted after the configured retention period, at the latest after 90 days. The legal basis is Art. 6(1)(f) GDPR; our legitimate interest is detecting and fixing errors quickly. Sentry acts as our processor. Transfers to the USA are based on the certification under the EU-U.S. Data Privacy Framework (Art. 45 GDPR) and additionally on standard contractual clauses (Art. 46(2)(c) GDPR). For more information, see <a href="https://sentry.io/privacy/" class="text-blue-500 underline">Sentry's privacy policy</a>.</p>

                <h3 class="text-xl font-semibold text-white mt-6">4.8 Statistics</h3>
                <p class="mt-4 text-gray-300">On our website we show statistics such as the total number of transmitted messages and the number of endpoints. For this we only store counters that do not relate to any person.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">5. Contacting Us</h2>
                <p class="mt-4 text-gray-300">If you contact us by email or on our support servers on Discord or Guilded, we process the information you provide (e.g. name or username, email address, content of your request) to handle your request. The legal basis is Art. 6(1)(b) GDPR if your request relates to the use of Astroid, otherwise Art. 6(1)(f) GDPR. We delete the data once your request has been fully dealt with, unless statutory retention obligations apply. On the support servers, the privacy policy of the respective platform also applies.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">6. Recipients</h2>
                <p class="mt-4 text-gray-300">We only share personal data as described in this privacy policy:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>Datalix (hosting, processor, Germany)</li>
                    <li>Hetzner Online GmbH (hosting, processor, Germany)</li>
                    <li>Cloudflare, Inc. (network and security, processor, USA)</li>
                    <li>Functional Software, Inc. – Sentry (error monitoring, processor, USA)</li>
                    <li>the connected platforms Discord, Guilded, Nerimity and Revolt as independent controllers, and the members of the bridged channels</li>
                    <li>providers of external content on our website (section 3.3)</li>
                    <li>authorities and courts, where we are legally obliged to do so (Art. 6(1)(c) GDPR)</li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">7. Transfers to Third Countries</h2>
                <p class="mt-4 text-gray-300">Some recipients are based outside the EU/EEA, in particular in the USA. For Cloudflare and Sentry, transfers are based on the EU-U.S. Data Privacy Framework and additionally on standard contractual clauses (sections 3.2 and 4.7). You can check whether a US company is certified at <a href="https://www.dataprivacyframework.gov" class="text-blue-500 underline">dataprivacyframework.gov</a>.</p>
                <p class="mt-4 text-gray-300">We transmit messages to platforms based in a third country because this is necessary to deliver them to the platform chosen by the server operator. The transfer is based on an adequacy decision where one exists (e.g. the platform's certification under the Data Privacy Framework), and otherwise on Art. 49(1)(c) GDPR (performance of a contract concluded with the server operator in the interest of the data subject). For providers of external content, see section 3.3.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">8. Your Rights</h2>
                <p class="mt-4 text-gray-300">You have the following rights regarding your personal data:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>access (Art. 15 GDPR)</li>
                    <li>rectification (Art. 16 GDPR)</li>
                    <li>erasure (Art. 17 GDPR)</li>
                    <li>restriction of processing (Art. 18 GDPR)</li>
                    <li>data portability (Art. 20 GDPR)</li>
                    <li>objection to processing (Art. 21 GDPR, see below)</li>
                </ul>
                <p class="mt-4 text-gray-300">To exercise your rights, simply email <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. To match your request, we may need your user ID on the respective platform or the endpoint ID. Please note that we no longer store messages after delivery; for access to or deletion of messages that have already been transmitted, please contact the respective platform.</p>
                <p class="mt-4 text-gray-300">You also have the right to lodge a complaint with a data protection supervisory authority (Art. 77 GDPR), in particular in the member state of your habitual residence, your place of work or the place of the alleged infringement. The authority responsible for us is the <a href="https://datenschutz.sachsen-anhalt.de" class="text-blue-500 underline">State Commissioner for Data Protection of Saxony-Anhalt</a> (Landesbeauftragter für den Datenschutz Sachsen-Anhalt).</p>
                <div class="mt-4 p-6 rounded-lg border border-gray-700 bg-gray-800">
                    <h3 class="text-xl font-semibold text-white">Right to object under Art. 21 GDPR</h3>
                    <p class="mt-4 text-gray-300">Where we process your data on the basis of Art. 6(1)(f) GDPR, you have the right to object to this processing at any time on grounds relating to your particular situation. We will then no longer process your data unless we can demonstrate compelling legitimate grounds for the processing which override your interests, rights and freedoms, or the processing serves the establishment, exercise or defence of legal claims.</p>
                    <p class="mt-4 text-gray-300">You can send your objection informally to <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. If you do not want your messages to be transmitted, you can also refrain from writing in bridged channels or contact the server operator.</p>
                </div>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">9. Further Information</h2>
                <p class="mt-4 text-gray-300"><strong>Provision of data:</strong> You are under no statutory or contractual obligation to provide your data. Without the data described, however, you cannot use Astroid, and messages in bridged channels cannot be transmitted.</p>
                <p class="mt-4 text-gray-300"><strong>No automated decision-making:</strong> We do not use automated decision-making, including profiling, within the meaning of Art. 22 GDPR. The filters set up by server operators only cause affected messages not to be transmitted.</p>
                <p class="mt-4 text-gray-300"><strong>Data security:</strong> Connections to our website and API are encrypted using TLS (HTTPS). Endpoints are protected by access tokens; please do not share your token with anyone.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">10. Changes to This Privacy Policy</h2>
                <p class="mt-4 text-gray-300">We update this privacy policy when our data processing or the legal situation changes. The version published on this page applies. We will also announce significant changes in advance on our support servers.</p>
            </div>
        </section>

  </div>



  <?php include 'inc/footer.php'; ?>
</body>
<?php include 'inc/scripts.php'; ?>
<script>
  const nav = document.querySelector('.nav');
window.addEventListener('scroll', fixNav);

function fixNav() {
  if (window.scrollY > nav.offsetHeight + 10) {
    nav.classList.add('active');
  } else {
    nav.classList.remove('active');
  }
}

var item = document.getElementsByClassName('item');

for (let i = 0; i < item.length; i++) {
  item[i].addEventListener('click', function(el) {

    el.currentTarget.classList.toggle('item--open');

    for (let i = 0; i < item.length; i++) {
      if (item[i] !== el.currentTarget && item[i].className === "item item--open") {
        item[i].classList.remove('item--open');
      }
    }
  });
};

  function toggleDropdown() {
    var dropdown = document.getElementById("dropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

// Language switch: #de / #en in the URL, otherwise the browser language
function showLanguage(lang) {
  document.documentElement.lang = lang;
  document.querySelectorAll('[data-lang]').forEach(function(section) {
    section.hidden = section.dataset.lang !== lang;
  });
  document.querySelectorAll('[data-lang-link]').forEach(function(link) {
    var active = link.dataset.langLink === lang;
    link.classList.toggle('bg-blue-600', active);
    link.setAttribute('aria-current', active ? 'true' : 'false');
  });
}

function preferredLanguage() {
  if (location.hash === '#de' || location.hash === '#en') {
    return location.hash.slice(1);
  }
  return (navigator.language || '').toLowerCase().startsWith('de') ? 'de' : 'en';
}

document.querySelectorAll('[data-lang-link]').forEach(function(link) {
  link.addEventListener('click', function(el) {
    el.preventDefault();
    history.replaceState(null, '', '#' + link.dataset.langLink);
    showLanguage(link.dataset.langLink);
  });
});

showLanguage(preferredLanguage());

</script>

</html>
