$("#client_add_form").submit(function(e) {

    var isValid = true;

    var curObject = $("#username");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#password");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#nom");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#prenom");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#adresse");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#ville");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#cp");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#telephone");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#cellulaire");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#courriel");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#dateN");
    if(curObject.val() == "" || dateIsValid(curObject.val())) {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    curObject = $("#dateI");
    if(curObject.val() == "") {
        curObject.parent().addClass("has-error");
        curObject.prev().css("display", "block");
        isValid = false;
    }
    else
        curObject.prev().css("display", "none");

    e.preventDefault();
    if(isValid)
        this.submit();
});

function dateIsValid(date)
{
    var date1 = new Date(date);
    var now = new Date();

    return date1.getTime() > now.getTime();
}