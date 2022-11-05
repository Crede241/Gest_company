<?php
$title = "Catégories";
ob_start();
?>
<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Catégories</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal"
                                data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Ajouter une
                            Catégories
                        </button>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myCategoryTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                            <tr>
                                <th>Désignation</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody id="category">
                            <?php foreach ($categories as $info) { ?>
                                <tr>
                                    <td>
                                        <?= $info['reference_cat'] ?>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#category<?= $info['id_cat'] ?>"><i
                                                        class="icofont-edit text-success"></i></button>
                                            <a href="category/delete/<?= $info['id_cat'] ?>" type="button"
                                               class="btn btn-outline-secondary deleterow"><i
                                                        class="icofont-ui-delete text-danger"></i></a>
                                        </div>
                                    </td>
                                    <div class="modal fade" id="category<?= $info['id_cat'] ?>" tabindex="-1"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title  fw-bold" id="expeditLabel">Modifier la
                                                        Catégorie </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form onsubmit="submitUpdate('<?= $info['id_cat'] ?>'); return false"
                                                      id="upForm<?= $info['id_cat'] ?>">
                                                    <div class="modal-body">
                                                        <div class="deadline-form">

                                                            <div class="mb-3">

                                                                <div class="row g-3 mb-3">
                                                                    <div class="col-sm-12">
                                                                        <label for="designe" class="form-label">Reférence</label>
                                                                        <input type="text" name="cat" id="cat"
                                                                               value="<?= $info['reference_cat'] ?>"
                                                                               class="form-control">
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
                                                            $("#upForm<?= $info['id_cat']?>").submit(function () {
                                                                $.ajax({
                                                                    url: "category/update/<?= $info['id_cat']?>",
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
                                </tr>
                            <?php } ?>
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
                <h5 class="modal-title  fw-bold" id="expaddLabel">Ajouter une catégorie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addForm">
                <div class="modal-body">
                    <div class="mb-3">

                        <div class="row g-3 mb-3">
                            <div class="col-sm-12">
                                <label for="designe" class="form-label">Réference</label>
                                <input type="text" name="cat" class="form-control" id="cat">
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


<script src="public/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#myCategoryTable').DataTable();

    });
</script>




<script>
    $("#addForm").submit(function () {
        $.ajax({
            //dataType: "json",
            url: "category/add",
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

