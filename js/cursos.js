const cursos = {
  reiki: {
    nombre: "Reiki",
    imagen: "img/cursos/reiki.jpg",
    descripcion: [
      "El maestro Mikao Usui describió al Sistema de Sanación Natural, describiéndolo de esta manera: REIKI ES EL SECRETO ARTE DE ATRAER FELICIDAD A NUESTRA VIDA(1922).",
      "Usui, en su búsqueda del misterio de la Vida y la utilización de la Energía del Universo, alcanzó el conocimiento de un método de autoconocimiento en principio y que luego lo enfocó para Sanación."],
    cronograma:[
      "NIVEL 1 - Una jornada de 8 hs. de aprendizaje.",
      "NIVEL 2 - Una jornada de 8 hs. de aprendizaje.",
      "MAESTRÍA - Una jornada de 8 hs. de aprendizaje."]
  },
  metafisica: {
    nombre: "Metafísica",
    imagen: "img/cursos/metafisica.jpg",
    descripcion: [
      "Es el estudio del autoconocimiento más allá del mundo material. Es aprender el oficio de Ser. Porque no llegamos aquí, esta experiencia de vivir como seres humanos con las instrucciones necesarias, con técnicas, brújula, diseño.",
      "Llegamos a realizar la Tarea de Vivir.",
      "¿Y qué cosa es La Vida? Porqué unos tienen todo lo bueno y otros tienen que sufrir falta de mucho? Esto y mucho más se entiende y se modifica a través del conocimiento de la Metafísica."
    ],
    cronograma:["Una clase semanal de 1:30hs de duración."]
  },
  flores: {
    nombre: "Flores de Bach",
    imagen: "img/cursos/flores.jpg",
    descripcion: [
      "En este sistema de sanación emocional, cada Flor está asociada a un estado anímico básico.",
      "A través del uso de distintas fórmulas se corrigen nuestras respuestas ante cada circunstancia para equilibrar resultados; al sanar afectivamente, nuestra personalidad tendrá como base un cuerpo físico saludable."
    ],
    cronograma:["Dos clases semanales de 1:30hs de duración."]
  },
  yoga: {
    nombre: "Yoga Integral",
    imagen: "img/cursos/yoga.jpg",
    descripcion: [
      `La palabra “yoga” es una antigua palabra que proviene de la raíz sánscrita “yug” que significa unión. Entonces Yoga es utilizada para mostrar el Sistema psicofísico que se puede realizar para encontrar lo finito con lo infinito, el alma individual con el Espíritu infinito.`,
      `La Ciencia del Yoga comprende varios métodos o sistemas:`,
      `Hatha Yoga:Sistema Psicofísico de bienestar general, el cual prepara el cuerpo para recibir la energía o Prana en mayor intensidad que con otras prácticas. Su práctica se compone de tres importantes elementos: Respiración, Posturas o Asanas y Concentración.
      La enseñanza del Hatha Yoga debe ser bien dirigida y practicada, ya que cada acción tiene indicaciones necesarias no sólo para el armado de cada Asana, sino también para el cuidado del principiante.`,
      `Bhakti Yoga: Es la suma de la devoción y la entrega total.`,
      `Guiana Yoga: Es la senda de la sabiduría.`,
      `Karma Yoga: Significa la unión con Dios, en primer  lugar a través de las acciones nobles y la actividad correcta , y en segundo término, mediante la acción meditativa.`,
      `Mantra Yoga: Nos enseña a unificar el alma y el Espíritu concentrándose en los sonidos o mantras que tienen una vibración específica y armonizan la vibración individual.`,
      `Raja Yoga: Esta práctica combina los sencillos métodos de la disciplina psicofísica del Hatha con métodos elevados de Meditación.`,
    ],
      cronograma:["Dos clases semanales de 1:30hs de duración."]
    },
}

$('#modalHistorias').on('show.bs.modal', function (e) {
  const button = e.relatedTarget  
  const asunto = button.dataset["asunto"];
  const curso = cursos[asunto];
  const titulo = document.getElementById("modal-asunto");
  const imagen = document.querySelector("#modalHistorias img");
  const descripcion = document.querySelector("#modal-descripcion");
  const cronograma = document.querySelector("#modal-cronograma");
  titulo.innerText = curso.nombre;
  imagen.setAttribute("src",curso.imagen)
  imagen.setAttribute("alt",curso.nombre)
  descripcion.innerHTML ='';
  curso.descripcion.forEach(parrafo =>descripcion.innerHTML += `<p>${parrafo}</p>`)
  cronograma.innerHTML='';
  curso.cronograma.forEach(e => cronograma.innerHTML += `<li>${e}</li>`)

})
