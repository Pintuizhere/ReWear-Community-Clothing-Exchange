<?php include "header.php";?>

    <!-- Dashboard Content -->
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center py-4">
                        <img src="assets/images/users/user1.jpg" class="rounded-circle mb-3" width="100" height="100" alt="User">
                        <h5 class="mb-1">John Doe</h5>
                        <p class="text-muted small">Member since June 2023</p>
                        <div class="d-flex justify-content-center gap-3 mb-3">
                            <div>
                                <div class="fw-bold">24</div>
                                <div class="text-muted small">Items</div>
                            </div>
                            <div>
                                <div class="fw-bold">18</div>
                                <div class="text-muted small">Swaps</div>
                            </div>
                            <div>
                                <div class="fw-bold">1.2k</div>
                                <div class="text-muted small">Points</div>
                            </div>
                        </div>
                        <a href="add-item.html" class="btn btn-primary btn-sm w-100 mb-2">
                            <i class="fas fa-plus me-1"></i> Add Item
                        </a>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="dashboard.html" class="list-group-item list-group-item-action active">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-user me-2"></i> My Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-tshirt me-2"></i> My Items
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-exchange-alt me-2"></i> My Swaps
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-heart me-2"></i> Wishlist
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-cog me-2"></i> Settings
                        </a>
                        <a href="#" class="list-group-item list-group-item-action text-danger">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="mb-0">Dashboard</h2>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-filter me-1"></i> Filter
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-sort me-1"></i> Sort
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeIn">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-2">Available Points</h6>
                                        <h3 class="mb-0">1,250</h3>
                                    </div>
                                    <div class="bg-primary bg-opacity-10 p-3 rounded">
                                        <i class="fas fa-coins text-primary fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeIn animate__delay-1s">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-2">Active Listings</h6>
                                        <h3 class="mb-0">12</h3>
                                    </div>
                                    <div class="bg-success bg-opacity-10 p-3 rounded">
                                        <i class="fas fa-tshirt text-success fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeIn animate__delay-2s">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted mb-2">Pending Swaps</h6>
                                        <h3 class="mb-0">3</h3>
                                    </div>
                                    <div class="bg-warning bg-opacity-10 p-3 rounded">
                                        <i class="fas fa-exchange-alt text-warning fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Activity</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Today</td>
                                        <td>Swap Request</td>
                                        <td>Denim Jacket</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>Yesterday</td>
                                        <td>Points Redeemed</td>
                                        <td>Leather Handbag</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>Jul 5, 2023</td>
                                        <td>Item Listed</td>
                                        <td>Striped T-Shirt</td>
                                        <td><span class="badge bg-info">Active</span></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>Jul 3, 2023</td>
                                        <td>Swap Completed</td>
                                        <td>Winter Coat</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Your Listings -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Your Listings</h5>
                        <a href="add-item.html" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus me-1"></i> Add Item
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card product-card h-100 border-0 shadow-sm">
                                    <div class="badge bg-success position-absolute mt-2 ms-2">Active</div>
                                    <img src="assets/images/items/item1.jpg" class="card-img-top" alt="Item">
                                    <div class="card-body">
                                        <h5 class="card-title">Denim Jacket</h5>
                                        <p class="text-muted small">Listed: Jun 28, 2023</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-primary fw-bold">150 pts</span>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card product-card h-100 border-0 shadow-sm">
                                    <div class="badge bg-success position-absolute mt-2 ms-2">Active</div>
                                    <img src="assets/images/items/item2.jpg" class="card-img-top" alt="Item">
                                    <div class="card-body">
                                        <h5 class="card-title">Floral Summer Dress</h5>
                                        <p class="text-muted small">Listed: Jun 25, 2023</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-primary fw-bold">200 pts</span>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card product-card h-100 border-0 shadow-sm">
                                    <div class="badge bg-warning position-absolute mt-2 ms-2">Pending Swap</div>
                                    <img src="assets/images/items/item3.jpg" class="card-img-top" alt="Item">
                                    <div class="card-body">
                                        <h5 class="card-title">Leather Handbag</h5>
                                        <p class="text-muted small">Listed: Jun 20, 2023</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-primary fw-bold">300 pts</span>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-primary">View All Items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php include "footer.php";?>