@extends('layouts.app2')

@section('title', 'FAQs')

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

    .content p {
        margin-bottom: 12px;
        font-family: 'Roboto';
    }

    .hidden {
        display: none;
    }

    .highlight {
        font-weight: bold;
    }
</style>
@endsection

@section ('content')
<div class="container">
    <div class="header">
        <h1 class="title" id="page-title">FAQs</h1>
    </div>

    <div class="language-selector">
        <button class="lang-btn active" onclick="setLanguage('en')" id="btn-en">English</button>
        <button class="lang-btn" onclick="setLanguage('id')" id="btn-id">Indonesia</button>
    </div>

    <!-- Indonesian Content -->
    <div id="content-id" class="language-content hidden">
        <div class="section">
            <h2 class="section-title">1. Bagaimana cara melakukan pemesanan?</h2>
            <div class="content">
                <p>Anda dapat memilih produk yang diinginkan, klik tombol <b>"Tambah ke Keranjang"</b>, lalu lanjutkan ke halaman checkout untuk menyelesaikan pembayaran.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">2. Metode pembayaran apa saja yang tersedia?</h2>
            <div class="content">
                <p>Kami menerima pembayaran melalui transfer bank, e-wallet (OVO, GoPay, Dana, ShopeePay), dan kartu kredit/debit.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">3. Berapa lama proses pengiriman?</h2>
            <div class="content">
                <p>Pesanan biasanya diproses dalam 1x24 jam setelah pembayaran terkonfirmasi. Estimasi pengiriman 2-5 hari kerja tergantung lokasi Anda.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">4. Apakah bisa melakukan retur atau penukaran barang?</h2>
            <div class="content">
                <p>Bisa, dengan syarat produk masih dalam kondisi asli dan tidak rusak. Anda dapat menghubungi customer service kami maksimal 3 hari setelah barang diterima.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">5. Bagaimana cara melacak pesanan saya?</h2>
            <div class="content">
                <p>Setelah pesanan dikirim, Anda akan menerima nomor resi melalui email atau dashboard akun Anda. Gunakan nomor resi tersebut untuk melacak status pengiriman.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">6. Apakah harga sudah termasuk ongkos kirim?</h2>
            <div class="content">
                <p>Harga produk belum termasuk ongkir. Ongkos kirim akan otomatis dihitung sesuai alamat tujuan saat checkout.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">7. Bagaimana jika produk yang saya terima rusak?</h2>
            <div class="content">
                <p>Segera hubungi customer service kami dengan melampirkan foto produk yang rusak. Kami akan bantu proses retur atau penggantian.</p>
            </div>
        </div>
    </div>

    <!-- English Content -->
    <div id="content-en" class="language-content">
        <div class="section">
            <h2 class="section-title">1. How do I place an order?</h2>
            <div class="content">
                <p>You can select the product you want, click the <b>"Add to Cart"</b> button, then proceed to the checkout page to complete your payment.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">2. What payment methods are available?</h2>
            <div class="content">
                <p>We accept payments via bank transfer, e-wallets (OVO, GoPay, Dana, ShopeePay), and credit/debit cards.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">3. How long does shipping take?</h2>
            <div class="content">
                <p>Orders are usually processed within 24 hours after payment confirmation. Estimated delivery takes 2–5 business days depending on your location.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">4. Can I return or exchange an item?</h2>
            <div class="content">
                <p>Yes, as long as the product is still in its original condition and undamaged. You can contact our customer service within 3 days after receiving the item.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">5. How can I track my order?</h2>
            <div class="content">
                <p>Once your order has been shipped, you will receive a tracking number via email or in your account dashboard. Use this number to track your shipment status.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">6. Does the price include shipping costs?</h2>
            <div class="content">
                <p>Product prices do not include shipping fees. Shipping costs will be automatically calculated based on your delivery address at checkout.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">7. What should I do if the product I receive is damaged?</h2>
            <div class="content">
                <p>Please contact our customer service immediately and attach photos of the damaged product. We will assist you with the return or replacement process.</p>
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
            pageTitle.textContent = 'FAQs';
            document.documentElement.lang = 'id';
        } else {
            pageTitle.textContent = 'FAQs';
            document.documentElement.lang = 'en';
        }
    }
</script>
@endsection
