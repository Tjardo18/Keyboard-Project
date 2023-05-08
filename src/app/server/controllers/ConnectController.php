<?php

class ConnectController
{    
    protected $debug_mode = false;
    protected $db;

    public function __construct()
    {
        try
        {
            $this->db = new PDO("mysql:host=localhost;port:3306;dbname=skck;","root","",
            array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
            
            if($this->debug_mode)
                echo "[DEBUG]: database connected to the server<br>";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();

            if($this->debug_mode)
                die("[DEBUG]: database could not be connected to the server!<br>");
        }
    }

    public function execute($query, $array = null)
    {
        $prepared_statement = $this->db->prepare($query);
        $prepared_statement->execute($array);

        return $prepared_statement;
    }

    public function setDatabase(string $database)
    {        
        $this->db->exec("use $database;");
        
        if($this->debug_mode) 
            echo "[DEBUG]: database set to $database<br>";
    }
};