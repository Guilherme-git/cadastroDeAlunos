$(document).ready(function(){
    $('#cadastrar').hide();
    $('#sucessoCadastro').hide();

    setInterval(TotalAlunos,1000);
    setInterval(TotalMatutino,1000);
    setInterval(TotalNoturno,1000);
    setInterval(TotalVespertino,1000);

    CarregarCadastrar();
    cadastrar();

    function TotalAlunos(){
        $.ajax({
            url: './TotalAlunos.php',
            type: 'POST',
            success:function(resposta){
                $('#totalAlunos').html("Número total de alunos cadastrados - "+resposta);
            }
        });
    }

    function TotalMatutino(){
        $.ajax({
            url: './TotalMatutino.php',
            type: 'POST',
            success:function(resposta){
                $('#alunoMatutino').html("Alunos Matutino - "+resposta);
            }
        });
    }

    function TotalVespertino(){
        $.ajax({
            url: './TotalVespertino.php',
            type: 'POST',
            success:function(resposta){
                $('#alunoVespertino').html("Alunos Vespertino - "+resposta);
            }
        });
    }

    function TotalNoturno(){
        $.ajax({
            url: './TotalNotuno.php',
            type: 'POST',
            success:function(resposta){
                $('#alunoNoturno').html("Alunos Noturno - "+resposta);
            }
        });
    }
   

    function CarregarCadastrar(){
        $('#btnCadastrar').click(function(e){
            e.preventDefault();

            $('#cadastrar').show();
        });
    }

    function cadastrar(){
        $('#formCadastrar').on('submit',function(e){
            e.preventDefault();
            var dadosCadastro = $(this).serialize();
            
            $.ajax({
                url: './cadastrar.php',
                type: 'POST',
                data: dadosCadastro,
                success:function(resposta){
                    $('#sucessoCadastro').show();
                    $('#sucessoCadastro').html(resposta);
                }
            });
        })
    }
});