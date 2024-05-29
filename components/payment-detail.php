<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="../css/payment.css">
</head>

<body>
    <div class="container">
        <h2>Payment Detail</h2>
        <form action="process_payment.php" method="POST">

            <label for="descriptio">Write your message:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <div class="payment-method">
                <label for="payment_method">Payment method:</label>
                <button type="button" id="payment_method">Card</button>
                <button type="button" id="payment_method">Credit Card</button>
            </div>

            <div class="card-details">
                <label for="Card detail">Card detail:</label>
                <div class="card-number">
                    <input type="text" id="card-number" name="card-number" placeholder="Card Number" required>
                </div>
                
                <div class="expiry-cvv">
                    <div class="expiry-date">
                        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
                    </div>
                    <div class="cvv">
                        <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
                    </div>
                </div>
            </div>

            <label for="billing">Billing postcode:</label>
            <input type="text" id="billing" name="billing" required>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>

            <div class="terms-checkbox">
                <input type="checkbox" id="agree-checkbox" name="agree" required>
                <label for="agree-checkbox">I hereby declare this transaction is: purely my support for______, non-refundable, not for a commercial transaction, not for any illegal activity, not violating the #Terms .</label>
            </div>

            <div class="terms-checkbox">
                <input type="checkbox" id="age-checkbox" name="age" required>
                <label for="age-checkbox">I am 18 years old</label>
            </div>

            <button type="submit" class="continue-payment">Lanjutkan Pembayaran</button>
        </form>

        
    </div>
</body>

</html>
