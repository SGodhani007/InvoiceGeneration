<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Automatic Increment Invoice Number</title>
<script>
  // Function to generate the next invoice number
  function generateInvoiceNumber() {
    // Retrieve the current invoice number from local storage or initialize it
    let currentInvoiceNumber = localStorage.getItem('invoiceNumber');
    if (!currentInvoiceNumber) {
      currentInvoiceNumber = 1; // Initial invoice number
    } else {
      currentInvoiceNumber = parseInt(currentInvoiceNumber) + 1;
    }
    
    // Save the next invoice number back to local storage
    localStorage.setItem('invoiceNumber', currentInvoiceNumber);

    // Format the invoice number (you can customize this as per your needs)
    let formattedInvoiceNumber = 'INV-' + currentInvoiceNumber.toString().padStart(4, '0');

    // Update the input field with the new invoice number
    document.getElementById('invoiceNumber').value = formattedInvoiceNumber;
  }
</script>
</head>
<body>
  <h2>Automatic Increment Invoice Number</h2>
  <form>
    <label for="invoiceNumber">Invoice Number:</label>
    <input type="text" id="invoiceNumber" name="invoiceNumber" readonly>
    <br><br>
    <button type="button" onclick="generateInvoiceNumber()">Generate Invoice Number</button>
  </form>
</body>
</html>
