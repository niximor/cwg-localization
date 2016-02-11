<?php

// Browsing through catalogue and collection.

$strings = array(
    "Search the catalogue" => "Przeszukaj katalog",
    "Search query" => "Zapytanie",
    "Advanced search" => "Zaawansowane wyszukiwanie",
    "Only that I have collected" => "Tylko z mojej kolekcji",
    "Only that I offer" => "Tylko oferowane",
    "Only I want" => "Tylko pożądane",
    "Only I don't want" => "Tylko niepożądane",
    "Only partially collected" => "Tylko częściowo zebrane",
    "Filter out collected" => "Odfiltruj posiadane",
    "Filter out offered" => "Odfiltruj oferowane",
    "Filter out wanted" => "Odfiltruj pożądane",
    "Filter out not wanted" => "Odfiltruj niepożądane",

    "Browse catalogue" => "Przeglądaj katalog",
    "Primary sorting:" => "Podstawowe sortowanie:",
    "By country" => "Kraj",
    "By origin" => "Pochodzenie",
    "By type" => "Typ",
    "Advanced" => "Zaawansowane...",

    "Showing %d - %d of %d total items matching selected filter." => "Wyświetlane %d - %d z %d wszystkich pasujących do kryteriów.",
    "Sort:" => "Sortowanie:",
    "Name" => "Nazwa",
    "Cat.no" => "Nr Kat.",
    "Last collected date" => "Ost. data zebrania",
    "Ascending" => "Rosnąco",
    "Descending" => "Malejąco",
    "Number of CWGs on page:" => "Liczba xWG na stronie:",
    "OK" => "OK",
    "There are no CWGs matching current filter settings." => "Brak xWG pasujących do filtra.",

    "&lt; Previous" => "&lt; Poprzednie",
    "Next &gt;" => "Następne &gt;",

    "All" => "Wszystkie",
    "To advanced filter &raquo;" => "Do zaawansowanego filtru &raquo;",
    "%d items" => array(
        0 => "%d obiektów",
        1 => "%d obiekt",
        2 => "%d obiekty",
        3 => "%d obiekty",
        4 => "%d obiekty",
        5 => "%d obiektów"
    ),

    // Buttons
    "Filter" => "Filtr",
    "Cancel" => "Anuluj",
    "Modify" => "Zmień",

    // Help
    "Specify what you want to see using buttons and switches in the Advanced search section." =>
        "Wybierz co chces widzieć używając przycisków i zmiennych w Zaawansowanym wyszukiwaniu.",
    "Additionaly you can enter search string in the field in Search query section to define more precise filtering options. The string can contain anything that should be searched in the name of CWG plus special options for other types of filtering. These options are described below." =>
        "Dodatkowo możesz wprowadzić ciąg wyszukiwania w pole Zapytanie żeby sprecyzować wyszukiwanie. Ciąg może być dowolną wyszukiwaną częścią nazwy xWG oraz zawierać specjalne opcje filtrowania omówione poniżej.",
    "Filter CWGs only in specified countries. Include list of countries, separated using colon, in the brackets. Valid countries are listed in the Country select below the search field." =>
        "Odfiltruj xWG tylko z wybranych krajów. Zawrzyj listę krajów, oddzielając je przecinkiem, w nawiasach. Lista krajów dostępna jest w sekcji Kraj pod oknem wyszukiwania.",
    "Filter only coins that originates from cache, event, or person. Include list of origins, separated using  colon, in the brackets. Valid origins are listed in the Origin select below the search field." =>
        "Odfiltruj tylko xWG, które pochodzą z keszów, eventów lub są osobiste. Dodaj listę pochodzenia, oddzielając je przecinkami, w nawiasach. Lista pochodzenia znajduje się w sekcji Pochodzenie pod oknem wyszukiwania.",
    "Filter only coins of specific type - CWG, MWG, SQ. Include list of types, separated using colon, in the brackets. Valid types are listed in the Types select below the search field." =>
        "Odfiltruj xWG pod kątem typu = CWG, MWG, SQ. Dodaj listę typów, oddzielając je przecinkami, w nawiasach. Lista typów znajduje się w sekcji typ pod oknem wyszukiwania.",
    "Show only CWGs that you have collected." =>
        "Wybierz tylko te, które zebrałeś.",
    "Show only CWGs that you offer." =>
        "Wybierz tylko te, które oferujesz.",
    "Show only CWGs that you marked as want." =>
        "Wybierz tylko zaznaczone jako pożądane.",
    "Show only CWGs that you marked as not want." =>
        "Wybierz tylko te niepożądane.",
    "You can use \"-\" sign to negate the input. For example \"-is:collected\" means CWGs that you don't have collected." =>
        "Możecie używać znaku \"-\" do negacji zapytania. Na przykład \"-is:collected\" oznacza xWG, których nie masz w kolekcji.",
    "You can enclose more complex string in quotes to be searched \"as is\"." =>
        "Możesz także zawrzeć złożone zapytanie w cudzysłowiu. Wtedy wyszukany zostanie ciąg \"jak wpisano\".",
    "Each option is considered as \"and\", which means all options must be valid for CWG to appear in the result. Lists specified in brackets for country, origin and type, are considered as \"or\", which means that any of specified values may apply for CWG to appear in the result." =>
        "Każda opcja jest taktowana jako \"i\", co oznacza, że wszystkie warunki muszą zostać spełnione dla wyników zapytania. Listy użyte w nawiasach dla krajów, pochodzenia i typu są traktowane jako \"lub\", co znaczy, że jeśli jakakolwiek z tych wartości zostanie spełniona, wynik zostanie wyświetlony.",

    // Advanced filter description
    "Showing items %s." => "Wyświetlanych obiektów: %s.",
    "with name containing %s" => "z nazwą zawierającą %s",
    " or " => " lub ",
    " and " => " i ",
    "where %s" => "gdzie %s",
    "<b>%s</b> is %s" => "<b>%s</b> to %s",
    "<b>%s</b> is not %s" => "<b>%s</b> nie jest %s",
    "that you <b>have collected</b>" => "które <b>posiadasz</b>",
    "but without collection information" => "ale bez informacji o zbiórce",
    "that you <b>offers</b>" => "które <b>oferujesz</b>",
    "that you <b>wants</b>" => "które <b>chcesz</b>",
    "that you <b>don't want</b>" => "których <b>nie chcesz</b>",
    "that you <b>doesn't have collected</b>" => "których <b>nie posiadasz</b>",
    "that you <b>doesn't offer</b>" => "których <b>nie oferujesz</b>",
    "that you <b>doesn't marked as wants</b>" => "których <b>nie zaznaczyłeś, że chcesz</b>",
    "that you <b>doesn't marked as not want</b>" => "których <b>nie zaznaczyłeś, że nie chcesz</b>",

    // AJAX
    "Error while loading search result. Please, try again later." => "Błąd podczas wyszukiwania. Spróbuj ponownie później.",
    "Search: %s - CWG Kolekce" => "Wyszukaj: %s - Kolekcja xWG",

    "My xWG collection" => "Moja kolekcja xWG",
    "You don't have any xWG from this category in your collection." => "Nie posiadasz xWG z tej kategorii.",
    "User does not have any xWG from this category in his collection." => "Użytkownik nie posiada xWG z tej kategorii.",

    "All" => "Wszystkie",
    "Catalogue list" => "Lista katalogowa",
    "Table with images" => "Tabela z obrazkami",
    "Overview table" => "Tabela przeglądowa",
    "Not collected by me only" => "Nie zebrane tylko przeze mnie",
    "Show only what I have collected" => "Tylko z mojej kolekcji",
    "Show only what I offer" => "Tylko oferowane",

    "Duplicates" => "Duplikaty",
    "This list contains all xWGs which you have more than once in your collection. That means that you might be interrested in offering the xWGs for exchange." =>
        "Ta lista zawiera wszystkie xWG w liczbie większej niż 1. Być może są to odpowiednie okazy do wymiany.",

    "User does not offer any xWGs for exchange." => "Użytkownik nie oferuje nic na wymianę.",
    "User does not have listed any xWG that he wants." => "Użytkownik nie posiada żadnych pożądanych xWG.",
    "User does not have listed any xWGs that he doesn't want." => "Użytkownik nie posiada żadnych niepożądanych xWG.",

    "Total:" => "Ogółem:",
    "%d pieces" => array(
        0 => "%d sztuk",
        1 => "%d sztuka",
        2 => "%d sztuki",
        3 => "%d sztuki",
        4 => "%d sztuki",
        5 => "%d sztuk",
    ),
    "%d different" => array(
        0 => "%d różnych",
        1 => "%d różny",
        2 => "%d różne",
        3 => "%d różne",
        4 => "%d różne",
        5 => "%d różnych",
    ),

    "Exclamation mark marks CWG which is not present in official catalogue." =>
        "Wykrzyknik oznacza xWG, które nie istnieją w oficjalnym katalogu.",

);
