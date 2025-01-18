<?php
$base_url = "/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Files -->
    <link href="<?php echo $base_url; ?>css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url; ?>css/animate.compat.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url; ?>css/styles.css" rel="stylesheet" type="text/css">

    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- JS Files -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script defer src="<?php echo $base_url; ?>js/scripts.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $base_url; ?>Images/bitumix logo_png.png" type="image/png">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>Images/bitumix logo_png.png" type="image/png">

    <title>Bitumix India LLP - Leading Bitumen Supplier</title>
    <style>
        /* Main header styles */
        .main-header {
            background-color: #1A1C27;
            padding: 15px 0;
            position: relative;
        }

        .main-header .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        header.main-header {
    background-color: transparent; /* Make the header background transparent */
    padding: 15px 0;
    position: relative;
}

        .main-header h1 {
            color: #FFCB0F;
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .main-header h1 span {
            color: #fff;
        }

        /* Navigation styles */
        nav {
    background-color: transparent; /* Set the background color to transparent */
    margin-left: auto;
    padding:0; /* Align menu to the right */
}

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            color: #9D9D9F;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            transition: all 0.3s ease;
            font-size: 15px;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #FFCB0F;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        /* Dropdown styles */
        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #1A1C27;
            min-width: 220px;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        nav ul li:hover > ul {
            display: block;
        }

        nav ul li ul li {
            width: 100%;
        }

        nav ul li ul li a {
            padding: 12px 20px;
            border-radius: 0;
        }

        .menu-icon {
            display: none;
            color: #FFCB0F;
            font-size: 24px;
            cursor: pointer;
        }

        /* Mobile styles */
        @media (max-width: 768px) {
            nav {
                display: none;
                position: absolute;
                top: 100%;
                right: 0;
                width: 100%;
                background-color: #1A1C27;
                padding: 0;
                z-index: 1000;
            }

            nav.show {
                display: block;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            nav ul li a {
                padding: 15px;
                width: 100%;
            }

            nav ul li ul {
                position: static;
                display: none;
                box-shadow: none;
            }

            nav ul li.active > ul {
                display: block;
            }

            .menu-icon {
                display: block;
            }
        }

        @media (min-width: 769px) {
            nav {
                display: flex;
                justify-content: flex-end; /* Align to the right on larger screens */
            }

            .menu-icon {
                display: none;
            }
        }
    </style>
</head>
<body>
    <section id="sec-0">
        <!-- Top Header Section -->
        <header class="top">
            <div class="container">
                <p><i class="fa-solid fa-phone"></i> +91 6901454085</p>
                <p><i class="fa-solid fa-envelope"></i> info@petroproducts.in</p>
                <p><i class="fa-regular fa-clock"></i> Mon-Sat 09:00am-07:00pm</p>
                <div class="social">
                    <a href="https://www.facebook.com/bitumixindiallp" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/bitumixindiallp/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/bitumix-india-llp/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://x.com/BitumixLlp" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </header>

        <!-- Main Navigation -->
        <header class="main-header">
            <h1><span>BITUMIX</span>INDIA</h1>
            <i class="fa-solid fa-bars menu-icon" onclick="toggleMenu()"></i>
            <nav id="main-menu">
                <ul>
                    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                    <li>
                        <a href="#">About</a>
                        <ul>
                            <li><a href="<?php echo $base_url; ?>about.php">Who We Are</a></li>
                            <li><a href="<?php echo $base_url; ?>project.php">Projects</a></li>
                            <li><a href="<?php echo $base_url; ?>blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $base_url; ?>client.php">Clients</a></li>
                    <li>
                        <a href="#">Products</a>
                        <ul>
                            <li><a href="<?php echo $base_url; ?>bitumen-vg10.php">Bitumen VG 10</a></li>
                            <li><a href="<?php echo $base_url; ?>bitumen-vg30.php">Bitumen VG 30</a></li>
                            <li><a href="<?php echo $base_url; ?>bitumen-vg40.php">Bitumen VG 40</a></li>
                            <li><a href="<?php echo $base_url; ?>bitumen-emulsion.php">Bitumen Emulsion</a></li>
                            <li><a href="<?php echo $base_url; ?>Coldmix_Emulsion.php">Cold Mix Emulsion</a></li>
                            <li><a href="<?php echo $base_url; ?>Polymer_Modified_Bitumen.php">Polymer Modified Bitumen</a></li>
                            <li><a href="<?php echo $base_url; ?>Crumb_Rubber_Modified_Bitumen.php">Crumb Rubber Modified Bitumen</a></li>
                            <li><a href="<?php echo $base_url; ?>Rapid_Road_Repair.php">Rapid Road Repair</a></li>
                            <li><a href="<?php echo $base_url; ?>Light_Diesel_Oil.php">Light Diesel Oil</a></li>
                            <li><a href="<?php echo $base_url; ?>Road_Marking_Solution.php">Road Marking Solution</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $base_url; ?>bitumen calculator.php">Calculator</a></li>
                    <li><a href="<?php echo $base_url; ?>contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </section>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('main-menu');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>
