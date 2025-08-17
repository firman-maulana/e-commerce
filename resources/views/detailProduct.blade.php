@extends('layouts.app2')

@section('title', 'Detail Produk')

@section('style')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        margin-top: 100px;
    }

    .breadcrumb {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
    }

    .breadcrumb a {
        color: #666;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }

    .product-section {
        display: flex;
        gap: 40px;
        margin-bottom: 40px;
    }

    .product-images {
        flex: 1;
        display: flex;
        gap: 20px;
    }

    .main-image {
        flex: 1;
    }

    .main-image img {
        width: 100%;
        height: 600px;
        object-fit: cover;
        border-radius: 8px;
    }

    .thumbnail-images {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .thumbnail {
        width: 80px;
        height: 80px;
        border-radius: 6px;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .thumbnail.active {
        border-color: #000;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-info {
        flex: 1;
        max-width: 500px;
    }

    .brand {
        color: #666;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .product-title {
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .stars {
        display: flex;
        gap: 2px;
    }

    .star {
        color: #ffc107;
        font-size: 18px;
    }

    .rating-text {
        color: #666;
        font-size: 14px;
    }

    .price-section {
        margin-bottom: 30px;
    }

    .current-price {
        font-size: 36px;
        font-weight: 700;
        color: #333;
    }

    .original-price {
        font-size: 18px;
        color: #999;
        text-decoration: line-through;
        margin-left: 10px;
    }

    .options {
        margin-bottom: 30px;
    }

    .option-group {
        margin-bottom: 20px;
    }

    .option-label {
        font-weight: 500;
        margin-bottom: 10px;
        color: #333;
    }

    .color-options {
        display: flex;
        gap: 10px;
    }

    .color-option {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        border: 3px solid transparent;
    }

    .color-option.active {
        border-color: #333;
    }

    .beige {
        background-color: #e5d5c8;
    }

    .black {
        background-color: #000;
    }

    .size-options {
        display: flex;
        gap: 10px;
    }

    .size-option {
        padding: 8px 16px;
        border: 2px solid #ddd;
        background: white;
        cursor: pointer;
        border-radius: 4px;
        font-weight: 500;
    }

    .size-option.active {
        border-color: #000;
        background: #000;
        color: white;
    }

    .quantity-section {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 30px;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        border: 2px solid #ddd;
        border-radius: 4px;
        overflow: hidden;
    }

    .quantity-btn {
        width: 40px;
        height: 40px;
        border: none;
        background: white;
        cursor: pointer;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quantity-btn:hover {
        background: #f5f5f5;
    }

    .quantity-input {
        width: 60px;
        height: 40px;
        border: none;
        text-align: center;
        font-size: 16px;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        margin-bottom: 30px;
    }

    .btn {
        padding: 12px 30px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        flex: 1;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-primary {
        background: #000;
        color: white;
    }

    .btn-secondary {
        background: white;
        color: #000;
        border: 2px solid #000;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .product-details {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
    }

    .tabs {
        border-bottom: 1px solid #ddd;
        margin-bottom: 30px;
    }

    .tab-list {
        display: flex;
        gap: 40px;
    }

    .tab {
        padding: 15px 0;
        border-bottom: 3px solid transparent;
        cursor: pointer;
        font-weight: 500;
        color: #666;
    }

    .tab.active {
        color: #000;
        border-bottom-color: #000;
    }

    .reviews-section {
        display: flex;
        gap: 40px;
    }

    .reviews-list {
        flex: 2;
    }

    .review-header {
        display: flex;
        justify-content: between;
        align-items: center;
        margin-bottom: 20px;
    }

    .review-item {
        display: flex;
        gap: 15px;
        padding: 20px 0;
        border-bottom: 1px solid #eee;
    }

    .reviewer-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #ddd;
    }

    .review-content {
        flex: 1;
    }

    .reviewer-name {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .review-rating {
        display: flex;
        gap: 2px;
        margin-bottom: 8px;
    }

    .review-text {
        color: #666;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .review-actions {
        display: flex;
        gap: 15px;
        color: #999;
        font-size: 14px;
    }

    .review-actions span {
        cursor: pointer;
    }

    .review-summary {
        flex: 1;
        background: white;
        padding: 30px;
        border-radius: 8px;
        height: fit-content;
    }

    .overall-rating {
        text-align: center;
        margin-bottom: 20px;
    }

    .big-rating {
        font-size: 48px;
        font-weight: 700;
        color: #333;
    }

    .rating-subtitle {
        color: #666;
        margin-top: 5px;
    }

    .promo-banner {
        background: #f0f0f0;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        margin-top: 20px;
    }

    .promo-title {
        font-weight: 600;
        margin-bottom: 10px;
    }

    .promo-discount {
        font-size: 24px;
        font-weight: 700;
        color: #e74c3c;
    }

    @media (max-width: 768px) {
        .product-section {
            flex-direction: column;
        }

        .product-images {
            flex-direction: column;
        }

        .thumbnail-images {
            flex-direction: row;
        }

        .reviews-section {
            flex-direction: column;
        }
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="breadcrumb">
        <a href="#">Women Fashion</a> > <a href="#">Nadaista Coat Beige</a> > <a href="#">Jackets</a> > Coats
    </div>

    <div class="product-section">
        <div class="product-images">
            <div class="main-image">
                <img id="mainImage" src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Jorpeche Oversize Fit Blazer">
            </div>
            <div class="thumbnail-images">
                <div class="thumbnail active" onclick="changeImage(this, 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="View 1">
                </div>
                <div class="thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="View 2">
                </div>
                <div class="thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="View 3">
                </div>
                <div class="thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')">
                    <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="View 4">
                </div>
            </div>
        </div>

        <div class="product-info">
            <div class="brand">Blouse</div>
            <h1 class="product-title">Jorpeche Oversize Fit Blazer</h1>

            <div class="rating">
                <div class="stars">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <span class="rating-text">4.8 (from 350 Reviews)</span>
            </div>

            <div class="price-section">
                <span class="current-price">$299.00</span>
                <span class="original-price">$320.00</span>
            </div>

            <div class="options">
                <div class="option-group">
                    <div class="option-label">Available Color</div>
                    <div class="color-options">
                        <div class="color-option beige active" onclick="selectColor(this)"></div>
                        <div class="color-option black" onclick="selectColor(this)"></div>
                    </div>
                </div>

                <div class="option-group">
                    <div class="option-label">Available Size</div>
                    <div class="size-options">
                        <div class="size-option" onclick="selectSize(this)">XS</div>
                        <div class="size-option" onclick="selectSize(this)">S</div>
                        <div class="size-option" onclick="selectSize(this)">M</div>
                        <div class="size-option" onclick="selectSize(this)">L</div>
                        <div class="size-option active" onclick="selectSize(this)">XL</div>
                        <div class="size-option" onclick="selectSize(this)">XXL</div>
                    </div>
                </div>
            </div>

            <div class="quantity-section">
                <div class="option-label">Quantity</div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="decreaseQuantity()">−</button>
                    <input type="number" id="quantity" class="quantity-input" value="1" min="1">
                    <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-primary">BUY IT NOW</button>
                <button class="btn btn-secondary">ADD TO CART</button>
            </div>

            <div class="product-details">
                <strong>SKU:</strong> DWTS532SAAA<br>
                <strong>Tags:</strong> Men, Coat, Fashion, Jacket<br>
                <strong>Share:</strong> 📘 🐦 📷 📌
            </div>
        </div>
    </div>

    <div class="tabs">
        <div class="tab-list">
            <div class="tab">Details</div>
            <div class="tab active">Reviews</div>
            <div class="tab">Discussion</div>
        </div>
    </div>

    <div class="reviews-section">
        <div class="reviews-list">
            <div class="review-header">
                <h3>Review List</h3>
                <div>Sort by: <select>
                        <option>Newest</option>
                    </select></div>
            </div>

            <div class="review-item">
                <div class="reviewer-avatar"></div>
                <div class="review-content">
                    <div class="reviewer-name">Alex Deea <span style="color: #ffc107;">★</span></div>
                    <div class="review-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <div class="review-text">Nice fashion jacket. It wear very sharply on the body.</div>
                    <div class="review-actions">
                        <span>👍 94</span>
                        <span>💬 0</span>
                    </div>
                </div>
            </div>

            <div class="review-item">
                <div class="reviewer-avatar"></div>
                <div class="review-content">
                    <div class="reviewer-name">Dansky <span style="color: #666; font-size: 12px;">3 days ago</span></div>
                    <div class="review-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <div class="review-text">Excellent fashion jacket.</div>
                    <div class="review-actions">
                        <span>👍 30</span>
                        <span>💬 0</span>
                    </div>
                </div>
            </div>

            <div class="review-item">
                <div class="reviewer-avatar"></div>
                <div class="review-content">
                    <div class="reviewer-name">Marzo UI <span style="color: #666; font-size: 12px;">4 days ago</span></div>
                    <div class="review-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <div class="review-text">Good It suitable for body fit.</div>
                    <div class="review-actions">
                        <span>👍 20</span>
                        <span>💬 8</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-summary">
            <div class="overall-rating">
                <div class="big-rating">4.8</div>
                <div class="rating-subtitle">out of 5</div>
                <div class="stars" style="justify-content: center; margin: 10px 0;">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <div class="rating-subtitle">(107 Reviews)</div>
            </div>

            <div class="promo-banner">
                <div class="promo-title">Our top brands</div>
                <div class="promo-discount">20% Off</div>
                <div style="margin: 15px 0; display: flex; justify-content: center; gap: 20px;">
                    <span>🏃</span>
                    <span>—</span>
                    <span>✓</span>
                    <span>✓</span>
                </div>
                <button style="padding: 8px 20px; background: white; border: 1px solid #ddd; border-radius: 20px; cursor: pointer;">View Sale</button>
            </div>
        </div>
    </div>
</div>

<script>
    function changeImage(thumbnail, imageUrl) {
        // Remove active class from all thumbnails
        document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
        // Add active class to clicked thumbnail
        thumbnail.classList.add('active');
        // Change main image
        document.getElementById('mainImage').src = imageUrl;
    }

    function selectColor(colorOption) {
        document.querySelectorAll('.color-option').forEach(c => c.classList.remove('active'));
        colorOption.classList.add('active');
    }

    function selectSize(sizeOption) {
        document.querySelectorAll('.size-option').forEach(s => s.classList.remove('active'));
        sizeOption.classList.add('active');
    }

    function increaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    }

    function decreaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    }

    // Tab functionality
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>
@endsection