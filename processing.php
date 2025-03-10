<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jeremiah = $_POST['jeremiah'];
    $19 = $_POST['19'];
    $divan = $_POST['divan'];
    $20 = $_POST['20'];

    
    $_SESSION['jeremiah'] = $jeremiah;
    $_SESSION['19'] = $19;
    $_SESSION['divan'] = $divan;
    $_SESSION['20'] = $20;

    echo "<h2>leeftijd:</h2>";
    echo "<p>$jeremiah is $19 jaar oud.</p>";
    echo "<p>$divan is $20 jaar oud.</p>";


    if ($19 > $20) {
        echo "<p>$jeremiah is jonger dan $divan met " . ($19 - $20) . " jaar.</p>";
    } elseif ($19 < $20) {
        echo "<p>$divan is ouder dan $jeremiah met " . ($20 - $19) . " jaar.</p>";
    } else {
        echo "<p>$jeremiah en $divan zijn even oud.</p>";
    }


    echo '<br><form action="index.php" method="POST">
            <button type="submit">Terug naar formulier</button>
          </form>';
} else {

    header("Location: index.php");
    exit();
}
?>
