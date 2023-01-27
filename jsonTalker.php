<?php

class jsonTalker
{
    static function getFilePath($name){
        return "./decklist/$name.json";
    }

    static function retrieveDeckList($name){
        $filePath = jsonTalker::getFilePath($name);
        if (!file_exists($filePath)) {
            dd('this decklist does not exist sorry :( ', $filePath);
        }

        $data = file_get_contents($filePath);
        return json_decode($data);
    }

    static function addCardToDecklist($decklistName, $card){
        $deckList = jsonTalker::retrieveDeckList($decklistName);

        $deckList[] = $card;

        file_put_contents(
            jsonTalker::getFilePath($decklistName), json_encode($deckList)
        );
    }
}
