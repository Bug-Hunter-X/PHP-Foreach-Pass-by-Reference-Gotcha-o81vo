```php
function processArray(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value * 2;
  }
  return $newArray;
}

$numbers = [1, 2, 3, 4, 5];
$result = processArray($numbers);
print_r($numbers); // Original array remains unchanged
print_r($result); // New array with modifications

//Alternative solution demonstrating correct usage of pass-by-reference within foreach
function processArray2(array &$arr) {
    foreach ($arr as $key => &$value) {
        $value *= 2; //More efficient than $value = $value *2
    }
}

$numbers2 = [1, 2, 3, 4, 5];
processArray2($numbers2);
print_r($numbers2);
```