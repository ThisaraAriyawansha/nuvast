@include('layouts.header')

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary: #3b5d50;
    --primary-light: #4a6b5f;
    --primary-dark: #2d4740;
    --secondary: #64748b;
    --success: #10b981;
    --danger: #ef4444;
    --warning: #f59e0b;
    --background: #fefefe;
    --surface: #ffffff;
    --surface-soft: #f8faf9;
    --text-primary: #1e293b;
    --text-secondary: #64748b;
    --text-muted: #94a3b8;
    --border: #e2e8f0;
    --border-light: #f1f5f9;
    --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background: var(--background);
    color: var(--text-primary);
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

/* Header Section */
.page-header {
    margin-bottom: 3rem;
}

.page-title {
    font-size: 2rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    letter-spacing: -0.025em;
}

.page-subtitle {
    color: var(--text-secondary);
    font-size: 1rem;
    font-weight: 400;
}

/* Alert Messages */
.alert {
    padding: 1rem 1.25rem;
    border-radius: 0.75rem;
    margin-bottom: 2rem;
    border-left: 4px solid;
    font-size: 0.875rem;
}

.alert-success {
    background: #f0fdf4;
    border-color: var(--success);
    color: #166534;
}

.alert-error {
    background: #fef2f2;
    border-color: var(--danger);
    color: #991b1b;
}

.alert-title {
    font-weight: 600;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Card Component */
.card {
    background: var(--surface);
    border-radius: 1rem;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    overflow: hidden;
    margin-bottom: 2rem;
}

.card-header {
    padding: 1.5rem 2rem;
    border-bottom: 1px solid var(--border-light);
    background: var(--surface-soft);
}

.card-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--text-primary);
}

.card-body {
    padding: 2rem;
}

/* Product Display */
.product-display {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    padding: 1.5rem;
    background: var(--surface-soft);
    border-radius: 0.75rem;
    margin-bottom: 2rem;
}

.product-image {
    width: 80px;
    height: 80px;
    border-radius: 0.75rem;
    object-fit: cover;
    border: 2px solid var(--border);
}

.product-name {
    font-size: 1.25rem;
    font-weight: 500;
    color: var(--text-primary);
}

/* Upload Form */
.upload-section {
    margin-bottom: 3rem;
}

.upload-form {
    display: flex;
    gap: 1rem;
    align-items: end;
    flex-wrap: wrap;
}

.form-group {
    flex: 1;
    min-width: 200px;
}

.form-label {
    display: block;
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--text-secondary);
    margin-bottom: 0.5rem;
}

.file-input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid var(--border);
    border-radius: 0.5rem;
    background: var(--surface);
    font-size: 0.875rem;
    transition: all 0.2s ease;
    cursor: pointer;
}

.file-input:hover {
    border-color: var(--primary-light);
}

.file-input:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(59, 93, 80, 0.1);
}

/* Buttons */
.btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    font-size: 0.875rem;
    font-weight: 500;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
}

.btn-primary {
    background: var(--primary);
    color: white;
}

.btn-primary:hover {
    background: var(--primary-light);
    transform: translateY(-1px);
    box-shadow: var(--shadow-lg);
}

.btn-secondary {
    background: #3b5d50;
    color: white;
    border: 1px solid var(--border);
}

.btn-secondary:hover {
    background: var(--surface-soft);
    border-color: #3b5d50;
    color:#3b5d50;
}

.btn-success {
    background: var(--success);
    color: white;
}

.btn-success:hover {
    background: #059669;
}

.btn-danger {
    background: var(--danger);
    color: white;
}

.btn-danger:hover {
    background: #dc2626;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.8125rem;
}

/* Image Grid */
.image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.image-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 0.75rem;
    overflow: hidden;
    transition: all 0.2s ease;
}

.image-card:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.image-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.image-card-footer {
    padding: 1rem;
    display: flex;
    gap: 0.5rem;
    justify-content: center;
}

/* Modal */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 1000;
    backdrop-filter: blur(4px);
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 90vw;
    max-height: 90vh;
    border-radius: 1rem;
    overflow: hidden;
}

.modal-content img {
    width: 100%;
    height: auto;
    display: block;
}

.modal-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(255, 255, 255, 0.9);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
}

.modal-close:hover {
    background: white;
    transform: scale(1.1);
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 2rem;
}

.pagination a,
.pagination span {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border: 1px solid var(--border);
    border-radius: 0.5rem;
    text-decoration: none;
    color: var(--text-secondary);
    font-size: 0.875rem;
    transition: all 0.2s ease;
}

