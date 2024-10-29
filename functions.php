<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #2e8b57;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .footer-info {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
        /* Back Button Box Styling */
        
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2e8b57;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .back-button:hover {
            background-color: #256d47;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BMI Calculator and Health Categorizer</h1>
        
        <p><strong>Problem:</strong> Calculate a person’s Body Mass Index (BMI) and use the BMI value to categorize their health risk level based on standard BMI categories.</p>

        <h2>Functions Used</h2>
        <table>
            <tr>
                <th>Function Name</th>
                <th>Description</th>
            </tr>
            <tr><td>calculateBMI</td><td>Calculates BMI using the formula BMI = weight (kg) / (height (m)^2).</td></tr>
            <tr><td>getBMICategory</td><td>Determines the BMI category based on the calculated BMI value.</td></tr>
            <tr><td>getHealthRisk</td><td>Provides health risk assessment based on the BMI category.</td></tr>
            <tr><td>inputValidation</td><td>Validates that user input (weight and height) is in acceptable range.</td></tr>
            <tr><td>convertHeightToMeters</td><td>Converts height from centimeters to meters for calculation.</td></tr>
            <tr><td>displayBMIResult</td><td>Displays the calculated BMI value.</td></tr>
            <tr><td>displayBMICategory</td><td>Displays the category (e.g., Underweight, Normal, Overweight).</td></tr>
            <tr><td>displayHealthRisk</td><td>Shows the health risk based on the BMI category.</td></tr>
            <tr><td>resetInputs</td><td>Resets the input fields for weight and height.</td></tr>
            <tr><td>displayAdvice</td><td>Provides general health advice based on BMI category.</td></tr>
        </table>

        <h2>Example BMI Calculation Result</h2>
        <table>
            <tr>
                <th>Parameter</th>
                <th>Value</th>
            </tr>
            <tr><td>Weight</td><td>70 kg</td></tr>
            <tr><td>Height</td><td>1.75 m</td></tr>
            <tr><td>Calculated BMI</td><td>22.9</td></tr>
            <tr><td>BMI Category</td><td>Normal Weight</td></tr>
            <tr><td>Health Risk</td><td>Low Risk</td></tr>
            <tr><td>Health Advice</td><td>Maintain a balanced diet and regular physical activity to stay healthy.</td></tr>
        </table>

        <div class="footer-info">
            Creator's Name: Menzi Ann Bacalso<br>
            Date Created: October 25, 2024
        </div>

        <!-- Back Button in Styled Box -->
        <div class="back-button-box">
            <a href="javascript:void(0);" onclick="closeAndGoBack()" class="back-button">Back to Main Page</a>
        </div>

        <script>
            function closeAndGoBack() {
                window.close(); 
                window.location.href = "mainpage.php";
            }
        </script>
    </div>
</body>
</html>
