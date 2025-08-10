@extends('layouts.app')

@section('title', 'Contact')

@section('style')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            line-height: 1.6;
            color: #333;
        }

                body p {
font-family: 'Roboto';
        }

        /* Header Section */
        .hero-section {
            background-color: #f8f9fa;
            padding: 80px 20px;
            text-align: center;
            margin-top: 40px;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            color: black;
            margin-bottom: 20px;
            font-family: 'Poppins';
        }

        .hero-section p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Main Content Section */
        .contact-section {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }

        /* Left Side - Contact Form */
        .contact-form {
            background-color: #fff;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .form-group {
            flex: 1;
        }

        .form-group.full-width {
            width: 100%;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            font-family: 'Roboto';
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: black;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #adb5bd;
        }

        .form-group textarea {
            height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background-color: black;
            color: white;
            padding: 13px 18px;
            border: none;
            border-radius: 7px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-family: 'Roboto';
        }

        .submit-btn:hover {
            background-color: white;
            color: black;
            border: 2px solid black;
        }

        /* Right Side - Contact Info */
        .contact-info {
            padding-left: 40px;
            margin-top: -15px;;
        }

        .contact-info h2 {
            font-size: 2.2rem;
            color: black;
            font-weight: 600;
            font-family: 'Poppins';
        }

        .contact-info p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 7px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            color: black;
            font-size: 24px;
        }

        .contact-details h3 {
            font-size: 1rem;
            color: #999;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-weight: normal;
            font-family: 'Roboto';
        }

        .contact-details p {
            font-size: 1.1rem;
            color: #333;
            margin: 0;
            font-weight: 500;
        }

        /* Social Media Section */
        .social-section {
            margin-top: 5px;
        }

        .social-section h3 {
            font-size: 1.1rem;
            color: black;
            margin-bottom: 8px;
            font-weight: 600;
            font-family: 'Poppins';

        }

        .social-icons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #666;
            font-size: 18px;
            border: 1px solid #ddd;
        }

        .social-icon:hover {
            background-color: #000;
            color: white;
            border-color: #000;
            transform: translateY(-2px);
        }

        .contact-icon i {
    color: black !important;
}

        /* Map Section */
        .map-section {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .map-section iframe {
            width: 100%;
            height: 450px;
            border: 0;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }

            .contact-section {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 40px 20px;
            }

            .contact-info {
                padding-left: 0;
                order: 2;
            }

            .contact-form {
                order: 1;
            }

            .contact-info h2 {
                font-size: 1.8rem;
            }

            .form-row {
                flex-direction: column;
                gap: 25px;
            }

            .contact-item {
                margin-bottom: 25px;
            }

            .social-icons {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding: 60px 20px;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .contact-section {
                padding: 30px 15px;
            }

            .contact-info h2 {
                font-size: 1.6rem;
            }

            .map-section {
                padding: 0 15px;
            }

            .map-section iframe {
                height: 300px;
            }
        }
</style>

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

@endsection

@section('content')
 <!-- Header Section -->
    <section class="hero-section">
        <h1>Contact</h1>
        <p>We are ready to serve your order. Contact us for more information.</p>
    </section>

    <!-- Main Contact Section -->
    <section class="contact-section">
        <!-- Left Side - Contact Form -->
        <div class="contact-form">
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <input type="tel" placeholder="Phone number">
                    </div>
                    <div class="form-group">
                        <select required>
                            <option value="">Select a service</option>
                            <option value="web-design">Website Design</option>
                            <option value="web-development">Website Development</option>
                            <option value="mobile-app">Mobile Application</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="seo">SEO services</option>
                            <option value="consultation">Consult IT</option>
                            <option value="other">Others</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <textarea placeholder="Message" required></textarea>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        <!-- Right Side - Contact Info -->
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>We are committed to providing the best service.</p>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="contact-details">
                    <h3>Addres</h3>
                    <p>Jl. Soekarno Hatta No. 9, Malang, Jawa Timur 65141</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-details">
                    <h3>Phone Number</h3>
                    <p>+62 812 9245 8877</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="contact-details">
                    <h3>Email</h3>
                    <p>maneviz@gmail.com</p>
                </div>
            </div>

            <div class="social-section">
                <h3>Find Us On:</h3>
                <div class="social-icons">
                    <div class="social-icon" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div class="social-icon" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </div>
                    <div class="social-icon" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </div>
                    <div class="social-icon" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </div>
                    <div class="social-icon" title="YouTube">
                        <i class="bi bi-youtube"></i>
                    </div>
                    <div class="social-icon" title="Twitter">
                        <i class="bi bi-twitter"></i>
                    </div>
                    <div class="social-icon" title="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0881917238175!2d112.62473577358406!3d-7.989828979679484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSMK%20Negeri%204%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1754490481931!5m2!1sid!2sid" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

@endsection