<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <?php
    $version = '1993.5.2';
    ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="{{asset ('css/styles.css')}}?v=<?php echo $version ?>" rel="stylesheet" />

    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    <div>
        @include('partials.navbar')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
        @include('partials.cart')
    </div>

    <!-- LOGIN MODAL PREMIUM -->
    <div class="modal fade login-modal" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">

                <!-- Botón cerrar -->
                <button type="button" class="btn-close login-close" data-bs-dismiss="modal"></button>

                <!-- Header -->
                <div class="login-header">
                    <div class="login-logo">
                        <i class="fa-solid fa-shield-heart"></i>
                    </div>

                    <h3>Bienvenido</h3>
                    <p>Inicia sesión para continuar comprando.</p>
                </div>

                <!-- Body -->
                <div class="modal-body px-4 pb-4">

                    <form id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="position-relative mb-3">
                            <i class="fa-regular fa-envelope input-icon"></i>

                            <input
                                type="email"
                                name="email"
                                class="form-control login-input"
                                placeholder="Correo electrónico"
                                required>
                        </div>

                        <!-- Password -->
                        <div class="position-relative mb-3">

                            <i class="fa-solid fa-lock input-icon"></i>

                            <input
                                type="password"
                                name="password"
                                id="loginPassword"
                                class="form-control login-input pe-5"
                                placeholder="Contraseña"
                                required>

                            <button
                                type="button"
                                class="password-toggle"
                                id="togglePassword">

                                <i class="fa-regular fa-eye"></i>

                            </button>

                        </div>

                        <!-- Recordarme -->
                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember">

                                <label class="form-check-label small" for="remember">
                                    Recordarme
                                </label>

                            </div>

                            <a href="{{ route('password.request') }}" class="small text-decoration-none text-primary">
                                ¿Olvidaste tu contraseña?
                            </a>

                        </div>

                        <!-- Botón -->
                        <button class="btn login-btn w-100 text-white">
                            <i class="fa-solid fa-right-to-bracket me-2"></i>
                            Iniciar sesión
                        </button>

                    </form>

                    <div class="login-divider">
                        <span>o continúa con</span>
                    </div>

                    <!-- Sociales (opcionales) -->
                    <!-- <div class="d-flex justify-content-center gap-3 mb-4">

                        <button class="btn social-btn">
                            <i class="fa-brands fa-google"></i>
                        </button>

                        <button class="btn social-btn">
                            <i class="fa-brands fa-facebook-f"></i>
                        </button>

                        <button class="btn social-btn">
                            <i class="fa-brands fa-apple"></i>
                        </button>

                    </div> -->

                    <p class="text-center small mb-0 text-muted">
                        ¿No tienes cuenta?
                        <a href="{{ route('register') }}" class="fw-bold text-decoration-none text-primary">
                            Crear cuenta
                        </a>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const items = document.querySelectorAll('.mega-item');
            const submenus = document.querySelectorAll('.submenu');

            items.forEach(item => {

                item.addEventListener('mouseenter', function () {

                    const target = this.dataset.target;

                    // Quitar activos
                    items.forEach(i => i.classList.remove('active'));
                    submenus.forEach(s => s.classList.remove('active'));

                    // Activar categoría
                    this.classList.add('active');

                    // Activar contenido
                    const submenu = document.getElementById(target);

                    if(submenu){
                        submenu.classList.add('active');
                    }

                });

            });

        });
    </script>

    <script>
        $(function(){

            // Mostrar/Ocultar contraseña
            $('#togglePassword').on('click', function(){

                const input = $('#loginPassword');
                const icon = $(this).find('i');

                if(input.attr('type') === 'password'){
                    input.attr('type','text');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                }else{
                    input.attr('type','password');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                }

            });

            // Login AJAX
            $('#loginForm').submit(function(e){

                e.preventDefault();

                const form = $(this);

                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: form.serialize(),

                    success:function(){

                        bootstrap.Modal.getInstance(
                            document.getElementById('loginModal')
                        ).hide();

                        location.reload();

                    },

                    error:function(xhr){

                        let message='Correo o contraseña incorrectos.';

                        if(xhr.responseJSON?.errors){
                            message=Object.values(xhr.responseJSON.errors)
                                .flat()
                                .join('<br>');
                        }

                        Swal.fire({
                            icon:'error',
                            title:'No se pudo iniciar sesión',
                            html:message
                        });

                    }

                });

            });

        });
    </script>
</body>
</html>
