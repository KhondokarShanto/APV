      <header class="header header--1" data-sticky="true">
        <div class="header__top">
          <div class="ps-container">
            <div class="header__left">
              <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                <div class="menu__content">
                  <ul class="menu--dropdown">
                    <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                      <div class="mega-menu">
                        <div class="mega-menu__column">
                          <h4>Electronic<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                            <li><a href="#">Home Audio &amp; Theathers</a>
                            </li>
                          </ul>
                        </div>
                        <div class="mega-menu__column">
                          <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                            <li><a href="#">Digital Cables</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                    </li>
                    <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                      <div class="mega-menu">
                        <div class="mega-menu__column">
                          <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                            <li><a href="#">Computer &amp; Tablets</a>
                            </li>
                            <li><a href="#">Laptop</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                    </li>
                  </ul>
                </div>
              </div><a class="ps-logo" href="{{ url('/home') }}"><img src="img/logo_light.png" alt=""></a>
            </div>
            <div class="header__center">
              <form class="ps-form--quick-search" action="{{ url('main')}}" method="get">
                <div class="form-group--icon"><i class="icon-chevron-down"></i>
                  <select class="form-control">
                    <option value="0" selected="selected">All</option>
                    <option class="level-0" value="babies-moms">Babies & Moms</option>
                    <option class="level-0" value="books-office">Books & Office</option>
                  </select>
                </div>
                <input class="form-control" type="text" placeholder="I'm shopping for...">
                <button>Search</button>
              </form>
            </div>
            <div class="header__right">
              <div class="header__actions"><a class="header__extra" href="#"><i class="icon-chart-bars"></i><span><i>0</i></span></a><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                  <div class="ps-cart__content">
                    <div class="ps-cart__items">
                      <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                          <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                      </div>
                      <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/5.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                          <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                      </div>
                    </div>
                    <div class="ps-cart__footer">
                      <h3>Sub Total:<strong>$59.99</strong></h3>
                      <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                    </div>
                  </div>
                </div>
                <div class="ps-block--user-header">
                  <div class="ps-block__left"><i class="icon-user"></i></div>
                  <div class="ps-block__right">
                    <a href="{{ url('login')}}">Login</a>
                    <a href="{{ url('registration')}}">Register</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="navigation">
          <div class="ps-container">
            <div class="navigation__left">
              <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                <div class="menu__content">
                  <ul class="menu--dropdown">
                    <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                      <div class="mega-menu">
                        <div class="mega-menu__column">
                          <h4>Electronic<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                            <li><a href="#">Home Audio &amp; Theathers</a>
                            </li>
                            <li><a href="#">TV &amp; Videos</a>
                            </li>
                          </ul>
                        </div>
                        <div class="mega-menu__column">
                          <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                            <li><a href="#">Digital Cables</a>
                            </li>                        </ul>
                        </div>
                      </div>
                    </li>
                    <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                    </li>
                    <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                    </li>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                      <div class="mega-menu">
                        <div class="mega-menu__column">
                          <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                          <ul class="mega-menu__list">
                            <li><a href="#">Computer &amp; Tablets</a>
                            </li>
                            <li><a href="#">Laptop</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                    </li>
                    <li><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="navigation__right">
              <ul class="menu">
                <li class="current-menu-item menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                  <ul class="sub-menu">
                    <li><a href="index.html">Marketplace Full Width</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                    <div class="mega-menu__column">
                      <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="shop-default.html">Shop Default</a>
                        </li>
                      </ul>
                    </div>
                    <div class="mega-menu__column">
                      <h4>Product Layout<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="product-default.html">Default</a>
                        </li>
                      </ul>
                    </div>
                    <div class="mega-menu__column">
                      <h4>Product Types<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="product-default.html">Simple</a>
                        </li>
                      </ul>
                    </div>
                    <div class="mega-menu__column">
                      <h4>Woo Pages<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="shopping-cart.html">Shopping Cart</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                    <div class="mega-menu__column">
                      <h4>Basic Page<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="about-us.html">About Us</a>
                        </li>
                      </ul>
                    </div>
                    <div class="mega-menu__column">
                      <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="become-a-vendor.html">Become a Vendor</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                  <div class="mega-menu">
                    <div class="mega-menu__column">
                      <h4>Blog Layout<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="blog-grid.html">Grid</a>
                        </li>
                      </ul>
                    </div>
                    <div class="mega-menu__column">
                      <h4>Single Blog<span class="sub-toggle"></span></h4>
                      <ul class="mega-menu__list">
                        <li><a href="blog-detail.html">Single 1</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>








              <ul class="navigation__extra">
                <li><a href="#">Sell on Martfury</a></li>
                <li><a href="#">Tract your order</a></li>
                <li>
                  <div class="ps-dropdown"><a href="#">US Dollar</a>
                    <ul class="ps-dropdown-menu">
                      <li><a href="#">Us Dollar</a></li>
                      <li><a href="#">Euro</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="ps-dropdown language"><a href="#"><img src="img/flag/en.png" alt="">English</a>
                    <ul class="ps-dropdown-menu">
                      <li><a href="#"><img src="img/flag/germany.png" alt=""> Germany</a></li>
                      <li><a href="#"><img src="img/flag/fr.png" alt=""> France</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <header class="header header--mobile" data-sticky="true">
        <div class="header__top">
          <div class="header__left">
            <p>Welcome to Martfury Online Shopping Store !</p>
          </div>
          <div class="header__right">
            <ul class="navigation__extra">
              <li><a href="#">Sell on Martfury</a></li>
              <li><a href="#">Tract your order</a></li>
              <li>
                <div class="ps-dropdown"><a href="#">US Dollar</a>
                  <ul class="ps-dropdown-menu">
                    <li><a href="#">Us Dollar</a></li>
                    <li><a href="#">Euro</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="ps-dropdown language"><a href="#"><img src="img/flag/en.png" alt="">English</a>
                  <ul class="ps-dropdown-menu">
                    <li><a href="#"><img src="img/flag/germany.png" alt=""> Germany</a></li>
                    <li><a href="#"><img src="img/flag/fr.png" alt=""> France</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="navigation--mobile">
          <div class="navigation__left"><a class="ps-logo" href="{{ url('/home') }}"><img src="img/logo_light.png" alt=""></a></div>
          <div class="navigation__right">
            <div class="header__actions">
              <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                <div class="ps-cart__content">
                  <div class="ps-cart__items">
                    <div class="ps-product--cart-mobile">
                      <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                        <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                      </div>
                    </div>
                    <div class="ps-product--cart-mobile">
                      <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/5.jpg" alt=""></a></div>
                      <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                        <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                      </div>
                    </div>
                  </div>
                  <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                  </div>
                </div>
              </div>
              <div class="ps-block--user-header">
                <div class="ps-block__left"><i class="icon-user"></i></div>
                <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="ps-search--mobile">
          <form class="ps-form--search-mobile" action="http://nouthemes.net/html/martfury/index.html" method="get">
            <div class="form-group--nest">
              <input class="form-control" type="text" placeholder="Search something...">
              <button><i class="icon-magnifier"></i></button>
            </div>
          </form>
        </div>
      </header>
      <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
          <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
          <div class="ps-cart--mobile">
            <div class="ps-cart__content">
              <div class="ps-product--cart-mobile">
                <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                  <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                </div>
              </div>
            </div>
            <div class="ps-cart__footer">
              <h3>Sub Total:<strong>$59.99</strong></h3>
              <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
          <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
          <ul class="menu--mobile">
            <li><a href="#">Hot Promotions</a>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
              <div class="mega-menu">
                <div class="mega-menu__column">
                  <h4>Electronic<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="#">Home Audio &amp; Theathers</a>
                    </li>
                    <li><a href="#">TV &amp; Videos</a>
                    </li>
                  </ul>
                </div>
                <div class="mega-menu__column">
                  <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="#">Digital Cables</a>
                    </li>
                    <li><a href="#">Audio &amp; Video Cables</a>
                    </li>
                    <li><a href="#">Batteries</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li><a href="#">Clothing &amp; Apparel</a>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
              <div class="mega-menu">
                <div class="mega-menu__column">
                  <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="#">Computer &amp; Tablets</a>
                    </li>
                    <li><a href="#">Laptop</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li><a href="#">Babies &amp; Moms</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="navigation--list">
        <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
      </div>
      <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
          <form class="ps-form--search-mobile" action="http://nouthemes.net/html/martfury/index.html" method="get">
            <div class="form-group--nest">
              <input class="form-control" type="text" placeholder="Search something...">
              <button><i class="icon-magnifier"></i></button>
            </div>
          </form>
        </div>
        <div class="navigation__content"></div>
      </div>
      <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
          <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
          <ul class="menu--mobile">
            <li class="current-menu-item menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
              <ul class="sub-menu">
                <li><a href="index.html">Marketplace Full Width</a>
                </li>
                <li><a href="homepage-2.html">Home Auto Parts</a>
                </li>
              </ul>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
              <div class="mega-menu">
                <div class="mega-menu__column">
                  <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="shop-default.html">Shop Default</a>
                    </li>
                  </ul>
                </div>
                <div class="mega-menu__column">
                  <h4>Product Layout<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="product-default.html">Default</a>
                    </li>
                  </ul>
                </div>
                <div class="mega-menu__column">
                  <h4>Product Types<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="product-default.html">Simple</a>
                    </li>
                    <li><a href="product-default.html">Color Swatches</a>
                    </li>
                  </ul>
                </div>
                <div class="mega-menu__column">
                  <h4>Woo Pages<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="shopping-cart.html">Shopping Cart</a>
                    </li>
                    <li><a href="checkout.html">Checkout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
              <div class="mega-menu">
                <div class="mega-menu__column">
                  <h4>Basic Page<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="about-us.html">About Us</a>
                    </li>
                  </ul>
                </div>
                <div class="mega-menu__column">
                  <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="become-a-vendor.html">Become a Vendor</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
              <div class="mega-menu">
                <div class="mega-menu__column">
                  <h4>Blog Layout<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="blog-grid.html">Grid</a>
                    </li>
                  </ul>
                </div>
                <div class="mega-menu__column">
                  <h4>Single Blog<span class="sub-toggle"></span></h4>
                  <ul class="mega-menu__list">
                    <li><a href="blog-detail.html">Single 1</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
