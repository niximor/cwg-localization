# Localization files for cwg.gcm.cz
This repository contains files that are used to localize website https://cwg.gcm.cz/ into other languages.

## To start working on new language

1. Fork repository
2. Copy one of existing language directories (`cs_CZ` for example) to directory named after your new language.

   Name the directory by following schema:<br>
   `<ISO 639-1 language code>_<2 alpha ISO-3166-1 country code>`
      
   For example:
   - `en_US` for English in United states,
   - `en_AU` for English in Australia
   - `cs_CZ` for Czech in Czech Republic.

   Use https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes and https://en.wikipedia.org/wiki/ISO_3166-1 for reference.
3. Create meta file for the language - copy for example `cs_CZ.php` into file with same name as your newly created directory, only with added `.php`. extension.
  
   In this file, describe your new language.
4. Start translating.<br>
   Translate all the files in the newly created directory. See following chapter for some tips about translating.
5. Commit your changes.
6. Submit pull request.

## How to translate
The language tables are simple PHP files, that contains key-value pairs of original string and translated one. However, knowledge of PHP scripting is not required to translate.

The structure of each file is very easy.

- You can safely ignore anything, that does not look like a string pair.
- You only translate the right side of the string pair. Left side is used to lookup string in the table by the website. So don't touch the left side.
- All strings must be in quotes (`"`). If you need to include quote symbol in your translation, write `\"` instead. It will appear as single quote without the backslash on the website.
- If you need to include backslash (`\`) character in your string, write `\\` (double backslash). It will appear as single backslash on the website.
- If you need to use different spelling based on some count or number of items or similar case, use special syntax:
  ```php
  "%d items" => array(
    0 => "string for zero items",
    1 => "string for one item",
    2 => "string for two items",
    3 => "string for three and more items",
  )
  ```
  You can specify any number of different numbering options, but remember, the **last one** will be always used as default fallback if you don't specify otherwise for that number.
- Sometimes, strings contains special placeholders - `%s`, `%d` and so on. They are replaced by other text on the website.
  For everything to work correctly, your translation also must contain these special placeholders on correct position. Keep in mind, that you can't change order of the placeholders, so first one in the original string must always be first one in the translated string.
