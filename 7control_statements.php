<!DOCTYPE html>
<html>
<head>
    <title>PHP Control Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        h3 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
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

        p {
            line-height: 1.6;
        }

        .code-output {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>PHP Control Statements</h1>

<div class="container">
    <?php
    $number = 10;
    echo "<h3>IF-ELSE Example:</h3>";
    echo "<div class='code-output'>";
    if ($number > 0) {
        echo "$number is a positive number.";
    } else {
        echo "$number is not a positive number.";
    }
    echo "</div>";

    $day = 3;
    echo "<h3>SWITCH Example:</h3>";
    echo "<div class='code-output'>";
    switch ($day) {
        case 1:
            echo "Today is Monday.";
            break;
        case 2:
            echo "Today is Tuesday.";
            break;
        case 3:
            echo "Today is Wednesday.";
            break;
        default:
            echo "Invalid day.";
    }
    echo "</div>";

    echo "<h3>FOR Loop Example:</h3>";
    echo "<div class='code-output'>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration $i<br>";
    }
    echo "</div>";

    echo "<h3>WHILE Loop Example:</h3>";
    echo "<div class='code-output'>";
    $count = 1;
    while ($count <= 3) {
        echo "Count is: $count<br>";
        $count++;
    }
    echo "</div>";

    echo "<h3>FOREACH Loop Example:</h3>";
    $colors = array("Red", "Green", "Blue");
    foreach ($colors as $color) {
        echo "Color: $color<br>";
    }
    ?>
</div>

</body>
</html>
