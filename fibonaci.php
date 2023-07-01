<?php
    function fibonacci (int $jumlahBilangan) {
        # var array
        $fibonacci = [];
    
        if ($jumlahBilangan < 0) {
        # misal kurang dari lsng kelar
        return $fibonacci; 
        }
    
        # ngituk cuk
        for ($i = 0; $i < $jumlahBilangan; $i++) {
        if ($i < 2) {
            $bilangan = $i;
        } else {
            $bilangan = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    
        # masukin array
        array_push($fibonacci, $bilangan);
        }
    
        return $fibonacci;
    }
    $seq = 0;
    $string = fibonacci(5);
    foreach($string as $output){

        if($output % 2 == 0){
            echo "F" . $seq . " = " . $output . " (Genap)";
        } else {
            echo "F" . $seq . " = " . $output . " (Ganjil)";
        }
        echo "<br>";
        $seq++;
    }
// echo print_deret_fibonacci(5);
echo "<br>";
?>