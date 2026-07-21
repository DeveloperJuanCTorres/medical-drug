@extends('layouts.app')
<style>     

    /* Hero Styling */
    .hero-section {
        position: relative;
        height: 614px;
        min-height: 500px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .hero-gradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(rgba(0, 97, 106, 0.7), rgba(0, 97, 106, 0.85));
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: white;
    }

    

   

</style>
@section('content')

<!-- 2. Hero Section -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBCspyD79QWjCu6rOLruVrGK-AfGktY6qfOsNjkUcl6CyDB2Terx_nl36egHSIoRkI6b-FxGA3kvHgsvFu0qJUriQLAfzfp2w0gaJanczEYeGoRh7Z8J5pPSRzgoZNpvqTJ4Ua11i0XufvahgnW-e_QvtOxqBDwwoN6fVhdQbWSIg8Y_AncFPvGz6_6cQ39PCfB1c3IzENYERLUaswiQJwgqBd70NeejeP3n0Miu8CqUv3U83rHHz9T9w')"></div>
    <div class="hero-gradient"></div>
    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="display-4 fw-bold font-manrope mb-4">Comprometidos con tu Bienestar</h1>
                <p class="fs-5 opacity-90 mb-5 lh-lg">
                    FarmaLux es el referente de innovación farmacéutica en Perú. Con más de 15 años de trayectoria, lideramos el camino hacia una salud más accesible, tecnológica y humana.
                </p>
                <button class="btn btn-custom btn-secondary-custom shadow-sm">Conocer Más</button>
            </div>
        </div>
    </div>
</section>
<!-- 3. Nuestra Historia -->
<section class="py-5 my-5 bg-surface">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="position-relative rounded-5 overflow-hidden shadow-lg">
                    <img class="img-fluid w-100 transition-transform" data-alt="A professional team of Peruvian pharmacists" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3f1RqFj9UueM3o8sggTOsJfoB2D10AA2K9NoBly7pXkQZQlk_hdIGj8o-9U6-b3syXaioi6weetLMu24ZsMstQZfQM6Ab2NB5CiH5lbQOU3E7bJHbS4JJ-8HPX0ZhOgf_LICHNCMLUtAajgehwpKkqDjxRd2xP6XeudiqEe6jJ2JUKhDlpHLojBt807V15-MabnlCreW-QZF5x3SqA7Icl5DPaV3ORlvmZ9PjbapumAvAP2HVs9SAyQ" />
                    <div class="position-absolute bottom-0 end-0 m-4 bg-white bg-opacity-75 p-4 rounded-4 border border-white" style="backdrop-filter: blur(10px);">
                        <span class="text-primary-brand fw-bold fs-1 d-block">15+</span>
                        <span class="text-muted text-uppercase small fw-bold tracking-wider">Años de Confianza</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="font-manrope fw-bold text-primary-brand mb-4">Nuestra Historia</h2>
                <div class="text-secondary lh-lg mb-4">
                    <p>
                        Medical Drug nació en el corazón de Lima con una visión clara: transformar la experiencia de adquisición de medicamentos a través de la digitalización y el trato personalizado. Lo que comenzó como una pequeña botica especializada se ha convertido en una red logística de alta complejidad.
                    </p>
                    <p>
                        Nuestra evolución ha estado marcada por la implementación de tecnologías de punta en almacenamiento y distribución, garantizando que cada producto mantenga su integridad desde el laboratorio hasta las manos de nuestros pacientes.
                    </p>
                    <p class="fw-semibold text-primary-brand">
                        Hoy, Medical Drug no es solo una farmacia; es un ecosistema de salud diseñado para el Perú de 2026.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 4. Propósito y Fundamentos -->
