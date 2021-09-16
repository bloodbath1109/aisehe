<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $statesList = [ ];
    $states1 = explode(" ",$states);
    echo "Original array: <br>";
    foreach($states1 as $i => $value)
        print("States[$i]=$value<br>");
        foreach($states1 as $value){
            if(preg_match("/xas$/",$value))
                $statesList[0]=$value;
            if(preg_match("/^k.*s$/i",$value))
                $statesList[1]=$value;
            if(preg_match("/^M.*s$/",$value))
                $statesList[2]=$value;
            if(preg_match("/a$/",$value))
                $statesList[3]=$value;
        }
    echo "<br><br> Resultant array:<br>";
    for($i=0;$i<count($statesList);$i++)
        print("States[$i]=$statesList[$i]<br>");
?>