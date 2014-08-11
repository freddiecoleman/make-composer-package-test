<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('generate both a command and a handler class.');

$I->runShellCommand('php artisan commander:generate FooCommand --properties="bar, baz" --base="tests/tmp"');

$I->seeInShellOutput('All done!');
$I->seeFileFound('tests/tmp/FooCommand.php');
$I->seeFileFound('tests/tmp/FooCommandHandler.php');