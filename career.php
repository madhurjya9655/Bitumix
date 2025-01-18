<?php include __DIR__ . '/includes/header.php'; ?>

<main>
    <!-- Header Section -->
    <section class="career-header text-center text-white py-5" style="background: linear-gradient(to right, #ffcc00, #ff9900);">
        <div class="container">
            <h1>Join Our Team</h1>
            <p>Shape your career with us! Explore exciting opportunities and be part of our dynamic team.</p>
        </div>
    </section>

    <!-- What We Offer Section -->
    <section class="offers bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">What We Offer</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon-box mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h5>Collaborative Environment</h5>
                    <p>Work with an enthusiastic and skilled team.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon-box mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h5>Learning Opportunities</h5>
                    <p>Enhance your skills with training programs.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon-box mb-3">
                        <i class="fas fa-briefcase fa-3x text-primary"></i>
                    </div>
                    <h5>Competitive Benefits</h5>
                    <p>Enjoy benefits designed for work-life balance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Apply Form Section -->
    <section id="apply" class="apply-form py-5">
        <div class="container">
            <h2 class="text-center mb-4">Apply for a Position</h2>
            <form action="submit_application.php" method="POST" class="shadow p-4 bg-white rounded">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position Applied For</label>
                    <input type="text" id="position" name="position" class="form-control" placeholder="Enter position name" required>
                </div>
                <div class="mb-3">
                    <label for="resume" class="form-label">Upload Resume</label>
                    <input type="file" id="resume" name="resume" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
