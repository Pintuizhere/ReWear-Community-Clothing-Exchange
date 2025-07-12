<?php include "header.php";?>


    <!-- Add Item Form -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white">
                            <h3 class="mb-0">List a New Item</h3>
                            <p class="text-muted small mb-0">Fill out the form below to add your item to the ReWear community</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-4">
                                    <h5 class="mb-3">Item Images</h5>
                                    <div class="dropzone border rounded p-5 text-center mb-3">
                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                        <p class="mb-2">Drag & drop your images here or click to browse</p>
                                        <p class="small text-muted">Upload at least 3 photos (max 6)</p>
                                        <input type="file" id="itemImages" class="d-none" multiple>
                                        <button type="button" class="btn btn-sm btn-primary" onclick="document.getElementById('itemImages').click()">
                                            Select Images
                                        </button>
                                    </div>
                                    <div class="row g-2" id="imagePreviews">
                                        <!-- Image previews will appear here -->
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-3">Basic Information</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="itemTitle" class="form-label">Item Title</label>
                                            <input type="text" class="form-control" id="itemTitle" placeholder="e.g. Denim Jacket">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="itemCategory" class="form-label">Category</label>
                                            <select class="form-select" id="itemCategory">
                                                <option selected disabled>Select category</option>
                                                <option>Tops</option>
                                                <option>Bottoms</option>
                                                <option>Dresses</option>
                                                <option>Outerwear</option>
                                                <option>Shoes</option>
                                                <option>Accessories</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="itemType" class="form-label">Type</label>
                                            <select class="form-select" id="itemType">
                                                <option selected disabled>Select type</option>
                                                <option>Jacket</option>
                                                <option>T-Shirt</option>
                                                <option>Shirt</option>
                                                <option>Sweater</option>
                                                <option>Jeans</option>
                                                <option>Skirt</option>
                                                <option>Dress</option>
                                                <option>Coat</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="itemSize" class="form-label">Size</label>
                                            <select class="form-select" id="itemSize">
                                                <option selected disabled>Select size</option>
                                                <option>XS</option>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                                <option>XXL</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="itemDescription" class="form-label">Description</label>
                                            <textarea class="form-control" id="itemDescription" rows="4" placeholder="Describe your item in detail (condition, brand, color, etc.)"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-3">Condition & Value</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="itemCondition" class="form-label">Condition</label>
                                            <select class="form-select" id="itemCondition">
                                                <option selected disabled>Select condition</option>
                                                <option>New with tags</option>
                                                <option>Like new</option>
                                                <option>Excellent</option>
                                                <option>Good</option>
                                                <option>Fair</option>
                                                <option>Poor</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="itemPoints" class="form-label">Point Value</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="itemPoints" placeholder="100">
                                                <span class="input-group-text">points</span>
                                            </div>
                                            <div class="form-text">Suggested: 100-300 points based on condition and brand</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptSwap" checked>
                                                <label class="form-check-label" for="acceptSwap">
                                                    Accept swap offers for this item
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-3">Shipping & Returns</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="shippingMethod" class="form-label">Shipping Method</label>
                                            <select class="form-select" id="shippingMethod">
                                                <option selected>I'll ship with ReWear label</option>
                                                <option>I'll arrange shipping</option>
                                                <option>Local pickup only</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="returnPolicy" class="form-label">Return Policy</label>
                                            <select class="form-select" id="returnPolicy">
                                                <option selected>Returns accepted</option>
                                                <option>No returns</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-5">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fas fa-times me-2"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-check me-2"></i> List Item
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <?php include "footer.php";?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    <script>
        // Image upload preview
        document.getElementById('itemImages').addEventListener('change', function(e) {
            const files = e.target.files;
            const previewContainer = document.getElementById('imagePreviews');
            previewContainer.innerHTML = '';
            
            if (files.length > 6) {
                alert('You can upload a maximum of 6 images');
                return;
            }
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (!file.type.match('image.*')) continue;
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    const col = document.createElement('div');
                    col.className = 'col-4 col-md-2';
                    
                    const preview = document.createElement('div');
                    preview.className = 'position-relative';
                    
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-fluid rounded border';
                    img.style.height = '100px';
                    img.style.width = '100%';
                    img.style.objectFit = 'cover';
                    
                    const removeBtn = document.createElement('button');
                    removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 m-1';
                    removeBtn.innerHTML = '<i class="fas fa-times"></i>';
                    removeBtn.onclick = function() {
                        col.remove();
                    };
                    
                    preview.appendChild(img);
                    preview.appendChild(removeBtn);
                    col.appendChild(preview);
                    previewContainer.appendChild(col);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>