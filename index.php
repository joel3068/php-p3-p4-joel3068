<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam1 = trim($_POST["naam1"]);
    $naam2 = trim($_POST["naam2"]);
    $leeftijd1 = trim($_POST["leeftijd1"]);
    $leeftijd2 = trim($_POST["leeftijd2"]);


    if (empty($naam1) || empty($naam2) || empty($leeftijd1) || empty($leeftijd2)) {
        die("Alle velden moeten worden ingevuld.");
    }


    if (!preg_match("/^[a-zA-Z]+$/", $naam1) || !preg_match("/^[a-zA-Z]+$/", $naam2)) {
        die("Namen mogen alleen letters bevatten.");
    }

    if (!ctype_digit($leeftijd1) || !ctype_digit($leeftijd2)) {
        die("Leeftijd moet een geheel getal zijn.");
    }


    $leeftijd1 = (int)$leeftijd1;
    $leeftijd2 = (int)$leeftijd2;

    echo "<p>Het formulier is correct ingevuld.</p>";
    echo "<p>{$naam1} is {$leeftijd1} jaar oud.</p>";
    echo "<p>{$naam2} is {$leeftijd2} jaar oud.</p>";

    if ($leeftijd1 > $leeftijd2) {
        $verschil = $leeftijd1 - $leeftijd2;
        echo "<p>{$naam1} is de oudste van de twee.</p>";
        echo "<p>{$naam1} is {$verschil} jaar ouder dan {$naam2}.</p>";
    } elseif ($leeftijd2 > $leeftijd1) {
        $verschil = $leeftijd2 - $leeftijd1;
        echo "<p>{$naam2} is de oudste van de twee.</p>";
        echo "<p>{$naam2} is {$verschil} jaar ouder dan {$naam1}.</p>";
    } else {
        echo "<p>{$naam1} en {$naam2} zijn even oud.</p>";
        echo "<p>Zij zijn beiden {$leeftijd1} jaar.</p>";
    }
}
?>
