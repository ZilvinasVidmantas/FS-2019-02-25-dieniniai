let person1 = {
  name: 'Vanda',
  surname: 'Vandaitė'
};

let person2 = {
  nam: 'Vandas',
  surname: 'Vandaitis'
};

person1.sayYourName = function() {
  console.log(this.name);
}

person2.sayYourName = function() {
  console.log(this.name);
}


console.log(person1);
console.log(person2);

class Person {
  constructor(name, surname) {
    this.name = name;
    this.surname = surname;
    this.anotherMethod = () => { console.log('sdfsdfgbsdjflgbb'); };
  }
}

let person3 = new Person("Vilkas", 'Vilkaitis');
let person4 = new Person("stump", 'sdfgsdf');

person3.__proto__.sayYourName = function() {
  console.log(this.name);
}
person3.sayYourName();
person4.sayYourName();

console.log(person3);
console.log(person4);