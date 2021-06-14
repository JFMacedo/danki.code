const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');
const mysql = require('mysql');

const app = express();

app.listen('3000', () => {
  console.log('Servidor rodando!')
});

//Body Parser
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }))
app.use(express.static(path.join(__dirname, 'public')));

//Conecção com o banco de dados
const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'node'
});

db.connect((err) => {
  if(err) {
    console.log('Não foi possível conectar com o banco de dados!')
  }
});

//Rotas
app.get('/', (request, response) => {
  let query = db.query('SELECT * FROM clientes', (err, results) => {
    response.render('index', {list:results});
  });
});

app.get('/register', (request, response) => {
  response.render('register', {});
});

app.post('/register', (request, response) => {
  console.log('Cadastro realizado com sucesso!')
  let name = request.body.name;
  let lastName = request.body.lastName;
  let company = request.body.company;
  db.query('INSERT INTO clientes (name, lastName, Company) VALUES (?, ?, ?)', [name, lastName, company], (err, results) => {});
  response.render('register' ,{});
});