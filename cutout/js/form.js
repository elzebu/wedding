(function ($) {
    'use strict';
    
    function loadForm() {

        $('#rsvp').submit(function(e) {
            e.preventDefault();
            
            var answer = $(this).serializeArray();
            console.log(answer);
            
            $.ajax('submitForm.php', {
                type: 'POST',
                data: answer
            }).done(function(data) {
                console.log(data);
                if(data === 'OK') {
                    alert('Enregistrement OK');
                } else {
                  alert('erreur');
                }
            });
        });
        
    }
    
    $(document).on('ajaxLoad', loadForm);
    
}(jQuery));