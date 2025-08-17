@extends('layouts.app2')

@section('title', 'Keranjang Belanja')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 15px;
            margin-top: 100px;
        }
    .cart-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .cart-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
            color: #1a1a1a;
        }
        
        .cart-item {
            display: flex;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .cart-item:last-child {
            border-bottom: none;
        }
        
        .item-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 16px;
        }
        
        .item-details {
            flex: 1;
            margin-right: 16px;
        }
        
        .item-name {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 4px;
            color: #1a1a1a;
        }
        
        .item-variant {
            font-size: 14px;
            color: #666;
            margin-bottom: 2px;
        }
        
        .item-price {
            font-size: 18px;
            font-weight: 600;
            color: #1a1a1a;
            margin-right: 20px;
        }
        
        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-right: 20px;
        }
        
        .quantity-btn {
            width: 32px;
            height: 32px;
            border: 1px solid #ddd;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            color: #666;
            transition: all 0.2s;
        }
        
        .quantity-btn:hover {
            background: #f0f0f0;
            border-color: #ccc;
        }
        
        .quantity {
            font-size: 16px;
            font-weight: 500;
            min-width: 20px;
            text-align: center;
        }
        
        .item-actions {
            display: flex;
            gap: 12px;
        }
        
        .action-btn {
            width: 32px;
            height: 32px;
            border: none;
            background: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            transition: background 0.2s;
        }
        
        .action-btn:hover {
            background: #f0f0f0;
        }
        
        .summary-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            height: fit-content;
        }
        
        .summary-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1a1a1a;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 14px;
        }
        
        .summary-row.total {
            border-top: 1px solid #e5e5e5;
            padding-top: 16px;
            margin-top: 16px;
            font-size: 18px;
            font-weight: 600;
        }
        
        .checkout-btn {
            width: 100%;
            background: #000;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.2s;
        }
        
        .checkout-btn:hover {
            background: #333;
        }
        
        .promo-code {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid #e5e5e5;
        }
        
        .promo-link {
            color: #666;
            text-decoration: underline;
            font-size: 14px;
            cursor: pointer;
        }
        
        .promo-link:hover {
            color: #333;
        }
        
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 16px;
            }
            
            .cart-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
            
            .item-image {
                width: 100%;
                height: 200px;
            }
            
            .item-controls {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }
        }
</style>
@endsection

