<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Basic Exercise One</title>
</head>
<body>
    


<!--Exercise 1

Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop.   -->



<h1 class="display-4 p-5 m-5">Exercise 1</h1>


<!-- <h1 class="display-4 p-5 m-5">for loop</h1> -->


<!-- for loop -->

 <!--
     <?php 

for($counter = 1; $counter <= 50; $counter++) {
    echo "<h1 class='display-4 mx-5 px-5'>Daniela $counter</h1> ";
}


?> -->


<!-- <h1 class="display-4 p-5 m-5">while loop</h1> -->


<!-- while loop -->

<!-- 
<?php 

$counter = 1;
while($counter <= 50) {
    echo " <h1 class='display-4 mx-5 px-5'>Daniela $counter</h1> ";
    $counter = $counter + 1;
}


?> -->


<h1 class="display-4 p-5 m-5">do while loop</h1> 


<?php


$counter = 1;
do {
  echo " <h1 class='display-4 mx-5 px-5'>Daniela $counter</h1> ";
  $counter++;
} while ($counter <= 50);
?>


<!-- test -->

</body>
</html>