<?php
class dbHandler
{
    private $dataSource = "mysql:dbname=eindproject;host=localhost;";
    private $userName = "root";
    private $password = "";

    public function createUser($naam, $password) {
        try {
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);
            $statement = $pdo->prepare("INSERT INTO gebruikers (Naam, Wachtwoord) VALUES (:naam, :password)");
            $statement->bindParam(":naam", $naam, PDO::PARAM_STR);
            $statement->bindParam(":password", $password, PDO::PARAM_STR);
            $statement->execute();
    
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
            return false;
        }
    }

    
    public function getUser($naam, $password)
        {
            try {
                $pdo = new PDO($this->dataSource, $this->userName, $this->password);
                $statement = $pdo->prepare("SELECT * FROM gebruikers WHERE Naam = :naam AND Wachtwoord = :password");
                $statement->bindParam(":naam", $naam, PDO::PARAM_STR);
                $statement->bindParam(":password", $password, PDO::PARAM_STR);
                $statement->execute();
        
                $user1 = $statement->fetch(PDO::FETCH_ASSOC);
                return $user1;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                return null;
            }
        }
}
?>