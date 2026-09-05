@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="py-5 mt-4">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge rounded-pill bg-primary-subtle text-primary-custom px-3 py-2 mb-4">Abierto 24/7 Digital</span>
                <h1 class="display-4 text-primary-custom mb-4">Tu farmacia online de confianza</h1>
                <p class="lead text-muted mb-5">
                    Encuentra todo lo que necesitas para tu salud con la precisión farmacéutica y rapidez que mereces. Delivery express en 45 minutos.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <button class="btn bg-cta-red text-white fw-bold px-5 py-3 rounded-4 medical-shadow-hover">Comprar ahora</button>
                    <button class="btn btn-outline-primary border-primary text-primary-custom fw-bold px-5 py-3 rounded-4 medical-shadow-hover">Ver promociones</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="hero-img-wrapper medical-shadow">
                        <img class="img-fluid w-100" data-alt="Pharmacist portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCOmteYkd_5gOLFU_ii11HYSqVeb8GJ-PfuLODuTpWpglrqVTNShjzsun6iCnM_0xg6ebKArp9Xr94RalwkkZh3taYUosa2_VFOLMBl3DSixwpSBo3JAC93lBl-H7VPIXrgA5r72Ml0R8jHjg5vS-JiUM0yTxTgPD6bApKBLUZLSiWFeRQTEAT1bgrGEjhyGZG9-BOQ7tjNf6P5bTTHbXMjljJQURkUtOkwEy00s5IdPVR88WrCDENcA" style="aspect-ratio: 1/1; object-fit: cover;" />
                    </div>
                    <!-- Trust Badge -->
                    <div class="position-absolute bottom-0 start-0 bg-white p-3 rounded-4 medical-shadow d-none d-md-flex align-items-center gap-3 mb-n4 ms-n4" style="z-index: 2;">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2">
                            <i class="fa-solid fa-circle-check text-success fs-3"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-primary-custom mb-0">Certificado</h6>
                            <small class="text-muted">Calidad ISO 9001</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Benefits Section -->
