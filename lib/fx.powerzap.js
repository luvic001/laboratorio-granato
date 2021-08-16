jQuery(function($){

  $(document).on('submit', '[powerzap-form]', function(event){
    event.preventDefault();

    let element_handle = $(this);
    let form_data = `${element_handle.serialize()}&action=call_powerzap`;

    $.ajax({
      url: adm_ajax,
      type: 'POST',
      data: form_data,
      beforeSend: () => {
        $('body').addClass('is-loading');
      },
      complete: e => {
        $('body').removeClass('is-loading');
        let response = e.responseJSON;
        
        if (e.status == 400) {
          if (isset(response.content)) {

            response.content.forEach(error => {
              let field = $(`[name="${error.field}"]`);
              let field_parent = field.parent();
              field_parent.find('span.field-error').remove();
              field_parent.append(`<span class="field-error">${error.content}</span>`);
            });

          }
          else {
            alert('Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde');
          }
        }

        else if(e.status == 200 && response.success) {
          window.open(response.content, '_blank');
          element_handle[0].reset();
          $('body').removeClass('pwd-dialog-open');
          send_meta('bt_whatsapp_flutuante', 'bt_whatsapp_flutuante', 'bt_whatsapp_flutuante');
        }

      }
    })

  });

});