$(document).ready(function(){
    /**Seleciona navbar que foi clicacado e remove a classe ativa do navbar anteriormente selecionado */
    $('.navbar-nav a').click(function(){        
        $('.navbar-nav li').removeClass('active');
        var id = $(this).parent().attr('id');
        localStorage.setItem('idativo',id);        
    });
    /**Atualiza o navbar com o menu atual que está selecionado */
    var idativo = localStorage.getItem('idativo');
    if(idativo != null){
        $('.navbar-nav li').removeClass('active');
        $('#' + idativo).addClass("active");
    }    

});

