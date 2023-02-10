$(document).ready(function() {
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#btnCad').click(function(e) {
        e.preventDefault()
        $('#cpf').unmask()
        $('#formCad').submit()
    })
})
