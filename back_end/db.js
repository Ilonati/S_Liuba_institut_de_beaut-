const mysql = require('mysql2');
const dotenv = require('dotenv');
dotenv.config();

const pool = mysql.createPool({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE
    // port: process.env.DB_PORT,
    // waitForConnection: true,
    // connectionLimit: 10,
    // queueLimit: 0
});

pool.connect((err) => {
    if (err) {
        console.error('Erreur de connexion MySQL :', err.message);
    } else {
        console.log('Connecté à MySQL ✔️');
    }
});

module.exports = pool.promise();






