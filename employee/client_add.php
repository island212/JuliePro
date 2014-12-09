<?php include('../view/employee_sidebar.php') ?>

    <div class="row">
        <div class="col-md-12">
            <form role="form" class="col-md-6">
                <div class="form-group">
                    <label>Nom:</label>
                    <input class="form-control" type="text" name="lastName" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label>Prénom:</label>
                    <input class="form-control" type="text" name="firstName" placeholder="Prenom">
                </div>
                <div class="form-group">
                    <label>Adresse:</label>
                    <input class="form-control" type="text" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group">
                    <label>Ville:</label>
                    <input class="form-control" type="text" name="ville" placeholder="Ville">
                </div>
                <div class="form-group">
                    <label>Code Postal:</label>
                    <input class="form-control" type="text" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" name="cp" placeholder="HOH OHO">
                </div>
                <div class="form-group">
                    <label>Telephone:</label>
                    <input class="form-control" type="text" pattern="\[\(]d{3}[\)][\-]\d{3}[\-]\d{4}" name="telephone" placeholder="(123)-456-7890">
                </div>
                <div class="form-group">
                    <label>Cellulaire:</label>
                    <input class="form-control" type="text" pattern="\[\(]d{3}[\)][\-]\d{3}[\-]\d{4}" name="cellulaire" placeholder="(123)-456-7890">
                </div>
                <div class="form-group">
                    <label>Courriel:</label>
                    <input class="form-control" type="email" name="courriel" placeholder="name@email.com">
                </div>
                <div class="form-group">
                    <label>Date de naissance:</label>
                    <input class="form-control" type="date" name="dateNaissance">
                </div>
                <div class="form-group">
                    <label>Date d'inscription:</label>
                    <input class="form-control" type="date" name="dateInscription">
                </div>
            </form>
        </div>
    </div>

<?php include('../view/footer.php')?>