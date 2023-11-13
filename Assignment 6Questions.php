<?php
///Name:Farhia Mohamed siyaad
//ID:C120241
//class:Ca204



// (Q1)Write PHP program that converts decimal positive integer number into binary, octal, and hexadecimal number 
//(do not use built-in functions 
//such as decbin, decoct, dechex).

$num = 123;
//convert to binary
$binary = "";
while ($num > 0) {
    $remainder = $num % 2;
    $binary = $remainder . $binary;
    $num = (int)($num / 2);
}
echo "Binary: " . $binary . "<br>";

//convert to octal
$octal = "";
while ($num > 0) {
    $remainder = $num % 8;
    $octal = $remainder . $octal;
    $num = (int)($num / 8);
}
echo "octal: " . $octal . "<br>";

//convert to hexadecimal
$hexadecimal = "";
while ($num > 0) {
    $remainder = $num % 16;
    if ($remainder < 10) {
        $hexadecimal = $remainder . $hexadecimal;
    } else {
        $hexadecimal = chr(55 + $remainder) . $hexadecimal;
    }
    $num = (int)($num / 16);
}
echo "Hexadecimal: " . $hexadecimal . "<br>";


/// (Q2) Write PHP program that converts binary positive integer number into decimal, octal, and hexadecimal number (do not use built-in functions 
//such as bindec, binoct, binhex).

$binary = "101010";

// convert to decimal
$decimal = 0;
for ($i = 0; $i < strlen($binary); $i++) {
    $decimal += (int)$binary[$i] * pow(2, strlen($binary) - $i - 1);
}
echo "Decimal: " . $decimal . "\n";

// convert to octal
$octal = "";
$num = $decimal;
while ($num > 0) {
    $remainder = $num % 8;
    $octal = $remainder . $octal;
    $num = (int)($num / 8);
}
echo "Octal: " . $octal . "\n";

// convert to hexadecimal
$hexadecimal = "";
$num = $decimal;
while ($num > 0) {
    $remainder = $num % 16;
    if ($remainder < 10) {
        $hexadecimal = $remainder . $hexadecimal;
    } else {
        $hexadecimal = chr(55 + $remainder) . $hexadecimal;
    }
    $num = (int)($num / 16);
}
echo "Hexadecimal: " . $hexadecimal . "\n";

///(Q3)	Write PHP code that:
 //1)	 declares an array of one dimension, initialize it to the following values:
 //(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9)


 //1:Declares an array of one dimension, intialize it to the following values

$array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

//2:Print all elements of the array

echo "All elements of the array:<br>";
foreach($array as $value){
    echo "$value <br>";
}


//3:Calculate and print total all elements

$total = array_sum($array);
echo "Total of all element: $total <br>";


//4:Calculate and print total event elements

$event_total = 0;
foreach ($array as $value){
    if ($value % 2 == 0){
        $event_total +=$value;
    }
}

echo "Total of event elements: $event_total <br>";


//5:Calculate and print total odd elements

$odd_total = 0;
foreach ($array as $value){
    if($value % 2 != 0){
        $odd_total += $value;
    }
}

echo "Total of odd elements: $odd_total <br>";



//6:Find minimum element and its positions

// $min = min($array);
// $min_position = array_keys($array, $min);
// echo "Minimum element: $min <br>";
// echo "Position of minimum element:";
// foreach($min_position as $position){
//     echo "$position";
// }

// echo "<br>"




//7:Find maximum element and its positions
$max = max($array);
$max_position = array_keys($array, $max);
echo "Maximum element: $max <br>";
echo "Position of maximum element:";
foreach($max_position as $position){
    echo "$position";
}

echo "<br>";


///(Q4)	Write PHP program that declares an associative array of two dimensions where row names are Light, Normal, and Dark, column names are Red, Green, 
//Blue. Array elements are shown in the below table, 
//then print array elements as shown in the table.

//Declare associative arry

$array = array(
    "Light <br>" =>array(
        "Red" =>"Light Red <br>",
        "Green" => "Light Green <br>",
        "Blue" => "Light Blue <br>"
    ),
     
    "Normal <br>" =>array(
        "Red" =>"Normal Red <br>",
        "Green" => "Normal Green <br>",
        "Blue" => "Normal Blue <br>"
    ),

    "Dark <br>" =>array(
        "Red" =>"Dark Red <br>",
        "Green" => "Dark Green <br>",
        "Blue" => "Dark Blue <br>"
    ),
);

