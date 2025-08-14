<div class="navbar">
    <!-- Logo -->
    <div class="logo-container">
    <a href="/home" class="logo-link">
        <img src="n_logo_white.png" alt="Logo" class="logo">
    </a>
    </div>


    <!-- Navbar Links -->
    <div class="nav-links-container">
      <!-- Hamburger Menu for Mobile -->
      <div class="hamburger" onclick="toggleMenu()">&#9776;</div>

      <!-- Links Container -->
      <ul class="nav-links">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="{{ request()->routeIs('product.category') ? 'active' : '' }}">Shop</a></li>
        <li><a href="{{ route('aboutUs') }}" class="{{ request()->routeIs('aboutUs') ? 'active' : '' }}">About us</a></li>
        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
        <li><a href="{{ route('blog.show') }}" class="{{ request()->routeIs('blog.show') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact us</a></li>
        <li><a href="{{ route('myAcc') }}" class="icon-link {{ request()->routeIs('myAcc') ? 'active' : '' }}"><img src="images/user.svg" alt="User" class="icon"></a></li>
        <li style="position: relative; display: inline-block;">
            <a href="{{ route('cart') }}" class="icon-link {{ request()->routeIs('cart') ? 'active' : '' }}" style="position: relative;">
                <img src="images/cart.svg" alt="Cart" class="icon" >
                <span id="cart-badge" style="
                    position: absolute;
                    top: -8px;
                    right: 4px;
                    background: #ff4444;
                    color: white;
                    border-radius: 50%;
                    width: 18px;
                    height: 18px;
                    font-size: 11px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: bold;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.2);
                ">0</span>
            </a>
        </li>
      </ul>
    </div>
  </div>

  <script>
    function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.style.display = navLinks.style.display === 'block' ? 'none' : 'block';
    }
  </script>


<style>
.navbar {
  background-color: #3b5d50;
  padding: 15px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-family: Arial, sans-serif;
  width: 100%;
  top: 0;
  z-index: 1000;
}

.logo-container {
  display: flex;
  align-items: center;
  margin-left: 20px;
}

.logo {
  height: 60px;
  width: auto;
}

.nav-links-container {
  display: flex;
  align-items: center;
}

.hamburger {
  display: none;
  cursor: pointer;
  font-size: 24px;
  color: white;
}

.nav-links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  gap: 20px;
}

.nav-links li {
  margin: 0;
}

.nav-links a {
  color: #cccccc;
  text-decoration: none;
  font-size: 14px;
  position: relative;
  padding: 8px 12px;
  display: inline-block;
  transition: color 0.3s;
  font-family: 'Inter', sans-serif;
  font-weight: 500;
}

.nav-links a:not(.icon-link)::after {
  content: '';
  position: absolute;
  width: 0;
  height: 5px;
  bottom: 0;
  left: 12px; /* Aligns with padding-left of the link */
  right: 12px; /* Aligns with padding-right of the link */
  background-color: #f9bf29;
  transition: width 0.3s ease-in-out;
}

.nav-links a:not(.icon-link):hover::after,
.nav-links a:not(.icon-link).active::after {
  width: calc(100% - 24px); /* Matches text width, excluding padding */
}

.nav-links a:hover {
  color: white;
}

.nav-links a.active {
  color: white;
}

.icon-link {
  display: flex;
  align-items: center;
}

.icon {
  height: 20px;
  width: 20px;
  margin-right: 8px;
}

@media (max-width: 768px) {
  .nav-links {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 60px;
    left: 0;
    right: 0;
    background-color: #3b5d50;
    padding: 10px;
  }

  .nav-links li {
    margin: 10px 0;
  }

  .hamburger {
    display: block;
  }
}
</style>



<script>
let cart = [];