@section('content')
<div class="container">
        <!-- Cart Section -->
        <div class="cart-section">
            <h1 class="cart-title">Cart</h1>
            
            <!-- Item 1: Black Jacket Puffed -->
            <div class="cart-item">
                <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?w=200&h=200&fit=crop&crop=center" alt="Black Puffed Jacket" class="item-image">
                <div class="item-details">
                    <div class="item-name">Black Jacket Puffed</div>
                    <div class="item-variant">Variant: Agoria</div>
                    <div class="item-variant">Size: XXL</div>
                    <div class="item-variant">Color: Black</div>
                </div>
                <div class="item-price">$499.00</div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="updateQuantity(0, -1)">−</button>
                    <span class="quantity" id="qty-0">1</span>
                    <button class="quantity-btn" onclick="updateQuantity(0, 1)">+</button>
                </div>
                <div class="item-actions">
                    <button class="action-btn" title="Save for later">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
                        </svg>
                    </button>
                    <button class="action-btn" title="Remove item" onclick="removeItem(0)">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3,6 5,6 21,6"/>
                            <path d="M19,6v14a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V6m3,0V4a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2v2"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Item 2: Women White Jacket -->
            <div class="cart-item">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=200&h=200&fit=crop&crop=center" alt="Women White Jacket" class="item-image">
                <div class="item-details">
                    <div class="item-name">Women White Jacket</div>
                    <div class="item-variant">Variant: Allure</div>
                    <div class="item-variant">Size: XL</div>
                    <div class="item-variant">Color: Smoke white</div>
                </div>
                <div class="item-price">$1000.00</div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="updateQuantity(1, -1)">−</button>
                    <span class="quantity" id="qty-1">2</span>
                    <button class="quantity-btn" onclick="updateQuantity(1, 1)">+</button>
                </div>
                <div class="item-actions">
                    <button class="action-btn" title="Save for later">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
                        </svg>
                    </button>
                    <button class="action-btn" title="Remove item" onclick="removeItem(1)">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3,6 5,6 21,6"/>
                            <path d="M19,6v14a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V6m3,0V4a2,2,0,0,1,2,2h4a2,2,0,0,1,2,2v2"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Item 3: Orange Full Wear -->
            <div class="cart-item">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=200&h=200&fit=crop&crop=center" alt="Orange Full Wear" class="item-image">
                <div class="item-details">
                    <div class="item-name">Orange Full wear</div>
                    <div class="item-variant">Variant: Vibe</div>
                    <div class="item-variant">Size: L</div>
                    <div class="item-variant">Color: Orange</div>
                </div>
                <div class="item-price">$1200.00</div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="updateQuantity(2, -1)">−</button>
                    <span class="quantity" id="qty-2">1</span>
                    <button class="quantity-btn" onclick="updateQuantity(2, 1)">+</button>
                </div>
                <div class="item-actions">
                    <button class="action-btn" title="Save for later">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
                        </svg>
                    </button>
                    <button class="action-btn" title="Remove item" onclick="removeItem(2)">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3,6 5,6 21,6"/>
                            <path d="M19,6v14a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V6m3,0V4a2,2,0,0,1,2,2h4a2,2,0,0,1,2,2v2"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Order Summary Section -->
        <div class="summary-section">
            <h2 class="summary-title">Order Summary</h2>
            
            <div class="summary-row">
                <span>Subtotal</span>
                <span id="subtotal">$2699.00</span>
            </div>
            
            <div class="summary-row">
                <span>Delivery</span>
                <span>$12.99</span>
            </div>
            
            <div class="summary-row">
                <span>Discount</span>
                <span>-</span>
            </div>
            
            <div class="summary-row total">
                <span>Total</span>
                <span id="total">$2711.99</span>
            </div>
            
            <button class="checkout-btn">Checkout</button>
            
            <div class="promo-code">
                <span class="promo-link">Use a promo code</span>
            </div>
        </div>
    </div>
    
    <script>
        // Cart data
        let cartItems = [
            {
                name: "Black Jacket Puffed",
                variant: "Agoria",
                size: "XXL",
                color: "Black",
                price: 499.00,
                quantity: 1,
                image: "https://images.unsplash.com/photo-1551028719-00167b16eac5?w=200&h=200&fit=crop&crop=center"
            },
            {
                name: "Women White Jacket",
                variant: "Allure",
                size: "XL",
                color: "Smoke white",
                price: 1000.00,
                quantity: 2,
                image: "https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=200&h=200&fit=crop&crop=center"
            },
            {
                name: "Orange Full wear",
                variant: "Vibe",
                size: "L",
                color: "Orange",
                price: 1200.00,
                quantity: 1,
                image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=200&h=200&fit=crop&crop=center"
            }
        ];
        
        const deliveryFee = 12.99;
        
        function updateQuantity(index, change) {
            const newQuantity = cartItems[index].quantity + change;
            if (newQuantity >= 1) {
                cartItems[index].quantity = newQuantity;
                document.getElementById(`qty-${index}`).textContent = newQuantity;
                updateTotals();
            }
        }
        
        function removeItem(index) {
            if (confirm('Are you sure you want to remove this item?')) {
                cartItems.splice(index, 1);
                location.reload(); // Reload to update the display
            }
        }
        
        function updateTotals() {
            const subtotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const total = subtotal + deliveryFee;
            
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        }
        
        // Initialize totals
        updateTotals();
        
        // Promo code functionality
        document.querySelector('.promo-link').addEventListener('click', function() {
            const promoCode = prompt('Enter promo code:');
            if (promoCode) {
                alert('Promo code applied! (This is a demo)');
            }
        });
        
        // Checkout functionality
        document.querySelector('.checkout-btn').addEventListener('click', function() {
            alert('Proceeding to checkout... (This is a demo)');
        });
    </script>

@endsection
