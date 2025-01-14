---
Title: loadingtime
Description: Analys av laddningstid och användbarhet
---

# Analys av webbplatsers laddningstid och användbarhet

Denna rapport undersöker laddningstiden och användbarheten för tre olika webbplatser. Målet är att identifiera möjliga förbättringsåtgärder och föreslå hur webbplatserna kan bli snabbare och mer användarvänliga.

## Urval
Tre webbplatser har analyserats:

Sida A: Aleris Sjukvård: https://www.aleris.se/.

Sida B: Västtrafik: https://www.vasttrafik.se/.

Sida C: GP.se (Göteborgs-Posten): https://www.gp.se/.

Dessa webbplatser valdes för att representera olika typer av innehåll och målgrupper: vårdtjänster, kollektivtrafik och en nyhetssajt.

## Metod

Analysen gjordes med hjälp av:
* Google PageSpeed Insights: För att mäta prestanda och få förslag på förbättringar för både mobil och desktop.
* Webbläsarens DevTools: För att mäta laddningstid, antal resurser och total sidstorlek. Mätningar gjordes tre gånger per sida och medelvärden beräknades för mer pålitliga resultat.
* Mätvärdena sparats i ett Excel-ark vilket länkas till nedan. 

## Resultat

### Sida A: Aleris Sjukvård (start-, jobb- och kontaktsida):
* Genomsnittlig laddningstid: 12.23 (startsida), 11.9 (jobbsida), 12.2 (kontaktsida) sekunder.
* Antal resurser: 89, 103, 79.
* Total sidstorlek: 6.4, 8.9, 5.8 MB.
* Förbättringsförslag: Minska antalet resurser och optimera bilder för att snabba upp laddningstiden.

### Sida B: Västtrafik (startsidan, reseplaneraren, och kundservice)
* Genomsnittlig laddningstid: 2.02 (startsida) , 2.4 (reseplaneraren), 1.22 (kundservice) sekunder.
* Antal resurser: 69, 44, 44.
* Total sidstorlek: 3,4, 2.7, 2.7 MB.

### Sida C: GP.se (startsida, kundservice och e-tidning)
* Genomsnittlig laddningstid: 1.1 minut på startsidan (!), 1.03 (kundservice), 1.29 (e-tidning) sekunder.
* Antal resurser: 785, 92, 115.
* Total sidstorlek: 23.3, 3.4, 1.1 MB.
* Förbättringsförslag: Drastiskt minska sidans storlek och antalet resurser, särskilt på startsidan. Det är mycket reklam och banners som laddas in när sidan startar, detta kanske är svårt att undvika på denna typ av sida?

## Analys

### Vanliga förbättringsåtgärder
De vanligaste förbättringarna som identifierats är:
* Optimera bilder genom att minska storlek och använda moderna format som WebP.
* Implementera caching och lazy loading för snabbare laddning och bättre användarupplevelse.

### Gräns för laddningstid
Jag satte en gräns för acceptabel laddningstid på 3 sekunder, detta enligt information i texten Moz om Page Speed.

### Rangordning av webbplatser
Webbplatserna har rangordnats baserat på deras mätvärden. Endast Västtrafik når en snabb laddningstid under 3 sekunder för majoriteten av sina sidor. Aleris presterar medelmåttigt, medan GP:s startsida ligger långt över acceptabla gränser. Dock ligger GP:s två andra sidor jag mätte på 1-1.2 s, vilket är väldigt bra.

## Referenser

* Google PageSpeed Insights
* Webbläsarens DevTools
* Kursmaterial på dbwebb.se
* Page Speed: How to evaluate and improve page speed (moz.com)

## Tabell

<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQPjbXmTTR0qpceZ6wDqZn80xh78HHjBQmhKlIbJaAylBXJsxg46Fjdn6xN8LGPz1F9HVk5loXmXmBI/pubhtml?widget=true&amp;headers=false" class="loadingtime-table"></iframe>

## Författare

Sandra Jakobsson
