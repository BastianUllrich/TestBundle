<?php
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'Baul\TestBundle\Module\HelloWorldModule';

//Backend modules
$GLOBALS['BE_MOD']['examia']['meinModul'] = [
    'tables' => ['tl_meinModul'],
    'callback' => 'Baul\TestBundle\MyClass'
];

$GLOBALS['BE_MOD']['examia']['exams'] = [
    'tables' => ['tl_exams'],
];

$GLOBALS['BE_MOD']['examia']['member'] = [
    'tables' => ['tl_member'],
];

$GLOBALS['BE_MOD']['examia']['attendees_exams'] = [
    'tables' => ['tl_attendees_exams'],
];

$GLOBALS['BE_MOD']['examia']['supervisors_exams'] = [
    'tables' => ['tl_supervisors_exams'],
];

?>

