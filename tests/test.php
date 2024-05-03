<?php 
    $array = [];
    for($i =1; $i<4; $i++){
        $A = pow(2,(14+82-32/2));
        $B = 18 * (3/6-9)*10;
        $C = 5*((12/2) -(8 *4) + (12*6));

        $array[] = $A;
        $array[] = $B;
        $array[] = $C;
    }
    
    echo "A: " . $array[0] . ", B: " . $array[1] . ", C: " . $array[2] . "\n";

    $colors = array("red", "blue", "green", "yellow");

    // for($i=0; $i< sizeof($colors); $i++){
    //     echo '<p>'. $colors[$i]. '</p>';
    // }

    foreach( $colors as $color){
        echo "<p>$color</p>";
    }

    $hoem_towns = array(
        'Joe'=>'Ouled Ka7tan',
        'aziz'=>'Sidi benour',
        'antari'=>'jadida',
        'ysf'=>'sidi bo9 bo9'
    );

    foreach( $hoem_towns as $name=> $city){
        echo "<p>$name "."kayen fi " ."$city </p>";
    }

    echo '<br/>';
    
    // //fibonacci with for loop
    // $num1 = 0;
    // $num2 = 1;

    // echo "<p>$num1</p>"; 
    // echo "<p>$num2</p>"; 

    // for ($i = 2; $i < 200; $i++) {
    //     $nextNum = $num1 + $num2; 
    //     echo "<p>$nextNum</p>"; 
    //     $num1 = $num2; 
    //     $num2 = $nextNum;
    // }

    function is_pali($string){
        $pal_check = ($string == strrev($string));
        return $pal_check;
    }

    if(is_pali("wow")){
        echo "yayy";
    }
    echo '<br/>';
    echo    '<p>'."*************************************************************************************************"."</p>";
    class Person {
        var $name;
        var $lastName;

        function __construct($name, $lastName){
            $this->name=$name;
            $this->lastName=$lastName;
        }

        public function get_name(){
            return $this->name;
        }
        public function get_lastName() {
            return $this->lastName;
        }



    }
    function is_alllc ($string){
        if ($string == strtolower($string)){
            return true;
        }else return false;
    }

    $joe = new Person("joe", "Biden");
    $rob = new Person("rob", "Kingsley");
    $eric = new Person("ericeric", "Marksman");
    $hakim = new Person("hakim", "Ziyech");
    $oussama = new Person("oussama", "Zoubir");
    $zaki = new Person("zaki", "Imad");
    $hamid = new Person("hamid", "Mol Bota");

    $ppl = array($eric, $rob, $joe,$hakim,$oussama,$zaki, $hamid );

    usort($ppl, function($a,$b,){
        return [$a->get_lastName(), $a->get_name() <=> $b->get_lastName, $b->get_name()];
        
    });
?>
<pre>
    <?php echo print_r($ppl);
    
    

    echo '<p>'. is_alllc("ezgjHr") .'</p>'
    ?>
</pre>
<?php 
    function x($a, $b){
        return ($a * $b) > 0 ? $a * $b : throw 
            new Exception("the result is negative!");
    }

    try {
       echo x(4,-7);
    } catch (Exception $th) {
        echo $th->getMessage();
    }
?> 

<?php
    // function findSecondHighest($numbers) {
    //     if (count($numbers) < 2) {
    //         return null;
    //     }

    //     $highest = max($numbers);
    //     $numbers = array_diff($numbers, [$highest]);
    //     $secondHighest = max($numbers);
    //     return $secondHighest;
    // }
    function get2ndHighest($numbers){
        if (count($numbers) < 2) {
            return null;
        }
        $highest=$numbers[0];
        $secondHighest=$numbers[1];
        for($i=0; $i<count($numbers); $i++){
            if($numbers[$i] > $highest){
                $secondHighest = $highest;
                $highest = $numbers[$i];
                }elseif($numbers[$i] > $secondHighest && $numbers[$i] != $highest){
                    $secondHighest = $numbers[$i];
            }
        }
        return $secondHighest;
    }
    $numbers = [12, 9, 3, 2, 1];
    echo '<p>' ."The second highest number is: " .  get2ndHighest($numbers) . '</p>';
?>