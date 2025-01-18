<?php
// Ensure the $base_url variable is defined if this file is included separately
if (!isset($base_url)) {
    $base_url = "/"; // Adjust this if your project is in a subfolder
}
?>

<section id="footer">
    <div class="footer-container">
        <!-- Registered Office -->
        <div class="footer-section">
            <h4>Registered Office:</h4>
            <p>Sikaria Compound, Christian Basti, G.S. Road, Guwahati-781005, Assam, India.</p>
            <p><i class="fas fa-phone"></i> +91 6901454085</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/bitumixindiallp" title="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/company/bitumix-india-llp/" title="LinkedIn" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/bitumixindiallp/" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/BitumixLlp" title="X (Twitter)" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://wa.me/919876543210" title="WhatsApp" target="_blank" style="color: #25D366;">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <!-- Useful Links -->
        <div class="footer-section">
            <h4>Useful Links</h4>
            <ul>
                <li><a href="<?php echo $base_url; ?>products.php">Products</a></li>
                <li><a href="<?php echo $base_url; ?>about.php">About Us</a></li>
                <li><a href="<?php echo $base_url; ?>contact.php">Contact Us</a></li>
                <li><a href="<?php echo $base_url; ?>client.php">Clients</a></li>
                <li><a href="<?php echo $base_url; ?>blog.php">Blog</a></li>
                <li><a href="<?php echo $base_url; ?>career.php">Career</a></li>
            </ul>
        </div>

        <!-- Subscribe Section -->
        <div class="footer-section">
            <h4>Subscribe Now</h4>
            <p>Don’t miss our future updates! Get Subscribed Today!</p>
            <form action="#" method="POST" class="subscribe-form">
                <input type="email" name="email" placeholder="Your mail here" required>
                <button type="submit"><i class="fa-solid fa-envelope"></i></button>
            </form>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="footer-bottom">
        <p>©2023. Bitumix India LLP. All Rights Reserved.</p>
        <div class="footer-links">
            <a href="<?php echo $base_url; ?>privacy.php">Privacy Policy</a>
            <a href="<?php echo $base_url; ?>disclaimer.php">Disclaimer</a>
        </div>
    </div>
</section>

<!-- Footer Styles -->
<style>
    #footer {
        background-color: #002d59;
        color: white;
        padding: 40px 20px;
        font-family: Arial, sans-serif;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-section {
        flex: 1;
        min-width: 280px;
    }

    .footer-section h4 {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #ffcc00;
    }

    .footer-section p, .footer-section ul {
        margin: 0;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 10px;
    }

    .footer-section ul li a {
        color: #fff;
        text-decoration: none;
    }

    .footer-section ul li a:hover {
        text-decoration: underline;
        color: #ffcc00;
    }

    .social-icons {
        margin-top: 10px;
    }

    .social-icons a {
        color: white;
        font-size: 1.2rem;
        margin-right: 10px;
        transition: color 0.3s;
    }

    .social-icons a:hover {
        color: #ffcc00;
    }

    .subscribe-form {
        margin-top: 10px;
        display: flex;
        gap: 10px;
    }

    .subscribe-form input {
        flex: 1;
        padding: 8px;
        font-size: 0.9rem;
        border: none;
        border-radius: 4px;
    }

    .subscribe-form button {
        background-color: #ffcc00;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.9rem;
    }

    .subscribe-form button:hover {
        background-color: #e6b800;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 0.9rem;
    }

    .footer-links a {
        color: #ffcc00;
        text-decoration: none;
        margin: 0 10px;
    }

    .footer-links a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-section {
            min-width: 100%;
        }

        .social-icons a {
            font-size: 1.5rem;
        }
    }
</style>
