<?php
class Foo {
    public $title = '';
    public $img;
    public $description;
   
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
   
    public function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }
}

?>