<section class="bg-white py-5 border-top border-bottom my-5">
    <div class="container">
        <div class="row g-4 text-center text-lg-start">
            <div class="col-sm-6 col-lg-3">
                <div class="d-lg-flex align-items-center gap-3">
                    <i class="fa-solid fa-truck-fast fs-2 text-primary-custom mb-2 mb-lg-0"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Delivery Express</h6>
                        <p class="small text-muted mb-0">Recibe en 45 min</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="d-lg-flex align-items-center gap-3">
                    <i class="fa-solid fa-shield-halved fs-2 text-primary-custom mb-2 mb-lg-0"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Productos Certificados</h6>
                        <p class="small text-muted mb-0">100% Originales</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="d-lg-flex align-items-center gap-3">
                    <i class="fa-solid fa-stethoscope fs-2 text-primary-custom mb-2 mb-lg-0"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Soporte Médico</h6>
                        <p class="small text-muted mb-0">Chat 24/7</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="d-lg-flex align-items-center gap-3">
                    <i class="fa-solid fa-lock fs-2 text-primary-custom mb-2 mb-lg-0"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Pago Seguro</h6>
                        <p class="small text-muted mb-0">Encriptación SSL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section -->
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h2 class="text-primary-custom h3">Nuestras Categorías</h2>
                <p class="text-muted mb-0">Todo lo que necesitas en un solo lugar</p>
            </div>
            <a class="text-primary-custom fw-bold text-decoration-none" href="#">Ver todas <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-4 col-lg-2">
                <a class="category-link text-center text-decoration-none d-block" href="#">
                    <div class="category-circle medical-shadow medical-shadow-hover">
                        <img alt="Medicamentos" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtk8AX2XKztsblfJssSkEVjITOUUopVHWDw9gxexM2dTNNluYyuZzsnv1D_iUg74ylaaoDFQyvxv_jt_KwZrzJzdax3JK5kxWXcV-Ix5nqUQCYwcftrY3H8BaRAIGBxsepW6FoNq2BVbfRodUn6gJWF7ZQJcM1ghwqTacg3WAFHaDNk1I0RsYWltajPE3z11TwJETyzCNlFjeZVKzuszha8_KgrUSmggFWw-OOi8n7UQPRj6S2Y7qdtg" />
                    </div>
                    <span class="fw-bold text-dark">Medicamentos</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a class="category-link text-center text-decoration-none d-block" href="#">
                    <div class="category-circle medical-shadow medical-shadow-hover">
                        <img alt="Vitaminas" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_Eolx9_-vcbG7it0AJBPk8kw0tHJxdz5FARpAA9iYRpXS7Un5PvuybeDUncF4e-8Cxkp0zjIHjz-i6h1rp7Kyxf3afSiNnh8b4q0qAKHJgmOgObqAr8eJ0KkSGrzKG0Qz2ShZzCxW2renfFS5xMHeWwq05xERWhNF-b-fzIg2ZKLyWCDVjfBcUT1Av8xBez5nKm1VDt8R8Aj48ALidFyZBOdZJgzEermkTZBzsY4GRZpFYxwrO6Ovlw" />
                    </div>
                    <span class="fw-bold text-dark">Vitaminas</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a class="category-link text-center text-decoration-none d-block" href="#">
                    <div class="category-circle medical-shadow medical-shadow-hover">
                        <img alt="Cuidado Personal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4SFbqxJ6Gu0TqM3Jgd3b1pAp7S5OnQsQw9xMU_ib-T8-Ay0mbhZ9W4_4jPxnjH3T7fscCTV3pVEal6feQRtAIyAKTBkxtqvLSsYk-kN_CR_tneJ5shKbhlnmdcqPmlVKxDAfznc6hqO6qc5msL8-nMF8bciSx6Sho6TGC4udsLNhBnimrHplnQvx9megBWN5_ViqsSqK7MrMbcW0DUhzRVFzrdzM7xiKFCgezQntL7zJLVN3OpyXJrQ" />
                    </div>
                    <span class="fw-bold text-dark">Cuidado Personal</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a class="category-link text-center text-decoration-none d-block" href="#">
                    <div class="category-circle medical-shadow medical-shadow-hover">
                        <img alt="Bebés" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWnVgjzHbhAQxssFpvek0NFCNtcJW5eWCa1-tAy8nmFyHmURSbuNojPVtylFcJEz8HdZ_p4xu8K3mO2bdJsJMAUMUBQukBmzyV3vE1uc9wdM3U9xXlxwPobxuEsJoCXPV4TeFm3VoL-5vabDMm6ncayIfnWFFUkGE_9xND-86Xtc89CnTIbu_mgJyECrtch7-C7eaBhU6VGqEz4GbhruIqJsg6PFzZIJSdKTqAD-RbNqbY8TrYG1mdWA" />
                    </div>
                    <span class="fw-bold text-dark">Bebés</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a class="category-link text-center text-decoration-none d-block" href="#">
                    <div class="category-circle medical-shadow medical-shadow-hover">
                        <img alt="Dermocosmética" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoMMEbACsC-RFE4pYZz3l925ENjWga98w7J0ZJr9O6rdZAqjlAoX9bwhHU-N-t9jU20GllDxiv2QksAVFLyYJinTMy2fCndFVkJPVRWkYqv6QtuFn0VjD0BmLpd3pIXnIdjuiUNyxgD30Bp6mvqT1_Gpinv8qZGJpAUWfR2B6JCDWBlPW2OSuLJI_oLw6qsnksDnhzPHl6fpsz4AjrQYk-vaMh-93z1QU69YTJpADgu0rsp3vdInL_Jg" />
                    </div>
                    <span class="fw-bold text-dark">Dermocosmética</span>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a class="category-link text-center text-decoration-none d-block" href="#">
                    <div class="category-circle medical-shadow medical-shadow-hover">
                        <img alt="Adulto Mayor" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlFw1IhhNrCVtq4zXBLK-NDOPsZHkPGPFQtYf6sgRnaGd5c8mlwxsRSew2T1robTgEmPH63cauDAZ42u6ERdcO77WUKv5rAEvoYTX16xUXtLY32LYzHpBe-0P0xpNEZgf-2YqdrfVKJA4HCkkxV1o4h55hgjqmrlZhtj1ZZ9KWqgVnB8LyYSFftOjTWIh25TPtc_v8EwEroANBgm23rccw1pAiOTy3Yv9ju4htOdyiW_lHrbMQsesOJg" />
                    </div>
                    <span class="fw-bold text-dark">Adulto Mayor</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Promo Banner -->
