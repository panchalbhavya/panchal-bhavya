<!DOCTYPE html>
<html>
<head>
    <title>All Appointments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Booked Appointments List</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="appointment.php">Appointment</a>
        <a href="view_appointments.php">View Bookings</a>
    </nav>
</header>

<section style="margin: 20px auto; width: 90%; text-align: center;">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Appointment Data (From File)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $file = "appointments.txt";
                if (file_exists($file)) {
                    $data = file($file); // File ki har line ko array mein leta hai
                    foreach ($data as $line) {
                        echo "<tr><td>" . htmlspecialchars($line) . "</td></tr>";
                    }
                } else {
                    echo "<tr><td>Abhi tak koi appointment nahi mili.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

</body>
</html>