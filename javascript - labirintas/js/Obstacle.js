class Obstacle{
  constructor(x, y, w, h, maze){
    // Naudojami dydžiai 
    this.x = x;
    this.y = y;
    this.w = w;
    this.h = h;
    this.maze = maze;

    // Kliūties formavimas
    this.element = document.createElement('div');
    this.element.style.width = w + 'px';
    this.element.style.height = h + 'px';
    this.element.style.display = 'inline-block';
    this.element.style.backgroundColor = '#461c00';
    this.element.style.position = 'absolute';
    this.element.style.left = x + 'px';
    this.element.style.bottom = y + 'px';

    // Pridėjimas į konteinerį
    maze.container.appendChild(this.element);
  }
}