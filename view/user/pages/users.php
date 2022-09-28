<?php
$title = "Utilisateurs";
ob_start();
?>
<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Utilisateurs</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal"
                                data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Ajouter un utilisateur
                        </button>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myExpenseTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td>
                                        <?= $user['first_name'] ?>
                                    </td>
                                    <td>
                                        <?= $user['last_name'] ?>
                                    </td>
                                    <td>
                                        <?= $user['email_user'] ?>
                                    </td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#users<?= $user['id_user'] ?>"><i
                                                        class="icofont-edit text-success"></i></button>
                                            <a href="users/delete/<?= $user['id_user'] ?>" type="button"
                                               class="btn btn-outline-secondary deleterow"><i
                                                        class="icofont-ui-delete text-danger"></i></a>
                                        </div>
                                    </td>
                                    <div class="modal fade" id="users<?= $user['id_user'] ?>" tabindex="-1"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title  fw-bold" id="expeditLabel">Modifier le
                                                        profil </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form nsubmit="submitUpdate('<?= $user['id_user'] ?>'); return false"
                                                      id="upForm<?= $user['id_user'] ?>">
                                                    <div class="modal-body">
                                                        <div class="deadline-form">

                                                            <div class="mb-3">

                                                                <div class="row g-3 mb-3">
                                                                    <div class="col-sm-6">
                                                                        <label for="first_nam"
                                                                               class="form-label">Nom</label>
                                                                        <input type="text" name="first_name"
                                                                               value="<?= $user['first_name'] ?>"
                                                                               class="form-control" id="first_nam">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="last_name"
                                                                               class="form-label">Prénom</label>
                                                                        <input type="text" name="last_name"
                                                                               value="<?= $user['last_name'] ?>"
                                                                               class="form-control" id="last_name">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="email_user"
                                                                               class="form-label">Email</label>
                                                                        <input type="text" name="email_user"
                                                                               value="<?= $user['email_user'] ?>"
                                                                               class="form-control" id="email_user">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="phone_user"
                                                                               class="form-label">Telephone</label>
                                                                        <input type="text" name="phone_user"
                                                                               value="<?= $user['phone_user'] ?>"
                                                                               class="form-control" id="phone_user">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="password_user"
                                                                               class="form-label">Mote de passe</label>
                                                                        <input type="text" name="password_user"
                                                                               value="<?= $user['password_user'] ?>"
                                                                               class="form-control" id="password_user
">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="form-label">Role</label>
                                                                        <select class="form-select" name="role_user"
                                                                                id="role_user">
                                                                            <option value="1" <?= $user['role_user'] == 1 ? "selected" : "" ?>>
                                                                                Administrateur
                                                                            </option>
                                                                            <option value="2" <?= $user['role_user'] == 2 ? "selected" : "" ?>>
                                                                                Gestionnaire
                                                                            </option>
                                                                            <option value="2" <?= $user['role_user'] == 3 ? "selected" : "" ?>>
                                                                                Agent
                                                                            </option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Annuler
                                                        </button>
                                                        <button type="submit" class="btn btn-warning">Modifier</button>
                                                        <script src="public/js/jquery.min.js"></script>
                                                        <script>
                                                            $("#upForm<?= $user['id_user']?>").submit(function () {
                                                                $.ajax({
                                                                    url: "users/update/<?= $user['id_user']?>",
                                                                    type: "POST",
                                                                    data: new FormData(this),
                                                                    contentType: false,
                                                                    cache: false,
                                                                    processData: false,
                                                                    success: function (data) {
                                                                        toast = JSON.parse(data);
                                                                        showToast(toast.color, toast.title, toast.message);
                                                                        setTimeout(pageRefresh,1000);
                                                                        function pageRefresh(){
                                                                            location.reload();
                                                                        }
                                                                    }
                                                                });
                                                                return false;
                                                            })
                                                        </script>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr> <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>
<div class="modal fade" id="expadd" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expaddLabel">Ajouter un utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addForm">
                <div class="modal-body">
                    <div class="deadline-form">

                        <div class="mb-3">

                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="first_nam"
                                           class="form-label">Nom</label>
                                    <input type="text" name="first_name"
                                           class="form-control" id="first_name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="last_name"
                                           class="form-label">Prénom</label>
                                    <input type="text" name="last_name"
                                           class="form-control" id="last_name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email_user"
                                           class="form-label">Email</label>
                                    <input type="text" name="email_user"
                                           class="form-control" id="email_user">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone_user"
                                           class="form-label">Télephone</label>
                                    <input type="text" name="phone_user"
                                           class="form-control" id="phone_user">
                                </div>
                                <div class="col-sm-6">
                                    <label for="password_user"
                                           class="form-label">Mote de passe</label>
                                    <input type="text" name="password_user"
                                           class="form-control" id="password_user">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Role</label>
                                    <select class="form-select" name="role_user"
                                            id="role_user">
                                        <option value="1">
                                            Administrateur
                                        </option>
                                        <option value="2">
                                            Gestionnaire
                                        </option>
                                        <option value="3">
                                            Agent
                                        </option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myExpenseTable').DataTable();
    });
</script>

<script>
    $("#addForm").submit(function () {
        $.ajax({
            //dataType: "json",
            url: "users/add",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                toast = JSON.parse(data);
                showToast(toast.color, toast.title, toast.message);
                setTimeout(pageRefresh,1000);
                function pageRefresh(){
                    location.reload();
                }
            }
        });
        return false;
    });
</script>

<?php
$page = ob_get_clean();
require "view/user/template-user.php";
?>
