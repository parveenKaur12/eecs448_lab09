<html>
<body>
<?php

$userAns1 = $_POST['sky'];
$userAns2 = $_POST['Canada'];
$userAns3 = $_POST['dish'];
$userAns4 = $_POST['Saudi'];
$userAns5 = $_POST['animal'];

$correctAnsCounter = 0;
if("Blue" == $userAns1)
{
    $correctAnsCounter = $correctAnsCounter + 1;
}
if("French" == $userAns2)
{
    $correctAnsCounter = $correctAnsCounter + 1;
}
if("Salt" == $userAns3 )
{
    $correctAnsCounter = $correctAnsCounter + 1;
}
if("Oil" == $userAns4)
{
    $correctAnsCounter = $correctAnsCounter + 1;
}
if("Markhor" == $userAns5)
{
    $correctAnsCounter = $correctAnsCounter + 1;
}
    echo"Question 1: What is the colour of the sky?<br></br>";
    echo "      You answered: $userAns1<br></br>";
    echo "      Correct answer: Blue<br></br><br></br>";

    echo"Question 2: What is the national language of Canada?<br></br>";
    echo "      You answered: $userAns2<br></br>";
    echo "      Correct answer: French<br></br><br></br>";

    echo"Question 3: Which core ingredient is important to cook a savory dish?<br></br>";
    echo "      You answered: $userAns3<br></br>";
    echo "      Correct answer: Salt<br></br><br></br>";

    echo"Question 4: Saudi Arabia is the biggest producer of?<br></br>";
    echo "      You answered: $userAns4<br></br>";
    echo "      Correct answer: Oil<br></br><br></br>";

    echo"Question 5: What is the national animal of Pakistan?<br></br>";
    echo "      You answered: $userAns5<br></br>";
    echo "      Correct answer: Markhor<br></br><br></br>";

    $score = $correctAnsCounter*20;

    echo"You scored a total of $correctAnsCounter correct<br></br>";
    echo"You have received a  $score% on this quiz<br></br>";

?>
</body>
</html>
