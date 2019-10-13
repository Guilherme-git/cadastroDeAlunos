$(document).ready(function(){
    $('#resultadoLogin').hide();
    
    $('#formLogin').on('submit',function(e){
        e.preventDefault();
        var dadosLogin = $(this).serialize();

        $.ajax({
            url: './validarLogin.php',
            type: 'POST',
            data: dadosLogin,
            success:function(resposta){
                if (resposta == 'Email ou Senha incorretos'){ 
                    $('#resultadoLogin').show();
                    $('#resultadoLogin').html(resposta);
                }else{
                    window.location.href = resposta;
                }
            }
        });
    });
});