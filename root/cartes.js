const express = require('express');
const router = express.Router();
const db = require('../db');

// POST carte cadeau
router.post('/', (req, res) => {
    const { date_limit, prenom, id_service, id_client } = req.body;
    const sql = `INSERT INTO Cartes_Cadeaux (date_limit, prenom, id_service, id_client)
               VALUES (?, ?, ?, ?)`;
    db.query(sql, [date_limit, prenom, id_service, id_client], (err, result) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(201).json({ message: 'Carte cadeau enregistrée', id: result.insertId });
    });
});

// GET toutes les cartes cadeaux
router.get('/', (req, res) => {
    db.query('SELECT * FROM Cartes_Cadeaux', (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.json(results);
    });
});

module.exports = router;
