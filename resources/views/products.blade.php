@extends('layouts.app2')

@section('title', 'Products')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: white;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* banner */
    .hero-section {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
    background-color: white;
    text-align: center;
    padding: 50px 20px;
    margin-top: 35px;
}

.hero-content {
    max-width: 800px;
}

.hero-subtitle {
    font-size: 2.8rem;
    color: #000;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: bold;
    margin-bottom: 30px;
    color: #000;
}

.hero-button {
    display: inline-block;
    padding: 12px 30px;
    background-color: #000;
    color: white;
    border-radius: 9999px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.hero-button:hover {
    background-color: white;
    color: black;
    border: 2px solid black;
}

    </style>

    <section class="hero-section">
    <div class="hero-content">
        <p class="hero-subtitle">The New Innovation:</p>
        <h1 class="hero-title">Form Chaos To Cosmos</h1>
        <a href="#" class="hero-button">Get Started</a>
    </div>
</section>
@endsection