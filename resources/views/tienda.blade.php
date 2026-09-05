@extends('layouts.app')

<style>
    :root {
        --primary: #003f7c;
        --primary-container: #0056a6;
        --on-primary: #ffffff;
        --secondary: #345f99;
        --surface-light: #f9f9ff;
        --on-surface: #111c2c;
        --on-surface-variant: #424751;
        --cta-red: #E53935;
        --cta-red-hover: #C62828;
        --surface-variant: #d8e3fa;
        --outline-variant: #c2c6d3;
        --inverse-surface: #263142;
        --success: #28A745;
    }

    body {
        background-color: var(--surface-light);
        color: var(--on-surface);
        font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    .font-display {
        font-family: 'Poppins', sans-serif;
    }

    .navbar {
        height: 80px;
        box-shadow: 0px 10px 30px rgba(0, 59, 115, 0.05);
        background: white;
        border-bottom: 1px solid var(--surface-variant);
    }

    .nav-link {
        font-weight: 600;
        font-size: 14px;
        color: var(--on-surface-variant) !important;
        transition: color 0.2s;
    }

    .nav-link:hover {
        color: var(--primary) !important;
    }

    .search-container {
        position: relative;
    }

    .search-input {
        border-radius: 50px;
        background-color: #f0f3ff;
        border: none;
        padding-left: 40px;
        font-size: 14px;
        height: 40px;
    }

    .search-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #727783;
    }

    .btn-login {
        background-color: var(--primary);
        color: white;
        border-radius: 50px;
        padding: 8px 20px;
        font-weight: 600;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-login:hover {
        background-color: var(--primary-container);
        color: white;
    }

    .breadcrumb-item a {
        text-decoration: none;
        color: var(--on-surface-variant);
        font-size: 12px;
        font-weight: 600;
    }

    .breadcrumb-item.active {
        color: var(--primary);
        font-weight: 700;
    }

    .sidebar-card {
        background: white;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0px 10px 30px rgba(0, 59, 115, 0.05);
        position: sticky;
        top: 100px;
    }

    .filter-title {
        color: var(--primary);
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 0;
    }

    .section-header {
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 16px;
    }

    .product-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 10px 30px rgba(0, 59, 115, 0.05);
        transition: all 0.3s ease;
        border: 1px solid transparent;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-8px);
        border-color: var(--surface-variant);
    }

    .product-image-wrapper {
        height: 256px;
        overflow: hidden;
        position: relative;
        background-color: #f0f3ff;
    }

    .product-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }

    .product-card:hover .product-image-wrapper img {
        transform: scale(1.1);
    }

    .badge-status {
        position: absolute;
        top: 12px;
        left: 12px;
        font-size: 10px;
        font-weight: 700;
        padding: 4px 8px;
        border-radius: 50px;
        text-transform: uppercase;
    }

    .card-actions {
        position: absolute;
        top: 12px;
        right: 12px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        opacity: 0;
        transform: translateX(10px);
        transition: all 0.3s;
    }

    .product-card:hover .card-actions {
        opacity: 1;
        transform: translateX(0);
    }

    .action-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--on-surface-variant);
        transition: all 0.2s;
    }

    .action-btn:hover {
        background: var(--primary);
        color: white;
    }

    .btn-add-cart {
        background-color: var(--cta-red);
        color: white;
        border: none;
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        transition: background 0.2s;
    }

    .btn-add-cart:hover {
        background-color: var(--cta-red-hover);
    }

    .pagination .page-link {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        margin: 0 4px;
        color: var(--on-surface-variant);
        border: 1px solid var(--surface-variant);
    }

    .pagination .page-item.active .page-link {
        background-color: var(--primary-container);
        border-color: var(--primary-container);
        color: white;
    }

    footer {
        background-color: var(--inverse-surface);
        color: #ebf1ff;
    }

    .footer-link {
        color: var(--surface-variant);
        text-decoration: none;
        font-size: 14px;
        transition: color 0.2s;
    }

    .footer-link:hover {
        color: white;
        text-decoration: underline;
    }

    .floating-chat {
        position: fixed;
        bottom: 32px;
        right: 32px;
        width: 56px;
        height: 56px;
        background-color: var(--primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        border: none;
        z-index: 1000;
        transition: transform 0.2s;
    }

    .floating-chat:hover {
        transform: scale(1.1);
    }
</style>

@section('content')

<div style="padding-top: 50px; padding-bottom: 64px;">
    <div class="container-xxl px-4">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li aria-current="page" class="breadcrumb-item active">Tienda</li>
            </ol>
        </nav>
        <div class="row g-4">
            <!-- Sidebar Filters -->
            <aside class="col-lg-3">
                <div class="sidebar-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="filter-title">Filters</h2>
                        <button class="btn btn-link text-danger p-0 text-decoration-none small fw-bold">Clear all</button>
                    </div>
                    <!-- Categories -->
                    <div class="mb-4">
                        <h3 class="section-header">Categories</h3>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="cat1" type="checkbox" />
                            <label class="form-check-label small" for="cat1">Vitamins &amp; Supplements</label>
                        </div>
                        <div class="form-check mb-2">
                            <input checked="" class="form-check-input" id="cat2" type="checkbox" />
                            <label class="form-check-label small fw-bold text-primary" for="cat2">Over-The-Counter (OTC)</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="cat3" type="checkbox" />
                            <label class="form-check-label small" for="cat3">Personal Care</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="cat4" type="checkbox" />
                            <label class="form-check-label small" for="cat4">Medical Equipment</label>
                        </div>
                    </div>
                    <hr class="my-4 text-secondary opacity-25" />
                    <!-- Brands -->
                    <div class="mb-4">
                        <h3 class="section-header">Top Brands</h3>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="brand1" type="checkbox" />
                            <label class="form-check-label small" for="brand1">PharmaCorp</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="brand2" type="checkbox" />
                            <label class="form-check-label small" for="brand2">BioHealth</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="brand3" type="checkbox" />
                            <label class="form-check-label small" for="brand3">MediLife</label>
                        </div>
                    </div>
                    <hr class="my-4 text-secondary opacity-25" />
                    <!-- Price Range -->
                    <div class="mb-4">
                        <h3 class="section-header">Price Range</h3>
                        <input class="form-range" id="priceRange" max="500" min="0" type="range" value="250" />
                        <div class="d-flex justify-content-between mt-2 small fw-bold text-primary">
                            <span>$0</span>
                            <span>$250</span>
                            <span>$500+</span>
                        </div>
                    </div>
                    <hr class="my-4 text-secondary opacity-25" />
                    <!-- Availability -->
                    <div>
                        <h3 class="section-header">Availability</h3>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="avail1" name="avail" type="radio" />
                            <label class="form-check-label small" for="avail1">In Stock</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="avail2" name="avail" type="radio" />
                            <label class="form-check-label small" for="avail2">Home Delivery Only</label>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Content Area -->
            <div class="col-lg-9">
                <!-- Toolbar -->
                <div class="bg-white p-3 rounded-4 shadow-sm d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <p class="mb-0 small text-muted">Showing <span class="fw-bold text-dark">12</span> of <span class="fw-bold text-dark">148</span> products</p>
                        <div class="vr d-none d-md-block" style="height: 24px;"></div>
                        <div class="d-none d-md-flex gap-2">
                            <span class="badge rounded-pill bg-primary px-3 py-2">OTC</span>
                            <span class="badge rounded-pill bg-light text-dark border px-3 py-2">Price: Under $250</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="small text-muted fw-bold">Order by:</span>
                        <select class="form-select form-select-sm border-0 bg-light px-3 py-2" style="width: auto; border-radius: 8px;">
                            <option>Relevance</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest Arrivals</option>
                        </select>
                        <div class="btn-group border rounded-3 overflow-hidden">
                            <button class="btn btn-primary btn-sm px-3"><i class="fa-solid fa-grip"></i></button>
                            <button class="btn btn-white btn-sm px-3 border-start"><i class="fa-solid fa-list"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Product Grid -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4 mb-5">
                    <!-- Product Card 1 -->
                    <div class="col">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img alt="Medicine" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa9vloiwB5xkfEY2G2yEToWLoIn7FMBY0RCwsP-RFbUaRE2G1wblstWyaXjpX0Ar9_vbKljWTkGULCbFwSreW_Awi8rzogIRwiAXvX5n3kC5iapHKTcoFOZyGnFfLGPrR4ZvmnPnZdccZ1jVq6rGYjslDq9HqI2Te144-0QDYpzzf_UACcsNgDjg3B52GWARoA9jnWLBc1GZTzwLCutWUo23nUDBfovsm0Ryuh34zY1x5wiLm2PlxJLQ" />
                                <span class="badge-status bg-success text-white">In Stock</span>
                                <div class="card-actions">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                    <button class="action-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                    <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="p-4 flex-grow-1 d-flex flex-column">
                                <span class="small fw-bold text-primary mb-1">BIOLIFE PHARMA</span>
                                <h4 class="fs-6 fw-bold mb-2">Multivitamin Complex A-Z</h4>
                                <div class="d-flex align-items-center gap-1 mb-3">
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-regular fa-star text-secondary small"></i>
                                    <span class="small text-muted ms-1">(42)</span>
                                </div>
                                <div class="mt-auto">
                                    <p class="fs-4 fw-bold text-primary mb-3">$24.99</p>
                                    <button class="btn-add-cart">
                                        <i class="fa-solid fa-cart-shopping me-2"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="col">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img alt="BP Monitor" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADiXCrSdmVFjl8CDidZptxeyQDvxIprpkYu-eswFTUH8BWji_qTYs-Hey2SFsYZxn4B_QQ1AbjRyhYYZsZ40zw1l2WuLv4ypkvWlyH-NTgQV2Pd_dcW3m6KWpurzEUk863lj6_wiJakZR6b0LtQkLOAfGcwXfIrCwzm0neZtaqNkJRY-19VAT3OAKjx0ylIJXvTqeju40BPolG7rEpUZ0UehOLO-48_dhCU76bfXeqbgNFpuxZKKi4iA" />
                                <span class="badge-status bg-primary text-white">Best Seller</span>
                                <div class="card-actions">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                    <button class="action-btn"><i class="fa-solid fa-arrow-right-arrow-left"></i></button>
                                </div>
                            </div>
                            <div class="p-4 flex-grow-1 d-flex flex-column">
                                <span class="small fw-bold text-primary mb-1">TECHMEDIC</span>
                                <h4 class="fs-6 fw-bold mb-2">Digital Pro Blood Pressure Monitor</h4>
                                <div class="d-flex align-items-center gap-1 mb-3">
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <span class="small text-muted ms-1">(128)</span>
                                </div>
                                <div class="mt-auto">
                                    <p class="fs-4 fw-bold text-primary mb-3">$89.00</p>
                                    <button class="btn-add-cart">
                                        <i class="fa-solid fa-cart-shopping me-2"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="col">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img alt="Omega 3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyp80FF-OyrilQWQjy2sxczPBn7aeUxVzIj0LH-F50mMEuoV8Tl_DfuFzSZHjkaWIhQEIaBaXFb-oEX0Pelgb7KRQLxgRAWxZMQ7a3lK6DuYRkZmJqBBl6OuG6Ea8QEQB2vZT2_M9kbUlfxl92DLokiG4b9SdE3NSQ5XBfB07qwowVuHXe3S48lDVO9R419fd4aANOkpER20V4YVgRZM3ug2QnmEVJ-1sIaMvr433ZL8C0-rz88jZing" />
                                <span class="badge-status bg-danger text-white">Sale -20%</span>
                                <div class="card-actions">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                    <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="p-4 flex-grow-1 d-flex flex-column">
                                <span class="small fw-bold text-primary mb-1">NATURA HEALTH</span>
                                <h4 class="fs-6 fw-bold mb-2">Omega-3 Pure Fish Oil (120 Caps)</h4>
                                <div class="d-flex align-items-center gap-1 mb-3">
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-regular fa-star text-secondary small"></i>
                                    <span class="small text-muted ms-1">(95)</span>
                                </div>
                                <div class="mt-auto">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <p class="fs-4 fw-bold text-primary mb-0">$19.99</p>
                                        <p class="small text-muted text-decoration-line-through mb-0">$24.99</p>
                                    </div>
                                    <button class="btn-add-cart">
                                        <i class="fa-solid fa-cart-shopping me-2"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 4 -->
                    <div class="col">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img alt="Thermometer" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwcMevTeljnKQCLV-hLbx42eReagWGR6VdFh1MvK7S24x506uQ7xbUOTZ0X9ld7FuTGyi8ee7aZEBoX9-jV6JI2MQB8odcWrqRDQcVL9tOjhhd2zqn2ECoVYj6_SJP_3kaiOXxxUWXIoethA_GEviY5VpoUuxNiXR8MxNC-zA0OPslBKV-YNpIuTHEbC_P0I7tZxjbueY-ntyt6ZZUYNvqY9SakT_oRQlxdimI-CS31vJGfeH2prZ9pQ" />
                                <span class="badge-status bg-success text-white">New</span>
                                <div class="card-actions">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="p-4 flex-grow-1 d-flex flex-column">
                                <span class="small fw-bold text-primary mb-1">TECHMEDIC</span>
                                <h4 class="fs-6 fw-bold mb-2">No-Contact Infrared Thermometer</h4>
                                <div class="d-flex align-items-center gap-1 mb-3">
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <span class="small text-muted ms-1">(5)</span>
                                </div>
                                <div class="mt-auto">
                                    <p class="fs-4 fw-bold text-primary mb-3">$45.50</p>
                                    <button class="btn-add-cart">
                                        <i class="fa-solid fa-cart-shopping me-2"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional Rows for layout richness -->
                    <div class="col">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img alt="Kids Vitamin" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAomT2IBCKseL-DBYDSyKaGtKCLctPaaVdWHwhtdWfE_lN2eu7Xrrsmta645FIEPDN-jFbMoqav5T_chN1sbnEJr1-OGnJ4KwNZfHDZo4kH2Dk30pyl2Pa3CAcRG-RFDObB-RFTdJ9qiM3_MgXvvIe7YI_NilII92dc9Rr4-wqqjslD5pJdXjUhRLEmRgXxNcYU_9hGqrgSwM1wpUneGYAyvyLLjZsk9nBUeB0B9x_TviyJaZaIMbm0bg" />
                                <div class="card-actions">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="p-4 flex-grow-1 d-flex flex-column">
                                <span class="small fw-bold text-primary mb-1">KIDSHEALTH</span>
                                <h4 class="fs-6 fw-bold mb-2">Children's Daily Liquid Vitamin</h4>
                                <div class="d-flex align-items-center gap-1 mb-3">
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-regular fa-star text-secondary small"></i>
                                    <span class="small text-muted ms-1">(22)</span>
                                </div>
                                <div class="mt-auto">
                                    <p class="fs-4 fw-bold text-primary mb-3">$15.75</p>
                                    <button class="btn-add-cart">
                                        <i class="fa-solid fa-cart-shopping me-2"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img alt="First Aid Kit" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6C0zUIu6R5EJDLT810-JCI4c7CP0e42siA6tcEClZrRf6ZQBTvZn-EWmjc_tQKMF3rN9I620EDj-W2O8jviSBlhRKoRsHhFb3Bh2OxPL7VpeYLbq5uBN7aLz5-UqX4UjuQVlksU2F2K1DhK1dDKJ3bEVgUaFds-Y4axW_jM24k3LsXaRNZjj99QuJ6a5bomKPebRPL52t9MhE4cU7_f7rUMHEOg7hTnk_Zxc66sBQZ1KiiM-WSEWVdA" />
                                <span class="badge-status bg-success text-white">In Stock</span>
                            </div>
                            <div class="p-4 flex-grow-1 d-flex flex-column">
                                <span class="small fw-bold text-primary mb-1">SAFEGUARD</span>
                                <h4 class="fs-6 fw-bold mb-2">Emergency Professional First-Aid Kit</h4>
                                <div class="d-flex align-items-center gap-1 mb-3">
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <i class="fa-solid fa-star text-warning small"></i>
                                    <span class="small text-muted ms-1">(210)</span>
                                </div>
                                <div class="mt-auto">
                                    <p class="fs-4 fw-bold text-primary mb-3">$59.90</p>
                                    <button class="btn-add-cart">
                                        <i class="fa-solid fa-cart-shopping me-2"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mt-5">
                    <ul class="pagination align-items-center">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fa-solid fa-chevron-left small"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled"><span class="page-link border-0">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">12</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fa-solid fa-chevron-right small"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    // Price range slider listener
    const slider = document.getElementById('priceRange');
    if (slider) {
        slider.addEventListener('input', function() {
            this.nextElementSibling.children[1].textContent = `$${this.value}`;
        });
    }
</script>
@endsection