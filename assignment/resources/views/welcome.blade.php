<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        div {
            width: 100%;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: blue;
            text-align: center;
            border-radius: 10px;
            padding: 1rem;
            width: 100px;
        }
    </style>
</head>

<body>
    <div>
        <a href="customer/id/name/address">Customer</a>
        <a href="item/noitem/name/price">Item</a>
        <a href="date/id/name/orderno/date">Date</a>
        <a href="orderdetails/transno/orderno/itemid/name/price/qty">Order Details</a>
    </div>
</body>

</html>