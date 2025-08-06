@extends('layouts.app2')

@section('title', 'Products')

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

    /* banner */
    .hero-section {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
        background-color: white;
        text-align: center;
        padding: 50px 20px;
        margin-top: 38px;
    }

    .hero-content {
        max-width: 800px;
    }

    .hero-subtitle {
        font-size: 2.8rem;
        color: #000;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: bold;
        margin-bottom: 30px;
        color: #000;
    }

    .hero-button {
        display: inline-block;
        padding: 12px 30px;
        background-color: #000;
        color: white;
        border-radius: 9999px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .hero-button:hover {
        background-color: white;
        color: black;
        border: 2px solid black;
    }

    /* best seller */
    .bestseller {
        padding: 30px 20px;
    }

    .bestseller-header {
        margin-bottom: 25px;
        text-align: left;
        margin-left: 15px;
    }

    .bestseller-header h2 {
        font-weight: 600;
        color: black;
        display: inline-flex;
        align-items: left;
        gap: 15px;
        font-size: 2.2rem;
    }

    /* Product Cards */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 15px;
        padding: 0 15px;
    }

    .product-card {
        background: white;
        border-radius: 15px;
        padding: 15px;
        border: 2px solid #e5e7eb;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .product-image-container {
        position: relative;
        margin-bottom: 12px;
    }

    .discount-badge {
        position: absolute;
        top: 8px;
        left: 8px;
        background: black;
        color: white;
        padding: 4px 8px;
        border-radius: 7px;
        font-size: 8px;
        font-weight: 600;
        z-index: 2;
    }

    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 9px;
    }

    .product-info h3 {
        font-size: 16px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 4px;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        line-height: 1.3;
    }

    .product-brand {
        color: #9ca3af;
        font-size: 12px;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .product-rating {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 10px;
    }

    .stars {
        display: flex;
        gap: 2px;
    }

    .star {
        color: #fbbf24;
        font-size: 14px;
    }

    .rating-text {
        color: #6b7280;
        font-size: 12px;
    }

    .sold-count {
        color: #9ca3af;
        font-size: 11px;
        margin-left: auto;
    }

    /* Updated price styling with discount */
    .product-price-container {
        margin-bottom: 12px;
    }

    .product-price {
        font-size: 18px;
        font-weight: 700;
        color: #1f2937;
        display: inline-block;
        margin-right: 8px;
    }

    .original-price {
        font-size: 14px;
        color: #9ca3af;
        text-decoration: line-through;
        font-weight: 400;
    }

    .add-to-cart {
        width: 100%;
        padding: 10px 20px;
        background: transparent;
        border: 1.5px solid black;
        border-radius: 8px;
        color: black;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        font-size: 12px;
    }

    .add-to-cart:hover {
        background: black;
        color: white;
        border-color: black;
    }

    @media (max-width: 768px) {
        .products-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        
        .hero-subtitle {
            font-size: 2.2rem;
        }
        
        .hero-title {
            font-size: 2.8rem;
        }

        .product-card {
            padding: 12px;
        }

        .product-image {
            height: 180px;
        }
    }

        /* inspiration outfit */
    .inspirasioutfit {
        padding: 30px 20px;
    }

    .inspirasioutfit-header {
        margin-bottom: 25px;
        text-align: left;
        margin-left: 15px;
    }

    .inspirasioutfit-header h2 {
        font-weight: 600;
        color: black;
        display: inline-flex;
        align-items: left;
        gap: 15px;
        font-size: 2.2rem;
    }

    .outfit-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    padding: 0 15px;
    justify-content: space-between;
}

.outfit-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 100px; /* Jarak antar card diperkecil */
    padding: 0 15px;
    justify-content: flex-start;
}

.outfit-card {
    display: flex;
    flex-direction: row;
    gap: 15px;
    max-width: 480px;
    width: 100%;
    align-items: flex-start;
}

.outfit-card img {
    width: 260px; /* Ukuran gambar diperbesar */
    height: auto;
    object-fit: cover;
    border-radius: 8px;
    flex-shrink: 0;
}

.outfit-content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.outfit-content h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #111827;
    margin: 0;
}

