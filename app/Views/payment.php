<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment | Volleyball Club</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="wrapper">
        <form id="paymentForm">
            <h2>Membership Payment</h2>
            <input type="hidden" name="user_id" id="user_id" value="">
            <input type="hidden" name="amount" id="amount" value="">
            <div class="input-field">
                <input type="text" name="card_number" maxlength="16" required>
                <label>Card Number</label>
            </div>
            <div class="input-field">
                <input type="month" name="expiry_date" required>
                <label>Expiry Date</label>
            </div>
            <div class="input-field">
                <input type="text" name="cvv" maxlength="4" required>
                <label>CVV</label>
            </div>
            <div class="input-field">
                <input type="text" id="amountDisplay" disabled>
                <label>Amount to Pay</label>
            </div>
            <button type="submit">Make Payment</button>
            <div id="paymentMessage" style="margin-top:15px;color:#fff;"></div>
        </form>
    </div>
    <script>
    // Set user_id and amount from URL params
    function getParam(name) {
        const url = new URL(window.location.href);
        return url.searchParams.get(name);
    }
    document.getElementById('user_id').value = getParam('user_id') || '';
    document.getElementById('amount').value = getParam('amount') || '';
    document.getElementById('amountDisplay').value = getParam('amount') ? 'RM ' + parseFloat(getParam('amount')).toFixed(2) : '';
    </script>
    <script src="payment.js"></script>
</body>
</html> 