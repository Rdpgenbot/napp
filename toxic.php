<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toxic gf</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #ff007f;
            font-size: 24px;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #444;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border: none;
            outline: none;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .response {
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            border-radius: 5px;
            color: #00ff00;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Your Toxic GF</h1>
    
    <form method="POST">
        <input type="text" name="message" class="message-input" placeholder="Enter your message" required>
        <input type="submit" value="Send">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['message'])) {
        $message = urlencode($_POST['message']);
        $apiUrl = "http://naybct.rf.gd/simi.php?chat=" . $message;

        // Send request to API
        $response = file_get_contents($apiUrl);
        
        if ($response !== false) {
            echo "<div class='response'><strong>API Response:</strong> " . htmlspecialchars($response) . "</div>";
        } else {
            echo "<div class='response'><strong>Error:</strong> Failed to get response from the API.</div>";
        }
    }
    ?>
</div>

</body>
</html>