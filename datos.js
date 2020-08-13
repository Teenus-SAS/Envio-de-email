function Email() {
  $.ajax({
    url:'datos.php',
     type: 'POST',
     success: function(res){
      var js= JSON.parse(res);
      console.log(res);

      var etiquetas="";
      for (var i = 1; i < js.length; i++) {
              etiquetas+="<label for=''>" +i+") "+js[i].Pregunta+"</label><br>"+
              "<input type='radio' id='Si"+i+"' name='gender"+i+"' value='SI'><label>Si</label><br>"+
              "<input type='radio' id='No"+i+"' name='gender"+i+"' value='NO'><label for='fame'>No</label><br>";
         }
        $('#Preguntas').html(etiquetas);
     }
  })
}

function Validar() {
  $.ajax({
    url:'datos.php',
     type: 'POST',
     success: function(res){
      var js= JSON.parse(res);
      var res;
      var resultado=0;
      console.log(js[1].Respuesta);
      if(document.getElementById('Si1').checked) {
        res="SI";
        if(res===js[1].Respuesta)
          resultado=resultado+1;
      }
      if(document.getElementById('Si2').checked) {
        res="SI";
        if(res===js[2].Respuesta)
          resultado=resultado+1;
      }
      if(document.getElementById('Si3').checked) {
        res="SI";
        if(res===js[3].Respuesta)
          resultado=resultado+1;
      }
      if(document.getElementById('No4').checked) {
        res="NO";
        if(res===js[4].Respuesta)
          resultado=resultado+1;
      }
      if(document.getElementById('Si5').checked) {
        res="SI";
        if(res===js[5].Respuesta)
          resultado=resultado+1;
      }
      console.log(resultado);
      if(resultado<5){
        window.alert(":(");
      $.ajax({
        url:'EnvioCorreo.php',
         type: 'POST',
         data:{resultado:resultado},
         success: function(res){
           console.log(res);
         }
      })
      }
      else {
        window.alert("Todas las respuestas fueron correctas");
      }


      }

  })
}
