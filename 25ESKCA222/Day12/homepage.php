<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f3efff;
}

nav{
    background:#fff;
    display:flex;
    justify-content:center;
    gap:60px;
    padding:20px;
    box-shadow:0 2px 10px rgba(0,0,0,0.15);
    position:sticky;
    top:0;
}

nav a{
    text-decoration:none;
    color:black;
    font-size:18px;
    font-weight:bold;
    transition:.3s;
}

nav a:hover{
    color:#0d6efd;
    border-bottom:3px solid #0d6efd;
    padding-bottom:5px;
}

.hero{
    height:300px;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    color:white;
    text-align:center;
}

.hero h1{
    font-size:55px;
    color:black;
    font-weight:bold;
}

.hero p{
    margin-top:15px;
    font-size:22px;
    color:black;
    font-weight:bold;
}

.btn{
    margin-top:30px;
    text-decoration:none;
    color:white;
    background:#0d6efd;
    padding:14px 35px;
    border-radius:30px;
    transition:.3s;
}

.btn:hover{
    background:#084298;
}

.features{
    width:90%;
    margin:70px auto;
    text-align:center;
}

.features h2{
    font-size:38px;
    color:#0d6efd;
    margin-bottom:40px;
}

.cards{
    display:flex;
    justify-content:center;
    gap:30px;
}

.card{
    width:300px;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
    transition:.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card img{
    width:100px;
    height:100px;
}

.card h3{
    margin:15px 0;
    color:#0d6efd;
}

.card p{
    color:#555;
}

footer{
    background:#111;
    color:white;
    text-align:center;
    padding:18px;
    margin-top:60px;
}

</style>

</head>

<body>

<nav>
    <a href="homepage.php">Home</a>
    <a href="link.php">Link</a>
    <a href="aboutus.php">About Us</a>
    <a href="contactus.php">Contact</a>
    <form class="d-flex">
        <a href="login.php" class="btn btn-outline-danger">login </a>
        
      </form>
</nav>

<div class="hero">
    <h1>Welcome To My Website</h1>
    <p>Build. Learn. Grow.</p>

    <a href="about.php" class="btn">Learn More</a>
</div>

<div class="features">

<h2>Our Features</h2>

<div class="cards">

<div class="card">
<img src="https://w3-lab.com/wp-content/uploads/2019/12/Get-the-Most-Fancied-Web-Development-Services-min-scaled.jpg">
<h3>Web Development</h3>
<p>Responsive and modern website designs.</p>
</div>

<div class="card">
<img src="https://static.vecteezy.com/system/resources/previews/006/867/266/original/secure-login-gradient-web-page-with-security-shield-free-vector.jpg">
<h3>Secure Login</h3>
<p>Safe authentication using PHP & MySQL.</p>
</div>

<div class="card">
<img src="https://static.vecteezy.com/system/resources/previews/005/747/712/non_2x/24-hours-customer-service-icon-24-7-support-icon-sign-button-customer-service-icon-vector.jpg">
<h3>24×7 Support</h3>
<p>Quick support and user-friendly services.</p>
</div>

</div>

</div>

<footer>
©2026 My Website | All Rights Reserved
</footer>

</body>
</html>
