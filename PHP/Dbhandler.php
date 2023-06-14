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
        public function deleteUser($naam)
        {
            try {
                $pdo = new PDO($this->dataSource, $this->userName, $this->password);
                $statement = $pdo->prepare("DELETE FROM gebruikers WHERE Naam = :naam");
                $statement->bindParam(":naam", $naam, PDO::PARAM_STR);
                $statement->execute();
    
                return true;
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                die();
                return false;
            }
        }
        public function updateUsername($oudenaam, $nieuwenaam)
{
    try {
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);
        $statement = $pdo->prepare("UPDATE gebruikers SET Naam = :nieuwenaam WHERE Naam = :oudenaam");
        $statement->bindParam(":new_username", $nieuwenaam, PDO::PARAM_STR);
        $statement->bindParam(":old_username", $oudenaam, PDO::PARAM_STR);
        $statement->execute();

        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
        return false;
    }
}

}
