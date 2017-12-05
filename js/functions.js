function mailSuccess(){
    setTimeout("window.location='../index.php'", 900);
}
function mailFailed(){
    setTimeout("window.location='../index.php'",2000);
}

function modalMail(){
    var nome = document.getElementById("nome").value;
    var contato = document.getElementById("contato").value;
    var texto = document.getElementById("texto").value;

    if(nome == '' && contato == '' && texto == ''){
        $('#modalMail').modal('open');
    }
}

function closedModal(){
    $('#modalMail').modal('close');    
}