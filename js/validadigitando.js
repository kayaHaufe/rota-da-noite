// Testando a validação usando jQuery
$(function(){

    // ## EXEMPLO 2
    // Aciona a validação ao sair do input
    $('.validate').blur(function(){
    
        // O CPF ou CNPJ
        var cpf_cnpj = $(this).val();
        
        // Testa a validação
        if ( valida_cpf_cnpj( cpf_cnpj ) ) {
            // alert('OK');
        } else {
            alert('CPF ou CNPJ inválido!');
        }
        
    });
    
});
