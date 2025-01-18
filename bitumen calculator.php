<?php
session_start();

// Check if the form submission indicator is present in the URL
if (isset($_GET['form_submitted']) && $_GET['form_submitted'] === 'true') {
    $_SESSION['form_submitted'] = true; // Set the session variable
}

// Redirect to Google Form if the session variable is not set
if (!isset($_SESSION['form_submitted']) || $_SESSION['form_submitted'] !== true) {
    header("Location: https://docs.google.com/forms/d/e/1FAIpQLSfULDY4MHdlwqIt-qYX5D8GDx5zT4DhwEvZAonPypN47189ZQ/viewform");
    exit;
}
?>

<?php include __DIR__ . '/includes/header.php'; ?>

<main style="text-align: center; font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px;">
    <div style="max-width: 500px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #004080;">Bitumix India Bitumen Requirement Calculator</h1>
        <p style="color: #555; margin-bottom: 20px;">Calculate the required bitumen for your road construction project.</p>

        <?php
        // Initialize variables for retaining values
        $length = $_POST['length'] ?? '';
        $width = $_POST['width'] ?? '';
        $thickness = $_POST['thickness'] ?? '';
        $applicationType = $_POST['applicationType'] ?? '';
        ?>

        <form method="POST" action="">
            <label for="length" style="font-weight: bold; margin-top: 10px; display: block;">Road Length (in meters):</label>
            <input type="number" id="length" name="length" value="<?php echo htmlspecialchars($length); ?>" required style="width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px;">

            <label for="width" style="font-weight: bold; margin-top: 10px; display: block;">Road Width (in meters):</label>
            <input type="number" id="width" name="width" value="<?php echo htmlspecialchars($width); ?>" required style="width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px;">

            <label for="thickness" style="font-weight: bold; margin-top: 10px; display: block;">Layer Thickness (in mm):</label>
            <input type="number" id="thickness" name="thickness" value="<?php echo htmlspecialchars($thickness); ?>" required style="width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px;">

            <label for="applicationType" style="font-weight: bold; margin-top: 10px; display: block;">Bitumen Application Type:</label>
            <select id="applicationType" name="applicationType" required style="width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px;">
                <option value="" disabled <?php echo $applicationType === '' ? 'selected' : ''; ?>>Select Application Type</option>
                <option value="prime" <?php echo $applicationType === 'prime' ? 'selected' : ''; ?>>Prime Coat (0.6 kg/m²)</option>
                <option value="tack" <?php echo $applicationType === 'tack' ? 'selected' : ''; ?>>Tack Coat (0.2 kg/m²)</option>
                <option value="dbm" <?php echo $applicationType === 'dbm' ? 'selected' : ''; ?>>Dense Bituminous Macadam (4% bitumen)</option>
                <option value="bc" <?php echo $applicationType === 'bc' ? 'selected' : ''; ?>>Bituminous Concrete (5% bitumen)</option>
            </select>

            <button type="submit" style="padding: 10px 15px; background-color: #004080; color: white; border: none; border-radius: 4px; cursor: pointer;">Calculate</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($length && $width && $thickness && $applicationType) {
                $area = $length * $width;
                $bitumenRequired = 0;
                $layerType = '';

                if ($applicationType === 'prime') {
                    $rate = 0.6;
                    $bitumenRequired = $area * $rate;
                    $layerType = "Prime Coat";
                } elseif ($applicationType === 'tack') {
                    $rate = 0.2;
                    $bitumenRequired = $area * $rate;
                    $layerType = "Tack Coat";
                } elseif ($applicationType === 'dbm' || $applicationType === 'bc') {
                    $density = 2.3; // average density in g/cm³
                    $volume = $area * ($thickness / 1000); // volume in m³
                    $mass = $volume * $density * 1000; // mass in kg
                    $bitumenPercentage = $applicationType === 'dbm' ? 0.04 : 0.05;
                    $bitumenRequired = $mass * $bitumenPercentage;
                    $layerType = $applicationType === 'dbm' ? "Dense Bituminous Macadam" : "Bituminous Concrete";
                }

                echo "<div class='result' style='margin-top: 20px; font-size: 1.2em; font-weight: bold;'>The bitumen required is " . number_format($bitumenRequired, 2) . " kg for $layerType.</div>";
            }
        }
        ?>
    </div>
    <div class="branding" style="margin-top: 20px; font-size: 0.9em; color: #555;">
        <p>Powered by Bitumix India - Leaders in Bitumen Solutions</p>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
