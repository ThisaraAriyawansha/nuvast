@include('layouts.header')
<style>
:root {
    --primary-color: #3b5d50;
    --secondary-color: #9ca3af;
    --background: #fafafa;
    --surface: #ffffff;
    --text-primary: #3b5d50;
    --text-secondary: #6b7280;
    --border-light: #e5e7eb;
    --success: #10b981;
    --danger: #ef4444;
    --warning: #f59e0b;
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    --radius: 8px;
}

body {
    background-color: var(--background);
    color: var(--text-primary);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.6;
}

/* Modal Styles - Minimalistic */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(4px);
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 90vw;
    max-height: 90vh;
    border-radius: var(--radius);
    box-shadow: var(--shadow-md);
}

.close {
    position: absolute;
    top: -40px;
    right: 0;
    color: white;
    font-size: 24px;
    font-weight: 300;
    cursor: pointer;
    transition: opacity 0.2s ease;
    background: none;
    border: none;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
}

.close:hover {
    opacity: 0.7;
    background-color: rgba(255, 255, 255, 0.2);
}

/* Main Content */
.main-content {
    padding: 0;
    background-color: var(--background);
    min-height: 100vh;
}

.main-content-inner {
    max-width: 1500px;
    margin: 0 auto;
    padding: 2rem;
}

.wg-box {
    background-color: var(--surface);
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border-light);
    margin: 0;
    padding: 2rem;
}

/* Header */
.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid var(--border-light);
}

.admin-header h3 {
    font-size: 1.5rem;
    font-weight: 400;
    color: var(--text-primary);
    letter-spacing: -0.025em;
    margin: 0;
}

.last-updated {
    background: var(--background);
    color: var(--text-secondary);
    padding: 0.5rem 1rem;
    border-radius: var(--radius);
    border: 1px solid var(--border-light);
    font-size: 0.875rem;
    font-weight: 400;
}

/* Search Form */
.search-form {
    display: flex;
    gap: 0.75rem;
    margin-bottom: 2rem;
    align-items: center;
}

.search-input {
    flex: 1;
    max-width: 320px;
    padding: 0.75rem 1rem;
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    font-size: 0.875rem;
    background-color: var(--surface);
    color: var(--text-primary);
    transition: all 0.2s ease;
    outline: none;
}

.search-input:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(107, 114, 128, 0.1);
}

.search-input::placeholder {
    color: var(--text-secondary);
}

.search-button {
    padding: 0.75rem 1.5rem;
    background-color: var(--text-primary);
    color: white;
    border: none;
    border-radius: var(--radius);
    font-size: 0.875rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.search-button:hover {
    background-color: var(--primary-color);
    transform: translateY(-1px);
}

/* Table Styles */
.wg-table {
    width: 100%;
}

.table-title {
    display: grid;
    grid-template-columns: 80px 1fr 120px 120px 80px 100px 200px;
    gap: 1rem;
    padding: 1rem 0;
    margin: 0;
    border-bottom: 1px solid var(--border-light);
    align-items: center;
}

.table-title li {
    list-style: none;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--text-secondary);
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.product-item {
    display: grid;
    grid-template-columns: 80px 1fr 115px 115px 80px 100px 210px;
    gap: 1rem;
    padding: 1.5rem 0;
    margin: 0;
    border-bottom: 1px solid var(--border-light);
    align-items: center;
    transition: background-color 0.2s ease;
}

.product-item:hover {
    background-color: rgba(107, 114, 128, 0.02);
}

.product-item:last-child {
    border-bottom: none;
}

.body-text {
    font-size: 1rem;
    color: var(--text-primary);
    font-weight: 400;
}

.image {
    width: 60px;
    height: 60px;
    border-radius: var(--radius);
    object-fit: cover;
    border: 1px solid var(--border-light);
}

/* Button Styles */
.button-container {
    display: flex;
    gap: 0.5rem;
    align-items: center;
}

.view-btn, .view-more-btn, .update-btn, .feature-btn {
    padding: 0.5rem 1rem;
    font-size: 0.75rem;
    font-weight: 500;
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    background-color: var(--surface);
    color: var(--text-secondary);
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 32px;
}

.view-btn:hover, .view-more-btn:hover, .update-btn:hover, .feature-btn:hover {
    background-color: var(--text-primary);
    color: white;
    border-color: var(--text-primary);
    transform: translateY(-1px);
    box-shadow: var(--shadow-sm);
}

.status-btn {
    padding: 0.5rem 1rem;
    font-size: 0.75rem;
    font-weight: 500;
    border: 1px solid red;
    border-radius: var(--radius);
    background-color: var(--surface);
    color: red;
    cursor: pointer;
    transition: all 0.2s ease;
    min-height: 32px;
}

.status-btn:hover {
    background-color: red;
    color: white;
    transform: translateY(-1px);
}

.delete-btn {
    padding: 0.5rem 1rem;
    font-size: 0.75rem;
    font-weight: 500;
    border: 1px solid var(--danger);
    border-radius: var(--radius);
    background-color: var(--surface);
    color: var(--danger);
    cursor: pointer;
    transition: all 0.2s ease;
    min-height: 32px;
}

.delete-btn:hover {
    background-color: var(--danger);
    color: white;
    transform: translateY(-1px);
}

/* Pagination */
.pagination-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid var(--border-light);
}

