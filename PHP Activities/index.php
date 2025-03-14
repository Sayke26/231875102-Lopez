<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Exercise 1<br></h1>";
// Declare two variables $a and $b
$a = 15;
$b = 7;

// Compute and print their sum, difference, product, and quotient
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br>";
?>
<?php //EXERCISE 2
echo "<h1>Exercise 2<br></h1>";
$number = 18;

echo "<p>";
if ($number % 2 == 0) {
    echo $number . " is even.<br>";
} else {
    echo $number . " is odd.<br>";
}

if ($number > 0) {
    echo $number . " is positive.<br>";
} elseif ($number < 0) {
    echo $number . " is negative.<br>";
} else {
    echo "The number is zero.<br>";
}
echo "</p>";
?>

<?php //EXERCISE 3
echo "<h1>Exercise 3<br></h1>";
// Task 1: Loop counting from 1 to 100
echo "<h3>Counting from 1 to 100:</h3>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . "<br>";
}

echo "<br><hr><br>";

// Task 2: 
echo "<h3>Even Fibonacci numbers (First 10 numbers):</h3>";
$a = 0;
$b = 1;
for ($i = 0; $i < 10; $i++) {
    $c = $a + $b;
    $a = $b;
    $b = $c;

    if ($c % 2 == 0) {
        echo $c . "<br>";
    }
}
?>

<?php  //EXERCISE 4
echo "<h1>Exercise 4<br></h1>";
function greet($name) {
    return "Hello, " . $name . "!";
}

function square($number) {
    return $number * $number;
}

echo greet("Sir Prim") . "<br>";
echo "Square of 144: " . square(144) . "<br>";
?>


<h1>Exercise 5 - Form Handling</h1>
    
    <form method="POST" action="">
        <label for="userText">Enter Text:</label>
        <input type="text" id="userText" name="userText" required>
        <button type="submit">Submit</button>
    </form>
    
    <?php
    // Function to display submitted text
    function displaySubmittedText($text) {
        return "You submitted the following text: " . htmlspecialchars($text);
    }

    // Check if the form is submitted and display the text
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userText = $_POST['userText'];  // Retrieve the text input
        echo "<p>" . displaySubmittedText($userText) . "</p>";
    }
    ?>

</body>
</html>