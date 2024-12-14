function foo(a, b) {
  $a = $a ?? 0; //Null coalescing operator. If a is null, use 0
  $b = $b ?? 0; //Null coalescing operator. If b is null, use 0
  return $a + $b;
}