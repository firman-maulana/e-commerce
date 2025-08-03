<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
<style>
    footer {
        background: black;
        color: #ffffff;
        margin-top: 60px;
        border-top: 1px solid white;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Main Footer Content */
    .footer-content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 40px;
        padding: 60px 0 40px;
        border-bottom: 1px solid white;
        justify-content: space-between;
    }

    /* Brand Section */
    .footer-brand {
        padding-right: 20px;
    }

    .brand-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
    }

    .logo-image {
        width: auto;
        height: 36px; /* Disesuaikan dengan tinggi teks brand-name (1.5rem ≈ 24px + margin) */
        object-fit: contain;
        border-radius: 6px;
    }

    .brand-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff; /* Diubah ke putih karena background hitam */
    }

    .brand-description {
        color: white;
        line-height: 1.6;
        margin-bottom: 24px;
        font-size: 0.95rem;
    }

    .social-links {
        display: flex;
        gap: 8px;
    }

    .social-link {
        width: 36px;
        height: 36px;
        background: transparent;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
        border: 1px solid white;
    }

    .social-link:hover {
        background: #ff6b6b;
        color: white;
        border-color: #ff6b6b;
    }

    /* Footer Columns */
    .footer-column {
        min-width: 0;
    }

    .footer-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #ffffff; /* Diubah ke putih */
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: white;
        text-decoration: none;
        font-size: 0.95rem;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: #ff6b6b;
    }

    /* Contact Info */
    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #cccccc; /* Diubah ke abu-abu terang */
        font-size: 0.95rem;
    }

    .contact-item i {
        color: #007bff;
        font-size: 1rem;
        width: 16px;
        text-align: center;
    }

    /* Footer Bottom */
    .footer-bottom {
        padding: 24px 0;
    }

    .footer-bottom-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .copyright p {
        color: white;
        font-size: 0.9rem;
        margin: 0;
    }

    .footer-legal {
        display: flex;
        gap: 24px;
    }

    .footer-legal a {
        color: white;
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
    }

    .footer-legal a:hover {
        color: #ff6b6b;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .footer-content {
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            padding: 40px 0 30px;
        }

        .footer-brand {
            grid-column: 1 / -1;
            padding-right: 0;
            margin-bottom: 10px;
        }

        .footer-bottom-content {
            flex-direction: column;
            text-align: center;
            gap: 16px;
        }

        .logo-image {
            height: 32px; /* Sedikit lebih kecil di mobile */
        }
    }

    @media (max-width: 480px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 25px;
            padding: 30px 0 25px;
        }

        .footer-legal {
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
        }

        .social-links {
            justify-content: flex-start;
        }

        .logo-image {
            height: 28px; /* Lebih kecil lagi di layar sangat kecil */
        }
    }
</style>
<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Main Footer Content -->
        <div class="footer-content">
            <!-- Brand Section -->
            <div class="footer-brand">
                <div class="brand-logo">
                    <!-- Ganti dengan path gambar logo Anda -->
                    <img src="storage/image/maneviz-white.png" alt="Hero's Gear Logo" class="logo-image">
                </div>
                <p class="brand-description">MANEVIZ is a shop that sells clothes, shoes, hats, and hoodies with attractive designs.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-google"></i></a>
                </div>
            </div>

            <!-- Links -->
            <div class="footer-column">
                <h4 class="footer-title">Links</h4>
                <ul class="footer-links">
                    <li><a href="#about">Home</a></li>
                    <li><a href="#services">Prodducts</a></li>
                    <li><a href="#community">About</a></li>
                    <li><a href="#testimonial">Contact</a></li>
                </ul>
            </div>

            <!-- Products -->
            <div class="footer-column">
                <h4 class="footer-title">Products</h4>
                <ul class="footer-links">
                    <li><a href="#help">Hat</a></li>
                    <li><a href="#tweet">Shirt</a></li>
                    <li><a href="#webinar">Hoodies</a></li>
                    <li><a href="#feedback">Trousers</a></li>
                </ul>
            </div>

            <!-- Our website -->
            <div class="footer-column">
                <h4 class="footer-title">Our website</h4>
                <ul class="footer-links">
                    <li><a href="#courses">Refund Policy</a></li>
                    <li><a href="#become-teacher">How to Order</a></li>
                    <li><a href="#service">FAQs</a></li>
                    <li><a href="#all-in-one">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="copyright">
                    <p>© Copyright by MANEVIZ. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>