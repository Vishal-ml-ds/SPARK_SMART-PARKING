<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/wallet.css" />
    <title>Wallet System</title>
</head>
<style>
<?php include "headercss.php";
?>
</style>

<body>
    <?php
  include "header.php";
  ?>
    <div class="container">
        <h1>Your Wallet</h1>
        <p id="balance">Balance: $0.00</p>
        <button onclick="openAddFundsModal()">Add Funds</button>
    </div>

    <div id="addFundsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeAddFundsModal()">&times;</span>
            <h2>Add Funds to Your Wallet</h2>
            <form id="payment-form">
                <label for="amount">Amount:</label>
                <input type="number" id="amount" placeholder="Enter amount" required />

                <label for="card-holder-name">Cardholder Name:</label>
                <input type="text" id="card-holder-name" placeholder="John Doe" required />

                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" placeholder="1111-2222-3333-4444" required />

                <div class="form-row">
                    <div class="form-group">
                        <label for="exp-month">Exp Month:</label>
                        <input type="text" id="exp-month" placeholder="MM" required />
                    </div>
                    <div class="form-group">
                        <label for="exp-year">Exp Year:</label>
                        <input type="text" id="exp-year" placeholder="YYYY" required />
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" placeholder="123" required />
                    </div>
                </div>

                <button type="button" id="submit" onclick="processPayment()">
                    Add Funds
                </button>
                <div id="error"></div>
            </form>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/js/wallet.js"></script>
</body>

</html>