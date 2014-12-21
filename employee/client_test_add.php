<?php $currentPage = 'client_tests'; include('../view/employee_sidebar.php'); ?>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Progression de mes clients</h2>
                    <h5>Vous pouvez ajouter ici les résultats de tests de vos clients.</h5>
                </div>
            </div>
            <hr />
            <div class="panel panel-default">
                <div class="panel-heading">
                    Progression
                </div>
                <div class="panel-body">
                    <div class="table-responsive col-sm-8">
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
                    <a class="btn btn-default" href=".?action=add_client_form">Nouveau client</a>
                    <?php foreach($clients as $c) : ?>
                        <form action=".?action=add_tests">
                            <input class="btn btn-default" type="submit" value="Nouveau résultat de test">
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php include('../view/footer.php'); ?>