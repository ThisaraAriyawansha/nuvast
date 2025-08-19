@include('layouts.header')
<style>
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
                <h3 class="text-xl font-semibold" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Add a New Product</h3>
                    <div class="last-updated">
                        Last updated: {{ now()->format('M j, Y g:i A') }}
                    </div>
                </div>


                <form id="addItemForm" class="form-new-product space-y-5" method="POST" enctype="multipart/form-data" action="{{ route('storeProduct') }}">
                    {{ csrf_field() }}

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

                    <fieldset class="name">
                        <div class="body-title mb-10">Product Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter Product Name" name="name" required>
                    </fieldset>

                    <!-- Brand -->
                    <fieldset class="brand">
                        <div class="body-title mb-10">Brand Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter Brand Name" name="brand" required>
                    </fieldset>

                    <!-- Type -->
                    <fieldset class="type" >
                        <div class="body-title" >Select Furniture Category</div>
                        <div class="select flex-grow" >
                            <select id="type" name="type" >
                                <option value="">Select a Category</option>
                                <option value="SOFAS">Sofas</option>
                                <option value="ARMCHAIRS">Armchairs</option>
                                <option value="DINING_TABLES">Dining Tables</option>
                                <option value="DINING_CHAIRS">Dining Chairs</option>
                                <option value="COFFEE_TABLES">Coffee Tables</option>
                                <option value="SIDE_TABLES">Side Tables</option>
                                <option value="BEDS">Beds</option>
                                <option value="WARDROBES">Wardrobes</option>
                                <option value="DRESSERS">Dressers</option>
                                <option value="BOOKCASES">Bookcases</option>
                                <option value="TV_STANDS">TV Stands</option>
                                <option value="CONSOLE_TABLES">Console Tables</option>
                                <option value="OFFICE_DESKS">Office Desks</option>
                                <option value="OFFICE_CHAIRS">Office Chairs</option>
                                <option value="BAR_STOOLS">Bar Stools</option>
                                <option value="BENCHES">Benches</option>
                                <option value="LOUNGE_CHAIRS">Lounge Chairs</option>
                                <option value="RECLINERS">Recliners</option>
                                <option value="FUTONS">Futons</option>
                                <option value="DAYBEDS">Daybeds</option>
                                <option value="NIGHTSTANDS">Nightstands</option>
                                <option value="CABINETS">Cabinets</option>
                                <option value="SHELVING_UNITS">Shelving Units</option>
                                <option value="ENTERTAINMENT_CENTERS">Entertainment Centers</option>
                                <option value="ACCENT_CHAIRS">Accent Chairs</option>
                                <option value="OUTDOOR_FURNITURE">Outdoor Furniture</option>
                                <option value="KIDS_FURNITURE">Kids Furniture</option>
                                <option value="STORAGE_SOLUTIONS">Storage Solutions</option>
                                <option value="HOME_OFFICE">Home Office</option>
                                <option value="LIGHTING_FIXTURES">Lighting Fixtures</option>
                                <option value="MIRRORS">Mirrors</option>
                                <option value="RUGS">Rugs</option>
                                <option value="DECORATIVE_PILLOWS">Decorative Pillows</option>
                                <option value="CURTAINS">Curtains</option>
                            </select>
                        </div>
                    </fieldset>
                    
                    <br/>

                    <fieldset class="tags">
                        <div class="body-title">Select Tags Type</div>
                        <div class="select flex-grow">
                            <select id="tags" name="tags" onchange="toggleDealDates()">
                                <option value="">Select a Tags</option>
                                <option value="minimalist">Minimalist</option>
                                <option value="vintage">Vintage</option>
                                <option value="modern">Modern</option>
                                <option value="cozy">Cozy</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                    </fieldset><br/>

                    <!-- Deal Start Date (Initially hidden) -->
                    <fieldset class="deal_start" id="deal_start_field" style="display: none;">
                        <div class="body-title mb-10">Deal Start Date</div>
                        <input class="mb-10" type="datetime-local" name="deal_start" id="deal_start">
                    </fieldset>

                    <!-- Deal End Date (Initially hidden) -->
                    <fieldset class="deal_end" id="deal_end_field" style="display: none;">
                        <div class="body-title mb-10">Deal End Date</div>
                        <input class="mb-10" type="datetime-local" name="deal_end" id="deal_end">
                    </fieldset>

                    <!-- Description -->
                    <br/>
                    <fieldset class="description">
                        <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                        <div id="editor" class="mb-10 border rounded-lg p-2" style="min-height: 200px;"></div>
                        <textarea name="description" id="description" style="display: none;"></textarea>
                    </fieldset>

                    <!-- Prices -->
                    <fieldset class="discounted_price">
                        <div class="body-title mb-10">Discounted Price <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="number" step="0.1" placeholder="Enter Discounted Price" name="discounted_price" required>
                    </fieldset>

                    <fieldset class="retail_price">
                        <div class="body-title mb-10">Retail Price <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="number" step="0.1" placeholder="Enter Retail Price" name="retail_price" required>
                    </fieldset>

                    <!-- Warranty -->
                    <fieldset class="warranty">
                        <div class="body-title">Select Warranty</div>
                        <div class="select flex-grow">
                            <select id="warranty" name="warranty">
                                <option value="">Select a Warranty</option>
                                <option value="1 year Warranty">1 year Warranty</option>
                                <option value="2 year Warranty">2 year Warranty</option>
                                <option value="3 year Warranty">3 year Warranty</option>
                                <option value="6 months warranty">6 months warranty</option>
                                <option value="3 months warranty">3 months warranty</option>
                                <option value="1 months warranty">1 months warranty</option>
                            </select>
                        </div>
                    </fieldset><br/>

                    <!-- Stock Status -->
                    <fieldset class="in_stock">
                        <div class="body-title">Stock Status</div>
                        <div class="select flex-grow">
                            <select id="in_stock" name="in_stock">
                                <option value="">Select a Status</option>
                                <option value="In Stock">In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                                <option value="Used">Used</option>
                            </select>
                        </div>
                    </fieldset><br/>

                    <!-- Quantity -->
                    <fieldset class="qty">
                        <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="number" step="1" placeholder="Enter Quantity" name="qty" required>
                    </fieldset>

                    <!-- Image Upload -->
                    <fieldset>
                        <div class="body-title">Upload All Images here (Allowed only JPG, JPEG, PNG, and WebP files)<span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <div class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="image_path" accept="image/png, image/jpeg, image/jpg, image/webp">
                                    <div id="imagePreview" class="flex flex-wrap gap-2 mt-2"></div>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <br/>

                    <!-- Submit Button -->
                    <button type="submit" 
                        style="
                            display: block;
                            margin: 0 auto;
                            background-color: #3b5d50;
                            color: white;
                            border: 1px solid #3b5d50;
                            padding: 10px 20px;
                            cursor: pointer;
                            transition: all 0.3s ease;
                        "
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#3b5d50';"
                        onmouseout="this.style.backgroundColor='#3b5d50'; this.style.color='white';"
                    >
                        Save Product
                    </button>

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

        // Show the Deal Start and End Date fields only if 'DEAL OF THE DAYS' is selected
        if (selectedTag === "DEAL OF THE DAYS") {
            dealStartField.style.display = "block";
            dealEndField.style.display = "block";
        } else {
            dealStartField.style.display = "none";
            dealEndField.style.display = "none";
        }
    }
</script>
