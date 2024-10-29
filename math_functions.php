<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            background-color: #e0f7e0;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #2e7d32;
            text-align: center;
            font-size: 2em;
        }
        .box {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            margin: 15px 0;
            border: 2px solid #2e7d32;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }
        h2 {
            color: #2e7d32;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.1em;
            margin: 5px 0;
            color: #333;
        }
        strong {
            color: #2e7d32;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #2e7d32;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>

<h1>Math Functions </h1>

<div class="box">
    <h2>Floating Point Numbers</h2>
    <p><strong>Numbers:</strong> 5.5, 3.14, -2.7, 7.8, 9.2</p>
    <p>1. Absolute Value of -2.7: <strong>2.7</strong></p>
    <p>2. Ceiling of 5.5: <strong>6</strong></p>
    <p>3. Floor of 7.8: <strong>7</strong></p>
    <p>4. Square Root of 9.2: <strong>3.03</strong></p>
    <p>5. Exponential (e^5.5): <strong>244.69</strong></p>
    <p>6. Natural Log of 3.14: <strong>1.14</strong></p>
    <p>7. Round 5.5: <strong>6</strong></p>
</div>

<div class="box">
    <h2>Whole Numbers</h2>
    <p><strong>Numbers:</strong> 4, 8, 15, -3, 0</p>
    <p>8. Maximum of 4, 8, 15: <strong>15</strong></p>
    <p>9. Minimum of 4, -3, 8: <strong>-3</strong></p>
    <p>10. Power of 8^3: <strong>512</strong></p>
    <p>11. Sine of 15 degrees: <strong>0.26</strong></p>
    <p>12. Cosine of 15 degrees: <strong>0.97</strong></p>
    <p>13. Factorial of 4: <strong>24</strong></p>
    <p>14. Random Integer between 0 and 15: <strong>7</strong></p>
    <p>15. Convert 15 degrees to Radians: <strong>0.26</strong></p>
</div>

<div class="footer">
    <p>Creator's Name: Menzi Ann Bacalso</p>
    <p>Date Created: October 20, 2024</p>
</div>

<a href="javascript:void(0);" onclick="closeAndGoBack()" class="button">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "mainpage.php";
    }
</script>

</body>
</html>
