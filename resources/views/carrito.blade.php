@extends('layouts.app')

@section('content')

<div class="container-xxl px-4" style="margin-top: 50px; margin-bottom: 80px;">
    <!-- Title Section -->
    <div class="mb-4">
        <h1 class="display-6 mb-1">Mi Carrito de Compras</h1>
        <p class="text-secondary">Tienes 2 productos seleccionados para tu bienestar.</p>
    </div>
    <!-- Free Shipping Progress -->
    <div class="product-card p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center gap-3">
                <i class="fa-solid fa-truck-fast text-success fs-5"></i>
                <p class="mb-0">¡Te faltan <span class="fw-bold text-primary-custom">S/ 20.00</span> para el Envío Gratis!</p>
            </div>
            <span class="small text-secondary">Meta: S/ 100.00</span>
        </div>
        <div class="progress">
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar" role="progressbar" style="width: 80%"></div>
        </div>
    </div>
    <!-- Main Grid -->
    <div class="row g-4">
        <!-- Product List -->
        <div class="col-lg-9">
            <!-- Product 1 -->
            <div class="product-card p-3 mb-3">
                <div class="row align-items-center g-3">
                    <div class="col-sm-auto">
                        <div class="bg-light rounded-4 d-flex align-items-center justify-content-center overflow-hidden" style="width: 160px; height: 160px;">
                            <img alt="Serum" class="img-fluid p-3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABIW97p08bczemtdrMTR003fG6YevZcBYwPL6HgJWTDNb3Gj62BGj-AI7EHr4s_xWpoaJq56UzvYPZwZg0fPK52DT2K3_0DpdbAmZj811tIzCWqgBV700h4BJUf6_jKyhbO5r78VobXWv1SQome2TqLfkDHiW-2CFpH5gVYuRXpe879z9KLWCJ4tJdcdaxEohEd7zmkm8xmaFrO_xGrJNEsPQ-gtIqCqQV40pm1aHUZhe6oxs8QWnoWA" />
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-md-flex justify-content-between align-items-start h-100">
                            <div>
                                <span class="text-success small fw-bold text-uppercase mb-1 d-block" style="letter-spacing: 1px;">La Roche-Posay</span>
                                <h3 class="h5 mb-1">Hyalu B5 Serum Ácido Hialurónico</h3>
                                <p class="text-secondary small mb-2">Envase de 30ml • Hidratante reparador</p>
                                <span class="badge-stock">En stock</span>
                            </div>
                            <div class="d-flex flex-column align-items-md-end mt-3 mt-md-0">
                                <div class="d-flex align-items-center gap-4 mb-2">
                                    <div class="quantity-selector">
                                        <button onclick="decrement(this)"><i class="fa-solid fa-minus small"></i></button>
                                        <input min="1" readonly="" type="number" value="1" />
                                        <button onclick="increment(this)"><i class="fa-solid fa-plus small"></i></button>
                                    </div>
                                    <div class="text-end">
                                        <div class="h4 mb-0 fw-bold">S/ 45.00</div>
                                    </div>
                                </div>
                                <button class="btn btn-link text-danger text-decoration-none p-0 small fw-bold">
                                    <i class="fa-solid fa-trash-can me-1"></i> Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product-card p-3 mb-3">
                <div class="row align-items-center g-3">
                    <div class="col-sm-auto">
                        <div class="bg-light rounded-4 d-flex align-items-center justify-content-center overflow-hidden" style="width: 160px; height: 160px;">
                            <img alt="Vitamina C" class="img-fluid p-3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOroXsSvBgrMYZ6O47cBnYf_YetWPaT0bSnjn3hUg8l7ipv3foI2tbXvs8ilAMpRu9minpX8YxiLGOEcfg38YCm0KAdaWq_6JsbUeSwHb_5Wj8Q83KFNSxuPsbEh8i5zRx52jaYHE6Y4Z_k8zXMuddm30Mcg6uO1t_1RxQPEqUssWp1V2dxVxJPjuJDunqjalnYC6Q-kM5bHwcVLpVwbYcCa1E6tujQvzvys9POYczG45MDJ5dVmlaXQ" />
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-md-flex justify-content-between align-items-start h-100">
                            <div>
                                <span class="text-success small fw-bold text-uppercase mb-1 d-block" style="letter-spacing: 1px;">Nature's Bounty</span>
                                <h3 class="h5 mb-1">Vitamina C 500mg - 100 Cápsulas</h3>
                                <p class="text-secondary small mb-2">Suplemento Dietario • Sistema Inmune</p>
                                <span class="badge-stock">En stock</span>
                            </div>
                            <div class="d-flex flex-column align-items-md-end mt-3 mt-md-0">
                                <div class="d-flex align-items-center gap-4 mb-2">
                                    <div class="quantity-selector">
                                        <button onclick="decrement(this)"><i class="fa-solid fa-minus small"></i></button>
                                        <input min="1" readonly="" type="number" value="1" />
                                        <button onclick="increment(this)"><i class="fa-solid fa-plus small"></i></button>
                                    </div>
                                    <div class="text-end">
                                        <div class="h4 mb-0 fw-bold">S/ 35.00</div>
                                    </div>
                                </div>
                                <button class="btn btn-link text-danger text-decoration-none p-0 small fw-bold">
                                    <i class="fa-solid fa-trash-can me-1"></i> Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar Summary -->
        <div class="col-lg-3">
            <div class="product-card p-4 sticky-summary">
                <h2 class="h5 mb-4">Resumen de Pedido</h2>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary">Subtotal</span>
                    <span class="fw-bold">S/ 80.00</span>
                </div>
                <div class="d-flex justify-content-between mb-2 text-success">
                    <span>Descuento (FarmaApp)</span>
                    <span class="fw-bold">- S/ 5.00</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-secondary">Envío</span>
                    <span class="fw-bold">S/ 10.00</span>
                </div>
                <hr class="my-3" />
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <span class="h5 mb-0 fw-bold">Total</span>
                    <span class="h4 mb-0 fw-bold text-primary-custom">S/ 85.00</span>
                </div>
                <div class="d-grid gap-2">
                    <a href="{{route('checkout')}}" class="btn btn-primary-custom py-3">Finalizar Compra</a>
                    <a href="{{route('tienda')}}" class="btn btn-outline-primary-custom py-3 d-flex align-items-center justify-content-center gap-2">
                        <i class="fa-solid fa-plus"></i> Seguir Comprando
                    </a>
                </div>
                <div class="mt-4 p-3 rounded-4 d-flex gap-3 align-items-center" style="background-color: var(--surface-container-low);">
                    <i class="fa-solid fa-shield-halved text-primary-custom fs-5"></i>
                    <p class="small text-secondary mb-0">Compra 100% segura con encriptación SSL.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Recommendations Section -->
    <section class="mt-5 pt-4">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <h2 class="h4 mb-0">Productos recomendados para ti</h2>
            <a class="text-primary-custom text-decoration-none small fw-bold" href="#">
                Ver más <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="row g-4">
            <!-- Recommendation 1 -->
            <div class="col-6 col-md-3">
                <div class="product-card p-3 h-100">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center mb-3 overflow-hidden" style="height: 180px;">
                        <img alt="Sunscreen" class="img-fluid p-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBo7VZHlF8WeyJD2_n_iNh6zvtySmwahd_E8bbPUBApElDPMKV5tV8v15F93OeMZkjFsil5TGH3UBh3Z3XqoUQxLb7ICIao3DJq2RMj8wHGJu0ZKV7IBV4hD9pOflwf-YhztmducO1vyHTGxlKko-KKS_htrXjoXLYKjTFWubZFA_EWl-BAdzqQDGz4wsFAEAtJwMoaXnz_rJfTfPc5hCsA_zgIRlJRy5TKHXfK9Ff4nM2T-K-egiW00Q" />
                    </div>
                    <span class="text-secondary small d-block mb-1">Eucerin</span>
                    <h4 class="small fw-bold text-truncate mb-2">Protector Solar Oil Control 50+</h4>
                    <p class="text-primary-custom fw-bold mb-3">S/ 89.90</p>
                    <button class="btn btn-outline-primary-custom w-100 py-2 small">Agregar</button>
                </div>
            </div>
            <!-- Recommendation 2 -->
            <div class="col-6 col-md-3">
                <div class="product-card p-3 h-100">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center mb-3 overflow-hidden" style="height: 180px;">
                        <img alt="Colgate" class="img-fluid p-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAs7_l50qqD96vMoRzXZzm43pVVJLh8ZrCEkDztuJYgZrU2sO4rU8ouKOdmFi9XzJ1Gjiwkb71u2vdOHOs8HaYmcpwHV4-8z5YCwzToQfNdeZaeo6wgqb9DXFeAZUyx5RvZ2dNfW1h3P4U--DpWn2yrh2VsOEXusQw9s3uokpSjGxJ6MXn0bbXbBywqZZNRlxt_r-cM2OUvR0lD0SVjc884AmU8ZOA0Fm6b17a9mAIl8VZvCs4HqYDedQ" />
                    </div>
                    <span class="text-secondary small d-block mb-1">Colgate</span>
                    <h4 class="small fw-bold text-truncate mb-2">Pasta Dental Total 12 Pack</h4>
                    <p class="text-primary-custom fw-bold mb-3">S/ 22.50</p>
                    <button class="btn btn-outline-primary-custom w-100 py-2 small">Agregar</button>
                </div>
            </div>
            <!-- Recommendation 3 -->
            <div class="col-6 col-md-3">
                <div class="product-card p-3 h-100">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center mb-3 overflow-hidden" style="height: 180px;">
                        <img alt="Protex" class="img-fluid p-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxLzrQwGlDGiBXCkp0QleuJEFf8v12Q-H13ufmz25hSAjNe2f_VtZNDSJSNK5YRy_z9FDMIQLl3q4gGTscVO8qQ8CaQzMRUdrxzkgOmfPHS6BZhpTdrMZl-onA_FMQKOg_UGBTilzowYKQnrI-A09yj2DvpcQYKCGcz7L59kJ_Sja0asxC3D9Jbi2zES5lA117NiqCDfSL6sZbrz52sLNq5KIMYW_W5hSQxMEqOV9pDeDs1N0C5IEBcw" />
                    </div>
                    <span class="text-secondary small d-block mb-1">Protex</span>
                    <h4 class="small fw-bold text-truncate mb-2">Jabón Líquido Antibacterial</h4>
                    <p class="text-primary-custom fw-bold mb-3">S/ 12.00</p>
                    <button class="btn btn-outline-primary-custom w-100 py-2 small">Agregar</button>
                </div>
            </div>
            <!-- Recommendation 4 -->
            <div class="col-6 col-md-3">
                <div class="product-card p-3 h-100">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center mb-3 overflow-hidden" style="height: 180px;">
                        <img alt="Shampoo" class="img-fluid p-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAY8gXRyFizPuBBH3JXCry0rL6Iw5Lo_IMc5CiPF5hx5l3sAbK1GI90qZaEElGu3Xpe3SMIGIhRi9Z8uSyOHN5RShM2kqw4a2lVWpEM4G5x2P4oEN_Bz3nTFMOe8tLjr3sFurfrayry2Sqt6UGV86OmTzGKZUxmYsQjjIKT95SfLh04IZdgRWRNheGlitgpTwv6uYkwYjFrLCT-GhrR_QwPjSRveV-4M6EYnHBol_WRYett6f1uFnX17w" />
                    </div>
                    <span class="text-secondary small d-block mb-1">Johnson's Baby</span>
                    <h4 class="small fw-bold text-truncate mb-2">Shampoo Gotas de Brillo 400ml</h4>
                    <p class="text-primary-custom fw-bold mb-3">S/ 18.50</p>
                    <button class="btn btn-outline-primary-custom w-100 py-2 small">Agregar</button>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    function increment(btn) {
        const input = btn.parentElement.querySelector('input');
        input.value = parseInt(input.value) + 1;
    }

    function decrement(btn) {
        const input = btn.parentElement.querySelector('input');
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    }
</script>
@endsection


