document.addEventListener("DOMContentLoaded" , function(){
    function mailSuccess(){
        setTimeout("window.location='../index.php'", 900);
    }
    function mailFailed(){
        setTimeout("window.location='../index.php'",2000);
    }

    function showText(){
        document.getElementById("text1").style.display = "block";
    }

    function modalMail(){
        var nome = document.getElementById("nome").value;
        var contato = document.getElementById("contato").value;
        var texto = document.getElementById("texto").value;
        

        if(nome == '' && contato == '' && texto == ''){
            $('#modalMail').modal('open');
            setTimeout(function(){
                $('#modalMail').modal('close'); 
            },2000)
            
        }
    }
    function closedModal(){
        $('#modalMail').modal('close');    
    }

    function modalInfo(){

        $('#modalInformacao').modal('open');
        setTimeout(function(){
            document.getElementById("text1").style.display = "block";
        },1000)

        setTimeout(function(){
            document.getElementById("text2").style.display = "block";
        },1900)

        setTimeout(function(){
            document.getElementById("text3").style.display = "block";
            document.getElementById("form").style.display = "block"; 
        },2900)
    }

    //ENVIAR MAIL //MODAL 
    document.getElementById("btnMailModal").addEventListener("click" , function(){
        var contato = document.getElementById("contatoCliente").value;
        var nome = document.getElementById("nomeCliente").value;
    });

});
