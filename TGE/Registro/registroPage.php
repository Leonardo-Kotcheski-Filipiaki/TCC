<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
         crossorigin="anonymous">
        <link href="./css/StyleR.css" rel="stylesheet">
    <title>Registro</title>
</head>

<body>
    <section>
    <img src="./img/registro.jpg" alt="" id="imgFundo">
        <div class="mask d-flex align-items-center  gradient-custom-3 ">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-4 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;" id="form">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-2">Crie uma Conta</h2>
                                <h3 class="text-uppercase text-center mb-3">E se junte a essa comunidade!</h3>

                                <form action="registroFunc.php" method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Nome de Usuario" name="nome_usuario"/>
                                    </div>

                                    <div class="form-outline mb-4" >
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="E-mail" name="email"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg" placeholder="Senha" name="senha"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg" placeholder="Repita a Senha"  name="senha_repeat"/>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-2 text-body ">Registrar</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 tb">Já possui uma conta? 
                                        <a href="<?php echo URL_BASE?>/login/loginPage.php"
                                            class="fw-bold text-body"><u>Clique aqui e entre!</u></a></p>

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
</html>