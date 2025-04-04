const express = require("express");
const bodyParser = require("body-parser");
const PaytmChecksum = require("./PaytmChecksum");

const app = express();
app.use(bodyParser.json());

app.post("/initiate-payment", (req, res) => {
    const { amount, email, phone } = req.body;
    let orderId = "VS" + Date.now();

    let paytmParams = {
        MID: "",
        ORDER_ID: orderId,
        TXN_AMOUNT: amount.toString(),
        CUST_ID: email,
        MOBILE_NO: phone,
        CHANNEL_ID: "WEB",
        WEBSITE: "DEFAULT",
        CALLBACK_URL: "http://localhost:5000/payment-response"
    };

    PaytmChecksum.generateSignature(paytmParams, "gnMXpj18399601067990").then(checksum => {
        res.json({ orderId, txnToken: checksum });
    });
});

app.listen(5000, () => console.log("Server running on port 5000"));
