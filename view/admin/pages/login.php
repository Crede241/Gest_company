<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <base href="/balance/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Connexion</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="public/assets/css/my-task.style.min.css">
</head>

<body>

<div id="mytask-layout" class="theme-indigo">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">

        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                 <svg  width="4rem" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">Mytech Balance</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="public/assets/images/login-img.svg" alt="login-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form id="loginForm" class="row g-1 p-3 p-md-4">
                                <div class="col-12 text-center mb-1 mb-lg-5">
                                    <h1>Authentification</h1>
                                    <span>Veillez saisir vos idenfiants</span>
                                    <div id="status"></div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Adresse Email</label>
                                        <input id="userEmail" name="email" type="email" class="form-control form-control-lg" placeholder="name@example.com">
                                        <div id="errEmail"></div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                            <span class="d-flex justify-content-between align-items-center">
                                                Mot de passe
                                                <a class="text-secondary" href="auth-password-reset.html">Mot de passe oublié</a>
                                            </span>
                                        </div>
                                        <input id="userPassword" name="password" type="password" class="form-control form-control-lg" placeholder="***************">
                                        <div id="errPassword"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin">SE CONNECTER</button>
                                </div>

                                <!--div class="col-12 text-center mt-4">
                                    <span class="text-muted">Don't have an account yet? <a href="auth-signup.html" class="text-secondary">Sign up here</a></span>
                                </div>
                               <-->

                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="public/assets/bundles/libscripts.bundle.js"></script>
<script src="public/js/jquery.min.js"></script>
<script>
    $("#loginForm").submit(function () {
        var email = $("#userEmail");
        var pass = $("#userPassword");
        var errEmail = $("#errEmail");
        var errPass = $("#errPassword");
        email.keyup(function () {
            if (email.val() === "") {
                errEmail.html( '<p style="display: block" class="text-danger">Veuillez saisir votre email ou votre pseudo</p>')
            }else{
                errEmail.css("display", "none")
            }
        })


        pass.keyup(function () {
            if (pass.val() === "") {
                errPass.html( '<p style="display: block" class="text-danger">Veuillez saisir le mot de passe</p>')
            }else{
                errPass.css("display", "none")
            }
        })
        if (pass.val() === "") {
            errPass.html('<p style="display: block" class="text-danger">Veuillez saisir le mot de passe</p>')
        }
        if (email.val() === ""){
            errEmail.html('<p style="display: block" class="text-danger">Veuillez saisir votre email ou votre pseudo</p>')
        }
        if (pass.val() !== '' && email.val() !== ''){
            $.ajax({
                url: 'login/auth',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $("#status").html(data)
                }
            })
        }
        return false;
    })
</script>

</body>
</html>
