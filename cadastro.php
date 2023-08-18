<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>


</head>

<body style="margin: 0; font-family: Arial, sans-serif; background-color: #f8f9fa;">
    <div class="container-two" style="width: 100%; height: 20px;"></div>

    <div class="container-one" style="width: 100%; height: 5px; background-color: #092555;"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #eee;">
        <div class="container" style="width: 100%">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto" style=" margin: 10px 0; padding: 0; ">
                            <li class="nav-item" style="margin-left: 40px; text-align: center;">
                                <a class="nav-link"
                                    style=" color: black; padding: 15px; border-radius: 15px; display: block;"
                                    href="index.php">Home</a>
                            </li>
                            <li class="nav-item" style="margin-left: 40px; text-align: center;">
                                <a class="nav-link"
                                    style="color: black; padding: 15px; border-radius: 15px; display: block;"
                                    href="disciplina.php">Disciplina</a>
                            </li>
                            <li class="nav-item" style="margin-left: 40px; text-align: center;">
                                <a class="nav-link"
                                    style="color: black; padding: 15px; border-radius: 15px; display: block;"
                                    href="provas.php">Provas</a>
                            </li>
                            <li class="nav-item" style="margin-left: 40px; text-align: center;">
                                <a class="nav-link"
                                    style=" background-color: #85B6F1; color: black; padding: 15px; border-radius: 15px; display: block;"
                                    href="login.php" style="font-size: medium;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>


    <div class="container-one" style="width: 100%; height: 5px; background-color: #092555;"></div>

    <div class="container-two" style="width: 100%; height: 20px;"></div>


    <div class="container"
        style="width: 100%; max-width: 650px; margin: 40px auto; padding: 30px; border-radius: 20px; background-color: rgba(9, 37, 85, 0.9);">

        <h2 style="color: #ffff; font-weight: bold; text-align: center;">Cadastre-se</h2>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label" style="color: #ffff; font-size: larger;">Nome</label>
                <input type="text" class="form-control" style="color: #000; font-size: larger;" name="nomeusuario">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label" style="color: #ffff; font-size: larger;"> CPF</label>
                <input type="text" class="form-control" style="color: #000; font-size: larger;" name="cpfusuario">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label" style="color: #ffff; font-size: larger;">Email</label>
                <input type="text" class="form-control" style="color: #000; font-size: larger;" name="emailusuario">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: #ffff; font-size: larger;">Senha</label>
                <input type="text" class="form-control" style="color: #000; font-size: larger;" name="senhausuario">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label" style="color: #ffff; font-size: larger;">Confirmar
                    Senha</label>
                <input type="text" class="form-control" style="color: #000; font-size: larger;" name="conf_senha">
            </div>

            <br>
            <br>

            <div class="col-12" style="display: flex; justify-content: center; gap: 40px;">
                <button type="submit" class="btn btn-primary"
                    style="padding:10px; border-radius: 10px; color: black; background-color:#85b6f1; font-size: 20px; width: 120px;">Entrar</button>
                <a href="login.php" class="btn btn-primary"
                    style="display: inline-block; padding: 10px; border-radius: 10px; color: black; background-color: #85b6f1; font-size: 20px; width: 120px; text-align: center; text-decoration: none;">
                    Voltar
                </a>

            </div>
        </form>
    </div>

    <div style="width: 100%; height: 50px;"></div>


    <footer>
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"> <img src="img/instagram.svg" alt=""></i></a>
            <a href="#"><i class="fab fa-facebook"> <img src="img/facebook.svg" alt=""></i></a>
            <a href="#"><i class="fab fa-youtube"><img src="img/youtube.svg" alt=""></i></a>
            <a href="#"><i class="fab fa-linkedin"><img src="img/linkedin.svg" alt=""></i></a>
            <a href="#"><i class="fab fa-twitter"><img src="img/twitter.svg" alt=""></i></a>
        </div>
        <p style="color: white; margin-top: 15px;">&copy; 2023 Your Website. All rights reserved.</p>
    </footer>


</body>

</html>