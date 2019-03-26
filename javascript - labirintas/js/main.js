  const maze = new Maze('.game-container');

  maze.addBall(20, '#aa0000', 5);
  maze.addBall(40, '#00aa00', 7);
  maze.addBall(50, '#0000aa', 6);

  maze.addObstacle(200, 0, 20, 650);
  maze.addObstacle(-200, 0, 20, 650);
  maze.startBallMovement();