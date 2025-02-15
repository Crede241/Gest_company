<?php
$title = "Acceuil";
ob_start();
?>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row clearfix g-3">
            <div class="col-xl-8 col-lg-12 col-md-12 flex-column">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Employees Info</h6>
                            </div>
                            <div class="card-body">
                                <div class="ac-line-transparent" id="apex-emplyoeeAnalytics"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Employees Availability</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-2 row-deck">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-checked fs-3"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Attendance</h6>
                                                <span class="text-muted">400</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-stopwatch fs-3"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Late Coming</h6>
                                                <span class="text-muted">17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-ban fs-3"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Absent</h6>
                                                <span class="text-muted">06</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-beach-bed fs-3"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Leave Apply</h6>
                                                <span class="text-muted">14</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">

                                <h6 class="mb-0 fw-bold ">Total Utilisateurs</h6>

                                <h4 class="mb-0 fw-bold ">423</h4>
                            </div>
                            <div class="card-body">
                                <div class="mt-3" id="apex-MainCategories"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Top Hiring Sources</h6>
                            </div>
                            <div class="card-body">
                                <div id="hiringsources"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="row g-3 row-deck">
                    <div class="col-md-6 col-lg-6 col-xl-12">
                        <div class="card bg-primary">
                            <div class="card-body row">
                                <div class="col">
                                    <span class="avatar lg bg-white rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-text fs-5"></i></span>

                                    <h3 class="mt-3 mb-0 fw-bold text-white"><?= number_format($company->getFunds(), 0, ",", " ")   ?> FCFA </h3>
                                    <span class="text-white">Capital de l'Entreprise</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-12  flex-column">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center flex-fill">
                                    <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-users-alt-2 fs-5"></i></span>
                                    <div class="d-flex flex-column ps-3  flex-fill">
                                        <h6 class="fw-bold mb-0 fs-4">246</h6>
                                        <span class="text-muted">Dépenses</span>
                                    </div>
                                    <i class="icofont-chart-bar-graph fs-3 text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center flex-fill">
                                    <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-holding-hands fs-5"></i></span>
                                    <div class="d-flex flex-column ps-3 flex-fill">
                                        <h6 class="fw-bold mb-0 fs-4">101</h6>
                                        <span class="text-muted">Entrées</span>

                                    </div>
                                    <i class="icofont-chart-line fs-3 text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $page = ob_get_clean();
        require "view/user/template-user.php";
        ?>
        <!-- Modal Members-->