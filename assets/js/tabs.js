// espero a que el dom este completamente cargado antes de ejecutar el codigo
document.addEventListener('DOMContentLoaded', function() {
  // selecciono todos los elementos con la etiqueta tab-link
  var tabLinks = document.querySelectorAll('.tab-link');
  // recorro cada elemento con etiqueta tab-link y le pongo un listener de onclick
  for (var i = 0; i < tabLinks.length; i++) {
    tabLinks[i].onclick = function() {
  // al hacer click busca todos los elementos que esten con la etique de active
      var actives = document.querySelectorAll('.active');
  // quita la clase active de todos ellos para ocultar contenidos y hacer limpieza
      for (var j = 0; j < actives.length; j++) {
        actives[j].classList.remove('active');
      }
  // agrega la clase active a la pestña clicada para marcarla como seleccionada
      this.classList.add('active');
  // busco todo el contenido asociado a la pestaña seleccionada con el atributo data-tab
  // y le agrego la clase active para mostrarlo
      document.getElementById(this.dataset.tab).classList.add('active');
    };
  }
});