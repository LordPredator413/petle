<html>
  <head>
  <link rel="stylesheet" href="style.css">
  </head>

<body>
<!-- zadanie 3  -->

<?php
// petla for
for($i = 100; $i<=120; $i++ ) {
    if($i % 5 == 0){
    echo"$i<br>";
    }
}

?>

<br><br><br><br>

<?php
// petla while 
$i=100;
while($i % 5 == 0 & $i <= 120){
  echo "$i<br>";
  $i+=5;

}


?>

<br><br><br><br>


<?php
// petla do ... while ...
$z=100;

do{
    echo"$z<br>";
    $z+=5;
}while($z % 5 == 0 & $z <=120);

?>

</body>
</html>