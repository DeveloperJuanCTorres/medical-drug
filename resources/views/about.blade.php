@extends('layouts.app')
<style>
    :root {
        --primary-color: #003f7c;
        --primary-container: #0056a6;
        --secondary-container: #95bdfd;
        --cta-red: #E53935;
        --cta-red-hover: #C62828;
        --surface-light: #F7FAFC;
        --on-surface: #111c2c;
        --on-surface-variant: #424751;
        --inverse-surface: #263142;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--surface-light);
        color: var(--on-surface);
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    h4,
    .font-display {
        font-family: 'Poppins', sans-serif;
    }

    .text-primary-custom {
        color: var(--primary-color);
    }

    .bg-primary-custom {
        background-color: var(--primary-color);
    }

    .bg-cta-red {
        background-color: var(--cta-red);
        border-color: var(--cta-red);
    }

    .bg-cta-red:hover {
        background-color: var(--cta-red-hover);
        border-color: var(--cta-red-hover);
    }

    .glass-header {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .stats-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 59, 115, 0.08) !important;
    }

    .hero-section {
        height: 480px;
        position: relative;
        display: flex;
        align-items: center;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(0, 63, 124, 0.9) 0%, rgba(0, 63, 124, 0.4) 100%);
        z-index: 1;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .float-anim {
        animation: float 6s ease-in-out infinite;
    }

    .team-member-img {
        transition: transform 0.5s ease;
    }

    .team-group:hover .team-member-img {
        transform: scale(1.1);
    }

    .rounded-4-custom {
        border-radius: 1.5rem !important;
    }

    .nav-link-custom {
        color: var(--on-surface-variant);
        font-weight: 500;
        transition: color 0.2s;
    }

    .nav-link-custom:hover {
        color: var(--primary-color);
    }

    .nav-link-active {
        color: var(--primary-color);
        font-weight: 700;
        border-bottom: 2px solid var(--primary-color);
    }

    .search-input {
        background-color: #f0f3ff;
        border: none;
        border-radius: 50px;
        padding: 0.5rem 1.5rem;
        width: 250px;
    }

    .btn-cart {
        background-color: var(--primary-color);
        color: white;
        border-radius: 50px;
        padding: 0.5rem 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
</style>
@section('content')

<!-- Internal Hero -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCXDpiQ8vEujZxqalHV1lOvEFckYw-gASPLpuPfGJnVnHc0SFxwE7qL8vWuPoYdm9_WJ_YYSsLwJ_0qBH2Nb8eoM4PwLHXovpXc_OsozkIWBRihYXMCZV5xY0H5lEyfE8Y2RCNL1_IBnWB3NG7O5OgJd7_kX89j3xOLlRZyAScLHM7T63irGO66oEwjZuvD_fhFTPeQZumlyDM_sNLVz7csA-PFmoKeOgTFoAqZpdRNvAl-i36WirYaOQ')"></div>
    <div class="hero-overlay"></div>
    <div class="container position-relative z-2 px-4">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white-50 text-decoration-none small fw-semibold" href="#">Inicio</a></li>
                <li aria-current="page" class="breadcrumb-item active text-white small fw-bold">Nosotros</li>
            </ol>
        </nav>
        <h1 class="display-4 fw-bold text-white mb-4" style="max-width: 700px;">
            Innovación y Compromiso con tu <span style="color: var(--secondary-container);">Salud</span>
        </h1>
        <p class="lead text-white-50 mb-0" style="max-width: 600px;">
            Más que una farmacia digital, somos tu aliado en el cuidado integral, combinando precisión clínica con la calidez del trato humano.
        </p>
    </div>
</section>
<!-- Stats Section -->
<section class="container px-4" style="margin-top: -64px; position: relative; z-index: 10;">
    <div class="row g-4">
        <div class="col-6 col-md-3">
            <div class="stats-card bg-white p-4 p-lg-5 rounded-4-custom text-center shadow-sm">
                <span class="d-block h2 fw-bold text-primary-custom mb-1" id="stat-clients">+0</span>
                <p class="small fw-bold text-uppercase tracking-wider text-muted mb-0">Clientes Satisfechos</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="stats-card bg-white p-4 p-lg-5 rounded-4-custom text-center shadow-sm">
                <span class="d-block h2 fw-bold text-primary-custom mb-1" id="stat-products">+0</span>
                <p class="small fw-bold text-uppercase tracking-wider text-muted mb-0">Productos Médicos</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="stats-card bg-white p-4 p-lg-5 rounded-4-custom text-center shadow-sm">
                <span class="d-block h2 fw-bold text-primary-custom mb-1" id="stat-years">0</span>
                <p class="small fw-bold text-uppercase tracking-wider text-muted mb-0">Años de Trayectoria</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="stats-card bg-white p-4 p-lg-5 rounded-4-custom text-center shadow-sm">
                <span class="d-block h2 fw-bold text-primary-custom mb-1" id="stat-sat">0%</span>
                <p class="small fw-bold text-uppercase tracking-wider text-muted mb-0">Tasa de Fidelidad</p>
            </div>
        </div>
    </div>
</section>
<!-- History Section -->
<section class="py-5 my-5">
    <div class="container px-4">
        <div class="row align-items-center g-5">
            <div class="col-md-6 position-relative">
                <div class="rounded-4-custom overflow-hidden shadow-lg" style="aspect-ratio: 1/1;">
                    <div class="w-100 h-100" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjhznq6wWID-RUIpb9wIiP8Sr1pLNwilj9XrQG9dTvNO3wCQsIwV3XHvp1N4kN37KqWmoCL4G-_JVSRWpSQO7DinTvgvVF8xu_qxE7GG6tPNW39DknBzkk6ygbmzO_JY5opXpLCUGJMqZjJNywmO87-Y7xozJEgmAOS9nO-b7-8KK5GCT0uWzTzqIorlfc7Ars48PCxOq4WUTJqNDE0jtyjfr7WXsji80bA6g8P11hCgff4VOPGe_kaQ') center/cover no-repeat;"></div>
                </div>
                <div class="position-absolute bottom-0 end-0 bg-primary-custom rounded-4-custom p-4 text-white shadow-lg float-anim d-flex flex-column align-items-center text-center m-n3 m-md-0" style="width: 180px;">
                    <i class="fa-solid fa-circle-check fs-1 mb-2"></i>
                    <p class="small fw-bold mb-0">Calidad Certificada ISO 9001</p>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-primary-custom mb-4 display-6">Nuestra Trayectoria</h2>
                <p class="text-muted mb-4 lead">
                    Fundada hace más de 15 años, Medical Drug nació con la visión de democratizar el acceso a medicamentos de alta calidad a través de la tecnología. Lo que comenzó como una pequeña farmacia local se ha transformado en un ecosistema de salud digital líder en la región.
                </p>
                <p class="text-muted mb-5">
                    Nuestra infraestructura logística y alianzas estratégicas con los principales laboratorios mundiales nos permiten garantizar la trazabilidad y autenticidad de cada dosis que entregamos en la puerta de tu hogar.
                </p>
                <button class="btn bg-cta-red text-white btn-lg rounded-pill px-5 py-3 fw-bold d-inline-flex align-items-center gap-3">
                    Ver Nuestra Línea de Tiempo
                    <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Pillars Section -->
<section class="py-5 bg-body-tertiary">
    <div class="container py-5 px-4 text-center">
        <h2 class="fw-bold text-primary-custom mb-3">Nuestros Pilares</h2>
        <div class="bg-cta-red mx-auto rounded-pill mb-5" style="height: 6px; width: 80px;"></div>
        <div class="row g-4 text-start">
            <div class="col-md-4">
                <div class="bg-white p-5 rounded-4-custom shadow-sm border h-100 transition-all">
                    <div class="bg-primary-subtle rounded-4-custom d-flex align-items-center justify-content-center mb-4 text-primary-custom" style="width: 64px; height: 64px;">
                        <i class="fa-solid fa-briefcase-medical fs-3"></i>
                    </div>
                    <h3 class="h4 fw-bold text-primary-custom mb-3">Nuestra Misión</h3>
                    <p class="text-muted">Proveer soluciones farmacéuticas confiables y oportunas, mejorando la calidad de vida de nuestros pacientes mediante la innovación digital y el compromiso profesional.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-5 rounded-4-custom shadow-sm border h-100 transition-all">
                    <div class="bg-info-subtle rounded-4-custom d-flex align-items-center justify-content-center mb-4 text-primary-custom" style="width: 64px; height: 64px;">
                        <i class="fa-solid fa-eye fs-3"></i>
                    </div>
                    <h3 class="h4 fw-bold text-primary-custom mb-3">Nuestra Visión</h3>
                    <p class="text-muted">Ser el referente global en farmacia digital, reconocido por la excelencia en el servicio al cliente y la integración de inteligencia artificial en el cuidado de la salud.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-5 rounded-4-custom shadow-sm border h-100 transition-all">
                    <div class="bg-secondary-subtle rounded-4-custom d-flex align-items-center justify-content-center mb-4 text-primary-custom" style="width: 64px; height: 64px;">
                        <i class="fa-solid fa-heart fs-3"></i>
                    </div>
                    <h3 class="h4 fw-bold text-primary-custom mb-3">Nuestros Valores</h3>
                    <p class="text-muted">Integridad, Innovación, Empatía y Responsabilidad. Cada acción que tomamos está guiada por el bienestar del paciente y la ética farmacéutica.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section -->
<section class="py-5 my-5">
    <div class="container px-4">
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-5">
            <div style="max-width: 600px;">
                <h2 class="fw-bold text-primary-custom mb-3">Liderazgo Farmacéutico</h2>
                <p class="text-muted lead">Contamos con un equipo multidisciplinario de expertos comprometidos con los más altos estándares de la industria farmacéutica.</p>
            </div>
            <a class="text-primary-custom fw-bold text-decoration-none d-flex align-items-center gap-2 mb-3 mb-md-0" href="#">
                Unirse al equipo <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="team-group">
                    <div class="rounded-4-custom overflow-hidden mb-4 position-relative" style="aspect-ratio: 4/5;">
                        <div class="team-member-img w-100 h-100" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAEhaw7ZOlzv9nSm_ovYCf41d7YIacw_MEhv1g-xIzwZbEqyvGbBuWdgJAfwYiwJYT1ScTYVGLhRM8RJpfGkGP0Bock6q5gj_1-WewMo7EZuyYZXR_dTJbi-Bq41C2UGJm8S7RNdmduW1y7RyQV_qC3jg8-un2mtiFFBbrMHTdeWXJg0Oy5yOfFo8hvwRYtqGwN7d6z0pJlAOK1c98PEWt4mtm58e_Jz-t3I9QJLCYZmBHKBRkNt-6_AQ') center/cover no-repeat;"></div>
                    </div>
                    <h4 class="h5 fw-bold text-primary-custom mb-1">Dra. Elena Vance</h4>
                    <p class="small fw-bold text-muted text-uppercase mb-2">Directora Técnica</p>
                    <p class="small text-muted mb-0">Especialista en Farmacia Clínica con +20 años en gestión de suministros.</p>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="team-group">
                    <div class="rounded-4-custom overflow-hidden mb-4 position-relative" style="aspect-ratio: 4/5;">
                        <div class="team-member-img w-100 h-100" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB1WpYFtTBn4kZFXkNcK4BU7jHuX8aznSk95VjRn5w7yYd-5txvOquQCZ9V4z9J-82qmlDDgqtMAWsEPl1OFBTJoPdvzG3wtXSzW3AbWWvs_1qIwd-8c6XAugFZ9_orj47l7LJBvqqMW3iCKM4_OLMR08vqT6W0Q3LXBgiJssr8yxpGLoV-33R5s-jdfpyaSk12JMNlZRoHG4ig6G7mi5r-iC1-M1BcxyJiWGosRR2nMA8UHLph2N2KQA') center/cover no-repeat;"></div>
                    </div>
                    <h4 class="h5 fw-bold text-primary-custom mb-1">Dr. Julian Ross</h4>
                    <p class="small fw-bold text-muted text-uppercase mb-2">Jefe de Logística</p>
                    <p class="small text-muted mb-0">Experto en cadena de frío y distribución de alta complejidad.</p>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="team-group">
                    <div class="rounded-4-custom overflow-hidden mb-4 position-relative" style="aspect-ratio: 4/5;">
                        <div class="team-member-img w-100 h-100" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDnJ_mIVDiFOSK7O5iePFs97cmoJaDm8jKxs2U-5k8hmGh16m1c81QzptusbIkeckvrXvSd9qbcpHihmIyc5fgph0VYSZArXQaAxEvvLVXe8GnKUSs7-a3sXofhcERQxWdT_vcsSnLfBBXNUN9ue7YVFtguqAP4LPaejszA2vshtqVGp_qyzS5nY-T84XpUlXBpmknGPkTyhj_p8wDSDZFoCWTu1v6ztogBxkfScIUByFIF4_P1LO7VxA') center/cover no-repeat;"></div>
                    </div>
                    <h4 class="h5 fw-bold text-primary-custom mb-1">Dra. Sarah Chen</h4>
                    <p class="small fw-bold text-muted text-uppercase mb-2">I+D Farmacéutica</p>
                    <p class="small text-muted mb-0">PhD en Química Médica, liderando la innovación en productos OTC.</p>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="team-group">
                    <div class="rounded-4-custom overflow-hidden mb-4 position-relative" style="aspect-ratio: 4/5;">
                        <div class="team-member-img w-100 h-100" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCSNRF5DeZe1J3PcuhCz3bJVoQI4IJ2ShmSVMc_MjNQ8vX-Qw3MywUQAlPiNxGTDNN0RN74VEwGySb2k_BetrSJo32GwtJaav_XVPxsZoNT4GWK2A_lRiXmN2xCewVoi4Lz21nLxpOkgzEte66o74kSZmOrMxwa40yYWIlIOGoSsyU4EuTB9AQH9IuqsBv7ITWm1nKzEHFrG-m8h_6w01hwQydQwslSE18PX8LsdaPTf6-4q9Im7cd8Zg') center/cover no-repeat;"></div>
                    </div>
                    <h4 class="h5 fw-bold text-primary-custom mb-1">Ing. Marco Silva</h4>
                    <p class="small fw-bold text-muted text-uppercase mb-2">Director de TI</p>
                    <p class="small text-muted mb-0">Arquitecto de sistemas enfocado en seguridad de datos de pacientes.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section -->
<section class="container px-4 mb-5 pb-5">
    <div class="bg-primary-custom rounded-4-custom p-5 p-md-5 text-center position-relative overflow-hidden shadow-lg">
        <div class="position-absolute top-0 end-0 bg-white opacity-10 rounded-circle" style="width: 250px; height: 250px; transform: translate(50%, -50%);"></div>
        <div class="position-absolute bottom-0 start-0 bg-white opacity-10 rounded-circle" style="width: 350px; height: 350px; transform: translate(-50%, 50%);"></div>
        <h2 class="display-5 fw-bold text-white mb-5 position-relative z-1">Tu Salud es Nuestra <br />Prioridad Diaria</h2>
        <div class="d-flex flex-column flex-md-row gap-3 justify-content-center position-relative z-1">
            <button class="btn bg-cta-red text-white btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg">Comenzar Compra</button>
            <button class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold">Hablar con Farmacéutico</button>
        </div>
    </div>
</section>

<script>
    // Simple counter animation
    function animateCounter(id, target, suffix = '', duration = 2000) {
        const element = document.getElementById(id);
        if (!element) return;
        let start = 0;
        const increment = target / (duration / 16);

        const update = () => {
            start += increment;
            if (start < target) {
                element.innerText = (id.includes('sat') ? Math.floor(start) : '+' + Math.floor(start).toLocaleString()) + suffix;
                requestAnimationFrame(update);
            } else {
                element.innerText = (id.includes('sat') ? target : '+' + target.toLocaleString()) + suffix;
            }
        };
        update();
    }

    // Intersection Observer to trigger animation when visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter('stat-clients', 10000);
                animateCounter('stat-products', 5000);
                animateCounter('stat-years', 15);
                animateCounter('stat-sat', 98, '%');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    const statsElement = document.getElementById('stat-clients');
    if (statsElement) {
        observer.observe(statsElement.closest('.row'));
    }
</script>

@endsection