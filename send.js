$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();
        
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: true,
            success: function (event) {
                alert('success');
            },
        });
    });
    
    
    
    
});