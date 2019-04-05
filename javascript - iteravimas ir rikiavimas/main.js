const students = [
  new Student('Studentas1', 'Pavardenis', 20, 1),
  new Student('Studentas2', 'Pavardenis', 22, 2),
  new Student('Studentas3', 'Pavardenis', 22, 3),
  new Student('Studentas4', 'Pavardenis', 23, 4),
  new Student('Studentas5', 'Pavardenis', 24, 1),
  new Student('Studentas6', 'Pavardenis', 25, 2),
  new Student('Studentas7', 'Pavardenis', 26, 3),
  new Student('Studentas8', 'Pavardenis', 27, 4),
  new Student('Studentas9', 'Pavardenis', 28, 1)
];

const lecturers = [
  new Lecturer('Destytojas1', 'Pavardenis', 'Master'),
  new Lecturer('Destytojas2', 'Pavardenis', 'Master'),
  new Lecturer('Destytojas3', 'Pavardenis', 'Doctor'),
  new Lecturer('Destytojas4', 'Pavardenis', 'Doctor')
];

const modules = [
  new Module('Beržų skaptavimas', 6),
  new Module('Saulės laikrodžių gamyba', 6),
  new Module('Abecėlės', 3),
  new Module('Termitai', 3),
  new Module('Sostinės', 6),
  new Module('Lapuočių laistymas', 15),
  new Module('Fontanizmas', 6)
];

const university = new University('Alytaus turizmo kolegija');

// Iteravimo per masyvą veiksmų vykdymas trimis būdais (Funkcionalumas tas pats)

// Su FOR ciklu
for (let i = 0; i < students.length; i++) {
  university.addStudent(students[i])
}
// Su Foreach
lecturers.forEach((lec) => {
  university.addLecturer(lec);
});
// Su foreach be bereikalingu sintaksės elementų
modules.forEach(mod => university.addModule(mod));

let studentToBind = university.getStudentByNameSurname('Studentas1', 'Pavardenis');
let moduleToBind = university.getModuleByTitle('Termitai');
university.bindStudentWithModule(studentToBind, moduleToBind);

university.printUniversityInfo();

