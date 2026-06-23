<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmed | 24K Magic</title>
    <!-- Importing the same font family you used in index -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: #d4af37;
            --bg-dark: #0c0c0c;
            --card-bg: #161616;
            --text-light: #ffffff;
            --text-muted: #aaaaaa;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .confirmation-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-top: 4px solid var(--gold);
            padding: 40px;
            border-radius: 4px;
            max-width: 500px;
            width: 90%;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.8s ease-out;
        }

        .icon {
            font-size: 3rem;
            color: var(--gold);
            margin-bottom: 20px;
        }

        h2 {
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
            color: var(--text-light);
        }

        p {
            color: var(--text-muted);
            line-height: 1.6;
            font-size: 1rem;
            margin-bottom: 30px;
        }

        strong {
            color: var(--gold);
        }

        .btn-back {
            display: inline-block;
            padding: 12px 30px;
            background-color: transparent;
            color: var(--gold);
            border: 2px solid var(--gold);
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .btn-back:hover {
            background-color: var(--gold);
            color: var(--bg-dark);
            cursor: pointer;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.4);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="confirmation-card">
        <div class="icon">✨</div>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['client_name'])) {
            $name = htmlspecialchars($_POST['client_name']);
            $email = htmlspecialchars($_POST['client_email']);
            
            echo "<h2>Booking Received</h2>";
            echo "<p>Thank you, <strong>" . $name . "</strong>! Your request has been successfully locked in. A golden confirmation itinerary has been sent to <strong>" . $email . "</strong>.</p>";
        } else {
            // Guard rail if someone tries to access submit.php directly without submitting the form
            echo "<h2>Access Denied</h2>";
            echo "<p>No data was submitted. Please return to the main page to make a booking.</p>";
        }
        ?>

        <a href="index.php" class="btn-back">Return to Home</a>
    </div>

</body>
</html>
