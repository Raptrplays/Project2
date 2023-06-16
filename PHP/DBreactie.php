<?php
class DBreactie
{
    private $dataSource = "mysql:dbname=eindproject;host=localhost;";
    private $userName = "root";
    private $password = "";

    public function reactieMaken($Comment, $GebruikersId, $NieuwsId)
    {
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);

            $statement = $pdo->prepare("INSERT INTO comments(Comment, GebruikersId, NieuwsId) VALUES(:Comment, :GebruikersId, :NieuwsId)");
            $statement->bindParam("Comment", $Comment, PDO::PARAM_STR);
            $statement->bindParam("GebruikersId", $GebruikersId, PDO::PARAM_INT);
            $statement->bindParam("NieuwsId", $NieuwsId, PDO::PARAM_INT);
            $statement->execute();
            return true;
        }
        catch(PDOException $exception){
            var_dump($exception);
            return false;
        }
    }

    public function selectAllCommentsForNews(int $newsId){
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);

            $statement = $pdo->prepare(
                "SELECT CommentId, Comment, gebruikers.GebruikersId, Naam 
                FROM comments 
                JOIN gebruikers 
                ON comments.GebruikersId = gebruikers.GebruikersId 
                WHERE NieuwsId = :NieuwsId"
            );
            $statement->bindParam("NieuwsId", $newsId, PDO::PARAM_INT);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception){
            var_dump($exception);
            return false;
        }
    }

    public function reactieVerwijderen($CommentId){
        try{
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);

        $statement = $pdo->prepare("DELETE FROM comments WHERE CommentId = :CommentId");
        $statement->bindParam("CommentId", $CommentId, PDO::PARAM_INT);
        $statement->execute();
        return true;

        }
        catch(PDOException $e){
            var_dump($e);
            return false;
        }

    }

    public function reactieAanpassen($comment, $commentId){
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);
    
            $statement = $pdo->prepare("UPDATE comments SET comment = :comment WHERE commentId = :commentId");
            $statement->bindParam("comment", $comment, PDO::PARAM_STR);
            $statement->bindParam("commentId", $commentId, PDO::PARAM_INT);
            $statement->execute();
            return true;
    
            }
            catch(PDOException $e){
                var_dump($e);
                return false;
            }
    
    }

    public function selectOneComment($commentId){
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);

            $statement = $pdo->prepare("SELECT commentId, comment FROM `comments` WHERE commentId = :commentId");
            $statement->bindParam("commentId", $commentId, PDO::PARAM_INT);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC)[0];

        }
        catch(PDOException $exception){
            var_dump($exception);
            return false;
        }
    }

}

?>