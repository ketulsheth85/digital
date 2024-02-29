<?php

// Include Firebase PHP SDK
require_once 'vendor/autoload.php';

// Package use to connect firebase
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Initialize Firebase
$serviceAccount = ServiceAccount::fromJsonFile('/firebase_credentials.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

// Function to track sales and store data in Firebase
function trackSale($product, $quantity) {
    global $database;

    $saleData = [
        'product' => $product,
        'quantity' => $quantity,
        'datetime' => date('Y-m-d H:i:s')
    ];

    try {
        $database->getReference('sales')->push($saleData);
        echo "Sale tracked from firebase.\n";
    } catch (Exception $e) {
        echo "Error tracking sale: " . $e->getMessage() . "\n";
    }
}


// Product name Widget data is getting fetched upto 2 units
trackSale("Widget", 2);

?>
