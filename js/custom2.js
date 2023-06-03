$(function() {//função anonima que somente é disparada dspois do carregamento do DOM

    // Atribui evento e função para limpeza dos campos
    $('#busca').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#busca" ).autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "json/listaproduto.php",
	            cache: false,
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#busca').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#busca").val( ui.item.descricao);
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#busca").val( ui.item.valor);
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>Descrição: " + item.descricao + "  Valor: " + item.valor + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#busca').val();

    	if(busca != "" && busca.length >= 1){
    		$.ajax({
	            url: "json/listaproduto.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#busca').val()
	            },
	            success: function( data ) {
                   $('#codigo').val(data[0].cod); 
				   $('#descricao').val(data[0].descricao);
	               $('#valor').val(data[0].valor);
	               $('#quantidade').val(data[0].quantidade);
				   $('#obs').val(data[0].obs);
				   
                     
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#busca').val();

       if(busca == ""){
		$('#codigo').val(''); 
		$('#descricao').val('');
	    $('#valor').val('');
	    $('#quantidade').val('');
		
		$('#obs').val('');
		
         
       }
    }
});

