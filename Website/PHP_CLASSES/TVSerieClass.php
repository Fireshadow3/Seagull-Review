<?php
/**
 * Class representing a tv serie
 */
class TVSerieClass {
    private $id;
    private $title;
    private $img;
    private $release_date;
    private $description;
    private $number_of_seasons;
    private $average_episode_time;
   
    public function __construct($id, $title, $img, $release_date, $description, $number_of_seasons, $average_episode_time) {
        $this->id = $id;
        $this->title = $title;
        $this->img = $img;
        $this->release_date = $release_date;
        $this->description = $description;
        $this->number_of_seasons = $number_of_seasons;
        $this->average_episode_time = $average_episode_time;
    }
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getImg() {
        return $this->img;
    }

    function getRelease_date() {
        return $this->release_date;
    }

    function getDescription() {
        return $this->description;
    }

    function getNumber_of_seasons() {
        return $this->number_of_seasons;
    }

    function getAverage_episode_time() {
        return $this->average_episode_time;
    }
    
    /**
     * Writes the element in bootstrap card style
     */
    function writeBootstrapCard(){
        echo "<div class=\"card\">";
        echo "<img src=\"getImage.php?id=";
        echo $this->id;
        echo "\" class=\"card-img-top\" />";
        //echo "<img  src="..." alt="Card image cap">"
        echo "<div class=\"card-body\">";
        echo "<h5 class=\"card-title\">";
        echo $this->title."</h5>";
        echo "<p class=\"card-text\">";
        echo $this->description;
        echo "</p>";
        echo "</div>";
        echo "</div>";
    }

}

?>