<section class="container py-5">
    <div class="rounded-5 overflow-hidden bg-primary-custom position-relative p-5 text-white medical-shadow">
        <div class="row align-items-center">
            <div class="col-lg-7 z-1">
                <span class="badge bg-cta-red px-3 py-2 fw-bold mb-4">OFERTA DE LA SEMANA</span>
                <h2 class="display-5 fw-bold mb-4">40% OFF en Vitaminas y Suplementos</h2>
                <p class="lead opacity-75 mb-5">Refuerza tu sistema inmunológico con las mejores marcas del mercado. Promo válida hasta agotar stock.</p>
                <button class="btn bg-cta-red text-white fw-bold px-5 py-3 rounded-4 medical-shadow-hover">Canjear Cupón</button>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <!-- Placeholder for background pattern/icon -->
                <div class="opacity-10 text-end">
                    <i class="fa-solid fa-pills" style="font-size: 200px;"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Products -->
<section class="py-5 bg-light bg-opacity-50">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h3 class="text-primary-custom h3">Más Vendidos</h3>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary rounded-circle"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="btn btn-outline-secondary rounded-circle"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card product-card h-100 medical-shadow medical-shadow-hover">
                    <div class="p-4 bg-light position-relative text-center">
                        <span class="product-badge bg-success text-white">DESTACADO</span>
                        <img alt="Multivitamínico" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3PldrTqD63RqsZbZRBtN1WngMk8kkQca4P5ROOGhrGvNA_XkYlqJekKzSUwUDuuAZhrBbWxVMBJoSx4CH0pQAA5xvAPsCYNU-pWENVTDub0tebxMVcsq7y0EJsl0lrHQbKiRlkU4Jc2JCVngLvZM4X6XYXwbNbtRqUmSymJkaGn_CW2YCu5bNnZJhi_21ZbN2qohPexcNyfFh5gkfu0V5Zw_AcNVIWxBQ_RS-mRNYnYVYKpp1mC6JyQ" style="height: 180px; object-fit: contain;" />
                    </div>
                    <div class="card-body d-flex flex-column p-4">
                        <small class="text-muted fw-bold mb-1">MARCA GENÉRICA</small>
                        <h6 class="fw-bold mb-3" style="height: 48px; overflow: hidden;">Multivitamínico Complete Complex 60 Cápsulas</h6>
                        <div class="d-flex align-items-center gap-1 mb-3">
                            <i class="fa-solid fa-star text-warning small"></i>
                            <span class="small fw-bold">4.8</span>
                            <span class="small text-muted">(120 reseñas)</span>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="h4 fw-bold text-primary-custom mb-0">$15.90</span>
                                <small class="text-muted text-decoration-line-through">$19.90</small>
                                <span class="badge bg-success-subtle text-success">-20%</span>
                            </div>
                            <button class="btn btn-primary bg-primary-custom w-100 py-2 rounded-3 fw-bold add-to-cart">
                                <i class="fa-solid fa-cart-plus me-2"></i> Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card product-card h-100 medical-shadow medical-shadow-hover">
                    <div class="p-4 bg-light position-relative text-center">
                        <span class="product-badge bg-cta-red text-white">OFERTA</span>
                        <img alt="Crema" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAn_-q6Kil_uwsBavhm0Mcpbw09AyiOsNfH1k3ac5Jn1hB_ifWklz4aMgqHieOoHBZ4z9cAegJUj7RAN5RSi9WuCbAOdsnpezlvMaEBpHjO57zumwIXUqLLzISeLhA_BGr6HFT2YJLpJm73W7pRJGyvgS90Lh5bQ6djRNp9IQ79CQvuryOQKqwEXfAYFLmwBEzVDSAKb-q18m07P8luPYFqaWU_6E0i25qoSA3bIEjUqYmuRP8KZU1C6A" style="height: 180px; object-fit: contain;" />
                    </div>
                    <div class="card-body d-flex flex-column p-4">
                        <small class="text-muted fw-bold mb-1">DERMA CARE</small>
                        <h6 class="fw-bold mb-3" style="height: 48px; overflow: hidden;">Crema Hidratante Profunda 24h DermPure</h6>
                        <div class="d-flex align-items-center gap-1 mb-3">
                            <i class="fa-solid fa-star text-warning small"></i>
                            <span class="small fw-bold">4.9</span>
                            <span class="small text-muted">(85 reseñas)</span>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="h4 fw-bold text-primary-custom mb-0">$28.50</span>
                                <small class="text-muted text-decoration-line-through">$35.00</small>
                            </div>
                            <button class="btn btn-primary bg-primary-custom w-100 py-2 rounded-3 fw-bold add-to-cart">
                                <i class="fa-solid fa-cart-plus me-2"></i> Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card product-card h-100 medical-shadow medical-shadow-hover">
                    <div class="p-4 bg-light text-center">
                        <img alt="Termómetro" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3XvNpU_WwlDPz31Tq0Ks1SL7RokmJsyOGzoAJINPEAKHUkg8NKM93MrOaqnmrAGbibK64Z-e6p4XujMUK9kr1EanOXgRP3PW7RUbY6UChg2JRdGxPRFwOt8rvioVFxnMJkCWz2cgkemwZSqjolAN3A6FoZjBfmhHMe_tw-IZCroTYd4AWVCiN-5rC0BqwfTrNQS-GZCf14VfmL9wPmeEEWJ77ojBqL0eQ_EJRgDeuDxXrAewnbdK4mg" style="height: 180px; object-fit: contain;" />
                    </div>
                    <div class="card-body d-flex flex-column p-4">
                        <small class="text-muted fw-bold mb-1">HEALTH TECH</small>
                        <h6 class="fw-bold mb-3" style="height: 48px; overflow: hidden;">Termómetro Digital Infrarrojo Sin Contacto</h6>
                        <div class="d-flex align-items-center gap-1 mb-3">
                            <i class="fa-solid fa-star text-warning small"></i>
                            <span class="small fw-bold">4.7</span>
                            <span class="small text-muted">(210 reseñas)</span>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="h4 fw-bold text-primary-custom mb-0">$45.00</span>
                            </div>
                            <button class="btn btn-primary bg-primary-custom w-100 py-2 rounded-3 fw-bold add-to-cart">
                                <i class="fa-solid fa-cart-plus me-2"></i> Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card product-card h-100 medical-shadow medical-shadow-hover">
                    <div class="p-4 bg-light text-center">
                        <img alt="Gomitas" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOLj9OGpvMLwhUEp0RrVVbiGVZgCO_GE5tewOAn31Ztlz_nYP-puegs_SWyVB-xWBGJtPEoavlTBYcCjzom6765nIzxxxqgywxxujSZ3NtsadWSxjuGVp4JoyQWhTgiiBMHG8Fx9x3iuX-IhWACv0nXjQmDUohCEgcQyuWW7ujTTF0JnGC2gEsYGjZg6uh8xulAeg9XGKQM_1VR1sFlCwJxK9r8Y-RibQvCFrfuUP8XINt3fCBTuDn3g" style="height: 180px; object-fit: contain;" />
                    </div>
                    <div class="card-body d-flex flex-column p-4">
                        <small class="text-muted fw-bold mb-1">KIDS HEALTH</small>
                        <h6 class="fw-bold mb-3" style="height: 48px; overflow: hidden;">Gomitas Vitamínicas para Niños (Berry Mix)</h6>
                        <div class="d-flex align-items-center gap-1 mb-3">
                            <i class="fa-solid fa-star text-warning small"></i>
                            <span class="small fw-bold">5.0</span>
                            <span class="small text-muted">(45 reseñas)</span>
                        </div>
                        <div class="mt-auto">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="h4 fw-bold text-primary-custom mb-0">$12.99</span>
                            </div>
                            <button class="btn btn-primary bg-primary-custom w-100 py-2 rounded-3 fw-bold add-to-cart">
                                <i class="fa-solid fa-cart-plus me-2"></i> Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials -->
