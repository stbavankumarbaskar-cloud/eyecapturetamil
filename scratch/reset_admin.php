<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$user = App\Models\User::find(1);
if ($user) {
    $user->password = Illuminate\Support\Facades\Hash::make('12345678');
    $user->save();
    echo "SUCCESS: Admin (ID: 1, Email: {$user->email}) password set to: 12345678\n";
} else {
    echo "User not found\n";
}
