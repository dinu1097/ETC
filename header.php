<style>
    .logo-img {
        height: 50px;
        width: auto;
        margin-right: 10px;
        object-fit: contain;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }

    /* DROPDOWN BASE STYLES */
    .nav-item.dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        min-width: 180px;
        padding: 8px 0;
        margin: 0;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.15);
        border-radius: 4px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.175);
        list-style: none;
    }

    /* Active state when dropdown is clicked/opened */
    .dropdown-menu.show {
        display: block !important;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 8px 16px;
        clear: both;
        font-weight: 400;
        color: #333;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
        text-decoration: none;
    }

    .dropdown-item:hover, .dropdown-item:focus {
        color: #262626;
        background-color: #f5f5f5;
    }

    /* NESTED SUBMENU STYLES */
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-submenu > a::after {
        display: inline-block;
        float: right;
        margin-top: 6px;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid;
    }

    /* MOBILE OVERRIDES (max-width: 991px) */
    @media (max-width: 991px) {
        #rtc-mobile-menu .dropdown-menu {
            position: static !important;
            float: none;
            box-shadow: none;
            border: none;
            padding-left: 15px;
            background-color: #f9f9f9;
        }

        .dropdown-submenu > .dropdown-menu {
            top: auto;
            left: auto;
        }

        .dropdown-submenu > a::after {
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<section class="w3l-top-header">
    <div class="container">
        <div class="top-header-2">
            <div class="d-grid main-top">
                <div class="top-headers">
                    <ul class="left-info">
                        <li>
                            <span class="fa fa-phone"></span>
                            <a href="tel:+91-97183 75053">+91 8285709694</a>
                        </li>
                        <li>
                            <!-- <a href="#help" class="d-md-block d-none">+91 9818000016 9654554492</a> -->
                        </li>
                        <li>
                            <a href="mailto:sales@rtcgensets.com" class="d-md-block d-none">rtcgensets2010@gmail.com /  rtcgensets10@gmail.com</a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=9718375053&text&type=phone_number&app_absent=0" class="d-md-block d-none">
                                <i class="fa fa-whatsapp"></i> WhatsApp
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top-headers">
                    <ul>
                        <li>
                            <a href="https://www.indiamart.com/rtc-gensets-gurgaon/" style="display: inline-flex; align-items: center; gap: 8px;" title="IndiaMART" aria-label="IndiaMART">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span>Indiamart</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<header id="site-header" class="fixed-top px-lg-5 px-3">
    <section class="w3l-header-4">
        <div class="container-fluid px-0">

        <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-between align-items-center px-0">

    <h1 class="m-0 p-0">
        <a class="navbar-brand d-flex align-items-center m-0 p-0" href="index.html">
            <img src="https://dinu1097.github.io/ETC/assets/logo.jpeg" alt="RTC Gensets Logo" class="logo-img">
            <span>RTC GENSETS</span>
        </a>
    </h1>

    <div class="d-flex align-items-center m-0 p-0">

        <div id="rtc-mobile-menu">
            <ul class="navbar-nav d-flex align-items-center mb-0 p-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">About</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services.php" id="servicesDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="services.php#sale">• Sales</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="silent-generators-in-gurgaon.php">• Silent Generators</a></li>
                                <li><a class="dropdown-item" href="cpcb-generators-in-gurgaon.php">• Central Pollution Control Board IV+ Compliant</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="services.php#annual-maintenance-contract">• Annual Maintenance Contract</a></li>
                        <li><a class="dropdown-item" href="services.php#buyback">• Buy Back Old Diesel Generator</a></li>
                        <li><a class="dropdown-item" href="services.php#support">• 24x7 Customer Support</a></li>
                        <li><a class="dropdown-item" href="services.php#rental">• Generator Rentals</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="panels.php" id="panelsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Control Panels
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="panelsDropdown">
                        <li><a class="dropdown-item" href="panels.php#auto-main-failure">• Auto Main Failure Panels</a></li>
                        <li><a class="dropdown-item" href="panels.php#auto-transfer-switch">• Automatic Transfer Switch</a></li>
                        <li><a class="dropdown-item" href="panels.php#mains-distribution-panel">• Mains Distribution Panel</a></li>
                        <li><a class="dropdown-item" href="panels.php#low-tension-panels">• Low Tension Panels</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="ic.php" id="icDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Installation & Commissioning
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="icDropdown">
                        <li><a class="dropdown-item" href="ic.php#earthing">• Earthing System</a></li>
                        <li><a class="dropdown-item" href="ic.php#pipe-chemical">• Pipe and Chemical Earthing</a></li>
                        <li><a class="dropdown-item" href="ic.php#exhaust-pipe">• Exhaust Pipe Line</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <button type="button" id="rtc-mobile-button" aria-label="Toggle navigation" aria-expanded="false">
            <span class="fa fa-bars rtc-bars"></span>
            <span class="fa fa-times rtc-close"></span>
        </button>
    </section>
</header>

<style>
#rtc-mobile-button {
    display: none;
}

#rtc-mobile-button .rtc-close {
    display: none;
}

