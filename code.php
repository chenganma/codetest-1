<?php
class Code {
    // Returns "Hello World!"
    static function helloWorld() {
        //throw new Error("Not Implemented");
        return 'Hello World!';
    }
    // Take a single-spaced <sentence>, and capitalize every <n>th word starting with <offset>.
    static function capitalizeEveryNthWord($sentence, $offset, $n) {
        throw new Error("Not Implemented");
    }
    
    // Determine if a number is prime
    static function isPrime($n) {
        //throw new Error("Not Implemented");

        for($i=2;$i<$n;$i++){
            if($n % $i==0){
                return 'is Not Prime';
            }
        }
        return 'is Prime';
    }
    
    // Calculate the golden ratio.
    // Given two numbers a and b with a > b > 0, the ratio is b / a.
    // Let c = a + b, then the ratio c / b is closer to the golden ratio.
    // Let d = b + c, then the ratio d / c is closer to the golden ratio. 
    // Let e = c + d, then the ratio e / d is closer to the golden ratio.
    // If you continue this process, the result will trend towards the golden ratio.
    static function goldenRatio($a, $b) {
        //throw new Error("Not Implemented");

        $ans = array(100,6);

        $i = 2;
        $here = 0;

        do {
            $ans[$i] = $ans[$i-1] + $ans[$i-2];
            //echo ($ans[$i] / $ans[$i-1]).'/'.$i.'//';
            $here = number_format(($ans[$i] / $ans[$i-1]),5);
            $i++;
            echo $here.'/';
            if (1.61801 <= $here  && $here <= 1.61806){
                echo 'done';
                die();
            }
            //$check = $here;
        } while ($i<=100);


    }
    // Give the nth Fibonacci number
    // Starting with 0, 1, 1, 2, ... a Fibonacci number is the sum of the previous two.
    static function fibonacci($n) {
        //throw new Error("Not Implemented");
        $ans = array(0,1);
        for($i=2;$i<=$n;$i++){
            $ans[$i] = $ans[$i-1] + $ans[$i-2];
        }
        return $ans[$n];
    }
    // Give the square root of a number
    // Using a binary search algorithm, search for the square root of a given number.
    // Do not use the built-in square root function.
    static function squareRoot($n) {
        //throw new Error("Not Implemented");
        for($i=1;$i<$n;$i++){
            if()
        }

        
    }
}