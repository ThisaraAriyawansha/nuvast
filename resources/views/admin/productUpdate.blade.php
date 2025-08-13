@include('layouts.header')

<style>
    /* Transparent Background */
    .modal-content {
        background: transparent; /* Semi-transparent white */
        border-radius: 15px; /* Rounded corners */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Soft shadow */
        backdrop-filter: blur(10px); /* Blur effect */
    }

    /* Centered Modal Title */
    .modal-title {
        font-weight: bold;
        font-size: 1.2rem;
    }

    /* Custom Close Button */
    .btn-close {
        background-color: white;
        border-radius: 50%;
        padding: 5px;
        opacity: 0.7;
    }
    .btn-close:hover {
        opacity: 1;
    }

        .wg-box {
            margin-left: 20px;
            margin-right: 20px;
        }

        .last-updated {
            background: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            border: 1px solid var(--gray-200);
            font-size: 1.3rem;
            color: var(--gray-600);
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

</style>

<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">


            <div class="wg-box p-6 rounded-lg shadow">
                <div class="admin-header">
                    <h3 class="text-xl font-semibold" style=" font-size: 18px; font-family: 'Orbitron', sans-serif;">Edit Product</h3>
                        <div class="last-updated">
                            Last updated: {{ now()->format('M j, Y g:i A') }}
                        </div>
                </div>
                <form id="addItemForm" class="form-new-product space-y-5" method="POST" enctype="multipart/form-data" action="{{ route('updateProduct', $product->id) }}">
                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                        <div style="background-color: #fff5f5; border-left: 4px solid #ff3b3b; color: #ff3b3b; padding: 16px; margin-bottom: 20px; border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <strong style="font-size: 16px; display: block; margin-bottom: 8px;">⚠️ Oops! There were some errors:</strong>
                            <ul style="margin: 0; padding-left: 20px; list-style-type: none;">
                                @foreach ($errors->all() as $error)
                                    <li style="padding: 4px 0; display: flex; align-items: center;">
                                        <span style="display: inline-block; width: 6px; height: 6px; background-color: #ff3b3b; border-radius: 50%; margin-right: 8px;"></span>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div style="background-color: #f0fff4; border-left: 4px solid #38a169; color: #38a169; padding: 16px; margin-bottom: 20px; border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <div style="font-size: 16px; display: flex; align-items: center; gap: 8px;">
                                <svg style="width: 20px; height: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <strong>Success!</strong>
                            </div>
                            <p style="margin: 8px 0 0 28px;">{{ session('success') }}</p>
                        </div>
                    @endif


                    <!-- Product Name -->
                    <fieldset class="name">
                        <div class="body-title mb-10">Product Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter Product Name" name="name" value="{{ $product->name }}" required>
                    </fieldset>

                    <!-- Brand -->
                    <fieldset class="brand">
                        <div class="body-title mb-10">Brand Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter Brand Name" name="brand" value="{{ $product->brand }}" required>
                    </fieldset>

                    <!-- Type -->
                    <fieldset class="type" >
                        <div class="body-title" >Select Furniture Category</div>
                        <div class="select flex-grow" >
                            <select id="type" name="type" >
                                <option value="">Select a Category</option>
                                <option value="SOFAS" {{ $product->type == 'SOFAS' ? 'selected' : '' }}>Sofas</option>
                                <option value="ARMCHAIRS" {{ $product->type == 'ARMCHAIRS' ? 'selected' : '' }}>Armchairs</option>
                                <option value="DINING_TABLES" {{ $product->type == 'DINING_TABLES' ? 'selected' : '' }}>Dining Tables</option>
                                <option value="DINING_CHAIRS" {{ $product->type == 'DINING_CHAIRS' ? 'selected' : '' }}>Dining Chairs</option>
                                <option value="COFFEE_TABLES" {{ $product->type == 'COFFEE_TABLES' ? 'selected' : '' }}>Coffee Tables</option>
                                <option value="SIDE_TABLES" {{ $product->type == 'SIDE_TABLES' ? 'selected' : '' }}>Side Tables</option>
                                <option value="BEDS" {{ $product->type == 'BEDS' ? 'selected' : '' }}>Beds</option>
                                <option value="WARDROBES" {{ $product->type == 'WARDROBES' ? 'selected' : '' }}>Wardrobes</option>
                                <option value="DRESSERS" {{ $product->type == 'DRESSERS' ? 'selected' : '' }}>Dressers</option>
                                <option value="BOOKCASES" {{ $product->type == 'BOOKCASES' ? 'selected' : '' }}>Bookcases</option>
                                <option value="TV_STANDS" {{ $product->type == 'TV_STANDS' ? 'selected' : '' }}>TV Stands</option>
                                <option value="CONSOLE_TABLES" {{ $product->type == 'CONSOLE_TABLES' ? 'selected' : '' }}>Console Tables</option>
                                <option value="OFFICE_DESKS" {{ $product->type == 'OFFICE_DESKS' ? 'selected' : '' }}>Office Desks</option>
                                <option value="OFFICE_CHAIRS" {{ $product->type == 'OFFICE_CHAIRS' ? 'selected' : '' }}>Office Chairs</option>
                                <option value="BAR_STOOLS" {{ $product->type == 'BAR_STOOLS' ? 'selected' : '' }}>Bar Stools</option>
                                <option value="BENCHES" {{ $product->type == 'BENCHES' ? 'selected' : '' }}>Benches</option>
                                <option value="LOUNGE_CHAIRS" {{ $product->type == 'LOUNGE_CHAIRS' ? 'selected' : '' }}>Lounge Chairs</option>
                                <option value="RECLINERS" {{ $product->type == 'RECLINERS' ? 'selected' : '' }}>Recliners</option>
                                <option value="FUTONS" {{ $product->type == 'FUTONS' ? 'selected' : '' }}>Futons</option>
                                <option value="DAYBEDS" {{ $product->type == 'DAYBEDS' ? 'selected' : '' }}>Daybeds</option>
                                <option value="NIGHTSTANDS" {{ $product->type == 'NIGHTSTANDS' ? 'selected' : '' }}>Nightstands</option>
                                <option value="CABINETS" {{ $product->type == 'CABINETS' ? 'selected' : '' }}>Cabinets</option>
                                <option value="SHELVING_UNITS" {{ $product->type == 'SHELVING_UNITS' ? 'selected' : '' }}>Shelving Units</option>
                                <option value="ENTERTAINMENT_CENTERS" {{ $product->type == 'ENTERTAINMENT_CENTERS' ? 'selected' : '' }}>Entertainment Centers</option>
                                <option value="ACCENT_CHAIRS" {{ $product->type == 'ACCENT_CHAIRS' ? 'selected' : '' }}>Accent Chairs</option>
                                <option value="OUTDOOR_FURNITURE" {{ $product->type == 'OUTDOOR_FURNITURE' ? 'selected' : '' }}>Outdoor Furniture</option>
                                <option value="KIDS_FURNITURE" {{ $product->type == 'KIDS_FURNITURE' ? 'selected' : '' }}>Kids Furniture</option>
                                <option value="STORAGE_SOLUTIONS" {{ $product->type == 'STORAGE_SOLUTIONS' ? 'selected' : '' }}>Storage Solutions</option>
                                <option value="HOME_OFFICE" {{ $product->type == 'HOME_OFFICE' ? 'selected' : '' }}>Home Office</option>
                                <option value="LIGHTING_FIXTURES" {{ $product->type == 'LIGHTING_FIXTURES' ? 'selected' : '' }}>Lighting Fixtures</option>
                                <option value="MIRRORS" {{ $product->type == 'MIRRORS' ? 'selected' : '' }}>Mirrors</option>
                                <option value="RUGS" {{ $product->type == 'RUGS' ? 'selected' : '' }}>Rugs</option>
                                <option value="DECORATIVE_PILLOWS" {{ $product->type == 'DECORATIVE_PILLOWS' ? 'selected' : '' }}>Decorative Pillows</option>
                                <option value="CURTAINS" {{ $product->type == 'CURTAINS' ? 'selected' : '' }}>Curtains</option>
                            </select>
                        </div>
                    </fieldset>
                    
                    <br/>

                    <!-- Tags -->
                    <fieldset class="tags">
                        <div class="body-title">Select Tags Type</div>
                        <div class="select flex-grow">
                            <select id="tags" name="tags" onchange="toggleDealDates()">
                                <option value="">Select a Tags</option>
                                <option value="New Arrivals" {{ $product->tags == 'New Arrivals' ? 'selected' : '' }}>New Arrivals</option>
                                <option value="Top Rated" {{ $product->tags == 'Top Rated' ? 'selected' : '' }}>Top Rated</option>
                                <option value="Featured" {{ $product->tags == 'Featured' ? 'selected' : '' }}>Featured</option>
                                <option value="DEAL OF THE DAYS" {{ $product->tags == 'DEAL OF THE DAYS' ? 'selected' : '' }}>DEAL OF THE DAYS</option>
                                <option value="None" {{ $product->tags == 'None' ? 'selected' : '' }}>None</option>
                            </select>
                        </div>
                    </fieldset><br/>

                    <!-- Deal Start Date (Initially hidden) -->
                    <fieldset class="deal_start" id="deal_start_field" style="{{ $product->tags == 'DEAL OF THE DAYS' ? 'display: block;' : 'display: none;' }}">
                        <div class="body-title mb-10">Deal Start Date</div>
                        <input class="mb-10" type="datetime-local" name="deal_start" id="deal_start" value="{{ $product->deal_start ? \Carbon\Carbon::parse($product->deal_start)->format('Y-m-d\TH:i') : '' }}">
                    </fieldset>

                    <!-- Deal End Date (Initially hidden) -->
                    <fieldset class="deal_end" id="deal_end_field" style="{{ $product->tags == 'DEAL OF THE DAYS' ? 'display: block;' : 'display: none;' }}">
                        <div class="body-title mb-10">Deal End Date</div>
                        <input class="mb-10" type="datetime-local" name="deal_end" id="deal_end" value="{{ $product->deal_end ? \Carbon\Carbon::parse($product->deal_end)->format('Y-m-d\TH:i') : '' }}">
                    </fieldset>

                    <!-- Description -->
                    <fieldset class="description">
                        <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                        <div id="editor" class="mb-10 border rounded-lg p-2" style="min-height: 200px;">{!! $product->description !!}</div>
                        <textarea name="description" id="description" style="display: none;">{!! $product->description !!}</textarea>
                    </fieldset>

                    <!-- Prices -->
                    <fieldset class="discounted_price">
                        <div class="body-title mb-10">Discounted Price <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="number" step="0.1" placeholder="Enter Discounted Price" name="discounted_price" value="{{ $product->discounted_price }}" required>
                    </fieldset>

                    <fieldset class="retail_price">
                        <div class="body-title mb-10">Retail Price <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="number" step="0.1" placeholder="Enter Retail Price" name="retail_price" value="{{ $product->retail_price }}" required>
                    </fieldset>

                    <!-- Warranty -->
                    <fieldset class="warranty">
                        <div class="body-title">Select Warranty</div>
                        <div class="select flex-grow">
                            <select id="warranty" name="warranty">
                                <option value="">Select a Warranty</option>
                                <option value="1 year Warranty" {{ $product->warranty == '1 year Warranty' ? 'selected' : '' }}>1 year Warranty</option>
                                <option value="2 year Warranty" {{ $product->warranty == '2 year Warranty' ? 'selected' : '' }}>2 year Warranty</option>
                                <option value="3 year Warranty" {{ $product->warranty == '3 year Warranty' ? 'selected' : '' }}>3 year Warranty</option>
                                <option value="6 months warranty" {{ $product->warranty == '6 months warranty' ? 'selected' : '' }}>6 months warranty</option>
                                <option value="3 months warranty" {{ $product->warranty == '3 months warranty' ? 'selected' : '' }}>3 months warranty</option>
                                <option value="1 months warranty" {{ $product->warranty == '1 months warranty' ? 'selected' : '' }}>1 months warranty</option>
                            </select>
                        </div>
                    </fieldset><br/>

                    <!-- Stock Status -->
                    <fieldset class="in_stock">
                        <div class="body-title">Stock Status</div>
                        <div class="select flex-grow">
                            <select id="in_stock" name="in_stock">
                                <option value="">Select a Status</option>
                                <option value="In Stock" {{ $product->in_stock == 'In Stock' ? 'selected' : '' }}>In Stock</option>
                                <option value="Out of Stock" {{ $product->in_stock == 'Out of Stock' ? 'selected' : '' }}>Out of Stock</option>
                                <option value="Used" {{ $product->in_stock == 'Used' ? 'selected' : '' }}>Used</option>
                            </select>
                        </div>
                    </fieldset><br/>

                    <!-- Quantity -->
                    <fieldset class="qty">
                        <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="number" step="1" placeholder="Enter Quantity" name="qty" value="{{ $product->qty }}" required>
                    </fieldset>

                    <fieldset class="Image">
                        <div class="body-title mb-10">Current Image <span class="tf-color-1">*</span></div>
                    </fieldset>
                    <!-- Modern Image Viewer -->
                    <div class="form-group">
                        <br>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                            <img src="{{ asset($product->image) }}" alt="Product Image" class="img-thumbnail" width="100">
                        </a>
                    </div><br/>

                    <!-- Bootstrap Modal for Full-Screen Image -->
                    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content custom-modal">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title w-100 text-center">Product Image</h5>
                                    <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="{{ asset($product->image) }}" alt="Product Image" class="img-fluid rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <fieldset>
                        <div class="body-title">Upload New Image (Allowed only JPG, JPEG, PNG, and WebP files)</div>
                        <div class="upload-image flex-grow">
                            <div class="item up𝐁
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                <input type="file" id="myFile" name="image_path" accept="image/png, image/jpeg, image/jpg, image/webp">
                                <div id="imagePreview" class="flex flex-wrap gap-2 mt-2">
                                    @if($product->image)
                                        <img src="{{ asset($product->image) }}" class="w-24 h-24 object-cover rounded-lg border p-1 shadow" alt="Product Image">
                                    @endif
                                </div>
                            </label>
                        </div>
                    </div>
                    </fieldset>
                    <br/>

                    <!-- Submit Button -->
                    <div class="bot">
                        <div></div>
                    <button type="submit" 
                        style="
                            display: block;
                            margin: 0 auto;
                            background-color: black;
                            color: white;
                            border: 1px solid black;
                            padding: 10px 20px;
                            cursor: pointer;
                            transition: all 0.3s ease;
                        "
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='black'; this.style.color='white';"
                    >
                        Update Product
                    </button>


                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>

<!-- Quill CSS -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">

<!-- Quill JS -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<script>
    // Initialize Quill editor
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline'],
                ['link'],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['clean']
            ]
        },
        placeholder: 'Enter Description'
    });

    // Sync Quill content with hidden textarea before form submission
    const form = document.getElementById('addItemForm');
    const descriptionTextarea = document.getElementById('description');
    form.addEventListener('submit', () => {
        descriptionTextarea.value = quill.root.innerHTML;
    });
</script>

<script>
    document.getElementById("myFile").addEventListener("change", function (event) {
        const previewContainer = document.getElementById("imagePreview");
        previewContainer.innerHTML = "";

        const files = event.target.files;
        if (files.length > 0) {
            Array.from(files).forEach((file) => {
                if (file.type.startsWith("image/")) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const img = document.createElement("img");
                        img.src = e.target.result;
                        img.classList.add("w-24", "h-24", "object-cover", "rounded-lg", "border", "p-1", "shadow");
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    });
</script>

<script>
    function toggleDealDates() {
        var selectedTag = document.getElementById("tags").value;
        var dealStartField = document.getElementById("deal_start_field");
        var dealEndField = document.getElementById("deal_end_field");

        // Show or hide Deal Start and End Date fields based on the selected tag
        if (selectedTag === "DEAL OF THE DAYS") {
            dealStartField.style.display = "block";
            dealEndField.style.display = "block";
        } else {
            dealStartField.style.display = "none";
            dealEndField.style.display = "none";
        }
    }

    // Ensure the function runs on page load if a tag is pre-selected
    window.onload = toggleDealDates;
</script>
