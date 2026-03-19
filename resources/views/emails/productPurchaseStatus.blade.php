<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order Confirmation - NEPCART</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f6f6f6; padding:20px;">

    <div style="max-width:600px; margin:auto; background:white; padding:30px; border-radius:8px;">

        <h2 style="color:#2c3e50;">Hello {{ $productPurchase->customer->name }},</h2>

        <p>
            Thank you for shopping with <strong>NEPCART</strong>! 🎉  
            Your order has been successfully placed and is now being processed.
        </p>

        <h3 style="margin-top:25px;">📦 Order Details</h3>

        <table style="width:100%; border-collapse:collapse;">
            <tr>
                <td style="padding:8px; border-bottom:1px solid #ddd;"><strong>Product Name:</strong></td>
                <td style="padding:8px; border-bottom:1px solid #ddd;">{{ $productPurchase->product->name }}</td>
            </tr>

            <tr>
                <td style="padding:8px; border-bottom:1px solid #ddd;"><strong>Quantity:</strong></td>
                <td style="padding:8px; border-bottom:1px solid #ddd;">{{ $productPurchase->purchase_item }}</td>
            </tr>

            <tr>
                <td style="padding:8px; border-bottom:1px solid #ddd;"><strong>Delivery Address:</strong></td>
                <td style="padding:8px; border-bottom:1px solid #ddd;">{{ $productPurchase->customer->address ?? 'Your registered address' }}</td>
            </tr>
        </table>

        <p style="margin-top:20px;">
            🚚 Your product has been prepared for shipping and will be delivered to your address within 
            <strong>5–7 business days</strong>.
        </p>

        <p>
            We will notify you once your order has been shipped.
        </p>

        <p style="margin-top:25px;">
            Thank you for choosing <strong>NEPCART</strong>.  
            We look forward to serving you again!
        </p>

        <hr style="margin:30px 0;">

        <p style="font-size:14px; color:#777;">
            Best Regards,<br>
            <strong>NEPCART Team</strong>
        </p>

    </div>

</body>

</html>