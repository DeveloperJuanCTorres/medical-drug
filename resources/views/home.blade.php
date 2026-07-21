@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section reveal">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="container-xxl position-relative h-100 d-flex flex-column justify-content-center align-items-start">
        <div class="d-flex align-items-center gap-2 mb-4">
            <div style="width: 48px; height: 2px; background: var(--bs-secondary);"></div>
            <span class="text-secondary fw-bold text-uppercase small tracking-widest">Excelencia Farmacéutica</span>
        </div>
        <h1 class="display-3 text-primary mb-4" style="max-width: 700px; line-height: 1.1;">
            Tu bienestar es <span class="text-secondary font-italic" style="font-style: italic;">nuestra</span> pasión
        </h1>
        <p class="fs-5 text-muted mb-5" style="max-width: 550px;">
            Descubre la nueva experiencia en salud digital. Productos certificados, asesoría experta y entregas en tiempo récord.
        </p>
        <div class="d-flex gap-3">
            <a href="{{route('tienda')}}" class="btn btn-primary px-5 py-3 fs-5 rounded-4 shadow">Comprar ahora</a>
            <button class="btn btn-outline-primary px-5 py-3 fs-5 rounded-4 bg-white bg-opacity-75">Ver ofertas</button>
        </div>
    </div>
</section>
<!-- Quick Access Categories -->
<section class="py-5 container-xxl reveal">
    <div class="row g-4">
        <div class="col-6 col-md-3">
            <a class="product-card-shadow p-5 d-flex flex-column align-items-center text-center text-decoration-none" href="#">
                <div class="rounded-4 mb-4 d-flex align-items-center justify-content-center bg-light" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='inherit'" onmouseover="this.style.backgroundColor='#0A7C86'; this.style.color='white'" style="width: 80px; height: 80px; transition: 0.3s;">
                    <i class="fa-solid fa-capsules fa-2x"></i>
                </div>
                <h3 class="h5 text-dark">Medicamentos</h3>
                <small class="text-muted opacity-0">Ver catálogo completo</small>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a class="product-card-shadow p-5 d-flex flex-column align-items-center text-center text-decoration-none" href="#">
                <div class="rounded-4 mb-4 d-flex align-items-center justify-content-center bg-light" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='inherit'" onmouseover="this.style.backgroundColor='#2CB67D'; this.style.color='white'" style="width: 80px; height: 80px; transition: 0.3s;">
                    <i class="fa-solid fa-face-smile fa-2x"></i>
                </div>
                <h3 class="h5 text-dark">Dermocosmética</h3>
                <small class="text-muted opacity-0">Cuidado de la piel</small>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a class="product-card-shadow p-5 d-flex flex-column align-items-center text-center text-decoration-none" href="#">
                <div class="rounded-4 mb-4 d-flex align-items-center justify-content-center bg-light" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='inherit'" onmouseover="this.style.backgroundColor='#fd7e14'; this.style.color='white'" style="width: 80px; height: 80px; transition: 0.3s;">
                    <i class="fa-solid fa-baby fa-2x"></i>
                </div>
                <h3 class="h5 text-dark">Bebé y Mamá</h3>
                <small class="text-muted opacity-0">Los mejores cuidados</small>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a class="product-card-shadow p-5 d-flex flex-column align-items-center text-center text-decoration-none bg-danger bg-opacity-10 border-danger border-opacity-25" href="#">
                <div class="rounded-4 mb-4 d-flex align-items-center justify-content-center bg-danger bg-opacity-25" style="width: 80px; height: 80px; color: var(--error);">
                    <i class="fa-solid fa-tag fa-2x"></i>
                </div>
                <h3 class="h5 text-danger">Cyber Ofertas</h3>
                <small class="text-danger fw-bold pulse-timer">¡Tiempo limitado!</small>
            </a>
        </div>
    </div>
