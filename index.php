<?php
/**
 * Template Name: VS Trendy
 * Description: A custom theme for VS Trendy.
 */

get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VS Trendy - Luxury Fashion</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav class="navbar">
        <img src="images/logo.png" alt="VS Trendy Logo" class="logo">
        <span class="brand-name">VS Trendy</span>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#search">Search</a></li>
            <li><a href="wishlist.html">Wishlist</a></li>
            <li><a href="login.html">Login/Signup</a></li>
        </ul>
    </nav>
    
    <style>
    .brand-name {
        font-size: 1.5rem;
        font-weight: bold;
        color: red;
        margin-right: 450px;
    }
    </style>
    
    <section id="hero" 
    style="position: relative; background: black; height: 100vh; overflow: hidden; display: flex; 
    align-items: center; justify-content: center; flex-direction: column; text-align: center;">
    
    <!-- Animated Background -->
    <canvas id="backgroundCanvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></canvas>

    <!-- Unique Luxury Tagline with 3D Glowing Effect -->
    <h1 id="brand-name"
            style="color: white; font-size: 5rem; font-weight: bold; text-transform: uppercase;
            letter-spacing: 3px; text-shadow: 0px 0px 20px rgba(255, 0, 0, 0.9);
            border: 4px solid rgba(255, 0, 0, 0.9); padding: 10px 30px; display: inline-block;
            transition: transform 0.3s ease-in-out; transform: rotate(-10deg);">
            Unleash Your Style
        </h1>

    <!-- Hero Image -->
    <img src="images/hero.png" alt="Hero Image" id="hero-img"
        style="position: absolute; width: 100%; height: 100%; object-fit: cover; opacity: 0.25; 
        mix-blend-mode: screen; transition: filter 0.5s ease-in-out;
        filter: drop-shadow(0px 0px 25px rgba(255, 0, 0, 0.9));">

    <!-- Buttons -->
    <div style="position: relative; display: flex; gap: 20px; margin-top: 20px;">
        <a href="shop.html" class="button" id="shop-now">Shop Now</a>
        <a href="about.html" class="button" id="know-more">Know More</a>
    </div>
</section>

<style>
    /* Button Styling */
    .button {
        padding: 14px 28px;
        font-size: 1.3rem;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: bold;
        letter-spacing: 2px;
        border: 2px solid rgba(255, 0, 0, 0.9);
        background: none;
        color: white;
        position: relative;
        overflow: hidden;
      
        border-radius: 8px;
    }

    /* Button Hover Effects */
    .button:hover {
        background: rgba(255, 0, 0, 0.9);
        color: white;
        border-color: white;
        transform: scale(1.05);
    }

    /* Glowing Text Animation */
    @keyframes glowText {
        0% { text-shadow: 0px 0px 10px rgba(255, 0, 0, 0.8); }
        100% { text-shadow: 0px 0px 25px rgba(255, 0, 0, 1); }
    }
    #tagline-container:hover {
        transform: rotate(-10deg) translateY(-5px);
    }
</style>

<script>
    // Smooth Animated Background (Luxury Floating Particles)
    const canvas = document.getElementById('backgroundCanvas');
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    let particlesArray = [];

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 5 + 1;
            this.speedX = Math.random() * 3 - 1.5;
            this.speedY = Math.random() * 3 - 1.5;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x <= 0 || this.x >= canvas.width) this.speedX *= -1;
            if (this.y <= 0 || this.y >= canvas.height) this.speedY *= -1;
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = "rgba(255, 0, 0, 0.6)";
            ctx.fill();
        }
    }

    function initParticles() {
        particlesArray = [];
        for (let i = 0; i < 60; i++) {
            particlesArray.push(new Particle());
        }
    }

    function animateParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particlesArray.forEach(particle => {
            particle.update();
            particle.draw();
        });
        requestAnimationFrame(animateParticles);
    }

    initParticles();
    animateParticles();

    // Responsive Canvas
    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        initParticles();
    });

</script>
<!-- Trending Products Section -->
<section id="trending" class="trending-section">
    <h2 class="section-title">Trending Now</h2>
    <div class="product-container">
        <div class="product">
            
            <img src="images/vs sd.png" alt="T shirt Black">
            <h3>Black T-Shirt Men</h3>
            <p>₹499</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/3222.jpg" alt="Hoodie">
            <h3>Casual Hoodie</h3>
            <p>₹599</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/product3.png" alt="Product 3">
            <h3>Fashionable Jacket</h3>
            <p>₹699</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/product1.png" alt="Product 1">
            <h3>Stylish Sneakers</h3>
            <p>₹499</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/product1.png" alt="Product 1">
            <h3>Stylish Sneakers</h3>
            <p>₹499</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/product1.png" alt="Product 1">
            <h3>Stylish Sneakers</h3>
            <p>₹499</p>
            <button>Add to Cart</button>
        </div>

    </div>
</section>

<!-- Sale Section -->
<section id="sale" class="sale-section">
    <h2 class="section-title">Sale</h2>
    <div class="product-container">
        <div class="product">
            <img src="images/sale1.png" alt="Sale Item 1">
            <h3>Discounted Hoodie</h3>
            <p><span class="old-price">899</span> 599</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sale2.png" alt="Sale Item 2">
            <h3>Denim Jeans</h3>
            <p><span class="old-price">699</span> 599</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sale2.png" alt="Sale Item 2">
            <h3>Denim Jeans</h3>
            <p><span class="old-price">699</span> 599</p>
            <button>Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="images/sale2.png" alt="Sale Item 2">
            <h3>Denim Jeans</h3>
            <p><span class="old-price">699</span> 599</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sale2.png" alt="Sale Item 2">
            <h3>Denim Jeans</h3>
            <p><span class="old-price">699</span> 599</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sale2.png" alt="Sale Item 2">
            <h3>Denim Jeans</h3>
            <p><span class="old-price">699</span> 599</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sale2.png" alt="Sale Item 2">
            <h3>Denim Jeans</h3>
            <p><span class="old-price">699</span> 599</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sale2.png" alt="Sale Item 2">
            <h3>Denim Jeans</h3>
            <p><span class="old-price">699</span> 599</p>
            <button>Add to Cart</button>
        </div>
        
    </div>
    <a href="#all-sale" class="view-all-btn">View All Sale Products</a>
