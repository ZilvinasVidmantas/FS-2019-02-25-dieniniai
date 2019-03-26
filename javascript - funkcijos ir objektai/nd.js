class Rectangle {
  constructor(width, height) {
    this.width = width;
    this.height = height;
  }

  calcPerimeter() {
    return (this.width + this.height) * 2;
  }

  calcArea() {
    return this.width * this.height;
  }

  calcHypotenuse() {
    return (this.width ** 2 + this.height ** 2) ** 0.5;
  }

}

let rectangles = [
  new Rectangle(58, 47),
  new Rectangle(15, 15),
  new Rectangle(53, 71),
  new Rectangle(51, 75),
  new Rectangle(55, 47),
  new Rectangle(59, 76)
];

function allAreas(array){
  console.log('Areas');
  for (let i = 0; i < array.length; i++) {
    console.log(array[i].calcArea())
  }
}

function allPerimeters(array){
  console.log('Perimeters');
  for (let i = 0; i < array.length; i++) {
    console.log(array[i].calcPerimeter())
  }
}

function commonArea(array){
  let sum = 0;
  for (let i = 0; i < array.length; i++) {
    sum += array[i].calcArea();
  }
  console.log('Common area');
  console.log(sum);
}

allAreas(rectangles);
allPerimeters(rectangles);
commonArea(rectangles);


