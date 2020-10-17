<?php

require __DIR__ . '/fullstackphp/fsphp.php';
fullStackPHPClassName("Atividade - Classe/Interface");

require __DIR__ . "/source/Student.php";
require __DIR__ . "/source/Situation.php";

fullStackPHPClassSession("*****************      MÉDIA DOS ESTUDANTES       *****************", __LINE__);

$jisoo = new Situation();
$jisoo->setName("Jisoo Kim");
$jisoo->setGrade1(10.0);
$jisoo->setGrade2(10.0);
$jisoo->setGrade3(10.0);
$jisoo->setGrade4(10.0);
$avg1 = $jisoo->getAverage($jisoo->getGrade1(), $jisoo->getGrade2(), $jisoo->getGrade3(), $jisoo->getGrade4());

echo "<h2>1º Estudante: {$jisoo->getName()}</h2>";
echo "Nota 1: {$jisoo->getGrade1()}<br>";
echo "Nota 2: {$jisoo->getGrade2()}<br>";
echo "Nota 3: {$jisoo->getGrade3()}<br>";
echo "Nota 4: {$jisoo->getGrade4()}<br>";
echo "<h4>Média: {$avg1}</h4>";
echo "----------------------------------------------<br>";
echo "<h4>O(a) estudante foi... {$jisoo->getSituation($avg1)}!</h4>";


