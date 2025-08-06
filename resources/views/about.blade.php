@extends('layouts.app')

@section('content')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: white;
        color: #333;
        line-height: 1.6;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
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
            color: #333;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.8;
        }

    .content-wrapper {
        display: flex;
        gap: 40px;
        align-items: flex-start;
    }

    .about-section {
        flex: 0 0 350px;
        padding: 30px 30px;
        text-align: center;
        min-height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .about-container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -40px;
        margin-top: -50px;
    }

    .about-image {
        width: 500px;
        height: auto;
        object-fit: contain;
    }

    .text-section {
        flex: 1;
    }

    .text-content {
        font-size: 0.95em;
        text-align: justify;
        margin-bottom: 20px;
        color: #444;
    }

    .highlight {
        font-weight: bold;
        color: #000;
    }

    .footer-text {
        margin-top: 30px;
        font-style: italic;
        color: #666;
        font-size: 0.9em;
    }

    @media (max-width: 768px) {
        .content-wrapper {
            flex-direction: column;
        }

        .about-section {
            flex: none;
            width: 100%;
            margin-bottom: 30px;
        }

        .text-section {
            padding-left: 0;
        }

        .header h1 {
            font-size: 1.5em;
        }
    }
</style>

    <section class="hero-section">
        <h1>About</h1>
        <p>MANEVIZ is more than fashion — it's a movement born in Malang and built by Gen Z for Gen Z.</p>
    </section>
    
    <div class="container">

    <div class="content-wrapper">
        <div class="about-section">
            <div class="about-container">
                <img src="storage/image/maneviz-black.jpeg" alt="MANEVIZ Logo" class="about-image">
                <!-- Ganti "path/to/your/maneviz-logo.png" dengan path gambar logo Anda -->
            </div>
        </div>

        <div class="text-section">
            <div class="text-content">
                <p><span class="highlight">MANEVIZ</span> Was Born In The Heart Of Malang, A City Known For Its Creative Spirit And Youthful Energy. Founded By A Vocational High School Student With A Fierce Desire To Build Something Meaningful, <span class="highlight">MANEVIZ</span> Began As More Than Just A Fashion Project—It Was A Personal Mission. In A Time When Meets An Still Figuring Things Out, This Young Founder Chose To Take A Leap Into The World Of Fashion, Driven By A Simple Yet Powerful Belief: That Great Style And Authentic Expression Can Happen When Vision Meets Courage—Proof That Age Is No Barrier To Building A Legacy.</p>

                <p>Deeply Inspired By The Wild Worlds Of Anime, <span class="highlight">MANEVIZ</span> Embodies Character Transformation Seen In Its Stories Into Every Design. We See Anime Not Just As Entertainment, But As An Art Form That Mirrors Real Life The Battles We Fight Within, The Identities We Try To Define, The Dreams We Chase. Our Clothing Becomes A Medium For That Same Transformation—Rich In Symbolism, Bold Graphic Language, And Emotional Resonance. Each Piece Is Crafted To Echo The Spirit Of Heroes Who Rise From Chaos, Who Embrace Their Flaws, And Who Refuse To Be Ordinary.</p>

            </div>

            <div class="text-content">
            </div>

            <div class="footer-text">
            </div>
        </div>
    </div>
    <p>But <span class="highlight">MANEVIZ</span> Is Not Just About Design—It's About Expression. It's About Giving Gen-Z A Platform To Wear Their Stories, Their Emotions, Their Beliefs. Every Shirt Is More Than Fabric; It's A Statement. Every Hoodie Is More Than Warmth; It's An Armor Against A World That Often Feels Like Fashion And Feeling, Who Find Power In Standing Out Instead Of Fitting In. With Drops That Feel Raw And Real, <span class="highlight">MANEVIZ</span> Isn't Interested In Trends—We're Here To Shape Culture, To Speak To Those Who Refuse To Whisper.</p><br>
    <p>As A Movement Born From A Bedroom In Malang And Driven By The Pulse Of Youth Culture, <span class="highlight">MANEVIZ</span> Stands For All Who Believe In Starting Small But Dreaming Wide. We Are Here For The Creators, The Artists, The Makers, And The Believers. In Every Thread, There Is Intention. In Every Collection's A Narrative. And Behind It All, A Belief That Style Can Be Rebellion—And Clothing Can Carry The Soul.</p><br>
    <p><span class="highlight">MANEVIZ</span> — Born In Malang. Forged By Vision. Styled Through Chaos. Inspired By Anime. Created For Gen Z.</p>


</div>

@endsection