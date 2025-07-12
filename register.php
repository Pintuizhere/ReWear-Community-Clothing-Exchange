<?php include "header.php"; ?>

<!-- Register Form -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card border-0 shadow-sm animate__animated animate__fadeIn">
                    <div class="card-body p-4 p-sm-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Create Your Account</h3>
                            <p class="text-muted">Join ReWear to start swapping clothes today</p>
                        </div>
                        <form method="POST" action="register_process.php">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="firstName" placeholder="John" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Doe" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Create a password" required>
                                <div class="form-text">Must be at least 8 characters</div>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" name="agree" type="checkbox" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-3">Create Account</button>
                            <div class="text-center">
                                <p class="small text-muted">Already have an account? <a href="login.php" class="text-decoration-none">Log in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