<section class="py-5 bg-light">
    <div class="container py-lg-5">
        <div class="text-center mb-5 pb-3">
            <h2 class="font-manrope fw-bold text-primary-brand">Propósito y Fundamentos</h2>
            <p class="text-muted">Los pilares que sostienen nuestro compromiso diario.</p>
        </div>
        <div class="row g-4">
            <!-- Misión -->
            <div class="col-md-4">
                <div class="card h-100 border-0 p-4 p-lg-5 rounded-4xl card-elevation-1 text-center">
                    <div class="icon-box bg-primary-container text-white mx-auto mb-4">
                        <i class="fa-solid fa-bullseye fs-3"></i>
                    </div>
                    <h3 class="font-manrope h4 fw-bold text-primary-brand mb-3">Misión</h3>
                    <p class="text-muted small">
                        Facilitar el acceso a soluciones de salud premium mediante innovación tecnológica y excelencia operativa, mejorando la calidad de vida de todos los peruanos.
                    </p>
                </div>
            </div>
            <!-- Visión -->
            <div class="col-md-4">
                <div class="card h-100 border-0 p-4 p-lg-5 rounded-4xl card-elevation-1 text-center">
                    <div class="icon-box bg-secondary-container text-secondary-container mx-auto mb-4">
                        <i class="fa-solid fa-eye fs-3"></i>
                    </div>
                    <h3 class="font-manrope h4 fw-bold text-primary-brand mb-3">Visión</h3>
                    <p class="text-muted small">
                        Ser la plataforma de salud líder y más confiable de la región, reconocida por nuestra agilidad digital y compromiso inquebrantable con la ética farmacéutica.
                    </p>
                </div>
            </div>
            <!-- Valores -->
            <div class="col-md-4">
                <div class="card h-100 border-0 p-4 p-lg-5 rounded-4xl bg-primary-brand text-white shadow-lg">
                    <h3 class="font-manrope h4 fw-bold mb-5 text-center">Nuestros Valores</h3>
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex gap-3">
                            <i class="fa-solid fa-hand-holding-heart fs-4 text-info"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Humanidad</h4>
                                <p class="small opacity-75 mb-0">El paciente es siempre el centro de nuestras decisiones.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="fa-solid fa-microchip fs-4 text-info"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Innovación</h4>
                                <p class="small opacity-75 mb-0">Abrazamos la tecnología para optimizar procesos.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="fa-solid fa-shield-halved fs-4 text-info"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Integridad</h4>
                                <p class="small opacity-75 mb-0">Ética rigurosa en el manejo de productos y datos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 5. Compromiso de Calidad -->
<section class="py-5 position-relative overflow-hidden">
    <div class="container py-lg-5 position-relative z-1">
        <div class="bg-white border border-light-subtle rounded-5xl p-4 p-md-5 p-lg-5 shadow-sm">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 bg-light text-primary-brand px-3 py-1 rounded-pill mb-4">
                        <i class="fa-solid fa-circle-check fs-6"></i>
                        <span class="small fw-bold text-uppercase tracking-widest">Garantía Certificada</span>
                    </div>
                    <h2 class="font-manrope fw-bold text-primary-brand mb-4">Compromiso de Calidad Medical Drug</h2>
                    <p class="text-secondary mb-5 lh-lg">
                        Nuestros procesos están auditados bajo los más estrictos estándares internacionales. No solo entregamos medicinas, entregamos seguridad y confianza en cada envase.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="bg-light p-3 rounded-4 d-flex align-items-center gap-3">
                                <div class="bg-white text-success rounded-circle p-2 shadow-sm">
                                    <i class="fa-solid fa-check small"></i>
                                </div>
                                <span class="fw-bold small">BPA Certificado</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-light p-3 rounded-4 d-flex align-items-center gap-3">
                                <div class="bg-white text-success rounded-circle p-2 shadow-sm">
                                    <i class="fa-solid fa-check small"></i>
                                </div>
                                <span class="fw-bold small">Registro DIGEMID</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="bg-white rounded-4 p-4 text-center border border-light-subtle h-100 d-flex flex-column align-items-center justify-content-center">
                                <img class="img-fluid mb-3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsj4i_8LNANujiTpSjiYCEzUydXBSK52btXIIbiJGSOhvWwLfTQxEOoHfdoU7vj53blaqMUE7s41w_20kk9iQ3HrqyLVS9G4HJa0DeDKG5_jgLCQvO4b1VvUiq67jLWKiJ7DK-Hyvl438YSvgnDxhpusf-UGKJoT4IcFGjz4Yeit7M6ExLy85omVfuNuhoNVK4RyUHuJEv4NWIeXnUwyVgaSsR4AKZoB1_oH4AeA9_PruoCqyhwIcYHg" style="max-width: 100px; opacity: 0.8;" />
                                <p class="small fw-bold text-muted text-uppercase mb-0" style="font-size: 10px;">Buenas Prácticas de Almacenamiento</p>
                            </div>
                        </div>
                        <div class="col-6 pt-5">
                            <div class="bg-white rounded-4 p-4 text-center border border-light-subtle h-100 d-flex flex-column align-items-center justify-content-center">
                                <img class="img-fluid mb-3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4RrRWz7QKtMLxuvtwkkmyUuLstJBQAI2z0r-X-bfn_A5v_TQr3ox0BygJlWYBJsZTt6YDeHfPndUm6PnXGDp4q6KgU1NxuOr3fRtX9DA4CosUgCkj4vkJLaYD1vyaOoaBf0MSat1lzRI5VlCFwlhOgYM-zE_0RydTb-FzJB90wu4A6qrP2BgNk6-P4oyAY-ijhDjQoJ910W8G4GUmCFC20d2B-i3eF66bceMTrPTHWkI2S-3DB9CbKw" style="max-width: 100px; opacity: 0.8;" />
                                <p class="small fw-bold text-muted text-uppercase mb-0" style="font-size: 10px;">Autorización Sanitaria DIGEMID</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute bottom-0 end-0 translate-middle-y bg-info opacity-10 rounded-circle" style="width: 400px; height: 400px; filter: blur(100px); z-index: 0;"></div>
</section>

@endsection



