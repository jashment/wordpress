</main>
<footer>
    <div class="row theirInfo">

      <article class=" contact">
        <h2>Contact Us</h2>
        <p>
          <a href="https://goo.gl/maps/LJx4Xhd1ktQXkG2v9">
            CABOT CRUISES <br />
            23 South Main St. Suite 16 <br />
            Lexington, VA 24450</a>
        </p>
      </article>

      <article class=" phone">
        <h2>Phone:</h2>
        <p>
          <a href="tel:1-800-234-5678">1-800-234-5678</a>
        </p>
      </article>

      <article class=" hours">
        <h2>Hours of Operation:</h2>
        <p>
          Monday - Friday 9am - 4pm
        </p>
      </article>

      <article class=" news">
        <h2>News Letter</h2>
        <p>
          Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.
        </p>
        <form>
          <input type="search" placeholder="email" required /> <br /><br />
          <button>Subscribe</button>
        </form>
      </article>

      <article class=" why">
        <h2>Why Cabot Cruises?</h2>
        <p>
          Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you
          with all inclusive vacations including discounted cruises.<br /> <br /> We do not sell travel to residents of
          Delaware, Iowa, Florida, Hawaii and Washington state because those states are just wierd. If you are a
          resident of one of these states, call your congressman and tell them to change the regulations.
        </p>
      </article>
    </div>

    <ul class="social clearfix">
      <li>
        <a href="#"><i class="fab fa-facebook-square"></i></a>
      </li>
      <li>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
      </li>
      <li>
        <a href="#"><i class="fab fa-youtube-square"></i></a>
      </li>
      <li>
        <a href="#"><i class="fab fa-google-plus-square"></i></a>
      </li>
      <li>
        <a href="#"><i class="fab fa-reddit-square"></i></a>
      </li>
    </ul>

    <div class="myInfo">
      <p>&copy; 2019 Jordan Ashment &middot; <a href="www.jashment.com">www.jashment.com</a></p>
    </div>

  </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/js/menuItem.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/menuToggle.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".myslider").slick({
        autoplay: true,
        dots: true,
        // arrows: true,
        cssEase: "ease-out",
        speed: 2000,
        autoplaySpeed: 10000,
        touchMove: true
      });
    });
  </script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "TravelAgency",
      "name": "Cabot Cruises",
      "description": "Cabot Cruises provides cruises for young and old alike. There are over 100 different cruises to choose from.",
      "openingHours": "Mo-Fr 08:00-17:00",
      "telephone": "+18002345678",
      "faxNumber": "+18002345678",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "23 South Main St. Suite 16",
        "addressLocality": "Lexington",
        "addressRegion": "VA"
      },
      "image": "http://fullpath.com/logo.png",
      "priceRange": "$200 to $5000"
    }
  </script>
<script>
window.lazyLoadOptions = {
    threshold: 0
};
</script>

<!-- Download the script and execute it after lazyLoadOptions is defined -->
<script async src="<?php echo get_template_directory_uri(); ?>/js/lazyload.min.js"></script>

  
</body>

</html>