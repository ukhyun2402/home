<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="/public/css/slide.css">

<div id="slide-container">
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="swiper-content-left">
          <h1>Section1</h1>
          <div>Hello World</div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-content-right">
            <h1>Section1</h1>
            <div>Hello World</div>
          </div>
      </div>
      <div class="swiper-slide">Section 3 <br> Hello World</div>
      <div class="swiper-slide">Section 4 <br> Hello World</div>
      <div class="swiper-slide">Section 5 <br> Hello World</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>
  <!-- Swiper JS -->
  <script src='https://unpkg.com/swiper/swiper-bundle.min.js'></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: {
        delay: 99999999999,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
