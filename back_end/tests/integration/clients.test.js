
jest.mock("../../db", () => ({
  query: jest.fn()
}));
const pool = require("../../db");
const clientsRouter = require("../../root/clients");


describe("Clients Routes", () => {
  beforeEach(() => jest.clearAllMocks());

  test("GET /clients should return clients list", async () => {
    const mockClients = [{ id_client: 1, nom: "Alice" }];
    pool.query.mockImplementation((sql, cb) => cb(null, mockClients));

    const req = {};
    const res = { json: jest.fn() };


    const getHandler = clientsRouter.stack.find(r => r.route?.path === "/" && r.route.methods.get).route.stack[0].handle;
    await getHandler(req, res);

    expect(res.json).toHaveBeenCalledWith(mockClients);
  });

  test("POST /clients should insert client", async () => {
    pool.query.mockImplementation((sql, params, cb) => cb(null, { insertId: 42 }));

    const req = { body: { nom: "Alice", prenom: "Bob", date_de_naissance: 1990, email: "test@mail.com", telephone: 12345 } };
    const res = { status: jest.fn().mockReturnThis(), json: jest.fn() };

    const postHandler = clientsRouter.stack.find(r => r.route?.path === "/" && r.route.methods.post).route.stack[0].handle;
    await postHandler(req, res);

    expect(res.status).toHaveBeenCalledWith(201);
    expect(res.json).toHaveBeenCalledWith({ message: "Client ajouté", id: 42 });
  });
});
