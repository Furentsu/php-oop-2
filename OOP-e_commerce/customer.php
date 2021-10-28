<?php 
    
    class Customer {
        private $name;
        private $surname;
        private $email;
        private $pwd;

        public function __construct($_name, $_surname, $_email, $_pwd) {
            $this->setName($_name);
            $this->setSurname($_surname);
            $this->setEmail($_email);
            $this->setPwd($_pwd);
        }

        // NAME Setter and Getter

        public function setName($name) {
            if (is_numeric($name) || (strlen($name) < 3 || strlen($name) > 12)) {
                echo '<script language="javascript">';
                echo 'alert("Invalid name!")';
                echo '</script>';
            } else {
                $this->name = $name;
            }
        }

        public function getName() {
            return $this->name;
        }

        // SURNAME Setter and Getter

        public function setSurname($surname) {
            if (is_numeric($surname) || (strlen($surname) < 3 || strlen($surname) > 12)) {
                echo '<script language="javascript">';
                echo 'alert("Invalid surname!")';
                echo '</script>';
            } else {
                $this->surname = $surname;
            }
        }

        public function getSurname() {
            return $this->surname;
        }

        // EMAIL Setter and Getter

        public function setEmail($email) {
            if (strpos($email, '@') && strpos($email, '.')) {
                $this->email = $email;
            }
        }

        public function getEmail() {
            return $this->email;
        }

        // PASSWORD Setter and Getter

        public function setPwd($pwd) {

            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $pwd);
            $lowercase = preg_match('@[a-z]@', $pwd);
            $number    = preg_match('@[0-9]@', $pwd);
            $specialChars = preg_match('@[^\w]@', $pwd);

            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }else{
                echo 'Strong password.';
                $this->pwd = $pwd;
            }
        }

        public function getPwd() {
            return $this->pwd;
        }
    }; 

?>