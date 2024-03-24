<header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
        <div class="container">

            <ul class="header-top-list">

                <li>
                    <a href="mailto:info@homeverse.com" class="header-top-link">
                        <ion-icon name="mail-outline"></ion-icon>

                        <span>info@homeverse.com</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="header-top-link">
                        <ion-icon name="location-outline"></ion-icon>

                        <address>15/A, Nest Tower, NYC</address>
                    </a>
                </li>

            </ul>

            <div class="wrapper">
                <ul class="header-top-social-list">

                    <li>
                        <a href="#" class="header-top-social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="header-top-social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="header-top-social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="header-top-social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>

                </ul>

                <button class="header-top-btn">Add Listing</button>
            </div>

        </div>
    </div>

    <div class="header-bottom">
        <div class="container">

            <a href="#" class="logo">
                <img src="./assets/images/logo.png" alt="Homeverse logo">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="#" class="logo">
                        <img src="./assets/images/logo.png" alt="Homeverse logo">
                    </a>

                    <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <div class="navbar-bottom">
                    <ul class="navbar-list">

                        <li>
                            <a href="#home" class="navbar-link" data-nav-link>Home</a>
                        </li>

                        <li>
                            <a href="#about" class="navbar-link" data-nav-link>About</a>
                        </li>

                        <li>
                            <a href="#service" class="navbar-link" data-nav-link>Service</a>
                        </li>

                        <li>
                            <a href="#property" class="navbar-link" data-nav-link>Property</a>
                        </li>

                        <li>
                            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
                        </li>

                        <li>
                            <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
                        </li>

                    </ul>
                </div>

            </nav>

            <div class="header-bottom-actions">

                <button class="header-bottom-actions-btn" aria-label="Search">
                    <ion-icon name="search-outline"></ion-icon>

                    <span>Search</span>
                </button>

                <button id="auth-redirect" class="header-bottom-actions-btn" aria-label="Profile">
                    <ion-icon name="person-outline"></ion-icon>

                    <span>Profile</span>
                </button>

                <button class="header-bottom-actions-btn" aria-label="Cart">
                    <ion-icon name="cart-outline"></ion-icon>

                    <span>Cart</span>
                </button>

                <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
                    <ion-icon name="menu-outline"></ion-icon>

                    <span>Menu</span>
                </button>

            </div>

        </div>
    </div>

</header>

<script>
    const authRedirect = document.getElementById('auth-redirect');

    authRedirect.addEventListener('click', () => {
        window.location.href = '/login';
    });
</script>
