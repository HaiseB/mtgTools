<?php

include_once('toolboxfunctions.php');
include_once('card.php');
include_once('jsonTalker.php');

session_start();

$decklistName = array_key_exists('decklist', $_GET) ? $_GET['decklist'] : 'allCards';
define("DECKLIST_NAME", $decklistName);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST;

    $card = new card();
    $card->setDataFromForm($data);
    $cardToArray = $card->getCardForExport();

    $decklist = jsonTalker::addCardToDecklist($decklistName, $cardToArray);
    $_SESSION["log"] .= "Card (".$card->getName().") added to $decklist successfully";
}

if (!empty($_SESSION["log"])) {
    d($_SESSION["log"]);
    $_SESSION["log"] = '';
}

include_once('addCardForm.php');
include_once('decklist.php');
