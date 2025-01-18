<?php include __DIR__ . '/includes/header.php'; ?>

<main>
    <!-- Logo Section -->
    <section class="logos">
        <div class="container">
            <h1 style="text-align: center; margin-bottom: 20px;">Our Partners and Clients</h1>
            <div class="logo-grid">
                <!-- Replace the src attributes with your actual image paths -->
                <img src="/Images/Client logo/abcl.jpeg" alt="Client Logo">
                <img src="/Images/Client logo/agam-const.jpeg" alt="Client Logo">
                <img src="/Images/Client logo/anil-das.png" alt="Client Logo">
                <img src="/Images/Client logo/appl.png" alt="Client Logo">
                <img src="/Images/Client logo/atlantalogo.png" alt="Client Logo">
                <img src="/Images/Client logo/bcpl.avif" alt="Client Logo">
                <img src="/Images/Client logo/bk-sons.jpeg" alt="Client Logo">
                <img src="/Images/Client logo/brahmaputra-valley-fertilizer-corporation.jpg" alt="Client Logo">
                <img src="/Images/Client logo/bro.jpg" alt="Client Logo">
                <img src="/Images/Client logo/dhariwal.avif" alt="Client Logo">
                <img src="/Images/Client logo/dra.png" alt="Client Logo">
                <img src="/Images/Client logo/gov-arunachal.png" alt="Client Logo">
                <img src="/Images/Client logo/Hindustan Construction Company Limited - HCC Logo.jpg" alt="Client Logo">
                <img src="/Images/Client logo/jandu-const.jpeg" alt="Client Logo">
                <img src="/Images/Client logo/kraminfracon_logo.jpeg" alt="Client Logo">
                <img src="/Images/Client logo/pwd-mizoram.png" alt="Client Logo">
                <img src="/Images/Client logo/ramky-logo-design1.jpg" alt="Client Logo">
                <img src="/Images/Client logo/sailaja.jpg" alt="Client Logo">
                <img src="/Images/Client logo/sushee-infra.png" alt="Client Logo">
                <img src="/Images/Client logo/ttc.jpg" alt="Client Logo">
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<!-- CSS -->
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .logo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        justify-items: center;
        align-items: center;
    }

    .logo-grid img {
        max-width: 100%;
        max-height: 100px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .logo-grid img:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-size: 2rem;
        color: #004080;
        text-align: center;
    }
</style>
