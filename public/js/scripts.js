// Validator 
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

/* Constantes */
const menu = document.querySelector("#menu");
const contactBtn = document.getElementById("contact-btn").classList;
const contactForm = document.getElementById('contactForm');

/* Oyentes */
contactForm.addEventListener('show.bs.offcanvas', event => {
  contactBtn.remove("collapsed");
})

contactForm.addEventListener('hide.bs.offcanvas', event => {
  contactBtn.add("collapsed");
})

// Listening to the video element
const clips = document.querySelectorAll("#v");

for (let i = 0; i < clips.length; i++) {
  /* Adding the event listeners on the video to play/pause the video. */
  clips[i].addEventListener("mouseover", function (e) {
    clips[i].play();
  });
  /* Applying the mouse out event to pause the video */
  clips[i].addEventListener("mouseout", function (e) {
    clips[i].pause();
    clips[i].currentTime = 0;
  });
}

function flip(n) {
  let proyectos = document.querySelectorAll(".proyecto");
  for (let i = 0; i < proyectos.length; i++)
    if (i == n - 1 && !proyectos[i].classList.contains("flip")) {
      console.log(proyectos[i]);
      proyectos[i].classList.add("flip");
    }
    else
      proyectos[i].classList.remove("flip");
}