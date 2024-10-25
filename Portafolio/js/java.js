/*document.getElementById("btnMenu").addEventListener("click", 
  function () {
  let elemento = document.getElementById("navbar");
  if (elemento.classList.contains("navbar")) {
    elemento.classList.remove("navbar");
    elemento.classList.add("no_navbar");
  } else {
  elemento.classList.remove("no_navbar");
  elemento.classList.add("navbar");
  }

});*/

const nombre = document.querySelector("#nombre");
const telefono = document.querySelector("#tel");
const correo = document.querySelector("#email");
const mensaje = document.querySelector("#men");
const formulario = document.querySelector(".formulario");
formulario.addEventListener("submit", validaFormulario);

function validaFormulario(e) {
  e.preventDefault();

  if (
    nombre.value === "" ||
    telefono.value === "" ||
    mensaje.value === "" ||
    correo.value === ""
  ) {
    mostrarError("Todos los campos son obligatorios");
    return;
  }

  alert("Hemos recibido sus datos, pronto nos pondremos en contacto.");
e.target.submit();

  console.log(
    `${nombre.value} ${telefono.value} ${correo.value} ${mensaje.value}`
  );
}

function mostrarError(mensaje) {
  const alerta = document.createElement("p");
  alerta.textContent = mensaje;
  alerta.style.background = "red";
  // alert.style.color = "white";
  formulario.appendChild(alerta);
  setTimeout(() => {
    alert.remove();
  }, 5000);
}
