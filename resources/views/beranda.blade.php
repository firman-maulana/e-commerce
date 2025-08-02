@extends('layouts.app')

@section('title', 'Beranda')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: white;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Shop By Categories Section */
    .shop-categories {
        padding: 30px 20px;
    }

    .categories-header {
        margin-bottom: 25px;
        text-align: left;
        margin-left: 15px;
    }

    .categories-header h2 {
        font-weight: 600;
        color: black;
        display: inline-flex;
        align-items: left;
        gap: 15px;
        font-size: 2.2rem;
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 17px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .category-card {
        position: relative;
        height: 90px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .category-card h3 {
        position: absolute;
        bottom: 25px;
        left: 30px;
        color: white;
        font-size: 1.7rem;
        font-weight: 5600;
        z-index: 3;
    }

    /* Category Backgrounds */
    .hat {
        background: linear-gradient(135deg, #e67e22, #d35400),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 220"><rect fill="%23795548" width="400" height="220"/><path fill="%23ff5722" d="M50 130c30-10 60-5 90 5s60 15 90 10 60-10 90-5 60 15 90 10v90H50z"/><ellipse cx="200" cy="150" rx="80" ry="15" fill="%23bf360c"/></svg>');
        background-size: cover;
        background-position: center;
    }

    .shirt {
        background: linear-gradient(135deg, #3498db, #2980b9),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 220"><rect fill="%236b7280" width="400" height="220"/><path fill="%23ffffff" d="M80 140c25-8 50-3 75 3s50 12 75 8 50-8 75-3 50 12 75 8v72H80z"/><ellipse cx="200" cy="155" rx="70" ry="12" fill="%23e5e7eb"/></svg>');
        background-size: cover;
        background-position: center;
    }

    .hoodie {
        background: linear-gradient(135deg, #1abc9c, #16a085),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 220"><rect fill="%231f2937" width="400" height="220"/><path fill="%2306b6d4" d="M70 135c20-6 40-2 60 2s40 10 60 6 40-6 60-2 40 10 60 6v73H70z"/><rect fill="%23f97316" x="180" y="120" width="40" height="20" rx="10"/><text x="200" y="115" text-anchor="middle" fill="%23ffffff" font-size="12" font-family="Arial">"AIR"</text></svg>');
        background-size: cover;
        background-position: center;
    }

    .trousers {
        background: linear-gradient(135deg, #27ae60, #229954),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 220"><rect fill="%2315803d" width="400" height="220"/><path fill="%23374151" d="M60 145c28-7 56-2 84 3s56 11 84 7 56-7 84-2v67H60z"/><path fill="%23ffffff" d="M60 145c28-7 56-2 84 3s56 11 84 7 56-7 84-2v25c-28 5-56 0-84-5s-56-11-84-7v-21z"/><path fill="%23ef4444" d="M180 130c15-3 30 0 45 3v10c-15-3-30-6-45-3v-10z"/></svg>');
        background-size: cover;
        background-position: center;
    }

    .shoe {
        background: linear-gradient(135deg, #f39c12, #e67e22),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 220"><rect fill="%23374151" width="400" height="220"/><circle fill="%23fbbf24" cx="350" cy="50" r="30"/><rect fill="%236b7280" y="170" width="400" height="50"/><path fill="%23111827" d="M150 150c25-6 50-1 75 4s50 10 75 6v50c-25 4-50-1-75-6s-50-10-75-4v-50z"/></svg>');
        background-size: cover;
        background-position: center;
    }

    .bag {
        background: linear-gradient(135deg, #95a5a6, #7f8c8d),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 220"><rect fill="%23111827" width="400" height="220"/><path fill="%23ffffff" d="M80 150c30-8 60-3 90 4s60 12 90 8 60-8 90-3v61H80z"/><ellipse cx="200" cy="165" rx="75" ry="10" fill="%23e5e7eb"/><path fill="%23d1d5db" d="M80 150c30-8 60-3 90 4s60 12 90 8 60-8 90-3v15c-30 5-60 0-90-8s-60-12-90-4v-16z"/></svg>');
        background-size: cover;
        background-position: center;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .categories-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .categories-header h2 {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 768px) {
        .shop-categories {
            padding: 60px 15px;
        }

        .categories-header h2 {
            font-size: 2rem;
        }

        .category-card {
            height: 180px;
        }

        .category-card h3 {
            font-size: 1.8rem;
            bottom: 20px;
            left: 25px;
        }
    }

    @media (max-width: 480px) {
        .categories-grid {
            grid-template-columns: 1fr;
        }

        .categories-header h2 {
            font-size: 1.8rem;
            flex-direction: column;
            gap: 10px;
        }

        .category-card {
            height: 160px;
        }

        .category-card h3 {
            font-size: 1.6rem;
        }
    }

    /* Hero Section */
    .hero {
        height: 100vh;
        background: url('storage/image/banner.png');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        position: relative;
        padding-left: 5%;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: black;
        text-align: left;
        max-width: 600px;
    }

    .hero-title {
        font-size: 3.2rem;
        font-weight: 1000;
        margin-bottom: 1rem;
        line-height: 1.2;
        animation: slideInLeft 1s ease-out;
    }

    .hero-subtitle {
        font-size: 1rem;
        margin-bottom: 2rem;
        opacity: 0.9;
        animation: slideInLeft 1s ease-out 0.3s both;
    }

    /* Timeless Choice Section - UPDATED */
    .timeless {
        padding: 30px 20px;
        /* Mengubah dari 30px ke 20px untuk menyejajarkan dengan shop-categories */
    }

    .header {
        padding: 40px 0;
        /* Mengubah dari 40px 20px ke 40px 0 */
        text-align: left;
        margin-left: 15px;
        /* Menambahkan margin kiri untuk sejajar dengan categories-header */
    }

    .header h1 {
        font-size: 2.5em;
        font-weight: 400;
        color: #000;
        line-height: 1.2;
        margin-bottom: 0px;
    }

    .header .bold {
        font-weight: 700;
    }

    .see-more {
        color: #999;
        font-size: 1em;
        cursor: pointer;
        float: right;
        margin-top: -60px;
        margin-right: 15px;
        /* Menambahkan margin kanan untuk sejajar */
    }

    .content-section {
        display: flex;
        gap: 24px;
        padding: 0;
        /* Mengubah dari padding: 0 20px ke padding: 0 */
        align-items: stretch;
        max-width: 1200px;
        /* Menambahkan max-width yang sama dengan categories-grid */
        margin: 0 auto;
        /* Menambahkan center alignment */
    }

    .trend-card {
        width: 280px;
        height: 378px;
        border-radius: 12px;
        background: url('storage/image/firman.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: flex-start;
        /* Mengubah dari flex-end ke flex-start */
        padding: 30px;
        position: relative;
        overflow: hidden;
    }

    /* Menambahkan overlay bayangan di bagian atas */
    .trend-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 50%;
        /* Bayangan menutupi setengah bagian atas */
        background: linear-gradient(to bottom, rgba(0, 0, 0, 70), rgba(0, 0, 0, 0));
        z-index: 1;
    }

    .trend-text {
        font-size: 2.5em;
        font-weight: 700;
        line-height: 1.1;
        position: relative;
        z-index: 2;
        /* Memastikan teks berada di atas overlay */
    }

    .shoes-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        flex: 1;
    }

    .shoe-card {
        background: transparent;
        border: none;
        padding: 0;
        box-shadow: none;
        display: flex;
        flex-direction: column;
        height: 400px;
        transition: transform 0.3s ease;
    }

    .shoe-image {
        width: 100%;
        height: 288px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
        background: white;
        border-radius: 12px;
        border: 1px solid black;
    }

    .shoe-image img {
        max-width: 160px;
        max-height: 140px;
        object-fit: contain;
    }

    /* FIXED: Shoe title and rating horizontal alignment */
    .shoe-info {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 12px;
    }

    .shoe-title {
        font-size: 0.9em;
        font-weight: 500;
        color: black;
        line-height: 1.3;
        flex: 1;
        margin-right: 12px;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 4px;
        flex-shrink: 0;
    }

    .rating .star {
        color: #ffa500;
        font-size: 1em;
    }

    .rating .score {
        color: #ffa500;
        font-weight: 600;
        font-size: 0.9em;
    }

    .bottom-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .shoe-price {
        font-size: 1.08em;
        font-weight: 700;
        color: #1a365d;
    }

    .cart-btn {
        background: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        padding: 6px 6px;
        cursor: pointer;
        font-size: 1.2em;
        transition: background-color 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cart-btn:hover {
        background: #0056b3;
    }

    @media (max-width: 768px) {
        .timeless {
            padding: 60px 15px;
            /* Menyejajarkan dengan shop-categories pada mobile */
        }

        .header {
            margin-left: 0;
            /* Reset margin pada mobile */
        }

        .see-more {
            margin-right: 0;
            /* Reset margin pada mobile */
        }

        .content-section {
            flex-direction: column;
        }

        .trend-card {
            width: 100%;
            height: 200px;
            margin-bottom: 20px;
        }

        .shoes-grid {
            grid-template-columns: 1fr;
        }

        .header h1 {
            font-size: 2em;
        }

        .shoe-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .shoe-title {
            margin-right: 0;
        }
    }

    @media (max-width: 1024px) and (min-width: 769px) {
        .shoes-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* The Latest Section - UPDATED */
    .thelatest {
        padding: 30px 20px;
    }

    .thelatest-header {
        margin-bottom: 25px;
        text-align: left;
        margin-left: 15px;
    }

    .thelatest-header h2 {
        font-weight: 600;
        color: black;
        display: inline-flex;
        align-items: left;
        gap: 15px;
        font-size: 2.2rem;
    }

    .latest-images-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .latest-image-card {
        position: relative;
        height: 300px;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .latest-image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    /* Overlay gelap yang muncul saat hover */
    .latest-image-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    /* Tombol Shop */
    .shop-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #ff6b6b;
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 0.9rem;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
        z-index: 2;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Efek hover pada card */
    .latest-image-card:hover::before {
        opacity: 1;
    }

    .latest-image-card:hover .shop-btn {
        opacity: 1;
    }


    /* Responsive Design for The Latest Section */
    @media (max-width: 768px) {
        .thelatest {
            padding: 60px 15px;
        }

        .thelatest-header {
            margin-left: 0;
        }

        .latest-images-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .latest-image-card {
            height: 250px;
        }

        .shop-btn {
            padding: 10px 20px;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .thelatest-header h2 {
            font-size: 1.8rem;
        }

        .latest-image-card {
            height: 220px;
        }

        .shop-btn {
            padding: 8px 16px;
            font-size: 0.9rem;
        }
    }
</style>
@endsection

@section('content')
<section class="hero" id="home">
    <div class="hero-content">
        <h2 class="hero-title">
            THE HERO'S PATH STARTS HERE
        </h2>
    </div>
</section>

<!-- Shop By Categories Section -->
<section class="shop-categories">
    <div class="categories-header">
        <h2>Shop By Categories</h2>
    </div>

    <div class="categories-grid">
        <a href="#" class="category-card hat">
            <h3>Hat</h3>
        </a>

        <a href="#" class="category-card shirt">
            <h3>Shirt</h3>
        </a>

        <a href="#" class="category-card hoodie">
            <h3>Hoodie</h3>
        </a>

        <a href="#" class="category-card trousers">
            <h3>Trousers</h3>
        </a>

        <a href="#" class="category-card shoe">
            <h3>Shoe</h3>
        </a>

        <a href="#" class="category-card bag">
            <h3>Bag</h3>
        </a>
    </div>
</section>

<!-- Timeless Choice Section - UPDATED -->
<section class="timeless">
    <div class="header">
        <h1>Sure Steps, <span class="bold">Latest<br>Style</span>, Comfort Every Day!</h1>
        <div class="see-more">See More →</div>
    </div>

    <div class="content-section">
        <div class="trend-card">
            <div class="trend-text">Trend<br>Shoes</div>
        </div>

        <div class="shoes-grid">
            <div class="shoe-card">
                <div class="shoe-image">
                    <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b7d9211c-26e7-431a-ac24-b0540fb3c00f/air-force-1-07-mens-shoes-jBrhbr.png" alt="Air Force 1">
                </div>
                <div class="shoe-info">
                    <div class="shoe-title">Air Force 1 '07 Men's Basketball Shoes - White</div>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <span class="score">4.6</span>
                    </div>
                </div>
                <div class="bottom-section">
                    <div class="shoe-price">IDR 929,400,00</div>
                    <button class="cart-btn">
                        <i class="bi bi-cart3"></i>
                    </button>
                </div>
            </div>

            <div class="shoe-card">
                <div class="shoe-image">
                    <img src="https://images.asics.com/is/image/asics/1201A789_020_SR_RT_GLB?$zoom$" alt="Gel-Nyc 2055">
                </div>
                <div class="shoe-info">
                    <div class="shoe-title">Gel-Nyc 2055 Unisex Sneakers Shoes</div>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <span class="score">4.6</span>
                    </div>
                </div>
                <div class="bottom-section">
                    <div class="shoe-price">IDR 1,079,400,00</div>
                    <button class="cart-btn">
                        <i class="bi bi-cart3"></i>
                    </button>
                </div>
            </div>

            <div class="shoe-card">
                <div class="shoe-image">
                    <img src="https://nb.scene7.com/is/image/NB/m530shg_nb_02_i?$pdpflexf2$&wid=440&hei=440" alt="NB 530">
                </div>
                <div class="shoe-info">
                    <div class="shoe-title">530 Unisex Sneaker Shoes - White</div>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <span class="score">4.6</span>
                    </div>
                </div>
                <div class="bottom-section">
                    <div class="shoe-price">IDR 1,279,200,00</div>
                    <button class="cart-btn">
                        <i class="bi bi-cart3"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Latest Section -->
<section class="thelatest">
    <div class="thelatest-header">
        <h2>The Latest</h2>
    </div>

    <div class="latest-images-grid">
        <div class="latest-image-card">
            <img src="storage/image/angle1.png" alt="Latest Collection 1">
            <button class="shop-btn">Shop</button>
        </div>

        <div class="latest-image-card">
            <img src="storage/image/angle2.png" alt="Latest Collection 2">
            <button class="shop-btn">Shop</button>
        </div>
    </div>
</section>
@endsection