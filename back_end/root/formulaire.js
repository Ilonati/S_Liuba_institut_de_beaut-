const express = require('express');
const router = express.Router();
const db = require('../db');

// POST formulaire
router.post('/', (req, res) => {
    const { nom, prenom, telephone, email, message, id_service, id_client } = req.body;
    const sql = `INSERT INTO Formulaire (nom, prenom, telephone, email, message, id_service, id_client)
               VALUES (?, ?, ?, ?, ?, ?, ?)`;
    db.query(sql, [nom, prenom, telephone, email, message, id_service, id_client], (err, result) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(201).json({ message: 'Formulaire envoyé', id: result.insertId });
    });
});

// GET tous les formulaires
router.get('/', (req, res) => {
    db.query('SELECT * FROM Formulaire', (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.json(results);
    });
});

module.exports = router;
