class Module{
  constructor(title, credits){
    this.title = title;
    this.credits = credits;
    this.students = [];
    this.lecturers = [];
  }

  print(){
    console.log(`${this.title}: ${this.credits}`);
  }

  addStudent(stud){
    this.students.push(stud);
  }
}