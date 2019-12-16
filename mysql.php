<?php

class Tietokanta
    {
    
    public function __construct()
        {

            $this->db_servername = "localhost";
            $this->db_username = "root";
            $this->db_password = "";
            $this->db_name = "kauppa";
            
        }
        public function __deconstruct()
        {
        }

    public function HaeTietokoneet()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $connection = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        
        if ($connection->connect_error)
        {
            die("Ei saada yhteyttä tietokantaan.");
        }
        
        $query = "SELECT * FROM tietokoneet WHERE 1=1";
                    
        $listTuotteet = array();
        $result = $connection->query($query);
                    
        if ($result->num_rows > 0) 
        {
            
           
            while($row = $result->fetch_assoc()) {
                
                $i = $row["id"];
                $n = $row["nimi"];
                $o = $row["tiedot"];
                $p = $row["hinta"];
                $t = $row["alennus"];
                $l = $row["kuva"];
                
                $tuote = new Tuote($i,$n,$o,$p,$t,$l);
                $listTuotteet[] = $tuote;

            }
            
           
        } 
        else {
                $listTuotteet = null;
        }

        $connection->close();
                    
        return $listTuotteet;
    }

    public function HaeTuote($id)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $connection = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        
        if ($connection->connect_error)
        {
            die("Ei saada yhteyttä tietokantaan.");
        }
        
        $query = "SELECT * FROM tietokoneet WHERE id='$id'";
                    
        
        $result = $connection->query($query);
                    
        if ($result->num_rows > 0) 
        {
            
           
            while($row = $result->fetch_assoc()) {
                
                $i = $row["id"];
                $n = $row["nimi"];
                $o = $row["tiedot"];
                $p = $row["hinta"];
                $t = $row["alennus"];
                $l = $row["kuva"];
                
                $tuote = new Tuote($i,$n,$o,$p,$t,$l);
               

            }
            
           
        } 
        else {
                $listTuotteet = null;
        }

        $connection->close();
                    
        return $tuote;
    }



    public function HaeOheislaitteet()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $connection = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        
        if ($connection->connect_error)
        {
            die("Ei saada yhteyttä tietokantaan.");
        }
        
        $query = "SELECT * FROM oheislaitteet WHERE 1=1";
                    
        $listTuotteet = array();
        $result = $connection->query($query);
                    
        if ($result->num_rows > 0) 
        {
            
           
            while($row = $result->fetch_assoc()) {
                
                $i = $row["id"];
                $n = $row["nimi"];
                $o = $row["tiedot"];
                $p = $row["hinta"];
                $t = $row["alennus"];
                $l = $row["kuva"];
                
                $tuote = new Tuote($i,$n,$o,$p,$t,$l);
                $listTuotteet[] = $tuote;

            }
            
           
        } 
        else {
                $listTuotteet = null;
        }

        $connection->close();
                    
        return $listTuotteet;
    }


    public function HaeKomponentit()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $connection = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        
        if ($connection->connect_error)
        {
            die("Ei saada yhteyttä tietokantaan.");
        }
        
        $query = "SELECT * FROM komponentit WHERE 1=1";
                    
        $listTuotteet = array();
        $result = $connection->query($query);
                    
        if ($result->num_rows > 0) 
        {
            
           
            while($row = $result->fetch_assoc()) {
                
                $i = $row["id"];
                $n = $row["nimi"];
                $o = $row["tiedot"];
                $p = $row["hinta"];
                $t = $row["alennus"];
                $l = $row["kuva"];
                
                $tuote = new Tuote($i,$n,$o,$p,$t,$l);
                $listTuotteet[] = $tuote;

            }
            
           
        } 
        else {
                $listTuotteet = null;
        }

        $connection->close();
                    
        return $listTuotteet;
    }

    public function HaeKomponentti($id)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $connection = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        
        if ($connection->connect_error)
        {
            die("Ei saada yhteyttä tietokantaan.");
        }
        
        $query = "SELECT * FROM komponentit WHERE id='$id'";
                    
        
        $result = $connection->query($query);
                    
        if ($result->num_rows > 0) 
        {
            
           
            while($row = $result->fetch_assoc()) {
                
                $i = $row["id"];
                $n = $row["nimi"];
                $o = $row["tiedot"];
                $p = $row["hinta"];
                $t = $row["alennus"];
                $l = $row["kuva"];
                
                $tuote = new Tuote($i,$n,$o,$p,$t,$l);
               

            }
            
           
        } 
        else {
                $listTuotteet = null;
        }

        $connection->close();
                    
        return $tuote;
    }
   

    public function HaeOheislaite($id)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $connection = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        
        if ($connection->connect_error)
        {
            die("Ei saada yhteyttä tietokantaan.");
        }
        
        $query = "SELECT * FROM oheislaitteet WHERE id='$id'";
                    
        
        $result = $connection->query($query);
                    
        if ($result->num_rows > 0) 
        {
            
           
            while($row = $result->fetch_assoc()) {
                
                $i = $row["id"];
                $n = $row["nimi"];
                $o = $row["tiedot"];
                $p = $row["hinta"];
                $t = $row["alennus"];
                $l = $row["kuva"];
                
                $tuote = new Tuote($i,$n,$o,$p,$t,$l);
               

            }
            
           
        } 
        else {
                $listTuotteet = null;
        }

        $connection->close();
                    
        return $tuote;
    }
   



   
   


}

?>