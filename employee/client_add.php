<?php $currentPage = 'client_list'; include('../view/employee_sidebar.php') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <form role="form" class="col-md-12" action=".?action=add_client" method="post">
                <div class="form-group col-md-6">
                    <label>Nom d'utilisateur : </label>
                    <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur">
                </div>
                <div class="form-group col-md-6">
                    <label>Mot de passe : </label>
                    <input class="form-control" type="password" name="password" placeholder="Mot de passe">
                </div>

                <hr />

                <div class="form-group col-md-6">
                    <label>Nom : </label>
                    <input class="form-control" type="text" name="lastName" placeholder="Nom">
                </div>
                <div class="form-group col-md-6">
                    <label>Prénom:</label>
                    <input class="form-control" type="text" name="firstName" placeholder="Prénom">
                </div>
                <div class="form-group col-md-6">
                    <label>Adresse:</label>
                    <input class="form-control" type="text" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group col-md-6">
                    <label>Ville:</label>
                    <input class="form-control" type="text" name="ville" placeholder="Ville">
                </div>
                <div class="form-group col-md-6">
                    <label>Code Postal:</label>
                    <input class="form-control" type="text" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" name="cp" placeholder="H0H 0H0">
                </div>

                <hr />

                <div class="form-group col-md-6">
                    <label>Telephone:</label>
                    <input class="form-control" type="text" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="telephone" placeholder="123-456-7890">
                </div>
                <div class="form-group col-md-6">
                    <label>Cellulaire:</label>
                    <input class="form-control" type="text" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="cellulaire" placeholder="123-456-7890">
                </div>
                <div class="form-group col-md-6">
                    <label>Courriel:</label>
                    <input class="form-control" type="email" name="courriel" placeholder="name@email.com">
                </div>

                <hr />

                <div class="form-group col-md-6">
                    <label>Date de naissance:</label>
                    <input class="form-control" type="date" name="dateNaissance">
                </div>
                <div class="form-group col-md-6">
                    <label>Date d'inscription:</label>
                    <input class="form-control" type="date" name="dateInscription">
                </div>

                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
        </div>
    </div>
</div>
<?php include('../view/footer.php')?>