<?php


require __DIR__ . '/Employees/Notifiable.php';
require __DIR__ . '/Employees/Employee.php';
require __DIR__ . '/Employees/CTO.php';
require __DIR__ . '/Employees/DevOps.php';
require __DIR__ . '/Employees/Programmer.php';
require __DIR__ . '/Logger.php';

$employees = [new Programmer('me'), new Programmer('you'), new Programmer('some body else'), new DevOps('he'), new DevOps('she'), new CTO('?')];

$logger = new Logger;

$logger->log('critical', $message = 'some message');
foreach ($employees as $employee) {
    $employee->notify($message);
}

$logger->log('bug', $message = 'another message');
foreach ($employees as $employee) {
    $employee->notify($message);
}
