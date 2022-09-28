<?php
$title = "profile-utilisateur";
ob_start();
$sel = userSession();

?>

<div class="body d-flex py-lg-3 py-md-2">
    <h3 class="fw-bold mb-0">Mes Informations</h3>
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row mt-3">

                <div class="row">
                    <div class="col-12 col-lg-6 mb-5">
                        <div class="card">
                            <div class="card-header">
                                Mofidier mes informations

                            </div>

                            <div class="card-body">
                                <form id="profileForm" action="profile/edit/<?= $sel->getId() ?>">
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label">Nom </label>
                                        <input required type="text" class="form-control" id="first_name"
                                               name="first_name" value="<?= $sel->getFirstName() ?>">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputAddress" class="form-label">Prénom</label>
                                        <input required type="text" class="form-control" id="last_name" name="last_name"
                                               value="<?= $sel->getLastName() ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail" class="form-label">Telephone</label>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                               value="<?= $sel->getPhone() ?>">

                                    </div>
                                    <button type="submit" class="btn btn-outline-warning"><i
                                                class="fa fa-check-square-o"></i>Modifier
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Modifier mon mot de passe
                            </div>
                            <p id="message"></p>
                            <div class="card-body">
                                <form id="passwordForm" action="profile/edit-password">
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label">Ancien mot de passe</label>
                                        <label for="old_password"></label><input type="password" name="old_password"
                                                                                 class="form-control" id="old_password">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label">Nouveau Mot de passe</label>
                                        <label for="new_password"></label><input type="password" name="new_password"
                                                                                 class="form-control" id="new_password">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputAddress" class="form-label">Confirmer le mot de
                                            passe</label>
                                        <label for="con_password"></label><input type="password" name="con_password"
                                                                                 class="form-control" id="con_password">
                                        <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
                                        </div>
                                        <div class="mb-3">
                                            <div class="registrationFormAlert" style="color:green;"
                                                 id="CheckPasswordMatch">
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-outline-primary">Valider</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div><!--End Row-->


            <!--End Dashboard Content-->

        </div>
        <!-- End container-fluid-->


        <!-- Bootstrap core JavaScript-->
        <script src="public/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- simplebar js -->
        <script src="assets/plugins/simplebar/js/simplebar.js"></script>
        <!-- waves effect js -->
        <script src="assets/js/waves.js"></script>
        <!-- sidebar-menu js -->
        <script src="assets/js/sidebar-menu.js"></script>
        <!-- Custom scripts -->
        <script src="assets/js/app-script.js"></script>

        <!--Form Validatin Script-->
        <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="public/js/main.js"></script>
        <script>
            const oldPassword = $("#old_password").val();
            const newPassword = $("#new_password").val();
            const confirmPassword = $("#con_password").val();
            $("#passwordForm").submit(function () {
                if (newPassword !== confirmPassword) {
                    showToast("error", "Erreur", "Les mots de mot de passes ne correspondent pas")
                } else {
                    $.ajax({
                        //dataType: "json",
                        url: "profile/edit-password",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            toast = JSON.parse(data);
                            showToast(toast.color, toast.title, toast.message);
                        }
                    });
                }
                return false;
            });
        </script>


        <script>

            $("#target").submit(function (event) {
                alert("Handler for .submit() called.");
                event.preventDefault();
            });

        </script>

        <script>

            $().ready(function () {

                $("#personal-info").validate();

                // validate signup form on keyup and submit
                $("#signupForm").validate({
                    rules: {
                        firstname: "required",
                        lastname: "required",
                        username: {
                            required: true,
                            minlength: 2
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        confirm_password: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        contactnumber: {
                            required: true,
                            minlength: 10
                        },
                        topic: {
                            required: "#newsletter:checked",
                            minlength: 2
                        },
                        agree: "required"
                    },
                    messages: {
                        firstname: "Please enter your firstname",
                        lastname: "Please enter your lastname",
                        username: {
                            required: "Please enter a username",
                            minlength: "Your username must consist of at least 2 characters"
                        },
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                        confirm_password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",
                            equalTo: "Please enter the same password as above"
                        },
                        email: "Please enter a valid email address",
                        contactnumber: "Please enter your 10 digit number",
                        agree: "Please accept our policy",
                        topic: "Please select at least 2 topics"
                    }
                });

            });

        </script>
        <script>
            $("#profileForm").submit(function () {
                $.ajax({
                    //dataType: "json",
                    url: "profile/edit/<?= $sel->getId() ?>",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        toast = JSON.parse(data);
                        showToast(toast.color, toast.title, toast.message);
                    }
                });
                return false;
            });
        </script>


        <?php
        $page = ob_get_clean();
        require "view/user/template-user.php";
        ?>

