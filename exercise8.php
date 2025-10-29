<!-- Problēmas risinājums
Klubs uztur biedru sarakstu. Katrs biedrs tiek attēlots kā objekts ar četrām īpašībām: vārds, uzvārds, loma un stundas. Lomas var būt "leader" (vadītājs) vai "member" (biedrs). Stundas nosaka brīvprātīgo stundu skaitu mēnesī katram biedram.

Izveidojiet testa datus, lai jūsu izveidotā programma spētu veikt uzdevumu.
Ir jāizveido saraksts, kurā ir 2 vadītāji un 5 biedri.

Programmai jāsniedz atbildes uz trim jautājumiem:
1. Kas ir vadītāji?
Izdrukājiett konsolē visus biedrus, kuriem ir loma "leader".

2. Cik liels ir kopējais brīvprātīgo stundu skaits?
Aprēķiniet un izvadiet summu visiem biedriem kopā.

3. Kuri saņems balvu “Zvaigžņu brīvprātīgais”?
Balvu saņem biedrs, kuram ir vismaz 20 stundas un kurš nav vadītājs.
Izdrukājiet konsolē šo biedru vārdus.
Ja balvu nesaņem neviens, tad izmainiet testa datus, lai būtu vismaz viens biedrs, kurš atbilst kritērijiem.
P.S. Izvadot datus konsolē izmantojiet pilnu vārdu -->



<?php
$member = "";
$sum = 0;
$members = [
    ["vards" => "member1", "uzvards" => "member1_uzvards", "loma" => "vaditajs", "stundas" => 21],
    ["vards" => "member2", "uzvards" => "member2_uzvards", "loma" => "member", "stundas" => 56],
    ["vards" => "member3", "uzvards" => "member3_uzvards", "loma" => "member", "stundas" => 78],
    ["vards" => "member4", "uzvards" => "member4_uzvards", "loma" => "vaditajs", "stundas" => 19],
    ["vards" => "member5", "uzvards" => "member5_uzvards", "loma" => "member", "stundas" => 79],
    ["vards" => "member6", "uzvards" => "member6_uzvards", "loma" => "member", "stundas" => 100],
    ["vards" => "member7", "uzvards" => "member7_uzvards", "loma" => "member", "stundas" => 101],
];


for($i = 0; $i < count($members); $i++)
    {
        $member = $members[$i];

        if($member["loma"] == "vaditajs")
            {
                echo $member["vards"] ."\n";
            }
    $sum = $sum + $member["stundas"];

}
print_r($sum);