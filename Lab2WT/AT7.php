<?php
echo "<table border=1 cellspacing = 0 align = 'center'>";
echo "<tr>";
 echo "<td width =100x>";
 for ($i =0 ; $j<3; $i++){
    echo "*";
    echo "<?td>"
 }

 echo "td width =100x>";
 for($i=3;$i>0;$i--){
    for($j=1;$j<=$i;$j++){
        echo"{$j}";

    }
    echo "<br>";
 }
echo "</td>;
echo "<td width=100x>";
$char='A'

for($i=0;$i<3;$i++){
    for($j=0;$j<=$i;$j++){
        echo"{$char}";
        $char++

    }
    echo "<br>";
    echo"</td>";
    echo:</tr>;
    echo'</table>;
 }
 
 ?>
