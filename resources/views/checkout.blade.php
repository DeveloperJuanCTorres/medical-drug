@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row g-4">
        <!-- Left Column -->
        <div class="col-lg-8">
            <!-- Step 1: Personal Data -->
            <section class="checkout-card">
                <div class="card-header-custom">
                    <div class="icon-box">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h2 class="h5 mb-0 fw-bold">1. Personal Information</h2>
                        <p class="small text-muted mb-0">Identification for prescription verification</p>
                    </div>
                </div>
                <div class="p-4 p-md-5">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-muted">DNI / Identity Document</label>
                            <input class="form-control form-control-lg" placeholder="8-digit document number" type="text" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-muted">Phone Number</label>
                            <input class="form-control form-control-lg" placeholder="+51 000 000 000" type="tel" />
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-semibold text-muted">Email Address</label>
                            <input class="form-control form-control-lg" placeholder="example@medicaldrug.com" type="email" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- Step 2: Delivery Address -->
            <section class="checkout-card">
                <div class="card-header-custom">
                    <div class="icon-box">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h2 class="h5 mb-0 fw-bold">2. Delivery Address</h2>
                        <p class="small text-muted mb-0">Where should we send your medication?</p>
                    </div>
                </div>
                <div class="p-4 p-md-5">
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label small fw-semibold text-muted">Department</label>
                            <select class="form-select form-select-lg">
                                <option>Lima</option>
                                <option>Arequipa</option>
                                <option>Cusco</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-semibold text-muted">Province</label>
                            <select class="form-select form-select-lg">
                                <option>Lima</option>
                                <option>Callao</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-semibold text-muted">District</label>
                            <select class="form-select form-select-lg">
                                <option>Miraflores</option>
                                <option>San Isidro</option>
                                <option>Santiago de Surco</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-semibold text-muted">Street Address &amp; Number</label>
                        <input class="form-control form-control-lg" placeholder="Av. Pardo 123, Apt 401" type="text" />
                    </div>
                    <div>
                        <label class="form-label small fw-semibold text-muted">Reference / Special Instructions</label>
                        <textarea class="form-control" placeholder="Next to the main hospital entrance..." rows="2"></textarea>
                    </div>
                </div>
            </section>
            <!-- Step 3: Delivery Method -->
            <section class="checkout-card">
                <div class="card-header-custom">
                    <div class="icon-box">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <div>
                        <h2 class="h5 mb-0 fw-bold">3. Shipping Method</h2>
                        <p class="small text-muted mb-0">Choose your preferred arrival time</p>
                    </div>
                </div>
                <div class="p-4 p-md-5">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input checked="" class="btn-check" id="express" name="shipping" type="radio" />
                            <label class="shipping-option" for="express">
                                <div class="d-flex justify-content-between mb-3">
                                    <i class="fa-solid fa-bolt text-primary fs-3"></i>
                                    <span class="badge bg-primary rounded-pill text-uppercase" style="font-size: 8px;">Fastest</span>
                                </div>
                                <h6 class="fw-bold mb-1">Express</h6>
                                <p class="small text-muted mb-3">Within 60 mins</p>
                                <p class="fw-bold text-primary mb-0 mt-auto">$5.90</p>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input class="btn-check" id="scheduled" name="shipping" type="radio" />
                            <label class="shipping-option" for="scheduled">
                                <div class="mb-3">
                                    <i class="fa-solid fa-calendar-day text-muted fs-3"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Scheduled</h6>
                                <p class="small text-muted mb-3">Pick a specific time</p>
                                <p class="fw-bold text-primary mb-0 mt-auto">$3.50</p>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input class="btn-check" id="pickup" name="shipping" type="radio" />
                            <label class="shipping-option" for="pickup">
                                <div class="mb-3">
                                    <i class="fa-solid fa-store text-muted fs-3"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Pick up</h6>
                                <p class="small text-muted mb-3">At nearest pharmacy</p>
                                <p class="fw-bold text-success mb-0 mt-auto">FREE</p>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Step 4: Payment Method -->
            <section class="checkout-card">
                <div class="card-header-custom">
                    <div class="icon-box">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <div>
                        <h2 class="h5 mb-0 fw-bold">4. Payment Selection</h2>
                        <p class="small text-muted mb-0">All transactions are clinical-grade encrypted</p>
                    </div>
                </div>
                <div class="p-4 p-md-5">
                    <div class="row g-3 row-cols-2 row-cols-sm-3 row-cols-lg-5 mb-4">
                        <div class="col">
                            <button class="payment-btn">
                                <img alt="Visa" class="img-fluid mb-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuTesHboloUWTY2SQR8z9UWdk6xs43Z0uKbElRqxilxZpauwOPCVaTJviv4yEwB8FD9VNutEUjCdNE2BfAcFiPKTu6t955xJU_CiM6OZL7J4nNsACYXg47EdtmEU_HHVxYhh671n27v4T64h13WUDLRbvr3gBCR2rUfAqPMnupIm4QL-DfhOeblwlODktWYNrNEWOmv7lRfXp9SV-VWAeGMowd1S5CfPBhO0qCR5VUgQJ9ZURnLfv-1A" />
                                <span class="small fw-semibold">Visa</span>
                            </button>
                        </div>
                        <div class="col">
                            <button class="payment-btn">
                                <img alt="Mastercard" class="img-fluid mb-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfvR_OtjmrI04kpXykTeJa3IWPArvic9mGJWZxwcQisFmecQk2wzUvYvXNiGD1GN0WAdvfOo6ZAmPLUO-cR8EQK75I9BPm5s-yvTJYXvTuPLQ0g1y6_xEpaWM6eNlJ3u8dD0fH2mh7YYT731FlklKD_TmRZ0MR36sWiEgZOOS8rtSEfJZGDPGq7yJMRULjZ9pCLmasRuBm1XqKgd8o_EWSHifDcO6Uvst9TT2ENKd7c9VKOdopK8Z5OA" />
                                <span class="small fw-semibold">Mastercard</span>
                            </button>
                        </div>
                        <div class="col">
                            <button class="payment-btn">
                                <div class="rounded-2 bg-primary d-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px; background-color: #9333ea !important;">
                                    <span class="text-white small fw-bold">Yape</span>
                                </div>
                                <span class="small fw-semibold">Yape</span>
                            </button>
                        </div>
                        <div class="col">
                            <button class="payment-btn">
                                <div class="rounded-2 bg-info d-flex align-items-center justify-content-center mb-2" style="width: 40px; height: 40px; background-color: #06b6d4 !important;">
                                    <span class="text-white small fw-bold">Plin</span>
                                </div>
                                <span class="small fw-semibold">Plin</span>
                            </button>
                        </div>
                        <div class="col">
                            <button class="payment-btn">
                                <i class="fa-solid fa-building-columns text-muted fs-3 mb-2"></i>
                                <span class="small fw-semibold">Bank</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>
        <!-- Right Column (Sidebar) -->
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 100px;">
                <div class="checkout-card mb-4">
                    <div class="order-summary-header">
                        <h3 class="h5 mb-0 fw-bold d-flex align-items-center gap-2">
                            <i class="fa-solid fa-bag-shopping"></i>
                            Order Summary
                        </h3>
                    </div>
                    <div class="p-4">
                        <!-- Items -->
                        <div class="overflow-y-auto pr-2 scrollbar-thin mb-4" style="max-height: 250px;">
                            <div class="d-flex gap-3 mb-4">
                                <div class="flex-shrink-0 bg-light rounded p-1" style="width: 64px; height: 64px;">
                                    <img alt="Medication" class="img-fluid object-fit-contain mix-blend-multiply h-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAB3KI6BpO3Cn_JJjoooaPEJMNyvXFaE6WqCO244qYml73RoayYkLuajsBs-VpWbwolnYGxDWH7VH5Z_S4H4b9WuavkBf-HJR3bRebcJ6e2ALxjBdSJwK-6rz2zYJ-DiLTG6gdb77B_cEaWz7u9Pt-OCWv5Pn3liGdCM78Jn2itaMbCtT_iRM65KFumxv_UOUQR9j8jQ79K-OFQipMjjDsDV7HhiODZ68BGjRpLvz2XbUv9tL3ko_h1kQ" />
                                </div>
                                <div class="flex-grow-1">
                                    <p class="fw-bold small mb-0">Amoxicillin 500mg</p>
                                    <p class="small text-muted mb-1">Box of 30 caps</p>
                                    <div class="d-flex justify-content-between">
                                        <span class="small">Qty: 1</span>
                                        <span class="fw-bold">$12.50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 mb-4">
                                <div class="flex-shrink-0 bg-light rounded p-1" style="width: 64px; height: 64px;">
                                    <img alt="Thermometer" class="img-fluid object-fit-contain mix-blend-multiply h-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCF216smA2LSQ-U9w4-gyDXl9ZHfZP8RARbR0fwLrRWg8cnNfSlMerr3CMaTs7R3xOVfFF_7K01ZkzJRSZwPmCjdSn8EezRda9nkCjYP5-pcMsyLQggdrcBbMMFpamQI17VOr3Y2ix7u1_iLAGSUAlZBiBs2SomlX9fFI1r9JR5htcMpcVEev9Ve-X0gtzWwRhUDzH-igRFDQHj25jg3ioDI5WpVrwRt0MHdBe_2ZZgTLul3g3p8mVrww" />
                                </div>
                                <div class="flex-grow-1">
                                    <p class="fw-bold small mb-0">Infrared Thermometer</p>
                                    <p class="small text-muted mb-1">Digital Precision</p>
                                    <div class="d-flex justify-content-between">
                                        <span class="small">Qty: 1</span>
                                        <span class="fw-bold">$45.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 text-muted opacity-25" />
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2 small">
                                <span class="text-muted">Subtotal</span>
                                <span>$57.50</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2 small">
                                <span class="text-muted">Delivery Fee (Express)</span>
                                <span>$5.90</span>
                            </div>
                            <div class="d-flex justify-content-between mb-0 small text-success fw-bold">
                                <span>Prescription Discount</span>
                                <span>-$5.00</span>
                            </div>
                        </div>
                        <hr class="my-4 text-muted opacity-25" />
                        <div class="d-flex justify-content-between align-items-end pt-2 mb-4">
                            <div>
                                <p class="text-uppercase small text-muted mb-1" style="font-size: 10px; font-weight: 600;">Estimated Total</p>
                                <p class="h2 text-primary fw-bold mb-0">$58.40</p>
                            </div>
                            <div class="bg-light p-2 rounded d-flex align-items-center gap-1 text-primary">
                                <i class="fa-solid fa-circle-check" style="font-size: 14px;"></i>
                                <span class="fw-bold text-uppercase" style="font-size: 9px; letter-spacing: -0.5px;">Tax Incl.</span>
                            </div>
                        </div>
                        <button class="btn btn-confirm w-100 text-white d-flex align-items-center justify-content-center gap-2 mb-3">
                            Confirmar pedido
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <p class="text-center text-muted mb-0" style="font-size: 11px;">
                            By clicking Confirm, you agree to our <a class="text-primary text-decoration-underline" href="#">Clinical Terms of Service</a> and Prescription policies.
                        </p>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="checkout-card p-3 text-center mb-0">
                            <i class="fa-solid fa-shield-halved text-success fs-3 mb-2"></i>
                            <p class="text-uppercase fw-bold text-muted mb-0" style="font-size: 10px;">Safe Pharma</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="checkout-card p-3 text-center mb-0">
                            <i class="fa-solid fa-headset text-primary fs-3 mb-2"></i>
                            <p class="text-uppercase fw-bold text-muted mb-0" style="font-size: 10px;">24/7 Pharmacist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

