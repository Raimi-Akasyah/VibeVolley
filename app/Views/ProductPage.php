<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeVolley - Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.7.2/js/all.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            line-height: 1.6;
        }
        /* ... (rest of the CSS from lines 21-250) ... */
        .discount-badge {
            background: linear-gradient(45deg, #ff4757, #ff3742);
            color: white;
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 12px;
            font-weight: 600;
        }
        .rating {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #7f8c8d;
            margin-bottom: 15px;
        }
        .stars {
            margin-right: 8px;
        }
        .stars .fas {
            color: #f8b400;
        }
        .stars .far {
            color: #ddd;
        }
        .btn-add-to-cart {
            width: 100%;
            padding: 12px 20px;
            background: linear-gradient(45deg, #ff4757, #ff3742);
            color: #ffffff;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(255, 71, 87, 0.3);
        }
        .btn-add-to-cart:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(255, 71, 87, 0.4);
            background: linear-gradient(45deg, #ff3742, #ff4757);
        }
        /* Responsive Design */
        @media (max-width: 1024px) {
            nav {
                gap: 20px;
            }
            .product-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 25px;
            }
        }
        @media (max-width: 768px) {
            header {
                padding: 15px 5%;
                flex-direction: column;
                gap: 15px;
            }
            nav {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            .page-header h1 {
                font-size: 2.5em;
            }
            .product-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
            .product-content {
                padding: 20px;
            }
        }
        @media (max-width: 480px) {
            .page-header h1 {
                font-size: 2em;
            }
            .product-grid {
                grid-template-columns: 1fr;
            }
            nav {
                font-size: 12px;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="/homepage" style="text-decoration: none;">
            <div class="logo">VibeVolley</div>
        </a>
        <nav>
            <a href="/training-page">Training</a>
            <a href="#">Tournament</a>
            <a href="/product-page">Shop</a>
            <a href="#">Profile</a>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count">0</span>
            </div>
        </nav>
    </header>
    <main>
        <div class="main-content">
            <div class="page-header">
                <h1>Volleyball Gear</h1>
                <p>Premium equipment for every level of player</p>
            </div>
            <div class="product-grid">
                <!-- Product Card 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="ball.jpg" alt="Professional volleyball with blue and white design">
                        <i class="far fa-heart wishlist-icon"></i>
                    </div>
                    <div class="product-content">
                        <div class="brand-name">VibeVolley</div>
                        <h3 class="product-title">PRO VOLLEYBALL - BLUE EDITION</h3>
                        <div class="product-details">
                            <p>Type: Ball</p>
                            <p>Color: Blue/White</p>
                        </div>
                        <div class="price-section">
                            <span class="current-price">MYR 150.00</span>
                        </div>
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(0)</span>
                        </div>
                        <form method="post" action="addtocart.php">
                            <input type="hidden" name="product_name" value="PRO VOLLEYBALL - BLUE EDITION">
                            <input type="hidden" name="product_price" value="150.00">
                            <button type="submit" class="btn-add-to-cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="kneepad.jpeg" alt="Volleyball knee pads in black">
                        <i class="far fa-heart wishlist-icon"></i>
                    </div>
                    <div class="product-content">
                        <div class="brand-name">VibeVolley</div>
                        <h3 class="product-title">PRO KNEE PADS - BLACK</h3>
                        <div class="product-details">
                            <p>Type: Knee Pads</p>
                            <p>Color: Black</p>
                        </div>
                        <div class="price-section">
                            <span class="current-price">MYR 89.00</span>
                            <span class="original-price">MYR 120.00</span>
                            <span class="discount-badge">-25%</span>
                        </div>
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(45)</span>
                        </div>
                        <form method="post" action="addtocart.php">
                            <input type="hidden" name="product_name" value="PRO KNEE PADS - BLACK EDITION">
                            <input type="hidden" name="product_price" value="89.00">
                            <button type="submit" class="btn-add-to-cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="volleyballnet.jpg" alt="Volleyball net with red and white stripes">
                        <i class="far fa-heart wishlist-icon"></i>
                    </div>
                    <div class="product-content">
                        <div class="brand-name">VibeVolley</div>
                        <h3 class="product-title">VOLLEYBALL NET - RED/WHITE</h3>
                        <div class="product-details">
                            <p>Type: Net</p>
                            <p>Color: Red/White</p>
                        </div>
                        <div class="price-section">
                            <span class="current-price">MYR 250.00</span>
                            <span class="original-price">MYR 300.00</span>
                            <span class="discount-badge">-16%</span>
                        </div>
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(0)</span>
                        </div>
                        <button class="btn-add-to-cart" data-name="VOLLEYBALL NET - RED" data-price="250.00">Add to Cart</button>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="volleyballshoes.jpg" alt="Volleyball shoes with green accents">
                        <i class="far fa-heart wishlist-icon"></i>
                    </div>
                    <div class="product-content">
                        <div class="brand-name">VibeVolley</div>
                        <h3 class="product-title">VOLLEYBALL SHOES - GREEN ACCENT</h3>
                        <div class="product-details">
                            <p>Type: Shoes</p>
                            <p>Color: Green/White</p>
                        </div>
                        <div class="price-section">
                            <span class="current-price">MYR 320.00</span>
                            <span class="original-price">MYR 400.00</span>
                            <span class="discount-badge">-20%</span>
                        </div>
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(0)</span>
                        </div>
                        <button class="btn-add-to-cart" data-name="VOLLEYBALL SHOES - GREEN ACCENT" data-price="320.00">Add to Cart</button>
                    </div>
                </div>
                <!-- More product cards can be added here -->
            </div>
        </div>
    </main>
    <script>
        // Cart logic can be added here
    </script>
</body>
</html> 