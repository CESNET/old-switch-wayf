<?php

global $wayfUrl;

$langStrings['cs'] = array(

'title' => 'Volba domovské organizace',
'header' => 'Zvolte svou domovskou organizaci',
'help' => 'Nápověda',
'make_selection' => 'Musíte zvolit vaildiní domovskou organizaci.',
'settings' => 'Výchozí domovská organizace pro tento prohlížeč',
'permanent_select_header' => 'Nastavení výchozí domovské organizace',
'permanent_cookie' => 'Zde mužete nastavit <strong>výchozí domovskou organizaci</strong> pro tento prohlížeč. Po nastavení výchozí domovské organizace budete k ní automaticky přesměrováni pokaždé, když přistoupíte k chráněnému zdroji. Výchozí domovskou organizaci nenastavujte, pokud vlastníte účty ve více organizací.',
'permanent_cookie_notice' => 'Nastavením výchozi domovské organizace odpadá potřeba volit domovskou organizaci při přístupu k chráněným zdrojům z tohoto prohlížeče.<br />Výchozí nastavení:',
// JS
'permanent_cookie_note' => 'Nastavení můžete zrušit na stránce: ' . $wayfUrl,
'delete_permanent_cookie_button' => 'Zrušit',
'goto_sp' => 'Uložit a pokračovat k domovské organizaci',
'permanently_remember_selection' => 'Uložit tuto volbu nastálo.',
// JS
'confirm_permanent_selection' => 'Přejete si uložit zvolenou položku jako svou výchozí domovskou organizaci? Uložení výchozí domovské organizace může být nevhodné, pokud vlastníte účty ve více organizací.',
'save_button' => 'Uložit',
'access_target' => 'Přístup ke zdroji <tt>\'<a href="%s">%s</a>\'</tt> vyžaduje autentizaci.',
'access_host' => 'Přístup ke zdroji na serveru <tt>\'%s\'</tt> vyžaduje autentizaci.',
'select_idp' => 'Zvolte svou domovskou organizaci',
'remember_selection' => 'Uložit tuto volbu do ukončení relace prohlížeče.',
'switch_description' => '',
'invalid_user_idp' => 'Vámi odeslaná data obsahují chybu. Hodnota <tt>\'%s\'</tt> je neplatná. Platné jsou pouze následující hodnoty:',
'contact_assistance' => 'Pro podporu kontaktuje <a href="mailto:eduid-admin@eduid.cz">eduid-admin@eduid.cz</a>',
'no_arguments' => 'Nenastavené parametry!',
'arguments_missing' => 'Neplatný dotaz - chybí některé parametry <br /> Obdrženy byly následující parametry:',
'valid_request_description' => 'Aby byl dotaz platný, je potřeba správně nastavit alespoň parametry <tt>shire</tt> a <tt>target</tt>. Volitelné parametry <tt>providerID</tt>, <tt>origin</tt> a <tt>redirect</tt> lze nastavit pro automatické přesměrování k příslušné domovské organizaci v rámci aktuální relace prohlížeče',
'valid_saml2_request_description' => 'Platný SAML2 dotaz vyžaduje správně nastavit alespoň parametry <tt>entityID</tt> and <tt>return</tt>. Volitelné parametry <tt>isPassive</tt>, <tt>policy</tt> and <tt>returnIDParam</tt> lze nastavit pro automatické přesměrování k příslušné domovské organizaci v rámci aktuální relace prohlížeče',
'invalid_query' => 'Chyba: Neplatný dotaz',
'select_button' => 'Zvolit',
'login' => 'Přihlásit se',
'login_with' => 'Přihlásit se pomoci:',
'other_federation' => 'Z jinych federací',
'logged_in' => 'Přihlášení již proběhlo',
'most_used' => 'Nejčastěji využívaná domovská organizace',

'about_federation' => 'O federaci',
'policy' => 'Politika',
'contact' => 'Kontakt'

);

