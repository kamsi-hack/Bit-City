<?php
include("config.php");

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard - Bit-City</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>
<a href="logout.php">Logout</a>

<h2>Live Market Prices</h2>
<div id="prices"></div>

<h2>Trade</h2>
<form>
<select>
<option>BTCUSDT</option>
<option>ETHUSDT</option>
</select>
<input type="number" placeholder="Amount">
<button type="button">Buy</button>
<button type="button">Sell</button>
</form>

<script>
async function getPrices(){
    const res = await fetch("https://api.binance.com/api/v3/ticker/price");
    const data = await res.json();

    const btc = data.find(c => c.symbol === "BTCUSDT");
    const eth = data.find(c => c.symbol === "ETHUSDT");

    document.getElementById("prices").innerHTML =
        "BTC: $" + btc.price + "<br>ETH: $" + eth.price;
}

getPrices();
setInterval(getPrices,5000);
</script>

</body>
</html>
