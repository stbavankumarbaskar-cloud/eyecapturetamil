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
        $table->string('emailId');
        $table->integer('status')->default(1);
        $table->timestamps();
    });
    echo "TABLE 'subscriptions' CREATED SUCCESSFULLY!\n";
    
    // Test insert with new table name
    $s = new App\Models\Subscription();
    $s->setTable('subscriptions');
    $s->emailId = 'test_check@gmail.com';
    $s->status = 1;
    $s->save();
    echo "TEST INSERT SUCCESSFUL! ID: " . $s->id . "\n";
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
