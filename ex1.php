<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php

/* 
Schedule a function that, given any number (for example, your age) tells us whether 
it is even or odd by a message on the screen.
*/


$even = " is even!";

function numcheck ($number) {
   
$checker = true;

if ($number % 2 != 0) {

    $checker = false;
}

return $checker;

}

?>

<h2>Even and odd checker form</h2>
<br>

    <form action = "" method = "POST">
        Enter an integer value: <input type="text" name="value">
        <input type="submit">
        </form>

<?php

   $number = $_POST;
    $checker = numcheck ($number);

    if (!$checker) {

        $even = " is odd!";

    }
    echo $number . $even;


?>

</body>
</html>
