
<?php
$length = 50; 
$width = 8;   
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Rectangle Details:<br>";
echo "Length: $length<br>";
echo "Width: $width<br>";
echo "Area: $area<br>";
echo "Perimeter: $perimeter<br><br>";


$amount = 200; 
$vatRate = 15; 
$vat = ($amount * $vatRate) / 100;
$totalAmount = $amount + $vat;
echo "Original Amount: $$amount<br>";
echo "VAT (15%): $$vat<br>";
echo "Total Amount with VAT: $$totalAmount<br>";



$a = 10;
$b = 25;
$c = 15;
if ($a > $b && $a > $c) {
    echo $a." is largest";
} elseif ($b > $c) {
    echo $b." is largest";
} else {
    echo $c." is largest";
}

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " <br>";
    }
}

$arr = array(5, 10, 15, 20);
$search = 15;
$found = false;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Found";
} else {
    echo "Not Found";
}

$num = 7;
if ($num % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}


?>




