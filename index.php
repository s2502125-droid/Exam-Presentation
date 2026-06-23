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


        html {
            scroll-behavior: smooth;
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
            flex-direction: column; /* Forces the image and audio to stack vertically */
            align-items: flex-end;   /* Keeps the alignment aligned to the right side of the split */
        }

        .iconic-audio {
            width: 100%;
            max-width: 380px;       /* Matches the exact max-width of your iconic-image */
            margin-top: 15px;       /* Creates clean spacing directly under the image */
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
        .featured-video-container {
            width: 100%;
            background-color: #0d0d0d;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .featured-video {
            width: 100%;
            max-height: 600px; /* Adjust this height limit to fit your design choice */
            object-fit: cover; /* Ensures the video crops cleanly without stretching */
            display: block;
        }

        /* --- Products Grid Section --- */
        .products-section {
            max-width: 800px; /* Reduced width to make the single-column content look balanced */
            margin: 80px auto;
            padding: 0 40px;
            display: flex;
            flex-direction: column;
            gap: 80px; /* Even vertical spacing between items */
        }

        .product-card {
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Forces content to stack tightly from top to bottom */
            align-items: flex-start;     /* Keeps text aligned cleanly to the left */
            text-align: left;
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
            margin-top: 0;
            margin-bottom: 8px; /* Dictates the tight, precise gap before the description */
            line-height: 1.4;
        }

        .product-description {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Grid specific alignments to mimic the layout asymmetry */
        .grid-left, .grid-right {
            padding: 0;
            margin: 0 auto; /* Handles the default centering layout */
            max-width: 500px; 
            width: 100%;
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

        .booking-toggle-btn {
            background-color: transparent;
            color: #ffffff;
            border: 1px solid var(--gold);
            padding: 10px 25px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .booking-toggle-btn:hover {
            background-color: var(--gold);
            color: #000;
        }

        .map-wrapper {
            max-width: 300px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: inline-block;
            width: 100%;
        }

        @media (max-width: 900px) {
            .footer-info {
            display: flex;
            flex-direction: column;
            align-items: center;
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

        <section id="about" class="iconic-section"></section>

        <div class="iconic-image-wrapper">
            <img class="iconic-image" src="sound.png" alt="Bruno Mars Red Suit">
            <audio class="iconic-audio" controls>
                <source src="sound.mp3" type="audio/mpeg">
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

    <section class="featured-video-container">
    <video class="featured-video" controls autoplay muted loop>
        <source src="video.mp4" type="video/mp4">
</section>

    <section class="products-section">

        <section id="shop" class="products-section"></section>
        
        <div class="product-card grid-left">
            <div>
                <div class="product-image-container">
                    <img src="shirt.png" alt="24K Magic Tour T-Shirt">
                </div>
                <div class="product-price">$35</div>
                <h3 class="product-title">24K Magic 2018 World Tour Black Graphic Concert Merch T-Shirt</h3>
            </div>
            <p class="product-description">A bold, tour-exclusive design that captures the energy and luxury aesthetic of the 24K Magic live experience.</p>
        </div>

        <div class="product-card grid-right">
            <div>
                <div class="product-image-container">
                    <img src="poster.jpg" alt="Poster Set" style="width: 100%; height: auto;">
                </div>
                <div class="product-price">$20</div>
                <h3 class="product-title">Poster Set</h3>
            </div>
            <p class="product-description">A curated collection of high-quality prints that showcase the iconic visuals and style of the 24K Magic era.</p>
        </div>

        <div class="product-card grid-left" style="max-width: 500px; margin: 0 auto; width: 100%;">
            <div>
                <div class="product-image-container">
                    <img src="vinyl.jpg" alt="Vinyl Deluxe Edition" style="width: 100%; height: auto;">
                </div>
                <div class="product-price">$59</div>
                <h3 class="product-title">Vinyl Record (Deluxe Edition)</h3>
            </div>
            <p class="product-description">A premium collector's edition vinyl featuring the full 24K Magic album with rich sound and exclusive packaging.</p>
        </div>

    </section>

    <footer>

        <footer id="contact"></footer>

    <div class="footer-top">
        <div class="footer-brand">
            <h2>Bruno Mars</h2>
            <p>Monday to Friday<br>Response within 24-48 hours</p>
            
            <button class="booking-toggle-btn" onclick="toggleBookingForm()">Book Here</button>
        </div>

        <div id="booking-container" style="display: none; width: 100%; max-width: 400px; margin: 20px 0; text-align: left;">
            <form action="" method="POST" class="booking-form">
                <h3 style="margin-bottom: 10px; font-size: 0.9rem;">Request a Booking</h3>
                <input type="text" name="client_name" placeholder="Your Name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.2); color: #fff;">
                <input type="email" name="client_email" placeholder="Your Email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.2); color: #fff;">
                <button type="submit" class="submit-btn" style="background: var(--gold); color: #fff; border: none; padding: 10px 20px; width: 100%; cursor: pointer; text-transform: uppercase; font-weight: 600; letter-spacing: 1px;">Submit Request</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['client_name'])) {
                $name = htmlspecialchars($_POST['client_name']);
                $email = htmlspecialchars($_POST['client_email']);
                
                echo "<div id='thank-you-notif' style='margin-top: 15px; padding: 10px; background: rgba(255,255,255,0.1); border-left: 3px solid var(--gold); font-size: 0.8rem; transition: opacity 0.5s ease;'>";
                echo "Thank you, " . $name . "! A confirmation email has been sent to " . $email . ".";
                echo "</div>";
                echo "<script>
                    setTimeout(function() {
                        var notif = document.getElementById('thank-you-notif');
                        if(notif) {
                            notif.style.opacity = '0';
                            setTimeout(function() { notif.style.display = 'none'; }, 500);
                        }
                    }, 4000); 
                </script>";
            }
            ?>
        </div>

        <div class="footer-info">
            <h3>For Bookings & Collaborations</h3>
            <p>123 Main Street</p>
            <p>(+123) 456-7890</p>
            <p style="margin-bottom: 15px;">support@brunomars.com</p>
            
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531531615!3d-37.81627977975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1611532432000!5m2!1sen!2s" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
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

<script>
function toggleBookingForm() {
    var formContainer = document.getElementById("booking-container");
    if (formContainer.style.display === "none") {
        formContainer.style.display = "block";
    } else {
        formContainer.style.display = "none";
    }
}
</script>

</body>
</html>
