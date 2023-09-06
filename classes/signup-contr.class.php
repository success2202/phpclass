<?php
class SignupContr extends signUp{
private $username;
private $pass;
private $rep_pass;
private $email;

public function __construct($username, $pass, $rep_pass, $email){
$this->username=$username;
$this->pass=$pass;
$this->rep_pass=$rep_pass;
$this->email=$email;

}

public function signupUser(){
    if($this->emptyInput() == false){
        // echo "empty input!";
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    if($this->invalidUsername() == false){
        // echo "invalid username!";
        header("location: ../index.php?error=invalidusername");
        exit();
    }
    if($this->invalidEmail() == false){
        // echo "invalid email!";
        header("location: ../index.php?error=invalidemail");
        exit();
    }
    if($this->passwordMatch() == false){
        // echo "password doesnt match!";
        header("location: ../index.php?error=passwordmatch");
        exit();
    }
    if($this->UserTakenCheck() == false){
        // username or email taken!";
        header("location: ../index.php?error=usernameemailtaken");
        exit();
    }
    $this->setUser($this->username, $this->pass, $this->email);
}

private function emptyInput(){
    $result;
    if(empty($this->username) || empty($this->pass) || empty($this->rep_pass) || empty($this->emmail)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

private function invalidUsername(){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}


private function invalidEmail(){
    $result;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

private function passwordMatch(){
    $result;
    if($this->pass !== $this->rep_pass){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

private function UserTakenCheck(){
    $result;
    if(!$this->checkUser($this->username, $this->email)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}
}