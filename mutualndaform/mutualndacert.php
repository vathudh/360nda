<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>360 Business Services</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="services.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style_form.css" />
  <style>
    textarea {
      resize: none;
    }
  </style>
</head>
<body>
  <!-- Header -->
  
<header>
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php"><img src="images/logo360.png" alt="360 Logo" id="logo-img"></a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="mobile-menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Navigation Menu -->
        <nav id="main-nav">
            <ul class="menu">
                <li><a href="index.php" class="">Home</a></li>
                <li><a href="about.php" class="">About</a></li>
                <li><a href="service.php" class="">Services</a></li>
                <li><a href="testimonial.php" class="">Client Story</a></li>
                <li><a href="contact.php" class="">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>



 
  <section>
    <div class="container">
      <h1 class="form-title">Mutual NDA Information Collection Form</h1>
      <form action="#" method="POST" enctype="multipart/form-data" id="ndaForm">
        <!-- Hidden Inputs (if needed for tracking, keep, else remove) -->
        <input type="hidden" id="hiddenRequestId" name="requestId">
        <input type="hidden" id="hiddenUserName" name="userName">
        <input type="hidden" id="hiddenMailID" name="mailID">

        <div class="form-grid">
          <div class="form-group">
            <label for="company_name">Company/Client Name <span style="color:red;">*</span></label>
            <input type="text" id="company_name" name="company_name" maxlength="200" placeholder="Enter Company or Client Name" required>
          </div>
          <div class="form-group">
            <label for="nda_type">Type of NDA <span style="color:red;">*</span></label>
            <input type="text" id="nda_type" name="nda_type" maxlength="100" placeholder="(e.g. Mutual, One-way)" required>
          </div>
          <div class="form-group">
            <label for="agreement_duration">Agreement Duration <span style="color:red;">*</span></label>
            <input type="text" id="agreement_duration" name="agreement_duration" maxlength="100" placeholder="e.g. 2 years" required>
          </div>
          <div class="form-group">
            <label for="party_names">Party Names <span style="color:red;">*</span></label>
            <input type="text" id="party_names" name="party_names" maxlength="250" placeholder="List all parties involved" required>
          </div>
          <div class="form-group">
            <label for="email">Email <span style="color:red;">*</span></label>
            <input type="email" id="email" name="email" maxlength="100" placeholder="Enter Email for NDA delivery" required>
          </div>
          <div class="form-group">
            <label for="purpose">Purpose of NDA <span style="color:red;">*</span></label>
            <textarea id="purpose" name="purpose" maxlength="500" placeholder="Describe the purpose of the NDA" required></textarea>
          </div>
          <div class="form-group">
            <label for="signatory_details">Authorized Signatory Details <span style="color:red;">*</span></label>
            <textarea id="signatory_details" name="signatory_details" maxlength="300" placeholder="Name, designation, etc." required></textarea>
          </div>
          <div class="form-group">
            <label for="governing_law">Governing Law <span style="color:red;">*</span></label>
            <input type="text" id="governing_law" name="governing_law" maxlength="100" placeholder="e.g. Indian Law" required>
          </div>
          <div class="form-group">
            <label for="confidential_definition">Definition of Confidential Information <span style="color:red;">*</span></label>
            <textarea id="confidential_definition" name="confidential_definition" maxlength="400" placeholder="How is confidential info defined?" required></textarea>
          </div>
          <div class="form-group">
            <label for="obligations">Obligations of Each Party <span style="color:red;">*</span></label>
            <textarea id="obligations" name="obligations" maxlength="400" placeholder="Summarize each party's obligations" required></textarea>
          </div>
          <div class="form-group">
            <label for="return_policy">Return/Destruction Policy <span style="color:red;">*</span></label>
            <textarea id="return_policy" name="return_policy" maxlength="300" placeholder="Describe return or destruction of info" required></textarea>
          </div>
          <div class="form-group">
            <label for="signature_fields">Signature Fields <span style="color:red;">*</span></label>
            <textarea id="signature_fields" name="signature_fields" maxlength="200" placeholder="Names/titles for signature blocks" required></textarea>
          </div>
        </div>
        <div class="submit-container">
          <button type="submit" class="submit-button">Submit</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
      <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="logo">
                        <img src="images/360logowhite.png" alt="360 Logo">
                      
                    </div>
                    <p>Your trusted partner for business growth and compliance since 2015. We're dedicated to helping businesses of all sizes succeed.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#testimonial">Testimonial</a></li>
                        <li><a href="#blog">Blogs</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h3>Stay in the loop</h3>
                    <p>Subscribe to our newsletter for the latest updates and insights.</p>
                    <form>
                        <input type="email" placeholder="Enter your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>

            </div>
            <div class="footer-bottom">
                <p>&copy; <span class="current-year">2025</span> 360degreementor. All rights reserved.</p>
                <div class="payment-methods">
<p>&copy; <span class="current-year">2025</span> Designed &amp; Developed By <a href="https://www.pentagoninnovations.com/">Pentagon Innovations</a> </p>
               </div>
            </div>
        </div>
    </footer>
  <script src="script.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        function getParam(name) {
            const url = new URL(window.location.href);
            return url.searchParams.get(name) || '';
        }
        // Set values if present
        if (document.getElementById('company_name')) {
            document.getElementById('company_name').value = getParam('name');
        }
        if (document.getElementById('email')) {
            document.getElementById('email').value = getParam('email');
        }
        // If you have a phone/number field, set it here as well
        // Example: document.getElementById('phone_number').value = getParam('number');
    });
  </script>
</body>
</html>
