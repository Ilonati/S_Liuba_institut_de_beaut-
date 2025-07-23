const express = require('express');
const router = express.Router();
const db = require('../db');
const Joi = require('joi');

const clientShema = Joi.object({
    nom: Joi.string().alphanum().min(3).max(50).required(),
    prenom: Joi.string().alphanum().min(3).max(50).required(),
    date_de_naissance: Joi.number().integer().min(1900).max(2025).optional(),
    email: Joi.string().email().required(),
    telephone: Joi.number().integer().min(1).max(400).required(),
    password: Joi.string().min(8).pattern(/[A-Z]).required(),
    confirmPassword: Joi.ref()
});

// POST /clients — ajouter un client
router.post('/', (req, res) => {
    const { error, value } = filmShema.validate(req.body.film)
    const { nom, prenom, date_de_naissance, email, telephone } = req.body;
    const sql = `INSERT INTO Clients (nom, prenom, date_de_naissance, email, telephone) VALUES (?, ?, ?, ?, ?)`;
    db.query(sql, [nom, prenom, date_de_naissance, email, telephone], (err, result) => {
        if (error) req.send('Error validation donnes: + error.details[0].message');
        res.status(201).json({ message: 'Client ajouté avec succès', id: result.insertId });
    });
});

// GET /clients — lister les clients
router.get('/', (req, res) => {
    db.query('SELECT * FROM Clients', (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.json(results);
    });
});

module.exports = router;
