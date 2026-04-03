
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SVWP278E2B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SVWP278E2B');
</script>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$message = $_POST['message'];

$data = "Name:$name | Email:$email | Phone:$phone | Date:$date | Message:$message\n";

file_put_contents("appointments.txt",$data,FILE_APPEND);

echo "<h2>Appointment Booked Successfully!</h2>";
echo "<a href='index.php'>Back to Home</a>";

?>
