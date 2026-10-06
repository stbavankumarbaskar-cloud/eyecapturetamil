<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

// Ensure directories exist
$targetDir = public_path('upload/admins/news');
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Gather available sample images 
$sampleImages = [];

$rootNewsDir = base_path('upload/admins/news');
if (is_dir($rootNewsDir)) {
    foreach (scandir($rootNewsDir) as $file) {
        if ($file !== '.' && $file !== '..' && is_file($rootNewsDir . '/' . $file)) {
            $sampleImages[] = $rootNewsDir . '/' . $file;
        }
    }
}

$ipcJpg = public_path('images/ipc.jpg');
if (file_exists($ipcJpg)) {
    $sampleImages[] = $ipcJpg;
}

if (empty($sampleImages)) {
    echo "No sample images found!\n";
    exit(1);
}

echo "Found " . count($sampleImages) . " sample images to use as copies.\n";

// Copy existing root upload files into public/upload/admins/news
if (is_dir($rootNewsDir)) {
    foreach (scandir($rootNewsDir) as $file) {
        if ($file !== '.' && $file !== '..' && is_file($rootNewsDir . '/' . $file)) {
            copy($rootNewsDir . '/' . $file, $targetDir . '/' . $file);
        }
    }
}

// Now for all DB news entries, if image file doesn't exist, copy a sample image
$newsRecords = DB::table('news')->get();
$createdCount = 0;
$idx = 0;

foreach ($newsRecords as $news) {
    if (empty($news->image)) {
        continue;
    }
    
    $destPath = $targetDir . '/' . $news->image;
    if (!file_exists($destPath)) {
        $sourceImage = $sampleImages[$idx % count($sampleImages)];
        copy($sourceImage, $destPath);
        $createdCount++;
        $idx++;
    }
}

echo "Created $createdCount image files for news records in $targetDir\n";
