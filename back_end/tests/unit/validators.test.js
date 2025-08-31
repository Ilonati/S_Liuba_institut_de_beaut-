const Joi = require("joi");

// Même schéma que dans formulaire.js
const formulaireSchema = Joi.object({
    nom: Joi.string().min(2).max(100).required(),
    prenom: Joi.string().min(2).max(100).required(),
    telephone: Joi.string().pattern(/^[0-9]{10,13}$/).required(),
    email: Joi.string().email().required(),
    message: Joi.string().min(5).max(500).required(),
    id_service: Joi.number().integer().required(),
    id_client: Joi.number().integer().required(),
});

describe("Formulaire Joi Schema", () => {
    test("valide un formulaire correct", () => {
        const validFormulaire = {
            nom: "Alice",
            prenom: "Bob",
            telephone: "0612345678",
            email: "alice@mail.com",
            message: "Je souhaite un massage relaxant.",
            id_service: 1,
            id_client: 1,
        };
        const { error } = formulaireSchema.validate(validFormulaire);
        expect(error).toBeUndefined();
    });

    test("échoue si email invalide", () => {
        const invalidForm = {
            nom: "Alice",
            prenom: "Bob",
            telephone: "0612345678",
            email: "bademail",
            message: "Bonjour",
            id_service: 1,
            id_client: 1,
        };
        const { error } = formulaireSchema.validate(invalidForm);
        expect(error).toBeDefined();
    });

    test("échoue si téléphone est trop court", () => {
        const invalidForm = {
            nom: "Alice",
            prenom: "Bob",
            telephone: "123",
            email: "alice@mail.com",
            message: "Bonjour",
            id_service: 1,
            id_client: 1,
        };
        const { error } = formulaireSchema.validate(invalidForm);
        expect(error).toBeDefined();
    });

    test("échoue si message trop court", () => {
        const invalidForm = {
            nom: "Alice",
            prenom: "Bob",
            telephone: "0612345678",
            email: "alice@mail.com",
            message: "Hi",
            id_service: 1,
            id_client: 1,
        };
        const { error } = formulaireSchema.validate(invalidForm);
        expect(error).toBeDefined();
    });

    test("échoue si id_service manquant", () => {
        const invalidForm = {
            nom: "Alice",
            prenom: "Bob",
            telephone: "0612345678",
            email: "alice@mail.com",
            message: "Massage relaxant",
            id_client: 1,
        };
        const { error } = formulaireSchema.validate(invalidForm);
        expect(error).toBeDefined();
    });
});
