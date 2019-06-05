<?php
require_once './PHP_CLASSES/TVSerieClass.php';
require_once './PHP_CLASSES/ReviewClass.php';

/**
 * Description of DatabaseInterface
 * Class that allows interfacing with the database to retrieve data for the TV series. Uses PHP PDO.
 */
class DatabaseInterface {
    //Database connection
    static private $db;
    
    //Constructor
    public function __construct() {
        $hostname = "localhost";
        $dbname = "Seagulldb";
        $user = "alessandro";
        $pass = "asterisco****";
        self::$db = mysqli_connect($hostname,$user,$pass,$dbname);
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    
    //Destructor
    public function closeConnection() {
        if (isset($this->db)) {
            $this->db = NULL;
        }
    }
    
    
    //Retrieve all data about TV serie given serie ID
    public function getTVSerieInformation($id){
        $query = "SELECT * FROM Elemento WHERE idElemento = ".$id." ;";
        $result = self::$db->query($query) or die(self::$db->error);
        $row = $result->fetch_assoc();
        $element_card = new TVSerieClass($row["idElemento"], $row["titolo"], $row["immagine"], $row["anno_pubblicazione"], $row["descrizione"], $row["FK_tipo"], $row["durata_media"]);
        return $element_card;
    }
    
    //Search all TV series given a search string
    public function searchTVSeriesByName($UppercaseName){
        //Convert title to lowercase
        $name = strtolower($UppercaseName);
        //Search for tv series with that title ( https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php )
        //$query = "SELECT * FROM Elemento WHERE titolo LIKE '%?%' AND ? = ?";
        $query = "SELECT * FROM Elemento, Serietv WHERE titolo LIKE '%".$name."%' AND idElemento = idSerietv;";
        //$stmt = $this->db->prepare($query);
        //$stmt = self::$db->prepare($query);
        //$momma = '';
        //$stmt->bind_param("sss", $name, $momma, $momma);
        //$stmt->execute();
        //$result = $stmt->get_result();
        //I create an array of tv series
        $result = self::$db->query($query) or die(self::$db->error);
        $tvseries = array();
        //$tvseries = array();
        //while ($row = $result->fetch_assoc()) {
        while ($row = $result->fetch_assoc()) {
            $element_card = new TVSerieClass($row["idElemento"], $row["titolo"], $row["immagine"], $row["anno_pubblicazione"], $row["descrizione"], $row["FK_tipo"], $row["durata_media"]);
            //I add the new element to the array
            $tvseries[] = $element_card;
        }
        return $tvseries;
    }
    
    //Get latest released tv series (latest 10 id's)
    public function getLatestTVSeries(){
        $query = "SELECT * FROM Elemento ORDER BY idElemento LIMIT 8";
        $result = self::$db->query($query) or die(self::$db->error);
        $tvseries = array();
        while ($row = $result->fetch_assoc()) {
            $element_card = new TVSerieClass($row["idElemento"], $row["titolo"], $row["immagine"], $row["anno_pubblicazione"], $row["descrizione"], $row["FK_tipo"], $row["durata_media"]);
            //I add the new element to the array
            $tvseries[] = $element_card;
        }
        return $tvseries;
        
    }
    
    //Get reviews given a tv serie ID
    
}
