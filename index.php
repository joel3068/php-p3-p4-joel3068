<?php
session_start();

$naam1 = isset($_SESSION['jeremiah']) ? $_SESSION['jeremiah'] : "";
$leeftijd1 = isset($_SESSION['19']) ? $_SESSION['19'] : "";
$naam2 = isset($_SESSION['divan']) ? $_SESSION['divan'] : "";
$leeftijd2 = isset($_SESSION['20']) ? $_SESSION['20'] : "";


session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
</head>
<body>
    <h2>Voer namen en leeftijden in</h2>
    <form action="processing.php" method="POST">
        <label for="jeremiah">Naam 1:</label>
        <input type="text" name="jeremiah" id="jeremmiah" value="<?php echo $jeremiah; ?>" required>
        <br>
        <label for="19">Leeftijd 1:</label>
        <input type="number" name="19" id="19" value="<?php echo $leeftijd1; ?>" required>
        <br>
        <label for="divan">Naam 2:</label>
        <input type="text" name="divan" id="divan" value="<?php echo $naam2; ?>" required>
        <br>
        <label for="20">Leeftijd 2:</label>
        <input type="number" name="20" id="20" value="<?php echo $leeftijd2; ?>" required>
        <br><br>
        <button type="submit">Versturen</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
