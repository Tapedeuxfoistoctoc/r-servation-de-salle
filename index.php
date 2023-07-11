<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Réservation de salles de réunion</title>
    <style>
        body {
            background-image: url("https://i.gifer.com/B1fP.gif");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin-top: 50px;
        }

        h1, h2 {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#" class="active">Accueil</a></li>
                <li><a href="#">Disponibilités</a></li>
                <li><a href="#">Mes Réservations</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Réservation de salles de réunion</h1>
        <div id="availability-calendar">
            <h2>Disponibilités des salles</h2>
            <ul id="room-list"></ul>
        </div>
        <div id="reservation-form">
            <h2>Réserver une salle</h2>
            <form id="reservation-form" action="reservation.php" method="POST">
                <div class="form-group">
                    <label for="room">Salle de réunion</label>
                    <select id="room" name="room">
                        <option value="1">Salle A</option>
                        <option value="2">Salle B</option>
                        <!-- options de salles ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="start-time">Heure de début</label>
                    <input type="datetime-local" id="start-time" name="start-time" required>
                </div>
                <div class="form-group">
                    <label for="end-time">Heure de fin</label>
                    <input type="datetime-local" id="end-time" name="end-time" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Réserver" class="button">
                </div>
            </form>
        </div>
        <div id="reservation-list">
            <h2>Mes Réservations</h2>
            <ul id="user-reservations"></ul>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>





