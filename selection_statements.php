<?php 
// Initializing the five string variables
$strings = ["Alligator", "Bat", "Cat", "Dog", "Elephant"];

// Initializing the five integer variables
$numbers = [20, 15, 30, 10, 5];

// Function to sort strings in ascending order 
function sortAscending(&$array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if (strcmp($array[$i], $array[$j]) > 0) {
                // Swap values
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}

// Function to sort strings in descending order 
function sortDescending(&$array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if (strcmp($array[$i], $array[$j]) < 0) {
                // Swap values
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}

// Function to sort numbers in ascending order 
function sortNumbersAscending(&$array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                // Swap values
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}

// Variable setup for calculations
$firstNumber = $numbers[0];
$fifthNumber = $numbers[4];
$sum = array_sum($numbers);
$product = array_product($numbers);
$average = $sum / count($numbers);

// Perform actions based on divisibility
if ($firstNumber % $fifthNumber == 0) {
    // If divisible, display sum, product, and average
    $output = "First number $firstNumber is divisible by the fifth number $fifthNumber.<br>";
    $output .= "Sum: $sum<br>";
    $output .= "Product: $product<br>";
    $output .= "Average: " . round($average, 2) . "<br>";
} else {
    // If not divisible, sort numbers in ascending order
    sortNumbersAscending($numbers);
    $output = "First number ($firstNumber) is not divisible by the fifth number ($fifthNumber).<br>";
    $output .= "Numbers in ascending order: " . implode(", ", $numbers) . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            background-color: wheat; /* White background */
            color: #2E8B2A; /* Dark green text */
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2E8B2A; /* Dark green for the header */
        }
        h2 {
            color: #2E8B2A; /* Dark green for subheadings */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #2E8B2A; /* Dark green border */
        }
        th {
            background-color: #A8D5BA; /* Light green header */
            color: #2E8B2A; /* Dark green text for header */
        }
        tr:nth-child(even) {
            background-color: #E0F8E0; /* Very light green for even rows */
        }
        tr:nth-child(odd) {
            background-color: #FFFFFF; /* White for odd rows */
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #2E8B2A; /* Dark green button */
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            font-size: 1.1em;
        }
        .button:hover {
            background-color: #237B2B; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <h1>String and Number Operations</h1>

    <h2>Results</h2>
    <table>
        <tr>
            <th>Strings in Ascending Order</th>
            <th>Strings in Descending Order</th>
            <th>Numbers Operation</th>
        </tr>
        <tr>
            <td>
                <?php
                // Sort and display strings in ascending order
                sortAscending($strings);
                echo implode("<br>", $strings);
                ?>
            </td>
            <td>
                <?php
                // Sort and display strings in descending order
                sortDescending($strings);
                echo implode("<br>", $strings);
                ?>
            </td>
            <td><?php echo $output; ?></td>
        </tr>
    </table>

    <hr style="border: 1px solid green; margin-bottom: 20px;">
    <div> 
        Creator's Name: Menzi Ann Bacalso  </div>
       <div>  Date Created: October 27,2024
    </div>

    <a class="button" href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "mainpage.php";
    }
</script>

</body>
</html>