.outfit-date {
    font-size: 0.9rem;
    color: #9ca3af;
    margin-top: 208px;
}

.outfit-dates {
    font-size: 0.9rem;
    color: #9ca3af;
    margin-top: 239px;
}

@media (max-width: 768px) {
    .outfit-grid {
        flex-direction: column;
    }

    .outfit-card {
        flex-direction: column;
        max-width: 100%;
    }

    .outfit-card img {
        width: 100%;
        height: auto;
    }
}

        /* our collections */
    .ourcollection {
        padding: 30px 20px;
    }

    .ourcollection-header {
        margin-bottom: 25px;
        text-align: left;
        margin-left: 15px;
    }

    .ourcollection-header h2 {
        font-weight: 600;
        color: black;
        display: inline-flex;
        align-items: left;
        gap: 15px;
        font-size: 2.2rem;
    }

    /* Filter styling */
    .filter-container {
        margin: 20px 15px 30px 15px;
        position: relative;
    }

    .filter-scroll {
        display: flex;
        gap: 15px;
        overflow-x: auto;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE/Edge */
        padding: 5px 0;
    }

    .filter-scroll::-webkit-scrollbar {
        display: none; /* Chrome/Safari */
    }

    .filter-item {
        flex-shrink: 0;
        padding: 10px 20px;
        background: white;
        border: 2px solid #e5e7eb;
        border-radius: 25px;
        color: #6b7280;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
        font-size: 14px;
    }

    .filter-item:hover {
        background: black;
        color: white;
        border-color: black;
    }

    .filter-item.active {
        background: transparent;
        color: black;
        border-color: black;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .filter-item {
            padding: 8px 16px;
            font-size: 13px;
        }
    }

    /* Collection Products Grid - FIXED VERSION */
    .collection-products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 15px;
        padding: 0 15px;
        margin-top: 20px;
    }

    .collection-product {
        display: block;
        transition: all 0.3s ease;
        /* Ensure consistent width */
        min-width: 220px;
    }

    .collection-product.hidden {
        display: none;
    }

    /* Force grid items to maintain consistent size */
    @media (min-width: 769px) {
        .collection-products-grid {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }
        
        .collection-product {
            /* Ensure all cards have the same width regardless of how many are visible */
            width: 100%;
            max-width: none;
        }
    }

    @media (max-width: 768px) {
        .collection-products-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        
        .collection-product {
            min-width: 200px;
        }
    }

    html {
  scroll-behavior: smooth;
}


</style>
@endsection

@section('content')
<section class="hero-section">
    <div class="hero-content">
        <p class="hero-subtitle">The New Innovation:</p>
        <h1 class="hero-title">Form Chaos To Cosmos</h1>
        <a class="hero-button" href="#bestseller">Get Started</a>
    </div>
</section>

<section id="bestseller">
    <div class="bestseller-header">
        <h2>Best Seller</h2>
    </div>
    
    <div class="products-grid">
        <!-- Product Card 1 -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="discount-badge">30% OFF</div>
                <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=300&h=200&fit=crop" alt="Low pH Face Cleanser" class="product-image">
            </div>
            <div class="product-info">
                <h3>Low pH Face Cleanser</h3>
                <p class="product-brand">Bladez Gents Salon</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.8</span>
                    <span class="sold-count">1.2k sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 49.0</span>
                    <span class="original-price">AED 70.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="discount-badge">30% OFF</div>
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=300&h=200&fit=crop" alt="Face Cleanser" class="product-image">
            </div>
            <div class="product-info">
                <h3>Low pH Face Cleanser</h3>
                <p class="product-brand">Bladez Gents Salon</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.9</span>
                    <span class="sold-count">850 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 49.0</span>
                    <span class="original-price">AED 70.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="discount-badge">30% OFF</div>
                <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?w=300&h=200&fit=crop" alt="Face Cleanser Set" class="product-image">
            </div>
            <div class="product-info">
                <h3>Low pH Face Cleanser</h3>
                <p class="product-brand">Bladez Gents Salon</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.7</span>
                    <span class="sold-count">2.1k sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 49.0</span>
                    <span class="original-price">AED 70.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="product-card">
            <div class="product-image-container">
                <div class="discount-badge">30% OFF</div>
                <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=300&h=200&fit=crop" alt="Recovery Gel" class="product-image">
            </div>
            <div class="product-info">
                <h3>Recovery Gel</h3>
                <p class="product-brand">Bladez Gents Salon</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.6</span>
                    <span class="sold-count">670 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 49.0</span>
                    <span class="original-price">AED 70.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
