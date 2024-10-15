<!doctype html>
<html lang="es">
    <head>
        <title>Registro</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">

        <style>
            .img-small {
              max-width: 70%; /* Ajusta este valor según lo necesites */
              margin-bottom: 0;
            }

           
    .custom-title {
      font-family: 'Arial', sans-serif;
      font-weight: bold; /* Aplica negrita */
      margin-bottom: 0;
    }

    .custom-form {
    margin-top: 0; /* Elimina el margen superior del formulario */
  }

  .custom-title {
    margin-bottom: 0; /* Elimina el margen inferior del título */
  }
 
          </style>
        
    </head>

    <body>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                
              <div class="row d-flex justify-content-center align-items-center h-100">
                 
                <div class="col-md-9 col-lg-6 col-xl-5 mt-0">
                    
                  <img src="{{asset('images/logoprincipal.png')}}" class="img-fluid img-small" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-0">

                  <form action="{{route('register')}}" method="post">
                    @csrf
                     <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <p class="lead fw-semibold mb-3 me-3 fs-3">Formulario de registro</p>
                     </div> 
          
                    {{-- <div class="divider d-flex align-items-center my-4">
                      <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div> --}}
          
                    <!-- name input -->
                    <div data-mdb-input-init class="form-outline mb-2">
                        <input type="text" id="form3Example2" name="name" class="form-control form-control-lg"
                          placeholder="Nombre" />
                        <label class="form-label" for="form3Example3">Nombre Completo</label>
                      </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-1">
                      <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa un correo valido" />
                      <label class="form-label" for="form3Example3">Correo Electrónico</label>
                    </div>
          
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-1">
                      <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Ingresa la contraseña" />
                      <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-1">
                        <input type="password" name="password_confirmation" id="form3Example4" class="form-control form-control-lg"
                          placeholder="Ingresa la contraseña" />
                        <label class="form-label" for="form3Example4">Confirmar Contraseña</label>
                      </div>
          
                    
          
                    <div class="text-center text-lg-start mt-2 pt-2">
                      <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrarse</button>
                       <p class="small fw-bold mt-2 pt-1 mb-0">Ir a <a href="{{route('login')}}"
                          class="link-danger">Login</a></p>
                    </div>
          
                  </form>
                </div>
              </div>
            </div>
            <div
              class="d-flex flex-column flex-md-row text-center text-md-start justify-content-center align-items-center py-4 px-4 px-xl-5 bg-primary">
              <!-- Copyright -->
              <div class="text-white mb-4 mb-md-0">
                Copyright © 2024. Todos los derechos reservados.
              </div>
              <!-- Copyright -->
          
              <!-- Right -->
              {{-- <div>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div> --}}
              <!-- Right -->
            </div>
          </section>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
