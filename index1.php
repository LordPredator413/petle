<html>
  <head>
  <link rel="stylesheet" href="style.css">
  </head>

<body>
<!-- zadanie 2  -->
<?php
// petla for
  for($i = 100; $i > 90 ; $i -= 1)
  echo "$i <br>";
?>

<br><br>
<br><br>

<?php
// petla while 
  $i=100;
    while($i >= 91){
    echo "$i.<br>";
    $i--;
  }
?>

<br><br>
<br><br>

<?php
// petla do ... while ...
  $i = 100; 
    do {
      echo $i,"<br>";
      $i--;

    } while ($i >= 91);

?>

</body>
</html>