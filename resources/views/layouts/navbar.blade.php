<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        padding: 15px 0;
        transition: all 0.3s ease;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3), transparent);
        font-family: 'Poppins';
    }

    .navbar.scrolled {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    }

    .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 2rem;
        flex: 1;
        margin: 0;
        padding: 0;
    }

    .nav-menu a {
        color: white;
        text-decoration: none;
        font-weight: 700;
        font-size: 1rem;
        transition: color 0.3s ease;
        position: relative;
    }

    .navbar.scrolled .nav-menu a {
        color: #333;
    }

    .nav-menu a:hover {
        color: #ff6b6b;
    }

    .nav-menu a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background: #ff6b6b;
        transition: width 0.3s ease;
    }

    .nav-menu a:hover::after {
        width: 100%;
    }

    .logo {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        height: 50px;
        width: auto;
        object-fit: contain;
        transition: all 0.3s ease;
        opacity: 1;
    }

    .logo.fade-out {
        opacity: 0;
    }

    .logo.fade-in {
        opacity: 1;
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex: 1;
        justify-content: flex-end;
    }

    .search-container {
        position: relative;
    }

    .search-bar {
        padding: 8px 40px 8px 15px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 25px;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        font-size: 0.9rem;
        width: 200px;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .search-bar::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .search-bar:focus {
        outline: none;
        border-color: #ffff;
        background: rgba(255, 255, 255, 0.2);
        width: 220px;
    }

    .navbar.scrolled .search-bar {
        border-color: rgba(51, 51, 51, 0.3);
        background: rgba(255, 255, 255, 0.8);
        color: #333;
    }

    .navbar.scrolled .search-bar::placeholder {
        color: rgba(51, 51, 51, 0.7);
    }

    .navbar.scrolled .search-bar:focus {
        border-color: black;
        background: rgba(255, 255, 255, 0.9);
    }

    .search-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 1rem;
        pointer-events: none;
    }

    .navbar.scrolled .search-icon {
        color: #333;
    }

    .nav-icons {
        display: flex;
        gap: 1rem;
        align-items: center;
        margin-left: 1rem;
    }

    .nav-icon {
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
        transition: color 0.3s ease;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .navbar.scrolled .nav-icon {
        color: #333;
    }

    .nav-icon:hover {
        color: #ff6b6b;
    }

    .cart-icon {
        position: relative;
    }

    .nav-auth-btn {
        margin-left: 10px;
        padding: 6px 12px;
        border: 1px solid #333;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        color: #333;
        background-color: #fff;
        transition: all 0.3s ease;
    }

    .nav-auth-btn:hover {
        background-color: #333;
        color: #fff;
    }

    .profile-dropdown {
        position: relative;
    }

    .profile-menu {
        display: none;
        position: absolute;
        top: 40px;
        right: 0;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px;
        z-index: 1001;
    }

    .profile-menu button {
        border: none;
        background: none;
        color: #333;
        font-size: 14px;
        padding: 5px 10px;
        cursor: pointer;
        width: 100%;
        text-align: left;
    }

    .profile-menu button:hover {
        background: #f0f0f0;
    }


    /* Mobile Menu */
    .mobile-menu-toggle {
        display: none;
        background: none;
        border: none;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .navbar.scrolled .mobile-menu-toggle {
        color: #333;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .nav-menu {
            display: none;
        }

        .mobile-menu-toggle {
            display: block;
        }

        .logo {
            position: static;
            transform: none;
            height: 35px;
            font-size: 0.9rem;
        }

        .nav-content {
            justify-content: space-between;
        }

        .nav-right {
            justify-content: flex-end;
        }

        .search-bar {
            width: 150px;
        }

        .search-bar:focus {
            width: 170px;
        }
    }

    @media (max-width: 480px) {
        .search-bar {
            width: 120px;
        }

        .search-bar:focus {
            width: 140px;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* tombol sign in dan sign up */
    .sign-in-btn {
        background-color: transparent;
        color: black;
        border: 2px solid black;
    }

    .sign-in-btn:hover {
        background-color: black;
        color: #fff;
    }

    .sign-up-btn {
        background-color: black;
        color: #fff;
        border: 2px solid black;
    }

    .sign-up-btn:hover {
        background-color: transparent;
        color: black;
    }

    @media (max-width: 480px) {
        .nav-auth-btn {
            padding: 4px 10px;
            font-size: 12px;
        }
    }
</style>
<nav class="navbar" id="navbar">
    <div class="nav-content">
        <ul class="nav-menu">
            <li><a href="{{ route('beranda') }}">Home</a></li>
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>


        <!-- Logo akan berubah saat scroll -->
        <img id="logo" src="storage/image/maneviz.png" alt="TIMELESS Logo" class="logo">

        <div class="nav-right">
            <div class="search-container">
                <input type="text" class="search-bar" placeholder="Search products...">
                <span class="search-icon">⌕</span>
            </div>

            @auth
            <!-- Ikon saat sudah login -->
            <div class="nav-icons">
                <span class="nav-icon cart-icon" onclick="toggleCart()">
                    <i class="bi bi-cart3"></i>
                </span>
                <span class="nav-icon">
                    <i class="bi bi-truck"></i>
                </span>
                <div class="nav-icon profile-dropdown">
                    <i class="bi bi-person-circle" onclick="toggleProfileDropdown()"></i>
                    <div class="profile-menu" id="profileDropdown">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                </div>

            </div>
            @endauth

            @guest
            <!-- Tombol saat belum login -->
            <div class="nav-icons">
                <a href="{{ route('signIn') }}" class="nav-auth-btn sign-in-btn">Sign In</a>
                <a href="{{ route('signUp') }}" class="nav-auth-btn sign-up-btn">Sign Up</a>

            </div>
            @endguest

        </div>

        <button class="mobile-menu-toggle">☰</button>
    </div>
</nav>

<script>
    // Logo paths - ganti dengan path logo Anda yang sebenarnya
    const logos = {
        default: 'storage/image/maneviz-white.png', // Logo untuk navbar transparan
        scrolled: 'storage/image/maneviz.png' // Logo untuk navbar putih
    };

    let isScrolled = false;

    // Navbar scroll effect dengan perubahan logo
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const logo = document.getElementById('logo');

        if (window.scrollY > 50) {
            if (!isScrolled) {
                navbar.classList.add('scrolled');

                // Fade out effect
                logo.style.opacity = '0';

                // Change logo after fade out
                setTimeout(() => {
                    logo.src = logos.scrolled;
                    logo.style.opacity = '1';
                }, 150);

                isScrolled = true;
            }
        } else {
            if (isScrolled) {
                navbar.classList.remove('scrolled');

                // Fade out effect
                logo.style.opacity = '0';

                // Change logo back after fade out
                setTimeout(() => {
                    logo.src = logos.default;
                    logo.style.opacity = '1';
                }, 150);

                isScrolled = false;
            }
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Toggle cart function (placeholder)
    function toggleCart() {
        alert('Cart functionality would be implemented here');
    }

    // Preload images for smooth transition
    function preloadImages() {
        const img1 = new Image();
        const img2 = new Image();
        img1.src = logos.default;
        img2.src = logos.scrolled;
    }

    // Call preload on page load
    window.addEventListener('load', preloadImages);

    function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    // Tutup dropdown saat klik di luar
    document.addEventListener('click', function(e) {
        const profileIcon = document.querySelector('.profile-dropdown');
        const dropdown = document.getElementById('profileDropdown');

        if (!profileIcon.contains(e.target)) {
            dropdown.style.display = 'none';
        }
    });
</script>