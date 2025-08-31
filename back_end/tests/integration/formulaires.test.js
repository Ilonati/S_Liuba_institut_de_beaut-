jest.mock("../../src/db", () => ({
    query: jest.fn()
}));
const pool = require("../../src/db");
const formRouter = require("../../src/routes/formulaire");

describe("Formulaire Routes", () => {
    beforeEach(() => jest.clearAllMocks());

    test("GET /formulaire returns list", async () => {
        const mockForms = [{ id_formulaire: 1, message: "Hello" }];
        pool.query.mockImplementation((sql, cb) => cb(null, mockForms));

        const req = {};
        const res = { json: jest.fn() };

        const getHandler = formRouter.stack.find(r => r.route?.path === "/" && r.route.methods.get).route.stack[0].handle;
        await getHandler(req, res);

        expect(res.json).toHaveBeenCalledWith(mockForms);
    });

    test("POST /formulaire inserts new formulaire", async () => {
        pool.query.mockImplementation((sql, params, cb) => cb(null, { insertId: 99 }));

        const req = { body: { nom: "John", prenom: "Doe", telephone: "0612345678", email: "john@mail.com", message: "Test", id_service: 1, id_client: 1 } };
        const res = { status: jest.fn().mockReturnThis(), json: jest.fn() };

        const postHandler = formRouter.stack.find(r => r.route?.path === "/" && r.route.methods.post).route.stack[0].handle;
        await postHandler(req, res);

        expect(res.status).toHaveBeenCalledWith(201);
        expect(res.json).toHaveBeenCalledWith({ message: "Formulaire envoyé", id: 99 });
    });
});
