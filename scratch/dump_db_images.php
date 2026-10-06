<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

echo "=== NEWS TABLE ==:\n";
$news = DB::table('news')->get(['id', 'title', 'image', 'slider_news']);
foreach ($news as $n) {
    echo "ID: {$n->id} | Title: {$n->title} | Image: {$n->image} | Slider: {$n->slider_news}\n";
}

echo "\n=== SLIDER TABLE ==:\n";
$sliders = DB::table('slider')->get();
foreach ($sliders as $s) {
    print_r($s);
}

echo "\n=== TEAMS TABLE ==:\n";
$teams = DB::table('teams')->get();
foreach ($teams as $t) {
    print_r($t);
}
