<?php
class signUp extends Dbh{
    protected function setUser($username, $pass, $email){
        $sql = $this->connect()->prepare('INSERT INTO users(username, password, email) VALUES(?, ?, ?);');
        
        $hashedpswd = password_hash($pass, PASSWORD_DEFAULT);
        
        if(!$sql->execute(array($username, $hashedpswd, $email))){
            $sql = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }
            $sql = null;
    }

    protected function checkUser($username, $email){
        $sql = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ?;');
        if(!$sql->execute(array($username, $email))){
            $sql = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }
        $resultCheck;
        if($sql->rowCount() > 0){
            $resultCheck = false;

        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }



}