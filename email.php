<?php

function sendDailySalesSummaryEmail() {
    // Connect to your database to fetch sales data
    $servername = "localhost";
    $username = "root";
    $password = "Letsdoit@123";
    $dbname = "digital_project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch daily sales data
    $sql = "SELECT SUM(sales_amount) AS total_sales, product_id, SUM(quantity_sold) AS total_quantity
            FROM sales
            WHERE DATE(sale_date) = CURDATE()
            GROUP BY product_id
            ORDER BY total_quantity DESC
            LIMIT 5";
    $result = $conn->query($sql);

    // Prepare email content
    $email_subject = "Daily Sales Summary";
    $email_body = "Daily Sales Summary:\n\n";
    $email_body .= "Date: " . date("Y-m-d") . "\n\n";

    if ($result->num_rows > 0) {
        // Loop through results to get top-selling products
        while($row = $result->fetch_assoc()) {
            $product_id = $row["product_id"];
            $total_quantity = $row["total_quantity"];
            // Fetch product details from another table (e.g., products table)
            $product_name = getProductDetails($product_id); // Function to fetch product name
            $email_body .= "Product: $product_name, Quantity Sold: $total_quantity\n";
        }
    } else {
        $email_body .= "Sorry No sales for today.\n";
    }

    // Add total sales amount
    $email_body .= "\nTotal Sales Amount: $" . number_format($total_sales, 2);

    // Send email
    $to = "ketul.tbs@gmail.com"; // Add admin email addresses here
    $headers = "From: ketul@digitalstore.com";
    mail($to, $email_subject, $email_body, $headers);

    // Close database connection
    $conn->close();
}

// Function to fetch product details (replace with your implementation)
function getProductDetails($product_id) {
    // Placeholder implementation, replace this with actual product details retrieval
    return "Product $product_id";
}

// Call the function at the end of each day
sendDailySalesSummaryEmail();

?>
