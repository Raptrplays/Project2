<?php
class DBreactie
{
    private $dataSource = "mysql:dbname=eindproject;host=localhost;";
    private $userName = "root";
    private $password = "";

    public function reactieMaken($Comment)
    {
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);

            $statement = $pdo->prepare("INSERT INTO comments(Comment) VALUES(:Comment)");
            $statement->bindParam("Comment", $Comment, PDO::PARAM_STR);
            $statement->execute();
            return true;
        }
        catch(PDOException $exception){
            var_dump($exception);
            return false;
        }
    }

    public function selectAllcomments()
    {
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);

            $statement = $pdo->prepare("SELECT * FROM `comments`");
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