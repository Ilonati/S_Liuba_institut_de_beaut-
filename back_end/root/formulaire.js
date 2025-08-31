const express = require('express');
const router = express.Router();
const db = require('../db');
const Joi = require("joi");

//  Schéma Joi pour formulaire
const formulaireSchema = Joi.object({
    nom: Joi.string().min(2).max(100).required(),
    prenom: Joi.string().min(2).max(100).required(),
    telephone: Joi.string().pattern(/^[0-9]{10,13}$/).required(),
    email: Joi.string().email().required(),
    message: Joi.string().min(5).max(500).required(),
    id_service: Joi.number().integer().required(),
    id_client: Joi.number().integer().required(),
});

// ✅ POST /formulaire — ajouter un formulaire
router.post("/", (req, res) => {
    const { error } = formulaireSchema.validate(req.body);

    if (error) {
        return res
            .status(400)
            .json({ error: "Erreur validation données : " + error.details[0].message });
    }

    const { nom, prenom, telephone, email, message, id_service, id_client } = req.body;
    const sql = `INSERT INTO Formulaire (nom, prenom, telephone, email, message, id_service, id_client)
               VALUES (?, ?, ?, ?, ?, ?, ?)`;

    db.query(sql, [nom, prenom, telephone, email, message, id_service, id_client], (err, result) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(201).json({ message: "Formulaire envoyé", id: result.insertId });
    });
});

// ✅ GET /formulaire — lister les formulaires
router.get("/", (req, res) => {
    db.query("SELECT * FROM Formulaire", (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.json(results);
    });
});

// // POST formulaire
// router.post('/', (req, res) => {
//     const { nom, prenom, telephone, email, message, id_service, id_client } = req.body;
//     const sql = `INSERT INTO Formulaire (nom, prenom, telephone, email, message, id_service, id_client)
//                VALUES (?, ?, ?, ?, ?, ?, ?)`;
//     db.query(sql, [nom, prenom, telephone, email, message, id_service, id_client], (err, result) => {
//         if (err) return res.status(500).json({ error: err.message });
//         res.status(201).json({ message: 'Formulaire envoyé', id: result.insertId });
//     });
// });

// // GET tous les formulaires
// router.get('/', (req, res) => {
//     db.query('SELECT * FROM Formulaire', (err, results) => {
//         if (err) return res.status(500).json({ error: err.message });
//         res.json(results);
//     });
// });

module.exports = router;
