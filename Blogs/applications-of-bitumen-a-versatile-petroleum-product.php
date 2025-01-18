<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Page Header Section -->
    <section class="page-header text-center text-white py-5">
        <div class="container">
            <h1 class="animated-header">Applications of Bitumen: A Versatile Petroleum Product</h1>
            <p class="header-description">
                Explore the wide-ranging uses of bitumen in various industries like road construction, waterproofing, and roofing.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content py-5">
        <div class="container">
            <!-- Road Construction -->
            <div class="content-block mb-5">
                <h2 class="section-title">Road Construction</h2>
                <p>
                    Bitumen, a versatile petroleum product, plays a crucial role in road construction. It's used as a binding agent in asphalt mixtures, which are commonly used for paving roads and highways. The use of bitumen promotes sustainable practices and contributes to infrastructure development.
                </p>
                <p>
                    Bitumen enhances the durability of road surfaces, making them resistant to wear and tear caused by heavy traffic and adverse weather conditions. Additionally, bitumen can be recycled and reused, reducing the environmental impact of road construction.
                </p>
            </div>

            <!-- Waterproofing -->
            <div class="content-block mb-5">
                <h2 class="section-title">Waterproofing</h2>
                <p>
                    Bitumen is widely utilized for waterproofing applications in various projects. Some common uses include:
                </p>
                <ul>
                    <li><strong>Foundation Sealing:</strong> Prevents water infiltration and protects building structures from potential damage.</li>
                    <li><strong>Tunnel Construction:</strong> Bitumen coatings provide a reliable barrier against water ingress in tunnels, ensuring safety and durability.</li>
                </ul>
            </div>

            <!-- Asphalt Pavements -->
            <div class="content-block mb-5">
                <h2 class="section-title">Asphalt Pavements</h2>
                <p>
                    Asphalt pavements are a popular choice for road surfaces due to their durability and cost-effectiveness. Regular inspections and timely repairs ensure longevity and performance. Proper maintenance, including crack sealing and pothole patching, reduces the need for costly repairs and contributes to sustainability.
                </p>
            </div>

            <!-- Roofing Materials -->
            <div class="content-block mb-5">
                <h2 class="section-title">Roofing Materials</h2>
                <p>
                    Bitumen is commonly used in roofing materials for its durability and weather resistance. It is a sustainable option due to its recyclability and ability to provide a protective barrier against water leakage, ensuring the longevity of structures.
                </p>
            </div>

            <!-- Tire Manufacturing -->
            <div class="content-block">
                <h2 class="section-title">Tire Manufacturing</h2>
                <p>
                    Bitumen is used in tire manufacturing as a binding agent, enhancing strength, durability, and resistance to various road conditions. Additionally, bitumen plays a role in tire recycling processes, promoting sustainability in the industry.
                </p>
            </div>

            <!-- Call-to-Action Button -->
            <div style="text-align: center; margin-top: 40px;">
                <a href="https://forms.gle/mrKXHJCCDtp4FwEN6" 
                   style="display: inline-block; background-color: #004080; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-size: 18px;">
                   If you are interested, Contact Us
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<!-- Styling -->
<style>
    /* Page Header Section */
    .page-header {
        background: linear-gradient(to right, #004080, #002d59);
        color: white;
        padding: 40px 0;
    }

    .page-header h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
        animation: fadeInDown 1s ease-in-out;
    }

    .page-header .header-description {
        font-size: 1.2rem;
        margin-bottom: 0;
    }

    /* Content Section */
    .content {
        background: #f9f9f9;
        padding: 40px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .content .section-title {
        color: #004080;
        font-size: 1.8rem;
        margin-bottom: 15px;
        font-weight: bold;
        border-bottom: 2px solid #004080;
        display: inline-block;
        padding-bottom: 5px;
    }

    .content p {
        font-size: 1rem;
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
    }

    .content ul {
        list-style: disc;
        margin: 10px 0 20px 20px;
        color: #333;
    }

    .content ul li {
        margin-bottom: 8px;
        line-height: 1.5;
        font-size: 1rem;
    }

    /* Call-to-Action Button */
    a {
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: #002d59;
    }

    /* Animation */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 2rem;
        }

        .content .section-title {
            font-size: 1.5rem;
        }

        .content p, .content ul li {
            font-size: 0.9rem;
        }
    }
</style>
