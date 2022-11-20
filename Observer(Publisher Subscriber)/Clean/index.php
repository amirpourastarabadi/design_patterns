<?php

require __DIR__ . '/Employees/Notifiable.php';
require __DIR__ . '/Employees/Employee.php';
require __DIR__ . '/Employees/CTO.php';
require __DIR__ . '/Employees/DevOps.php';
require __DIR__ . '/Employees/Programmer.php';
require __DIR__ . '/Publishers/Publisher.php';
require __DIR__ . '/Publishers/LogPublisher.php';
require __DIR__ . '/Logger.php';

$developers = [new Programmer('me'), new Programmer('you'), new Programmer('some body else')];
$devops = [new DevOps('he'), new DevOps('she')];
$cto = [new CTO('?')];

$logger = new Logger;

subscribeAllEmployees($developers, $devops, $cto, $logger);

$logger->log('critical', 'some message');

$logger->unsubscribe('critical', $devops[0]);

$logger->log('critical', 'another message');

// helper functions
function subscribeAllEmployees(array $developers, array $devops, array $cto, Logger $logger)
{
    foreach ($developers as $developer) {
        $logger->subscribe('bug', $developer);
    }

    foreach ($devops as $dev) {
        $logger->subscribe('bug', $dev);
        $logger->subscribe('critical', $dev);
    }

    foreach ($cto as $ct) {
        $logger->subscribe('critical', $ct);
        $logger->subscribe('emergency', $ct);
    }
}
