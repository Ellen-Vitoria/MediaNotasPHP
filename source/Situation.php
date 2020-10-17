<?php

class Situation extends Student implements Average
{
    public function getAverage(){
        return ($this->grade1 + $this->grade2 + $this->grade3 + $this->grade4)/4;
    }

    public function getSituation($average){
        if($average > 5)
        {
            return "Aprovado(a)";
        }
        else
        {
            return "Rep.!";
        }
    }
}

interface Average{
    public function getAverage();
}