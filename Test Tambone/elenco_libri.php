<?php
include 'conn.php';

$sql = "SELECT * FROM tambone_libri";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NoblePage - Elenco Libri</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">NoblePage</a>
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
        <h1>Elenco Libri</h1>

        <table class="table table-hover display" id="elencoLibri" >
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th>Genere</th>
                    <th>Anno Di Pubblicazione</th>
                    <th>ISBN</th>
                    <th>Altre Informazioni</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Titolo'] . "</td>";
                        echo "<td>" . $row['Autore'] . "</td>";
                        echo "<td>" . $row['Genere'] . "</td>";
                        echo "<td>" . $row['AnnoPubblicazione'] . "</td>";
                        echo "<td>" . $row['ISBN'] . "</td>";
                        echo "<td>" . $row['AltreInformazioni'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nessun libro presente nella tabella.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="ricerca.php" class="btn btn-success">Torna alla pagina di ricerca</a>
    </div>
</body>
</html>

<script>
    $(document).ready( function () {
    $('#elencoLibri').DataTable();
} );
</script>























<style>
        body {
            background-color: #F4623A;
            padding-top: 100px;
        }
        h1 {
            color: #fff;
            text-align: center;
        }
        .container {
            padding-top: 20px;
        }
        .table th, .table td {
            text-align: center;
            color: black;
            background-color: white;
        }
        .table th {
            background-color: white;
            color: black;
            font-size: large;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: white;
        }
    </style>