.text-tiny {
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.wg-pagination {
    display: flex;
    gap: 0.25rem;
    list-style: none;
    padding: 0;
    margin: 0;
}

.wg-pagination li {
    display: flex;
}

.wg-pagination li a,
.wg-pagination li span {
    padding: 0.5rem 0.75rem;
    color: var(--text-secondary);
    text-decoration: none;
    border-radius: var(--radius);
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
}

.wg-pagination li a:hover {
    background-color: var(--background);
    color: var(--text-primary);
}

.wg-pagination li.active a {
    background-color: var(--text-primary);
    color: white;
}

.wg-pagination li.disabled span {
    color: var(--border-light);
    cursor: not-allowed;
}

/* Toast Alert */
.toast-alert {
    position: fixed;
    top: 2rem;
    right: 2rem;
    background-color: var(--success);
    color: white;
    padding: 1rem 1.5rem;
    border-radius: var(--radius);
    box-shadow: var(--shadow-md);
    font-size: 0.875rem;
    font-weight: 500;
    z-index: 9999;
    display: none;
    animation: slideIn 0.3s ease-out;
}

@keyframes slideIn {
    from { 
        opacity: 0; 
        transform: translateX(100%);
    }
    to { 
        opacity: 1; 
        transform: translateX(0);
    }
}

/* Alert Styles */
.alert {
    padding: 1rem 1.5rem;
    border-radius: var(--radius);
    margin-bottom: 1.5rem;
    font-size: 0.875rem;
    border: 1px solid transparent;
}

.alert-success {
    background-color: rgba(16, 185, 129, 0.1);
    color: #065f46;
    border-color: rgba(16, 185, 129, 0.2);
}

.alert-danger {
    background-color: rgba(239, 68, 68, 0.1);
    color: #991b1b;
    border-color: rgba(239, 68, 68, 0.2);
}

.btn-close {
    background: none;
    border: none;
    font-size: 1.25rem;
    color: inherit;
    opacity: 0.5;
    cursor: pointer;
    float: right;
}

.btn-close:hover {
    opacity: 0.75;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .table-title, .product-item {
        grid-template-columns: 60px 1fr 100px 100px 60px 80px 180px;
    }
    
    .main-content-inner {
        padding: 1.5rem;
    }
}

@media (max-width: 768px) {
    .table-title {
        display: none;
    }
    
    .product-item {
        display: block;
        padding: 1.5rem;
        margin-bottom: 1rem;
        border: 1px solid var(--border-light);
        border-radius: var(--radius);
        background-color: var(--surface);
    }
    
    .product-item > div {
        margin-bottom: 0.75rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .product-item > div:before {
        content: attr(data-label);
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .button-container {
        justify-content: flex-start;
        flex-wrap: wrap;
        margin-top: 1rem;
    }
    
    .admin-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .search-form {
        flex-direction: column;
        align-items: stretch;
    }
    
    .search-input {
        max-width: none;
    }
}

@media (max-width: 480px) {
    .main-content-inner {
        padding: 1rem;
    }
    
    .wg-box {
        padding: 1.5rem;
    }
    
    .button-container {
        gap: 0.375rem;
    }
    
    .view-btn, .view-more-btn, .update-btn, .status-btn, .delete-btn,.feature-btn {
        padding: 0.5rem 0.75rem;
        font-size: 0.6875rem;
    }
}

/* Hidden utility */
.hidden {
    display: none !important;
}

/* Smooth transitions */
* {
    transition: background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
}
</style>

<!-- main-content -->
<div class="main-content">
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">

            <!-- product-list -->
            <div class="wg-box">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>There were some errors with your submission:</strong>
                        <ul class="mt-2" style="margin: 0.5rem 0 0 1.25rem;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                @endif

                <div class="admin-header">
                    <h3>Manage Products</h3>
                    <div class="last-updated">
                        Last updated: {{ now()->format('M j, Y g:i A') }}
                    </div>
                </div>

                <form method="GET" action="{{ route('manageProduct') }}" class="search-form">
                    <input type="text" name="search" value="{{ request('search') }}" class="search-input" placeholder="Search products...">
                    <button type="submit" class="search-button">Search</button>
                </form>

                <div class="wg-table">
                    <ul class="table-title">
                        <li><div class="body-title">Image</div></li>
                        <li><div class="body-title">Product Name</div></li>
                        <li><div class="body-title">Type</div></li>
                        <li><div class="body-title">Brand</div></li>
                        <li><div class="body-title">QTY</div></li>
                        <li><div class="body-title">Status</div></li>
                        <li><div class="body-title">Actions</div></li>
                    </ul>
                    
                    <div class="table-container">
                        <ul>
                            @foreach($product as $item)
                            <li class="product-item">
                                <!-- Image -->
                                <div class="body-text" data-label="Image">
                                    <img src="{{ asset(''.$item->image) }}" alt="Product Image" class="image">
                                </div>
                                
                                <!-- Product Name -->
                                <div class="body-text" data-label="Product Name">{{ $item->name }}</div>

                                <!-- Product Type -->
                                <div class="body-text" data-label="Type">{{ $item->type }}</div>

                                <!-- Product Brand -->
                                <div class="body-text" data-label="Brand">{{ $item->brand }}</div>

                                <!-- Quantity -->
                                <div class="body-text" data-label="QTY">{{ $item->qty }}</div>

                                <!-- Product Status -->
                                <div class="body-text" data-label="Status">
                                    <span id="status-{{ $item->id }}">{{ $item->status->status_name ?? 'N/A' }}</span>
                                </div>

                                <!-- Action Buttons -->
                                <div class="button-container" data-label="Actions">
                                    <button class="view-btn" data-image="{{ asset(''.$item->image) }}">View</button>
                                    <button class="view-more-btn" data-id="{{ $item->id }}">Details</button> 
                                    <button class="update-btn" data-id="{{ $item->id }}">Edit</button> 
                                    <button class="feature-btn" data-id="{{ $item->id }}">Feature</button>
                                    <button class="status-btn" data-id="{{ $item->id }}">Status</button>
                                    <button class="delete-btn hidden" data-id="{{ $item->id }}">Delete</button>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="pagination-container">
                    <div class="text-tiny">Showing {{ $product->firstItem() }} to {{ $product->lastItem() }} of {{ $product->total() }} entries</div>
                    <ul class="wg-pagination">
                        <!-- Pagination Controls -->
                        @if ($product->onFirstPage())
                            <li class="disabled">
                                <span><i class="icon-chevron-left"></i></span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $product->previousPageUrl() }}"><i class="icon-chevron-left"></i></a>
                            </li>
                        @endif

                        @foreach ($product->getUrlRange(1, $product->lastPage()) as $page => $url)
                            <li class="{{ $page == $product->currentPage() ? 'active' : '' }}">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($product->hasMorePages())
                            <li>
                                <a href="{{ $product->nextPageUrl() }}"><i class="icon-chevron-right"></i></a>
                            </li>
                        @else
                            <li class="disabled">
                                <span><i class="icon-chevron-right"></i></span>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- /product-list -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    
    <!-- Modal Structure -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>
    
    @include('layouts.footer')
</div>
<!-- /main-content -->

<!-- Custom Alert -->
<div id="toast-alert" class="toast-alert"></div>

<script>
    function showEntries() {
        const rows = document.querySelectorAll('#ListingsTable tbody tr');
        let entries = document.getElementById('col_num').value;

        if (!entries || entries <= 0) {
            entries = 30;
        }

        rows.forEach((row, index) => {
            if (index < entries) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
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
                        console.log(data);
                        if (data.success) {
                            showToast("Image deleted successfully!");
                            location.reload();
                        } else {
                            showToast("Error: " + data.error);
                        }
                    })
                    .catch(error => console.error("Error:", error));
                }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const span = document.getElementsByClassName("close")[0];

        function openModal(imageSrc) {
            modal.style.display = "block";
            modalImg.src = imageSrc;
        }

        function closeModal() {
            modal.style.display = "none";
        }

        document.querySelectorAll(".view-btn").forEach(button => {
            button.addEventListener("click", function () {
                const imageSrc = this.getAttribute("data-image");
                openModal(imageSrc);
            });
        });

        span.addEventListener("click", closeModal);

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".view-more-btn").forEach(button => {
            button.addEventListener("click", function () {
                let projectId = this.getAttribute("data-id");
                window.location.href = `/product/view/${projectId}`;
            });
        });

        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const span = document.getElementsByClassName("close")[0];

        function openModal(imageSrc) {
            modal.style.display = "block";
            modalImg.src = imageSrc;
        }

        function closeModal() {
            modal.style.display = "none";
        }

        document.querySelectorAll(".view-btn").forEach(button => {
            button.addEventListener("click", function () {
                const imageSrc = this.getAttribute("data-image");
                openModal(imageSrc);
            });
        });

        span.addEventListener("click", closeModal);

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".update-btn").forEach(button => {
            button.addEventListener("click", function () {
                let projectId = this.getAttribute("data-id");
                window.location.href = `/product/update/${projectId}`; 
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".feature-btn").forEach(button => {
            button.addEventListener("click", function () {
                let projectId = this.getAttribute("data-id");
                window.location.href = `/product/${projectId}/features`; 
            });
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".status-btn").click(function() {
        let productId = $(this).data("id");

        $.ajax({
            url: "{{ route('updateProductStatus') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: productId
            },
            success: function(response) {
                if (response.success) {
                    $("#status-" + productId).text(response.new_status);
                    showToast("Status updated successfully!");
                } else {
                    showToast("Error updating status!");
                }
            },
            error: function() {
                showToast("Something went wrong!");
            }
        });
    });
});

function showToast(message) {
    let toast = $("#toast-alert");
    toast.text(message).fadeIn(200);

    setTimeout(() => {
        toast.fadeOut(200);
    }, 2500);
}
</script>