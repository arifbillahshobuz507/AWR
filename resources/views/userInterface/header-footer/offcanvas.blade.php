<div class="offcanvas__area offcanvas__radius">
  <div class="offcanvas__wrapper">
    <div class="offcanvas__close">
      <button class="offcanvas__close-btn offcanvas-close-btn">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
    <div class="offcanvas__content">
      <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
        <div class="offcanvas__logo logo">
          <a href="index.html">
            <img src="{{asset('user-assets')}}/img/logo/logo.svg" alt="logo">
          </a>
        </div>
      </div>
      <div class="offcanvas__category pb-40">
        <button class="tp-offcanvas-category-toggle">
          <i class="fa-solid fa-bars"></i>
          All Categories
        </button>
        <div class="tp-category-mobile-menu">

        </div>
      </div>
      <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

      <div class="offcanvas__contact align-items-center d-none">
        <div class="offcanvas__contact-icon mr-20">
                     <span>
                        <img src="{{asset('user-assets')}}/img/icon/contact.png" alt="">
                     </span>
        </div>
        <div class="offcanvas__contact-content">
          <h3 class="offcanvas__contact-title">
            <a href="tel:098-852-987">004524865</a>
          </h3>
        </div>
      </div>
      <div class="offcanvas__btn">
        <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
      </div>
    </div>
    <div class="offcanvas__bottom">
      <div class="offcanvas__footer d-flex align-items-center justify-content-between">
        <div class="offcanvas__currency-wrapper currency">
          <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
          <ul class="offcanvas__currency-list tp-currency-list">
            <li>USD</li>
            <li>ERU</li>
            <li>BDT </li>
            <li>INR</li>
          </ul>
        </div>
        <div class="offcanvas__select language">
          <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
            <div class="offcanvas__lang-img mr-15">
              <img src="{{asset('user-assets')}}/img/icon/language-flag.png" alt="">
            </div>
            <div class="offcanvas__lang-wrapper">
              <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
              <ul class="offcanvas__lang-list tp-lang-list">
                <li>Spanish</li>
                <li>Portugese</li>
                <li>American</li>
                <li>Canada</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="body-overlay"></div>
