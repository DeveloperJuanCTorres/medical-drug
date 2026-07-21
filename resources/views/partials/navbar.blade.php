<header class="sticky-header">
    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block py-2">
        <div class="container-xxl d-flex justify-content-between align-items-center">
            <div class="d-flex gap-4">
                <span><i class="fa-solid fa-truck text-secondary me-1"></i> Delivery Express</span>
                <span><i class="fa-solid fa-globe text-primary me-1"></i> Envíos a todo el Perú</span>
                <span><i class="fa-solid fa-user-shield text-secondary me-1"></i> Compra 100% segura</span>
                <span><i class="fa-solid fa-headset text-primary me-1"></i> Atención 24/7</span>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <a class="text-decoration-none text-muted" href="#"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp</a>
                <a class="text-decoration-none text-muted" href="#">Teléfono</a>
                <a class="text-decoration-none text-muted" href="#">Correo</a>
                <span class="text-muted opacity-25">|</span>
                <a class="text-decoration-none text-muted" href="#">Libro de Reclamaciones</a>
                <a class="text-decoration-none text-muted" href="#">Seguimiento de Pedido</a>
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
                <a class="nav-action-btn d-none d-md-flex" href="#">
                    <i class="fa-regular fa-user"></i>
                    <span>Mi Perfil</span>
                </a>
                <a class="nav-action-btn position-relative bg-light p-2 rounded-3 border" href="#" data-bs-target="#cartOffcanvas" data-bs-toggle="offcanvas">
                    <i class="fa-solid fa-basket-shopping text-primary"></i>
                    <span>Carrito</span>
                    <span class="position-absolute top-0 end-0 badge rounded-pill bg-secondary border border-white" style="font-size: 9px; margin-top: -5px; margin-right: -5px;">0</span>
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Mobile Navigation -->
<nav class="mobile-nav d-lg-none">
    <a class="nav-action-btn text-primary" href="#">
        <i class="fa-solid fa-house"></i>
        <span>Inicio</span>
    </a>
    <a class="nav-action-btn opacity-50" href="#">
        <i class="fa-solid fa-magnifying-glass"></i>
        <span>Explorar</span>
    </a>
    <div style="margin-top: -50px;">
        <button class="btn btn-primary rounded-4 shadow-lg d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
            <i class="fa-solid fa-basket-shopping fs-3"></i>
        </button>
    </div>
    <a class="nav-action-btn opacity-50" href="#">
        <i class="fa-regular fa-heart"></i>
        <span>Favoritos</span>
    </a>
    <a class="nav-action-btn opacity-50" href="#">
        <i class="fa-regular fa-user"></i>
        <span>Perfil</span>
    </a>
</nav>