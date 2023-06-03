$(function() {//função anonima que somente é disparada dspois do carregamento do DOM

    // Atribui evento e função para limpeza dos campos
    $('#comprador').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#comprador" ).autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "json/listacomprador.php",
	            cache: false,
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#comprador').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#comprador").val( ui.item.nome );
	        carregarDados1();
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>Nome: " + item.nome + "  telefone: " + item.telefone + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados1(){
    	var busca = $('#comprador').val();

    	if(busca != "" && busca.length >= 1){
    		$.ajax({
	            url: "json/listacomprador.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#comprador').val()
	            },
	            success: function( data ) {
                   $('#codComprador').val(data[0].cod); 
				   $('#comprador1').val(data[0].nome);
	            }
	        });
    	}
    }

$( "#produto").autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "json/listaproduto.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#produto').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#produto").val( ui.item.descricao);
	        carregarDados();
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>Descrição: " + item.descricao+ "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#produto').val();

    	if(busca != "" && busca.length >= 1){
    		$.ajax({
	            url: "json/listaproduto.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#produto').val()
	            },
	            success: function( data ) {
                   $('#codProduto').val(data[0].cod); 
				   $('#produto1').val(data[0].descricao);
	               $('#valor').val(data[0].valor);
	               
				   
                     
	            }
	        });
    	}
    }



    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#busca').val();

       if(busca == ""){
		$('#comprador').val('');
        $('#codComprador').val('')
		$('#produto').val('');
        $('#codProduto').val('')
        $('#valor').val('')
      
          
       }
    }
});

