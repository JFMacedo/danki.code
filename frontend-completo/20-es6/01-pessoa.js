class Pessoa {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  getName() {
    return this.name;
  }

  getAge() {
    return this.age;
  }
}

class outraClasse {
  constructor() {
    alert('Outra classe!');
  }
}