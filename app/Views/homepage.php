<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VibeVolley Club - Where Passion Meets Power</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style2.css" />
</head>
<body>

  <!-- Hero Section -->
  <header class="hero-container">
    <video autoplay muted loop class="hero-video">
      <source src="volleyball.mp4" type="video/mp4" />
    </video>
    <div class="hero-overlay">
      <nav class="navbar">
        <div class="logo">VibeVolley</div>
        <ul>
          <li><a href="/training-page">Training</a></li>
          <li><a href="#about">Tournament</a></li>
          <li><a href="/product-page">Shop</a></li>
          <li><a href="#contact">Profile</a></li>
        </ul>
      </nav>
      <div class="hero-text">
        <h1>Where Passion Meets Power</h1>
        <p>Join the Vibe. Play Volleyball with Purpose.</p> 
        <br><br>
        <a href="#tiers" class="btn-main">View Memberships</a>
      </div>
    </div>
  </header>

  <!-- Membership Tiers -->
  <section id="tiers" class="tier-section">
    <h2>Choose Your Membership</h2>
    <div class="card-container">
      <div class="tier-card">
        <h3>🏐 Rookie</h3>
        <p>Perfect for beginners learning the game.</p>
        <ul>
          <li>Access to Weekly Sessions</li>
          <li>Beginner Training</li>
          <li>Club T-Shirt</li>
        </ul>
        <a href="/signup" class="btn-tier">Select Tier</a>
      </div>

      <div class="tier-card featured">
        <h3>🔥 Plus</h3>
        <p>Step up your game and compete seriously.</p>
        <ul>
          <li>All Rookie Perks</li>
          <li>Pro Coaching</li>
          <li>Tournament Entry</li>
        </ul>
        <a href="/signup" class="btn-tier">Select Tier</a>
      </div>

      <div class="tier-card">
        <h3>👑 Platinum</h3>
        <p>Maximum access for hardcore athletes.</p>
        <ul>
          <li>All Plus Perks</li>
          <li>Private Coaching</li>
          <li>Free Travel & Gear</li>
        </ul>
        <a href="/signup" class="btn-tier">Select Tier</a>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about">
    <h2>About VibeVolley</h2>
    <p>VibeVolley is a dynamic, inclusive club where volleyball thrives and players grow—on and off the court.</p>
  </section>

  <!-- Events -->
  <section id="events">
    <h2>Upcoming Events</h2>
    <ul>
      <li><strong>SpikeFest 2025:</strong> August 15 @ Beach Court</li>
      <li><strong>Drill & Skill Camp:</strong> Sept 1 - 3 @ Indoor Hall</li>
    </ul>
  </section>

  <!-- Contact -->
  <section id="contact">
    <h2>Let's Talk!</h2>
    <form>
      <input type="text" placeholder="Your Name" required />
      <input type="email" placeholder="Your Email" required />
      <textarea placeholder="Message..." required></textarea>
      <button type="submit">Send</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 VibeVolley. All rights reserved.</p>
  </footer>

</body>
</html> 