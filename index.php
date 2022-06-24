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