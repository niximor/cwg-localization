<?php

// Browsing through catalogue and collection.

$strings = array(
    "Search the catalogue" => "Vyhledávání v katalogu",
    "Search query" => "Hledací dotaz",
    "Advanced search" => "Pokročilé hledání",
    "Only that I have collected" => "Jen ty co mám ve sbírce",
    "Only that I offer" => "Jen ty co nabízím",
    "Only I want" => "Jen ty co chci",
    "Only I don't want" => "Jen ty co nechci",
    "Only partially collected" => "Bez informací o sbírce",
    "Filter out collected" => "Odfiltrovat ty co mám ve sbírce",
    "Filter out offered" => "Odfiltrovat ty co nabízím",
    "Filter out wanted" => "Odfiltrovat ty co chci",
    "Filter out not wanted" => "Odfiltrovat ty co nechci",

    "Browse catalogue" => "Procházet katalog",
    "Primary sorting:" => "Primární rozřazení:",
    "By country" => "Země",
    "By origin" => "Původ",
    "By type" => "Typ",
    "Advanced" => "Pokročilé filtrování",

    "Showing %d - %d of %d total items matching selected filter." => "Zobrazuji %d - %d z %d záznamů celkem odpovídajícím zvolenému filtru.",
    "Sort:" => "Seřadit:",
    "Name" => "Jméno",
    "Cat.no" => "Kat.číslo",
    "Last collected date" => "Datum zařazení",
    "Ascending" => "Vzestupně",
    "Descending" => "Sestupně",
    "Number of CWGs on page:" => "Počet CWG na stránku:",
    "OK" => "OK",
    "There are no CWGs matching current filter settings." => "Neexistují žádná CWG odpovídající zvolenému filtru.",

    "&lt; Previous" => "&lt; Předchozí",
    "Next &gt;" => "Následující &gt;",

    "All" => "Všechno",
    "To advanced filter &raquo;" => "Do pokročilého filtru &raquo;",
    "%d items" => array(
        0 => "%d záznamů",
        1 => "%d záznam",
        2 => "%d záznamy",
        3 => "%d záznamy",
        4 => "%d záznamy",
        5 => "%d záznamů"
    ),

    // Buttons
    "Filter" => "Vyfiltrovat",
    "Cancel" => "Zrušit",
    "Modify" => "Změnit",

    // Help
    "Specify what you want to see using buttons and switches in the Advanced search section." =>
        "Vyberte si co chcete vidět pomocí výběru a přepínačů v sekci Pokročilé hledání.",
    "Additionaly you can enter search string in the field in Search query section to define more precise filtering options. The string can contain anything that should be searched in the name of CWG plus special options for other types of filtering. These options are described below." =>
        "Současně můžete zadat hledaný řetězec do pole Hledací dotaz pro další omezení hledání. Hledaný řetězec může obsahovat cokoliv co by se mělo vyhledávat v názvu CWG a zároveň další speciální volby pro filtrování výsledků. Volby jsou uvedeny níže.",
    "Filter CWGs only in specified countries. Include list of countries, separated using colon, in the brackets. Valid countries are listed in the Country select below the search field." =>
        "Zobrazit CWG jen z určitých zemí. Do závorek vepište seznam zemí oddělený čárkami. Které země můžete použít se dozvíte z odpovídajícího vybírátka v pokročilém filtrování.",
    "Filter only coins that originates from cache, event, or person. Include list of origins, separated using colon, in the brackets. Valid origins are listed in the Origin select below the search field." =>
        "Zobrazit jen kolečka, která pochází z keše, eventu nebo od osoby. Do závorek napište seznam původů, oddělený čárkami. Co můžete použít se opět dozvíte z patřičného vybírátka v pokročilém filtrování.",
    "Filter only coins of specific type - CWG, MWG, SQ. Include list of types, separated using colon, in the brackets. Valid types are listed in the Types select below the search field." =>
        "Zobrazit jen kolečka konkrétního typu - CWG, MWG, SQ. Jednotlivé typy vepište do závorek a oddělte čárkami. Platné typy se dozvíte opět ve vybírátku.",
    "Show only CWGs that you have collected." =>
        "Zobrazit jen CWG, která máte ve sbírce.",
    "Show only CWGs that you offer." =>
        "Zobrazit jen CWG, která nabízíte.",
    "Show only CWGs that you marked as want." =>
        "Zobrazit jen CWG, která máte označena že je chcete.",
    "Show only CWGs that you marked as not want." =>
        "Zobrazit jen CWG, která máte oznažena že je nechcete.",
    "You can use \"-\" sign to negate the input. For example \"-is:collected\" means CWGs that you don't have collected." =>
        "Můžete použít znaménko \"-\" pro negaci zadání. Například \"-is:collected\" znamená CWG, která nemáte ve sbírce.",
    "You can enclose more complex string in quotes to be searched \"as is\"." =>
        "Hledaný řetězec můžete uzavřít do uvozovek. V takovém případě bude hledán \"jak je\", takže můžete nalézt i kolečka, na kterých běžné vyhledávání selhává.",
    "Each option is considered as \"and\", which means all options must be valid for CWG to appear in the result. Lists specified in brackets for country, origin and type, are considered as \"or\", which means that any of specified values may apply for CWG to appear in the result." =>
        "Každá volba je považována za \"zároveň\", tj. aby bylo kolečko zařazeno do výsledku musí být splněny všechny omezující podmínky. Seznam v závorkách pro zemi, původ a typ je považován jako \"nebo\", což znamená, že CWG může být zařazeno ve kterékoliv zadané hodnotě aby se ve výsledku objevilo.",

    // Advanced filter description
    "Showing items %s." => "Zobrazuji záznamy %s.",
    "with name containing %s" => "s názvem obsahujícím %s",
    " or " => " nebo ",
    " and " => " a zároveň ",
    "where %s" => "kde %s",
    "<b>%s</b> is %s" => "<b>%s</b> je %s",
    "<b>%s</b> is not %s" => "<b>%s</b> není %s",
    "that you <b>have collected</b>" => "které <b>máte ve sbírce</b>",
    "but without collection information" => "ale bez informací o sbírce",
    "that you <b>offers</b>" => "které <b>nabízíte</b>",
    "that you <b>wants</b>" => "které <b>chcete</b>",
    "that you <b>don't want</b>" => "které <b>nechcete</b>",
    "that you <b>doesn't have collected</b>" => "které <b>nemáte ve sbírce</b>",
    "that you <b>doesn't offer</b>" => "které <b>nenabízíte</b>",
    "that you <b>doesn't marked as wants</b>" => "které <b>nemáte označena že chcete</b>",
    "that you <b>doesn't marked as not want</b>" => "které <b>nemáte označena že nechcete</b>",

    // AJAX
    "Error while loading search result. Please, try again later." => "Nastala chyba při vyhledávání. Prosím, zkuste to později.",
    "Search: %s - CWG Kolekce" => "Vyhledávání: %s - CWG Kolekce",

    "My xWG collection" => "Moje sbírka CWG",
    "You don't have any xWG from this category in your collection." => "Ve sbírce nemáte žádné xWG z této kategorie.",
    "User does not have any xWG from this category in his collection." => "Uživatel nemá ve sbírce žádné xWG z této kategorie.",

    "All" => "Vše",
    "Catalogue list" => "Katalogový výpis",
    "Table with images" => "Výpis s obrázky",
    "Overview table" => "Přehledová tabulka",
    "Not collected by me only" => "Jen co nemám",
    "Show only what I have collected" => "Jen co mám ve sbírce",
    "Show only what I offer" => "Jen co nabízím",
    "Only what I want" => "Jen co chci",

    "Duplicates" => "Duplicity",
    "This list contains all xWGs which you have more than once in your collection. That means that you might be interrested in offering the xWGs for exchange." =>
        "Tento seznam obsahuje všechna xWG, která máte ve sbírce více než jednou, takže je pravděpodobné, že je budete chtít nabídnout k výměně.",

    "User does not offer any xWGs for exchange." => "Uživatel nenabízí žádná xWG k výměně.",
    "User does not have listed any xWG that he wants." => "Uživatel nemá v seznamu žádné xWG, které by chtěl.",
    "User does not have listed any xWGs that he doesn't want." => "Uživatel nemá žádné xWG, které nechce.",

    "Total:" => "Celkem:",
    "%d pieces" => array(
        0 => "%d kusů",
        1 => "%d kus",
        2 => "%d kusy",
        3 => "%d kusy",
        4 => "%d kusy",
        5 => "%d kusů",
    ),
    "%d different" => array(
        0 => "%d různých",
        1 => "%d různý",
        2 => "%d různé",
        3 => "%d různé",
        4 => "%d různé",
        5 => "%d různých",
    ),

    "Exclamation mark marks CWG which is not present in official catalogue." =>
        "Vykřičník značí CWG nezařazené do katalogu.",

);
