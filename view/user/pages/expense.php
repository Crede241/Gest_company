<?php
$title = "Dépenses de l'entreprise";
ob_start();
?>
<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Dépenses</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal"
                                data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Ajouter une
                            dépense
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
                                <th>Désignation</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($expenses as $expense) { ?>
                                <tr>
                                    <td>
                                        <?= $expense['designation_account'] ?>
                                    </td>
                                    <td>
                                        <?= $expense['amount_account'] ?>
                                    </td>
                                    <td>
                                        <?= $expense['date_account'] ?>
                                    </td>
                                    <td>
                                        <span class="fw-bold ms-1"><?= $expense['hour_account'] ?></span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-toggle="modal" data-bs-target="#expense<?= $expense['id_account'] ?>"><i
                                                        class="icofont-edit text-success"></i></button>
                                            <a href="accounting/expense/delete/<?= $expense['id_account'] ?>" type="button"
                                               class="btn btn-outline-secondary deleterow"><i
                                                        class="icofont-ui-delete text-danger"></i></a>
                                        </div>
                                    </td>
                                    <div class="modal fade" id="expense<?= $expense['id_account'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title  fw-bold" id="expeditLabel">Modifier la dépense </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form nsubmit="submitUpdate('<?= $expense['id_account'] ?>'); return false"
                                                      id="upForm<?= $expense['id_account'] ?>">
                                                    <div class="modal-body">
                                                        <div class="deadline-form">

                                                            <div class="mb-3">

                                                                <div class="row g-3 mb-3">
                                                                    <div class="col-sm-6">
                                                                        <label for="designe" class="form-label">Désignation</label>
                                                                        <input type="text" name="designe"
                                                                               value="<?= $expense['designation_account'] ?>"
                                                                               class="form-control" id="designe">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="montant" class="form-label">Montant</label>
                                                                        <input type="number" name="montant" value="<?= $expense['amount_account'] ?>"
                                                                               class="form-control" id="montant">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="form-label">Type de dépense</label>
                                                                        <select class="form-select" name="type" id="type">
                                                                            <option value="1" <?= $expense['type_account'] == 1 ? "selected" : "" ?>>
                                                                                Dépense fixe
                                                                            </option>
                                                                            <option value="2" <?= $expense['type_account'] == 2 ? "selected" : "" ?>>
                                                                                Dépense variable
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="form-label">Catégorie</label>
                                                                        <select class="form-select" name="cat" id="cat">
                                                                            <?php
                                                                            foreach ($categories as $category) { ?>
                                                                                <option <?= $expense['id_cat'] == $category['id_cat'] ? "selected" : "" ?>
                                                                                        value="<?= $category['id_cat'] ?>"><?= $category['reference_cat'] ?></option>
                                                                            <?php
                                                                            } ?>
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
                                                            $("#upForm<?= $expense['id_account']?>").submit(function () {
                                                                $.ajax({
                                                                    url: "accounting/expense/update/<?= $expense['id_account'] ?>",
                                                                    type: "POST",
                                                                    data: new FormData(this),
                                                                    contentType: false,
                                                                    cache: false,
                                                                    processData: false,
                                                                    success: function (data) {
                                                                        toast = JSON.parse(data);
                                                                        showToast(toast.color, toast.title, toast.message);
                                                                        setTimeout(pageRefresh, 1000);
                                                                        function pageRefresh() {
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
                                </tr> <?php
                            } ?>
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
                <h5 class="modal-title  fw-bold" id="expaddLabel">Ajouter une dépense</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addForm">
                <div class="modal-body">
                    <div class="mb-3">

                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="designe" class="form-label">Désignation</label>
                                <input type="text" name="designe" class="form-control" id="designe">
                            </div>
                            <div class="col-sm-6">
                                <label for="montant" class="form-label">Montant</label>
                                <input type="number" name="montant" class="form-control" id="montant">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Type de dépense</label>
                                <select class="form-select" name="type" id="type">
                                    <option value="1">Dépense fixe</option>
                                    <option value="2">Dépense variable</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Catégorie</label>
                                <select class="form-select" name="cat" id="cat">
                                    <?php
                                    foreach ($categories as $category) { ?>
                                        <option value="<?= $category['id_cat'] ?>"><?= $category['reference_cat'] ?></option>
                                    <?php
                                    } ?>
                                </select>
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
            url: "accounting/expense/add",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                let toast = JSON.parse(data)
                showToast(toast.color, toast.title, toast.message);
                setTimeout(pageRefresh, 2000);
                function pageRefresh() {
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
