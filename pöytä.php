
    <?php include 'header.php'; ?>
    <?php session_start();
    include 'connect_db.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name   = $_POST['nimi'];
        $email  = $_POST['sahkoposti'];
        $phone  = $_POST['puhelin'];
        $time   = $_POST['aika'];
        $date   = $_POST['ajan'];
        $persons = $_POST['persons'];
        $messages = $_POST['viesti'];

        $sql = "INSERT INTO cust (nimi, sahkoposti, puhelin, aika, ajan, viesti, persons) 
                            VALUES ('$name', '$email', '$phone', '$time', '$date', '$messages', '$persons')";

        if ($conn->query($sql) == TRUE) {
            header("location:pöytä.php");
            exit();
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
            <h2>Pöytä varaus </h2>
            <p>Jos olet kiinostunut maistaa meidan Ruoka, tervetuloa käymään suoraan ravintolaan. Voi myös varata pöytä etukateen lähettämällä viesti.</p>
            <hr>

            <form action="" method="POST">

                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="nimi">Nimesi</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <input type="text" name="nimi" placeholder="Nimesi..">
                    </div>
                </div>


                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="sähköposti">Sähköposti</label>
                    </div>

                    <div class="col-9 col-s-12">
                        <input type="email" name="sahkoposti" placeholder="Sinun Sähköpostisi....">
                    </div>
                </div>


                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="puhelin">Puhelin Numero</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <input type="tel" name="puhelin" placeholder="Puhelin numerosi..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 col-s-12">
                        <label for="aika">Valitse aika</label>
                    </div>
                    <div class="col-9 col-s-12">
                        <select name="aika">
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
                        <input type="date" name="ajan" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" max="<?php echo date('Y-m-d', strtotime('+7 days')); ?>">
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
                        <textarea name="viesti" placeholder="Kirjoita viesti, jos jotain kysytävä.." style="height:200px"></textarea>
                    </div>
                </div>


                <div class="row">

                    <input type="submit">
                </div>
            </form>
        </div>




        <div class="col-3 col-s-12">
            <div class="veg">

                <a class="weatherwidget-io" href="https://forecast7.com/en/60d1724d94/helsinki/"
                    data-label_1="HELSINKI" data-label_2="WEATHER" data-theme="original">HELSINKI WEATHER
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
                <div id="suomi"></div>
            </div>


        </div>

    </div>


</body>

</html>