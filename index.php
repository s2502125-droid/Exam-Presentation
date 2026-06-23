<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruno Mars Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        /* --- Reset & Base Styles --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, .brand-name {
            font-family: 'Cinzel', serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: opacity 0.3s ease;
        }

        a:hover {
            opacity: 0.7;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* --- Colors --- */
        :root {
            --gold: #bfa15f;
            --dark-olive: #605f4b;
            --light-bg: #f4f1ea;
            --text-dark: #2a2925;
            --text-muted: #706f69;
        }

        /* --- Navigation --- */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 10%;
            background-color: var(--dark-olive);
            color: #ffffff;
        }

        header .brand-name {
            font-size: 1.5rem;
            font-weight: 700;
        }

        header nav a {
            font-size: 0.8rem;
            margin-left: 30px;
            letter-spacing: 2px;
            font-weight: 400;
        }

        /* --- Hero Section --- */
        .hero {
            position: relative;
            text-align: center;
            background-color: #ffffff;
            padding-bottom: 60px;
        }

        .hero-image-wrapper {
            position: relative;
            max-width: 750px;
            margin: 0 auto;
        }

        .hero-image {
            width: 100%;
            object-fit: cover;
        }

        .hero-tag {
            position: absolute;
            bottom: 40px;
            left: -40px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--dark-olive);
            font-weight: 600;
        }

        .hero-btn {
            position: absolute;
            bottom: 30px;
            right: -40px;
            background-color: var(--dark-olive);
            color: #ffffff;
            padding: 15px 35px;
            border-radius: 30px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* --- Introduction Section --- */
        .intro-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1000px;
            margin: 60px auto;
            padding: 0 40px;
            gap: 50px;
        }

        .intro-text-block {
            flex: 1;
            position: relative;
        }

        .ring-icon {
            width: 30px;
            margin-bottom: 20px;
            opacity: 0.6;
        }

        .intro-text {
            font-size: 0.9rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 1.8;
            text-align: justify;
        }

        .intro-image-block {
            width: 250px;
        }

        /* --- Iconic Section --- */
        .iconic-section {
            background-color: var(--light-bg);
            display: flex;
            align-items: center;
            padding: 80px 10%;
            gap: 80px;
        }

        .iconic-image-wrapper {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        .iconic-image {
            max-width: 380px;
            width: 100%;
        }

        .iconic-content {
            flex: 1;
        }

        .iconic-content h2 {
            font-size: 2.2rem;
            color: var(--dark-olive);
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .iconic-content p {
            font-size: 0.85rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 40px;
            max-width: 400px;
        }

        .iconic-list {
            list-style: none;
        }

        .iconic-list li {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            color: var(--text-dark);
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .iconic-list li::before {
            margin-right: 15px;
            font-size: 0.7rem;
            color: var(--text-muted);
        }
        .iconic-list li:nth-child(1)::before { content: "01."; }
        .iconic-list li:nth-child(2)::before { content: "02."; }
        .iconic-list li:nth-child(3)::before { content: "03."; }

        /* --- Featured Banner --- */
        .featured-banner {
            position: relative;
            background-color: #0d0d0d;
            color: #ffffff;
            text-align: center;
            padding: 140px 20px;
            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://via.placeholder.com/1920x800/1a1a1a?text=Bruno+Mars+Live'); /* Replace with actual background image */
            background-size: cover;
            background-position: center;
        }

        .featured-banner .tag {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-bottom: 10px;
            display: block;
            color: var(--gold);
        }

        .featured-banner h2 {
            font-size: 3rem;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        .featured-banner p {
            font-size: 0.85rem;
            max-width: 600px;
            margin: 0 auto 30px auto;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.8;
            line-height: 1.8;
        }

        .banner-btn {
            border: 1px solid #ffffff;
            padding: 12px 40px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: transparent;
            color: #ffffff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .banner-btn:hover {
            background-color: #ffffff;
            color: #000000;
        }

        /* --- Products Grid Section --- */
        .products-section {
            max-width: 1100px;
            margin: 80px auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px 80px;
        }

        .product-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-image-container {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }

        .product-price {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .product-title {
            font-size: 1.4rem;
            color: var(--text-dark);
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .product-description {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Grid specific alignments to mimic the layout asymmetry */
        .grid-left {
            padding-right: 20px;
        }

        .grid-right {
            padding-left: 20px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        /* --- Footer --- */
        footer {
            background-color: var(--dark-olive);
            color: #ffffff;
            padding: 60px 10% 30px 10%;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 40px;
            margin-bottom: 30px;
        }

        .footer-brand h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .footer-brand p {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.6;
        }

        .footer-info {
            text-align: right;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 1.8;
        }

        .footer-info h3 {
            font-size: 0.8rem;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        .footer-info p {
            opacity: 0.7;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .copyright {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.5;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-circle {
            width: 35px;
            height: 35px;
            border: 1px solid rgba(255,255,255,0.4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            text-transform: uppercase;
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .social-circle:hover {
            border-color: #ffffff;
            opacity: 1;
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 900px) {
            .intro-section, .iconic-section, .products-section, .footer-top, .footer-bottom {
                flex-direction: column;
                grid-template-columns: 1fr;
                text-align: center;
                align-items: center;
            }
            .iconic-image-wrapper {
                justify-content: center;
            }
            .footer-info {
                text-align: center;
                margin-top: 30px;
            }
            .footer-bottom {
                gap: 20px;
            }
            .hero-title {
                font-size: 3rem;
            }
            .hero-btn, .hero-tag {
                position: static;
                margin: 20px auto;
                display: inline-block;
            }
            .grid-left, .grid-right {
                padding: 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="brand-name">Bruno Mars</div>
        <nav>
            <a href="#shop">Shop</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-image-wrapper">
            <img class="hero-image" src="hero-img.png" alt="Bruno Mars New Release">
            <span class="hero-tag">New Release</span>
            <a href="#" class="hero-btn">Buy Now For 20% Off!</a>
        </div>
    </section>

    <section class="intro-section">
        <div class="intro-text-block">
            <svg class="ring-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="14" r="7"/>
                <polygon points="12,2 15,5 12,8 9,5"/>
            </svg>
            <p class="intro-text">
                A bold celebration of sound, style, and success—24K Magic blends funk, R&B, and pure confidence into a polished era of modern luxury. Designed for nights that don't end and energy that never fades.
            </p>
        </div>
        <div class="intro-image-block">
            <img src="img.jpg" alt="Bruno Mars Portrait">
        </div>
    </section>

    <section class="iconic-section">
        <div class="iconic-image-wrapper">
            <img class="iconic-image" src="soundAlbum.png" alt="Bruno Mars Red Suit">
            <audio class="iconic-audio" controls>
                <source src="your-audio-file.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
        <div class="iconic-content">
            <h2>What Makes<br>24K Magic Iconic</h2>
            <p>It stands out as a bold statement of sound, style, and effortless confidence.</p>
            
            <ul class="iconic-list">
                <li>Confidence</li>
                <li>Funk</li>
                <li>Style</li>
            </ul>
        </div>
    </section>

    <section class="featured-banner">
        <span class="tag">Featured</span>
        <h2>24K Magic</h2>
        <p>A bold, funk-driven anthem with smooth vocals and a confident, high-energy groove that defines the 24K Magic era.</p>
        <button class="banner-btn">Buy Now</button>
    </section>

    <section class="products-section">
        
        <div class="product-card grid-left">
            <div>
                <div class="product-image-container">
                    <img src="https://via.placeholder.com/400x400/fcfcfc?text=Concert+T-Shirt" alt="24K Magic Tour T-Shirt">
                </div>
                <div class="product-price">$35</div>
                <h3 class="product-title">24K Magic 2018 World Tour Black Graphic Concert Merch T-Shirt</h3>
            </div>
            <p class="product-description">A bold, tour-exclusive design that captures the energy and luxury aesthetic of the 24K Magic live experience.</p>
        </div>

        <div class="product-card grid-right" style="margin-top: 40px;">
            <div>
                <div class="product-image-container">
                    <div class="gallery-grid">
                        <img src="https://via.placeholder.com/150/f5f5f5?text=1" alt="Poster 1">
                        <img src="https://via.placeholder.com/150/f5f5f5?text=2" alt="Poster 2">
                        <img src="https://via.placeholder.com/150/f5f5f5?text=3" alt="Poster 3">
                        <img src="https://via.placeholder.com/150/f5f5f5?text=4" alt="Poster 4">
                        <img src="https://via.placeholder.com/150/f5f5f5?text=5" alt="Poster 5">
                        <img src="https://via.placeholder.com/150/f5f5f5?text=6" alt="Poster 6">
                    </div>
                </div>
                <div class="product-price">$20</div>
                <h3 class="product-title">Poster Set</h3>
            </div>
            <p class="product-description">A curated collection of high-quality prints that showcase the iconic visuals and style of the 24K Magic era.</p>
        </div>

        <div class="product-card grid-left" style="grid-column: 1 / -1; max-width: 500px; margin: 40px auto 0 0;">
            <div>
                <div class="product-image-container">
                    <img src="https://via.placeholder.com/500x250/fafafa?text=Vinyl+Deluxe+Edition" alt="Vinyl Deluxe Edition">
                </div>
                <div class="product-price">$59</div>
                <h3 class="product-title">Vinyl Record (Deluxe Edition)</h3>
            </div>
            <p class="product-description">A premium collector's edition vinyl featuring the full 24K Magic album with rich sound and exclusive packaging.</p>
        </div>

    </section>

    <footer>
        <div class="footer-top">
            <div class="footer-brand">
                <h2>Bruno Mars</h2>
                <p>Monday to Friday<br>Response within 24-48 hours</p>
            </div>
            <div class="footer-info">
                <h3>For Bookings & Collaborations</h3>
                <p>123 Main Street</p>
                <p>(+123) 456-7890</p>
                <p>support@brunomars.com</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="copyright">© Bruno Mars | Gorilla Management</div>
            <div class="social-icons">
                <a href="#" class="social-circle">Tw</a>
                <a href="#" class="social-circle">Fb</a>
                <a href="#" class="social-circle">Ig</a>
            </div>
        </div>
    </footer>

</body>
</html>
