class University {
  constructor(title) {
    this.title = title;
    this.lecturers = [];
    this.students = [];
    this.modules = [];
  }

  addStudent(student) {
    this.students.push(student);
  }

  addLecturer(lecturer) {
    this.lecturers.push(lecturer);
  }

  addModule(mod) {
    this.modules.push(mod);
  }

  getStudentByNameSurname(name, surname) {
    let matchedStudents = this.students.filter(stud => stud.name == name && stud.surname == surname);
    if (matchedStudents.length > 0) return matchedStudents[0];
    return 'Toks studentas nerastas';
  }

  getModuleByTitle(title) {
    let matchedModules = this.modules.filter(mod => mod.title == title);
    if (matchedModules.length > 0) return matchedModules[0];
    return 'Toks modulis nerastas';
  }

  bindStudentWithModule(stud, mod) {
    stud.addModule(mod);
    mod.addStudent(stud);
  }

  printStudentsInfo() {
    this.students.forEach(stud => {
      stud.print();
    });
  }

  printLecturersInfo() {
    this.lecturers.forEach(lect => {
      lect.print();
    });
  }

  printModulesInfo() {
    this.modules.forEach(mod => {
      mod.print();
    });
  }

  printUniversityInfo() {
    // Atvaizduojami dėstytojai
    console.log('----------------' + this.title + '--------------------\n\n');
    console.log('       ----------------Lecturers--------------------');
    this.printLecturersInfo();
    console.log('       ----------------Students--------------------');
    this.printStudentsInfo();
    console.log('       ----------Available Modules----------------');
    this.printModulesInfo();
  }
}