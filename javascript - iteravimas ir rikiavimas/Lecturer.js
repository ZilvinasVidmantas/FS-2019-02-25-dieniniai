class Lecturer {
  constructor(name, surname, degree) {
    this.name = name;
    this.surname = surname;
    this.degree = degree;
    this.modules = []
  }

  print() {
    console.log(this.name, this.surname, this.degree);
    if (this.modules.length > 0) { // Jeigu dėstytojui priskirtų modulių sąraše yra elementų
      console.log('----Modules:')
      this.modules.forEach(mod => {
        console.log('--------' + mod.title);
      });
    }
  }
}