<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeVolley - Training</title>
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
        .physical-card h3 {
            font-size: 1.3em;
            font-weight: 600;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }
        .physical-card p {
            font-size: 0.9em;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }
        /* Responsive Design */
        @media (max-width: 1024px) {
            nav {
                gap: 20px;
            }
            .image-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
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
            .section {
                padding: 30px 20px;
            }
            .section h2 {
                font-size: 1.8em;
            }
            .image-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
            }
            .image-card img {
                height: 150px;
            }
        }
        @media (max-width: 480px) {
            .page-header h1 {
                font-size: 2em;
            }
            .section {
                padding: 25px 15px;
            }
            .image-container {
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
        </nav>
    </header>
    <main>
        <div class="main-content">
            <div class="page-header">
                <h1>Volleyball Training</h1>
                <p>Master the fundamentals and advanced techniques with our comprehensive training programs</p>
            </div>
            <!-- Technique Section -->
            <div class="section">
                <div class="section-header">
                    <h2>🏐 Technique Training</h2>
                    <a href="#" class="view-more">View More →</a>
                </div>
                <div class="image-container">
                    <div class="image-card">
                        <img src="serve.jpg" alt="Serve Technique">
                        <div class="image-card-content">
                            <h3>Serve Technique</h3>
                            <p>Master the perfect serve with proper form and power</p>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="bumppass.jpeg" alt="Bump Pass">
                        <div class="image-card-content">
                            <h3>Bump Pass</h3>
                            <p>Learn the essential bump pass for ball control</p>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="settechnique.jpeg" alt="Set Technique">
                        <div class="image-card-content">
                            <h3>Set Technique</h3>
                            <p>Perfect your setting skills for team coordination</p>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="spike.jpg" alt="Spike Approach">
                        <div class="image-card-content">
                            <h3>Spike Approach</h3>
                            <p>Develop powerful and accurate spike techniques</p>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="block.jpeg" alt="Block Positioning">
                        <div class="image-card-content">
                            <h3>Block Positioning</h3>
                            <p>Master defensive blocking strategies</p>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="digdefense.jpeg" alt="Dig Defense">
                        <div class="image-card-content">
                            <h3>Dig Defense</h3>
                            <p>Learn effective defensive digging techniques</p>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="floatserve.jpg" alt="Float Serve">
                        <div class="image-card-content">
                            <h3>Float Serve</h3>
                            <p>Master the unpredictable float serve</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Physical Training Section -->
            <div class="section">
                <div class="section-header">
                    <h2>💪 Physical Training</h2>
                    <a href="#" class="view-more">View More →</a>
                </div>
                <div class="image-container">
                    <div class="physical-card">
                        <h3>Agility Drill</h3>
                        <p>Improve your quick movements and reflexes</p>
                    </div>
                    <div class="physical-card">
                        <h3>Jump Training</h3>
                        <p>Enhance your vertical leap and power</p>
                    </div>
                    <div class="physical-card">
                        <h3>Strength Exercise</h3>
                        <p>Build core strength and muscle power</p>
                    </div>
                    <div class="physical-card">
                        <h3>Endurance Run</h3>
                        <p>Improve stamina and cardiovascular fitness</p>
                    </div>
                    <div class="physical-card">
                        <h3>Core Stability</h3>
                        <p>Strengthen your core for better balance</p>
                    </div>
                    <div class="physical-card">
                        <h3>Speed Burst</h3>
                        <p>Develop explosive speed and acceleration</p>
                    </div>
                    <div class="physical-card">
                        <h3>Flexibility Stretch</h3>
                        <p>Increase flexibility and prevent injuries</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="trainingPage.js"></script>
</body>
</html> 