@extends('layouts.app')



@section('content')

<div class="container my-5 py-4">
    <header class="mb-5">
        <h1 class="display-6 fw-bold" style="color: var(--primary-color);">Tu Carrito de Compras</h1>
        <p>Revisa tus productos seleccionados y procede al pago seguro.</p>
    </header>
    <div class="row g-4">
        <!-- Product List Column -->
        <div class="col-lg-8">
            <!-- Desktop Header -->
            <div class="d-none d-md-grid bg-white p-3 rounded-3 border mb-4 fw-semibold small" style="grid-template-columns: 3fr 1fr 1fr 1fr;">
                <div>Producto</div>
                <div class="text-center">Precio</div>
                <div class="text-center">Cantidad</div>
                <div class="text-end pe-3">Subtotal</div>
            </div>
            <!-- Product Row 1 -->
            <div class="card border-0 custom-shadow rounded-3 p-4 mb-3">
                <div class="row align-items-center g-3">
                    <div class="col-md-6 d-flex align-items-center gap-4">
                        <div class="product-img-container">
                            <img alt="Amoxicilina" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxpPeEWLQisX4BLsuvGukcBaBsjjbh0uhci1VtRQIGPrbf00g9QjHr4oIOqAxxVnNYAZLo6N_YZk11I5LO7DMbOf5YNytpKFhhNBuqNuZpGb0FaHyaCvHfY-zIoPXc63fcOiJcMlK4yfR1ZQaMVI0NJp21g_PKZub7g_btnYhY4sKnDMpVPmj4PxVNYCkOqM6WmOCPJhwqCRptYb1t-Oqr6_Zkw8CyOkFtS8e-Ftm9t2GAnDP8OWDLyg" />
                        </div>
                        <div>
                            <h3 class="h6 mb-1 fw-bold">Amoxicilina 500mg</h3>
                            <p class="small mb-1">Caja de 30 cápsulas • Antibiótico</p>
                            <span class="text-success small fw-semibold">
                                <i class="fa-solid fa-circle-check"></i> En Stock
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 text-md-center">
                        <span class="d-md-none small d-block">Precio</span>
                        <span class="fw-bold" style="color: var(--primary-color);">$12.50</span>
                    </div>
                    <div class="col-6 col-md-2 d-flex justify-content-md-center">
                        <div class="quantity-control">
                            <button class="minus" type="button">-</button>
                            <input readonly="" type="number" value="1" />
                            <button class="plus" type="button">+</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex flex-md-column align-items-center align-items-md-end justify-content-between justify-content-md-center">
                        <div>
                            <span class="d-md-none small d-block">Subtotal</span>
                            <span class="fw-bold" style="color: var(--primary-color);">$12.50</span>
                        </div>
                        <button class="btn btn-link text-danger p-0 mt-md-2">
                            <i class="fa-regular fa-trash-can fs-5"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Row 2 -->
            <div class="card border-0 custom-shadow rounded-3 p-4 mb-4">
                <div class="row align-items-center g-3">
                    <div class="col-md-6 d-flex align-items-center gap-4">
                        <div class="product-img-container">
                            <img alt="Termómetro" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1l8iQONvn4Al2UpdU0sVrjoiHpOvQyNi1iCP53EkgBN9oe1EaI7scKyLjc2jm1--hgxXPDfCBsFn1XZrQlX0aoaMbV6BgqKDBm3hD6-FDTJHsMG_Eaj9ja2Jp9fju5rXBmYenGuBD11yo8NpCoV2eEX3BGfGRWMbCiacKwbqkQyPiPN7ab_Ldiu5qmVYXqFzV42wZ8Gi9_10AGyqWywlPjUtZYYusZT10XLCNGT432yk8fO6AkStpRQ" />
                        </div>
                        <div>
                            <h3 class="h6 mb-1 fw-bold">Termómetro Infrarrojo</h3>
                            <p class="small mb-1">Digital sin contacto • Grado Médico</p>
                            <span class="text-success small fw-semibold">
                                <i class="fa-solid fa-circle-check"></i> En Stock
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 text-md-center">
                        <span class="d-md-none small d-block">Precio</span>
                        <span class="fw-bold" style="color: var(--primary-color);">$45.00</span>
                    </div>
                    <div class="col-6 col-md-2 d-flex justify-content-md-center">
                        <div class="quantity-control">
                            <button class="minus" type="button">-</button>
                            <input readonly="" type="number" value="1" />
                            <button class="plus" type="button">+</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex flex-md-column align-items-center align-items-md-end justify-content-between justify-content-md-center">
                        <div>
                            <span class="d-md-none small d-block">Subtotal</span>
                            <span class="fw-bold" style="color: var(--primary-color);">$45.00</span>
                        </div>
                        <button class="btn btn-link text-danger p-0 mt-md-2">
                            <i class="fa-regular fa-trash-can fs-5"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button class="btn btn-link text-primary fw-semibold text-decoration-none p-0 d-flex align-items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Seguir comprando
                </button>
            </div>
        </div>
        <!-- Sidebar Summary -->
        <aside class="col-lg-4">
            <div class="card border-0 custom-shadow rounded-4 p-4 sticky-summary">
                <h2 class="h5 fw-bold mb-4 border-bottom pb-3">Resumen de Compra</h2>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span class="fw-medium">$57.50</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Envío Estimado</span>
                        <span class="text-success fw-medium">Gratis</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Impuestos (IVA 12%)</span>
                        <span class="fw-medium">$6.90</span>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label small fw-semibold">¿Tienes un cupón?</label>
                    <div class="input-group">
                        <input class="form-control" placeholder="Código" style="background-color: #f9f9ff;" type="text" />
                        <button class="btn btn-outline-secondary" style="background-color: #345f99; color: white; border: none;" type="button">Aplicar</button>
                    </div>
                </div>
                <div class="border-top pt-4 mb-4">
                    <div class="d-flex justify-content-between align-items-end">
                        <span class="h6 mb-1">Total Final</span>
                        <span class="h2 fw-bold mb-0" style="color: var(--primary-color);">$64.40</span>
                    </div>
                    <p class="mt-2" style="font-size: 10px;">* El costo final incluye impuestos y envío certificado.</p>
                </div>
                <button class="btn btn-cta-red w-100 d-flex align-items-center justify-content-center gap-2 mb-4">
                    Finalizar compra
                    <i class="fa-solid fa-cart-arrow-down"></i>
                </button>
                <div class="border-top pt-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="fa-solid fa-shield-halved text-primary fs-5"></i>
                        <div style="line-height: 1.2;">
                            <p class="small fw-bold mb-0">100% Pago Seguro</p>
                            <span style="font-size: 11px;">Encriptación SSL de 256 bits</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="fa-solid fa-truck text-primary fs-5"></i>
                        <div style="line-height: 1.2;">
                            <p class="small fw-bold mb-0">Envío Certificado</p>
                            <span style="font-size: 11px;">Entrega garantizada en 24-48h</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-notes-medical text-primary fs-5"></i>
                        <div style="line-height: 1.2;">
                            <p class="small fw-bold mb-0">Garantía Farmacéutica</p>
                            <span style="font-size: 11px;">Productos certificados por la FDA</span>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>

<script>
    // Quantity controls
    document.querySelectorAll('.quantity-control').forEach(control => {
        const input = control.querySelector('input');
        control.querySelector('.minus').addEventListener('click', () => {
            if (parseInt(input.value) > 1) input.value = parseInt(input.value) - 1;
        });
        control.querySelector('.plus').addEventListener('click', () => {
            input.value = parseInt(input.value) + 1;
        });
    });
</script>

@endsection

