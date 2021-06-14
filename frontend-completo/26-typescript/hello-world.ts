console.log('Hello world!')

let nome:string = "Jean";
let idade:number;
let boolTeste:boolean;
let arrTeste:string[];
let testes:any;

boolTeste = true;
idade = 28;
arrTeste = ["Wow", "Valorant"];
testes = "Palmeiras";

function somar(v1:number, v2:number) {
  return v1 + v2;
}

class Pessoa{
  name:string;
  constructor(name:string) {
    this.name = name;
  }

  printName() {
    return this.name;
  }
}

let pessoa = new Pessoa('Jéssica');

class User extends Pessoa{
  constructor(name:string) {
    super(name);
  }

  lastName(lastName:string) {
    return lastName;
  }
}

let user = new User('Jean')

console.log(nome, idade, boolTeste, arrTeste, testes, somar(3, 9), pessoa.name, user.printName(), user.lastName('Macedo'));