function addToCart(prodID) {
    // Fetch product quantity from API before adding to cart
    fetch(`/product-quantity/${prodID}`)
        .then(response => response.json())
        .then(data => {
            const availableQty = data.qty;

            if (availableQty <= 0) {
                alert('This product is out of stock.');
                return;
            }

            // Product Data from PHP (Convert PHP array to JSON)
            const products = <?php echo json_encode($products); ?>;

            prodID = parseInt(prodID);

            // Find the product in products array
            const productToAdd = products.find(product => parseInt(product.id) === prodID);

            if (!productToAdd) {
                console.error('Product not found');
                return;
            }

            // Check if product already exists in cart
            const existingCartItem = cart.find(item => item.id === prodID);

            if (existingCartItem) {
                // If product exists, check available stock before incrementing quantity
                if (existingCartItem.quantity < availableQty) {
                    existingCartItem.quantity += 1;
                } else {
                    alert('Only ' + availableQty + ' items available in stock.');
                    return;
                }
            } else {
                // If product doesn't exist, add it with quantity 1
                cart.push({
                    id: productToAdd.id,
                    name: productToAdd.name,
                    price: productToAdd.dis_price,
                    image: productToAdd.image,
                    quantity: 1
                });
            }
                        // Update cart count in UI
                        updateCartCount();

                // Show success message
                updateCartModal(productToAdd);

                // Save cart to localStorage
                saveCartToStorage();

                // Log cart for debugging
                console.log('Current cart:', cart);

                // Update cart modal
                displayCartItems();


        })
        .catch(error => console.error('Error fetching product quantity:', error));
}


    // Function to update the cart modal with the latest item
    function updateCartModal(product) {
        const modal = document.getElementById('exampleModal-Cart');
        if (!modal) return;

        // Update image
        const imageElement = modal.querySelector('.tt-img img');
        if (imageElement) {
            imageElement.src = product.image;
            imageElement.alt = product.name;
        }

        // Update title
        const titleElement = modal.querySelector('.tt-title a');
        if (titleElement) {
            titleElement.textContent = product.name;
            titleElement.href = `singleProduct?product-id=${product.id}`;
        }
    }

    // Helper functions
    function updateCartCount() {
    const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
    const cartCountElement = document.getElementById('cart-badge'); // Changed to match HTML
    if (cartCountElement) {
        cartCountElement.textContent = cartCount;
    }
}

    function saveCartToStorage() {
        localStorage.setItem('shopping-cart', JSON.stringify(cart));
    }

    // Load cart from storage on page load
    function initializeCart() {
        const savedCart = localStorage.getItem('shopping-cart');
        if (savedCart) {
            cart = JSON.parse(savedCart);
            updateCartCount();
        }
    }

    // Call initialization when page loads
    document.addEventListener('DOMContentLoaded', initializeCart);

    ///////////////////////////////////////////////////////////////
    // Function to display cart items in the offcanvas
    ///////////////////////////////////////////////////////////////
    function displayCartItems() {
        const cartList = document.querySelector('.minicart-product-list');
        const savedCart = localStorage.getItem('shopping-cart');

        if (!cartList) return;

        cartList.innerHTML = '';

        if (savedCart) {
            const cart = JSON.parse(savedCart);

            cart.forEach(item => {
                // Trim name to 25 characters
                const shortName = item.name.length > 25 
                    ? `${item.name.substring(0, 20)}...` 
                    : item.name;

                const li = document.createElement('li');
                li.className = 'flex py-2 gap-3 items-center';
                li.innerHTML = `
                    <a href="singleProduct?product-id=${item.id}" >
                        <img src="${item.image}" alt="${item.name}" class="w-12 h-12 object-cover">
                    </a>
                    <div class="content flex-1 min-w-0">
                        <div class="flex justify-between items-baseline gap-2">
                            <a href="singleProduct?product-id=${item.id}" 
                            class="title text-white text-sm truncate hover:text-gray-300"
                            title="${item.name}"> <!-- Full name shows on hover -->
                                ${shortName}
                            </a>
                            <a href="#" class="remove text-white hover:text-gray-300 text-xl font-light transition-colors" data-product-id="${item.id}">×</a>
                        </div>
                        <div class="flex justify-between items-center mt-1">
                            <span class="text-gray-300 text-xs">${item.quantity} × ${item.price}</span>
                            ${item.color || item.size ? 
                                `<span class="text-gray-400 text-xs">${item.color ? item.color : ''}${item.color && item.size ? ' • ' : ''}${item.size ? item.size : ''}</span>` 
                                : ''}
                        </div>
                    </div>
                `;
                cartList.appendChild(li);
            });

            addRemoveEventListeners();
        }

        updateCartTotal();
    }

    // Function to remove item from cart
    function removeFromCart(productId) {
        let cart = JSON.parse(localStorage.getItem('shopping-cart')) || [];

        // Remove item from cart
        cart = cart.filter(item => parseInt(item.id) !== parseInt(productId));

        // Update localStorage
        localStorage.setItem('shopping-cart', JSON.stringify(cart));

        // Refresh cart display
        displayCartItems();

        // Update cart count
        updateCartCount();
    }

    // Function to add event listeners to remove buttons
    function addRemoveEventListeners() {
        const removeButtons = document.querySelectorAll('.minicart-product-list .remove');
        removeButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const productId = button.getAttribute('data-product-id');
                removeFromCart(productId);
            });
        });
    }

    // Function to update cart total
    function updateCartTotal() {
        const savedCart = localStorage.getItem('shopping-cart');
        const cart = savedCart ? JSON.parse(savedCart) : [];

        const total = cart.reduce((sum, item) => {
            const price = parseFloat(item.price.replace(/[^0-9.-]+/g, '')); // Remove currency symbol and commas
            return sum + (price * item.quantity);
        }, 0);

        // Update total display if you have a total element
        const totalElement = document.querySelector('.cart-total-amount');
        if (totalElement) {
            totalElement.textContent = `${total.toLocaleString()} LKR`;
        }
    }

    // Call displayCartItems when the offcanvas is opened
    document.addEventListener('DOMContentLoaded', () => {
        const cartButton = document.querySelector('[data-bs-target="#offcanvas-cart"]');
        if (cartButton) {
            cartButton.addEventListener('click', displayCartItems);
        }

        // Initial display
        displayCartItems();
    });
</script>