<?php
$setting = \App\Models\Settings::first();
return [
    "to_the_menu" => "Ich will bestellen!",
    "company_name" => "Firmennamen",
    "partners_sent" => "Vielen Dank für deine Nachricht - wir werden uns sehr bald bei dir melden.",
    "ort" => "Ort",
    "partners" => "UNMEAT Business Partner",
    "to_the_cart" => "In den Warenkorb",
    "special_holiday" => "<span style='padding-right:60px'>From 27/12 to 30/12:</span> 12:00 - 17:30 Uhr.<br>
    <span style='padding-right:182px;'>31/12:</span> 12:00 - 17:00 Uhr.<br>
    <span style='padding-right:109px;'>01/01 & 02/01:</span> Closed",
    "about_unmeat_email" => "Let's UNMEAT the world!",
    "address" => "Deine Adresse",
    "after_15_minutes" => "Nach 15 Minuten bei No-show geben wir den Tisch wieder frei.",
    "after_discount" => "Rabatt: Gesamtbetrag {$setting->currency} :total_amount - UNMEAT Promotion {$setting->currency} :balance = {$setting->currency} :discount.",
    "after_discount_prom" => "",
    "after_tomorrow" => "Übermorgen",
    "agree_contact" => "Mit dem Absenden erklärst du dich mit den Nutzungsbedingungen der UNMEAT Website und unseren Datenschutzrichtlinien einverstanden.",
    "all_selected" => "Alles",
    "already_in_community" => "Ich gehöre bereits zur UNMEAT Community.",
    "amount" => "Betrag",
    "attend" => "Anmelden",
    "attend_message" => "Vielen Dank, dass du dich registriert hast und dabei mithilfst, dass diese schwierige Phase bald vorüber ist. Deine Daten werden nach zwei Wochen automatisch gelöscht.",
    "availble_time" => "Wir haben von 10:00 Uhr bis 22:00 Uhr geöffnet.",
    "birth_date" => "Geburtstag",
    "boncard_title_1" => "Bezahlen mit einem UNMEAT Voucher:",
    "boncard_title_2" => "Bitte gib die letzten acht Ziffern der Kartennummer (hinten ganz oben) ein.",
    "booking_mail_details_accept" => "Vielen Dank für deine Reservation. <br>Dein Tisch ist reserviert unter:",
    "booking_mail_details_reject" => "So sorry! Leider haben wir keinen freien Tische mehr für diese Zeit. <br>Ruf uns doch kurz an:",
    "booking_sent" => "Vielen Dank für deine Reservation - wir werden uns sehr bald bei dir melden!",
    "booking_time" => "Booking time",
    "bookings" => "Reservationen",
    "bookings_h1" => "Du möchtest einen Tisch reservieren?",
    "browse" => "Weiter",
    "cancel" => "Abbrechen",
    "card_holder" => "Karteninhaber",
    "card_number" => "Kartennummer",
    "change_password" => "Neues Passwort",
    "check_price" => "Lieferkosten abfragen",
    "check_price_again" => "Neu berechnen",
    "checkout" => "Checkout",
    "city" => "Stadt",
    "click_to_verify" => "Klick hier, um deine E-Mail-Adresse zu bestätigen.",
    "color" => "Color",
    "community" => "Community",
    "confirm_password" => "تأكيد كلمة المرور الجديدة",
    "confirm_register_policy" => "Mit dem Anlegen eines Kontos stimmst du den Allgemeinen Geschäftsbedingungen der UNMEAT Website und unseren Datenschutzrichtlinien zu.",
    "contact" => "Kontakt",
    "continue_explore" => "Weiter",
    "country" => "Land",
    "dashboard" => "Promotions & News",
    "date" => "Date",
    "date_time" => "Datum und Uhrzeit",
    "day" => "Tag",
    "day_cart" => "Tag",
    "delivery_costs" => "Lieferkosten:",
    "delivery_duration" => "Voraussichtliche Lieferzeit",
    "delivery_fees" => "Lieferkosten",
    "delivery_tracking" => "Delivery Tracking",
    "delivery_type" => "Lieferart:",
    "detailed_address" => "Detaillierte Instruktionen für die Lieferung zu dir.",
    "details" => "Details",
    "discount_bigger" => "Das Kartenguthaben {$setting->currency} :balance reicht aus, um die Bestellung zu bezahlen. Der Restbetrag bleibt auf der Karte.",
    "discount_bigger_prom" => "The Promotion code balance {$setting->currency} :balance is sufficient to pay the order. The remaining amount remains on the Promotion code.",
    "divers" => "Divers",
    "download" => "Herunterladen",
    "edit" => "Bearbeiten",
    "email_address" => "E-Mail-Adresse",
    "enter_zip" => "Bitte gib zuerst deine PLZ ein:",
    "error" => "Mist, etwas ging schief!",
    "every_day" => "<span style='float:left'>Dienstag bis Freitag:</span><span style='margin-left:70px'>11:00 - 14:00 Uhr und 17:00 - 21:00 Uhr.</span><br>\r\n    <span style='float:left'>Samstag:</span><span style='margin-left:160px'> 11:00 - 21:00 Uhr.</span><br>\r\n    <span style='float:left'>Sonntag:</span><span style='margin-left:163px'> 17:00 - 21:00 Uhr.</span>",
    "exp_month" => "Expiration Monat",
    "exp_year" => "Expiration Jahr",
    "female" => "Female",
    "first_name" => "Vorname",
    "flyer_page" => "Flyer Form",
    "forget_password" => "Passwort vergessen?",
    "free_delivery_at" => "Gratislieferung ab",
    "full_name" => "Dein vollständiger Name",
    "great" => "Grossartig!",
    "has_balance_card" => "Diese Karte enthält ein Guthaben von {$setting->currency} :balance. Der Restbetrag verbleibt auf der Karte.",
    "has_balance_qr" => "Diese Karte enthält ein Guthaben von :balance. Der Restbetrag verbleibt auf der Promotion.",
    "have_it_deliverd" => "Ich hätte es gerne geliefert.",
    "homepage" => "Startseite",
    "how_to_get_it" => "Liefern lassen oder selber abholen?",
    "how_to_pay" => "Wie möchtest du bezahlen?",
    "i_want_to_register" => "Ich will dabei sein.",
    "inc_vat" => "Inkl. MWST",
    "incorrect_address" => "Gib bitte eine korrekte Adresse an.",
    "ingredients" => "Allergene",
    "install_metamask" => "Bitte installiere MetaMask für das Wallet.",
    "invaild_qrcode" => "Dieser QrCode ist ungültig",
    "invalid_card" => "Diese Karte ist ungültig.",
    "invalid_prom" => "Dieser Promo Code ist ungültig",
    "jobs" => "Jobs",
    "jobs_at_unmeat" => "Jobs bei UNMEAT",
    "join_unmeat" => "<h3>Join the UNMEAT <br> Community</h3>",
    "last_name" => "Nachname",
    "login" => "Login",
    "logout" => "Logout",
    "logout_from_wallet" => "Logout von deinem Wallet",
    "male" => "M",
    "menu_delivery_limitaion" => "Lieferdienst nur für Zürich und mit einem Mindestbestellwert {$setting->currency}(30-40) je nach Standort.",
    "menu_ordering" => "Menu",
    "merchandising" => "Shop",
    "message" => "Nachricht",
    "message_sent" => "Vielen Dank, dass du uns kontaktiert hast - wir werden uns sehr bald bei dir melden.",
    "minimum_delivery_time" => "Mindestlieferzeit:",
    "minutes" => "Minuten",
    "mm" => "MM",
    "mobile_number" => "Mobile-Nr.",
    "new_password" => "كلمة المرور الجديدة",
    "nft_tab" => "NFTs",
    "no_balance_card" => "Diese Karte enthält leider kein Guthaben.",
    "no_bookings" => "Du hast keine Bookings!",
    "no_orders" => "Du hast keine Bestellungen!",
    "number" => "Nummer",
    "nutrition" => "Nährwertangaben",
    "old_password" => "Altes Passwort",
    "old_password_wrong" => "Das alte Passwort ist nicht korrekt!",
    "on_tour" => "On Tour",
    "on_tour_sentence" => "Wir lieben Openairs and Musik. Wir freuen uns dich dort zu treffen. ",
    "only_delivery_time" => "Du kannst nur während unseren Öffnungszeiten bei uns bestellen. Vielen Dank.",
    "opening_times_delivery" => "Bestellzeiten Delivery:",
    "or_login" => "<p>Or <a class='pointer' data-toggle='modal' data-target='#login'>Login.</a></p>",
    "order" => "Bestellen",
    "order_amount" => "Bestellung Betrag",
    "order_number" => "Bestellnummer",
    "order_value" => "Lieferwert:",
    "our_menu" => "Unser Menu",
    "outside_address" => "Leider befindet sich deine Adresse ausserhalb des Dabbavelo-Liefergebiets.",
    "password" => "Passwort",
    "password_dont_match" => "Passwörter müssen matchen!",
    "pay" => "Bezahlen",
    "pay_with_creditcard" => "Bezahlen mit Kreditkarte:",
    "people" => "Wie viele Leute (ab 10 Personen bitte anrufen)?",
    "personal_info" => "Persönliche Angaben",
    "pick_time_1" => "Die gewählte Zeit muss mind. ",
    "pick_time_2" => " Minuten nach der aktuellen Zeit und innerhalb unseren Öffnungszeiten und Lieferzeiten.",
    "pick_up" => "Ich hole es selber ab.",
    "pick_up_sentence" => "Ich möchte meine Bestellung um diese Zeit abholen:",
    "pick_up_time" => "Abholzeit",
    "pick_up_time_d" => "Lieferung",
    "points" => "Punkte",
    "preview" => "Vorschau",
    "privacy" => "Privacy Policy",
    "products" => "Produkte",
    "profile" => "Profil",
    "prom_title_1" => "Hast du einen Promo Code?",
    "provision_fee" => "Provision",
    "qr_code" => "QR-Code",
    "re_enter_password" => "Passwort nochmals eingeben.",
    "receipt" => "Dein Beleg",
    "redeem" => "Einlösen",
    "register" => "Register",
    "relax" => "Jetzt kannst du dich entspannen. Wir sorgen dafür, dass deine Bestellung so schnell wie möglich bei dir eintrifft!",
    "relax_pickup" => "Wir beginnen pünktlich mit der Zubereitung der Bestellung. Wir freuen uns auf dich!",
    "renter_new_password" => "Passwort wiederholen.",
    "reset_password" => "اعادة تعيين كلمة المرور",
    "restuarant_closed" => "Der Laden ist geschlossen",
    "secondary_title" => "Zweiter Titel",
    "selected" => "Ausgewählt",
    "send" => "Absenden",
    "send_qr_via_email" => "Sollen wir dir den QR Code mailen?",
    "send_reset_link" => "إرسال رابط إعادة تعيين كلمة السر",
    "sent_qr_success" => "Der QR Code wurde soeben an diese E-Mail-Adresse gesendet: :email",
    "settings" => "Einstellungen",
    "size" => "Size",
    "sorry_we_dont_deliver_here" => "Entschuldigung, wir liefern nicht an diese Adresse!",
    "status" => "Status",
    "street" => "Strasse",
    "submit" => "Absenden",
    "successfuly_updated" => "Deine Angaben wurden erfolgreich aktualisiert!",
    "successfuly_updated_password" => "Dein Passwort wurde erfolgreich geändert!",
    "team" => "Team",
    "thank_you" => "Vielen Dank!",
    "thank_you_for_attend" => "Danke!",
    "thanks_for_order" => "Vielen Dank für deine Bestellung!",
    "thanks_for_your_booking" => "Vielen Dank für deine Reservation!",
    "thanks_for_your_booking_reject" => "Sorry, leider alles besetzt!",
    "thanks_for_your_booking_subject_email" => "UNMEAT RESERVATION CONFIRMATION",
    "thanks_for_your_order" => "Vielen Dank für deine Bestellung.",
    "thumb" => "Thumbnail",
    "time_cart" => "Zeit",
    "today" => "Heute",
    "tomorrow" => "Morgen",
    "total" => "TOTAL",
    "total_chf" => "Total ",
    "total_d" => "Du zahlst:",
    "try_again" => "Bitte nochmals versuchen!",
    "unmeat_community" => "UNMEAT Community",
    "unmeat_community_p" => "Schon bald werden wir die UNMEAT Community aktivieren. Wenn du möchtest, kannst du dich bereits jetzt dafür registrieren.",
    "unmeat_on_tour" => "UNMEAT on tour",
    "ustmember_settings" => "UST-Einstellungen",
    "want_to_add_to_mailchimp" => "Möchtest du unseren grossartigen Newsletter auch erhalten?",
    "we_are_hiring" => "Wir suchen dich!",
    "we_will_send_you_receipt" => "Die Quittung kommt per E-Mail.",
    "welcome" => "Welcome",
    "when_deliver" => "Wann dürfen wir liefern?",
    "with" => "Upgrade ... ",
    "without" => "Downgrade ... ",
    "wrong_captcha" => "ReCaptcha Validieren fehlgeschlagen - bitte wiederholen.",
    "wrong_cred_login" => "Deine Logindaten passen nicht.",
    "wrong_credentials" => "Falscher Username oder Passwort - bitte versuch es noch einmal.",
    "wrong_datetime_format" => "Ungültige Zeit, bitte versuch es erneut!",
    "wrong_minimum_amount" => "Basierend auf deinem Standort liegt der Mindestbestellwert bei {$setting->currency}",
    "wrong_pick_up" => "Die Abholzeit muss mind. 15 Minuten nach der aktuellen Zeit und innerhalb unseren Öffnungszeiten liegen.",
    "wrong_reserv" => "Die Reservierung muss mindestens 60 Minuten nach der aktuellen Uhrzeit und während unserer Öffnungszeiten erfolgen, die du in der Fußzeile am unteren Rand der Seite findest!",
    "wrong_reserv_for_app" => "Die Reservierung muss mindestens 60 Minuten nach der aktuellen Uhrzeit und während unserer Öffnungszeiten erfolgen!",
    "yes" => "Ja",
    "you_love_it" => "Hast du Fragen, Anregungen oder Kritik für uns? Dann her damit!",
    "you_love_it_bookings" => "Bitte benutze das Formular hier.",
    "your_bookings" => "Your Bookings",
    "your_cart" => "Dein Warenkorb",
    "your_cart_most_include" => "Um diesen Promo Code verwenden zu können, muss das Produkt «:product» im Warenkorb enthalten sein.",
    "your_comments" => "Möchtest du uns noch etwas sagen?",
    "your_contact" => "Dein Kontakt",
    "your_data_will_be_deleted" => "Deine Daten werden nach 14 Tagen gelöscht.",
    "your_delivery_address" => "Deine Lieferadresse",
    "your_delivery_address_new" => "Lieferadresse",
    "your_email" => "Deine E-Mail-Adresse",
    "your_full_name" => "Vollständiger Name",
    "your_mobile" => "Deine Mobile-Nr.",
    "your_order" => "Deine Bestellung",
    "your_order_d" => "Bestellübersicht",
    "your_orders" => "Deine Bestellungen",
    "your_points" => "Deine aktuellen Punkte",
    "your_qr" => "Ihr QR-Code",
    "yyyy" => "JJJJ",
    "zip" => "PLZ",
    "zip_required" => "Bitte gib deine PLZ ein."
];
