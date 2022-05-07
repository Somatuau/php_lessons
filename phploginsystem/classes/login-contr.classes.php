<?php

class loginContr extends Login {

    private $uid;
    private $pwd;


    public function _construct ($uid, $pwd, $pwdRepeat, $email) {
        $this->uid =$uid;
        $this->pwd =$pwd;
    }

    public function loginUsers() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->$uid, $this->$pwd, $this->$email);
    }
    
    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}

   