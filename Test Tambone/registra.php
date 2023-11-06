<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NoblePage - Risultato Registrazione</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/icon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            background-color: #F4623A;
            padding-top: 100px;
        }
        h1 {
            text-align: center;
            color: #fff;
        }
        .container {
            padding-top: 20px;
        }
        .navbar {
            background-color: #F4623A;
            color: #fff;
        }
        .navbar a {
            color: #fff;
        }
        .message-container {
            background-color: #F4623A;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .message {
            color: #fff;
        }
    </style>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">NoblePage</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="form_inserimento.php">Inserisci Libri</a></li>
                    <li class="nav-item"><a class="nav-link" href="elenco_libri.php">Elenco Libri</a></li>
                    <li class="nav-item"><a class="nav-link" href="ricerca.php">Ricerca Libri</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="message-container">
            <?php
            include 'conn.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $Titolo = $conn->real_escape_string($_POST['Titolo']);
                $Autore = $conn->real_escape_string($_POST['Autore']);
                $Genere = $conn->real_escape_string($_POST['Genere']);
                $AnnoPubblicazione = $conn->real_escape_string($_POST['AnnoPubblicazione']);
                $ISBN = $conn->real_escape_string($_POST['ISBN']);
                $AltreInformazioni = $conn->real_escape_string($_POST['AltreInformazioni']);

                $sql = "INSERT INTO tambone_libri (Titolo, Autore, Genere, AnnoPubblicazione, ISBN, AltreInformazioni) VALUES ('$Titolo', '$Autore', '$Genere', '$AnnoPubblicazione', '$ISBN', '$AltreInformazioni')";

                if ($conn->query($sql) === TRUE) {
                    echo '<h1>Registrazione completata con successo!</h1>';
                } else {
                    echo '<h1>Errore: ' . $sql . '</h1><p>' . $conn->error . '</p>';
                }

                $conn->close();
            }
            ?>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="include/header.js"></script>
</body>
</html>
