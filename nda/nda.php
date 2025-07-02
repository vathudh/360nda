<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>360 Business Services</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="style_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


            <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0rem 1rem;
        }

        /* Header styles */
        .header {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        @media (min-width: 768px) {
            .header {
                flex-direction: row;
                align-items: center;
            }
        }

        .logo-container {
            width: 200px;
            height: auto;
        }

        .logo-container img {
            width: 100%;
            height: auto;
        }

        .title-container {
            flex: 1;
        }

        .title {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .title-gst {
            color: #444;
        }

        .title-registration {
            color: #22c55e;
        }

        /* Main content styles */
        .main-content {
            background-color: #f5f5f5;
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .main-heading {
            font-size: 1.875rem;
            font-weight: bold;
            color: #22c55e;
            margin-bottom: 1rem;
             text-align: left;
        }

        .description {
            color: #333;
            margin-bottom: 1rem;
          text-align: left;
        }

        .sub-heading {
            font-size: 1.5rem;
            font-weight: bold;
            color: #22c55e;
            margin-bottom: 1rem;
        }

        /* Radio button styles */
        .radio-group {
            margin-bottom: 1.5rem;
        }

        .radio-options {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        @media (min-width: 640px) {
            .radio-options {
                flex-direction: row;
            }
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .radio-label {
            font-weight: 500;
        }

        /* Content box styles */
        .content-box {
            border: 1px solid #22c55e;
            border-radius: 0.375rem;
            padding: 1.5rem;
            background-color: white;
            min-height: 11rem;
            height: auto;
            margin-bottom: 2rem; /* Added spacing for the button */
        }

        /* Document list styles */
        .document-container {
            display: none;
        }

        .document-container.active {
            display: block;
            width: 100%;
        }

        .document-heading {
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .document-columns {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .document-column {
            flex: 1;
            min-width: 250px;
        }

        .document-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            padding: 0.5rem;
            border-radius: 0.25rem;
            transition: background-color 0.2s;
        }

        .document-item:hover {
            background-color: #f9f9f9;
        }

        .document-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: #22c55e;
            color: white;
            border-radius: 50%;
            font-size: 0.875rem;
            flex-shrink: 0;
        }

        .document-text {
            color: #333;
            font-weight: 500;
        }

        /* Custom radio button styling */
        input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #ccc;
            border-radius: 50%;
            outline: none;
            cursor: pointer;
        }

        input[type="radio"]:checked {
            border-color: #22c55e;
            background-color: white;
            box-shadow: inset 0 0 0 4px #22c55e;
        }

        /* Default message */
        .default-message {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #666;
            font-style: italic;
            text-align: center;
            padding: 2rem;
        }

        /* Continue button styles */
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
        }

        .continue-button {
            background-color: #22c55e;
            color: white;
            border: none;
            border-radius: 0.375rem;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            min-width: 180px;
            text-align: center;
        }

        .continue-button:hover {
            background-color: #16a34a;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transform: translateY(-1px);
        }

        .continue-button:active {
            transform: translateY(0);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .continue-button:disabled {
            background-color: #a3e4b8;
            cursor: not-allowed;
            box-shadow: none;
        }
        .continue-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0cf404;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
        }

        .continue-button:hover {
        background-color: #03ff81;
        }
        /* Hide popup and overlay by default */
        .popup-overlay,
        .popup {
            display: none;
            position: fixed;
            z-index: 9999;
        }

        .popup-overlay {
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.4);
        }

        .popup {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 350px;
            background: #fff;
            border-radius: 10px;
            padding: 2rem 1.5rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.25);
            flex-direction: column;
            align-items: center;
        }

        .close-btn {
            position: absolute;
            top: 12px;
            right: 18px;
            background: none;
            border: none;
            font-size: 2rem;
            color: #888;
            cursor: pointer;
        }
    </style>


</head>
<body>
    <!-- Header -->

<header>
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="../index.php"><img src="images/logo360.png" alt="360 Logo" id="logo-img"></a>
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
                <li><a href="../index.php" class="">Home</a></li>
                <li><a href="../about.php" class="">About</a></li>
                <li><a href="../service.php" class="">Services</a></li>
                <li><a href="../testimonial.php" class="">Client Story</a></li>
                <li><a href="../contact.php" class="">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>




    <section>

       
        <div class="container">
            <div class="header">
            <div class="logo-container">
                <img src="images/ndareg.png" style="width:150px; height:150px;" alt="Laptop illustration">
            </div>
            <div class="title-container">
                <h1 class="title">
                    <span class="title-gst">NDA</span> <span class="title-registration">Documentation</span>
                </h1>
                <p>Our NDA (Non-Disclosure Agreement) documentation service ensures your confidential information is protected with legally compliant agreements, tailored to your needs. We make the NDA process seamless, secure, and fast, so you can focus on your business with peace of mind.</p>

            </div>
        </div>
        </div>


        <div class="container">
            <div class="main-content">
            <h2 class="main-heading">
                Why NDA Documentation is Essential?
            </h2>
            <p class="description">
                Protect your sensitive information and business interests with a professionally drafted NDA.
            </p>
             <h3 class="description">
                Confidentiality Protection:
              </h3>
            <p class="description">
              An NDA ensures that all parties are legally bound to keep shared information confidential, reducing the risk of data leaks.
              </p>

               <h3 class="description">
                Legal Compliance:
              </h3>
            <p class="description">
              Our NDAs are drafted to comply with current legal standards, providing enforceable protection for your business.
              </p>
               <h3 class="description">
                Quick Turnaround:
              </h3>
            <p class="description">
              Receive your completed NDA within 24 hours, reviewed by legal professionals for accuracy and reliability.
              </p>

               <h3 class="description">
                Secure Digital Delivery:
              </h3>
            <p class="description">
              Your NDA is delivered securely and digitally, ready for signature and use.
              </p> 
          </div>
      </div>

              <div class="container">
            <div class="main-content">
            <h2 class="main-heading">
               What We Offer?
            </h2>
            <p class="description">
                Our expert team ensures a seamless NDA documentation process by handling all legal and compliance requirements. We provide:
            </p>
             <h3 class="description">
                1. Agreement Type Selection:
              </h3>
            <p class="description">
              We help you choose the right NDA type for your situation (mutual, one-way, or multi-party).
              </p>

               <h3 class="description">
                2. Information Collection & Verification:
              </h3>
            <p class="description">
              We guide you in providing the necessary details and verify them to ensure your NDA is accurate and enforceable.
              </p>
               <h3 class="description">
                3. Drafting & Review:              
            </h3>
            <p class="description">
             Our legal professionals draft and review your NDA to ensure it meets your requirements and legal standards.
              </p>

               <h3 class="description">
                4. Digital Delivery:
              </h3>
            <p class="description">
              We deliver your NDA securely and digitally, ready for execution.
              </p> 
               <h3 class="description">
                5. Post-Documentation Support:
              </h3>
            <p class="description">
             We provide support for any questions or modifications needed after delivery.
              </p>  
            </div>
      </div>
       <div class="container">
            <div class="main-content">
            <h2 class="main-heading">
               Processing Time
            </h2>
            <p class="description">
                The NDA documentation process typically takes less than 24 hours. Our team ensures a quick turnaround while maintaining legal accuracy and confidentiality.
            </p>
            </div>
      </div>
      
        <div class="container">
            <div class="main-content">
            <h2 class="main-heading">
                Why Choose Us for NDA Documentation?
            </h2>
            <p class="description">
                Trusted by 1,000+ businesses for secure, professional NDA creation.
            </p>
             <h3 class="description">
                Confidentiality Protection:
              </h3>
            <p class="description">
              Your sensitive information is safeguarded with robust legal agreements.
              </p>

               <h3 class="description">
                Legally Compliant Documentation:
              </h3>
            <p class="description">
              All NDAs are drafted and reviewed by legal professionals to ensure compliance and enforceability.
              </p>
               <h3 class="description">
               Quick Turnaround:              </h3>
            <p class="description">
              Receive your NDA within 24 hours, ready for use.
              </p>
               <h3 class="description">
                Secure Digital Delivery:
              </h3>
            <p class="description">
              Your NDA is delivered securely and digitally for your convenience.
              </p>
          </div>
      </div>

      <div class="container">
            <h3 class="sub-heading">Choose Agreement Type</h3>

            <div class="radio-group">
                <div class="radio-options">
                    <div class="radio-option">
                        <input type="radio" id="mutual" name="agreement-type" value="mutual" checked>
                        <label for="mutual" class="radio-label">Mutual NDA</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="oneway" name="agreement-type" value="oneway">
                        <label for="oneway" class="radio-label">One-way NDA</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="multiparty" name="agreement-type" value="multiparty">
                        <label for="multiparty" class="radio-label">Multi-party NDA</label>
                    </div>
                </div>
            </div>

            <div class="content-box">
                <div class="default-message" id="default-message">
                    Please select an agreement type above to view information needed
                </div>
                
                <!-- Mutual NDA Info -->
                <div class="document-container" id="mutual-docs">
                    <h4 class="document-heading">Information Needed for Mutual NDA:</h4>
                    <div class="document-columns">
                        <div class="document-column">
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Client or Company Name</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Type of Agreement</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Duration of Agreement</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Involved Parties' Names</span>
                            </div>
                        </div>
                        <div class="document-column">
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Email for sending final NDA</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- One-way NDA Info -->
                <div class="document-container" id="oneway-docs">
                    <h4 class="document-heading">Information Needed for One-way NDA:</h4>
                    <div class="document-columns">
                        <div class="document-column">
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Client or Company Name</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Type of Agreement</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Duration of Agreement</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Involved Parties' Names</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Purpose of NDA</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Authorized Signatory Details</span>
                            </div>
                        </div>
                        <div class="document-column">
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Jurisdiction/Governing Law</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Definition of Confidential Information</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Obligations of Each Party</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Return or Destruction Clause</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Signature Fields</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Email for sending final NDA</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Multi-party NDA Info -->
                <div class="document-container" id="multiparty-docs">
                    <h4 class="document-heading">Information Needed for Multi-party NDA:</h4>
                    <div class="document-columns">
                        <div class="document-column">
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Client or Company Name</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Type of Agreement</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Duration of Agreement</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Involved Parties' Names</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Purpose of NDA</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Authorized Signatory Details</span>
                            </div>
                        </div>
                        <div class="document-column">
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Jurisdiction/Governing Law</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Definition of Confidential Information</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Obligations of Each Party</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Return or Destruction Clause</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Signature Fields</span>
                            </div>
                            <div class="document-item">
                                <span class="document-icon">✓</span>
                                <span class="document-text">Email for sending final NDA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Continue Button now on main page -->
            <div class="button-container">
                <button id="continue-button" class="continue-button" disabled>Continue</button>
            </div>

            <!-- Contact Details Modal (hidden by default) -->
            <div class="popup-overlay" id="contactModalOverlay" style="display:none;"></div>
            <div class="popup" id="contactModal" style="display:none;">
                <button class="close-btn" id="closeContactModalBtn">×</button>
                <div class="form-title">Contact Details</div>
                <form id="contactForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="contactName">Name</label>
                            <input type="text" id="contactName" name="contactName" placeholder="Enter your name" required>
                            <small class="help-text">User-name is required.</small>
                        </div>
                        <div class="form-group">
                            <label for="contactNumber">Number</label>
                            <input type="text" id="contactNumber" name="contactNumber" placeholder="Enter Mobile Number" required>
                            <small class="help-text">Please enter mobile number.</small>
                        </div>
                        <div class="form-group" style="grid-column: 1 / span 2;">
                            <label for="contactEmail">Email</label>
                            <input type="email" id="contactEmail" name="contactEmail" placeholder="Enter Mail Address" required>
                            <small class="help-text">Please enter mail address.</small>
                        </div>
                    </div>
                    <div class="submit-container">
                        <button type="submit" class="submit-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>

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
document.addEventListener("DOMContentLoaded", function () {
    // Elements
    const radioButtons = document.querySelectorAll('input[name="agreement-type"]');
    const defaultMessage = document.getElementById('default-message');
    const mutualDocs = document.getElementById('mutual-docs');
    const onewayDocs = document.getElementById('oneway-docs');
    const multipartyDocs = document.getElementById('multiparty-docs');
    const continueButton = document.getElementById('continue-button');
    
    const contactModal = document.getElementById('contactModal');
    const contactModalOverlay = document.getElementById('contactModalOverlay');
    const closeContactModalBtn = document.getElementById('closeContactModalBtn');

    let selectedAgreementType = null;

    // Hide all documents and reset UI
    function hideAllDocuments() {
        defaultMessage.style.display = 'flex';
        mutualDocs.classList.remove('active');
        onewayDocs.classList.remove('active');
        multipartyDocs.classList.remove('active');
        continueButton.disabled = true;
    }

    // Radio buttons change event
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function () {
            hideAllDocuments();

            if (this.value === 'mutual') {
                defaultMessage.style.display = 'none';
                mutualDocs.classList.add('active');
            } else if (this.value === 'oneway') {
                defaultMessage.style.display = 'none';
                onewayDocs.classList.add('active');
            } else if (this.value === 'multiparty') {
                defaultMessage.style.display = 'none';
                multipartyDocs.classList.add('active');
            }

            continueButton.disabled = false;
            selectedAgreementType = this.value;
        });
    });

    // Continue button click shows Contact Details modal
    continueButton.addEventListener('click', function() {
        if (selectedAgreementType) {
            contactModal.style.display = 'block';
            contactModalOverlay.style.display = 'block';
        } else {
            alert("Please select an agreement type.");
        }
    });
    // Close Contact Details modal
    closeContactModalBtn.addEventListener('click', function() {
        contactModal.style.display = 'none';
        contactModalOverlay.style.display = 'none';
    });
    contactModalOverlay.addEventListener('click', function() {
        contactModal.style.display = 'none';
        contactModalOverlay.style.display = 'none';
    });

    // Auto select first radio button on load
    if (radioButtons.length > 0) {
        radioButtons[0].checked = true;
        radioButtons[0].dispatchEvent(new Event('change'));
    }

    // Contact form submission: redirect to NDA form after validation
    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // Basic validation (already required fields)
        // Optionally, you can add more validation here
        if (selectedAgreementType === 'mutual') {
            window.location.href = 'http://localhost/360nda/mutualndaform/mutualndacert.php';
        } else if (selectedAgreementType === 'oneway') {
            window.location.href = 'http://localhost/360nda/ndaonewayform/onewaycert.php';
        } else if (selectedAgreementType === 'multiparty') {
            window.location.href = 'http://localhost/360nda/ndamultipartyform/multiparty.php';
        }
    });
});
</script>

</body>
</html>
