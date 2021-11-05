<?php

class Login extends Dbh {

    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare('SELECT userpassword FROM users WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }
        
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["userpassword"]);

        if($checkPwd == false)
        {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword&".$checkPwd."");
        }
        elseif($checkPwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND userpassword = ?;');

            if (!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["firstname"];
            $_SESSION['privilege'] = $user[0]["privilege"];

            $stmt = null;
        }

    }
}