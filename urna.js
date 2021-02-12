
$('#branco').hide();
$('#nulo').hide();

$(document).ready(function(){
    presidente = ''
    governador =''
    deputado = ''
    senador = ''
});

$(document).on('click', '#btn-inicie-agora', function(){
    $('#btn-inicie-agora').fadeOut(850);
    $('.input-group').delay(900).fadeIn(800);
    

    // $('.urna-title').delay(1000).fadeOut(300).delay(350).text('Presidente/Vice-presidente').fadeIn(400);
    $('.urna-title').text('Presidente/Vice-presidente')
    $('#branco').delay(1200).fadeIn(500);
    $('#nulo').delay(1200).fadeIn(800);

});

$(document).on('click', '.btn-votar', function(){
    if($('.urna-title').text() == 'Presidente/Vice-presidente'){$('.urna-title').text('Governador'); presidente = $('.input-voto').val();$('.input-voto').val(' ')}
    else if($('.urna-title').text() == 'Governador') {$('.urna-title').text('Deputado Federal');governador = $('.input-voto').val();$('.input-voto').val(' ')}
    else if($('.urna-title').text() == 'Deputado Federal') {$('.urna-title').text('Senador');deputado = $('.input-voto').val();$('.input-voto').val(' ')}
    else if($('.urna-title').text() == 'Senador') {
        $('.urna-title').text('OBRIGADO POR VOTAR!');senador = $('.input-voto').val(); 
        $('.input-voto').val(' ');
        $('.input-group').delay(200).fadeOut(800);

        $.ajax({
            url: "ajax/receberVoto.php",
            dataType: "json",
            type: "post", //POST
            data: {votoPresidente: presidente, votoGov: governador, votoDep: deputado, votoSen: senador},
            success:function(result){
                $("#teste").text(result.votoPresidente);
            }
        })

        $('#branco').hide();
        $('#nulo').hide();
    }
});

$(document).on('click', '#branco', function(){
    if($('.urna-title').text() == 'Presidente/Vice-presidente'){$('.urna-title').text('Governador'); presidente = '0';}
    else if($('.urna-title').text() == 'Governador') {$('.urna-title').text('Deputado Federal');governador = '0';}
    else if($('.urna-title').text() == 'Deputado Federal') {$('.urna-title').text('Senador');deputado = '0';}
    else if($('.urna-title').text() == 'Senador') {
        $('.urna-title').text('OBRIGADO POR VOTAR!');senador = '0'; 
        $('.input-group').delay(200).fadeOut(800);

        $.ajax({
            url: "ajax/receberVoto.php",
            dataType: "json",
            type: "post", //POST
            data: {votoPresidente: presidente, votoGov: governador, votoDep: deputado, votoSen: senador},
            success:function(result){
                $("#teste").text(result.votoPresidente);
            }
        })

        $('#branco').hide();
        $('#nulo').hide();
    }
});

$(document).on('click', '#nulo', function(){
    if($('.urna-title').text() == 'Presidente/Vice-presidente'){$('.urna-title').text('Governador'); presidente = '1';}
    else if($('.urna-title').text() == 'Governador') {$('.urna-title').text('Deputado Federal');governador = '1';}
    else if($('.urna-title').text() == 'Deputado Federal') {$('.urna-title').text('Senador');deputado = '1';}
    else if($('.urna-title').text() == 'Senador') {
        $('.urna-title').text('OBRIGADO POR VOTAR!');senador = '1'; 
        $('.input-group').delay(200).fadeOut(800);

        $.ajax({
            url: "ajax/receberVoto.php",
            dataType: "json",
            type: "post", //POST
            data: {votoPresidente: presidente, votoGov: governador, votoDep: deputado, votoSen: senador},
            success:function(result){
                $("#teste").text(result.votoPresidente);
            }
        })

        $('#branco').hide();
        $('#nulo').hide();
    }
});