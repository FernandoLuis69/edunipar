$(document).ready(function(){
    $('#add-experiencia').click(function(){
        $('#experiencia').append('<input type="text" class="form-control mb-2" name="experiencia[]" required>');
    });

    $('#add-formacao').click(function(){
        $('#formacao').append('<input type="text" class="form-control mb-2" name="formacao[]" required>');
    });
});
