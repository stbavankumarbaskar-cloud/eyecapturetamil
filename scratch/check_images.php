<?php

 
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$dbImages = DB::table('news')->pluck('image', 'id')->toArray();
echo "DB news count: " . count($dbImages) . "\n";

$pubPath = public_path('upload/admins/news');
$rootPath = base_path('upload/admins/news');

$pubFiles = is_dir($pubPath) ? array_diff(scandir($pubPath), array('.', '..')) : [];
$rootFiles = is_dir($rootPath) ? array_diff(scandir($rootPath), array('.', '..')) : [];

echo "public/upload/admins/news files (" . count($pubFiles) . "):\n";
print_r($pubFiles);

echo "upload/admins/news files (" . count($rootFiles) . "):\n";
print_r($rootFiles);

$foundCount = 0;
$missingCount = 0;
foreach ($dbImages as $id => $img) {
    $inPub = file_exists($pubPath . '/' . $img);
    $inRoot = file_exists($rootPath . '/' . $img);
    if ($inPub || $inRoot) {
        $foundCount++;
        echo "News ID $id: $img -> Found (pub: " . ($inPub ? 'YES' : 'NO') . ", root: " . ($inRoot ? 'YES' : 'NO') . ")\n";
    } else {
        $missingCount++;
        echo "News ID $id: $img -> MISSING!\n";
    }
}
echo "Total Found: $foundCount, Total Missing: $missingCount\n";
