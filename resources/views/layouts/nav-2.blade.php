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
        <li><a href="{{ route('cart') }}" class="icon-link {{ request()->routeIs('cart') ? 'active' : '' }}"><img src="images/cart.svg" alt="Cart" class="icon"></a></li>
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