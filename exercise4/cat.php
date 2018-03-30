<?php
/**
 * A class that generates a cat object
 * 
 * @param string $firstname The first name of the cat
 * @param int $age The age of the cat
 * @param string $color The color of the cat
 * @param string $sex Can either be male or female
 * @param string $race The race of the cat
 */
class Cat {
    private $firstname;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    //Constructor
    public function __construct($firstname, $age, $color, $sex, $race) {
        //Call the setters
        $this->setFirstname($firstname);
        $this->setAge($age);
        $this->setColor($color);
        $this->setSex($sex);
        $this->setRace($race);
    }

    /*
    -------- GETTERS --------
    */

    public function getFirstname() {
        return $this->firstname; //Use this statement to return the value of the current object
    }

    public function getAge() {
        return $this->age;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getRace() {
        return $this->race;
    }

     /*
    -------- SETTERS --------
    */

    public function setFirstname($firstname) {
        if( //Checking if conditions given are respected
            is_string($firstname) && 
            strlen($firstname) >= 3 &&
            strlen($firstname) <= 20
        ) {
            $this->firstname = $firstname; //Use this statement to set value of the current object
        } else {
            throw new Exception('Firstname is incorrect'); //Raise Exception if incorrect type
        }
    }

    public function setAge($age) {
        if(is_int($age)) {
            $this->age = $age;
        } else {
            throw new Exception('Age is incorrect');
        }
    }

    public function setColor($color) {
        if(
            is_string($color) &&
            strlen($color) >= 3 &&
            strlen($color) <= 10
        ) {
            $this->color = $color;
        } else {
            throw new Exception('Color is incorrect');
        }
    }

    public function setSex($sex) {
        if(
            is_string($sex) &&
            $sex == 'male' ||
            $sex == 'female'
        ) {
            $this->sex = $sex;
        } else {
            throw new Exception('Sex is incorrect');
        }
    }

    public function setRace($race) {
        if(
            is_string($race) &&
            strlen($race) >= 3 &&
            strlen($race) <= 20
        ) {
            $this->race = $race;
        } else {
            throw new Exception('Race is incorrect');
        }
    }
    /**
     * Get informations about the current cat
     * 
     * @return array $infos Return an associative array with infos
     */
    public function getInfo() {
        $infos = [
            'Firstname' => $this->getFirstname(),
            'Age' => $this->getAge(),
            'Color' => $this->getColor(),
            'Sex' => $this->getSex(),
            'Race' => $this->getRace()            
        ];
        return $infos;
    }
}