<section class="py-5 container text-center">
    <h2 class="text-primary-custom mb-5">Lo que dicen nuestros clientes</h2>
    <div class="row g-4 text-start">
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 medical-shadow border border-light h-100">
                <div class="text-warning mb-3">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="fst-italic text-muted mb-4">"Increíble servicio. Pedí mis medicamentos a las 11 PM y llegaron en menos de una hora. Totalmente recomendado por su rapidez."</p>
                <div class="d-flex align-items-center gap-3">
                    <img alt="User" class="rounded-circle" height="48" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSUfhfLXAfNbS9F65V7p3Q8tqF8V9c-x7mdIarD0EMdtACwlZ2wA2QGlzbOVTA7l8NOSNfwPYbBrax49BevU68xXF7InyKI9LOjZDfE3vHrmSCOe2ngSULDAh6jqn9q1NQ2bgD3r4jXQ6GtY5uhhokX_aXpkFgh02lh7Fl5l2h1nMHV4HeUHCzLIui9aagYTNBRhkyh48XvNud64QV6ah3RJRXy4r7hSX5NlfTYpMHBW4mTpQan_Ogaw" width="48" />
                    <div>
                        <h6 class="fw-bold mb-0">María G. López</h6>
                        <small class="text-muted">Cliente Verificada</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 medical-shadow border border-light h-100">
                <div class="text-warning mb-3">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="fst-italic text-muted mb-4">"La asesoría farmacéutica por chat me ayudó a elegir las vitaminas adecuadas para mi recuperación. Gran equipo humano."</p>
                <div class="d-flex align-items-center gap-3">
                    <img alt="User" class="rounded-circle" height="48" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1nnWbsEjH5-k_whv0MJs5XVZ3y4v3kUOZhICNpUFY6Jc61uqYsuaQn-mYDo5Kjv4qi8WVHfPK4TdbkB5JefmvQx6IhKfY-otLyw3f0LD5-IET-gaL3Q8l3gfxnXNntK3Tw5BLpRTgUo9erMz0O7j8AHyf89ID3JXbJwu0M4mFYuThQ1bBajQMxJssdh6wlfHxsTYP-KeegQLT_2IlX6hwfYb42ukA-0P4kJbhy3vRTunkG-NAeAQi6w" width="48" />
                    <div>
                        <h6 class="fw-bold mb-0">Juan P. Méndez</h6>
                        <small class="text-muted">Cliente Verificado</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 medical-shadow border border-light h-100">
                <div class="text-warning mb-3">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="fst-italic text-muted mb-4">"Comprar en Medical Drug es súper sencillo. Los precios son competitivos y el empaque viene perfectamente sellado."</p>
                <div class="d-flex align-items-center gap-3">
                    <img alt="User" class="rounded-circle" height="48" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-JZVCJoLr5YK0I4F6QK30-b3G-pYIfcr79kCimzRINYyRe0VD-TTBsvD-55OzWZ12hE7jB5jy0GSIOeSwZRMItCSUwsrzB6dwM5HFyCp3X7En0PKGQiZZjNwZ6abLZQ9TI5whFJy8iEHQ9Vy92HpsgLxQlPcJppz5wFyRoTSZDSTkQnXycQ5Q2Rhq9NeL6jxEW1VC8hBV_paXj9Reeh27guKRO6FfNTtxrXnkpdzSf5O7nYVaIMAnEw" width="48" />
                    <div>
                        <h6 class="fw-bold mb-0">Laura Rojas</h6>
                        <small class="text-muted">Cliente Verificada</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section -->
