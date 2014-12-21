<?php $currentPage = 'client_list'; include('../view/employee_sidebar.php') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <form role="form" id="client_add_form" class="col-md-12" action=".?action=add_client" method="post">
                <div class="form-group col-md-6">
                    <label>Nom d'utilisateur:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier un nom d'utilisateur.</label>
                    <input id="username" class="form-control" type="text" name="username" placeholder="Nom d'utilisateur">
                </div>
                <div class="form-group col-md-6">
                    <label>Mot de passe:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier un mot de passe.</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Mot de passe">
                </div>

                <hr />

                <div class="form-group col-md-6">
                    <label>Nom:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier un nom.</label>
                    <input id="nom" class="form-control" type="text" name="lastName" placeholder="Nom">
                </div>
                <div class="form-group col-md-6">
                    <label>Prénom:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier un prénom.</label>
                    <input id="prenom" class="form-control" type="text" name="firstName" placeholder="Prénom">
                </div>
                <div class="form-group col-md-6">
                    <label>Adresse:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier une adresse.</label>
                    <input id="adresse" class="form-control" type="text" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group col-md-6">
                    <label>Ville:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier une ville.</label>
                    <input id="ville" class="form-control" type="text" name="ville" placeholder="Ville">
                </div>
                <div class="form-group col-md-6">
                    <label>Code Postal:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier un code postal.</label>
                    <input id="cp" class="form-control" type="text" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" name="cp" placeholder="H0H 0H0">
                </div>

                <hr />

                <div class="form-group col-md-6">
                    <label>Telephone:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier un numéro de téléphone.</label>
                    <input id="telephone" class="form-control" type="text" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="telephone" placeholder="123-456-7890">
                </div>
                <div class="form-group col-md-6">
                    <label>Cellulaire:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier un numéro de cellulaire.</label>
                    <input id="cellulaire" class="form-control" type="text" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="cellulaire" placeholder="123-456-7890">
                </div>
                <div class="form-group col-md-6">
                    <label>Courriel:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier une adresse courriel.</label>
                    <input id="courriel" class="form-control" type="email" name="courriel" placeholder="name@email.com">
                </div>

                <hr />

                <div class="form-group col-md-6">
                    <label>Date de naissance:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier une date de naissance vailde.</label>
                    <input id="dateN" class="form-control" type="date" name="dateNaissance">
                </div>
                <div class="form-group col-md-6">
                    <label>Date d'inscription:</label>
                    <label class="control-label">&nbsp;Veuillez spécifier une date d'inscription.</label>
                    <input id="dateI" class="form-control" type="date" value="<?php echo date('Y-m-d');?>" name="dateInscription">
                </div>

                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
        </div>
    </div>
</div>

<script src="../assets/js/jquery-1.10.2.js"></script>
<script src="../js/client_add_check.js"></script>

<?php include('../view/footer.php')?>