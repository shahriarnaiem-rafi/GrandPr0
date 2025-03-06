@extends('AdminDashboard.main')

@section('content')
<section class="">
    <div class="overflow-x-auto mt-6">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-6xl mx-auto">
            <h2 class="text-3xl text-center font-semibold bg-blue-500 text-white py-4 rounded-t-lg">Transaction List</h2>
            <table class="w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-800 text-white text-center text-sm md:text-base font-semibold">
                        <th class="px-6 py-3">SL</th>
                        <th class="px-6 py-3">Customer Id</th>
                        <th class="px-6 py-3">Customer Name</th>
                        <th class="px-6 py-3">Room Type</th>
                        <th class="px-6 py-3">Room Number</th>
                        <th class="px-6 py-3">Paid Amount</th>
                        <th class="px-6 py-3">Payment Method</th>
                        <th class="px-6 py-3">Receipt Generate</th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-700 text-sm md:text-base">
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">CUST001</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">Deluxe</td>
                        <td class="px-6 py-4">101</td>
                        <td class="px-6 py-4">$500</td>
                        <td class="px-6 py-4">Credit Card</td>
                        <td class="px-6 py-4">
                            <button class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600" 
                                    data-id="1"
                                    data-name="John Doe"
                                    data-room-type="Deluxe"
                                    data-room-number="101"
                                    data-paid-amount="500"
                                    data-payment-method="Credit Card"
                                    onclick="printReceipt(this)">
                                Print
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    // JavaScript printReceipt function
    function printReceipt(button) {
        const transactionData = {
            id: button.getAttribute('data-id'),
            name: button.getAttribute('data-name'),
            roomType: button.getAttribute('data-room-type'),
            roomNumber: button.getAttribute('data-room-number'),
            paidAmount: button.getAttribute('data-paid-amount'),
            paymentMethod: button.getAttribute('data-payment-method')
        };

        const receiptWindow = window.open("", "", "width=600,height=400");
        const printContent = `
        <html lang="en">
        <head>
          <title>Transaction Receipt</title>
          <style>
            body {
              font-family: 'Roboto', sans-serif;
              padding: 20px;
              background-color: #f7fafc;
            }
            h1 {
              text-align: center;
              color: #2d3748;
              font-size: 2rem;
              margin-bottom: 20px;
            }
            .receipt-container {
              max-width: 600px;
              margin: 0 auto;
              background-color: #fff;
              padding: 30px;
              border-radius: 8px;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .receipt-container .item {
              margin-bottom: 12px;
              display: flex;
              justify-content: space-between;
              font-size: 1rem;
              color: #4a5568;
            }
            .receipt-container .label {
              font-weight: bold;
              color: #2b6cb0;
            }
            .receipt-container .value {
              color: #2d3748;
            }
            .receipt-container .total {
              font-size: 1.25rem;
              font-weight: bold;
              margin-top: 20px;
              text-align: right;
              color: #e53e3e;
            }
            .footer {
              text-align: center;
              margin-top: 30px;
              font-size: 0.875rem;
              color: #4a5568;
            }
            .footer a {
              color: #3182ce;
              text-decoration: none;
            }
          </style>
        </head>
        <body>
          <h1>Transaction Receipt</h1>
          <div class="receipt-container">
            <div class="item">
              <span class="label">Transaction ID:</span>
              <span class="value">${transactionData.id}</span>
            </div>
            <div class="item">
              <span class="label">Customer Name:</span>
              <span class="value">${transactionData.name}</span>
            </div>
            <div class="item">
              <span class="label">Room Type:</span>
              <span class="value">${transactionData.roomType}</span>
            </div>
            <div class="item">
              <span class="label">Room Number:</span>
              <span class="value">${transactionData.roomNumber}</span>
            </div>
            <div class="item">
              <span class="label">Paid Amount:</span>
              <span class="value">$${transactionData.paidAmount}</span>
            </div>
            <div class="item">
              <span class="label">Payment Method:</span>
              <span class="value">${transactionData.paymentMethod}</span>
            </div>
            <div class="total">
              <span>Total Paid: $${transactionData.paidAmount}</span>
            </div>
          </div>
          
          <div class="footer">
            <p>Thank you for your payment!</p>
            <p>For any questions, visit our <a href="#">support page</a>.</p>
          </div>
        </body>
        </html>
        `;
        receiptWindow.document.write(printContent);
        receiptWindow.document.close();
        receiptWindow.print();
    }
</script>

@endsection
