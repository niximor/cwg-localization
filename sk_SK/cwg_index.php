<?php

// Page with CWG details, and associated operations.

$strings = array(
    // Page title
    "%s (version %s)" => "%s (verzia %s)",
    "(version %s)" => "(verzia %s)",
    "version %s" => "verzia %s",

    // Quick actions
    "I have in collection" => "Mám v zbierke",
    "xWG has been removed from your collection." => "xWG bolo vyradené z vašej zbierky.",
    "xWG has been placed into your collection." => "xWG bolo zaradené do vašej zbierky.",
    "You cannot remove this xWG from your collection using this way, because you entered additional information for your collection." =>
        "Toto xWG nemôžete vyradiť zo zbierky týmto spôsobom, protože k nemu máte vedené podrobnejšie informácie.",
    "xWG does not exists." => "xWG neexistuje.",

    "I offer" => "Ponúkam",
    "Your offer has been removed." => "Ponuka bola odstránená.",
    "Your offer has been updated." => "Ponuka bola aktualizovaná.",

    "I want" => "Zháňam",
    "You were removed from list of users who wants this xWG." => "Boli ste vyradení zo zoznamu používateľov, ktorí toto xWG chcú.",
    "You were placed to the list of users who wants this xWG." => "Boli ste zaradení do zoznamu používateľov, ktorí toto xWG chcú.",
    "There has been an error while processing your request." => "Vyskytla sa chyba pri spracovaní vašej požiadavky.",

    "I don't want" => "Nechcem",
    "You were removed from list of users who don't want this xWG." => "Byli jste vyřazeni ze seznamu uživatelů, kteří toto xWG nechtějí.",
    "You were placed to the list of users who don't want this xWG." => "Byli jste zařazeni do seznamu uživatelů, kteří toto xWG nechtějí.",

    // CWG details
    "Category:" => "Kategorie:",
    "Category" => "Kategorie",
    "All together" => "Vše dohromady",
    "Show xWGs classified with the same criteria as this one." => "Zobrazit xWG která jsou zařazena do stejných kategorií jako toto.",
    "Show xWGs that are classified under %s: %s." => "Zobrazí xWG, která jsou zařazena v %s %s.",

    "Name" => "Název",
    "Version" => "Verze",
    "Version:" => "Verze:",
    "Catalogue number:" => "Katalogové číslo:",
    "Cat. no.:" => "Kat. číslo:",
    "Cat. no." => "Kat. číslo",
    "Uncatalogized xWG" => "Nezařazené xWG",
    "Added by:" => "Přidal:",
    "Added:" => "Datum zařazení:",
    "Note:" => "Poznámka:",
    "Note" => "Poznámka",
    "Profile:" => "Profil:",
    "here" => "zde",

    // Tabs below CWG details
    "Offers" => "Nabízí",
    "User" => "Uživatel",
    "Users, offering this xWG for exchange" => "Uživatelé nabízející toto xWG k výměně",
    "Noone offers this xWG for exchange." => "Toto xWG nikdo nenabízí k výměně.",

    "Owns" => "Má v kolekci",
    "Users, which has this xWG in their collection." => "Uživatelé, kteří mají toto xWG ve své kolekci",
    "Date" => "Datum",
    "%d people" => "%d lidí",
    "%d%s pieces" => array(
        0 => "%d%s kusů",
        1 => "%d%s kus",
        2 => "%d%s kusy",
        3 => "%d%s kusy",
        4 => "%d%s kusy",
        5 => "%d%s kusů",
    ),
    "User hasn't provided number of pieces he has in his collection. This number therefore might not be accurate." =>
        "U tohoto xWG nemá uživatel uvedeny informace o počtu kusů, takže toto číslo nemusí přesně odpovídat.",
    "You didn't provided number of pieces for this CWG." =>
        "U tohoto CWG nemáte uvedeny informace o počtu kusů.",
    "In the Date column is date of <strong>last</strong> addition to user's collection." =>
        "Ve sloupečku Datum je uvedeno datum <strong>posledního</strong> zařazení do uživatelovy kolekce.",
    "Noone has this xWG in his collection." => "Toto xWG nikdo nemá ve své kolekci.",

    "Wants" => "Shání",
    "Users who wants this xWG." => "Uživatelé, kteří shání toto xWG.",
    "Noone wants this xWG." => "Toto xWG nikdo neshání.",

    "Doesn't want" => "Nechce",
    "Users who don't want this xWG." => "Uživatelé, kteří toto xWG nechtějí.",
    "There is noone who don't want this xWG." => "Není nikdo, kdo by toto xWG nechtěl.",

    // Your collection information on the right side
    "You must first sign in to access the collection." => "Pro přístup ke kolekci se musíte přihlásit.",
    "Collection" => "Kolekce",
    "Year" => "Ročník",
    "Pieces" => "Ks",
    "Pieces:" => "Kusů:",
    "Collected" => "Zařazeno",
    "Note", "Poznámka",

    // Collection information icons
    "M" => "E", // Modify
    "X" => "X", // Remove
    "Really?" => "Opravdu?",
    "You have this xWG in your collection, but more detailed information about your collection is not available." =>
        "Toto xWG máte ve své sbírce, ale podrobnější informace o kolekci nejsou k dispozici.",
    "You don't have this xWG in your collection." =>
        "Toto xWG zatím nemáte ve své sbírce.",
    "Entry has been successfully removed." => "Záznam byl úspěšně odstraněn.",

    // Collect form
    "Modify collection entry" => "Upravit záznam v kolekci",
    "Put into your collection" => "Zařadit do kolekce",
    "Number of pieces" => "Počet kusů",
    "Date of collection" => "Datum zařazení do sbírky",
    "Collect" => "Zařadit",
    "xWG has been successfully collected." => "xWG bylo úspěšně zařazeno do kolekce.",
    "Entry in the collection has been updated." => "Záznam v kolekci byl aktualizován.",

    // Offer form
    "Offer for exchange" => "Nabídnout k výměně",
    "Number of pieces for offer" => "Počet kusů k výměně",
    "By setting this number to higher value than 0, your xWG will be made available for exchange." =>
        "Nastavením tohoto čísla na hodnotu vyšší než 0 se xWG začne zobrazovat ve vašem profilu jako k dispozici pro výměnu.",
    "Optional comment, that will be displayed together with your offer." =>
        "Volitelná poznámka, která se zobrazí zájemcům o výměnu tohoto CWG.",
    "Save" => "Uložit",
);
