<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruno Mars Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            color: #333333;
        }

        :root {
            --brand-olive: #6b6651;
            --brand-gold: #c39a24;
            --text-light: #ffffff;
        }

        header {
            background-color: var(--brand-olive);
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Georgia', serif;
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--text-light);
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 60px;
        }

        nav a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: bold;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: opacity 0.2s ease;
        }

        nav a:hover {
            opacity: 0.8;
        }

        .hero {
            position: relative;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            text-align: center;
            padding-top: 40px;
        }

        /* Image Container */
        .image-container {
            position: relative;
            display: inline-block;
            width: 100%;
            z-index: 2;
        }

        .hero-image {
            width: 100%;
            max-width: 650px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .tag-new-release {
            position: absolute;
            bottom: 15%;
            left: 10%;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1rem;
            color: #555555;
            letter-spacing: 1px;
        }

        .cta-button {
            position: absolute;
            bottom: 12%;
            right: 10%;
            background-color: var(--brand-olive);
            color: var(--text-light);
            padding: 18px 45px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            transition: background-color 0.2s ease;
        }
            .cta-button:hover {
                background-color: #55503f;
            }

            @media (max-width: 768px) {
                header {
                    flex-direction: column;
                    gap: 15px;
                    padding: 20px;
                }
                nav ul {
                    gap: 30px;
                }
                .hero-title {
                    font-size: 3.5rem;
                    margin-bottom: -20px;
                }
                .hero-image {
                    max-width: 90%;
                }
                .tag-new-release {
                    position: static;
                    margin-top: 15px;
                    display: block;
                }
                .cta-button {
                    position: static;
                    margin-top: 15px;
                    display: inline-block;
                }
            }
    </style>
</head>
<body>

    <header>
        <a href="#" class="logo">Bruno Mars</a>
        <nav>
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="hero">
        
        <div class="image-container">
            <img src="hero-img.png" alt="Bruno Mars" class="hero-image">
            
            <div class="tag-new-release">New Release</div>
            <a href="#" class="cta-button">Buy Now For 20% Off!</a>
        </div>
    </main>

</body>
</html>