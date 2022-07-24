$('input[name*="code"]').each(function() { 
    $(this).change(function(){ 
      let value = $(this).val();
      let count = 0;
      $('input[name*="code"]').each(function() { 
        if ($(this).val() != '' && $(this).val() == value) {
          count++;
          if (count > 1) alert('duplicate');
        }
      });
    });
    $(this).addClass('e');
  });
  
  
  $('#createInput').on('click', function(){
    let newInput = document.createElement("input");
    newInput.name = 'code[]';
    newInput.type = 'text';
    newInput.className = 'whatever';
    $('#inputGroup').append(newInput);
    // repeat the eventlistener again:
      $('input[name*="code"]:not(.e').each(function() { 
        $(this).change(function(){ 
          let value = $(this).val();
          let count = 0;
          $('input[name*="code"]').each(function() { 
            if ($(this).val() != '' && $(this).val() == value) {
              count++;
              if (count > 1) alert('duplicate');
            }
          });
        });
        $(this).addClass('e');
      });
  });