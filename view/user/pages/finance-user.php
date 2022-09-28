<?php
$title="Historique de depense";
ob_start();
?>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        Total de Dépenses Monsuelles

                    </div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Total de Dépenses Annuelles

                    </div>
                    <div class="card-body">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </div><!--End Row-->



    <!--End Dashboard Content-->

</div>

<?php
$page=ob_get_clean();
require "view/user/template-user.php";
?>
