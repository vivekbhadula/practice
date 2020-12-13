class Bicycle {
  int speed;
  Bicycle({this.speed = 0});
  String toString() => 'speed: $speed';
}

main(List<String> args) {
  print(Bicycle());
}
