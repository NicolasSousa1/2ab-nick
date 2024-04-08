<?php 


$cars = [

      0 => "ferrari",
      1 => "lamborghini",
      2 => "porsche",
      3 => "bmw",
      4 => "audi",
      5 => "mercedes",


];



echo "<BR>";
echo $cars["0"];
echo "<BR>";
echo $cars["1"];
echo "<BR>";
echo $cars["2"];
echo "<BR>";
echo $cars["3"];
echo "<BR>";
echo $cars["4"];
echo "<BR>";
echo $cars["5"];


$mycar = [
    "brand" => "ferrari",
    "model" => "812 gts",
    "year" => 1964
];

 $cars = [];
 $cars[0] = "ferrari";
 $cars[1] = "lamborghini";
 $cars[2] = "porsche";

 echo"<br>";
 echo "<br>";

 $cars = array("brand" => "ferrari", "model" => "812 gts", "year" => 1964);
 $cars["year"] = 2024;

 foreach (
    $cars as $x => $y
 ) {
    echo "$x: $y <br>";
 }



?>