<section class="bg-primary-custom text-white py-5">
    <div class="container text-center py-4">
        <h2 class="mb-3">¿Quieres recibir ofertas exclusivas?</h2>
        <p class="lead opacity-75 mb-5 mx-auto" style="max-width: 600px;">Suscríbete a nuestro boletín y recibe un 15% de descuento en tu primera compra.</p>
        <form class="row g-3 justify-content-center mx-auto" style="max-width: 600px;">
            <div class="col-sm-8">
                <input class="form-control form-control-lg rounded-4 border-0" placeholder="Tu correo electrónico" type="email" />
            </div>
            <div class="col-sm-4">
                <button class="btn bg-cta-red text-white fw-bold btn-lg w-100 rounded-4" type="submit">Suscribirme</button>
            </div>
        </form>
    </div>
</section>

<script>
    // Cart mock logic
    let count = 0;
    const cartCount = document.getElementById('cartCount');
    const addToCartBtns = document.querySelectorAll('.add-to-cart');

    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            count++;
            cartCount.textContent = count;
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-check me-2"></i> Agregado';
            btn.classList.replace('bg-primary-custom', 'btn-success');
            setTimeout(() => {
                btn.innerHTML = originalHtml;
                btn.classList.replace('btn-success', 'bg-primary-custom');
            }, 2000);
        });
    });
</script>
@endsection



