$("#client_add_form").submit(function(e) {

    if($("#username").val() == "") {
        $("#username").parent().addClass("has-error");
        $("#username").before("<label class=\"control-label\">&nbsp;Veuillez spécifier un nom d'utilisateur.</label>");
    }

    if($("#password").val() == "") {
        $("#password").parent().addClass("has-error");
        $("#password").before("<label class=\"control-label\">&nbsp;Veuillez spécifier un mot de passe.</label>");
    }

    if($("#nom").val() == "") {
        $("#nom").parent().addClass("has-error");
        $("#nom").before("<label class=\"control-label\">&nbsp;Veuillez spécifier un nom.</label>");
    }

    if($("#prenom").val() == "") {
        $("#prenom").parent().addClass("has-error");
        $("#prenom").before("<label class=\"control-label\">&nbsp;Veuillez spécifier un prénom.</label>");
    }

    if($("#adresse").val() == "") {
        $("#adresse").parent().addClass("has-error");
        $("#adresse").before("<label class=\"control-label\">&nbsp;Veuillez spécifier une adresse.</label>");
    }

    if($("#ville").val() == "") {
        $("#ville").parent().addClass("has-error");
        $("#ville").before("<label class=\"control-label\">&nbsp;Veuillez spécifier une ville.</label>");
    }

    if($("#cp").val() == "") {
        $("#cp").parent().addClass("has-error");
        $("#cp").before("<label class=\"control-label\">&nbsp;Veuillez spécifier un code postal.</label>");
    }

    if($("#telephone").val() == "") {
        $("#telephone").parent().addClass("has-error");
        $("#telephone").before("<label class=\"control-label\">&nbsp;Veuillez spécifier un numéro de téléphone.</label>");
    }

    if($("#cellulaire").val() == "") {
        $("#cellulaire").parent().addClass("has-error");
        $("#cellulaire").before("<label class=\"control-label\">&nbsp;Veuillez spécifier un numéro de cellulaire.</label>");
    }

    if($("#courriel").val() == "") {
        $("#courriel").parent().addClass("has-error");
        $("#courriel").before("<label class=\"control-label\">&nbsp;Veuillez spécifier une adresse courriel.</label>");
    }

    if($("#dateN").val() == "") {
        $("#dateN").parent().addClass("has-error");
        $("#dateN").before("<label class=\"control-label\">&nbsp;Veuillez spécifier une date de naissance.</label>");
    }

    if($("#dateI").val() == "") {
        $("#dateI").parent().addClass("has-error");
        $("#dateI").before("<label class=\"control-label\">&nbsp;Veuillez spécifier une date d'inscription.</label>");
    }

    e.preventDefault();
    //this.submit();
});