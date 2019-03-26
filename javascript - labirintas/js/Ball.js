///
class Ball {
  constructor(diameter, color, speed, maze) {
    // Naudojami dydžiai
    this.diameter = diameter;
    this.speed = speed;
    this.maze = maze;

    this.speedX = speed; // pozicijos x ašyje prieaugis (greitis)
    this.speedY = speed; // pozicijos y ašyje prieaugis (greitis)
    this.x = 10;
    this.y = 10;

    // Kamuoliuko formavimas
    this.ball = document.createElement('div');
    this.ball.style.width = diameter + 'px';
    this.ball.style.height = diameter + 'px';
    this.ball.style.background = color;
    this.ball.style.display = 'inline-block';
    this.ball.style.borderRadius = '100%';
    this.ball.style.position = 'absolute';
    this.ball.style.left = this.x + 'px';
    this.ball.style.bottom = this.y + 'px';

    // Kamuoliuko įdėjimas į labirintą
    maze.container.appendChild(this.ball);

    // Apskaičiuojame praktiškai panaudojamą plotį ir aukštį
    this.container = {
      w: this.maze.width - this.diameter - maze.borderWidth * 2,
      h: this.maze.height - this.diameter - maze.borderWidth * 2
    }
  }

  startMoving() {
    // Peleidžia judėjimą
    setInterval(() => {
      this.move();
    }, 10);
  }

  move() {
    if (this.x >= this.container.w || this.x <= 0) this.speedX *= -1;
    if (this.y >= this.container.h || this.y <= 0) this.speedY *= -1;

    this.x += this.speedX;
    this.y += this.speedY;
    this.render();
  }

  render() {
    // Atvaizduoja pakitima
    this.ball.style.left = this.x + 'px';
    this.ball.style.bottom = this.y + 'px';
  }

  ballControl(e) {
    switch (e.key) {
      case 'ArrowRight':
        this.speedX = this.speed;
        this.speedY = 0;
        break;
      case 'ArrowLeft':
        this.speedX = -this.speed;
        this.speedY = 0;
        break;
      case 'ArrowUp':
        this.speedX = 0;
        this.speedY = this.speed;
        break;
      case 'ArrowDown':
        this.speedX = 0;
        this.speedY = -this.speed;
        break;
      case '+':
        this.changeSpeed(1);
        break;
      case '-':
        this.changeSpeed(-1);
        break;
    }
  }

  changeSpeed(inc) {
    this.speed += this.speed > 0 ? inc : -inc;
    this.speedX += this.speedX > 0 ? inc : -inc;
    this.speedY += this.speedY > 0 ? inc : -inc;
  }

  addBallControl() {
    window.addEventListener('keydown', this.ballControl.bind(this));
  }

}