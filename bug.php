```php
function processArray(array &$arr) {
  foreach ($arr as &$value) {
    $value = $value * 2;
  }
}

$numbers = [1, 2, 3, 4, 5];
processArray($numbers);
print_r($numbers);

function processArray2(array $arr) {
  foreach ($arr as $key => $value) {
    $arr[$key] = $value * 2;
  }
}

$numbers2 = [1, 2, 3, 4, 5];
processArray2($numbers2);
print_r($numbers2); 
```