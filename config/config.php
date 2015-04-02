<?php

$dir = __DIR__ . '/../docs';

$iterator = Symfony\Component\Finder\Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('build')
    ->exclude('tests')
    ->in($dir);

$options = [
    'theme'                => 'laravel',
    'title'                => 'Laravel API Documentation',
    'build_dir'            => __DIR__ . '/../build/laravel',
    'cache_dir'            => __DIR__ . '/../cache/laravel',
];

$sami = new Sami\Sami($iterator, $options);
$templates = $sami['template_dirs'];
$templates[] = __DIR__ . '/../themes/';

$sami['template_dirs'] = $templates;

return $sami;
