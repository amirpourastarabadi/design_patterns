<?php

require __DIR__ . '/Employees/Notifiable.php';
require __DIR__ . '/Employees/Employee.php';
require __DIR__ . '/Employees/CTO.php';
require __DIR__ . '/Employees/DevOps.php';
require __DIR__ . '/Employees/Programmer.php';
require __DIR__ . '/Publishers/Publisher.php';
require __DIR__ . '/Publishers/LogPublisher.php';
require __DIR__ . '/Log/LogLevels.php';
require __DIR__ . '/Log/Logger.php';

$developers = [new Programmer('me'), new Programmer('you'), new Programmer('some body else')];
$devops = [new DevOps('he'), new DevOps('she')];
$cto = [new CTO('?')];

$logger = new Logger;

subscribeAllEmployees($developers, $devops, $cto, $logger);

$logger->log(LogLevels::CRITICAL, 'first critical message');

$logger->unsubscribe(LogLevels::CRITICAL, $devops[0]);

$logger->log(LogLevels::CRITICAL, 'second critical message');
$logger->log(LogLevels::BUG, 'bug message');

// helper functions
function subscribeAllEmployees(array $developers, array $devops, array $cto, Logger $logger)
{
    foreach ($developers as $developer) {
        $logger->subscribe(LogLevels::BUG, $developer);
    }

    foreach ($devops as $dev) {
        $logger->subscribe(LogLevels::BUG, $dev);
        $logger->subscribe(LogLevels::CRITICAL, $dev);
    }

    foreach ($cto as $ct) {
        $logger->subscribe(LogLevels::CRITICAL, $ct);
        $logger->subscribe(LogLevels::EMERGENCY, $ct);
    }
}
