<?php
// 91 CLUB CLONE - Kanpur91 Style
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>91 CLUB</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Roboto,Arial}
body{background:#f5f5f5;padding-bottom:80px}
.top{background:linear-gradient(90deg,#ff5757,#ff8a8a);color:#fff;padding:12px;text-align:center;position:sticky;top:0;z-index:10}
.top b{font-size:24px;letter-spacing:1px}
.login-box{padding:20px}
.tab{display:flex;justify-content:space-around;margin:20px 0;border-bottom:2px solid #eee}
.tab div{padding:10px 20px;font-weight:bold;color:#888}
.tab .active{color:#ff5757;border-bottom:3px solid #ff5757}
.input{width:100%;background:#fff;border-radius:12px;padding:14px;margin:10px 0;display:flex;align-items:center}
.input input{border:none;outline:none;width:100%;font-size:16px;margin-left:10px}
.btn-login{background:linear-gradient(90deg,#ff5757,#ff8a8a);color:#fff;border:none;width:100%;padding:15px;border-radius:25px;font-size:18px;font-weight:bold;margin-top:20px}
.card{background:#fff;border-radius:15px;margin:10px;padding:12px}
.banner{background:linear-gradient(90deg,#8b4513,#daa520);color:#fff;border-radius:15px;padding:15px;text-align:center;font-weight:bold}
.balance{display:flex;justify-content:space-between;align-items:center}
.balance b{font-size:22px}
.btns{display:flex;gap:10px}
.btns button{flex:1;padding:12px;border:none;border-radius:10px;font-weight:bold}
.withdraw{background:#fff3e0;color:#ff9800} .deposit{background:#ff5757;color:#fff}
.nav-bottom{position:fixed;bottom:0;left:0;right:0;background:#fff;display:flex;justify-content:space-around;padding:8px 0;border-top:1px solid #eee;z-index:20}
.nav-bottom div{text-align:center;font-size:12px;color:#888}
.nav-bottom .active{color:#ff5757}
.game-row{display:flex;gap:10px;overflow-x:auto}
.game{ min-width:140px; background:#fff; border-radius:12px; overflow:hidden; text-align:center; flex-shrink:0}
.game img{width:100%;height:100px;object-fit:cover;background:#ddd}
.wheel{width:280px;height:280px;border-radius:50%;background:conic-gradient(#ffeb3b 0 60deg,#fff 60deg 120deg,#ffeb3b 120deg 180deg,#fff 180deg 240deg,#ffeb3b 240deg 300deg,#fff 300deg 360deg);margin:20px auto;border:8px solid #ff5757;position:relative;display:flex;align-items:center;justify-content:center}
</style>
</head>
<body>

<div class="top"><b>⑨ 91 CLUB</b> <span style="float:right">🇺🇸 EN</span></div>

<div id="loginPage">
<div style="padding:15px"><h2>Log in</h2><p style="color:#666;font-size:13px;margin-top:5px">Please log in with your phone number or email If you forget your password, please contact customer service</p></div>
<div class="tab"><div class="active">📱 Phone Number</div><div>✉️ Email</div></div>
<div class="login-box">
<div style="display:flex;gap:10px"><div class="input" style="width:35%">+91 ▼</div><div class="input" style="width:65%"><input placeholder="Please enter the phone number"></div></div>
<div class="input">🔒 <input type="password" placeholder="Password"></div>
<div style="display:flex;justify-content:space-between;margin-top:10px;font-size:14px"><label><input type="checkbox"> Remember password</label><span style="color:#ff5757">Forgot password?</span></div>
<button class="btn-login" onclick="showLobby()">Log in</button>
<div style="text-align:center;margin-top:20px"><button onclick="showLobby()" style="border:1px solid #ff5757;color:#ff5757;background:#fff;padding:10px 25px;border-radius:20px">Register</button></div>
</div>
</div>

<div id="lobbyPage" style="display:none">
<div class="card" style="background:#ffefe0">🔊 If you have not received your withdrawal within 3 days, please contact...</div>
<div class="card banner">EVERY TIME MEMBER DEPOSIT<br>AGENTS RECEIVE BONUS UP TO<br><span style="font-size:32px">2 MILLION</span></div>
<div class="card balance"><div>🪙 Wallet balance<br><b>₹0.84 🔄</b></div><div class="btns"><button class="withdraw">↑ Withdraw</button><button class="deposit">Deposit</button></div></div>
<div class="card" style="display:flex;gap:10px"><button style="flex:1;background:#ffe8d0;border:none;padding:12px;border-radius:10px">🎡 Wheel</button><button style="flex:1;background:#f3e8ff;border:none;padding:12px;border-radius:10px">👑 VIP privileges</button></div>
<div class="card">
<div style="display:flex;gap:15px;font-weight:bold"><span style="color:#ff5757">🏠 Lobby</span><span>🎮 Mini game</span><span>7 Slots</span><span>🃏 Card</span><span>Fishing</span></div>
<div style="margin-top:15px"><b>⭐ Recommended Games</b></div>
<div class="game-row" style="margin-top:10px">
<div class="game"><img src="https://via.placeholder.com/140x100/ff5757/fff?text=CHICKEN"><div style="padding:5px;font-weight:bold">CHICKEN ROAD 2</div></div>
<div class="game"><img src="https://via.placeholder.com/140x100/673ab7/fff?text=VORTEX"><div style="padding:5px;font-weight:bold">VORTEX</div></div>
<div class="game"><img src="https://via.placeholder.com/140x100/ff9800/fff?text=DRAGON"><div style="padding:5px;font-weight:bold">Dragon Class</div></div>
</div>
</div>
</div>

<div class="nav-bottom">
<div class="active" onclick="showLobby()">🏠<br>Home</div>
<div>🧾<br>Activity</div>
<div style="background:gold;border-radius:50%;padding:5px 15px;margin-top:-20px">🎯<br>Get ₹500</div>
<div>💰<br>Promotion</div>
<div onclick="showLogin()">👤<br>Account</div>
</div>

<script>
function showLobby(){document.getElementById('loginPage').style.display='none';document.getElementById('lobbyPage').style.display='block';}
function showLogin(){document.getElementById('lobbyPage').style.display='none';document.getElementById('loginPage').style.display='block';}
</script>
</body>
</html>
