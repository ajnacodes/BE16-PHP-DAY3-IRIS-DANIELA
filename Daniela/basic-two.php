<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Basic exercises</title>
</head>
<body>
    


<!-- Exercise 2
Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element. -->



<h1 class="display-4 p-5 m-5">Exercise 2</h1>

<?php


$numberArray = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19);

foreach($numberArray as $number){
    echo "<h1 class='display-4 px-5 mx-5'>$number</h1>";
}


?>



</body>
</html>