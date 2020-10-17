<?php

require __DIR__ . '/fullstackphp/fsphp.php';
fullStackPHPClassName("Atividade - Classe/Interface");

require __DIR__ . "/source/Student.php";
require __DIR__ . "/source/Situation.php";

fullStackPHPClassSession("***** MÉDIA DO 1º ESTUDANTE *****", __LINE__);

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
echo "<h4>O(a) estudante foi... {$jisoo->getSituation($avg1)}!</h4><br><br>";

/************************************************************************************/

fullStackPHPClassSession("***** MÉDIA DO 2º ESTUDANTE *****", __LINE__);

$nayeon = new Situation();
$nayeon->setName("Nayeon Jung");
$nayeon->setGrade1(10.0);
$nayeon->setGrade2(9.5);
$nayeon->setGrade3(9.5);
$nayeon->setGrade4(10.0);
$avg1 = $nayeon->getAverage($nayeon->getGrade1(), $nayeon->getGrade2(), $nayeon->getGrade3(), $nayeon->getGrade4());

echo "<h2>2º Estudante: {$nayeon->getName()}</h2>";
echo "Nota 1: {$nayeon->getGrade1()}<br>";
echo "Nota 2: {$nayeon->getGrade2()}<br>";
echo "Nota 3: {$nayeon->getGrade3()}<br>";
echo "Nota 4: {$nayeon->getGrade4()}<br>";
echo "<h4>Média: {$avg1}</h4>";
echo "----------------------------------------------<br>";
echo "<h4>O(a) estudante foi... {$nayeon->getSituation($avg1)}!</h4>";

