<?php

function trackSale($product, $quantity) {
    $firebaseUrl = 'http://x7x.de3.myftpupload.com/digital.json'; // Replace this URL with your Firebase Realtime Database URL
    $postData = json_encode([
        'product' => $product,
        'quantity' => $quantity,
        'timestamp' => time() // Current timestamp
    ]);

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $firebaseUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($postData)
        ],
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
        echo "Error: " . $error;
    } else {
        echo "Sale tracked successfully";
    }
}

trackSale("Example A", 5);
?>
