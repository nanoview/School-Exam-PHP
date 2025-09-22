
    <?php include 'header.php'; ?>
    <?php session_start();
    include 'connect_db.php';

    $success_message = "";
    $error_message = "";
    $debug_info = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // English input names mapped to existing DB columns
        $name    = $_POST['name']    ?? '';
        $email   = $_POST['email']   ?? '';
        $phone   = $_POST['phone']   ?? '';
        $time    = $_POST['time']    ?? '';
        $date    = $_POST['date']    ?? '';
        $persons = $_POST['persons'] ?? '';
        $messages= $_POST['message'] ?? '';

        // Debug: Show what data was received
    $debug_info = "Vastaanotettu data – Nimi: $name, Sähköposti: $email, Puhelin: $phone, Päivämäärä: $date, Aika: $time, Henkilöitä: $persons";

    $sql = "INSERT INTO cust (nimi, sahkoposti, puhelin, aika, ajan, viesti, persons) 
                VALUES ('$name', '$email', '$phone', '$time', '$date', '$messages', '$persons')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "✅ Varaus vastaanotettu! Tarkista sähköpostisi ja vahvista varauksesi.";
            $debug_info .= " | ✅ Tietokantaan tallennus onnistui | Viimeisin ID: " . $conn->insert_id;
        } else {
            $error_message = "❌ Varausta ei voitu lähettää. Yritä hetken kuluttua uudelleen tai ota yhteyttä ravintolaan.";
            $debug_info .= " | ❌ Tietokantaan tallennus epäonnistui: " . $conn->error;
        }
    }

    ?>
<!DOCTYPE html>
<html>
<title>
    Ruoka Express
</title>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Spirax&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="time.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>

<body>

    <div class="row">
        <div class="col-3 col-s-12">

        </div>
        <div class="col-6 col-s-12">
            <h2>Pöytävaraus</h2>
            
            <?php if (!empty($success_message)): ?>
                <div class="success-message" style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 15px;">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($error_message)): ?>
                <div class="error-message" style="background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 15px;">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($debug_info)): ?>
                <div class="debug-info" style="background-color: #fff3cd; color: #856404; padding: 10px; border: 1px solid #ffeaa7; border-radius: 5px; margin-bottom: 15px; font-family: monospace; font-size: 12px;">
                    <strong>Virheenkorjaus:</strong> <?php echo $debug_info; ?>
                </div>
            <?php endif; ?>
            
            <p>Jos olet kiinostunut maistaa meidan Ruoka, tervetuloa käymään suoraan ravintolaan. Voi myös varata pöytä etukateen lähettämällä viesti.</p>
            <hr>

            <form action="" method="POST">

                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="nimi">Nimesi</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <input type="text" name="name" placeholder="Nimesi..">
                    </div>
                </div>


                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="sähköposti">Sähköposti</label>
                    </div>

                    <div class="col-9 col-s-12">
                        <input type="email" name="email" placeholder="Sinun Sähköpostisi....">
                    </div>
                </div>


                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="puhelin">Puhelin Numero</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <input type="tel" name="phone" placeholder="Puhelin numerosi..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="aika">Valitse aika</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <select name="time">
                            <option value="lounas">Lounas</option>
                            <option value="iltapala">Iltapala</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="ajan"> Valitse päivämäärä</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" max="<?php echo date('Y-m-d', strtotime('+7 days')); ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="henkilöt">Henkilömäärä</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <input type="number" name="persons" placeholder="henkilö..">
                    </div>
                </div>



                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="viesti">Kommenti</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <textarea name="message" placeholder="Kirjoita viesti, jos jotain kysytävä.." style="height:200px"></textarea>
                    </div>
                </div>


                <div class="row">

                    <input type="submit" value="Lähetä">
                </div>
            </form>
        </div>




        <div class="col-3 col-s-12">
            <div class="veg">

                <a class="weatherwidget-io" href="https://forecast7.com/en/60d1724d94/helsinki/"
                    data-label_1="HELSINKI" data-label_2="SÄÄ" data-theme="original">HELSINGIN SÄÄ
                </a>

                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');
                </script>
            </div>

        </div>
        <div class="col-3 col-s-12">
            <?php
            include "kalenteri.php";
            ?>
        </div>

        <div class="col-3 col-s-12">

            <br>
            <div>
                <div id="timeFinland"></div>
            </div>


        </div>

    </div>


</body>

</html>