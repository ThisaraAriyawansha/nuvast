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

/* Add Feature Form */
.add-feature-form {
    display: flex;
    gap: 1rem;
    align-items: end;
    flex-wrap: wrap;
    margin-bottom: 2rem;
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

.form-input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid var(--border);
    border-radius: 0.5rem;
    background: var(--surface);
    font-size: 0.875rem;
    transition: all 0.2s ease;
}

.form-input:hover {
    border-color: var(--primary-light);
}

.form-input:focus {
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
    background: var(--surface);
    color: var(--text-secondary);
    border: 1px solid var(--border);
}

.btn-secondary:hover {
    background: var(--surface-soft);
    border-color: var(--text-secondary);
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

/* Features Table */
.features-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.feature-item {
    display: grid;
    grid-template-columns: 1fr 1fr auto;
    gap: 1rem;
    padding: 1.5rem;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 0.75rem;
    align-items: center;
    transition: all 0.2s ease;
}

.feature-item:hover {
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-light);
}

.feature-input {
    padding: 0.5rem 0.75rem;
    border: 1px solid var(--border);
    border-radius: 0.5rem;
    background: var(--surface-soft);
    font-size: 0.875rem;
    transition: all 0.2s ease;
}

.feature-input:disabled {
    background: transparent;
    border-color: transparent;
    cursor: default;
}

.feature-input:not(:disabled) {
    background: var(--surface);
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(59, 93, 80, 0.1);
}

.feature-actions {
    display: flex;
    gap: 0.5rem;
}

/* Custom Modal for Confirmations */
.custom-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
    z-index: 1000;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: var(--surface);
    border-radius: 1rem;
    padding: 2rem;
    max-width: 400px;
    width: 90%;
    box-shadow: var(--shadow-lg);
}

.modal-header {
    margin-bottom: 1rem;
}

.modal-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.modal-message {
    color: var(--text-secondary);
    font-size: 0.875rem;
}

.modal-actions {
    display: flex;
    gap: 0.75rem;
    justify-content: flex-end;
    margin-top: 2rem;
}

/* Custom Toast Notifications */
.toast {
    position: fixed;
    top: 2rem;
    right: 2rem;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 0.75rem;
    padding: 1rem 1.25rem;
    box-shadow: var(--shadow-lg);
    z-index: 1001;
    transform: translateX(400px);
    transition: transform 0.3s ease;
    min-width: 300px;
}

.toast.show {
    transform: translateX(0);
}

.toast-success {
    border-left: 4px solid var(--success);
}

.toast-error {
    border-left: 4px solid var(--danger);
}

