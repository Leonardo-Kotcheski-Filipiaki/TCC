<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="./css/stylel.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <section>
        <div class="mask d-flex align-items-center  gradient-custom-3 ">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-4 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;" id="form">
                            <div class="card-body p-5">
                                <h2 class="Entrar text-uppercase text-center mb-2">Entrar</h2>
                                <h3 class="instruções text-center mb-3">Coloque as informações de login abaixo nos campos abaixo</h3>

                                <form action="loginFunc.php" method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="emailLogin" placeholder="Email"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg" name="senhaLogin" placeholder="Senha"/>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-2 text-body ">Login</button>
                                    </div>
                                    <p class="text-center text-muted mt-5 tb">Ainda não possui uma conta? <a href="!#"
                                        class="fw-bold text-body"><u>Clique aqui e crie uma!</u></a></p>
                                
                                
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
