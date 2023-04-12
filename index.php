<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP 4 -->
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>LOGIN</title>
  <link rel="shortcut icon" href="icon.png">
</head>
<style>
  #login{
    background: #1784E1;
    border: none;
    border-radius: 20px;
  }

  #login:hover{
    background:#1979c6;
  }
</style>
<body>
<section class="vh-100" style="background-color: #2596be;">
  <div class="container py-5 h-100" style="background-color: #f7f7f7;">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-color: white;">
              <img src="https://play-lh.googleusercontent.com/nCPEEjarQwwLYMjBVOQ617Y4K_aVGg6FMA-JGXeQZ6qyuX2xGwU5Z73NmZ9nm8GxCQ" alt="login form" width="400px" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: white;">
              <div class="card-body p-4 p-lg-5 text-black" >

                <form action="login.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                    <span class="h1 fw-bold mb-0">INICIO DE SESION</span>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control form-control-lg"  placeholder="Username"/>
                    
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                    
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" values="Iniciar Sesion" id="login">Iniciar Sesion</button>
                  </div>
            
                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>


