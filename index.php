<?php
    include ('dbconnect.php');
    // database->

    $reference = $database->getReference('test');
    echo  $reference->getValue();;
?>
<h1>test</h1>