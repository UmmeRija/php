<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Footer styles */
    body, html {
        
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .footer {
        background-color: #1a1a1a;
        color: #fff;
        padding: 40px 20px 20px;
        font-size: 14px;
        position: fixed;
        bottom: 0;
        width: 100%;
        clear: both;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 30px;
    }

    .footer-section {
        flex: 1 1 200px;
        min-width: 200px;
    }

    .footer-section h3 {
        color: #00bcd4;
        margin-bottom: 10px;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li a {
        text-decoration: none;
        color: #ccc;
        transition: color 0.3s;
    }

    .footer-section ul li a:hover {
        color: #fff;
    }

    .footer-section p {
        margin: 5px 0;
    }

    .footer-section.social a img {
        width: 24px;
        margin-right: 10px;
        filter: invert(100%);
    }

    .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid #333;
        margin-top: 20px;
        font-size: 13px;
        color: #aaa;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    /* Ensures footer stays at the bottom of the page */
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>
<body>
    <!-- footer.php -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>We create awesome web experiences using modern tech. Follow us on social platforms.</p>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>Email: contact@yourdomain.com</p>
                <p>Phone: +92 123 4567890</p>
            </div>
            <div class="footer-section social">
                <h3>Follow Us</h3>
                <a href="#"><img src="http://localhost/rija/images/fb.png" alt="Facebook"></a>
                <a href="#"><img src="http://localhost/rija/images/twitter.png" alt="Twitter"></a>
                <a href="#"><img src="http://localhost/rija/images/instagram.avif" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 YourWebsite | All rights reserved.
        </div>
    </footer>
</body>
</html>