</section>
<!-- Flash Sales -->
<section class="py-5 bg-white reveal">
    <div class="container-xxl">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div class="d-flex align-items-center gap-4">
                <h2 class="display-6 text-primary mb-0">Ventas Flash</h2>
                <div class="timer-badge">
                    <i class="fa-regular fa-clock fs-6"></i>
                    <span id="timer">04:22:59</span>
                </div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary rounded-circle" style="width: 48px; height: 48px;"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="btn btn-outline-secondary rounded-circle" style="width: 48px; height: 48px;"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="d-flex gap-4 overflow-x-auto no-scrollbar pb-4">
            <!-- Promo 1 -->
            <div class="promo-card">
                <div class="position-absolute inset-0 h-100 w-100" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAr7xDggqVGdfPfq-eNfReD25BxOJiH10nSR10lfHFz_HPYE3Mz_ZW86NIxRqdGQ5D3qCIr-RnGESSKggfv-8iPVgxc4vxDAgIk20UQCorhRAZeuE6MFt80UnYeVXfLCpO1_cARcDKqJJcIC1mjoOhI1DhRc3686ddgIYu2xSOIzvbi2JfLWN6H38Gjf9Axa4-GcidVLY43Q1pTqqsQXH0srDSSmy-hR1-m7lzCLTT7XfRaM38FKwBmRw') center/cover;"></div>
                <div class="position-absolute bottom-0 w-100 p-4" style="background: linear-gradient(to top, rgba(10,124,134,0.95), transparent);">
                    <span class="badge bg-white bg-opacity-25 mb-3">TECNOLOGÍA DE PUNTA</span>
                    <h4 class="text-white h3 mb-2">Cyber FarmaLux</h4>
                    <p class="text-white-50 mb-4 small">Hasta 40% de descuento en marcas premium seleccionadas.</p>
                    <button class="btn btn-light text-primary fw-bold px-4">Descubrir ofertas</button>
                </div>
            </div>
            <!-- Promo 2 -->
            <div class="promo-card">
                <div class="position-absolute inset-0 h-100 w-100" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCHC7k-3rwkCULSm2S3nM9T4vxXdmhmSvaNCNH7hu0NfGsfHi-8exw4YAe2GQsegVjdZxubwFgbpFinuN-HgYpif0IDvXdtRo03SQgWhqVJHZe6tNDgmtDxwzg6-pa3fAMlMG4KcwYbZhHoKM6GnoV2YBvbuwEN61aSZAsFh8LObJe-xv5yquWtMZN3zctDWZLUNc7THa5CbZ1n2MmQFS472-bWBy_TU_3JrMA6UTxkaua06uQ10-0dmw') center/cover;"></div>
                <div class="position-absolute bottom-0 w-100 p-4" style="background: linear-gradient(to top, rgba(44,182,125,0.95), transparent);">
                    <span class="badge bg-white bg-opacity-25 mb-3">PROMOCIÓN EXCLUSIVA</span>
                    <h4 class="text-white h3 mb-2">2x1 en Vitaminas</h4>
                    <p class="text-white-50 mb-4 small">Potencia tu sistema inmune con las mejores marcas.</p>
                    <button class="btn btn-light text-secondary fw-bold px-4">Aprovechar ahora</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Grid -->
