<?php
$dogs= array(
    array("chihuaha","Mexico",20),
    array("Husky","Siberia",15),
    array("bulldog","england"10)
);


echo $dogs[0][0]  .  "origin"  .  $dogs[0][1] . "life span" . $dogs[0][2] . "<br>"
echo $dogs[1][0]  .  "origin"  .  $dogs[1][1] . "life span" . $dogs[1][2] . "<br>"
echo $dogs[2][0]  .  "origin"  .  $dogs[2][1] . "life span" . $dogs[2][2] . "<br>"

for($row=0;$row<3;;$row++){
    echo "<p><b>Row number $row</b></p>";
    echo"<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>" . $dogs[$row][$col] . "</li>";

    }
    echo "</ul>";
}
?>