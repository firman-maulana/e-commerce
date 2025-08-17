<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    /**
     * Display the products collection page
     */
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'all');
        $products = $this->getAllProducts();

        // Filter products if needed
        if ($filter !== 'all') {
            $products = $products->where('category', $filter);
        }

        // Shuffle products if showing all
        if ($filter === 'all') {
            $products = $products->shuffle();
        }

        return view('products.collection', compact('products', 'filter'));
    }

    /**
     * Display the specified product detail
     */
    public function show(Request $request, $id = null)
    {
        // Get product ID from parameter or query string
        $productId = $id ?? $request->get('id');
        $productName = $request->get('name');

        if (!$productId) {
            abort(404, 'Product not found');
        }

        // Get product by ID
        $product = $this->getProductById($productId);

        if (!$product) {
            abort(404, 'Product not found');
        }

        // Get related products (same category, excluding current product)
        $relatedProducts = $this->getAllProducts()
            ->where('category', $product['category'])
            ->where('id', '!=', $product['id'])
            ->take(4);

        // Get product reviews
        $reviews = $this->getProductReviews($productId);

        return view('detailProduct', compact('product', 'relatedProducts', 'reviews'));
    }

    /**
     * Search products
     */
    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $category = $request->get('category', 'all');
        $minPrice = $request->get('min_price', 0);
        $maxPrice = $request->get('max_price', 1000);
        $sortBy = $request->get('sort', 'name');

        $products = $this->getAllProducts();

        // Apply search filter
        if ($query) {
            $products = $products->filter(function ($product) use ($query) {
                return stripos($product['name'], $query) !== false ||
                       stripos($product['brand'], $query) !== false ||
                       stripos($product['description'], $query) !== false;
            });
        }

        // Apply category filter
        if ($category !== 'all') {
            $products = $products->where('category', $category);
        }

        // Apply price filter
        $products = $products->filter(function ($product) use ($minPrice, $maxPrice) {
            $price = $product['price'];
            return $price >= $minPrice && $price <= $maxPrice;
        });

        // Apply sorting
        switch ($sortBy) {
            case 'price_low':
                $products = $products->sortBy('price');
                break;
            case 'price_high':
                $products = $products->sortByDesc('price');
                break;
            case 'rating':
                $products = $products->sortByDesc('rating');
                break;
            case 'popular':
                $products = $products->sortByDesc('sold_count');
                break;
            default:
                $products = $products->sortBy('name');
        }

        return view('products.search', compact('products', 'query', 'category', 'minPrice', 'maxPrice', 'sortBy'));
    }

    /**
     * Get all products (mock data - replace with database query)
     */
    private function getAllProducts(): Collection
    {
        return collect([
            [
                'id' => 1,
                'name' => 'Baseball Cap',
                'slug' => 'baseball-cap',
                'brand' => 'Urban Style',
                'category' => 'hat',
                'price' => 85.0,
                'original_price' => 95.0,
                'currency' => 'AED',
                'rating' => 4.5,
                'sold_count' => 234,
                'description' => 'Stylish baseball cap perfect for casual wear. Made from high-quality cotton with adjustable strap.',
                'image' => 'https://images.unsplash.com/photo-1521369909029-2afed882baee?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1521369909029-2afed882baee?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=800&h=600&fit=crop',
                ],
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => [
                    ['name' => 'Black', 'code' => '#000000'],
                    ['name' => 'Navy', 'code' => '#001f3f'],
                    ['name' => 'White', 'code' => '#ffffff'],
                ],
                'stock' => 50,
                'sku' => 'CAP001',
                'tags' => ['casual', 'hat', 'sport'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Pullover Hoodie',
                'slug' => 'pullover-hoodie',
                'brand' => 'Comfort Zone',
                'category' => 'hoodie',
                'price' => 280.0,
                'original_price' => 320.0,
                'currency' => 'AED',
                'rating' => 4.8,
                'sold_count' => 789,
                'description' => 'Comfortable pullover hoodie made from premium cotton blend. Perfect for cool weather.',
                'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1620012253295-c15cc3e65df4?w=800&h=600&fit=crop',
                ],
                'sizes' => ['XS', 'S', 'M', 'L', 'XL', 'XXL'],
                'colors' => [
                    ['name' => 'Gray', 'code' => '#808080'],
                    ['name' => 'Black', 'code' => '#000000'],
                    ['name' => 'Navy', 'code' => '#001f3f'],
                ],
                'stock' => 25,
                'sku' => 'HOOD001',
                'tags' => ['hoodie', 'casual', 'winter'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Cotton T-Shirt',
                'slug' => 'cotton-t-shirt',
                'brand' => 'Casual Comfort',
                'category' => 'shirt',
                'price' => 120.0,
                'original_price' => 140.0,
                'currency' => 'AED',
                'rating' => 4.7,
                'sold_count' => 567,
                'description' => '100% cotton t-shirt with comfortable fit. Available in multiple colors.',
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=800&h=600&fit=crop',
                ],
                'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
                'colors' => [
                    ['name' => 'White', 'code' => '#ffffff'],
                    ['name' => 'Black', 'code' => '#000000'],
                    ['name' => 'Blue', 'code' => '#0074D9'],
                    ['name' => 'Red', 'code' => '#FF4136'],
                ],
                'stock' => 100,
                'sku' => 'SHIRT001',
                'tags' => ['t-shirt', 'casual', 'cotton'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Travel Backpack',
                'slug' => 'travel-backpack',
                'brand' => 'Adventure Gear',
                'category' => 'bag',
                'price' => 180.0,
                'original_price' => 200.0,
                'currency' => 'AED',
                'rating' => 4.7,
                'sold_count' => 345,
                'description' => 'Durable travel backpack with multiple compartments. Perfect for adventures and daily use.',
                'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1581605405669-fcdf81165afa?w=800&h=600&fit=crop',
                ],
                'sizes' => ['One Size'],
                'colors' => [
                    ['name' => 'Black', 'code' => '#000000'],
                    ['name' => 'Gray', 'code' => '#808080'],
                    ['name' => 'Navy', 'code' => '#001f3f'],
                ],
                'stock' => 30,
                'sku' => 'BAG001',
                'tags' => ['backpack', 'travel', 'outdoor'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Bucket Hat',
                'slug' => 'bucket-hat',
                'brand' => 'Street Wear',
                'category' => 'hat',
                'price' => 95.0,
                'original_price' => 110.0,
                'currency' => 'AED',
                'rating' => 4.3,
                'sold_count' => 189,
                'description' => 'Trendy bucket hat for street style. Made from durable fabric with UV protection.',
                'image' => 'https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1521369909029-2afed882baee?w=800&h=600&fit=crop',
                ],
                'sizes' => ['S', 'M', 'L'],
                'colors' => [
                    ['name' => 'Black', 'code' => '#000000'],
                    ['name' => 'Khaki', 'code' => '#F0E68C'],
                ],
                'stock' => 40,
                'sku' => 'HAT001',
                'tags' => ['hat', 'street', 'casual'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Chino Trousers',
                'slug' => 'chino-trousers',
                'brand' => 'Smart Casual',
                'category' => 'trousers',
                'price' => 195.0,
                'original_price' => 220.0,
                'currency' => 'AED',
                'rating' => 4.5,
                'sold_count' => 456,
                'description' => 'Classic chino trousers perfect for smart casual occasions. Comfortable fit with premium fabric.',
                'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1542272604-787c3835535d?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1506629905496-f11bb68c2f87?w=800&h=600&fit=crop',
                ],
                'sizes' => ['28', '30', '32', '34', '36', '38'],
                'colors' => [
                    ['name' => 'Khaki', 'code' => '#F0E68C'],
                    ['name' => 'Navy', 'code' => '#001f3f'],
                    ['name' => 'Black', 'code' => '#000000'],
                ],
                'stock' => 60,
                'sku' => 'TROUS001',
                'tags' => ['trousers', 'chino', 'smart casual'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'Running Sneakers',
                'slug' => 'running-sneakers',
                'brand' => 'Sport Gear',
                'category' => 'shoe',
                'price' => 340.0,
                'original_price' => 380.0,
                'currency' => 'AED',
                'rating' => 4.9,
                'sold_count' => 923,
                'description' => 'High-performance running sneakers with advanced cushioning technology. Perfect for athletes.',
                'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=800&h=600&fit=crop',
                ],
                'sizes' => ['7', '8', '9', '10', '11', '12'],
                'colors' => [
                    ['name' => 'White', 'code' => '#ffffff'],
                    ['name' => 'Black', 'code' => '#000000'],
                    ['name' => 'Blue', 'code' => '#0074D9'],
                ],
                'stock' => 35,
                'sku' => 'SHOE001',
                'tags' => ['shoes', 'running', 'sport'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Polo Shirt',
                'slug' => 'polo-shirt',
                'brand' => 'Classic Style',
                'category' => 'shirt',
                'price' => 150.0,
                'original_price' => 175.0,
                'currency' => 'AED',
                'rating' => 4.4,
                'sold_count' => 423,
                'description' => 'Classic polo shirt with refined style. Made from premium cotton pique fabric.',
                'image' => 'https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?w=300&h=200&fit=crop',
                'images' => [
                    'https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=600&fit=crop',
                ],
                'sizes' => ['XS', 'S', 'M', 'L', 'XL', 'XXL'],
                'colors' => [
                    ['name' => 'Navy', 'code' => '#001f3f'],
                    ['name' => 'White', 'code' => '#ffffff'],
                    ['name' => 'Red', 'code' => '#FF4136'],
                ],
                'stock' => 45,
                'sku' => 'POLO001',
                'tags' => ['polo', 'shirt', 'classic'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Get product by ID
     */
    private function getProductById($id)
    {
        return $this->getAllProducts()->firstWhere('id', $id);
    }

    /**
     * Get product reviews (mock data)
     */
    private function getProductReviews($productId)
    {
        return collect([
            [
                'id' => 1,
                'product_id' => $productId,
                'user_name' => 'Alex Deea',
                'user_avatar' => null,
                'rating' => 5,
                'comment' => 'Nice fashion jacket. It wear very sharply on the body.',
                'likes' => 94,
                'replies' => 0,
                'is_verified' => true,
                'created_at' => now()->subDays(1),
            ],
            [
                'id' => 2,
                'product_id' => $productId,
                'user_name' => 'Dansky',
                'user_avatar' => null,
                'rating' => 5,
                'comment' => 'Excellent fashion jacket.',
                'likes' => 30,
                'replies' => 0,
                'is_verified' => false,
                'created_at' => now()->subDays(3),
            ],
            [
                'id' => 3,
                'product_id' => $productId,
                'user_name' => 'Marzo UI',
                'user_avatar' => null,
                'rating' => 5,
                'comment' => 'Good It suitable for body fit.',
                'likes' => 20,
                'replies' => 8,
                'is_verified' => false,
                'created_at' => now()->subDays(4),
            ],
        ]);
    }

    /**
     * Get categories for filter
     */
    public function getCategories()
    {
        return collect([
            'all' => 'All Products',
            'hat' => 'Hats',
            'shirt' => 'Shirts',
            'hoodie' => 'Hoodies',
            'trousers' => 'Trousers',
            'shoe' => 'Shoes',
            'bag' => 'Bags',
        ]);
    }

    /**
     * Add to cart (API endpoint)
     */
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
            'size' => 'nullable|string',
            'color' => 'nullable|string',
        ]);

        $product = $this->getProductById($request->product_id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Here you would typically add to cart in session or database
        // For now, we'll just return success response

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully',
            'product' => $product,
            'quantity' => $request->quantity,
            'size' => $request->size,
            'color' => $request->color,
        ]);
    }
}