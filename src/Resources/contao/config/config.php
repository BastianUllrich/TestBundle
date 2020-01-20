<?php
// Frontend modules
$GLOBALS['FE_MOD']['examia']['memberList'] = 'Baul\TestBundle\Module\MemberListModule';
$GLOBALS['FE_MOD']['examia']['memberGreeting'] = 'Baul\TestBundle\Module\MemberGreetingModule';
$GLOBALS['FE_MOD']['examia']['memberUserData'] = 'Baul\TestBundle\Module\MemberUserDataModule';

//Backend modules

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

