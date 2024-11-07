document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');
    const message = document.getElementById('message');
  
    // Manejar el registro de usuario
    if (registerForm) {
      registerForm.addEventListener('button', (e) => {
        e.preventDefault();
  
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        fetch('http://localhost:3006/users/login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ nombre, email, password })
          })
          .then(response => response.json())
          .then(data => {
            message.textContent = data.message || data.error;
          })
          .catch(error => {
            message.textContent = 'Error de servidor';
          });
        });
      }
    });
  
  
