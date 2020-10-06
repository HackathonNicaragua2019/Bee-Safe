$(document).ready(accionNav());

function accionNav() {
  var urlActual = window.location.href;
  try {
    switch (urlActual) {
      case "http://127.0.0.1/beesafe/index":
        /* /*    alert("Hola desde el index"); 
        var tag1 = document.getElementById("itemNav1");
        tag1.className += "active";
        alert("Valio Camote"); */
        break;
      case "http://127.0.0.1/beesafe/":
        /* alert("Hola desde el index con el url empity"); 
        var tag1 = document.getElementById("itemNav1");
        tag1.className += "active";
        alert("Valio Camote"); */
        break;
      case "http://127.0.0.1/beesafe/guia":
        /*   alert("Hola desde el index con el url empity"); 
        var tag1 = document.getElementById("itemNav2");
        tag1.className += "active";
        alert("Valio Camote");*/
        break;
      case "http://127.0.0.1/beesafe/about": {
        /*alert("Hola desde el About");
        var tag3 = document.getElementById("itemNav3");
        tag3.classList.add("active");
        break;*/
      }
    }
  } catch (error) {
    console.error(error);
  }
}
