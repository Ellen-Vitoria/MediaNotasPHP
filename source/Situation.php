<?php

class Situation extends Student implements Average
{
    public function getAverage($grade1, $grade2, $grade3, $grade4){
        return ($grade1 + $grade2 + $grade3 + $grade4)/4;
    }

    public function getSituation($average){
        if($average > 5)
        {
            return "Aprovado(a)";
        }
        else
        {
            return "Reprovado";
        }
    }
}

interface Average{
    public function getAverage($grade1, $grade2, $grade3, $grade4);
}