<section class="py-5 container-xxl reveal">
    <div class="row align-items-end mb-5">
        <div class="col-md-8">
            <h2 class="display-6 text-primary mb-2">Destacados de la Semana</h2>
            <p class="text-muted">Selección exclusiva de productos con garantía FarmaLux.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <span class="small fw-bold text-muted me-2">Filtrar por:</span>
            <select class="form-select d-inline-block w-auto border-0 bg-light rounded-3 fw-bold text-primary">
                <option>Más Populares</option>
                <option>Precio: Bajo a Alto</option>
                <option>Novedades</option>
            </select>
        </div>
    </div>
    <div class="row g-4">
        <!-- Product 1 -->
        <div class="col-sm-6 col-lg-3">
            <div class="product-card-shadow p-3 position-relative d-flex flex-column h-100">
                <span class="badge-pill bg-secondary text-white position-absolute top-3 start-3 z-1">Stock Disponible</span>
                <button class="btn btn-light rounded-circle position-absolute top-3 end-3 z-1 shadow-sm" style="width: 40px; height: 40px;"><i class="fa-regular fa-heart"></i></button>
                <div class="bg-light rounded-4 mb-3 overflow-hidden" style="aspect-ratio: 1/1;">
                    <img alt="Serum" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDN27ZQ8LRHtKdI-1dzO1eEmFvpdG0PhmJI237FiHKnjn574oLTGsnipr0cM74kEHvXX1OaXDtijDKyfbpRS5xDQquVsYF5z2Aw0z85JI4RZPMdrDs0_8zlGqfdv7PMCJ8AkaZIJjbaJ9YB1dh255U37hZTE1e_Cud-48NAEiRk-93blnOpc8hr6tT3i4Lw-7ILXKfdvoiRdHutGv-sask1aoCwRTMcrRnBig-ZhJ8fhjWyTC3_-2Cx-w" />
                </div>
                <div class="flex-grow-1">
                    <small class="text-primary fw-bold text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Eucerin</small>
                    <h5 class="fw-bold mb-2 h6">Vitamina C Advanced Serum</h5>
                    <div class="text-warning small mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                        <span class="text-muted fw-medium ms-1">(124)</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                    <div>
                        <del class="text-muted small opacity-50 d-block">S/ 120.00</del>
                        <span class="h4 text-primary fw-bold mb-0">S/ 89.90</span>
                    </div>
                    <button class="btn btn-primary rounded-3" style="width: 48px; height: 48px;"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="col-sm-6 col-lg-3">
            <div class="product-card-shadow p-3 position-relative d-flex flex-column h-100">
                <button class="btn btn-light rounded-circle position-absolute top-3 end-3 z-1 shadow-sm" style="width: 40px; height: 40px;"><i class="fa-regular fa-heart"></i></button>
                <div class="bg-light rounded-4 mb-3 overflow-hidden" style="aspect-ratio: 1/1;">
                    <img alt="Crema" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuATc1Q0O3SuR5la9pbtNTch4OSZC9hpfGgp6Hc0w29W1FIc_EY_Fg6jXKsrMRrSj5-RWJm-gv4wWzp_b5S3ETluysl1VmuqkmtfLaYieGJOTdrgwY0gE4sANH3rbq13quHkdXZFimoVtNBNFxAjUzzHOqmhMtui6XcbmsZVJmHMl99m8i-xLjRRJy9QrAh6ise8La0LgPSuEDhwWptz8gr-Q_KvapkElcaK_8wiJPtJyIcmA8QrP3w3MA" />
                </div>
                <div class="flex-grow-1">
                    <small class="text-secondary fw-bold text-uppercase" style="font-size: 10px; letter-spacing: 1px;">CeraVe</small>
                    <h5 class="fw-bold mb-2 h6">Crema Hidratante Ceramide+</h5>
                    <div class="text-warning small mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="text-muted fw-medium ms-1">(89)</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                    <span class="h4 text-primary fw-bold mb-0">S/ 145.00</span>
                    <button class="btn btn-primary rounded-3" style="width: 48px; height: 48px;"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="col-sm-6 col-lg-3">
            <div class="product-card-shadow p-3 position-relative d-flex flex-column h-100">
                <div class="bg-light rounded-4 mb-3 overflow-hidden" style="aspect-ratio: 1/1;">
                    <img alt="Pañales" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXsQ6aheZMXvEdakOR50rJPTAmunyhYSfgsjw2Ao_jWartJAWd0TAxrAEEXbrW6-PH1zq2bUSbedtAc24j-wYgqxOIVd4yNcg4gUXBS7MCgrbi9-8GaKHj6AlTLaZfNaT_Z0jz-RogiSpgp_rxvkoQYIz5X0_ZVDU5Tvis-FfCnmJVBsN8RsjParDJYLrYXbc_Y0pYLHLH_4vEZV158UM7SplNuIE5QCSyVsJAEyTpcqj9J2yPBn4dCA" />
                </div>
                <div class="flex-grow-1">
                    <small class="text-warning fw-bold text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Pampers</small>
                    <h5 class="fw-bold mb-2 h6">Pañales Premium Ultra Soft</h5>
                    <div class="text-warning small mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                        <span class="text-muted fw-medium ms-1">(215)</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                    <span class="h4 text-primary fw-bold mb-0">S/ 65.50</span>
                    <button class="btn btn-primary rounded-3" style="width: 48px; height: 48px;"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="col-sm-6 col-lg-3">
            <div class="product-card-shadow p-3 position-relative d-flex flex-column h-100">
                <span class="badge-pill bg-danger text-white position-absolute top-3 start-3 z-1">Super Oferta</span>
                <div class="bg-light rounded-4 mb-3 overflow-hidden" style="aspect-ratio: 1/1;">
                    <img alt="Vitamins" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYQJjMWu46G0135xZkqQwNANuDIul-iQw7ZHWvXifu4bN6A29kl6G1V1tnvBeTVrHYGUs9D3Krlr3jLyy6nURxElNdzByGS5OOxhNOUqPW-NPmX7B0vPux0uFxrRI8NByBEZscvn-niGTpdtyd1nze7dPTRDZnVzeQUdUEqLIWAJ6bGT7e-nxrQzWBVmmec2S1QvxAkqDMx27dXoSTlrTZSbZHjT_yEjzgyc4FVIaUJhhIncgXs3KP8g" />
                </div>
                <div class="flex-grow-1">
                    <small class="text-primary fw-bold text-uppercase" style="font-size: 10px; letter-spacing: 1px;">PharmaVit</small>
                    <h5 class="fw-bold mb-2 h6">Multivitamínico Vitality Pro</h5>
                    <div class="text-warning small mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="text-muted fw-medium ms-1">(42)</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                    <div>
                        <del class="text-muted small opacity-50 d-block">S/ 95.00</del>
                        <span class="h4 text-primary fw-bold mb-0">S/ 72.00</span>
                    </div>
                    <button class="btn btn-primary rounded-3" style="width: 48px; height: 48px;"><i class="fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 pt-4 text-center">
        <a href="{{route('tienda')}}" class="btn btn-outline-primary px-5 py-3 rounded-4 fw-bold fs-5 group">
            Ver todos los productos <i class="fa-solid fa-arrow-right ms-2 transition-transform"></i>
        </a>
    </div>
