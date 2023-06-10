<?php 
class Database{
    private $hostname = "localhost";
    private $username = "root";
    private $password = ""; 
    private $database = "oop_siswa";

    protected $db; 

    public function __construct()
    {
        $this->db = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }
}
?>