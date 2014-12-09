<?php $currentPage = 'client_list'; include('../view/employee_sidebar.php'); ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Mes clients</h2>
                <h5>Voici la liste de vos clients actifs.</h5>
            </div>
        </div>
        <hr />
        <div class="panel panel-default">
            <div class="panel-heading">
                Mes clients
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Prénom</th>
                                <th>Nom</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($clients as $c) : ?>
                            <tr>
                                <td><?php echo $c['firstName']; ?></td>
                                <td><?php echo $c['lastName']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../view/footer.php'); ?>

