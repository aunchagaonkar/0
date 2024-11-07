<!DOCTYPE html>
<html>
<head>
    <title>String Operations Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 20px auto;
        }

        .output {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>String Operations</h1>

<div class="container">
    <form method="post">

    Strings:
        <input type="text" id="str1" name="str1">
        <input type="text" id="str2" name="str2">
        <button type="submit">Submit</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];

        echo "<div class='output'><h2>Concatenation</h2>";
        echo "String 1: $str1<br>";
        echo "String 2: $str2<br>";
        echo "Result: " . $str1 . " " . $str2 . "<br></div>";

        echo "<div class='output'><h2>Length</h2>";
        echo "Length of String 1: " . strlen($str1) . "<br>";
        echo "Length of String 2: " . strlen($str2) . "<br></div>";

        echo "<div class='output'><h2>Uppercase</h2>";
        echo "String 1 in uppercase: " . strtoupper($str1) . "<br>";
        echo "String 2 in uppercase: " . strtoupper($str2) . "<br></div>";

        echo "<div class='output'><h2>Lowercase</h2>";
        echo "String 1 in lowercase: " . strtolower($str1) . "<br>";
        echo "String 2 in lowercase: " . strtolower($str2) . "<br></div>";

        echo "<div class='output'><h2>Substring</h2>";
        $substr = substr($str1, 2, 4);
        echo "Substring of String 1: $substr<br></div>";

        echo "<div class='output'><h2>Replace</h2>";
        $replace = str_replace("old", "new", $str1);
        echo "Replace 'old' with 'new' in String 1: $replace<br></div>";

        echo "<div class='output'><h2>Split</h2>";
        $split = explode(" ", $str1);
        echo "Split String 1 by spaces: ";
        print_r($split);
        echo "<br></div>";

    }

    ?>
</div>

</body>
</html>
