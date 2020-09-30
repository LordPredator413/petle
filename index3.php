<html>
  <head>
  <link rel="stylesheet" href="style.css">
  </head>

<body>
<?php
// petla for
    for ($i = 1; $i <= 10; $i++) {

        $x = sqrt($i);

        echo $i. "->&nbsp". $x. "<br>"; 
    }

?>

<br><br>
<br><br>

<?php 
// petla while 
    $i=1;
    while($i <= 10 ){

        $x = sqrt($i);
        echo $i. "->&nbsp". $x. "<br>";
        $i++;
    }
?>

<br><br>
<br><br>

<?php
// petla do ... while ...
    $i=1;
    do {
     $x = sqrt($i);
        echo $i. "->&nbsp". $x. "<br>";
        $i++;
    } while ($i <= 10 );
?>

</body>
</html>