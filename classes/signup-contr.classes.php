<?php 

class SignupContr extends Signup {

    private $name;
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($name, $uid, $pwd, $pwdRepeat, $email) {
        $this->name = $name;
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            // echo "Empty Input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidName() == false) {
            // echo "Invalid Name!";
            header("location: ../index.php?error=name");
            exit();
        }
        if($this->invalidUid() == false) {
            // echo "Invalid Username!";
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false) {
            // echo "Invalid Email!";
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false) {
            // echo "Passwords Don't Match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false) {
            // echo "Username Or Email Taken!";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->name, $this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if(empty( $this->uid) || empty( $this->pwd) || empty( $this->pwdRepeat) || empty( $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidName() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result;
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

}