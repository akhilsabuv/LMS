<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// We just want to test the DB connection logic
// Mocking the facade might be hard without booting app, but let's try to just access the connection
try {
    echo "Attempting to get database name...\n";
    $name = \DB::connection()->getDatabaseName();
    echo "Database Name: " . $name . "\n";
} catch (\Exception $e) {
    echo "Exception caught: " . $e->getMessage() . "\n";
}
