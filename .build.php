<?php
$phar = new Phar('presearch-bot.phar');
$phar->startBuffering();

$defaultStub = $phar->createDefaultStub('presearch-bot');
$stub = "#!/usr/bin/env php \n" . $defaultStub;

$phar->buildFromDirectory(__DIR__, '/(presearch\-bot|\.php|README\.md)$/i');
$phar->setStub($stub);
$phar->stopBuffering();
