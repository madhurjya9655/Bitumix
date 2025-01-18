<?php include __DIR__ . '/includes/header.php'; ?>
<main>
    <style>
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

        .product-image {
            float: right;
            margin: 0 0 20px 20px;
            width: 400px;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #0056b3;
            margin-bottom: 10px;
        }

        p {
            margin: 10px 0 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 40px;
            margin: 10px 0;
        }

        ul li {
            margin-bottom: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #0056b3;
            color: white;
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
        }

        .contact-us a:hover {
            background-color: #003060;
        }
    </style>

    <section class="product-page">
        <div class="container">
            <h1>Crumb Rubber Modified Bitumen (CRMB)</h1>
            <p>CRMB is a sustainable and high-performance binder produced by incorporating finely ground crumb rubber from recycled tires into bitumen, improving asphalt mixture performance while addressing tire waste disposal issues.</p>
            
            <!-- Product Image Positioned Top-Right -->
            <div class="product-image">
                <img src="/Images/crmb.webp" alt="Crumb Rubber Modified Bitumen">
            </div>

            <!-- Benefits Section -->
            <h2>Benefits</h2>
            <ul>
                <li><strong>Enhanced Durability:</strong> Increases resistance to rutting, cracking, and fatigue.</li>
                <li><strong>Improved Flexibility:</strong> Better adaptability to temperature fluctuations, reducing cracking risks.</li>
                <li><strong>Noise Reduction:</strong> Reduces noise levels compared to conventional asphalt pavements.</li>
                <li><strong>Environmental Benefits:</strong> Utilizes recycled tire waste, promoting sustainability.</li>
                <li><strong>Improved Skid Resistance:</strong> Enhances road safety in specific applications.</li>
            </ul>

            <!-- Applications Section -->
            <h2>Applications</h2>
            <ul>
                <li>Highways and Major Roads</li>
                <li>Airport Runways</li>
                <li>Urban Roads</li>
                <li>Overlay Construction</li>
            </ul>

            <!-- Technical Specifications Table -->
            <h2>Technical Specifications</h2>
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Test Items</th>
                        <th>CRMB-55</th>
                        <th>CRMB-60</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Penetration @ 25 °C, 0.1 mm, 100 g, 5 sec</td>
                        <td>&lt;60</td>
                        <td>&lt;50</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Softening Point, °C, (min)</td>
                        <td>55</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Elastic Recovery of half thread in Ductilometer at 15 °C, (% min)</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Flash Point, PMO, °C, (min)</td>
                        <td>220</td>
                        <td>220</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Separation, Difference in softening point, °C, (max)</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td rowspan="3">6</td>
                        <td>Penetration @ 25 °C, 0.1 mm, 100 g, 5 sec, (max % of Original)</td>
                        <td>40</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Increase in Softening Point, °C, (max)</td>
                        <td>6</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Elastic Recovery of half thread in Ductilometer at 25 °C, (% min)</td>
                        <td>35</td>
                        <td>35</td>
                    </tr>
                </tbody>
            </table>

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
