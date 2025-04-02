<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <?php
    require_once "dbconnect.php";
    try {
        $sQuery = "SELECT * FROM klant";
        $oStmt = $db->prepare($sQuery);
        $oStmt->execute();

        if ($oStmt->rowCount() > 0) {
            echo '<table>';
            echo '<thead>';
            echo '<td>klantid</td>';
            echo '<td>voornaam</td>';
            echo '<td>achternaam</td>';
            echo '</thead>';
            
            while ($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . $aRow['klantid'] . '</td>';
                echo '<td>' . $aRow['voornaam'] . '</td>';
                echo '<td>' . $aRow['achternaam'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Helaas, geen gegevens bekend';
        }
    } catch (PDOException $e) {
        $sMsg = '<p>
            Regelnummer: ' . $e->getLine() . '<br />
            Bestand: ' . $e->getFile() . '<br />
            Foutmelding: ' . $e->getMessage() . '
        </p>';
        trigger_error($sMsg);
    }
    
    $db = null;
    ?>
</body>
</html>
