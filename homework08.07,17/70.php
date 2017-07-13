<?php
function test($n){
    for($d=2; $d*$d<=$n; $d++){

        if($n%$d==0)
            return false;
    }

    return true;
}
test(4);
//if (test(4)==true){
//    echo "1";
//}