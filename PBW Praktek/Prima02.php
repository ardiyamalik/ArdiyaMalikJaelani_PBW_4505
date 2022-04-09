<?php
function prime2($n,$m){

            $jumlah = 0;
            for ($i = $n; $i <= $m; $i++) {
                if(bilpri($i)){
                }
                echo $i.', ';
                $jumlah++;
            }
        }
        echo "<br>jumlah bilangan prima ".$jumlah."<br>";
    prime2(0,100);
?>