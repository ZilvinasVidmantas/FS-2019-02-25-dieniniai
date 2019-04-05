class Student{
  constructor(name, surname, age, course){
    this.name = name;
    this.surname = surname;
    this.age = age;
    this.course = course;
    this.modules = [];
  }

  print() {
    console.log(this.name, this.surname, this.age, this.course);
    if (this.modules.length > 0) { // Jeigu studentui priskirtų modulių sąraše yra elementų
      console.log('    Modules:')
      this.modules.forEach(mod => {
        console.log('        ' + mod.title);
      });
    }
  }

  addModule(mod){
    this.modules.push(mod);
  }
}