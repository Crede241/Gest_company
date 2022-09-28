<?php
$title="Dépenses de l'entreprise";
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
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Ajouter une dépense</button>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
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
                            <tr>
                                <td>
                                    Decoration Order
                                </td>
                                <td>
                                    200000
                                </td>
                                <td>
                                    Decoration Order
                                </td>

                                <td>

                                    <span class="fw-bold ms-1">29/07/2022</span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>
<div class="modal fade" id="expadd" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expaddLabel">Remplir les champs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="depone" class="form-label">Montant</label>
                                <input type="number" class="form-control" id="sum">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc" class="form-label">Heure</label>
                                <input type="time" class="form-control" id="time">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Retrait de:</label>
                                <select class="form-select">
                                    <option selected>Subvention de sponsor</option>
                                    <option value="1">subvention de l'état</option>
                                    <option value="2">Publicité</option>
                                    <option value="3">Biens et service</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Catégorie</label>
                                <select class="form-select">
                                    <option selected>Logement</option>
                                    <option value="1">Materiel didactique</option>
                                    <option value="2">Transport</option>
                                    <option value="3">Mission</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expeditLabel">Modifier la dépense </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="item1" class="form-label">Désignation</label>
                    <input type="text" class="form-control" id="item1" value="Name">
                </div>
                <div class="deadline-form">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="depone" class="form-label">Montant</label>
                                <input type="number" class="form-control" id="sum">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="col-sm-6">
                                <label for="abc" class="form-label">Heure</label>
                                <input type="time" class="form-control" id="time">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Retrait de:</label>
                                <select class="form-select">
                                    <option selected>Subvention de sponsor</option>
                                    <option value="1">subvention de l'état</option>
                                    <option value="2">Publicité</option>
                                    <option value="3">Biens et service</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Catégorie</label>
                                <select class="form-select">
                                    <option selected>Logement</option>
                                    <option value="1">Materiel didactique</option>
                                    <option value="2">Transport</option>
                                    <option value="3">Mission</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-warning">Modifier</button>
            </div>
        </div>
    </div>
</div>
<?php
$page=ob_get_clean();
require "view/user/template-user.php";
?>