//Print array element

echo "Read\tGreen\tBlue\n";
foreach($array as $key => $value){
    echo $key , "\t";
    foreach($value as $color){
        echo $color . "\t";
    }
    echo "\n"; 
}


  ///(Q5)	Write PHP program that declares an array of two dimensions (square array, where number of rows is equal number of columns). 
 //Use the table shown to format the output.

 ///(1) Declare the array and initialize it with the following values:
$array = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);
//(2) Print all elements of the array
echo "Elements of the array: <br>";
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

//(3) Calculate and print total of odd elements
$odd_total = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] % 2 != 0) {
            $odd_total += $array[$i][$j];
        }
    }
}
echo "Total of odd elements: " . $odd_total . "<br>";

//(4) Calculate and print total of even elements
$even_total = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] % 2 == 0) {
            $even_total += $array[$i][$j];
        }
    }
}
echo "Total of even elements: " . $even_total . "<br>";

//(5) Calculate and print total of each row
echo "Total of each row: <br>";
for ($i = 0; $i < count($array); $i++) {
    $row_total = 0;
    for ($j = 0; $j < count($array[$i]); $j++) {
        $row_total += $array[$i][$j];
    }
    echo "Row " . ($i + 1) . ": " . $row_total . "<br>";
}

//(6) Calculate and print total of each column
echo "Total of each column: <br>";
for ($i = 0; $i < count($array); $i++) {
    $col_total = 0;
    for ($j = 0; $j < count($array[$i]); $j++) {
        $col_total += $array[$j][$i];
    }
    echo "Column " . ($i + 1) . ": " . $col_total . "<br>";
}

//(7) Calculate and print total of each diagonal
$diag1_total = 0;
$diag2_total = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($i == $j) {
            $diag1_total += $array[$i][$j];
        }
        if ($i + $j == count($array) - 1) {
            $diag2_total += $array[$i][$j];
        }
    }
}
echo "Total of diagonal 1: " . $diag1_total . "<br>";
echo "Total of diagonal 2: " . $diag2_total . "<br>";

//(8) Calculate and print total of all elements
$total = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        $total += $array[$i][$j];
    }
}
echo "Total of all elements: " . $total . "<br>";

//(9) Find minimum element and its positions
$min = $array[0][0];
$min_row = 0;
$min_col = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] < $min) {
            $min = $array[$i][$j];
            $min_row = $i;
            $min_col = $j;
        }
    }
}
echo "Minimum element: " . $min . "<br>";
echo "Position: Row " . ($min_row + 1) . ", Column " . ($min_col + 1) . "<br>";

//(10) Find maximum element and its positions
$max = $array[0][0];
$max_row = 0;
$max_col = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] > $max) {
            $max = $array[$i][$j];
            $max_row = $i;
            $max_col = $j;
        }
    }
}
echo "Maximum element: " . $max . "<br>";
echo "Position: Row " . ($max_row + 1) . ", Column " . ($max_col + 1) . "<br>";



///(Q6)	Write PHP program that declares an associative array of two dimensions where row names are 
//CA201, CA205, and CA206, column names are Name, Phone, Address. Array elements are shown in the below table, 
//then print array elements as shown in the table.



//Declares an array of one dimension, intialize it to the following values
   $array = array(
    "CA201" => array(
        "Name" => "Mohamed Ahmed Ali <br>",
        "Phone" => "0648440403 <br>",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    "CA205" => array(
        "Name" => "Ahmed Abdi Jama <br>",
        "Phone" => "0647223201 <br>",
        "Address" => "Taleex, Hodan ",
    ),
    "CA206" => array(
        "Name" => "Amina Nur Adan <br>",
        "Phone" => "0646990276 <br>",
        "Address" => "Macmacanka, Dharkenley "
    ) 
    );

    //Print array elements as shown in the table

    echo "<table>
     <tr>
       <th>Name</th>
       <th>Phone</th>
       <th>Address</th>
     </tr>";
    foreach($array as $key => $value){
        echo "<tr>
            <td>" .$value['Name'] ."</td>
            <td>" .$value['Phone'] ."</td>
            <td>" .$value['Address'] ."</td>
        </tr>";
    }
    echo  "</table>";
    
    







?>