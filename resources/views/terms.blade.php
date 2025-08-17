@extends('layouts.app2')

@section('style')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        line-height: 1.6;
        color: black;
        background-color: white;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        padding: 40px;
        margin-top: 80px;
    }

    .header {
        border-bottom: 2px solid black;
        padding-bottom: 20px;
        margin-bottom: 30px;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        color: black;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: 'Poppins';
    }

    .language-selector {
        margin: 20px 0;
        display: flex;
        gap: 10px;
    }

    .lang-btn {
        padding: 8px 16px;
        border: 2px solid black;
        background: white;
        color: black;
        cursor: pointer;
        font-size: 12px;
        font-weight: bold;
        text-transform: uppercase;
        transition: all 0.3s ease;
        font-family: 'Poppins';
    }

    .lang-btn.active {
        background: black;
        color: white;
    }

    .lang-btn:hover {
        background: black;
        color: white;
    }

    .section {
        margin-bottom: 30px;
    }

    .section-title {
        font-size: 14px;
        font-weight: bold;
        color: black;
        text-transform: uppercase;
        margin-bottom: 15px;
        letter-spacing: 0.5px;
        font-family: 'Roboto';
    }

    .content {
        font-size: 13px;
        color: #444;
        line-height: 1.8;
        font-family: 'Roboto';
    }

    .content p, 
    .content li {
        margin-bottom: 12px;
        font-family: 'Roboto';
    }

    .email-link {
        color: #0066cc;
        text-decoration: none;
    }

    .email-link:hover {
        text-decoration: underline;
    }

    .hidden {
        display: none;
    }

    .highlight {
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="header">
        <h1 class="title" id="page-title">TERMS AND CONDITIONS</h1>
    </div>

    <div class="language-selector">
        <button class="lang-btn active" onclick="setLanguage('en')" id="btn-en">English</button>
        <button class="lang-btn" onclick="setLanguage('id')" id="btn-id">Indonesia</button>
    </div>

    <!-- Indonesian Content -->
    <div id="content-id" class="language-content hidden">
        <div class="section">
            <h2 class="section-title">SYARAT PENJUALAN</h2>
            <div class="content">
                <ul>
                    <li>Situs resmi <strong>maneviz.com</strong> hanya melayani pembelian di provinsi Jawa Timur. Pembelian dilakukan melalui Website MANEVIZ.</li>
                    <li>Harga produk yang ditampilkan dalam situs web menggunakan mata uang lokal (IDR) dan sudah termasuk Pajak Pertambahan Nilai (PPN).</li>
                    <li>Metode pembayaran melalui kartu kredit ataupun e-wallet.</li>
                    <li>Biaya pengiriman dihitung sebelum checkout dan tergantung alamat tujuan.</li>
                    <li>Semua pembelian dikirimkan menggunakan J&T.</li>
                    <li>Untuk pertanyaan terkait transaksi, silakan hubungi email <a href="mailto:maneviz@gmail.com" class="email-link">maneviz@gmail.com</a>.</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">PENGEMBALIAN</h2>
            <div class="content">
                <h3>Produk Cacat</h3>
                <ul>
                    <li>Mohon rekam video unboxing saat membuka paket.</li>
                    <li>Jika terdapat cacat atau ketidaksesuaian, hubungi <a href="mailto:maneviz@gmail.com" class="email-link">maneviz@gmail.com</a> dalam 1x24 jam setelah menerima produk.</li>
                    <li>Jika klaim valid, kami akan mengatur penggantian atau pengembalian dana.</li>
                    <li>Biaya pengiriman untuk pengembalian produk cacat ditanggung oleh MANEVIZ.</li>
                </ul>

                <h3>Produk Tidak Cacat</h3>
                <ul>
                    <li>Kami tidak memberikan pengembalian dana untuk produk tanpa cacat.</li>
                    <li>Pertukaran ukuran hanya dapat dilakukan dalam satu (1) ukuran berbeda dengan model yang sama.</li>
                    <li>Jika ukuran/model tidak tersedia, MANEVIZ berhak menawarkan model lain dengan harga yang sama.</li>
                    <li>Biaya pengiriman pengembalian karena pertukaran ditanggung oleh pelanggan.</li>
                    <li>Permintaan pertukaran harus dilakukan dalam 1x24 jam setelah menerima produk melalui email <a href="mailto:maneviz@gmail.com" class="email-link">maneviz@gmail.com</a>.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- English Content -->
    <div id="content-en" class="language-content">
        <div class="section">
            <h2 class="section-title">TERMS OF SALES</h2>
            <div class="content">
                <ul>
                    <li>The official website <strong>maneviz.com</strong> only serves purchases in East Java Province. Purchases are made through the MANEVIZ Website.</li>
                    <li>Product prices displayed on the website are in local currency (IDR) and inclusive of Value-Added Tax (VAT).</li>
                    <li>Payment methods are via credit card or e-wallet.</li>
                    <li>Shipping costs are calculated before checkout and depend on the destination address.</li>
                    <li>All purchases will be delivered using J&T.</li>
                    <li>For inquiries regarding transactions, please email <a href="mailto:maneviz@gmail.com" class="email-link">maneviz@gmail.com</a>.</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">RETURNS</h2>
            <div class="content">
                <h3>Defective Products</h3>
                <ul>
                    <li>Please record a video while unboxing the package.</li>
                    <li>If there is a defect or inconsistency, please contact <a href="mailto:maneviz@gmail.com" class="email-link">maneviz@gmail.com</a> within 1x24 hours of receiving the product.</li>
                    <li>If the claim is valid, we will arrange an exchange or refund.</li>
                    <li>The shipping cost for defective product returns will be covered by MANEVIZ.</li>
                </ul>

                <h3>Non-Defective Products</h3>
                <ul>
                    <li>We do not provide refunds for non-defective products.</li>
                    <li>Size exchange can only be made within one (1) size range and for the same model.</li>
                    <li>If the requested size/model is not available, MANEVIZ reserves the right to offer another model of the same price.</li>
                    <li>The shipping cost for exchange-based returns will be covered by the customer.</li>
                    <li>Requests for exchanges must be made within 1x24 hours of receiving the product via email <a href="mailto:maneviz@gmail.com" class="email-link">maneviz@gmail.com</a>.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function setLanguage(lang) {
        const allContent = document.querySelectorAll('.language-content');
        allContent.forEach(content => content.classList.add('hidden'));
        
        document.getElementById(`content-${lang}`).classList.remove('hidden');
        
        const allButtons = document.querySelectorAll('.lang-btn');
        allButtons.forEach(btn => btn.classList.remove('active'));
        document.getElementById(`btn-${lang}`).classList.add('active');
        
        const pageTitle = document.getElementById('page-title');
        if (lang === 'id') {
            pageTitle.textContent = 'SYARAT DAN KETENTUAN';
            document.documentElement.lang = 'id';
        } else {
            pageTitle.textContent = 'TERMS AND CONDITIONS';
            document.documentElement.lang = 'en';
        }
    }
</script>
@endsection
