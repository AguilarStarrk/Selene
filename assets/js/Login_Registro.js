const form = document.getElementById('login-form');
const message = document.querySelector('#login-message');

form.addEventListener('submit', e => {
  e.preventDefault();
  const correo = form.correo.value;
  const password = form.password.value;

  // Aquí podrías hacer una petición AJAX a tu servidor para verificar las credenciales del usuario

  if (correo === 'ciscopaquetetrazador@horchata.sv' && password === 'picarosv') {
    window.location.href = 'Index.html';
    alert('Inicio de sesión exitoso');
  } else {
    message.innerHTML = '<p>Nombre de usuario o contraseña incorrectos</p>';
    message.style.color = 'red';
  }
});