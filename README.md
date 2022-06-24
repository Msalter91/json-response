# json-response 

A simple class that returns a formatted json response 

## Installation 

composer require mikes/json-response

```php
<?php

require __DIR__ . "/vendor/autoload.php";

use mikesjsonresponse\ResponseClass\JsonResponse;

$student = array(
    'name' => 'John Smith',
    'course' => 'Maths',
    'level' => '101',
    'collections' => ['books' => 'Intro to UML', 'music' => 'rap']
);
new JsonResponse('unauthorized', '', $student);


```

### Param 1 (required)
1. success or ok - 200 http status
2. unauthorizsed - 401 http status
3. exception - 500 http status 

### Param 2 (optional)
string - the return message, leave empty if not available 

### param 3 (optional)
array - an array of data 