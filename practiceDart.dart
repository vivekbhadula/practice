import 'dart:math';

class Bicycle {
  int speed;
  Bicycle({this.speed = 0});
  String toString() => 'speed: $speed';
}

// main(List<String> args) {
//   print(Bicycle());
// }

abstract class Shape {
  num get area;
}

class circle implements Shape {
  final num radius;
  circle(this.radius);
  num get area => pi * pow(radius, 2);
}

class square implements Shape {
  final num side;
  square(this.side);
  num get area => pow(side, 2);
}

main(List<String> args) {
  final Circle = circle(2);
  final Square = square(4);
  print(Circle.area);
  print(Square.area);
}
