<section class="py-12 px-4 max-w-6xl mx-auto">
    <div class="text-center mb-12">
        <h2 class="text-2xl font-light text-black mb-2" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Furniture Categories</h2>
        <p class="text-black" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Explore our range of stylish and high-quality furniture to enhance your home.</p>
        <div class="w-10 h-px bg-black mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Sofas -->
        <div class="group">
            <div class="relative bg-white border border-gray-200 overflow-hidden mb-3">
                <img src="assets/images/category/Luonto_Elfin_Room-scene_King_Rene_01_Closed_Hires.webp" alt="Sofas" class="w-full h-64 object-cover">
            </div>
            <div class="space-y-2">
                <h3 class="text-base font-light text-black" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Sofas</h3>
                <p class="text-xs text-gray-600 font-light mb-2" style="font-size: 14px;">
                    Comfortable and stylish sofas designed to complement any living room while providing maximum relaxation.
                </p>
                <button onclick="window.location.href='{{ route('product.category', ['filter' => 'SOFAS']) }}'" 
                        style="width: 100%; padding: 10px; font-size: 14px; font-weight: 300; background-color: #3b5d50; color: white; border: 1px solid #3b5d50; cursor: pointer; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#3b5d50';"
                        onmouseout="this.style.backgroundColor='#3b5d50'; this.style.color='white';">
                    Explore more
                </button>
            </div>
        </div>

        <!-- Coffee Tables -->
        <div class="group">
            <div class="relative bg-white border border-gray-200 overflow-hidden mb-3">
                <img src="assets/images/category/calla-coffee-table-48-o.jpg" alt="Coffee Tables" class="w-full h-64 object-cover">
            </div>
            <div class="space-y-2">
                <h3 class="text-base font-light text-black" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Coffee Tables</h3>
                <p class="text-xs text-gray-600 font-light mb-2" style="font-size: 14px;">
                    Elegant coffee tables crafted with premium materials, perfect for enhancing your living room style and functionality.
                </p>
                <button onclick="window.location.href='{{ route('product.category', ['filter' => 'COFFEE_TABLES']) }}'" 
                        style="width: 100%; padding: 10px; font-size: 14px; font-weight: 300; background-color: #3b5d50; color: white; border: 1px solid #3b5d50; cursor: pointer; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#3b5d50';"
                        onmouseout="this.style.backgroundColor='#3b5d50'; this.style.color='white';">
                    Explore more
                </button>
            </div>
        </div>

        <!-- Dining Tables -->
        <div class="group">
            <div class="relative bg-white border border-gray-200 overflow-hidden mb-3">
                <img src="assets/images/category/iN2x65kAIEvKuTB7Qbnir8jH7RMPY2ackUUePsn8.webp" alt="Dining Tables" class="w-full h-64 object-cover">
            </div>
            <div class="space-y-2">
                <h3 class="text-base font-light text-black" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Dining Tables</h3>
                <p class="text-xs text-gray-600 font-light mb-2" style="font-size: 14px;">
                    Stylish dining tables designed for family gatherings and special occasions with lasting quality and elegance.
                </p>
                <button onclick="window.location.href='{{ route('product.category', ['filter' => 'DINING_TABLES']) }}'" 
                        style="width: 100%; padding: 10px; font-size: 14px; font-weight: 300; background-color: #3b5d50; color: white; border: 1px solid #3b5d50; cursor: pointer; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#3b5d50';"
                        onmouseout="this.style.backgroundColor='#3b5d50'; this.style.color='white';">
                    Explore more
                </button>
            </div>
        </div>

        <!-- Shelving Units -->
        <div class="group">
            <div class="relative bg-white border border-gray-200 overflow-hidden mb-3">
                <img src="assets/images/category/Branch-3-Shelving-Unit-Blond-White-Blond-L01.jpg" alt="Shelving Units" class="w-full h-64 object-cover">
            </div>
            <div class="space-y-2">
                <h3 class="text-base font-light text-black" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Shelving Units</h3>
                <p class="text-xs text-gray-600 font-light mb-2" style="font-size: 14px;">
                    Functional and stylish shelving units to organize and display your belongings with a modern touch.
                </p>
                <button onclick="window.location.href='{{ route('product.category', ['filter' => 'SHELVING_UNITS']) }}'" 
                        style="width: 100%; padding: 10px; font-size: 14px; font-weight: 300; background-color: #3b5d50; color: white; border: 1px solid #3b5d50; cursor: pointer; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#3b5d50';"
                        onmouseout="this.style.backgroundColor='#3b5d50'; this.style.color='white';">
                    Explore more
                </button>
            </div>
        </div>

        <!-- Beds -->
        <div class="group">
            <div class="relative bg-white border border-gray-200 overflow-hidden mb-3">
                <img src="assets/images/category/b9305e058f866e0bd434667124fc00c5.jpg" alt="Beds" class="w-full h-64 object-cover">
            </div>
            <div class="space-y-2">
                <h3 class="text-base font-light text-black" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Beds</h3>
                <p class="text-xs text-gray-600 font-light mb-2" style="font-size: 14px;">
                    Comfortable beds designed to provide restful sleep while complementing your bedroom décor.
                </p>
                <button onclick="window.location.href='{{ route('product.category', ['filter' => 'BEDS']) }}'" 
                        style="width: 100%; padding: 10px; font-size: 14px; font-weight: 300; background-color: #3b5d50; color: white; border: 1px solid #3b5d50; cursor: pointer; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#3b5d50';"
                        onmouseout="this.style.backgroundColor='#3b5d50'; this.style.color='white';">
                    Explore more
                </button>
            </div>
        </div>

        <!-- Storage Solutions -->
        <div class="group">
            <div class="relative bg-white border border-gray-200 overflow-hidden mb-3">
                <img src="assets/images/category/latest-trends-in-storage.avif" alt="Storage Solutions" class="w-full h-64 object-cover">
            </div>
            <div class="space-y-2">
                <h3 class="text-base font-light text-black" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Storage Solutions</h3>
                <p class="text-xs text-gray-600 font-light mb-2" style="font-size: 14px;">
                    Smart storage solutions to keep your home organized, clutter-free, and stylish at the same time.
                </p>
                <button onclick="window.location.href='{{ route('product.category', ['filter' => 'STORAGE_SOLUTIONS']) }}'" 
                        style="width: 100%; padding: 10px; font-size: 14px; font-weight: 300; background-color: #3b5d50; color: white; border: 1px solid #3b5d50; cursor: pointer; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#3b5d50';"
                        onmouseout="this.style.backgroundColor='#3b5d50'; this.style.color='white';">
                    Explore more
                </button>
            </div>
        </div>
    </div>
</section>
