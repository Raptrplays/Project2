<?php

class dbHandler
{
    private $dataSource = "mysql:dbname=project2pvv;host=localhost;";
    private $userName = "root";
    private $password = "";


    public function GetData()
    {
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);
        $statement = $pdo->prepare("SELECT * FROM accounts");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>