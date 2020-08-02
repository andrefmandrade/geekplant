function submit(redirect) {

  isChecked = $("input[type=radio]:checked").length;

  if(!isChecked) {
    Toast.show("Selecione um resposta para continuar", "error");
    return;
  }

  const values = {
    question: $("input[name=question]").val(),
    answer: $("input[name=answer]:checked").val()
  }

  $.ajax({
    url: redirect,
    type: 'POST',
    data: values,

    success: function(result) {
      window.location=redirect;
    }
  });
}