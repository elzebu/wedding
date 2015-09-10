(function ($) {
    'use strict';
    $(document).ready(function() {
        
      $('.edit').on('click', function(e) {
          e.preventDefault();
          var currentLine = $(this).parents('tr'); 
          currentLine.find('.saved-data').addClass('hidden');
          currentLine.find('.data').removeClass('hidden');
          currentLine.find('.cancel-edit').removeClass('hidden');
          $(this).addClass('hidden');
          currentLine.find('.modify').removeClass('hidden');
      });
        
      $('.cancel-edit').on('click', function(e) {
          e.preventDefault();
          var currentLine = $(this).parents('tr'); 
          currentLine.find('.data').addClass('hidden');
          currentLine.find('.saved-data').removeClass('hidden');
          currentLine.find('.edit').removeClass('hidden');
          $(this).addClass('hidden');
          currentLine.find('.modify').addClass('hidden');
      });
        
    });
    
    
    $('.modify').on('click', function(e) {
        e.preventDefault();

        var currentLine = $(this).parents('tr'); 
        var answer = currentLine.find('input, textarea, select').serializeArray();
        

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
        
    
}(jQuery));