</section>

<section class="inspirasioutfit">
    <div class="inspirasioutfit-header">
        <h2>Inspiration Outfits</h2>
    </div>

    <div class="outfit-grid">
        <!-- Card 1 -->
        <div class="outfit-card">
            <img src="storage/image/inspirasi1.png" alt="Outfit 1">
            <div class="outfit-content">
                <h3>Dare To Win For The Dedicated Individualis</h3>
                <p class="outfit-dates">June 5, 2025</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="outfit-card">
            <img src="storage/image/inspirasi2.png" alt="Outfit 2">
            <div class="outfit-content">
                <h3>Made For Those Who Are Silent But Resilient</h3>
                <p class="outfit-date">July 10, 2025</p>
            </div>
        </div>
    </div>
</section>

<section class="ourcollection">
    <div class="ourcollection-header">
        <h2>Our Collections</h2>
    </div>
    
    <!-- Filter Section -->
    <div class="filter-container">
        <div class="filter-scroll">
            <div class="filter-item active" data-filter="all">All Product</div>
            <div class="filter-item" data-filter="hat">Hat</div>
            <div class="filter-item" data-filter="shirt">Shirt</div>
            <div class="filter-item" data-filter="hoodie">Hoodie</div>
            <div class="filter-item" data-filter="trousers">Trousers</div>
            <div class="filter-item" data-filter="shoe">Shoe</div>
            <div class="filter-item" data-filter="bag">Bag</div>
        </div>
    </div>

    <!-- Collection Products Grid -->
    <div class="collection-products-grid" id="allProducts">
        <!-- Hat Products -->
        <div class="product-card collection-product" data-category="hat">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1521369909029-2afed882baee?w=300&h=200&fit=crop" alt="Baseball Cap" class="product-image">
            </div>
            <div class="product-info">
                <h3>Baseball Cap</h3>
                <p class="product-brand">Urban Style</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.5</span>
                    <span class="sold-count">234 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 85.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="hoodie">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=300&h=200&fit=crop" alt="Pullover Hoodie" class="product-image">
            </div>
            <div class="product-info">
                <h3>Pullover Hoodie</h3>
                <p class="product-brand">Comfort Zone</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.8</span>
                    <span class="sold-count">789 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 280.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="shirt">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=300&h=200&fit=crop" alt="Cotton T-Shirt" class="product-image">
            </div>
            <div class="product-info">
                <h3>Cotton T-Shirt</h3>
                <p class="product-brand">Casual Comfort</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.7</span>
                    <span class="sold-count">567 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 120.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="bag">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=300&h=200&fit=crop" alt="Backpack" class="product-image">
            </div>
            <div class="product-info">
                <h3>Travel Backpack</h3>
                <p class="product-brand">Adventure Gear</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.7</span>
                    <span class="sold-count">345 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 180.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="hat">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?w=300&h=200&fit=crop" alt="Bucket Hat" class="product-image">
            </div>
            <div class="product-info">
                <h3>Bucket Hat</h3>
                <p class="product-brand">Street Wear</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">☆</span>
                    </div>
                    <span class="rating-text">4.3</span>
                    <span class="sold-count">189 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 95.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="trousers">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=300&h=200&fit=crop" alt="Chino Trousers" class="product-image">
            </div>
            <div class="product-info">
                <h3>Chino Trousers</h3>
                <p class="product-brand">Smart Casual</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.5</span>
                    <span class="sold-count">456 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 195.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="shoe">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=300&h=200&fit=crop" alt="Sneakers" class="product-image">
            </div>
            <div class="product-info">
                <h3>Running Sneakers</h3>
                <p class="product-brand">Sport Gear</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <span class="rating-text">4.9</span>
                    <span class="sold-count">923 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 340.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="shirt">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?w=300&h=200&fit=crop" alt="Polo Shirt" class="product-image">
            </div>
            <div class="product-info">
                <h3>Polo Shirt</h3>
                <p class="product-brand">Classic Style</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">☆</span>
                    </div>
                    <span class="rating-text">4.4</span>
                    <span class="sold-count">423 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 150.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="hoodie">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=300&h=200&fit=crop" alt="Zip Hoodie" class="product-image">
            </div>
            <div class="product-info">
                <h3>Zip Hoodie</h3>
                <p class="product-brand">Urban Wear</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">☆</span>
                    </div>
                    <span class="rating-text">4.6</span>
                    <span class="sold-count">634 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 320.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="trousers">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?w=300&h=200&fit=crop" alt="Denim Jeans" class="product-image">
            </div>
            <div class="product-info">
                <h3>Denim Jeans</h3>
                <p class="product-brand">Classic Denim</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">☆</span>
                    </div>
                    <span class="rating-text">4.4</span>
                    <span class="sold-count">812 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 225.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="shoe">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=300&h=200&fit=crop" alt="Casual Shoes" class="product-image">
            </div>
            <div class="product-info">
                <h3>Casual Shoes</h3>
                <p class="product-brand">Everyday Comfort</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">☆</span>
                    </div>
                    <span class="rating-text">4.3</span>
                    <span class="sold-count">567 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 275.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>

        <div class="product-card collection-product" data-category="bag">
            <div class="product-image-container">
                <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=300&h=200&fit=crop" alt="Messenger Bag" class="product-image">
            </div>
            <div class="product-info">
                <h3>Messenger Bag</h3>
                <p class="product-brand">Professional</p>
                <div class="product-rating">
                    <div class="stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">☆</span>
                    </div>
                    <span class="rating-text">4.2</span>
                    <span class="sold-count">278 sold</span>
                </div>
                <div class="product-price-container">
                    <span class="product-price">AED 220.0</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterItems = document.querySelectorAll('.filter-item');
    const collectionProducts = document.querySelectorAll('.collection-product');
    const productsGrid = document.querySelector('.collection-products-grid');
    const ourCollectionSection = document.querySelector('.ourcollection');

    function shuffleArray(array) {
        const shuffled = [...array];
        for (let i = shuffled.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
        }
        return shuffled;
    }

    const urlParams = new URLSearchParams(window.location.search);
    const defaultFilter = urlParams.get('filter') || 'all';

    const allProducts = Array.from(collectionProducts);

    if (defaultFilter === 'all') {
        const shuffledProducts = shuffleArray(allProducts);
        shuffledProducts.forEach(product => {
            productsGrid.appendChild(product);
        });
    }

    function applyFilter(filterValue, shouldScroll = true) {
        filterItems.forEach(filter => filter.classList.remove('active'));

        const activeFilter = document.querySelector(`.filter-item[data-filter="${filterValue}"]`);
        if (activeFilter) {
            activeFilter.classList.add('active');
        }

        collectionProducts.forEach(product => {
            const productCategory = product.getAttribute('data-category');
            if (filterValue === 'all' || productCategory === filterValue) {
                product.classList.remove('hidden');
            } else {
                product.classList.add('hidden');
            }
        });

        setTimeout(() => {
            productsGrid.style.display = 'none';
            productsGrid.offsetHeight;
            productsGrid.style.display = 'grid';
        }, 10);

        // ✅ Hanya scroll jika parameter filter ada dan bukan 'all'
        if (shouldScroll && filterValue !== 'all') {
            setTimeout(() => {
                if (ourCollectionSection) {
                    ourCollectionSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 50);
        }
    }

    // Jalankan saat pertama kali load
    const isInitialLoad = window.location.search.includes('filter=');
    applyFilter(defaultFilter, isInitialLoad);

    // Event klik
    filterItems.forEach(item => {
        item.addEventListener('click', function () {
            const selectedFilter = this.getAttribute('data-filter');
            applyFilter(selectedFilter, true);

            // Update URL tanpa reload
            const newUrl = `${window.location.pathname}?filter=${selectedFilter}`;
            history.replaceState(null, '', newUrl);
        });
    });
});
</script>
@endsection