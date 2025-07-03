// wallet.js
function openAddFundsModal() {
  var modal = document.getElementById('addFundsModal');
  modal.style.display = 'block';
}

function closeAddFundsModal() {
  var modal = document.getElementById('addFundsModal');
  modal.style.display = 'none';
}

function processPayment() {
  var amount = document.getElementById('amount').value;
  var cardHolderName = document.getElementById('card-holder-name').value;
  var cardNumber = document.getElementById('card-number').value;
  var expMonth = document.getElementById('exp-month').value;
  var expYear = document.getElementById('exp-year').value;
  var cvv = document.getElementById('cvv').value;

  // For simplicity, let's assume a successful payment
  if (!isNaN(amount) && amount > 0 && validateCardDetails(cardHolderName, cardNumber, expMonth, expYear, cvv)) {
    var balance = document.getElementById('balance');
    var currentBalance = parseFloat(balance.innerText.replace('Balance: $', ''));
    var newBalance = currentBalance + parseFloat(amount);
    balance.innerText = 'Balance: $' + newBalance.toFixed(2);
    closeAddFundsModal();
  } else {
    alert('Please enter valid amount and card details.');
  }
}

function validateCardDetails(cardHolderName, cardNumber, expMonth, expYear, cvv) {
  // Simple card details validation
  // In a real system, you would use a more sophisticated validation or
  // pass the card details securely to a server for processing
  return cardHolderName !== '' && /^\d{16}$/.test(cardNumber) && expMonth !== '' && /^\d{4}$/.test(expYear) && /^\d{3,4}$/.test(cvv);
}
