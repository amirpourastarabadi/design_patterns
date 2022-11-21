<?php


require __DIR__ . '/Employees/Notifiable.php';
require __DIR__ . '/Employees/Employee.php';
require __DIR__ . '/Employees/CTO.php';
require __DIR__ . '/Employees/DevOps.php';
require __DIR__ . '/Employees/Programmer.php';
require __DIR__ . '/Log/LogLevels.php';
require __DIR__ . '/Log/Logger.php';

$employees = [new Programmer('me'), new Programmer('you'), new Programmer('some body else'), new DevOps('he'), new DevOps('she'), new CTO('?')];

$logger = new Logger;

$logger->log(LogLevels::CRITICAL, $message = 'some message');
notifyEmployees($employees, $message);

$logger->log(LogLevels::BUG, $message = 'another message');
notifyEmployees($employees, $message);


// helpers
function notifyEmployees(array $employees, string $message)
{
    foreach ($employees as $employee) {
        $employee->notify($message);
    }
}
