<?php
    require_once './PHP_CLASSES/DatabaseInterfaceRetrieveData.php';
    
    //Check if database is connected, otherwise redirect to error page (must be done before DOCTYPE)
    $db = new DatabaseInterface();
    //echo "Errore: " . $e->getMessage();
    header ('Content-type: text/html; charset=ISO-8859-1');
    //header('Location: '.'./WebPages/error.php?errore=database');
    //die();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="WebsiteThemes/websiteTheme.css">

        <title>Seagull review</title>
    </head>
    
    <body class="bg-body">
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-div">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">
                    <img src="/img/logobetter.svg" class="img-fluid" alt="Icon">
                </a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- End of navbar -->
        
        <!-- Container for search bar -->
        <div class="container w-50 mt-3 rounded h-50 bg-div mx-auto">
            <form class="form-inline my-2 my-lg-0 justify-content-center" action="" method="GET">
                <input class="form-control mr-sm-2 mt-1 mb-1" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 mt-1 mb-1 bg-btn" type="submit">Search</button>
            </form>
        </div>
        <!-- End of container for search bar -->
        
        
        <!-- Container for bottom objects -->
        <div class="container-fluid pt-3" mt-10>
            <div class="row">
        
        <!-- Container for media objects -->
        <div class="col bg-light justify-content-md-center">
                <div class="card-deck card-deck-padding">
        
        <!-- Filled search bar and found tv series -->
        <?php
            //Check if search variable is set
        if(isset($_GET["search"]) || $_GET["search"]=''){
            //If search variable is set get query results and show them
            $TV_serie_name = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING); //Data filtering before everything!
            $tvseries = $db->searchTVSeriesByName($TV_serie_name);
            foreach ($tvseries as $element) {
                $element->writeBootstrapCard();
            }
        ?>
        
                <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134739398-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-134739398-2');
        </script>

    
    </body>
</html>
        
        
        <!-- Empty search bar and latest tv series -->
        <?php } 
            //If search variable is NOT set get latest tv series query results and show them
            else {
                
                //GET LATEST TV SERIES
                $tvseries = $db->getLatestTVSeries();
                foreach ($tvseries as &$element) {
                    $element->writeBootstrapCard();
                }
        ?>
        
            </div>
        </div>
        </div>
        </div>
        
        
        
                <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134739398-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-134739398-2');
        </script>

    
    </body>
</html>
        
        
        <?php }
        ?>
        


