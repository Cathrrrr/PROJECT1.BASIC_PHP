<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single- Dimensional Array</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: green; /* Header background color */
            color: #ffffff; /* Header font color */
            text-align: left;
        }

        .styled-table th, .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3; /* Light gray for even rows */
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid green; /* Bottom border for last row */
        }

        .styled-table tbody tr:hover {
            background-color: #e0ffe0; /* Light green on hover */
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: green; /* Link background color */
            color: white; /* Link text color */
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #007f65; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <h1>Ten People's Information</h1>

    <?php
// Define the parallel arrays
$names = ["Nino John", "Janelle", "Cath", "Jasper", "Sheina",
          "Ysha", "Don", "Menzi Ann", "Kinneth", "Harddy"];
$ages = [24, 21, 23, 22, 21, 21, 21, 23, 20, 22];
$sexes = ["Male", "Female", "Female", "Male", "Female", "Female", "Male", "Female", "Male", "Male"];
$nationalities = ["Filipino", "British", "Canadian", "Australian", "French", "German", "Spanish", "Italian", "Russian", "Singaporean"];

// Function to sort parallel arrays by names
function sortByName(&$names, &$ages, &$sexes, &$nationalities) {
    $count = count($names);
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if (strcmp($names[$i], $names[$j]) > 0) {
                // Swap names and corresponding details
                swap($names[$i], $names[$j]);
                swap($ages[$i], $ages[$j]);
                swap($sexes[$i], $sexes[$j]);
                swap($nationalities[$i], $nationalities[$j]);
            }
        }
    }
}

// Helper function for swapping values
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Function to display the information in table format
function displayPeople($names, $ages, $sexes, $nationalities, $title) {
    echo "<h2>$title</h2>";
    echo "<table class='styled-table'>";
    echo "<thead><tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr></thead>";
    echo "<tbody>";
    for ($i = 0; $i < count($names); $i++) {
        echo "<tr>";
        echo "<td>{$names[$i]}</td>";
        echo "<td>{$ages[$i]}</td>";
        echo "<td>{$sexes[$i]}</td>";
        echo "<td>{$nationalities[$i]}</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>


    <!-- Display unsorted list -->
    <?php displayPeople($names, $ages, $sexes, $nationalities, "Unsorted List"); ?>

    <!-- Sort the arrays by name -->
    <?php sortByName($names, $ages, $sexes, $nationalities); ?>

    <!-- Display sorted list -->
    <?php displayPeople($names, $ages, $sexes, $nationalities, "Sorted List By Name"); ?>

    <div> 
        Creator's Name: Menzi Ann Bacalso  </div>
       <div>  Date Created: October 25,2024
    </div>

    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "mainpage.php";
    }
</script>
</body>
</html>
