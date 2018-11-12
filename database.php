<?php

/* This file contains methods to connect to DB, search for elements etc.....*/

/* Request MySQL Conf file with credentials */	
require_once("dbConf.php");

class MySQLDatabase
{
    private $connection;
    public $last_query;
   
    private $dbMenuItems="menuItems";
    public $imageCategories = array('Comidas','Bebidas','Postres');
    
 
    function __construct(){
        $this->open_connection();
//        $this->set_charset("utf8");
    }

    public function open_connection(){
        try{
            $this->connection = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        }catch(Exception $except){
            die("Unable to connect to Database");
        }
    }
    

    public function close_connection(){
        if(isset($this->connection)){
            $this->connection->close();
            unset($this->connection);
        }
    }
    
 
    public function query($sql){
        $this->last_query = $sql;
        $result = mysqli_query($this->connection, $sql);
        $this->confirm_query($result); 
        return $result;
    }
    
 
    private function confirm_query($result){
        if(!$result){
            $output = "Database query failed: " . mysqli_error($this->connection) . "<br />";
            $output .= "Last MySQL Query: " . $this->last_query;
           die($output);  
        }
    }
   
    public function getNombreBar($codigo) {
        $result = $this->query("SELECT Nombre FROM `Bares` WHERE codigo=".$codigo);
        return ( $this->fetch_array($result)['Nombre']);
    }
    
    public function pedirMozo ($mesa, $bar, $tipo) {
//        $result = $this->query("SELECT Nombre FROM `Bares` WHERE codigo=".$codigo);
        $sql="INSERT INTO `Pedidos`(`codigoPedido`, `codigoBar`, `estado`, `mesa`, `tipoPedido`, `hora`) VALUES (NULL,".$bar.",1,".$mesa.",'".$tipo."',NULL)";
//echo "pedimos el mozo con la sentencia ".$sql."<br>";        
        $result = $this->query($sql);
        if (!$result){
            die ("no hubo resultado con el query");
        }
        
        return true;
    }

    public function fetch_array($result){
        return mysqli_fetch_array($result);
    }
    
    public function find_by_query($query=""){
//        global $database;
//        $this->set_charset("utf8");
        $result = $this->query($query);
        $arrayWithData = array();
        while($row = $this->fetch_array($result)){
            $arrayWithData[]=$row;
        }
        $this->close_connection();
        return $arrayWithData;   
    }
        
    public function ejecutarConsulta($query=""){
        $conn = mysqli_connect($servername, $username, $password, $database);
        mysqli_set_charset($conn, "utf8");
    }

    public function findMenuItem($codigoBar){
        global $database;
//        $result = $database->query("SELECT * FROM ".$this->dbMenuItems." ORDER BY id ASC");
         $result = $database->query("SELECT category FROM `shopping_items` WHERE codigoBar=".$codigoBar." group by category");
        $object_array = array();

        while($row = $database->fetch_array($result)){
            $object_array[]=$row;
        }
        
        return $object_array; 
        $this->close_connection();
    }    
    

    public function getFileCategories(){
        $categories = $this->imageCategories;
        return $categories;
    }      
}

$database = new MySQLDatabase();






?>