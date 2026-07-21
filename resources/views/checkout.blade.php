@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <!-- Left Side: Forms -->
        <div class="col-lg-8">
            <!-- Section 1: Datos Personales (New) -->
            <section class="checkout-card">
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h2 class="h5 mb-0 font-manrope">Datos del Cliente</h2>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small text-muted">Nombre Completo</label>
                        <input class="form-control" placeholder="Ej. Juan Pérez" type="text" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small text-muted">DNI / CE</label>
                        <input class="form-control" placeholder="Número de documento" type="text" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small text-muted">Correo Electrónico</label>
                        <input class="form-control" placeholder="correo@ejemplo.com" type="email" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small text-muted">Celular</label>
                        <input class="form-control" placeholder="999 999 999" type="tel" />
                    </div>
                </div>
            </section>
            <!-- Section 2: Dirección de Entrega -->
            <section class="checkout-card">
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h2 class="h5 mb-0 font-manrope">Dirección de Entrega</h2>
                </div>
                <div class="row g-3">
                    <div class="col-md-7">
                        <div class="mb-3">
                            <label class="form-label small text-muted">Dirección Completa</label>
                            <input class="form-control" placeholder="Ej. Av. Javier Prado Este 123" type="text" />
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label class="form-label small text-muted">Dpto / Interior</label>
                                <input class="form-control" placeholder="Apt 201" type="text" />
                            </div>
                            <div class="col-6">
                                <label class="form-label small text-muted">Distrito</label>
                                <select class="form-select">
                                    <option selected="">San Isidro</option>
                                    <option>Miraflores</option>
                                    <option>Surco</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="form-label small text-muted">Referencias</label>
                            <textarea class="form-control" placeholder="Frente al parque o color de casa..." rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="position-relative rounded-3 overflow-hidden h-100 border" style="min-height: 200px; background: #ebeeef;">
                            <img alt="Map" class="w-100 h-100 object-fit-cover opacity-75" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwXVSHC7JIOsUalR1NZMx2Tj_4VgOvwvASY4h4X3j922YN3IEr9dcOGZcoFPH1Juv90n-0nKmizojh9l44eBRbByfKcHkQa_67wkG6apGTzdTmbk80gJjOlSKzNCvyEUMtFmrigVXhgSJSlureesO1H-XoGu29h-NgP6dl-4KszJzq4ZKSk7oXGVhlWskbjjLVrTpgJBioTEwxsSGTP51NHbNsWVtUkyc2vBvk9NrA4h3kZmRcmPS6tQ" />
                            <div class="position-absolute top-50 start-50 translate-middle text-primary-brand">
                                <i class="fa-solid fa-location-dot fa-2x"></i>
                            </div>
                            <button class="btn btn-sm btn-light position-absolute top-0 end-0 m-2 shadow-sm">
                                <i class="fa-solid fa-expand"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section 3: Método de Envío -->
            <section class="checkout-card">
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h2 class="h5 mb-0 font-manrope">Método de Envío</h2>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input checked="" class="btn-check" id="ship-express" name="shipping" type="radio" />
                        <label class="shipping-option w-100" for="ship-express">
                            <div class="d-flex align-items-start">
                                <div class="me-3 mt-1">
                                    <i class="fa-solid fa-circle-dot text-primary-brand"></i>
                                </div>
                                <div>
                                    <div class="fw-bold mb-1">Envío Express (45 - 60 min)</div>
                                    <div class="small text-muted">Recibe tus productos hoy mismo.</div>
                                    <div class="text-primary-brand fw-bold mt-2">S/ 9.90</div>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <input class="btn-check" id="ship-scheduled" name="shipping" type="radio" />
                        <label class="shipping-option w-100" for="ship-scheduled">
                            <div class="d-flex align-items-start">
                                <div class="me-3 mt-1">
                                    <i class="fa-regular fa-circle text-muted"></i>
                                </div>
                                <div>
                                    <div class="fw-bold mb-1">Envío Programado</div>
                                    <div class="small text-muted">Elige el día y la hora más cómoda.</div>
                                    <div class="text-success fw-bold mt-2">Gratis</div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </section>
            <!-- Section 4: Método de Pago -->
            <section class="checkout-card">
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <h2 class="h5 mb-0 font-manrope">Método de Pago</h2>
                </div>
                <button class="payment-method-btn" data-bs-target="#cardForm" data-bs-toggle="collapse" type="button">
                    <span class="fw-bold"><i class="fa-solid fa-credit-card me-2 opacity-75"></i> Tarjeta de Crédito o Débito</span>
                    <div class="d-flex gap-2">
                        <img alt="Visa" height="15" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKEs_OJw0XEa-CIH5vWawtc14c5ndA-UaRibTPEfTg9J038Zrv8zQXvxsGcsBDQBJimpyd0KDxsWot6IkL7Qa1sGjmYKaVjTNZCXAIaKjkuH9K6n_61_8o2pz4C32Syvf-78ExwAJT1080mw1x65lSCwwnpkOxov2tyQf2ZjiBJ-fDNJYVeWoC1UFDKfrxnwe0HPxJ6aar_6cNjUnamztHFWXf0XJu49ta-Zid2LpyzDcJwH_Pk-9Xsg" />
                        <img alt="Mastercard" height="15" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5pvc8nsJKfu2NIY-zmlIkLre_DSROygchfPZnJ-NYhm8y28PKmWGa8xoSQRb1KnAw82mEznJuvHfFybF4w4vLhxmBBzyP3kwR3AL3vZbsnLp7XO_5XfIaVM-WFSFt6YQ7zTYO7bMog5uJVDO9BQr0V633z611dPQeveGsjewdW4SWowea_rmyj0Nx0w0kZi8fUuAC6w5-n1BHuDOgCIcHpoM_1yyspXWXWho5ymP2nPOUOsKcZDvHUg" />
                    </div>
                </button>
                <div class="collapse mb-3" id="cardForm">
                    <div class="p-3 bg-light rounded-3 border">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label small">Número de Tarjeta</label>
                                <input class="form-control" placeholder="0000 0000 0000 0000" type="text" />
                            </div>
                            <div class="col-6">
                                <label class="form-label small">Expiración</label>
                                <input class="form-control" placeholder="MM/YY" type="text" />
                            </div>
                            <div class="col-6">
                                <label class="form-label small">CVV</label>
                                <input class="form-control" placeholder="***" type="password" />
                            </div>
                        </div>
                    </div>
                </div>
                <button class="payment-method-btn" data-bs-target="#qrForm" data-bs-toggle="collapse" type="button">
                    <span class="fw-bold"><i class="fa-solid fa-qrcode me-2 opacity-75"></i> Yape / Plin</span>
                    <i class="fa-solid fa-chevron-down small opacity-50"></i>
                </button>
                <div class="collapse" id="qrForm">
                    <div class="qr-container border">
                        <img alt="QR" class="img-fluid rounded mb-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbKLpa3iV1IyY2icU-kUinZHslsW347giobKDlavlqRQiQ3_Jq3b798-dTwhiNdKzUK0g5jkBzDq-6iJvvi6FVVEb_uAUUQML4Vb1hK6UKmV3hrrYxhUkotL8PfIhdaHA7hG4fZRWy7Dtr-NYauEQlSBS2QHL4CGfdDyeEJKco5cBFDw9OL1i0BU-Tp9A5muUR9ik6tGLVPE0jLtS7UnFZ6PQEge6RPN-hyia4UaAdQ5ke6rNiHFv3Xw" style="max-width: 150px;" />
                        <p class="small text-muted mb-0">Escanea el código para pagar al instante.</p>
                    </div>
                </div>
            </section>
        </div>
        <!-- Right Side: Order Summary -->
        <div class="col-lg-4">
            <div class="sticky-summary">
                <div class="checkout-card">
                    <h3 class="h5 mb-4 font-manrope">Resumen del Pedido</h3>
                    <!-- Item List -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img alt="Supradyn" class="product-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIowumpsP5ZmLX4oHwj_XoUe1RLYUyR0_BoU3f8arBLvoTtsCli9ODRCK-aVB0i7d1mcbUOg9SoSk8LvGXklnD8oxMUYaVrW50HgM7uAY71Q7w4rQU7YhYz0Xm0gdwth3lSHiMmmKI7HQ-hBIxGwjt1SbVBqqF_HeIAerE5riBys0yhF1PsKXg6GjIal6BHXGqw7mgA3YiMaQLIP0DIpsbq-Ss6AaDKHgwysqe0OEBNVKMgz3nm-uL_Q" />
                            <div class="flex-grow-1">
                                <div class="fw-bold small">Supradyn Forte x 30 Tab</div>
                                <div class="text-muted small">Cantidad: 1</div>
                                <div class="fw-bold small">S/ 45.90</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <img alt="Gel" class="product-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiOKdKdS_kw94YLQg1BiCMEz_IpSOJ5j4_6wKIR5hCa4pxjSxU7UG7um3tUbrUqLppzAlYu80NFdB11szbpbGY-fOTr60xOVM4CkDKdeX6EU1w_UxxPl458BSR7RtEEg_RpHkBZmHnzfwTHCBWId8K-hkNgj_h3_nh04ENiV4CyjWMiPRwof2rZl5cgwBMhyCr4lAiPN1XwwbyA2YLySHOn6yEd7PKvj0v80dZ30ltncj3dnEsB_eEQQ" />
                            <div class="flex-grow-1">
                                <div class="fw-bold small">Gel Antibacterial Orgánico</div>
                                <div class="text-muted small">Cantidad: 2</div>
                                <div class="fw-bold small">S/ 24.00</div>
                            </div>
                        </div>
                    </div>
                    <hr class="opacity-10 my-3" />
                    <div class="small mb-2 d-flex justify-content-between text-muted">
                        <span>Subtotal</span>
                        <span>S/ 69.90</span>
                    </div>
                    <div class="small mb-2 d-flex justify-content-between text-muted">
                        <span>Costo de Envío</span>
                        <span class="text-success fw-bold">Gratis</span>
                    </div>
                    <div class="small mb-4 d-flex justify-content-between text-muted">
                        <span>Descuento Club Farma</span>
                        <span class="text-danger fw-bold">- S/ 5.00</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="h5 mb-0 fw-bold font-manrope">Total</span>
                        <span class="h4 mb-0 fw-bold text-primary-brand font-manrope">S/ 64.90</span>
                    </div>
                    <button class="btn btn-primary-brand w-100 py-3 mb-4 shadow-lg">
                        FINALIZAR COMPRA <i class="fa-solid fa-lock ms-2 small"></i>
                    </button>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-1 text-muted" style="font-size: 10px;">
                                <i class="fa-solid fa-circle-check text-success"></i>
                                <span>Garantía de Calidad</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-1 text-muted" style="font-size: 10px;">
                                <i class="fa-solid fa-shield-halved text-primary-brand"></i>
                                <span>Transacción Segura</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2 p-2 bg-white rounded-3 border">
                    <input class="form-control form-control-sm border-0 bg-transparent" placeholder="Código de cupón" type="text" />
                    <button class="btn btn-sm fw-bold text-primary-brand">Aplicar</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



