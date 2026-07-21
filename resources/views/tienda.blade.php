@extends('layouts.app')

@section('content')

<div class="container-xxl mt-4 mb-4">
    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb" style="font-size: 12px; font-weight: 600;">
            <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="#">Medicamentos</a></li>
            <li aria-current="page" class="breadcrumb-item active text-primary-custom">Cuidado Personal</li>
        </ol>
    </nav>
    <!-- Page Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-5">
        <div>
            <h1 class="display-6 mb-1">Cuidado Personal</h1>
            <p class="text-muted mb-0">142 productos encontrados</p>
        </div>
        <div class="d-flex align-items-center gap-3 bg-surface-container-low p-2 rounded-4">
            <div class="d-flex align-items-center gap-2 px-3 border-end border-secondary-subtle">
                <span class="small fw-medium text-muted">Ordenar por:</span>
                <select class="form-select border-0 bg-transparent fw-bold text-primary-custom p-0" style="width: auto; box-shadow: none;">
                    <option>Más relevantes</option>
                    <option>Precio: Menor a Mayor</option>
                    <option>Precio: Mayor a Menor</option>
                    <option>Mejor Valorados</option>
                </select>
            </div>
            <div class="d-flex gap-1">
                <button class="btn btn-primary-custom bg-primary-container text-on-primary-container p-2 rounded-3 border-0">
                    <i class="fa-solid fa-table-cells-large"></i>
                </button>
                <button class="btn p-2 rounded-3 text-muted border-0">
                    <i class="fa-solid fa-list"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <!-- Sidebar -->
        <aside class="col-lg-3">
            <div class="sidebar-widget">
                <div class="d-flex justify-content-between align-items-center mb-3 cursor-pointer" data-bs-target="#categoriesCollapse" data-bs-toggle="collapse">
                    <span class="fw-bold">Categorías</span>
                    <i class="fa-solid fa-chevron-down small"></i>
                </div>
                <div class="collapse show" id="categoriesCollapse">
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex justify-content-between align-items-center py-2 text-muted cursor-pointer">
                            <span>Cuidado del Rostro</span>
                            <span class="badge rounded-pill bg-light text-dark">45</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-2 fw-bold text-primary-custom cursor-pointer">
                            <span>Cuidado del Cuerpo</span>
                            <span class="badge rounded-pill bg-primary-container text-on-primary-container">32</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-2 text-muted cursor-pointer">
                            <span>Higiene Personal</span>
                            <span class="badge rounded-pill bg-light text-dark">28</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-2 text-muted cursor-pointer">
                            <span>Capilar</span>
                            <span class="badge rounded-pill bg-light text-dark">37</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-widget">
                <span class="fw-bold d-block mb-3">Rango de Precio</span>
                <input class="form-range" max="500" min="0" type="range" value="250" />
                <div class="d-flex justify-content-between mt-2 text-muted small">
                    <span>S/ 0</span>
                    <span>S/ 500</span>
                </div>
            </div>
            <div class="sidebar-widget">
                <span class="fw-bold d-block mb-3">Marca</span>
                <div class="search-container w-100 mb-3">
                    <i class="fa-solid fa-magnifying-glass small"></i>
                    <input class="form-control form-control-sm search-input bg-light" placeholder="Buscar marca..." type="text" />
                </div>
                <div class="overflow-auto pe-1" style="max-height: 160px;">
                    <div class="form-check mb-2">
                        <input checked="" class="form-check-input" id="brand1" type="checkbox" />
                        <label class="form-check-label text-muted small" for="brand1">La Roche-Posay</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" id="brand2" type="checkbox" />
                        <label class="form-check-label text-muted small" for="brand2">CeraVe</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" id="brand3" type="checkbox" />
                        <label class="form-check-label text-muted small" for="brand3">Vichy</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" id="brand4" type="checkbox" />
                        <label class="form-check-label text-muted small" for="brand4">Eucerin</label>
                    </div>
                </div>
            </div>
            <div class="sidebar-widget">
                <span class="fw-bold d-block mb-3">Tipo de Piel</span>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-primary-custom rounded-pill px-3 py-2 cursor-pointer">Grasa</span>
                    <span class="badge bg-light text-muted border rounded-pill px-3 py-2 cursor-pointer">Seca</span>
                    <span class="badge bg-light text-muted border rounded-pill px-3 py-2 cursor-pointer">Mixta</span>
                    <span class="badge bg-light text-muted border rounded-pill px-3 py-2 cursor-pointer">Sensible</span>
                </div>
            </div>
            <div class="prescription-zone">
                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 48px; height: 48px;">
                    <i class="fa-solid fa-file-arrow-up text-success fs-4"></i>
                </div>
                <h6 class="fw-bold text-success mb-1">¿Tienes receta médica?</h6>
                <p class="small text-muted mb-0">Súbela aquí y nosotros nos encargamos</p>
            </div>
        </aside>
        <!-- Product Grid -->
        <div class="col-lg-9">
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card-custom">
                        <div class="card-img-wrapper">
                            <span class="badge bg-primary-custom position-absolute top-0 start-0 m-3 rounded-pill text-uppercase" style="font-size: 10px;">Nuevo</span>
                            <img alt="Vitamina C10 Serum" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDS7ZugHe3srC85-uyI_YcQOonCF0DdaXUur7SxiYF5-HQJgwsNFRqj7C1QX5R2clUCB0ExkjEagSZCFOHCePjo7N1IymXPYMq9u6se8JYyhEJMXDBqMRP1Utxlu-bS2vQ_0DrQtYAGvsJ3W6uRS6qMle6r14Zvo4jkV6NUg3m7E1yv7NYtknGHQAvxU-Kai_s43l1sAonGNHwTi1p2O6zFW9YHK9dbvvBWZ_blrbo0DZL1EwrtxpFFcg" />
                            <button class="btn btn-light rounded-circle position-absolute bottom-0 end-0 m-3 shadow-sm icon-btn" style="background: white;"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-3">
                            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 1px;">La Roche-Posay</span>
                            <h5 class="mt-1 mb-2">Vitamina C10 Serum</h5>
                            <div class="d-flex align-items-center gap-1 mb-2">
                                <div class="text-warning small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                                <span class="text-muted small">(48)</span>
                            </div>
                            <div class="d-flex align-items-baseline gap-2 mb-3">
                                <span class="fs-4 fw-bold text-primary-custom">S/ 189.90</span>
                                <span class="text-muted text-decoration-line-through small">S/ 210.00</span>
                            </div>
                            <button class="btn-add"><i class="fa-solid fa-bag-shopping me-2"></i> Agregar</button>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card-custom">
                        <div class="card-img-wrapper">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-3 rounded-pill text-uppercase" style="font-size: 10px;">-20%</span>
                            <img alt="Protector Solar" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKvxG0l__MnfT9i3uNumTqA6c9VbLJe_q21y9yoJugVYJ3bCbN1fk_yjyZeZp_3LAev3GB80pAevzoDq5C9AyDSo6QUVsRX--ffvC5T8nosu5Y-UxZdvVhljZ7iDAcff1OPKJPIeSrAZOm4vtizrU2p38bW6Xh_KVRWacvQLSOsdn0pvE_3f3zkBgomGeD_3q_d5Dd9SdfqCfd0eITTqddmsFpi3xomZ3Mf18OMmyRibqNMmWSZgnWhA" />
                            <button class="btn btn-light rounded-circle position-absolute bottom-0 end-0 m-3 shadow-sm icon-btn" style="background: white;"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-3">
                            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 1px;">CeraVe</span>
                            <h5 class="mt-1 mb-2">Protector Solar FPS 50</h5>
                            <div class="d-flex align-items-center gap-1 mb-2">
                                <div class="text-warning small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="text-muted small">(124)</span>
                            </div>
                            <div class="d-flex align-items-baseline gap-2 mb-3">
                                <span class="fs-4 fw-bold text-primary-custom">S/ 74.90</span>
                                <span class="text-muted text-decoration-line-through small">S/ 93.50</span>
                            </div>
                            <button class="btn-add"><i class="fa-solid fa-bag-shopping me-2"></i> Agregar</button>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card-custom">
                        <div class="card-img-wrapper">
                            <img alt="Crema Hidratante" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZt5vJMehERrycavPKznBrYpc6jAStwtJshOxbYd6-upyjzjrGIY99tEpjOCBhKF2aZiaFkoD45kxH9K0xVdw4hsfIIAeCF4B2DSmSU5FUPl79OaIB9kpnuhpU7VtLvnyvBFx0j9FnbxYStiT3EgHXQ8OxcViLkvQmlBFZwcz5S7Ftw_Zu2wgWmXk77WjbAS5anltARsOrbYeZvsYXCbtV1JijrKSBUed1eBnfQsm-bfWQZbY82vdW_Q" />
                            <button class="btn btn-light rounded-circle position-absolute bottom-0 end-0 m-3 shadow-sm icon-btn" style="background: white;"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-3">
                            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 1px;">Eucerin</span>
                            <h5 class="mt-1 mb-2">Crema Hidratante UreaRepair</h5>
                            <div class="d-flex align-items-center gap-1 mb-2">
                                <div class="text-warning small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="text-muted small">(86)</span>
                            </div>
                            <div class="d-flex align-items-baseline gap-2 mb-3">
                                <span class="fs-4 fw-bold text-primary-custom">S/ 58.00</span>
                            </div>
                            <button class="btn-add"><i class="fa-solid fa-bag-shopping me-2"></i> Agregar</button>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card-custom">
                        <div class="card-img-wrapper">
                            <img alt="Hydro Boost" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOcfG_VdMY_8fR1VBU-W682vgeai-atF8TN8zsUjoFGH_M8a0qCNQD69M9AQxbQ-nGFDJx_F1TIi9DUSvxhbHl2JSs77eCWsc4OfozHf6V-lFVrLKywjItUOt1y85qDVBW9ro2hxWPN7fO8ETeG-lE4iAo-So4CB9-MsMrit0ENFZ7bHJUZmRcuPF78iVZf_s0vYurl4T4mdg9jS7BqhwXXRSCSxQWqWG7IUy8OFjk9h8m6YMJVHEcJg" />
                            <button class="btn btn-light rounded-circle position-absolute bottom-0 end-0 m-3 shadow-sm icon-btn" style="background: white;"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-3">
                            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 1px;">Neutrogena</span>
                            <h5 class="mt-1 mb-2">Hydro Boost Cleanser</h5>
                            <div class="d-flex align-items-center gap-1 mb-2">
                                <div class="text-warning small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="text-muted small">(32)</span>
                            </div>
                            <div class="d-flex align-items-baseline gap-2 mb-3">
                                <span class="fs-4 fw-bold text-primary-custom">S/ 42.50</span>
                            </div>
                            <button class="btn-add"><i class="fa-solid fa-bag-shopping me-2"></i> Agregar</button>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card-custom">
                        <div class="card-img-wrapper">
                            <img alt="Ungüento Reparador" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqYH-1v8Y-eoTUL31Mcgx4BZ5jKPAmft86dzrMGAG2-MxWjoh024u40Dy7vIkK6fAv9XCxbZolnQzgd-a4wOKFK4kGIDeNsvI8QTtGTIlyZ3Q5QwzXQUC3BIYR5oPp31DwqtinSdiChVYQXbk5a2a021546aWdH8VQNS-EuWUTEzoBLIwvhuPPiRTKwTVuq1SL8oV2JQWsyvLs_Fr6nKRgqEoRzAQNOCL559n5W-pnIGTOA8brso9rgw" />
                            <button class="btn btn-light rounded-circle position-absolute bottom-0 end-0 m-3 shadow-sm icon-btn" style="background: white;"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-3">
                            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 1px;">Aquaphor</span>
                            <h5 class="mt-1 mb-2">Ungüento Reparador</h5>
                            <div class="d-flex align-items-center gap-1 mb-2">
                                <div class="text-warning small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="text-muted small">(112)</span>
                            </div>
                            <div class="d-flex align-items-baseline gap-2 mb-3">
                                <span class="fs-4 fw-bold text-primary-custom">S/ 35.90</span>
                            </div>
                            <button class="btn-add"><i class="fa-solid fa-bag-shopping me-2"></i> Agregar</button>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card-custom">
                        <div class="card-img-wrapper">
                            <span class="badge bg-primary-custom position-absolute top-0 start-0 m-3 rounded-pill text-uppercase" style="font-size: 10px;">Nuevo</span>
                            <img alt="Dercos Anti-Caspa" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCC4YVFiBYlreaccgFM9kr-g2c8ZsFyi1oRWreNB5r00A1Ea3fHShtdMLMEOoAOHhgXZKbCURWiH9j-2PnQ5FatXUPvbCHFp9xNruKDUGbBifAbC-D6pW6VvDLDgyUlAtb7pkSc7H7P5FkL5mtXHoekApSaQC9zi7BKKK68xS8FIppMSZ894wdVl6PyVGNP6UYHzJDkUS-R5YEzmtpFhirmYtZnPhbRafQRjEeVG-TPOjElVaMHBJJ0Ag" />
                            <button class="btn btn-light rounded-circle position-absolute bottom-0 end-0 m-3 shadow-sm icon-btn" style="background: white;"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <div class="p-3">
                            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 1px;">Vichy</span>
                            <h5 class="mt-1 mb-2">Dercos Anti-Caspa</h5>
                            <div class="d-flex align-items-center gap-1 mb-2">
                                <div class="text-warning small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <span class="text-muted small">(65)</span>
                            </div>
                            <div class="d-flex align-items-baseline gap-2 mb-3">
                                <span class="fs-4 fw-bold text-primary-custom">S/ 89.00</span>
                            </div>
                            <button class="btn-add"><i class="fa-solid fa-bag-shopping me-2"></i> Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <nav class="mt-5 d-flex justify-content-center">
                <ul class="pagination pagination-custom bg-surface-container-low p-2 rounded-4 border-0">
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa-solid fa-chevron-left small"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><span class="page-link">...</span></li>
                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa-solid fa-chevron-right small"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<script>
    // Header effect on scroll
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-sm');
            header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
        } else {
            header.classList.remove('shadow-sm');
            header.style.backgroundColor = 'rgba(246, 250, 250, 0.8)';
        }
    });

    // Favorite toggle
    document.querySelectorAll('.icon-btn i.fa-heart').forEach(heart => {
        heart.parentElement.addEventListener('click', function(e) {
            e.preventDefault();
            this.querySelector('i').classList.toggle('fa-regular');
            this.querySelector('i').classList.toggle('fa-solid');
            this.querySelector('i').classList.toggle('text-danger');
        });
    });
</script>
@endsection



