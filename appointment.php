<!DOCTYPE html>
<html>
<head>
<title>Book Appointment</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SVWP278E2B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SVWP278E2B');
</script>
<header>
<h1>Book Appointment</h1>

<nav>
<a href="index.php">Home</a>
<a href="about.php">About</a>
<a href="services.php">Services</a>
<a href="appointment.php">Appointment</a>
</nav>

</header>

<section>

<form action="book.php" method="POST" id="form">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<input type="date" name="date" required>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit">Book Appointment</button>

</form>

</section>

<script src="script.js"></script>

</body>
</html>
