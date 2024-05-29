<link rel="stylesheet" href="../css/modal.css">
<link rel="stylesheet" href="../css/payment.css">

<div id="paymentModal" class="modal">
    <style>
        .btn-group {
            display: flex;
        }

        .btn-group input[type="radio"] {
            display: none;
        }

        .btn-group label {
            padding: 10px 20px;
            margin: 0 5px;
            border: 1px solid #ccc;
            background-color: #f8f9fa;
            cursor: pointer;
            border-radius: 4px;
            user-select: none;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        }

        .btn-group input[type="radio"]:checked+label {
            background-color: #28a745;
            /* Green background for selected state */
            border-color: #28a745;
            /* Green border for selected state */
            color: #fff;
            /* White text for better contrast */
        }

        .btn-group label:hover {
            background-color: #e2e6ea;
            /* Light gray on hover */
        }
    </style>

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Payment Detail</h2>
        <form id="thanks-btn">

            <label for="description">Write your message:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <div class="payment-method">
                <label for="payment_method">Payment method:</label>
                <div class="btn-group">
                    <input type="radio" name="payment_method" id="cardChoice" value="Card">
                    <label for="cardChoice">Card</label>

                    <input type="radio" name="payment_method" id="creditCardChoice" value="Credit Card">
                    <label for="creditCardChoice">Credit Card</label>
                </div>
                <!-- <button type="button" class="payment-method-btn" value="Card">Card</button>
            <button type="button" class="payment-method-btn" value="Credit Card">Credit Card</button> -->
            </div>

            <div class="card-details">
                <label for="card-number">Card detail:</label>
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
                <label for="agree-checkbox">I hereby declare this transaction is: purely my support for______,
                    non-refundable, not for a commercial transaction, not for any illegal activity, not violating the
                    #Terms .</label>
            </div>

            <div class="terms-checkbox">
                <input type="checkbox" id="age-checkbox" name="age" required>
                <label for="age-checkbox">I am 18 years old</label>
            </div>

            <button type="submit" class="continue-payment">Lanjutkan Pembayaran</button>
        </form>
    </div>

</div>
<?php include '../components/thankyuu.php' ?>

<script src="../js/function-modal.js"></script>