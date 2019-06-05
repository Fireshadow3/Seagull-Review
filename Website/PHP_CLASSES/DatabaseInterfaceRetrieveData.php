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
        $dbname = "seagulldb";
        $user = "root";
        $pass = "";
        $this->db = mysqli_connect($hostname,$user,$pass,$dbname);
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
    
    //Search all TV series given a search string
    public function searchTVSeriesByName($UppercaseName){
        //Convert title to lowercase
        $name = strtolower($UppercaseName);
        //Search for tv series with that title ( https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php )
        $query = "SELECT * FROM Elemento WHERE titolo LIKE '%?%'";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $name);
        $stmt->execute();
        $result = $stmt->get_result();
        //I create an array of tv series
        $tvseries = array();
        while ($row = $result->fetch_assoc()) {
            $element = new CardClass($row['id'], $row['title'], $row['img'], $row['release_date'], $row['description'], $row[$number_of_seasons], $row[$average_episode_time]);
            //I add the new element to the array
            $tvseries[] = $element;
        }
        return $tvseries;
    }
    
    //Get reviews given a tv serie ID
    
}
