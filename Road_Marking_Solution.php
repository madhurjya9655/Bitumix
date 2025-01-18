<?php include __DIR__ . '/includes/header.php'; ?>
<main>
    <style>
        /* General styling for the product page */
        .product-page {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            margin: 40px 0;
            gap: 20px;
        }

        .product-section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .product-text {
            flex: 1;
            padding: 20px;
            text-align: justify;
        }

        .product-image {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #0056b3;
            margin-bottom: 10px;
            text-align: center;
            font-size: 2rem;
        }

        ul {
            list-style-type: disc;
            padding-left: 40px;
            margin: 10px 0;
        }

        ul li {
            margin-bottom: 8px;
        }

        p {
            margin: 10px 0 20px;
        }

        .contact-us {
            text-align: center;
            margin-top: 40px;
        }

        .contact-us a {
            display: inline-block;
            background-color: #004080;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .contact-us a:hover {
            background-color: #003060;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .product-section {
                flex-direction: column;
                text-align: center;
            }

            .product-text, .product-image {
                padding: 10px;
            }

            h1, h2 {
                font-size: 1.8rem;
            }

            .contact-us a {
                font-size: 16px;
                padding: 10px 20px;
            }
        }
    </style>

    <section class="product-page">
        <div class="container">
            <h1>Road Marking Solutions</h1>
            <p>At Bitumix India LLP, we understand the critical role of effective road markings in ensuring road safety and efficient traffic flow. We offer a comprehensive range of high-quality road marking solutions, including paints, thermoplastics, and advanced technologies, to meet the diverse needs of various road projects.</p>

            <!-- Road Marking Paints Section -->
            <div class="product-section">
                <div class="product-text">
                    <h2>Road Marking Paints</h2>
                    <p>Road marking paints are specialized coatings applied to road surfaces to create lines, symbols, and other markings that guide traffic flow, enhance safety, and improve visibility.</p>
                    <ul>
                        <li>Thermoplastic: Durable and long-lasting, ideal for high-traffic areas. Available in various colors and thicknesses.</li>
                        <li>Water-based: Environmentally friendly, quick-drying, and suitable for various applications.</li>
                        <li>Solvent-based: Offers excellent adhesion and durability, commonly used for high-visibility markings.</li>
                    </ul>
                </div>
                <div class="product-image">
                    <img src="/Images/rsp1.jpeg" alt="Road Marking Paints">
                </div>
            </div>

            <!-- Delineators Section -->
            <div class="product-section">
                <div class="product-text">
                    <h2>Delineators</h2>
                    <p>Road delineators are reflective markers installed along the edge of roadways, medians, or shoulders to improve visibility and enhance road safety, especially during nighttime or low visibility conditions.</p>
                    <ul>
                        <li>Post-mounted delineators: Installed on posts along the road edge.</li>
                        <li>Guardrail-mounted delineators: Attached to guardrails for enhanced visibility.</li>
                    </ul>
                </div>
                <div class="product-image">
                    <img src="/Images/delineator.jpg" alt="Delineators">
                </div>
            </div>

            <!-- Road Pavement Markers Section -->
            <div class="product-section">
                <div class="product-text">
                    <h2>Road Pavement Markers (RPMs)</h2>
                    <p>Road pavement markers are raised devices embedded in the road surface to enhance driver safety, particularly at night or in low-visibility conditions.</p>
                    <ul>
                        <li>Delineator markers: Provide guidance and improve visibility.</li>
                        <li>Rumble strips: Alert drivers to hazards or changes in road conditions.</li>
                    </ul>
                </div>
                <div class="product-image">
                    <img src="/Images/rpm(road pavement markers).jpeg" alt="Road Pavement Markers">
                </div>
            </div>

            <!-- Gantries Section -->
            <div class="product-section">
                <div class="product-text">
                    <h2>Gantries</h2>
                    <p>A road pavement gantry is a structural framework erected over a roadway to support various elements such as traffic signs, overhead message boards, and surveillance cameras.</p>
                </div>
                <div class="product-image">
                    <img src="/Images/gantry.jpg" alt="Gantries">
                </div>
            </div>

            <!-- Crash Barriers Section -->
            <div class="product-section">
                <div class="product-text">
                    <h2>Crash Barriers</h2>
                    <p>Road crash barriers, also known as guardrails or safety barriers, are safety devices installed along roads to prevent vehicles from leaving the roadway and colliding with hazards.</p>
                </div>
                <div class="product-image">
                    <img src="/Images/crash barrier.jpg" alt="Crash Barriers">
                </div>
            </div>

            <!-- Sign Boards Section -->
            <div class="product-section">
                <div class="product-text">
                    <h2>Sign Boards</h2>
                    <p>Road sign boards are crucial components of road infrastructure, conveying vital information to drivers and pedestrians using standardized shapes, colors, and symbols.</p>
                </div>
                <div class="product-image">
                    <img src="/Images/rsp7.jpeg" alt="Sign Boards">
                </div>
            </div>

            <!-- Contact Us Button -->
            <div class="contact-us">
                <a href="https://forms.gle/mrKXHJCCDtp4FwEN6">
                    If you are interested, Contact Us
                </a>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
