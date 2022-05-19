<?php
    $paragrafo = "all'interno di questo paragrafo sono contenute delle parole che vanno censurate";

    echo "<pre>";
    var_dump($paragrafo);
    echo "</pre>";

    $parola = $_GET["parola"];

    $paragrafo_censurato = str_replace($parola, "***", $paragrafo);

    if (strlen($parola) != 0){

        echo "<pre>";
        var_dump($paragrafo_censurato);
        echo "</pre>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad words</title>
</head>
<body>
    
</body>
</html>