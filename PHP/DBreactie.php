<?php
class DBcomment
{
    private $dataSource = "mysql:dbname=eindproject;host=localhost;";
    private $userName = "root";
    private $password = "";

    public function reactieMaken($Tekst, $CommentId)
    {
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);

            $statement = $pdo->prepare("INSERT INTO comments(Tekst, CommentId) VALUES(:Tekst, : CommentId)");
            $statement->bindParam("Tekst", $Tekst, PDO::PARAM_STR);
            $statement->bindParam("CommentId", $CommentId, PDO::PARAM_INT);
            $statement->execute();

            return true;
        }
        catch(PDOException $exception){
            var_dump($exception);
            return false;
        }
    }

}

?>