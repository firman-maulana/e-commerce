<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
<style>
    footer {
        background: #ffffff;
        color: #333333;
        margin-top: 60px;
        border-top: 1px solid #e5e5e5;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Main Footer Content */
    .footer-content {
        display: grid;
        grid-template-columns: 2.5fr 1fr 1fr 1fr 1.5fr;
        gap: 60px;
        padding: 60px 0 40px;
        border-bottom: 1px solid #e5e5e5;
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

    .logo-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #007bff, #0056b3);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
    }

    .brand-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333333;
    }

    .brand-description {
        color: #666666;
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
        color: #666666;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
        border: 1px solid #e5e5e5;
    }

    .social-link:hover {
        background: #007bff;
        color: white;
        border-color: #007bff;
    }

    /* Footer Columns */
    .footer-column {
        min-width: 0;
    }

    .footer-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #333333;
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
        color: #666666;
        text-decoration: none;
        font-size: 0.95rem;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: #007bff;
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
        color: #666666;
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
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .copyright p {
        color: #666666;
        font-size: 0.9rem;
        margin: 0;
    }

    .footer-legal {
        display: flex;
        gap: 24px;
    }

    .footer-legal a {
        color: #666666;
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
    }

    .footer-legal a:hover {
        color: #007bff;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .footer-content {
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
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
                    <div class="logo-icon">
                        <i class="bi bi-bag-check"></i>
                    </div>
                    <span class="brand-name">Hero's Gear</span>
                </div>
                <p class="brand-description">Discover your style with our premium collection of fashion essentials. From trendy streetwear to timeless classics.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-google"></i></a>
                </div>
            </div>

            <!-- Company -->
            <div class="footer-column">
                <h4 class="footer-title">Company</h4>
                <ul class="footer-links">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="footer-column">
                <h4 class="footer-title">Support</h4>
                <ul class="footer-links">
                    <li><a href="#help">Help Center</a></li>
                    <li><a href="#tweet">Tweet @ Us</a></li>
                    <li><a href="#webinar">Webinars</a></li>
                    <li><a href="#feedback">Feedback</a></li>
                </ul>
            </div>

            <!-- Links -->
            <div class="footer-column">
                <h4 class="footer-title">Links</h4>
                <ul class="footer-links">
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#become-teacher">Become Teacher</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#all-in-one">All in One</a></li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div class="footer-column">
                <h4 class="footer-title">Contact Us</h4>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="bi bi-telephone-fill"></i>
                        <span>(91) 98765 4321 54</span>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-envelope-fill"></i>
                        <span>support@email.com</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="copyright">
                    <p>© Copyright by CodedUI. All rights reserved.</p>
                </div>
                <div class="footer-legal">
                    <a href="#privacy">Privacy Policy</a>
                    <a href="#terms">Terms of Use</a>
                    <a href="#legal">Legal</a>
                    <a href="#sitemap">Site Map</a>
                </div>
            </div>
        </div>
    </div>
</footer>