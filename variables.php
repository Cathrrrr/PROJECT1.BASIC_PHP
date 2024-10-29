<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        h1 {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .box {
            background-color: #fff;
            width: 45%;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            color: #4CAF50;
            font-size: 20px;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            font-size: 18px;
            color: #333;
        }

        .footer {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            color: #4CAF50;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Item Attributes</h1>

    <div class="box">
        <h2>Item Quantities (Whole Numbers)</h2>
        <ul>
            <li>Item 1 Quantity: 5</li>
            <li>Item 2 Quantity: 13</li>
            <li>Item 3 Quantity: 30</li>
            <li>Item 4 Quantity: 80</li>
            <li>Item 5 Quantity: 10</li>
        </ul>
    </div>

    <div class="box">
        <h2>Item Prices (Floating Point Numbers)</h2>
        <ul>
            <li>Item 1 Price: 599.09</li>
            <li>Item 2 Price: 1567.79</li>
            <li>Item 3 Price: 389.19</li>
            <li>Item 4 Price: 767.10</li>
            <li>Item 5 Price: 2899.99</li>
        </ul>
    </div>

    <div class="box">
        <h2>Item Descriptions (Strings)</h2>
        <ul>
            <li>Item 1: Wireless Mouse</li>
            <li>Item 2: Keyboard</li>
            <li>Item 3: Headphones</li>
            <li>Item 4: USB Cable</li>
            <li>Item 5: Webcam</li>
        </ul>
    </div>

    <div class="box">
        <h2>Item Ratings (Characters)</h2>
        <ul>
            <li>Item 1 Rating: A</li>
            <li>Item 2 Rating: B</li>
            <li>Item 3 Rating: C</li>
            <li>Item 4 Rating: A</li>
            <li>Item 5 Rating: B</li>
        </ul>
    </div>

    <div class="footer">
        <p>Creator's Name: Menzi Ann Bacalso</p>
        <p>Date Created: October 20, 2024</p>
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
