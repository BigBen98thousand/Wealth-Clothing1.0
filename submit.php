<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST["name"]);
    $email    = htmlspecialchars($_POST["email"]);
    $phone    = htmlspecialchars($_POST["phone"]);
    $address  = htmlspecialchars($_POST["address"]);
    $cartData = htmlspecialchars($_POST["cartData"]);

    $to      = "your-email@example.com"; // Replace with your real email
    $subject = "New Order from Wealth Clothing";

    $message = "New Order Details:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Address: $address\n\n";
    $message .= "Order:\n$cartData\n";

    $headers = "From: no-reply@wealthclothing.ng";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2 style='text-align:center;'>✅ Order placed successfully!</h2>";
    } else {
        echo "<h2 style='text-align:center;'>❌ Something went wrong. Try again.</h2>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>