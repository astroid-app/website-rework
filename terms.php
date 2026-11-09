<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>💖 Astroid | TOS</title>

    <link href="./src/styles/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="./src/assets/overrides.css">
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta content="Terms | 💖 Astroid" property="og:title" />
    <meta content="We've set up some terms and rules you need to follow to use Astroid." property="og:description"/>
    <meta content="https://astroid.cc/terms" property="og:url" />
    <meta content="https://astroid.cc/src/assets/img/astroid_logo.png" property="og:thumbnail" />
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
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Terms Of Service</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">Nutzungsbedingungen · gültig ab 16. November 2026 · effective as of 16 November 2026</p>
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
        <section id="de" lang="de" data-lang="de">
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">Willkommen bei Astroid!</h2>
                <p class="text-lg leading-7">Astroid ist ein kostenloses Open-Source-Projekt, das Kanäle auf Discord, Guilded, Nerimity und Revolt miteinander verbindet. Diese Nutzungsbedingungen regeln die Nutzung unseres Dienstes. Bitte lesen Sie sie sorgfältig, bevor Sie Astroid einrichten oder die API nutzen.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 1 Geltungsbereich und Anbieter</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Diese Nutzungsbedingungen gelten für die Nutzung von Astroid, bestehend aus den Bots für Discord, Guilded, Nerimity und Revolt, der öffentlichen REST-API, dem Dashboard und der Website astroid.cc (zusammen der „Dienst“).</p>
                    <p class="text-lg leading-7">(2) Anbieter des Dienstes ist Jason Herrmann, U6 17, 68161 Mannheim, Deutschland, E-Mail: <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a> („wir“). Weitere Angaben finden Sie im <a href="/imprint" class="text-blue-500 underline">Impressum</a>.</p>
                    <p class="text-lg leading-7">(3) Nutzer im Sinne dieser Bedingungen sind Personen, die Astroid auf einem Server einrichten oder verwalten („Serverbetreiber“), sowie Personen, die die API nutzen („Entwickler“).</p>
                    <p class="text-lg leading-7">(4) Abweichende Bedingungen von Nutzern gelten nicht, auch wenn wir ihnen nicht ausdrücklich widersprechen.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 2 Leistungen</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Astroid verbindet Kanäle auf verschiedenen Plattformen und überträgt die darin verfassten Nachrichten und Dateianhänge automatisiert in die jeweils verbundenen Kanäle („Bridge“).</p>
                    <p class="text-lg leading-7">(2) Der Dienst ist kostenlos. Wir stellen ihn im Rahmen unserer technischen und betrieblichen Möglichkeiten bereit. Ein Anspruch auf ununterbrochene oder fehlerfreie Verfügbarkeit besteht nicht; insbesondere Wartungsarbeiten, Störungen und Sicherheitsmaßnahmen können zu Unterbrechungen führen.</p>
                    <p class="text-lg leading-7">(3) Der Dienst ist auf die Schnittstellen der verbundenen Plattformen angewiesen. Diese können ihre Schnittstellen, Bedingungen oder Funktionen jederzeit ändern oder einschränken; hierauf haben wir keinen Einfluss.</p>
                    <p class="text-lg leading-7">(4) Wir dürfen den Dienst weiterentwickeln und einzelne Funktionen ändern, einschränken oder einstellen, wenn hierfür ein triftiger Grund besteht (z. B. technische Weiterentwicklung, Änderungen der Plattformen, rechtliche Anforderungen oder Sicherheitsgründe) und dies für die Nutzer unter Berücksichtigung ihrer Interessen zumutbar ist.</p>
                    <p class="text-lg leading-7">(5) Es gelten technische Grenzen, insbesondere eine maximale Dateigröße von 50 MB für Anhänge und eine Begrenzung der Anfragen an die API (Rate Limits).</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 3 Vertragsschluss und Voraussetzungen</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Der Nutzungsvertrag kommt zustande, wenn Sie Astroid einrichten, insbesondere einen Bot zu einem Server hinzufügen und einen Endpoint anlegen, oder wenn Sie die API nutzen.</p>
                    <p class="text-lg leading-7">(2) Sie müssen das nach den Bedingungen der jeweiligen Plattform erforderliche Mindestalter erreicht haben. Minderjährige benötigen die Zustimmung ihrer gesetzlichen Vertreter.</p>
                    <p class="text-lg leading-7">(3) Serverbetreiber dürfen Astroid nur auf Servern und in Kanälen einrichten, für die sie die erforderlichen Berechtigungen besitzen.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 4 Pflichten der Nutzer</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Sie dürfen den Dienst nur im Einklang mit dem geltenden Recht, diesen Nutzungsbedingungen und den Bedingungen der verbundenen Plattformen nutzen (<a href="https://discord.com/terms" class="text-blue-500 underline">Discord</a>, <a href="https://support.guilded.gg/hc/en-us/articles/360039728313-Terms-of-Use" class="text-blue-500 underline">Guilded</a>, <a href="https://nerimity.com/terms-and-conditions" class="text-blue-500 underline">Nerimity</a>, <a href="https://revolt.chat/terms" class="text-blue-500 underline">Revolt</a>).</p>
                    <p class="text-lg leading-7">(2) Untersagt ist insbesondere,</p>
                    <ul class="list-disc list-inside text-lg leading-7 space-y-2">
                        <li>rechtswidrige Inhalte zu verbreiten, etwa strafbare, jugendgefährdende oder die Rechte Dritter (z. B. Urheber-, Marken- oder Persönlichkeitsrechte) verletzende Inhalte,</li>
                        <li>Spam, Schadsoftware oder Phishing zu übertragen,</li>
                        <li>andere Personen zu belästigen, zu bedrohen oder gegen sie zu hetzen,</li>
                        <li>Fehler oder Sicherheitslücken des Dienstes auszunutzen, technische Begrenzungen oder Sperrungen zu umgehen oder sich unbefugt Zugang zu fremden Endpoints oder Systemen zu verschaffen,</li>
                        <li>den Dienst durch übermäßige oder automatisierte Anfragen zu überlasten oder seinen Betrieb anderweitig zu stören.</li>
                    </ul>
                    <p class="text-lg leading-7">(3) Serverbetreiber müssen die Mitglieder ihres Servers in geeigneter Weise (z. B. in der Kanalbeschreibung oder in den Serverregeln) darauf hinweisen, dass Nachrichten aus überbrückten Kanälen an andere Plattformen übertragen werden, und die überbrückten Kanäle angemessen moderieren.</p>
                    <p class="text-lg leading-7">(4) Zugangstoken sind geheim zu halten. Sie sind für Handlungen verantwortlich, die mit Ihrem Token vorgenommen werden, soweit Sie dies zu vertreten haben. Besteht der Verdacht, dass Unbefugte Ihr Token kennen, informieren Sie uns bitte unverzüglich.</p>
                    <p class="text-lg leading-7">(5) Wenn Sie einen Fehler oder eine Sicherheitslücke entdecken, melden Sie diese bitte an <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. Nutzen Sie die Lücke nicht über das zum Nachweis erforderliche Maß hinaus aus, greifen Sie nicht auf fremde Daten zu und veröffentlichen Sie die Lücke nicht, bevor wir angemessen Gelegenheit zur Behebung hatten.</p>
                    <p class="text-lg leading-7">(6) Entwickler, die über die API personenbezogene Daten abrufen oder übertragen, sind für die rechtmäßige Verarbeitung dieser Daten selbst verantwortlich.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 5 Inhalte</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Astroid überträgt Nachrichten und Dateien automatisiert und ohne inhaltliche Prüfung. Verantwortlich für Inhalte ist allein, wer sie verfasst oder versendet; wir machen uns übertragene Inhalte nicht zu eigen. Die Haftungsprivilegierung für die reine Durchleitung nach Art. 4 der Verordnung (EU) 2022/2065 (Digital Services Act) bleibt unberührt.</p>
                    <p class="text-lg leading-7">(2) Wer Dateien versendet, ist für deren Inhalt und deren Vereinbarkeit mit den Bedingungen der beteiligten Plattformen verantwortlich.</p>
                    <p class="text-lg leading-7">(3) Rechtswidrige Inhalte und Verstöße gegen diese Nutzungsbedingungen können Sie uns unter <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a> melden.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 6 Moderation und Maßnahmen</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Serverbetreiber können Filter einrichten (eine Blacklist für Wörter, Sätze, Links und Zahlen sowie einen Emoji-Filter). Nachrichten, die einen Filter auslösen, werden automatisch nicht übertragen. Die Filter legen ausschließlich die Serverbetreiber fest; wir prüfen keine Inhalte.</p>
                    <p class="text-lg leading-7">(2) Bei konkreten Anhaltspunkten für einen Verstoß gegen diese Nutzungsbedingungen, gegen geltendes Recht oder gegen die Bedingungen der verbundenen Plattformen können wir unter Berücksichtigung der berechtigten Interessen aller Beteiligten und der Schwere des Verstoßes folgende Maßnahmen ergreifen:</p>
                    <ul class="list-disc list-inside text-lg leading-7 space-y-2">
                        <li>Verwarnung,</li>
                        <li>vorübergehende oder dauerhafte Sperrung eines Endpoints,</li>
                        <li>Deaktivierung einzelner Funktionen, insbesondere der Übertragung von Dateianhängen,</li>
                        <li>Sperrung von Zugangstoken oder des API-Zugangs.</li>
                    </ul>
                    <p class="text-lg leading-7">(3) Über Maßnahmen nach Absatz 2 entscheidet ein Mitglied unseres Teams nach Prüfung des Einzelfalls. Wir informieren den betroffenen Serverbetreiber über die Maßnahme und ihre Gründe, soweit dies möglich und rechtlich zulässig ist.</p>
                    <p class="text-lg leading-7">(4) Gegen eine Maßnahme können Sie sich unter <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a> beschweren. Wir prüfen die Beschwerde und teilen Ihnen das Ergebnis mit. Ihr Recht, gerichtlichen Rechtsschutz in Anspruch zu nehmen, bleibt unberührt.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 7 Open-Source-Lizenz</h2>
                <p class="text-lg leading-7">Der Quellcode von Astroid steht unter der GNU Affero General Public License v3.0 (AGPL-3.0). Für die Nutzung, Veränderung und Weitergabe des Quellcodes gelten ausschließlich die Bestimmungen dieser Lizenz. Diese Nutzungsbedingungen gelten nur für den von uns betriebenen Dienst; für selbst betriebene Instanzen sind deren Betreiber verantwortlich.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 8 Datenschutz</h2>
                <p class="text-lg leading-7">Informationen zur Verarbeitung personenbezogener Daten finden Sie in unserer <a href="/privacy" class="text-blue-500 underline">Datenschutzerklärung</a>.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 9 Haftung</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Wir haften unbeschränkt bei Vorsatz und grober Fahrlässigkeit, bei Verletzung des Lebens, des Körpers oder der Gesundheit, nach dem Produkthaftungsgesetz, bei arglistigem Verschweigen eines Mangels sowie im Umfang einer übernommenen Garantie.</p>
                    <p class="text-lg leading-7">(2) Bei leichter Fahrlässigkeit haften wir nur für die Verletzung wesentlicher Vertragspflichten, also solcher Pflichten, deren Erfüllung die ordnungsgemäße Durchführung des Vertrags überhaupt erst ermöglicht und auf deren Einhaltung Sie regelmäßig vertrauen dürfen. In diesem Fall ist unsere Haftung auf den vorhersehbaren, vertragstypischen Schaden begrenzt.</p>
                    <p class="text-lg leading-7">(3) Im Übrigen ist unsere Haftung ausgeschlossen.</p>
                    <p class="text-lg leading-7">(4) Die vorstehenden Haftungsbeschränkungen gelten auch zugunsten unserer Mitwirkenden, Vertreter und Erfüllungsgehilfen.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 10 Freistellung</h2>
                <p class="text-lg leading-7">Sie stellen uns von Ansprüchen Dritter frei, die diese wegen eines von Ihnen zu vertretenden Verstoßes gegen diese Nutzungsbedingungen oder gegen geltendes Recht gegen uns geltend machen. Dies umfasst die angemessenen Kosten der Rechtsverteidigung.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 11 Laufzeit und Kündigung</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Der Nutzungsvertrag läuft auf unbestimmte Zeit.</p>
                    <p class="text-lg leading-7">(2) Sie können den Vertrag jederzeit ohne Einhaltung einer Frist beenden, indem Sie Ihren Endpoint löschen (z. B. mit dem Befehl <code class="bg-gray-800 text-white px-1 py-0.5 rounded">/delete</code> oder über die API) oder uns eine E-Mail an <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a> schreiben.</p>
                    <p class="text-lg leading-7">(3) Wir können den Vertrag mit einer Frist von zwei Wochen kündigen, insbesondere wenn wir den Dienst ganz oder teilweise einstellen.</p>
                    <p class="text-lg leading-7">(4) Das Recht beider Seiten zur außerordentlichen Kündigung aus wichtigem Grund bleibt unberührt. Ein wichtiger Grund liegt für uns insbesondere bei schwerwiegenden oder wiederholten Verstößen gegen § 4 vor.</p>
                    <p class="text-lg leading-7">(5) Nach Vertragsende werden Ihre Daten nach Maßgabe unserer <a href="/privacy" class="text-blue-500 underline">Datenschutzerklärung</a> gelöscht.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 12 Änderungen dieser Nutzungsbedingungen</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Wir können diese Nutzungsbedingungen ändern, wenn hierfür ein triftiger Grund besteht, insbesondere bei Änderungen der Rechtslage oder Rechtsprechung, technischen Weiterentwicklungen, Änderungen der verbundenen Plattformen oder neuen Funktionen, und die Änderung für Sie unter Berücksichtigung Ihrer Interessen zumutbar ist. Änderungen der wesentlichen Leistungen oder der Haftungsregelungen bedürfen Ihrer ausdrücklichen Zustimmung.</p>
                    <p class="text-lg leading-7">(2) Wir kündigen Änderungen mindestens vier Wochen vor ihrem Inkrafttreten in geeigneter Weise an, insbesondere über unsere Support-Server und unsere Website.</p>
                    <p class="text-lg leading-7">(3) Sie können einer Änderung bis zu ihrem Inkrafttreten widersprechen. Widersprechen Sie nicht, gelten die geänderten Bedingungen ab dem angekündigten Zeitpunkt; auf diese Folge weisen wir in der Ankündigung gesondert hin. Widersprechen Sie, gelten die bisherigen Bedingungen fort; wir können den Vertrag dann nach § 11 Abs. 3 kündigen. Ihr Recht nach § 11 Abs. 2 bleibt unberührt.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 13 Kontaktstelle</h2>
                <p class="text-lg leading-7">Zentrale Kontaktstelle für Behörden und Nutzer nach Art. 11 und 12 des Digital Services Act ist <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. Sie können mit uns auf Deutsch oder Englisch kommunizieren. Für allgemeine Fragen erreichen Sie uns außerdem über unsere Support-Server auf Discord und Guilded.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">§ 14 Schlussbestimmungen</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Es gilt das Recht der Bundesrepublik Deutschland. Gegenüber Verbrauchern gilt diese Rechtswahl nur, soweit dadurch nicht der Schutz entzogen wird, den zwingende Bestimmungen des Rechts des Staates gewähren, in dem der Verbraucher seinen gewöhnlichen Aufenthalt hat.</p>
                    <p class="text-lg leading-7">(2) Sind Sie Kaufmann, juristische Person des öffentlichen Rechts oder öffentlich-rechtliches Sondervermögen, ist Gerichtsstand für alle Streitigkeiten aus diesem Vertrag unser Wohnsitz.</p>
                    <p class="text-lg leading-7">(3) Wir sind weder bereit noch verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
                    <p class="text-lg leading-7">(4) Diese Nutzungsbedingungen liegen in deutscher und englischer Sprache vor. Maßgeblich ist die deutsche Fassung.</p>
                    <p class="text-lg leading-7">(5) Sollten einzelne Bestimmungen unwirksam sein oder werden, bleibt die Wirksamkeit der übrigen Bestimmungen unberührt.</p>
                </div>
            </div>
        </section>

        <!-- English version (translation) -->
        <section id="en" lang="en" data-lang="en" class="mt-10">
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">Welcome to Astroid!</h2>
                <p class="text-lg leading-7">Astroid is a free open-source project that connects channels on Discord, Guilded, Nerimity and Revolt. These Terms of Service govern the use of our service. Please read them carefully before you set up Astroid or use the API.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">1. Scope and Provider</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) These Terms of Service apply to the use of Astroid, consisting of the bots for Discord, Guilded, Nerimity and Revolt, the public REST API, the dashboard and the website astroid.cc (together the "Service").</p>
                    <p class="text-lg leading-7">(2) The Service is provided by Jason Herrmann, U6 17, 68161 Mannheim, Germany, email: <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a> ("we"). Further details can be found in the <a href="/imprint" class="text-blue-500 underline">imprint</a>.</p>
                    <p class="text-lg leading-7">(3) Users within the meaning of these terms are persons who set up or manage Astroid on a server ("server operators") and persons who use the API ("developers").</p>
                    <p class="text-lg leading-7">(4) Users' own terms and conditions do not apply, even if we do not expressly object to them.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">2. Services</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Astroid connects channels on different platforms and automatically transmits the messages and attachments posted in them to the connected channels (the "bridge").</p>
                    <p class="text-lg leading-7">(2) The Service is free of charge. We provide it within the scope of our technical and operational capabilities. There is no entitlement to uninterrupted or error-free availability; maintenance, malfunctions and security measures in particular may cause interruptions.</p>
                    <p class="text-lg leading-7">(3) The Service depends on the interfaces of the connected platforms. They may change or restrict their interfaces, terms or features at any time; we have no influence on this.</p>
                    <p class="text-lg leading-7">(4) We may further develop the Service and change, restrict or discontinue individual features if there is a valid reason (e.g. technical development, changes to the platforms, legal requirements or security reasons) and this is reasonable for users, taking their interests into account.</p>
                    <p class="text-lg leading-7">(5) Technical limits apply, in particular a maximum file size of 50 MB for attachments and limits on requests to the API (rate limits).</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">3. Conclusion of the Agreement and Requirements</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) The user agreement is concluded when you set up Astroid, in particular when you add a bot to a server and create an endpoint, or when you use the API.</p>
                    <p class="text-lg leading-7">(2) You must have reached the minimum age required by the terms of the respective platform. Minors need the consent of their legal guardians.</p>
                    <p class="text-lg leading-7">(3) Server operators may only set up Astroid on servers and in channels for which they have the necessary permissions.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">4. User Obligations</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) You may only use the Service in accordance with applicable law, these terms and the terms of the connected platforms (<a href="https://discord.com/terms" class="text-blue-500 underline">Discord</a>, <a href="https://support.guilded.gg/hc/en-us/articles/360039728313-Terms-of-Use" class="text-blue-500 underline">Guilded</a>, <a href="https://nerimity.com/terms-and-conditions" class="text-blue-500 underline">Nerimity</a>, <a href="https://revolt.chat/terms" class="text-blue-500 underline">Revolt</a>).</p>
                    <p class="text-lg leading-7">(2) In particular, you must not</p>
                    <ul class="list-disc list-inside text-lg leading-7 space-y-2">
                        <li>distribute unlawful content, such as content that is criminal, harmful to minors or infringes the rights of others (e.g. copyrights, trademarks or personality rights),</li>
                        <li>transmit spam, malware or phishing,</li>
                        <li>harass or threaten other people or incite hatred against them,</li>
                        <li>exploit bugs or security vulnerabilities of the Service, circumvent technical limits or suspensions, or gain unauthorised access to other endpoints or systems,</li>
                        <li>overload the Service with excessive or automated requests or otherwise disrupt its operation.</li>
                    </ul>
                    <p class="text-lg leading-7">(3) Server operators must inform the members of their server in a suitable way (e.g. in the channel description or server rules) that messages from bridged channels are transmitted to other platforms, and must moderate the bridged channels appropriately.</p>
                    <p class="text-lg leading-7">(4) Access tokens must be kept secret. You are responsible for actions taken with your token to the extent you are at fault. If you suspect that an unauthorised person knows your token, please inform us without delay.</p>
                    <p class="text-lg leading-7">(5) If you discover a bug or security vulnerability, please report it to <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. Do not exploit it beyond what is necessary to demonstrate it, do not access other people's data, and do not publish it before we have had a reasonable opportunity to fix it.</p>
                    <p class="text-lg leading-7">(6) Developers who retrieve or transmit personal data via the API are themselves responsible for processing that data lawfully.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">5. Content</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Astroid transmits messages and files automatically and without reviewing their content. Only the person who writes or sends content is responsible for it; we do not adopt transmitted content as our own. The liability exemption for mere conduit under Art. 4 of Regulation (EU) 2022/2065 (Digital Services Act) remains unaffected.</p>
                    <p class="text-lg leading-7">(2) Anyone who sends files is responsible for their content and for their compliance with the terms of the platforms involved.</p>
                    <p class="text-lg leading-7">(3) You can report unlawful content and violations of these terms to <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">6. Moderation and Measures</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) Server operators can set up filters (a blacklist for words, sentences, links and numbers, and an emoji filter). Messages that trigger a filter are automatically not transmitted. The filters are set exclusively by server operators; we do not review content.</p>
                    <p class="text-lg leading-7">(2) If there are specific indications of a violation of these terms, applicable law or the terms of the connected platforms, we may take the following measures, taking into account the legitimate interests of everyone involved and the severity of the violation:</p>
                    <ul class="list-disc list-inside text-lg leading-7 space-y-2">
                        <li>a warning,</li>
                        <li>temporary or permanent suspension of an endpoint,</li>
                        <li>deactivation of individual features, in particular the transmission of attachments,</li>
                        <li>blocking of access tokens or API access.</li>
                    </ul>
                    <p class="text-lg leading-7">(3) Measures under paragraph 2 are decided by a member of our team after reviewing the individual case. We inform the server operator concerned of the measure and the reasons for it, as far as this is possible and legally permitted.</p>
                    <p class="text-lg leading-7">(4) You can lodge a complaint against a measure at <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. We will review the complaint and inform you of the outcome. Your right to seek judicial remedies remains unaffected.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">7. Open Source License</h2>
                <p class="text-lg leading-7">Astroid's source code is licensed under the GNU Affero General Public License v3.0 (AGPL-3.0). The use, modification and distribution of the source code are governed exclusively by this license. These terms only apply to the Service operated by us; operators of self-hosted instances are responsible for those instances.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">8. Data Protection</h2>
                <p class="text-lg leading-7">Information on the processing of personal data can be found in our <a href="/privacy" class="text-blue-500 underline">privacy policy</a>.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">9. Liability</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) We are liable without limitation for intent and gross negligence, for injury to life, body or health, under the German Product Liability Act, for fraudulently concealed defects and to the extent of any guarantee we have given.</p>
                    <p class="text-lg leading-7">(2) In cases of slight negligence, we are only liable for breaches of essential contractual obligations, meaning obligations whose fulfilment makes the proper performance of the agreement possible in the first place and on whose fulfilment you may regularly rely. In this case, our liability is limited to the foreseeable damage typical for this type of agreement.</p>
                    <p class="text-lg leading-7">(3) Otherwise, our liability is excluded.</p>
                    <p class="text-lg leading-7">(4) The above limitations of liability also apply in favour of our contributors, representatives and vicarious agents.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">10. Indemnification</h2>
                <p class="text-lg leading-7">You indemnify us against claims asserted against us by third parties due to a violation of these terms or of applicable law for which you are responsible. This includes reasonable costs of legal defence.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">11. Term and Termination</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) The user agreement runs for an indefinite period.</p>
                    <p class="text-lg leading-7">(2) You can end the agreement at any time without notice by deleting your endpoint (e.g. with the <code class="bg-gray-800 text-white px-1 py-0.5 rounded">/delete</code> command or via the API) or by emailing <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>.</p>
                    <p class="text-lg leading-7">(3) We can terminate the agreement with two weeks' notice, in particular if we discontinue the Service in whole or in part.</p>
                    <p class="text-lg leading-7">(4) The right of both parties to terminate for good cause without notice remains unaffected. Good cause for us exists in particular in the event of serious or repeated violations of section 4.</p>
                    <p class="text-lg leading-7">(5) After the agreement ends, your data will be deleted in accordance with our <a href="/privacy" class="text-blue-500 underline">privacy policy</a>.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">12. Changes to These Terms</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) We may change these terms if there is a valid reason, in particular changes in legislation or case law, technical developments, changes to the connected platforms or new features, and the change is reasonable for you, taking your interests into account. Changes to the essential services or to the liability provisions require your express consent.</p>
                    <p class="text-lg leading-7">(2) We will announce changes in a suitable manner at least four weeks before they take effect, in particular on our support servers and our website.</p>
                    <p class="text-lg leading-7">(3) You can object to a change until it takes effect. If you do not object, the amended terms apply from the announced date; we will point out this consequence separately in the announcement. If you object, the previous terms continue to apply; we may then terminate the agreement under section 11(3). Your right under section 11(2) remains unaffected.</p>
                </div>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">13. Point of Contact</h2>
                <p class="text-lg leading-7">The single point of contact for authorities and users under Art. 11 and 12 of the Digital Services Act is <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. You can communicate with us in German or English. For general questions, you can also reach us on our support servers on Discord and Guilded.</p>
            </div>
            <div class="term mb-8">
                <h2 class="text-2xl font-semibold mb-4">14. Final Provisions</h2>
                <div class="space-y-4">
                    <p class="text-lg leading-7">(1) The law of the Federal Republic of Germany applies. For consumers, this choice of law only applies insofar as it does not deprive them of the protection granted by mandatory provisions of the law of the country in which they have their habitual residence.</p>
                    <p class="text-lg leading-7">(2) If you are a merchant (Kaufmann), a legal entity under public law or a special fund under public law, the place of jurisdiction for all disputes arising from this agreement is our place of residence.</p>
                    <p class="text-lg leading-7">(3) We are neither willing nor obliged to participate in dispute resolution proceedings before a consumer arbitration board.</p>
                    <p class="text-lg leading-7">(4) These terms are available in German and English. The German version is binding.</p>
                    <p class="text-lg leading-7">(5) Should individual provisions be or become invalid, the validity of the remaining provisions remains unaffected.</p>
                </div>
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
