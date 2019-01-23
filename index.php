<?php
/**
 * Created by PhpStorm.
 * User: imokhles
 * Date: 22/01/2019
 * Time: 20:56
 */

require __DIR__ . '/vendor/autoload.php';

use Commando\Command;


$codesignCMD = new Commando\Command();

$codesignCMD->setHelp('codesign ipa without apple\'s hardware written with PHP');

// ipa option
$codesignCMD->option('f')
    ->aka('file')
//    ->require()
    ->describedAs('app ipa file');

// certificate option
$codesignCMD->option('c')
    ->aka('certificate')
//    ->require()
    ->describedAs('resign certificate');

// certificate key password option
$codesignCMD->option('k')
    ->aka('key')
//    ->require()
    ->describedAs('resigned ipa output');

// provisioning profile option
$codesignCMD->option('p')
    ->aka('provision')
//    ->require()
    ->describedAs('resign provisioning profile');

// output path option
$codesignCMD->option('o')
    ->aka('output')
//    ->require()
    ->describedAs('resigned ipa output');