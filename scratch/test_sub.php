<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $s = new App\Models\Subscription();
    $s->emailId = 'test_check@gmail.com';
    $s->status = 1;
    $s->save();
    echo "Subscription database save works! ID: " . $s->id . "\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
