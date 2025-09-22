<?php include 'header.php'; ?>
<?php 
include 'connect_db.php';

// Only show today's and future reservations, ordered by date/time ascending
$sql = "SELECT 
            nimi   AS name,
            sahkoposti AS email,
            puhelin AS phone,
            ajan   AS date,
            aika   AS time,
            persons,
            viesti AS message
        FROM cust
        WHERE ajan >= CURDATE()
        ORDER BY ajan ASC, aika ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<title>
    Ruoka Express - Tulevat varaukset
</title>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Spirax&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/taulu.css">
    <script type="text/javascript" src="time.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <style>
        .reservations-table { width: 100%; border-collapse: collapse; margin: 20px 0; background-color: white; }
        .reservations-table th, .reservations-table td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        .reservations-table th { background-color: #f2f2f2; font-weight: bold; }
        .reservations-table tr:hover { background-color: #f5f5f5; }
        .no-reservations { text-align: center; padding: 40px; color: #666; font-style: italic; }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-1 col-s-12"></div>
        <div class="col-10 col-s-12">
            <h2>Tulevat pöytävaraukset</h2>
            <p>Tässä näkyvät kaikki varaukset tälle päivälle ja tulevaisuuteen.</p>
            <hr>
            
            <?php if ($result && $result->num_rows > 0): ?>
                <table class="reservations-table">
                    <thead>
                        <tr>
                            <th>Nimi</th>
                            <th>Sähköposti</th>
                            <th>Puhelin</th>
                            <th>Päivämäärä</th>
                            <th>Aika</th>
                            <th>Henkilöt</th>
                            <th>Viesti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                <td><?php echo htmlspecialchars($row['date']); ?></td>
                                <td><?php echo htmlspecialchars($row['time']); ?></td>
                                <td><?php echo htmlspecialchars($row['persons']); ?></td>
                                <td><?php echo htmlspecialchars($row['message']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="no-reservations">
                    <h3>Ei tulevia varauksia</h3>
                    <p>Tälle päivälle tai tuleville päiville ei ole varauksia.</p>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-1 col-s-12"></div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>