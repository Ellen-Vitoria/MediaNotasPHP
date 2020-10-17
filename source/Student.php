<?php

class Student
{
    private $name;
    private $grade1;
    private $grade2;
    private $grade3;
    private $grade4;

    public function getName(){
       return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getGrade1(){
        return $this->grade1;
    }

    public function setGrade1($grade1){
        $this->grade1 = $grade1;
    }

    public function getGrade2(){
        return $this->grade2;
    }

    public function setGrade2($grade2){
        $this->grade2 = $grade2;
    }

    public function getGrade3(){
        return $this->grade3;
    }

    public function setGrade3($grade3){
        $this->grade3 = $grade3;
    }
    
    public function getGrade4(){
        return $this->grade4;
    }

    public function setGrade4($grade4){
        $this->grade4 = $grade4;
    }
}