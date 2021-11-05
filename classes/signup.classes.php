<?php

class Signup extends Dbh {

    protected function setUser($name, $uid, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (firstname, username, userpassword, email) VALUES (?, ?, ?, ?)');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        //$stmt->execute(array($name, $uid, $hashedPwd, $email));

        if(!$stmt->execute(array($name, $uid, $hashedPwd, $email))) {
            //header("location: ../portal.php?error=".$hashedPwd."");
            //$stmt = null;
            //console.log('response');
            
            header("location: ../portal.php?error=stmtfailed1");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../portal.php?error=stmtfailed2");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0)
        {
           $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}