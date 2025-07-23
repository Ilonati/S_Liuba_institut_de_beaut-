const express = require('express');
const router = express.Router();
const db = require('../db');

// GET tous les services
router.get('/', (req, res) => {
    db.query('SELECT * FROM Services', (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.json(results);
    });
});

// POST nouveau service
router.post('/', (req, res) => {
    const { nom, img, info, duree, tarif, id_type_service } = req.body;
    const sql = `INSERT INTO Services (nom, img, info, duree, tarif, id_type_service)
               VALUES (?, ?, ?, ?, ?, ?)`;
    db.query(sql, [nom, img, info, duree, tarif, id_type_service], (err, result) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(201).json({ message: 'Service ajouté', id: result.insertId });
    });
});

module.exports = router;