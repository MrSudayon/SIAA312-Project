<html>
<head>
    <title>Boss B - Terms and Condition</title>
    <style type="text/css">
        body {
            background-image: url("../imgs/bg.jpg");
            background-color: #fffcc4;
            background-size: auto;
            padding-top: 3%;
        }
        
        .container {
            background-color: #fffcc4;
            width: 50%;
            height: 80%;
            box-shadow: 0px 8px 25px 0px rgba(0,0,25,150);
            overflow: auto;
            padding: 2% 4% 2%;
        }

        .back {
            background-image: linear-gradient(#ffae42, #ff4500);
            color: black;
            margin-top: 10px;
            margin-left: 50px;
            position: absolute;
            border-radius: 15px;
            cursor: pointer;
            font-family: 'Lucida Sans';
            font-size: 30px;
            height: 40px;
            width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,80);
        }

        .back:hover {
            transform: scale(1.1);
            background-image: linear-gradient(#33b5e5,#ddd);
        }

        h1 {
            margin-top: 0;
            font-size: 27px;
            font-weight: 700px;
            font-family: "Times New Roman";
            word-spacing: 0;
            text-align: center;
        }

        h4 {
            font-family: "San Serif";
            word-spacing: 1.5;
            text-align: justify;
        }
    </style>
</head>
<body>
    
    <form method="POST" action="termsncondi.php">
        <button type="submit" class="back" name="back">BACK</button>
    </form>
    <center>
        <div class = "container">
            <br>
            <h1>Terms and Condition - Boss B Burgers
            <br><br>
            <h4>(1.1) Individuals, aged 18 years or above can make a purchase from Boss B Burgers Customer will need an active email address and a telephone/cellphone number which can be used for making a contact as necessary. 
                In case if required, the customer agrees to present a positive ID issued by Philippine government (as applicable) as a proof of ownership for making purchase.
            <h4>(1.2) Customer takes the responsibility of maintaining the confidentiality of his/her account details including password or PIN numbers, 
                preventing unauthorized access to his/her account. Customer agrees to accept responsibility for all activities that occur from their account. 
                Customer must take all necessary steps to ensure that the account credentials are kept confidential and secure and should inform the seller immediately 
                in case customer has any reason to believe that his/her account credentials including user id and password are manipulated and/or used in an unauthorized manner.
            <h4>(1.3) Customer is solely responsible for providing the correct billing and delivery addresses.
            <h4>(1.4) Delivery will take place at the delivery address specified by customer during the ordering process. Delivery address must be within the Philippines
            <h4>(1.5) When customer places an order to purchase a product/products from Boss B Burgers, the order represents a non-binding agreement between the seller and the customer. A binding contract between seller and buyer forms only after a complete payment is fully authorized by the payment gateway and the goods are dispatched from our warehouse. Any order will be dispatched only after a successful authorization of the billed amount in full.
            <h4>(1.6) Please note that the email confirmation is only an acknowledgement of the receipt of the order. Any product/products on the same order which we have not confirmed in the dispatch confirmation e-mail, is not a part of that binding contract.
            <h4>(1.7) Orders can only be cancelled before the goods are dispatched, by notifying the seller in writing. After dispatch, Food product/products cannot be returned within of purchase.
            <h4>(1.8) Only the written conversations will be considered for any change or cancellation of order before or after dispatch of goods. Cash refund fee on order cancellation may apply.
            <h4>(1.9) All goods, items or offers shown on our catalogue are subjected to availability at any given time and may not be ready in our stock at all the time. If that is the case, we shall notify you with the date of availability by e-mail. We have the right to discontinue any items, goods or offers from the website at any time, and our only liability in such cases will be limited to refund any money paid to us related to those goods or items which we may no longer be able to supply.  We will notify you about the same, as soon as possible.
            <h4>(1.10) We put our utmost efforts to have your order delivered on the delivery date provided in your dispatch confirmation email. However, please note the delivery dates provided by us are only our best estimates and the actual delivery of your order may be later than this date. Any delays made by the delivery service is beyond our control and our liability.
            <h4>(1.11) In case a parcel is returned undelivered or refused at the time of delivery, we reserve the right to charge the full shipping charges for both back and forth sending of parcels and any other applicable fee and transaction charges. In such cases, perishable items are excluded from any claims for refund.
            <h4>(1.12) In case customer decides to cancel an order, we reserve the right to charge the applicable transaction charges.
            <h4>(1.13) Order with incomplete payment or non-payment shall be on hold until a complete payment is made. In case such orders are not paid within seven day, they shall be automatically cancelled and the cancellation charges shall apply.
            <h4>(1.14) We cannot be held responsible for the product quality such as, but not limited to, taste, texture, color etc. of any product we sell. While we are willing to escalate any product related complaint to the manufacturer, we are not responsible for the resolution of such complaints. We can only offer a product return according to condition #7 above.
            <h4>(1.15) Order and the goods become customer’s responsibility and ownership after customer receives them.
            <h4>(1.16) We reserve the right to adjust prices, goods and special offers at our discretion.
            <h4>(1.17) We carry the right to modify or discontinue any or all products at any point of time, with or without any prior notice, temporarily or permanently. We bear no liability for any such modification, suspension or discontinuance of any product or services.
            <h4>(1.18) Deals, gift coupons and vouchers are exclusive and cannot be combined and may not be exchanged against cash. Seller reserves the right to discontinue offers and deals at any time without any prior notice. Discounts can not be combined and discounted products may not be eligible for free shipping.
            <h4>(1.19) Free shipping is considered as offer and is complementary. We may decline to offer free shipping at our discretion.
            <h4>(1.20) Please note that pictures and images on Boss B Burgers are only for illustration purpose. Actual product may look different than that is shown in the image.
            <h4>(1.21) We keep the rights reserved to refuse to fulfill an order. If an order is refused for fulfillment, an email communication or SMS shall follow.
            <h4>(1.22) Our entire liability to you does not exceed the order cost you have paid.
            <h4>(1.23) The website or any portion of the website may not be reproduced, duplicated, copied, sold, resold, or otherwise exploited for any commercial or non-commercial purpose without our written consent.
            <h4>(1.24) You may not frame or use framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of Boss B Burgers and its affiliates without a written consent from the seller.
            <h4>(1.25) All the brand images and trademarks are proprietary of the respective owner company.
            <h4>(1.26) We reserve the right to change the sale terms and the Return Policy at any time without notifying the customer.
        </div> 
    </center>
    
</body>
</html>

<?php
    if(isset($_POST['back'])) {
        ?>
        <script>
            window.location = "../user/signin.php";
        </script>
        <?php
    }
    
?>