</section>
<!-- Prescription Section -->
<section class="py-5 container-xxl mb-5 reveal">
    <div class="prescription-box">
        <!-- Decorative circle -->
        <div class="position-absolute top-0 end-0 rounded-circle bg-white opacity-10 translate-middle-y translate-middle-x" style="width: 300px; height: 300px; filter: blur(80px);"></div>
        <div class="row align-items-center g-5 position-relative z-1">
            <div class="col-lg-7 text-center text-lg-start">
                <div class="d-inline-flex align-items-center gap-2 bg-secondary bg-opacity-25 text-white border border-secondary border-opacity-25 px-3 py-2 rounded-pill mb-4 fw-bold small">
                    <i class="fa-solid fa-circle-check"></i>
                    Servicio Farmacéutico Oficial
                </div>
                <h2 class="display-5 text-white mb-4">¿Tienes una receta médica?</h2>
                <p class="fs-5 text-white-50 mb-5">Nuestro equipo de farmacéuticos colegiados validará tu receta al instante. Ahorra tiempo y recibe tus medicamentos con total seguridad.</p>
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                    <div class="d-flex align-items-center gap-2 text-white bg-white bg-opacity-10 px-4 py-3 rounded-4 border border-white border-opacity-10 fw-semibold">
                        <i class="fa-solid fa-clock text-secondary"></i> Validación en &lt; 15 min
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white bg-white bg-opacity-10 px-4 py-3 rounded-4 border border-white border-opacity-10 fw-semibold">
                        <i class="fa-solid fa-truck text-secondary"></i> Envío Prioritario
                    </div>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <button class="btn btn-secondary text-white w-100 py-4 fs-4 rounded-4 fw-bold mb-3 shadow-lg group transition-transform">
                    <i class="fa-solid fa-file-arrow-up me-3 fs-3"></i> Subir Receta
                </button>
                <small class="text-white-50">Formatos aceptados: JPG, PNG, PDF (Máx. 10MB)</small>
            </div>
        </div>
    </div>
</section>


<script>
    // Reveal animations on scroll
    const observerOptions = {
        threshold: 0.1
    };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Simple countdown timer logic
    let time = 3600 * 4 + 22 * 60 + 59;
    const timerEl = document.getElementById('timer');
    setInterval(() => {
        time--;
        const h = Math.floor(time / 3600).toString().padStart(2, '0');
        const m = Math.floor((time % 3600) / 60).toString().padStart(2, '0');
        const s = (time % 60).toString().padStart(2, '0');
        if (timerEl) timerEl.textContent = `${h}:${m}:${s}`;
    }, 1000);
</script>
@endsection