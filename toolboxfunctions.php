<?php

/**
 * DEV
 */
function d(...$vars){
    $debug = debug_backtrace();

    foreach($vars as $var){
        var_dump($var);
        echo "<br>";
    }
    echo "called in " . $debug[0]["file"] . " line " . $debug[0]["line"] ."<hr>";
}

function dd(...$vars){
    d($vars);

    echo "Arret du script via l'appel de la fonction dd() (die and dump)";
    die;
}

/**
 * FORM
 */
function generateInput($type, $name) {
    if (in_array($name,TYPES)) {
        $name = 'is' . ucfirst($name);
    }
    return "<input type=\"$type\"  id=\"$name\" name=\"$name\"><label for=\"$name\">$name</label><br>";
}
