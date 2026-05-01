<?php
session_start();
require_once '../../backend/php/db_config.php';
require_once '../../backend/php/UserManager.php';

// Initialize UserManager
$userManager = new UserManager($pdo);

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']);
$username = $isLoggedIn ? $_SESSION['username'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs - Soundex Audio Solutions</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/header.css?v=1.3" />
  <link rel="stylesheet" href="../css/shared.css?v=1.3">
  <link rel="stylesheet" href="../css/faqs.css?v=1.3">
</head>

<body>
  <!-- Navigation Header -->
  <?php include '../includes/header.php'; ?>

  <main class="main-content">
    <section class="faq-section section-padding">
      <h1 class="section-title">Frequently Asked Questions</h1>
      <p class="intro" style="text-align: center; margin-bottom: 40px; color: #666;">Got questions? We've got answers.
        Tap to expand each topic.</p>

      <div class="faq-container">
        <div class="faq-item">
          <!-- <div class="faq-question">How do I buy a speaker on Soundex?</div> -->
          <div class="faq-answer">Browse our store, select your product, and proceed to checkout with secure payment
            options.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Can I sell used audio gear?</div>
          <div class="faq-answer">Yes! Create a seller account, upload product details, and list your item for sale.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Do you offer repair services?</div>
          <div class="faq-answer">Absolutely. Our technicians provide diagnostics and eco-friendly repairs for most
            audio
            devices.</div>
        </div>
        <div class="faq-item">
          <div class="faq-question">Is there a warranty on purchases?</div>
          <div class="faq-answer">All new products come with a 1-year warranty. Refurbished items include a 6-month
            coverage.</div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="footer-content">
      <div class="footer-logo">
        <h2>Soun<span>Dex</span></h2>
        <p>Your one-stop shop for premium audio.</p>
      </div>
      <div class="footer-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="../pages/home.php">Home</a></li>
          <li><a href="../pages/buy.php">Shop</a></li>
          <li><a href="../pages/services.php">Services</a></li>
          <li><a href="../pages/contact us.php">Contact</a></li>
        </ul>
      </div>
      <div class="footer-social">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#" class="social-icon">FB</a>
          <a href="#" class="social-icon">IG</a>
          <a href="#" class="social-icon">TW</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Soundex Audio Solutions. All rights reserved.</p>
    </div>
  </footer>

  <script src="../js/faqs.js"></script>
</body>

</html>