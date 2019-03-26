class Maze {
  constructor(selector) {
    // Konteinerio priskyrimas
    this.container = document.querySelector(selector);

    // Naudojami dydžiai
    this.borderWidth = 8;
    this.width = this.container.offsetWidth;
    this.height = this.container.offsetHeight;
    this.balls = [];
    this.obstacles = [];

    // Konteinerio formavimas
    this.container.style.border = this.borderWidth + 'px solid #461c00';
    this.container.style.position = 'relative';
  }

  addBall(diameter, color, speed) {
    this.balls.push(new Ball(diameter, color, speed, this));
  }

  addObstacle(x, y, w, h) {
    // Jeigu  atstumimas X ašyje, klijuoti nuo dešinės pusės
    if (x < 0 || typeof x != 'number') x = this.width + x - w - this.borderWidth * 2;
    
    // Jeigu  atstumimas Y ašyje, klijuoti nuo viršaus
    if (y < 0 || typeof y != 'number') y = this.height + y - h - this.borderWidth * 2;
    this.obstacles.push(new Obstacle(x, y, w, h, this));
  }


  startBallMovement() {
    this.balls.forEach(ball => ball.startMoving());

    // Chaltura - uždedamas valdymas pirmam kamuoliukui
    this.balls[0].addBallControl();
  }


}