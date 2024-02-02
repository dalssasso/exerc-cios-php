<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <p>exemplo do php</p>
    <h1>
        <?php 
            date_default_timezone_set("America/sao_paulo");
            echo "hoje é dia ".date("d/m/y");
            echo "e a hora é " .date("g:i:s");
        ?>
    </h1>
</body>
</html>