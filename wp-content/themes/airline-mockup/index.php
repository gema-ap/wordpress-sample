<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <i data-lucide="plane"></i>
    <strong>muchoAIR</strong>
    <span class="header-menu">
      <i id="login-trigger" data-lucide="user-round" style="cursor: pointer;"></i>
      <i id="menu-trigger" data-lucide="menu" style="cursor: pointer;"></i>
    </span>
  </header>
  <div class="subheader" id="subheader-component">
    <span>All airport operations are currently running as expected.</span>
    <i id="close-subheader" data-lucide="circle-x" style="cursor: pointer;"></i>
  </div>

  <section class="flight-ui">
    <div class="flight-ui-content">
      <div class="trip-type">
        <label><input type="radio" name="trip" checked> Round Trip</label>
        <label><input type="radio" name="trip"> One-way</label>
        <label><input type="radio" name="trip"> Multiple City</label>
      </div>
      <div class="search-box">
        <div class="search-field">
          <i data-lucide="plane-takeoff"></i>
          <input type="text" placeholder="Monterrey MTY">
        </div>
        <button class="swap-btn">
          <i data-lucide="arrow-right-left"></i>
        </button>
        <div class="search-field">
          <i data-lucide="plane-landing"></i>
          <input type="text" placeholder="Destination">
        </div>
        <button class="search-btn">Search</button>
      </div>
    </div>
  </section>

  <section class="promo-section">
    <div class="promo-card">
      <div class="promo-badge">Limited Time</div>
      <div class="promo-image">
        <img src="https://traveler.marriott.com/es/wp-content/uploads/sites/2/2018/12/GI-537473640-Cozumel-header.jpg"
          alt=" Beach destination">
      </div>
      <div class="promo-content">
        <h3 class="promo-title">Escape to Paradise</h3>
        <p class="promo-description">Book your tropical getaway now and enjoy up to 40% off flights to Cancun, Puerto
          Vallarta, and Los Cabos.</p>
        <div class="promo-details">
          <div class="promo-price">
            <span class="price-from">From</span>
            <span class="price-amount">$299</span>
            <span class="price-note">round trip</span>
          </div>
          <div class="promo-validity">
            <i data-lucide="calendar"></i>
            <span>Valid until Dec 15, 2023</span>
          </div>
        </div>
        <button class="promo-cta">Book Now</button>
      </div>
    </div>
  </section>

  <dialog id="login-modal">
    <?php wp_login_form(); ?>
  </dialog>

  <footer class="air-footer">

    <div class="footer-top">
      <div class="footer-col">
        <h4>About</h4>
        <ul>
          <li><a href="#">Our Story</a></li>
          <li><a href="#">Destinations</a></li>
          <li><a href="#">Additional Benefits</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Notice</a></li>
          <li><a href="#">Passenger Rights</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Customer Support</h4>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Passenger Protection</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#">Travel Agencies</a></li>
          <li><a href="#">Corporate Travel</a></li>
          <li><a href="#">Group Bookings</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-middle">


      <div class="socials">
        <h5>Follow us on social media</h5>
        <div class="social-icons">
          <i data-lucide="facebook" style="cursor: pointer;"></i>
          <i data-lucide="instagram" style="cursor: pointer;"></i>
          <i data-lucide="twitter" style="cursor: pointer;"></i>
          <i data-lucide="youtube" style="cursor: pointer;"></i>
        </div>
      </div>
    </div>

  </footer>
  <aside id="side-panel" class="side-panel">
    <div class="panel-header">
      <h2>Menu</h2>
      <i id="close-panel" data-lucide="x" style="cursor: pointer;"></i>
    </div>
    <div class="panel-content">
      <nav class="panel-nav">
        <h3>Book</h3>
        <ul>
          <li><a href="#"><i data-lucide="plane-takeoff"></i> Flights</a></li>
          <li><a href="#"><i data-lucide="hotel"></i> Hotels</a></li>
          <li><a href="#"><i data-lucide="car"></i> Car Rentals</a></li>
        </ul>


        <h3>Support</h3>
        <ul>
          <li><a href="#"><i data-lucide="help-circle"></i> Help Center</a></li>
          <li><a href="#"><i data-lucide="phone"></i> Contact Us</a></li>
          <li><a href="#"><i data-lucide="file-text"></i> Travel Advisory</a></li>
        </ul>
      </nav>
    </div>
  </aside>
  <?php wp_footer(); ?>

  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      lucide.createIcons();

      const modal = document.getElementById("login-modal");
      const loginTrigger = document.getElementById("login-trigger");

      if (loginTrigger && modal) {
        loginTrigger.onclick = () => modal.showModal();
        modal.onclick = (e) => {
          if (e.target === modal) {
            modal.close();
          }
        };
      }

      const subheader = document.getElementById("subheader-component");
      const closeBtn = document.getElementById("close-subheader");

      if (subheader && closeBtn) {
        closeBtn.onclick = () => {
          subheader.style.display = "none";
        };
      }
      const sidePanel = document.getElementById("side-panel");
      const menuTrigger = document.getElementById("menu-trigger");
      const closePanelBtn = document.getElementById("close-panel");
      if (sidePanel && menuTrigger && closePanelBtn) {
        menuTrigger.onclick = () => {
          sidePanel.classList.add("active");
          panelOverlay.classList.add("active");
          document.body.style.overflow = "hidden";
        };
        closePanelBtn.onclick = () => {
          sidePanel.classList.remove("active");
          panelOverlay.classList.remove("active");
          document.body.style.overflow = "";
        };
      }




    });


  </script>

</body>

</html>