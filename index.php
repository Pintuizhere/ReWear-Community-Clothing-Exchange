<?php include "header.php";?>

   <!-- Hero Section -->
<header class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/images/img1.jpg'); background-size: cover; background-position: center;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown text-white">Swap Clothes, Save the Planet</h1>
                <p class="lead mb-5 animate__animated animate__fadeInUp text-white">Join our community to exchange clothes sustainably and reduce textile waste.</p>
                <div class="d-flex gap-3 animate__animated animate__fadeInUp">
                    <a href="register.php" class="btn btn-primary btn-lg">Start Swapping</a>
                    <a href="browse.php" class="btn btn-outline-light btn-lg">Browse Items</a>
                </div>
            </div>
        </div>
    </div>
</header>

    <!-- How It Works -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">How ReWear Works</h2>
                <p class="text-muted">Simple steps to sustainable fashion</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeIn">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary mb-4">
                                <i class="fas fa-user-plus fa-2x"></i>
                            </div>
                            <h4>1. Create Account</h4>
                            <p class="text-muted">Sign up and complete your profile to start swapping.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeIn animate__delay-1s">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary mb-4">
                                <i class="fas fa-tshirt fa-2x"></i>
                            </div>
                            <h4>2. List Items</h4>
                            <p class="text-muted">Upload clothes you no longer wear with photos and details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeIn animate__delay-2s">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary mb-4">
                                <i class="fas fa-exchange-alt fa-2x"></i>
                            </div>
                            <h4>3. Swap or Redeem</h4>
                            <p class="text-muted">Exchange items directly or use our point system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Items -->
    <section class="py-5">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2 class="fw-bold">Featured Items</h2>
                <a href="browse.php" class="btn btn-outline-primary">View All</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="card product-card h-100 border-0 shadow-sm">
                                            <div class="badge bg-danger position-absolute mt-2 ms-2">New</div>
                                            <img src="assets/images/img2.jpg" class="card-img-top" alt="Item">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Denim Jacket</h5>
                                                    <span class="text-primary fw-bold">150 pts</span>
                                                </div>
                                                <p class="text-muted small">Size: M | Condition: Excellent</p>
                                                <a href="item-detail.php" class="btn btn-sm btn-outline-primary w-100">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card product-card h-100 border-0 shadow-sm">
                                            <img src="assets/images/img3.jpg" class="card-img-top" alt="Item">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Floral Summer Dress</h5>
                                                    <span class="text-primary fw-bold">200 pts</span>
                                                </div>
                                                <p class="text-muted small">Size: S | Condition: Like New</p>
                                                <a href="item-detail.php" class="btn btn-sm btn-outline-primary w-100">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card product-card h-100 border-0 shadow-sm">
                                            <div class="badge bg-success position-absolute mt-2 ms-2">Popular</div>
                                            <img src="assets/images/img4.jpeg" class="card-img-top" alt="Item">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Leather Handbag</h5>
                                                    <span class="text-primary fw-bold">300 pts</span>
                                                </div>
                                                <p class="text-muted small">Condition: Good</p>
                                                <a href="item-detail.php" class="btn btn-sm btn-outline-primary w-100">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="card product-card h-100 border-0 shadow-sm">
                                            <img src="assets/images/img5.jpg" class="card-img-top" alt="Item">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Striped T-Shirt</h5>
                                                    <span class="text-primary fw-bold">80 pts</span>
                                                </div>
                                                <p class="text-muted small">Size: L | Condition: Good</p>
                                                <a href="item-detail.php" class="btn btn-sm btn-outline-primary w-100">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card product-card h-100 border-0 shadow-sm">
                                            <div class="badge bg-info position-absolute mt-2 ms-2">Trending</div>
                                            <img src="assets/images/img2.jpg" class="card-img-top" alt="Item">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Winter Coat</h5>
                                                    <span class="text-primary fw-bold">250 pts</span>
                                                </div>
                                                <p class="text-muted small">Size: XL | Condition: Excellent</p>
                                                <a href="item-detail.php" class="btn btn-sm btn-outline-primary w-100">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-primary rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-primary rounded-circle" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-5 text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Start Swapping?</h2>
            <p class="lead mb-5">Join thousands of members giving clothes a second life.</p>
            <a href="register.php" class="btn btn-light btn-lg px-4 me-2">Sign Up Free</a>
            <a href="browse.php" class="btn btn-outline-light btn-lg px-4">Browse Items</a>
        </div>
    </section>

    <?php include "footer.php";?>