</section>

<!-- Gender-Wise Categories -->
<section id="categories" class="categories-section">
    <h2 class="section-title">Shop by Category</h2>
    <div class="category-container">
        <div class="category men-category">
            <h3>Men's Fashion</h3>
            <a href="men.html">Explore</a>
        </div>
        <div class="category women-category">
            <h3>Women's Fashion</h3>
            <a href="women.html">Explore</a>
        </div>
    </div>
</section>

<!-- Product Image Modal -->
<div id="productModal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>
        <img id="modalImage" src="" alt="Product Image">
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <p>© 2025 VS Trendy. All Rights Reserved.</p>
</footer>

<style>
/* Background Image for Sections */
.trending-section, .sale-section, .categories-section {
    background-image: url('VS.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding: 50px 0;
    text-align: center;
}

/* Section Titles */
.section-title {
    font-size: 3rem;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
    text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.5);
    margin-bottom: 40px;
}

/* Product Containers */
.product-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    z-index: 2;
}

/* Product Cards */
.product {
    background: rgba(255, 255, 255, 0.95);
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 260px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.product:hover {
    transform: translateY(-5px);
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.3);
}

/* Product Images */
.product img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.product img:hover {
    transform: scale(1.05);
}

/* Product Titles */
.product h3 {
    font-size: 1.5rem;
    color: black;
    margin: 10px 0;
}

/* Prices */
.product p {
    font-size: 1.2rem;
    font-weight: bold;
    color: red;
}

/* Sale Prices */
.old-price {
    text-decoration: line-through;
    color: gray;
    font-size: 1rem;
    margin-right: 5px;
}

/* Buttons */
.product button {
    background: black;
    color: white;
    border: none;
    padding: 10px 15px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s ease;
}

.product button:hover {
    background: red;
}

/* Category Sections */
.category-container {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.category {
    background: rgba(255, 255, 255, 0.8);
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.category:hover {
    transform: translateY(-5px);
}

/* Category Links */
.category a {
    display: inline-block;
    background: black;
    color: white;
    padding: 10px 15px;
    margin-top: 10px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s ease;
}

.category a:hover {
    background: red;
}

/* Footer */
.footer {
    background: black;
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 1.2rem;
}

/* ----- MODAL (Popup) When Clicking Product Image ----- */
.modal {
    display: none;
    position: fixed;
    z-index: 10;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 20px;
    border-radius: 10px;
    width: 500px;
    text-align: center;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
    position: relative;
}

.modal img {
    width: 100%;
    border-radius: 10px;
}

.modal .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 2rem;
    cursor: pointer;
    color: black;
}

.modal .close:hover {
    color: red;
}
.view-all-btn {
    display: inline-block;
    background: linear-gradient(135deg, #ff0000, #8b0000);
    color: white;
    font-size: 1.3rem;
    font-weight: bold;
    padding: 15px 30px;
    border-radius: 50px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(255, 0, 0, 0.5);
    position: relative;
    overflow: hidden;
}

.view-all-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.3);
    transition: all 0.4s ease-in-out;
}

.view-all-btn:hover::before {
    left: 100%;
}

.view-all-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(255, 0, 0, 0.7);
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const products = document.querySelectorAll(".product img");
    const modal = document.getElementById("productModal");
    const modalImg = document.getElementById("modalImage");
    const closeModal = document.getElementById("closeModal");

    products.forEach((img) => {
        img.addEventListener("click", function () {
            modal.style.display = "flex";
            modalImg.src = this.src;
        });
    });

    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
</script>

<div id="preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background: white; display: flex; flex-direction: column; justify-content: center; align-items: center; z-index: 1000;">
    
    <!-- Logo -->
    <img src="C:\Users\vinit\Desktop\VS BRAND\logo\logosvgr.svg" id="logo" style="width: 200px; height: 200px; opacity: 0;">

    <!-- Brand Name -->
    <div id="brandName" style="font-size: 3rem; font-weight: bold; color: #D10000; font-family: 'Poppins', sans-serif; display: none; opacity: 0;"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let logo = document.getElementById("logo");
        let brandName = document.getElementById("brandName");

        // Logo Fade In
        setTimeout(() => {
            logo.style.transition = "opacity 1.5s ease-in-out";
            logo.style.opacity = "1";
        }, 500);

        // Show Brand Name after Logo
        setTimeout(() => {
            brandName.style.display = "block";
            let text = "VS Trendy";
            let i = 0;
            let typingEffect = setInterval(() => {
                if (i < text.length) {
                    brandName.innerHTML += text[i];
                    brandName.style.opacity = "1";
                    i++;
                } else {
                    clearInterval(typingEffect);
                    setTimeout(() => {
                        document.getElementById("preloader").style.transition = "opacity 1s ease";
                        document.getElementById("preloader").style.opacity = "0";
                        setTimeout(() => {
                            document.getElementById("preloader").style.display = "none";
                        }, 1000);
                    }, 1000);
                }
            }, 150);
        }, 2500);
    });
</script>

</body>
</html>

