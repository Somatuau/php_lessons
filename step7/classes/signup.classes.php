<?php

class Signup extends Dbh {

    protected function checkUser($uid, $email) {
        $stmt =  $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

        if(!$stmt->execute(arra($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;

        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    <?php

    class SignupContr {
    
        private $uid;
        private $pwd;
        private $pwdRepeat;
        private $email;
    
        public function _construct ($uid, $pwd, $pwdRepeat, $email) {
            $this->$uid =$uid;
            $this->$pwd =$pwd;
            $this->$pwdRepeat =$pwdRepeat;
            $this->$email=$email;
        }
        
        private function signupUsr() {
            $result;
            if( {$this=>emptyInput() == false) {
                //echo "Empty input!";
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            if( {$this=>invalidUid() == false) {
                //echo "Invalid username!";
                header("location: ../index.php?error=username");
                exit();
            }
            if( {$this=>invalidUidEmail() == false) {
                //echo "Invalid email!";
                header("location: ../index.php?error=email");
                exit();
            }
            if( {$this=>pwdMarch() == false) {
                //echo "Password don't match!";
                header("location: ../index.php?error=passwordmatch");
                exit();
            }
            if( {$this=>uidTakenCheck() == false) {
                //echo "Username or email taken!";
                header("location: ../index.php?error=useroremailtaken");
                exit();
            }
           
        }

        
    
        Private function invalidUid() {
            $result;
            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
            {
                $result = false;
            }
            else
            {
                $result = true;
            }
            return $result;
        }
            private function invalidUidEmail() {
                $result
                if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
                {
                    $result = false;
                }
                else
                {
                    $result = true;
                }
                return $result;
        }
            private function pwdMatch() {
                $result
                if ($this->checkUser($this->$uid, $this->$email)))
                {
                    $result = false;
                }
                else
                {
                    $result = true;
                }
                return $result;
        }
    
    }

}