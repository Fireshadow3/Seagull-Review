<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $error = filter_input(INPUT_GET, 'errore', FILTER_SANITIZE_STRING);
        switch ($error) {
            case "database":
                echo "Sembra che ci sia stato un errore con la connessione al database! Mi disp :(";
                break;
            case "other":
                echo "other";
                break;
        }
        ?>
    </body>
</html>
