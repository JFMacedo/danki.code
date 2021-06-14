var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
console.log('Hello world!');
var nome = "Jean";
var idade;
var boolTeste;
var arrTeste;
var testes;
boolTeste = true;
idade = 28;
arrTeste = ["Wow", "Valorant"];
testes = "Palmeiras";
function somar(v1, v2) {
    return v1 + v2;
}
var Pessoa = /** @class */ (function () {
    function Pessoa(name) {
        this.name = name;
    }
    Pessoa.prototype.printName = function () {
        return this.name;
    };
    return Pessoa;
}());
var pessoa = new Pessoa('Jéssica');
var User = /** @class */ (function (_super) {
    __extends(User, _super);
    function User(name) {
        return _super.call(this, name) || this;
    }
    User.prototype.lastName = function (lastName) {
        return lastName;
    };
    return User;
}(Pessoa));
var user = new User('Jean');
console.log(nome, idade, boolTeste, arrTeste, testes, somar(3, 9), pessoa.name, user.printName(), user.lastName('Macedo'));
