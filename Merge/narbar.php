
<!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="logo.png" width="160" height="36" alt="Logo">
                        </a>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                
                        <div class="header-right">
                            <form class="header-search-form for-des" onsubmit="searchFunction(event)">
                                <input type="text" class="form-input" id="find" placeholder="Search menu..." autocomplete="off">
                                <button type="submit">
                                    <i class="uil uil-search"></i>
                                </button>
                                <div class="result-box"></div>
                            </form>
                            <a class="header-btn header-cart" onclick="toggleCart()">
                                <i class="uil uil-shopping-bag"></i>
                                <span class="cart-number" id="cartNumber">0</span>
                            </a>
                            <div id="cartSidebar" class="cart-sidebar">
                                <span class="close-cart-btn" onclick="toggleCart()">&times;</span>
                                <h2>Your Cart</h2>
                                <ul id="cartItemList"></ul>
                                <p>Total: PHP <span id="cartTotal">0</span></p>
                                <button class="checkout-button" onclick="window.location.href='checkout.html'">Check out</button>
                            </div>
                        </div>

                            <a class="header-btn">
                                <i class="uil uil-user-md" onclick="window.location.href="auth.php?action=login"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- header ends  -->