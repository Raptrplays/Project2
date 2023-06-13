<?php
class DBnieuws
{
    private $dataSource = "mysql:dbname=eindproject;host=localhost;";
    private $userName = "root";
    private $password = "";

    public function selectAll()
    {
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);

            $statement = $pdo->prepare("SELECT * FROM `nieuwsbericht`");
    
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception){
            var_dump($exception);
            return false;
        }
    } 
}


?>