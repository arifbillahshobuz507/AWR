<div class="cartmini__area tp-all-font-roboto">
  <div class="cartmini__wrapper d-flex justify-content-between flex-column">
    <div class="cartmini__top-wrapper">
      <div class="cartmini__top p-relative">
        <div class="cartmini__top-title">
          <h4>Shopping cart</h4>
        </div>
        <div class="cartmini__close">
          <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
        </div>
      </div>
      <div class="cartmini__shipping">
        <p> Free Shipping for all orders over <span>$50</span></p>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <div class="cartmini__widget">
        <div class="cartmini__widget-item">
          <div class="cartmini__thumb">
            <a href="product-details.html">
              <img src="{{asset('user-assets')}}/img/product/product-1.jpg" alt="">
            </a>
          </div>
          <div class="cartmini__content">
            <h5 class="cartmini__title"><a href="product-details.html">Level Bolt Smart Lock</a></h5>
            <div class="cartmini__price-wrapper">
              <span class="cartmini__price">$46.00</span>
              <span class="cartmini__quantity">x2</span>
            </div>
          </div>
          <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
        </div>
      </div>
      <!-- for wp -->
      <!-- if no item in cart -->
      <div class="cartmini__empty text-center d-none">
        <img src="{{asset('user-assets')}}/img/product/cartmini/empty-cart.png" alt="">
        <p>Your Cart is empty</p>
        <a href="shop.html" class="tp-btn">Go to Shop</a>
      </div>
    </div>
    <div class="cartmini__checkout">
      <div class="cartmini__checkout-title mb-30">
        <h4>Subtotal:</h4>
        <span>$113.00</span>
      </div>
      <div class="cartmini__checkout-btn">
        <a href="cart.html" class="tp-btn mb-10 w-100"> view cart</a>
        <a href="checkout.html" class="tp-btn tp-btn-border w-100"> checkout</a>
      </div>
    </div>
  </div>
</div>
