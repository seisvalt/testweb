function guardar() {
  let name = $('#programador-name').val();
  let last_name = $('#programador-last_name').val();
  let email = $('#programador-email').val();
  let dni = $('#programador-dni').val();
  let lng = $('#programador-languages').val();

  $.post('index.php?r=site/save', {name: name, last_name: last_name, email: email, dni:dni, languages: lng})
    .done(function (data) {
      //do something
      console.log('respuesta ', data);
      if (data.success == true) {
        alert('tre' + data.message);
        window.location.href="index.php?r=/site/index";
      } else {
        alert('dasa' + JSON.stringify(data.message));
      }
    })
    .fail(function (data) {
      //do something else
      alert('fail' + data.message);

    }
  );
}