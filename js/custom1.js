$(function() {//função anonima que somente é disparada dspois do carregamento do DOM

    // Atribui evento e função para limpeza dos campos
    $('#busca').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#busca" ).autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "json/listacomprador.php",
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
	        $("#busca").val( ui.item.nome );
	        carregarDados();
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>Nome: " + item.nome + "  telefone: " + item.telefone + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#busca').val();

    	if(busca != "" && busca.length >= 1){
    		$.ajax({
	            url: "json/listacomprador.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#busca').val()
	            },
	            success: function( data ) {
                  
                   $('#codigo').val(data[0].cod); 
				   $('#nome').val(data[0].nome);
	               $('#emai').val(data[0].email);
				   $('#telefone').val(data[0].telefone);
				   $('#senacoin').val(data[0].senacoin);
				   
				   
                       
                     
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#busca').val();

       if(busca == ""){
		$('#codigo').val('');
        $('#nome').val('');
		$('#email').val('');
		$('#telefone').val('');
		$('#senacoin').val('');
        
          
       }
    }
});

