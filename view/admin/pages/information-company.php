<?php
$title="Information Company";
ob_start();
?>

<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Information de l'entreprise</h4>

            </div>

        </div>
        <!-- End Breadcrumb-->


        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Nom de l'entreprise</label>
                                <input required type="text" class="form-control" id="name" placeholder="Saisir le nom de l'entreprise">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress" class="form-label">adresse</label>
                                <input required type="text" class="form-control" id="address" placeholder="Saisir l'adresse">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputContact" class="form-label">Contact</label>
                                <input required type="number" class="form-control" id="contact">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email de l'entreprise</label>
                                <input type="email" id="email" class="form-control" placeholder="Saisir l'email">

                            </div>

                            <button type="submit" class="btn btn-warning"><i class="fa fa-check-square-o"></i>Modifier</button>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i>Supprimer</button>

                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Row-->

    </div>
    <!-- End container-fluid-->


<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
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
<script>

    $().ready(function() {

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







<?php
$page=ob_get_clean();
require "view/user/template-user.php";
?>
