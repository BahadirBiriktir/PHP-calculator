<form action="index.php" method="GET">
     Gewicht: <input type="number" name="Gewicht">
     Hoehe: <input type="number" name="Hoehe">  
     <input type="submit">
</form>

<?php
$durch= 100;
if (isset($_GET["Gewicht"])) {
  $Gewicht= $_GET["Gewicht"];
  echo $Gewicht . "<br>";
}
if (isset($_GET["Hoehe"])) {
 $Hoehe= $_GET["Hoehe"];
  echo $Hoehe / $durch . "<br>";
}
$bmi = $Gewicht / ($Hoehe * $Hoehe);
echo $bmi
?>
