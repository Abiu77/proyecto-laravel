<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">

</head>

<body>
 
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100" style="width: 40%">
          <div class="row d-flex justify-content-center align-items-center bordeado rounded-3">
              <div class="rounded-3 text-black desenfoque">
                  
                    <div class="card-body mx-md-4">
      
                      <div class="text-center">
                        <img src="{{ asset('assets/eva.png') }}"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Registrarse</h4>
                      </div>

                      <form action="{{route('register')}}" method="POST">
                        @csrf                         
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Nombre</label>
                          <input type="text" name="name" id="form2Example11" class="form-control"
                            placeholder="Ingresar nombre" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Correo</label>
                            <input type="email" name="email" id="form2Example11" class="form-control"
                              placeholder="Ingresar correo" />
                          </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                          <input type="password" name="password" id="form2Example22" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Confirmar contraseña</label>
                            <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                          </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">ir a login</p>
                          <a href="{{route('login')}}" class="btn btn-outline-danger">login</a>
                        </div>
      
                      </form>  
                                           
                    </div>
              </div>
          </div>
        </div>
      </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>