@media (max-width: 991px) {
    #site-header .navbar {
        position: relative;
    }

    #rtc-mobile-button {
        display: flex;
        background: red;
        border: none;
        width: 50px;
        height: 45px;
        padding: 0;
        align-items: center;
        justify-content: center;
        border-radius: 3px;
        cursor: pointer;
    }

    #rtc-mobile-button .rtc-bars,
    #rtc-mobile-button .rtc-close {
        color: white;
        font-size: 24px;
    }

    #rtc-mobile-button.rtc-open .rtc-bars {
        display: none;
    }

    #rtc-mobile-button.rtc-open .rtc-close {
        display: inline-block;
    }

    #rtc-mobile-menu {
        display: none !important;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        width: 100%;
        background: #fff;
        padding: 15px 20px;
        z-index: 100000;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        
    }

    #rtc-mobile-menu.rtc-menu-open {
        display: block !important;
    }

    #rtc-mobile-menu .navbar-nav {
        display: block;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    #rtc-mobile-menu .nav-item {
        display: block;
        width: 100%;
        margin: 0;
    }

    #rtc-mobile-menu .nav-link {
        display: block;
        width: 100%;
        padding: 13px 5px;
        border-bottom: 1px solid #eee;
        text-decoration: none;
    }

    #rtc-mobile-menu .nav-item:last-child .nav-link {
        border-bottom: 0;
    }
    /* 1. Main Navigation Links (Home, About Us, Services, Control Panels, Installation & Commissioning) */
    #rtc-mobile-menu .nav-link {
        font-size: 14px !important; /* Adjust default 16px down to 14px or desired value */
    }

    /* 2. Primary Dropdown Submenu Links (Sales, Annual Maintenance Contract, etc.) */
    #rtc-mobile-menu .dropdown-menu .dropdown-item {
        font-size: 13px !important; /* Adjust down for deeper hierarchy */
    }

    /* 3. Nested Submenu Links (Silent Generators, CPCB IV+ Compliant) */
    #rtc-mobile-menu .dropdown-submenu .dropdown-menu .dropdown-item {
        font-size: 12px !important; 
    }
}

@media (max-width: 576px) {
    #site-header .navbar {
        padding-left: 10px;
        padding-right: 10px;
    }

    .logo-img {
        height: 45px;
    }

    .navbar-brand span {
        font-size: 18px;
    }

    #rtc-mobile-button {
        font-size: 25px;
    }
}
</style>

<script>
(function () {
    function initializeRTCNavbar() {
        var button = document.getElementById("rtc-mobile-button");
        var menu = document.getElementById("rtc-mobile-menu");

        if (!button || !menu) return;

        if (button.getAttribute("data-navbar-ready") === "true") return;
        button.setAttribute("data-navbar-ready", "true");

        /* Hamburger Toggle */
        button.addEventListener("click", function (event) {
            event.preventDefault();
            event.stopPropagation();
            var open = menu.classList.contains("rtc-menu-open");

            if (open) {
                menu.classList.remove("rtc-menu-open");
                button.classList.remove("rtc-open");
                button.setAttribute("aria-expanded", "false");
            } else {
                menu.classList.add("rtc-menu-open");
                button.classList.add("rtc-open");
                button.setAttribute("aria-expanded", "true");
            }
        });

        /* Click handler for all dropdown toggles */
        var dropdownToggles = menu.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach(function (toggle) {
            toggle.addEventListener('click', function (e) {
                var isMobile = window.innerWidth <= 991;
                var subMenu = this.nextElementSibling;

                if (subMenu && subMenu.classList.contains('dropdown-menu')) {
                    // Prevent navigation on first click to reveal menu
                    if (!subMenu.classList.contains('show')) {
                        e.preventDefault();
                        e.stopPropagation();

                        // Close sibling menus at the same depth level
                        var parentContainer = this.closest('.dropdown-menu') || menu;
                        var openSiblings = parentContainer.querySelectorAll(':scope > .dropdown > .dropdown-menu.show, :scope > .dropdown-submenu > .dropdown-menu.show');
                        openSiblings.forEach(function (openMenu) {
                            openMenu.classList.remove('show');
                        });

                        subMenu.classList.add('show');
                    }
                    // If already open and clicked again, let normal link navigation proceed
                }
            });
        });

        /* Close mobile drawer when selecting leaf links */
        var leafLinks = menu.querySelectorAll("a:not(.dropdown-toggle)");
        leafLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                menu.classList.remove("rtc-menu-open");
                button.classList.remove("rtc-open");
                button.setAttribute("aria-expanded", "false");
            });
        });

        /* Close all open dropdowns when clicking outside */
        document.addEventListener("click", function (event) {
            if (!menu.contains(event.target) && !button.contains(event.target)) {
                menu.classList.remove("rtc-menu-open");
                button.classList.remove("rtc-open");
                button.setAttribute("aria-expanded", "false");

                var allMenus = menu.querySelectorAll('.dropdown-menu.show');
                allMenus.forEach(function (m) {
                    m.classList.remove('show');
                });
            }
        });

        /* Reset state when resizing viewport */
        window.addEventListener("resize", function () {
            menu.classList.remove("rtc-menu-open");
            button.classList.remove("rtc-open");
            button.setAttribute("aria-expanded", "false");
            
            var allMenus = menu.querySelectorAll('.dropdown-menu.show');
            allMenus.forEach(function (m) {
                m.classList.remove('show');
            });
        });
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initializeRTCNavbar);
    } else {
        initializeRTCNavbar();
    }
})();
</script>

<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });
</script>