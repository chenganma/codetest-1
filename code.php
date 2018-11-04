<?php
class Code {
    // Returns "Hello World!"
    static function helloWorld() {
        //throw new Error("Not Implemented");
        return 'Hello World!'; //print out hello words
    }
    // Take a single-spaced <sentence>, and capitalize every <n>th word starting with <offset>.
    static function capitalizeEveryNthWord($sentence, $offset, $n) {
        //throw new Error("Not Implemented");
        $new = explode(" ", $sentence); //divide the sentence by blank space and save to an array
        $amount = count($new); // sum how many words we have

        for($i=$offset;$i<$amount;$i=$i+$n){
            $new[$i] = ucfirst($new[$i]); //find out the sequence and make the first letter capitalize
        }

        return $new; //return value
    }
    
    // Determine if a number is prime
    static function isPrime($n) {
        //throw new Error("Not Implemented");
        for($i=2;$i<$n;$i++){ //run all numbers
            if($n % $i == 0){ //see if there is a number would be divisible
                return 'is Not Prime'; // divisible
            }
        }
        return 'is Prime'; //not divisible
    }
    
    // Calculate the golden ratio.
    // Given two numbers a and b with a > b > 0, the ratio is b / a.
    // Let c = a + b, then the ratio c / b is closer to the golden ratio.
    // Let d = b + c, then the ratio d / c is closer to the golden ratio. 
    // Let e = c + d, then the ratio e / d is closer to the golden ratio.
    // If you continue this process, the result will trend towards the golden ratio.
    static function goldenRatio($a, $b) {
        //throw new Error("Not Implemented");
        $ans = array($a,$b);
        $i = 2;
        $here = 0;
        do {
            $ans[$i] = $ans[$i-1] + $ans[$i-2]; //follow the instruction and do the same calculation 
            $here = number_format(($ans[$i] / $ans[$i-1]),5); //get 5 digit floating point
            $i++; //make sure all number run through
            if (1.61801 <= $here  && $here <= 1.61806){ //see if the ratio is between the range
                return $here;
            }
        } while ($i<=100);  //run 100 times
    }
    // Give the nth Fibonacci number
    // Starting with 0, 1, 1, 2, ... a Fibonacci number is the sum of the previous two.
    static function fibonacci($n) {
        //throw new Error("Not Implemented");
        $ans = array(0,1); // set first two as an init number
        for($i=2;$i<=$n;$i++){
            $ans[$i] = $ans[$i-1] + $ans[$i-2]; //add up the previous two
        }
        return $ans[$n]; // return $n th
    }
    // Give the square root of a number
    // Using a binary search algorithm, search for the square root of a given number.
    // Do not use the built-in square root function.
    static function squareRoot($n) {
        //throw new Error("Not Implemented");
        $last = $n;
        $first = 0;


       while($first <= $last){ //make sure the answer won't over $last which is also $n
         $mid = ($first+$last)/2; //binary search get the mid one

        if($mid*$mid == $n){ // if the middle is the number then return the answer
            return $mid; 
        }

        if($mid*$mid < $n){ //make sure the answer $mid square won't over the $n
            $first = $mid + 1; //if not over then add up one more 
            $ans = $mid;
        }else{
            $end = $mid - 1; // if two much then take it back and stay
          }
       }


       $increse = 0.1; 
       for ($i = 0; $i < 4; $i++){ //get four digit after the floating point

           while ($ans * $ans <= $n){ //add the $increase till the $ans is close
              $ans += $increse; 
           } 
  
          $ans = $ans - $increse; //if the ans is too much
          $increse = $increse / 10; //one digit a time
      } 
        return $ans; //return answer
        
    }
}