<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

try {
    Schema::dropIfExists('subscriptions');
    Schema::create('subscriptions', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable();
        $table->string('emailId');
        $table->integer('status')->default(1);
        $table->timestamps();
    });
    echo "TABLE 'subscriptions' RECREATED WITH NAME COLUMN SUCCESSFULLY!\n";
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
