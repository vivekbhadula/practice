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

Shape shapeFactory(String type) {
  if (type == 'Circle') return circle(2);
  if (type == 'Square') return square(2);
  throw 'Can\'t create $type.';
}

main(List<String> args) {
  final Circle = shapeFactory('Circle');
  final Square = shapeFactory('Square');
  print(Circle.area);
  print(Square.area);
}
