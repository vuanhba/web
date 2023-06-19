$(document).ready(function() {
    $('#image').change(function(){
        var file = $(this)[0].files[0];
        var reader = new FileReader();
        var width = $('#image-preview').data('width');
        var height = $('#image-preview').data('height');
        reader.onload = function(e) {
            $('#image-preview').html('<img width="'+ width +'" height="'+height+'" src="' + e.target.result + '">');
        }
        reader.readAsDataURL(file);
    });
});