.pagination a:hover {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.pagination .active a {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

/* Responsive */
@media (max-width: 768px) {
    .container {
        padding: 1rem;
    }

    .upload-form {
        flex-direction: column;
    }

    .form-group {
        min-width: 100%;
    }

    .image-grid {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 1rem;
    }

    .product-display {
        flex-direction: column;
        text-align: center;
    }
}

/* Legacy support for existing classes */
.wg-box { padding: 0; }
.main-content { padding: 0; }
.main-content-inner { padding: 0; }
.main-content-wrap { padding: 0; }
</style>

<!-- main-content -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="container">
                <!-- Header -->
                <div class="page-header">
                    <h1 class="page-title">Product Management</h1>
                    <p class="page-subtitle">Last updated: {{ now()->format('M j, Y g:i A') }}</p>
                </div>

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-error">
                        <div class="alert-title">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Oops! There were some errors:
                        </div>
                        <ul style="margin: 0; padding-left: 20px; list-style-type: none;">
                            @foreach ($errors->all() as $error)
                                <li style="padding: 4px 0; display: flex; align-items: center;">
                                    <span style="display: inline-block; width: 6px; height: 6px; background-color: #ef4444; border-radius: 50%; margin-right: 8px;"></span>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Success Messages -->
                @if (session('success'))
                    <div class="alert alert-success">
                        <div class="alert-title">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Success!
                        </div>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <!-- Product Information Card -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Product Information</h2>
                    </div>
                    <div class="card-body">
                        <div class="product-display">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
                            <div>
                                <div class="product-name">{{ $product->name }}</div>
                                <p style="color: var(--text-secondary);">Product details and description</p>
                            </div>
                        </div>
                        <a href="/product/{{ $product->id }}/features" class="btn btn-secondary">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Manage Features
                        </a>
                    </div>
                </div>

                <!-- Upload Section -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Add New Image</h2>
                    </div>
                    <div class="card-body">
                        <form class="upload-form" method="POST" enctype="multipart/form-data" action="{{ route('storeImage') }}">
                            @csrf
                            <input type="hidden" name="productid" value="{{ $product->id }}">
                            
                            <div class="form-group">
                                <label class="form-label">Choose Image</label>
                                <input type="file" class="file-input" name="image_path" accept="image/png, image/jpeg, image/jpg, image/webp" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                Upload Image
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Images Gallery -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Product Images</h2>
                    </div>
                    <div class="card-body">
                        <div class="image-grid">
                            @foreach($images as $image)
                            <div class="image-card">
                                <img src="{{ asset($image->image_path) }}" alt="Product Image">
                                <div class="image-card-footer">
                                    <button class="btn btn-sm btn-secondary view-btn " data-image="{{ asset($image->image_path) }}" style="display:none;">
                                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        View
                                    </button>
                                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $image->id }}">
                                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="pagination">
                            @if ($images->onFirstPage())
                                <span>‹</span>
                            @else
                                <a href="{{ $images->previousPageUrl() }}">‹</a>
                            @endif

                            @foreach ($images->getUrlRange(1, $images->lastPage()) as $page => $url)
                                @if ($page == $images->currentPage())
                                    <span class="active"><a href="{{ $url }}">{{ $page }}</a></span>
                                @else
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if ($images->hasMorePages())
                                <a href="{{ $images->nextPageUrl() }}">›</a>
                            @else
                                <span>›</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="imageModal" class="modal">
        <button class="modal-close">&times;</button>
        <div class="modal-content">
            <img id="modalImage" src="" alt="Full size image">
        </div>
    </div>

    @include('layouts.footer')
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Delete functionality
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            let imageId = this.getAttribute("data-id");

            if (confirm("Are you sure you want to delete this image?")) {
                fetch(`/admin/deleteImage/${imageId}`, {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ _method: "DELETE" }) 
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Image deleted successfully!");
                        location.reload();
                    } else {
                        alert("Error: " + data.error);
                    }
                })
                .catch(error => console.error("Error:", error));
            }
        });
    });

    // Modal functionality
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("modalImage");
    const closeBtn = document.querySelector(".modal-close");

    function openModal(imageSrc) {
        modal.style.display = "block";
        modalImg.src = imageSrc;
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }

    document.querySelectorAll(".view-btn").forEach(button => {
        button.addEventListener("click", function () {
            const imageSrc = this.getAttribute("data-image");
            openModal(imageSrc);
        });
    });

    closeBtn.addEventListener("click", closeModal);
    modal.addEventListener("click", function(e) {
        if (e.target === modal) closeModal();
    });

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});
</script>