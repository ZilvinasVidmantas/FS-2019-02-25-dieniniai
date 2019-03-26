class Car {
  constructor(brand, model, engineVolume, fuelType, color) {
    this.brand = brand;
    this.model = model;
    this.engineVolume = engineVolume;
    this.fuelType = fuelType;
    this.color = color;
  }

  toString(){
    return `${this.brand} ${this.model}
    EngineVolume: ${this.engineVolume}
    Fuel type: ${this.fuelType}
    Color: ${this.color}`;
  }
}

let carLot = [
  new Car('BMW', '320d', 3.2, 'Diesel', '#F00'),
  new Car('Opel', 'Astra', 2.4, 'Petrol', '#0F0'),
  new Car('BMW', '420d', 4.2, 'Diesel', '#F00'),
  new Car('Audi', 'A6', 4.0, 'Petrol', '#000'),
  new Car('Citroen', 'C4', 1.6, 'Diesel', '#00F'),
  new Car('Opel', 'Astra', 1.6, 'Petrol', '#0F0'),
  new Car('Audi', 'A6', 4.2, 'Petrol', '#000'),
  new Car('Citroen', 'C4', 1.8, 'Diesel', '#00F'),
]
console.table(carLot);

function OnlyCitroen(carArray) {
  let result = [];
  for (let i = 0; i < carArray.length; i++) {
    if (carArray[i].brand == 'Citroen') {
      result.push(carArray[i]);
    }
  }
  return result;
}

function minEngineMolumeCars(carArray, minValue) {
  let result = [];
  for (let i = 0; i < carArray.length; i++) {
    if (carArray[i].engineVolume > minValue) {
      result.push(carArray[i]);
    }
  }
  return result;
}

let onlyCitroen = OnlyCitroen(carLot);
let onlyCitroenLowVolume = minEngineMolumeCars(onlyCitroen, 1.6);
console.log(onlyCitroenLowVolume);
