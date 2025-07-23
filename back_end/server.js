
const express = require('express');
const mysql2 = require('mysql2');
const app = express();
const db = require('./db');

// Middlewares
app.use(mysql2());
app.use(express.json());

app.use('/clients', require('./routes/clients'));
app.use('/services', require('./routes/services'));
app.use('/formulaire', require('./routes/formulaire'));
app.use('/cartes', require('./routes/cartes'));

// route test
app.get('/', (req, res) => {
    res.send('Bienvenue sur le serveur ILONA 🌸');
});

//  route GET utilisateurs
app.get('/users', (req, res) => {
    db.query('SELECT * FROM users', (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.json(results);
    });
});






app.listen(3000, () => {
    console.log('Serveur démarré sur http://localhost:3000');
});
