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
        "Toto xWG nemôžete vyradiť zo zbierky týmto spôsobom, pretože k nemu máte vedené podrobnejšie informácie.",
    "xWG does not exists." => "xWG neexistuje.",
    "I offer" => "Ponúkam",
    "Your offer has been removed." => "Ponuka bola odstránená.",
    "Your offer has been updated." => "Ponuka bola aktualizovaná.",
    "I want" => "Zháňam",
    "You were removed from list of users who wants this xWG." => "Boli ste vyradení zo zoznamu používateľov, ktorí toto xWG chcú.",
    "You were placed to the list of users who wants this xWG." => "Boli ste zaradení do zoznamu používateľov, ktorí toto xWG chcú.",
    "There has been an error while processing your request." => "Vyskytla sa chyba pri spracovaní vašej požiadavky.",
    "I don't want" => "Nechcem",
    "You were removed from list of users who don't want this xWG." => "Boli ste vyradení zo zoznamu používateľov, ktorí toto xWG nechcú.",
    "You were placed to the list of users who don't want this xWG." => "Boli ste zaradení do zoznamu používateľov, ktorí toto xWG nechcú.",
    // CWG details
    "Category:" => "Kategória:",
    "Category" => "Kategória",
    "All together" => "Všetko spolu",
    "Show xWGs classified with the same criteria as this one." => "Zobraziť xWG, ktoré sú zaradené do rovnakých kategórií ako toto.",
    "Show xWGs that are classified under %s: %s." => "Zobrazí xWG, ktoré sú zaradené do %s %s.",
    "Name" => "Názov",
    "Version" => "Verzia",
    "Version:" => "Verzia:",
    "Catalogue number:" => "Katalógové číslo:",
    "Cat. no.:" => "Kat. číslo:",
    "Cat. no." => "Kat. číslo",
    "Uncatalogized xWG" => "Nezaradené xWG",
    "Added by:" => "Pridal:",
    "Added:" => "Dátum zaradenia:",
    "Note:" => "Poznámka:",
    "Note" => "Poznámka",
    "Profile:" => "Profil:",
    "here" => "sem",
    // Tabs below CWG details
    "Offers" => "Ponúka",
    "User" => "Používateľ",
    "Users, offering this xWG for exchange" => "Používatelia ponúkajúci toto xWG na výmenu",
    "Noone offers this xWG for exchange." => "Toto xWG nikto neponúka na výmenu.",
    "Owns" => "Má v kolekci",
    "Users, which has this xWG in their collection." => "Používatelia, ktoré majú toto xWG vo svojej zbierke",
    "Date" => "Dátum",
    "%d people" => "%d ľudí",
    "%d%s pieces" => array(
        0 => "%d%s kusov",
        1 => "%d%s kus",
        2 => "%d%s kusy",
        3 => "%d%s kusy",
        4 => "%d%s kusy",
        5 => "%d%s kusov",
    ),
    "User hasn't provided number of pieces he has in his collection. This number therefore might not be accurate." =>
        "Pri tomto xWG nemá používateľ uvedené informácie o počte kusov, takže toto číslo nemusí presne zodpovedať.",
    "You didn't provided number of pieces for this CWG." =>
        "Pri tomto xWG nemáte uvedené informácie o počte kusov.",
    "In the Date column is date of <strong>last</strong> addition to user's collection." =>
        "V stĺpčeku Dátum je uvedený dátum <strong>posledného</strong> zaradenia do používateľovej zbierky.",
    "Noone has this xWG in his collection." => "Toto xWG nikto nemá vo svojej zbierke.",
    "Wants" => "Zháňa",
    "Users who wants this xWG." => "Používatelia, ktorí zháňajú toto xWG.",
    "Noone wants this xWG." => "Toto xWG nikto nezháňa.",
    "Doesn't want" => "Nechce",
    "Users who don't want this xWG." => "Používatelia, ktorí toto xWG nechcú.",
    "There is noone who don't want this xWG." => "Nie je nikto, kto by toto xWG nechcel.",
    // Your collection information on the right side
    "You must first sign in to access the collection." => "Pre prístup k zbierke sa musíte prihlásiť.",
    "Collection" => "Zbierka",
    "Year" => "Ročník",
    "Pieces" => "Ks",
    "Pieces:" => "Kusov:",
    "Collected" => "Zaradené",
    "Note", "Poznámka",
    // Collection information icons
    "M" => "E", // Modify
    "X" => "X", // Remove
    "Really?" => "Naozaj?",
    "You have this xWG in your collection, but more detailed information about your collection is not available." =>
        "Toto xWG máte vo svojej zbierke, ale podrobnejšie informácie o zbierke nie sú k dispozícii.",
    "You don't have this xWG in your collection." =>
        "Toto xWG zatiaľ nemáte vo svojej zbierke.",
    "Entry has been successfully removed." => "Záznam bol úspešne odstránený.",
    // Collect form
    "Modify collection entry" => "Upraviť záznam v zbierke",
    "Put into your collection" => "Zaradiť do zbierky",
    "Number of pieces" => "Počet kusov",
    "Date of collection" => "Dátum zaradenia do zbierky",
    "Collect" => "Zaradiť",
    "xWG has been successfully collected." => "xWG bolo úspešne zaradené do zbierky.",
    "Entry in the collection has been updated." => "Záznam v zbierke bol aktualizovaný.",
    // Offer form
    "Offer for exchange" => "Ponúknuť na výmenu",
    "Number of pieces for offer" => "Počet kusov na výmenu",
    "By setting this number to higher value than 0, your xWG will be made available for exchange." =>
        "Nastavením tohto čísla na hodnotu vyššiu než 0 sa xWG začne zobrazovať vo vašom profile ako k dispozícii na výmenu.",
    "Optional comment, that will be displayed together with your offer." =>
        "Voliteľná poznámka, ktorá sa zobrazí záujemcom o výmenu tohto xWG.",
    "Save" => "Uložit",
);
