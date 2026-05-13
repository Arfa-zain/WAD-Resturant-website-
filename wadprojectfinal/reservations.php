<?php
include "restaurant.php";

$result = $conn->query("SELECT * FROM reservations ORDER BY id DESC");
?>
<title>Spice Hub | Reservations</title>
    <!--Favicon icon-->
    <link rel="icon" type="images/jpg" href="images/logo.jpg">
<link rel="stylesheet" href="reservations.css">

<h2>Reservations</h2>
<!-- BACK TO DASHBOARD -->
    <div class="back-btn-container">
    <a href="dashboard.php" class="btn-back">← Back to Dashboard</a>
</div>

<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Guests</th>
    <th>Date</th>
    <th>Time</th>
    <th>Special Request</th>
    <th>Status</th>
    <th>Status Action</th>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['guests']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td>
        <?php echo !empty($row['request']) ? $row['request'] : 'No request'; ?>
    </td>
    <td><?php echo $row['status']; ?></td>
    <td>
    <a class="btn-confirm" 
       href="update_status.php?id=<?php echo $row['id']; ?>&status=Confirmed">
       Confirm
    </a>

    <a class="btn-cancel" 
       href="update_status.php?id=<?php echo $row['id']; ?>&status=Cancelled"
       onclick="return confirm('Are you sure you want to cancel this reservation?')">
       Cancel
    </a>
</td>
</tr>
<?php } ?>

</table>