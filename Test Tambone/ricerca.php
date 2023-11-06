<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NoblePage</title>
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
    <div class="container center-form">
        <div class="table-container">
            <h1>Ricerca Libri</h1>
            <form action="ricerca.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="ISBN" required placeholder="Inserisci ISBN del Libro da cercare">
                </div>
                <button type="submit" class="btn btn-success mt-2">Cerca</button>
            </form>

            <?php
            include 'conn.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ISBN'])) {
                $ISBN = $conn->real_escape_string($_POST['ISBN']);
                $sql = "SELECT * FROM tambone_libri WHERE ISBN = '$ISBN'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<h1>Risultati della Ricerca</h1>';
                    echo '<table class="table">';
                    echo '<tr>';
                    echo '<th>Titolo</th>';
                    echo '<th>Autore</th>';
                    echo '<th>Genere</th>';
                    echo '<th>Anno Di Pubblicazione</th>';
                    echo '<th>ISBN</th>';
                    echo '<th>Altre Informazioni</th>';
                    echo '</tr>';

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Titolo'] . "</td>";
                        echo "<td>" . $row['Autore'] . "</td>";
                        echo "<td>" . $row['Genere'] . "</td>";
                        echo "<td>" . $row['AnnoPubblicazione'] . "</td>";
                        echo "<td>" . $row['ISBN'] . "</td>";
                        echo "<td>" . $row['AltreInformazioni'] . "</td>";
                        echo "</tr>";
                    }

                    echo '</table>';
                } else {
                    echo "<h1>Nessun libro trovato con il codice ISBN inserito.</h1>";
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
        .table-container {
            background-color: #F4623A;
            padding: 20px;
            border-radius: 10px;
        }
        .table {
            width: 100%;
            color: #fff;
        }
        .table th, .table td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #fff;
            font-size: large;
        }
        .form-group input[type="text"] {
            height: 60px;
            width: 886px;
        }
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }
    </style>