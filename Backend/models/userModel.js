const mysql = require('mysql2');
const bcrypt = require('bcrypt');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'C$g$0212', // Cambia esto por tu contraseña de MySQL
  database: 'hbb'
});



// Función para registrar un usuario con contraseña encriptada
const registerUser = (nombre, email, password, callback) => {
  bcrypt.hash(password, 10, (err, hash) => {
    if (err) return callback(err);

    connection.query(
      'INSERT INTO users (nombre, email, password) VALUES (?, ?, ?)',
      [nombre, hash, email],
      (error, result) => {
        if (error) {
          return callback(error);
        }
        callback(null, result);
      }
    );
  });
};

module.exports = {
  registerUser,
};
