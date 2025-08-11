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
        background: white;
        backdrop-filter: blur(15px);
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
        color: black;
        text-decoration: none;
        font-weight: 700;
        font-size: 1rem;
        transition: color 0.3s ease;
        position: relative;
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

    .nav-right {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex: 1;
        justify-content: flex-end;
    }

    .search-container {
        position: relative;
        display: flex;
        align-items: center;
    }

    .search-icon {
        color: black;
        font-size: 1.2rem;
        cursor: pointer;
        transition: color 0.3s ease;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-bar {
        position: absolute;
        right: 40px;
        top: 50%;
        transform: translateY(-50%);
        padding: 8px 15px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 25px;
        background: rgba(0, 0, 0, 0.8);
        color: white;
        font-size: 0.9rem;
        width: 0;
        opacity: 0;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        pointer-events: none;
    }

    .search-bar.active {
        width: 200px;
        opacity: 1;
        pointer-events: auto;
    }

    .search-bar::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .search-bar:focus {
        outline: none;
        border-color: #fff;
        background: rgba(0, 0, 0, 0.9);
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

    .nav-icons {
        display: flex;
        gap: 1rem;
        align-items: center;
        margin-left: 1rem;
    }

    .nav-icon {
        color: black;
        font-size: 1.2rem;
        cursor: pointer;
        transition: color 0.3s ease;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cart-icon {
        position: relative;
    }

    .nav-auth-btn {
        margin-left: 10px;
        padding: 6px 12px;
        border: 1px solid white;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        color: white;
        background-color: transparent;
        transition: all 0.3s ease;
    }

    .nav-auth-btn:hover {
        background-color: white;
        color: #000;
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

        .search-bar.active {
            width: 150px;
        }

        .search-bar:focus {
            width: 170px;
        }
    }

    @media (max-width: 480px) {
        .search-bar.active {
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
        color: white;
        border: 2px solid white;
    }

    .sign-in-btn:hover {
        background-color: white;
        color: #000;
    }

    .sign-up-btn {
        background-color: white;
        color: #000;
        border: 2px solid white;
    }

    .sign-up-btn:hover {
        background-color: transparent;
        color: white;
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

        <!-- Logo menggunakan 1 file saja -->
        <img id="logo" src="storage/image/maneviz.png" alt="TIMELESS Logo" class="logo">

        <div class="nav-right">
            <div class="search-container">
                <i class="bi bi-search search-icon" onclick="toggleSearch()"></i>
                <input type="text" class="search-bar" id="searchBar" placeholder="Search...">
            </div>

            <!-- Cart icon: selalu tampil -->
            <div class="nav-icons">
                <!-- Profile icon (placeholder untuk auth logic) -->
                <div class="nav-icon profile-dropdown">
                    <i class="bi bi-person-circle" onclick="toggleProfileDropdown()"></i>
                    <div class="profile-menu" id="profileDropdown">
                        <button type="button"><a href="{{ route('profile') }}">Profile</a></button>
                        <button type="button"><a href="{{ route('tracking') }}">Tracking</a></button>
                        <button type="button"><a href="{{ route('chatAdmin') }}">Chat Admin</a></button>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

                <span class="nav-icon cart-icon" onclick="toggleCart()">
                    <i class="bi bi-cart3"></i>
                </span>
            </div>

            <button class="mobile-menu-toggle">☰</button>
        </div>
    </div>
</nav>

<script>
    let isScrolled = false;
    let searchActive = false;

    // Navbar scroll effect tanpa perubahan logo
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');

        if (window.scrollY > 50) {
            if (!isScrolled) {
                navbar.classList.add('scrolled');
                isScrolled = true;
            }
        } else {
            if (isScrolled) {
                navbar.classList.remove('scrolled');
                isScrolled = false;
            }
        }
    });

    // Toggle search bar function
    function toggleSearch() {
        const searchBar = document.getElementById('searchBar');
        searchActive = !searchActive;

        if (searchActive) {
            searchBar.classList.add('active');
            setTimeout(() => {
                searchBar.focus();
            }, 300);
        } else {
            searchBar.classList.remove('active');
            searchBar.value = '';
        }
    }

    // Close search bar when clicking outside
    document.addEventListener('click', function(e) {
        const searchContainer = document.querySelector('.search-container');
        const searchBar = document.getElementById('searchBar');

        if (!searchContainer.contains(e.target) && searchActive) {
            searchBar.classList.remove('active');
            searchActive = false;
            searchBar.value = '';
        }
    });

    // Prevent search bar from closing when clicking on the input
    document.getElementById('searchBar').addEventListener('click', function(e) {
        e.stopPropagation();
    });

    // Handle search on Enter key
    document.getElementById('searchBar').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const searchValue = this.value;
            if (searchValue.trim() !== '') {
                // Implement your search functionality here
                console.log('Searching for:', searchValue);
                alert('Searching for: ' + searchValue);
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

    function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    // Tutup dropdown saat klik di luar
    document.addEventListener('click', function(e) {
        const profileIcon = document.querySelector('.profile-dropdown');
        const dropdown = document.getElementById('profileDropdown');

        if (dropdown && !profileIcon.contains(e.target)) {
            dropdown.style.display = 'none';
        }
    });
</script>