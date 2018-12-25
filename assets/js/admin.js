$(document).ready(function(){
    setAtivo();
    salvaAtualAtivo();   
    
    /**
     * Salva o navbar ativo para quando 
     * o link clicado for uma pasta interna do navbar ativo
     * exemplo: "informações/resgate"
     * dessa o menu informações não perderia seu status de ativo
     */
    function salvaAtualAtivo(){
        var setado = false;
        /**Atualiza o navbar com o menu atual que está selecionado */
        var idativo = localStorage.getItem('idAdminativo');      
        if(idativo != null){
            $('.nav li').removeClass('active');
            $('#' + idativo).addClass("active");            
        }        
    }

    /**
     * Atualiza o navbar ativo
     */
    function setAtivo(){
        $('li > a').removeClass('active');
        var pathname = window.location.pathname;        
        var elementoAtivo = $('nav li a[href="'+pathname+'"]');                         
        elementoAtivo.addClass('active');
        var idatual = elementoAtivo.attr('id');        
        if(idatual!=undefined){            
            localStorage.setItem('idAdminativo',idatual);
        }        
    }

    $("#botaoEditarImagem").click(function(){
        document.getElementById('imgGato').click();
    });

    $("#imgGato").change(function() {
        readURL(this);
    });

    function readURL(input) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();
      
          reader.onload = function(e) {
            $('#divImgGato').attr('src', e.target.result);
          }      
          reader.readAsDataURL(input.files[0]);
        }
    }


});
