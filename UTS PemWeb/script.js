$(document).ready(function () {
    // pengiriman formulir
    $('#contactForm').submit(function (event) {
        event.preventDefault(); // mencegah pengiriman formulir default
        var formData = $(this).serialize(); // 

        // Permintaan Ajax untuk mengirimkan.php
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function (response) {
                alert(response); 
                $('#contactForm')[0].reset(); 
            },
            error: function () {
                alert('Terjadi kesalahan. Silakan coba lagi.'); 
            }
        });
    });
});
