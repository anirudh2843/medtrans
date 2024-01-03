<!-- diet_result.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Recommendation Result</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('background_result.jpg'); /* Replace with your background image */
            background-size: cover;
            background-position: center;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #fff;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            max-width: 600px;
            margin: 0 auto 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            outline: none;
            text-decoration: none;
            display: inline-block;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Diet Recommendation Result</h2>

    <?php
    // Retrieve data from the form submission in process_diet.php
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // Perform diet recommendation logic based on user input
    // You should replace this with your actual diet recommendation logic
    // For demonstration purposes, a simple message is displayed here
    $recommendation = "For a person of $age years, weighing $weight kg, and with a height of $height cm, we recommend a balanced diet with a mix of proteins, carbohydrates, and healthy fats.";

    // Display the diet recommendation
    echo "<p>$recommendation</p>";
    ?>

    <a href="index.php">
        <button>Go Back to Home</button>
    </a>
</body>
</html>