.toast-header {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.toast-message {
    font-size: 0.875rem;
    color: var(--text-secondary);
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

    .add-feature-form {
        flex-direction: column;
    }

    .form-group {
        min-width: 100%;
    }

    .feature-item {
        grid-template-columns: 1fr;
        gap: 1rem;
        text-align: center;
    }

    .product-display {
        flex-direction: column;
        text-align: center;
    }
}

/* Legacy support */
.wg-box { padding: 0; }
.main-content { padding: 0; }
.main-content-inner { padding: 0; }
.main-content-wrap { padding: 0; }
</style>

<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="container">
                <!-- Header -->
                <div class="page-header">
                    <h1 class="page-title">Product Features</h1>
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
                                <p style="color: var(--text-secondary);">Manage product features and specifications</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add New Feature Card -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Add New Feature</h2>
                    </div>
                    <div class="card-body">
                        <form class="add-feature-form" method="POST" action="{{ route('storeFeature') }}">
                            @csrf
                            <input type="hidden" name="productid" value="{{ $product->id }}">
                            
                            <div class="form-group">
                                <label class="form-label">Feature Name</label>
                                <input type="text" class="form-input" name="name" placeholder="Enter feature name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Feature Value</label>
                                <input type="text" class="form-input" name="value" placeholder="Enter feature value" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Add Feature
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Features List Card -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Product Features</h2>
                    </div>
                    <div class="card-body">
                        <div class="features-list">
                            @foreach($features as $feature)
                            <div class="feature-item">
                                <input type="text" 
                                       class="feature-input edit-feature-name" 
                                       value="{{ $feature->feature_name }}" 
                                       data-id="{{ $feature->id }}" 
                                       disabled>
                                
                                <input type="text" 
                                       class="feature-input edit-feature-value" 
                                       value="{{ $feature->feature_value }}" 
                                       data-id="{{ $feature->id }}" 
                                       disabled>
                                
                                <div class="feature-actions">
                                    <button class="btn btn-sm btn-secondary edit-btn" data-id="{{ $feature->id }}">
                                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-success save-btn" data-id="{{ $feature->id }}" style="display: none;">
                                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Save
                                    </button>
                                    <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $feature->id }}">
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
                            @if ($features->onFirstPage())
                                <span>‹</span>
                            @else
                                <a href="{{ $features->previousPageUrl() }}">‹</a>
                            @endif

                            @foreach ($features->getUrlRange(1, $features->lastPage()) as $page => $url)
                                @if ($page == $features->currentPage())
                                    <span class="active"><a href="{{ $url }}">{{ $page }}</a></span>
                                @else
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if ($features->hasMorePages())
                                <a href="{{ $features->nextPageUrl() }}">›</a>
                            @else
                                <span>›</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Confirmation Modal -->
    <div id="confirmModal" class="custom-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Confirm Action</h3>
                <p class="modal-message" id="modalMessage">Are you sure you want to perform this action?</p>
            </div>
            <div class="modal-actions">
                <button class="btn btn-secondary" id="cancelBtn">Cancel</button>
                <button class="btn btn-danger" id="confirmBtn">Delete</button>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div id="toastContainer"></div>

    @include('layouts.footer')
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let currentDeleteId = null;
    
    // Custom toast notification function
    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toast toast-${type}`;
        
        const icon = type === 'success' 
            ? '<svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>'
            : '<svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
        
        toast.innerHTML = `
            <div class="toast-header" style="color: var(--${type === 'success' ? 'success' : 'danger'})">
                ${icon}
                ${type === 'success' ? 'Success!' : 'Error!'}
            </div>
            <div class="toast-message">${message}</div>
        `;
        
        document.getElementById('toastContainer').appendChild(toast);
        
        // Show toast
        setTimeout(() => toast.classList.add('show'), 100);
        
        // Hide and remove toast
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    // Custom confirmation modal
    function showConfirmModal(message, onConfirm) {
        const modal = document.getElementById('confirmModal');
        const modalMessage = document.getElementById('modalMessage');
        const confirmBtn = document.getElementById('confirmBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        
        modalMessage.textContent = message;
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        confirmBtn.onclick = () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
            onConfirm();
        };
        
        cancelBtn.onclick = () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        };
        
        // Close on outside click
        modal.onclick = (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        };
    }

    // Delete functionality with custom modal
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            const featureId = this.getAttribute("data-id");
            
            showConfirmModal("Are you sure you want to delete this feature? This action cannot be undone.", () => {
                fetch(`/admin/deleteFeature/${featureId}`, {
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
                        showToast("Feature deleted successfully!");
                        setTimeout(() => location.reload(), 1000);
                    } else {
                        showToast("Error: " + data.error, 'error');
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    showToast("An error occurred while deleting the feature", 'error');
                });
            });
        });
    });

    // Edit functionality
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const featureId = this.getAttribute('data-id');
            const nameInput = document.querySelector(`.edit-feature-name[data-id='${featureId}']`);
            const valueInput = document.querySelector(`.edit-feature-value[data-id='${featureId}']`);
            const saveButton = document.querySelector(`.save-btn[data-id='${featureId}']`);
            
            // Enable inputs and show the save button
            nameInput.disabled = false;
            valueInput.disabled = false;
            saveButton.style.display = 'inline-flex';
            this.style.display = 'none';
        });
    });

    // Save functionality
    document.querySelectorAll('.save-btn').forEach(button => {
        button.addEventListener('click', function() {
            const featureId = this.getAttribute('data-id');
            const nameInput = document.querySelector(`.edit-feature-name[data-id='${featureId}']`);
            const valueInput = document.querySelector(`.edit-feature-value[data-id='${featureId}']`);
            
            const updatedName = nameInput.value;
            const updatedValue = valueInput.value;
            
            // Disable button during request
            this.disabled = true;
            this.innerHTML = '<svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg> Saving...';
            
            fetch(`/features/${featureId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    feature_name: updatedName,
                    feature_value: updatedValue
                })
            })
            .then(response => response.json())
            .then(data => {
                this.disabled = false;
                this.innerHTML = '<svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Save';
                
                if (data.success) {
                    nameInput.disabled = true;
                    valueInput.disabled = true;
                    this.style.display = 'none';
                    document.querySelector(`.edit-btn[data-id='${featureId}']`).style.display = 'inline-flex';
                    showToast("Feature updated successfully!");
                } else {
                    showToast("Failed to update feature", 'error');
                }
            })
            .catch(error => {
                this.disabled = false;
                this.innerHTML = '<svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Save';
                console.error('Error:', error);
                showToast("An error occurred while updating the feature", 'error');
            });
        });
    });
});
</script>