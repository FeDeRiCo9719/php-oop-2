<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditariet√† dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
require_once __DIR__ . '/classes/users_classes/User.php';
require_once __DIR__ . '/classes/users_classes/UserPremium.php';

$user_1 = new User("Alberto","Rossi","AlbertoRossi@gmail.com",3318723685,"CartaDiCredito");
echo "<h2>{$user_1->getNome()}</h2>";
// $user_2 = new User();

$userPremium_1 = new UserPremium("Marco","Verdi","MarcoVerdi@gmail.com",3353953005,"CartaDiCredito");
echo "<h2>{$userPremium_1->getNome()}</h2>";
var_dump($userPremium_1);



