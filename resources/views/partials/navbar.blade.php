<header class="sticky-header d-none d-xl-block">
    <!-- Top Bar -->
    <div class="top-bar d-none d-md-block">
        <div class="container d-flex justify-content-between">
            <div>
                <a class="text-white text-decoration-none me-4" href="#"><i class="fa-solid fa-location-dot me-1"></i> Pharmacy Locations</a>
                <a class="text-white text-decoration-none" href="#"><i class="fa-solid fa-headset me-1"></i> Contact Pharmacist</a>
            </div>
            <div>
                <span>Envíos gratis en pedidos mayores a $50</span>
            </div>
        </div>
    </div>
    <!-- Main Navbar -->
    <nav class="glass-nav py-3">
        <div class="container-xxl d-flex align-items-center gap-4">
            <!-- Logo -->
            <a class="navbar-brand me-0" href="/">
                <h5>Medical Drug</h5>
                <!-- <img alt="FarmaLux" height="40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCra1tp5egq0T9RK-YleWzdfV80uio_WShUnCDnY54vaQwDbgwXcqZYualDSutOl8zISLpiqDL6sY6UeQTuqw-sbqlrotb8btU61j4i5_RziXXUum6Hzm-gkHsPUseHF2Yw4nhBlRNppu_-zUO5U7I_A51NOBRq3g1js6JhznB5VsFEvkCPn1I5mlSelYXUyrJj0Z49_0x-MDh2DGxxrSs0V8STi3dtNrc6lrTGDqxRYqtasNjC5PYg0A" /> -->
            </a>

            <div class="mega-menu-wrapper d-none d-lg-block">

                <button class="btn btn-primary category-btn">
                    <i class="fa-solid fa-bars me-2"></i>
                    Categorías
                    <i class="fa-solid fa-chevron-down ms-auto"></i>
                </button>

                <div class="mega-menu">

                    <!-- Columna izquierda -->
                    <div class="mega-sidebar">

                        <a href="#" class="mega-item active" data-target="medicamentos">
                            <div>
                                <i class="fa-solid fa-capsules"></i>
                                Medicamentos
                            </div>

                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                        <a href="#" class="mega-item" data-target="dermo">
                            <div>
                                <i class="fa-solid fa-pump-soap"></i>
                                Dermocosmética
                            </div>

                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                        <a href="#" class="mega-item" data-target="bebes">
                            <div>
                                <i class="fa-solid fa-baby"></i>
                                Bebés
                            </div>

                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                        <a href="#" class="mega-item" data-target="vitaminas">
                            <div>
                                <i class="fa-solid fa-pills"></i>
                                Vitaminas
                            </div>

                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                        <a href="#" class="mega-item" data-target="sexual">
                            <div>
                                <i class="fa-solid fa-heart-pulse"></i>
                                Salud Sexual
                            </div>

                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                        <a href="#" class="mega-item" data-target="equipos">
                            <div>
                                <i class="fa-solid fa-stethoscope"></i>
                                Equipos Médicos
                            </div>

                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                    </div>

                    <!-- Panel Derecho -->
                    <div class="mega-content">

                        <div class="submenu active" id="medicamentos">

                            <h5>Medicamentos</h5>

                            <div class="submenu-grid">

                                <a href="#">Analgésicos</a>
                                <a href="#">Antigripales</a>
                                <a href="#">Antibióticos</a>
                                <a href="#">Digestivos</a>
                                <a href="#">Diabetes</a>
                                <a href="#">Cardiología</a>
                                <a href="#">Dermatológicos</a>
                                <a href="#">Presión Arterial</a>
                                <a href="#">Respiratorios</a>
                                <a href="#">Neurología</a>

                            </div>

                        </div>

                        <div class="submenu" id="dermo">

                            <h5>Dermocosmética</h5>

                            <div class="submenu-grid">

                                <a href="#">Protector Solar</a>
                                <a href="#">Serums</a>
                                <a href="#">Cremas</a>
                                <a href="#">Limpieza Facial</a>
                                <a href="#">Anti Edad</a>
                                <a href="#">Contorno de Ojos</a>

                            </div>

                        </div>

                        <div class="submenu" id="bebes">

                            <h5>Bebés</h5>

                            <div class="submenu-grid">

                                <a href="#">Pañales</a>
                                <a href="#">Toallas Húmedas</a>
                                <a href="#">Fórmulas</a>
                                <a href="#">Biberones</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- Search Bar -->
            <div class="search-container">
                <input class="search-input" placeholder="¿Qué necesitas hoy? (Ej. Paracetamol, Eucerin...)" type="text" />
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
            </div>
            <!-- Actions -->
            <div class="d-flex align-items-center gap-4">
                <a class="nav-action-btn position-relative" href="{{route('tienda')}}">
                    <i class="fa-solid fa-store"></i>
                    <span>Tienda</span>
                </a>
                <a class="nav-action-btn" href="{{route('about')}}">
                    <i class="fa-solid fa-building"></i>
                    <span>Nosotros</span>
                </a>
                @auth
                <div class="dropdown d-none d-md-block">
                    <a class="nav-action-btn dropdown-toggle text-decoration-none"
                    href="#"
                    data-bs-toggle="dropdown">

                        <i class="fa-solid fa-circle-user"></i>
                        <span>{{ Str::limit(Auth::user()->name,8) }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-4 mt-2">

                        <li>
                            <a class="dropdown-item py-2" href="{{ route('profile') }}">
                                <i class="fa-regular fa-user me-2"></i> Mi Perfil
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item py-2" href="{{ route('orders') }}">
                                <i class="fa-solid fa-box me-2"></i> Mis Pedidos
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger py-2">
                                    <i class="fa-solid fa-right-from-bracket me-2"></i>
                                    Cerrar sesión
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
                @else
                <a class="nav-action-btn d-none d-md-flex"
                href="#"
                data-bs-toggle="modal"
                data-bs-target="#loginModal">

                    <i class="fa-regular fa-user"></i>
                    <span>Login</span>

                </a>
                @endauth
                <a class="nav-action-btn position-relative bg-light p-2 rounded-3 border" href="#" data-bs-target="#cartOffcanvas" data-bs-toggle="offcanvas">
                    <i class="fa-solid fa-basket-shopping text-primary"></i>
                    <span>Carrito</span>
                    <span class="position-absolute top-0 end-0 badge rounded-pill bg-secondary border border-white" style="font-size: 9px; margin-top: -5px; margin-right: -5px;">0</span>
                </a>
            </div>
        </div>
    </nav>
</header>

<header class="mobile-header d-xl-none">

    <div class="container-fluid px-3">

        <div class="mobile-header-top">

            <!-- Botón menú -->

            <button class="mobile-icon"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu">

                <i class="fa-solid fa-bars"></i>

            </button>

            <!-- Logo -->

            <a href="/" class="mobile-logo">

                <h5 class="mb-0 fw-bold">
                    Medical Drug
                </h5>

            </a>

            <!-- Carrito -->

            <a href="#"
                class="mobile-cart"
                data-bs-toggle="offcanvas"
                data-bs-target="#cartOffcanvas">

                <i class="fa-solid fa-basket-shopping"></i>

                <span class="cart-badge">

                    3

                </span>

            </a>

        </div>

        <!-- Buscador -->

        <!-- <div class="mobile-search">

            <div class="search-container w-100">

                <input
                    type="text"
                    class="search-input"
                    placeholder="Buscar medicamentos...">

                <i class="fa-solid fa-magnifying-glass search-icon"></i>

            </div>

        </div> -->

    </div>

</header>


<!-- ===========================
     MOBILE MENU OFFCANVAS
=========================== -->
<div class="offcanvas offcanvas-start mobile-menu-offcanvas"
    tabindex="-1"
    id="mobileMenu">

    <!-- Header -->

    <div class="offcanvas-header border-bottom">

        <div>

            <h5 class="mb-1 fw-bold">
                Medical Drug
            </h5>

            <small class="text-muted">
                Bienvenido
            </small>

        </div>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas">
        </button>

    </div>

    <!-- Body -->

    <div class="offcanvas-body p-0 d-flex flex-column h-100">

        <!-- HERO -->

        <!-- <div class="mobile-menu-hero">

            <div class="hero-avatar">

                <i class="fa-regular fa-user"></i>

            </div>

            <h5 class="mb-1 mt-3">
                Bienvenido
            </h5>

            <p class="mb-0">
                Compra medicamentos de forma rápida y segura.
            </p>

            <div class="hero-buttons">

                <a href="#" class="btn btn-primary">
                    Iniciar Sesión
                </a>

                <a href="#" class="btn btn-light">
                    Registrarse
                </a>

            </div>

        </div> -->

        <!-- MENU -->

        <div class="mobile-menu-section">

            <div class="menu-title">

                NAVEGACIÓN

            </div>

            <a href="/" class="menu-link active">

                <div>

                    <div class="menu-icon">

                        <i class="fa-solid fa-house"></i>

                    </div>

                    Inicio

                </div>

            </a>

            <a href="{{ route('tienda') }}" class="menu-link">

                <div>

                    <div class="menu-icon">

                        <i class="fa-solid fa-store"></i>

                    </div>

                    Tienda

                </div>

            </a>

            <button
                class="menu-link border-0 bg-transparent w-100"
                data-bs-toggle="collapse"
                data-bs-target="#mobileCategories">

                <div>

                    <div class="menu-icon">

                        <i class="fa-solid fa-bars"></i>

                    </div>

                    Categorías

                </div>

                <i class="fa-solid fa-chevron-down"></i>

            </button>

            <div class="collapse" id="mobileCategories">

                <div class="submenu-mobile">

                    <a href="#">💊 Medicamentos</a>

                    <a href="#">🧴 Dermocosmética</a>

                    <a href="#">👶 Bebés</a>

                    <a href="#">💪 Vitaminas</a>

                    <a href="#">❤️ Salud Sexual</a>

                    <a href="#">🩺 Equipos Médicos</a>

                </div>

            </div>

            <a href="{{ route('about') }}" class="menu-link">

                <div>

                    <div class="menu-icon">

                        <i class="fa-solid fa-building"></i>

                    </div>

                    Nosotros

                </div>

            </a>

            @auth

            <a href="{{ route('profile') }}" class="menu-link">

                <div>
                    <div class="menu-icon">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>

                    {{ Auth::user()->name }}
                </div>

            </a>

            @else

            <button class="menu-link border-0 bg-transparent w-100"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal">

                <div>
                    <div class="menu-icon">
                        <i class="fa-regular fa-user"></i>
                    </div>

                    Login
                </div>

            </button>

            @endauth

            <a href="#"
                class="menu-link"
                data-bs-toggle="offcanvas"
                data-bs-target="#cartOffcanvas">

                <div>

                    <div class="menu-icon">

                        <i class="fa-solid fa-basket-shopping"></i>

                    </div>

                    Mi Carrito

                </div>

                <span class="badge bg-primary rounded-pill">

                    3

                </span>

            </a>

        </div>

        <!-- INFORMACIÓN -->

        <div class="mobile-menu-section">

            <div class="menu-title">

                AYUDA

            </div>

            <a href="#" class="menu-link">

                <div>

                    <div class="menu-icon">

                        <i class="fa-brands fa-whatsapp"></i>

                    </div>

                    WhatsApp

                </div>

            </a>

            <a href="#" class="menu-link">

                <div>

                    <div class="menu-icon">

                        <i class="fa-solid fa-phone"></i>

                    </div>

                    Teléfono

                </div>

            </a>

            <a href="#" class="menu-link">

                <div>

                    <div class="menu-icon">

                        <i class="fa-solid fa-envelope"></i>

                    </div>

                    Correo

                </div>

            </a>

        </div>

        <div class="mt-auto p-4 text-center text-muted">

            Medical Drug

            <br>

            <small>

                © 2026 Todos los derechos reservados.

            </small>

        </div>

    </div>

</div>