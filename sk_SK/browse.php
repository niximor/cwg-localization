<?php
// Browsing through catalogue and collection.
$strings = array(
    "Search the catalogue" => "Vyhľadávanie v katalógu",
    "Search query" => "Dopyt vyhľadávania",
    "Advanced search" => "Pokročilé hľadanie",
    "Only that I have collected" => "Len tie, ktoré mám v zbierke",
    "Only that I offer" => "Len tie, ktoré ponúkam",
    "Only I want" => "Len tie, ktoré chcem",
    "Only I don't want" => "Len tie, ktoré nechcem",
    "Only partially collected" => "Bez informácií o zbierke",
    "Filter out collected" => "Odfiltrovať tie, ktoré mám v zbierke",
    "Filter out offered" => "Odfiltrovať tie, ktoré ponúkam",
    "Filter out wanted" => "Odfiltrovať tie, ktoré chcem",
    "Filter out not wanted" => "Odfiltrovať tie, ktoré nechcem",
    "Browse catalogue" => "Listovať v katalógu",
    "Primary sorting:" => "Primárne zoradenie:",
    "By country" => "Krajina",
    "By origin" => "Pôvod",
    "By type" => "Typ",
    "Advanced" => "Pokročilé filtrovanie",
    "Showing %d - %d of %d total items matching selected filter." => "Zobrazuje sa %d – %d z %d záznamov celkom zodpovedajúcim vybranému filtru.",
    "Sort:" => "Zoradiť:",
    "Name" => "meno",
    "Cat.no" => "Kat. číslo",
    "Last collected date" => "Dátum zaradenia",
    "Ascending" => "Vzostupne",
    "Descending" => "Zostupne",
    "Number of CWGs on page:" => "Počet xWG na stránku:",
    "OK" => "OK",
    "There are no CWGs matching current filter settings." => "Neexistujú žiadne xWG zodpovedajúce vybranému filtru.",
    "&lt; Previous" => "&lt; Predch.",
    "Next &gt;" => "Nasled. &gt;",
    "All" => "Všetko",
    "To advanced filter &raquo;" => "Do pokročilého filtra &raquo;",
    "%d items" => array(
        0 => "%d záznamov",
        1 => "%d záznam",
        2 => "%d záznamy",
        3 => "%d záznamy",
        4 => "%d záznamy",
        5 => "%d záznamov"
    ),
    // Buttons
    "Filter" => "Vyfiltrovať",
    "Cancel" => "Zrušiť",
    "Modify" => "Zmeniť",
    // Help
    "Specify what you want to see using buttons and switches in the Advanced search section." =>
        "Pomocou výberov a prepínačov v časti Pokročilé vyhľadávanie vyberte, čo chcete vidieť.",
    "Additionaly you can enter search string in the field in Search query section to define more precise filtering options. The string can contain anything that should be searched in the name of CWG plus special options for other types of filtering. These options are described below." =>
        "Súčasne môžete zadať hľadaný reťazec do položky Dopyt vyhľadávania pre ďalšie obmedzenie vyhľadávania. Hľadaný reťazec môže obsahovať čokoľvek, čo by sa malo vyhľadávať v názve xWG a zároveň ďalšie špeciálne voľby na filtrovanie výsledkov. Voľby sú uvedené ďalej.", 
    "Filter CWGs only in specified countries. Include list of countries, separated using colon, in the brackets. Valid countries are listed in the Country select below the search field." =>
        "Zobraziť xWG len z určitých krajín. Do zátvoriek vpíšte zoznam krajín oddelených čiarkami. Ktoré krajiny môžete použiť, to sa dozviete zo zodpovedajúceho výberu v pokročilom filtrovaní.",
    "Filter only coins that originates from cache, event, or person. Include list of origins, separated using colon, in the brackets. Valid origins are listed in the Origin select below the search field." =>
        "Zobraziť len kolieska, ktoré pochádzajú z kešky, eventu alebo od osoby. Do zátvoriek napíšte zoznam pôvodov oddelených čiarkami. Čo môžete použiť, to sa znova dozviete zo zodpovedajúceho výberu v pokročilom filtrovaní.",
    "Filter only coins of specific type - CWG, MWG, SQ. Include list of types, separated using colon, in the brackets. Valid types are listed in the Types select below the search field." =>
        "Zobraziť len kolieska konkrétneho typu – CWG, MWG, SQ. Jednotlivé typy vpíšte do zátvoriek a oddeľte čiarkami. Platné typy sa dozviete vo výbere.",
    "Show only CWGs that you have collected." =>
        "Zobraziť len xWG, ktoré máte v zbierke.",
    "Show only CWGs that you offer." =>
        "Zobraziť len xWG, ktoré ponúkate.",
    "Show only CWGs that you marked as want." =>
        "Zobraziť len xWG, ktoré máte označené, že ich chcete.",
    "Show only CWGs that you marked as not want." =>
        "Zobraziť len xWG, ktoré máte označené, že ich nechcete.",
    "You can use \"-\" sign to negate the input. For example \"-is:collected\" means CWGs that you don't have collected." =>
        "Môžete použiť znamienko \"-\" na negovanie zadania. Napríklad \"-is:collected\" znamená xWG, ktoré nemáte v zbierke.",
    "You can enclose more complex string in quotes to be searched \"as is\"." =>
        "Hľadaný reťazec môžete uzavrieť do úvodzoviek. V takom prípade bude hľadaný \"tak ako je\", takže môžete nájsť aj kolieska, na ktorých bežné vyhľadávanie zlyháva.",
    "Each option is considered as \"and\", which means all options must be valid for CWG to appear in the result. Lists specified in brackets for country, origin and type, are considered as \"or\", which means that any of specified values may apply for CWG to appear in the result." =>
        "Každá voľba je považovaná za \"zároveň\", tzn. aby bolo koliesko zaradené do výsledku, musia byť splnené všetky obmedzujúce podmienky. Zoznam v zátvorkách pre krajinu, pôvod a typ je považovaný za \"alebo\", čo znamená, že xWG môže byť zaradené v ktorejkoľvek zadanej hodnote, aby sa vo výsledku objavilo.",
    // Advanced filter description
    "Showing items %s." => "Zobrazujú sa záznamy %s.",
    "with name containing %s" => "s názvom obsahujúcim %s",
    " or " => " alebo ",
    " and " => " a zároveň ",
    "where %s" => "kde %s",
    "<b>%s</b> is %s" => "<b>%s</b> je %s",
    "<b>%s</b> is not %s" => "<b>%s</b> nie je %s",
    "that you <b>have collected</b>" => "ktoré <b>máte v zbierke</b>",
    "but without collection information" => "ale bez informácií o zbierke",
    "that you <b>offers</b>" => "ktoré <b>ponúkate</b>",
    "that you <b>wants</b>" => "ktoré <b>chcete</b>",
    "that you <b>don't want</b>" => "ktoré <b>nechcete</b>",
    "that you <b>doesn't have collected</b>" => "ktoré <b>nemáte v zbierke</b>",
    "that you <b>doesn't offer</b>" => "které <b>neponúkate</b>",
    "that you <b>doesn't marked as wants</b>" => "ktoré <b>nemáte označené, že ich chcete</b>",
    "that you <b>doesn't marked as not want</b>" => "které <b>nemáte označené, že ich nechcete</b>",
    // AJAX
    "Error while loading search result. Please, try again later." => "Nastala chyba pri vyhľadávaní. Skúste to neskôr.",
    "Search: %s - CWG Kolekce" => "Vyhľadávanie: %s – CWG Kolekce",
    "My xWG collection" => "Moja zbierka xWG",
    "You don't have any xWG from this category in your collection." => "V zbierke nemáte žiadne xWG z tejto kategórie.",
    "User does not have any xWG from this category in his collection." => "Používateľ nemá v zbierke žiadne xWG z tejto kategórie.",
    "All" => "Všetko",
    "Catalogue list" => "Katalógový výpis",
    "Table with images" => "Výpis s obrázkami",
    "Overview table" => "Prehľadová tabuľka",
    "Not collected by me only" => "Len čo nemám",
    "Show only what I have collected" => "Len čo mám v zbierke",
    "Show only what I offer" => "Len čo ponúkam",
    "Duplicates" => "Duplicity",
    "This list contains all xWGs which you have more than once in your collection. That means that you might be interrested in offering the xWGs for exchange." =>
        "Tento zoznam obsahuje všetky xWG, ktoré máte v zbierke viac než jedenkrát, takže je pravdepodobné, že ich budete chcieť ponúknuť na výmenu.",
    "User does not offer any xWGs for exchange." => "Používateľ neponúka žiadne xWG na výmenu.",
    "User does not have listed any xWG that he wants." => "Používateľ nemá v zozname žiadne xWG, ktoré by chcel.",
    "User does not have listed any xWGs that he doesn't want." => "Používateľ nemá žiadne xWG, ktoré nechce.",
    "Total:" => "Celkom:",
    "%d pieces" => array(
        0 => "%d kusov",
        1 => "%d kus",
        2 => "%d kusy",
        3 => "%d kusy",
        4 => "%d kusy",
        5 => "%d kusov",
    ),
    "%d different" => array(
        0 => "%d rôznych",
        1 => "%d rôzny",
        2 => "%d rôzne",
        3 => "%d rôzne",
        4 => "%d rôzne",
        5 => "%d rôznych",
    ),
    "Exclamation mark marks CWG which is not present in official catalogue." =>
        "Výkričník znamená xWG nezaradené do katalógu.",
);
