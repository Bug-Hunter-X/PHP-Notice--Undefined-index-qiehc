```php
function processData(array $data): array
{
  $result = [];
  foreach ($data as $item) {
    // Check if both 'id' and 'value' keys exist before accessing
    if (isset($item['id'], $item['value'])) {
      $result[$item['id']] = $item['value'];
    } else {
      // Handle missing keys gracefully (optional, but recommended)
      trigger_error("Missing 'id' or 'value' key in data item:" . json_encode($item), E_USER_WARNING);
    }
  }
  return $result;
}

$data = [
  ['id' => 1, 'value' => 'one'],
  ['id' => 2, 'value' => 'two'],
  ['id' => 3, 'value' => 'three'],
  ['id' => 4],
];

$processedData = processData($data);
print_r($processedData);
```