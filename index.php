<?php
$products = [
    [
        'name' => 'AI Prompt Pack',
        'description' => 'A collection of useful AI prompts for productivity and content creation.',
        'price' => 9.99,
        'category' => 'AI & Productivity'
    ],
    [
        'name' => 'Website UI Kit',
        'description' => 'Modern website interface components and layouts for developers and designers.',
        'price' => 14.99,
        'category' => 'Design'
    ],
    [
        'name' => 'Business Ebook',
        'description' => 'Practical guide to building and managing an online business.',
        'price' => 7.99,
        'category' => 'Ebooks'
    ],
    [
        'name' => 'PHP Starter Scripts',
        'description' => 'Useful PHP scripts for common web-development tasks.',
        'price' => 19.99,
        'category' => 'Software'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarkStore — Digital Products</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0b0f14;
            color: #f5f5f5;
        }

        header {
            border-bottom: 1px solid #222;
            padding: 20px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: #aaa;
            text-decoration: none;
            margin-left: 25px;
        }

        nav a:hover {
            color: #fff;
        }

        .hero {
            padding: 80px 6%;
            max-width: 1000px;
        }

        .hero h1 {
            font-size: 52px;
            margin: 0 0 20px;
        }

        .hero p {
            color: #aaa;
            font-size: 19px;
            max-width: 650px;
            line-height: 1.6;
        }

        .container {
            padding: 20px 6% 80px;
        }

        .section-title {
            font-size: 28px;
            margin-bottom: 30px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .product {
            background: #11161d;
            border: 1px solid #242a32;
            border-radius: 12px;
            padding: 25px;
        }

        .category {
            color: #7ee787;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .product h3 {
            margin: 0 0 12px;
            font-size: 21px;
        }

        .product p {
            color: #999;
            line-height: 1.5;
            min-height: 70px;
        }

        .bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
        }

        button {
            border: 0;
            background: #7ee787;
            color: #071009;
            padding: 10px 16px;
            border-radius: 7px;
            font-weight: bold;
            cursor: pointer;
        }

        footer {
            border-top: 1px solid #222;
            padding: 30px 6%;
            color: #777;
        }
    </style>
</head>

<body>

<header>
    <div class="logo">DarkStore</div>

    <nav>
        <a href="#">Home</a>
        <a href="#products">Products</a>
        <a href="#">Login</a>
        <a href="#">Cart</a>
    </nav>
</header>

<section class="hero">
    <h1>Digital products.</h1>
    <p>
        Discover software, ebooks, design resources, AI tools and other
        legitimate digital products.
    </p>
</section>

<section class="container" id="products">

    <div class="section-title">
        Featured Products
    </div>

    <div class="products">

        <?php foreach ($products as $product): ?>

            <div class="product">

                <div class="category">
                    <?= htmlspecialchars($product['category']) ?>
                </div>

                <h3>
                    <?= htmlspecialchars($product['name']) ?>
                </h3>

                <p>
                    <?= htmlspecialchars($product['description']) ?>
                </p>

                <div class="bottom">

                    <div class="price">
                        $<?= number_format($product['price'], 2) ?>
                    </div>

                    <button>
                        Add to Cart
                    </button>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<footer>
    © <?= date('Y') ?> DarkStore. All rights reserved.
</footer>

</body>
</html>