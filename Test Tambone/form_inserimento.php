<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NoblePage - Inserisci Libro</title>
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
    <!-- Navigation-->
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

    <div class="container center-form">
        <div class="center-form">
            <div class="form-container">
                <h1>Inserisci un Libro</h1>
                <form id="form" name="form" method="post" action="registra.php" class="col-lg-6">
                    <div class="form-group">
                        <label for="Titolo" class="form-label" style="color: #fff;">Titolo</label>
                        <input type="text" class="form-control" name="Titolo" maxlength="255">
                    </div>
                    <div class="form-group">
                        <label for="Autore" class="form-label" style="color: #fff;">Autore</label>
                        <input type="text" class="form-control" name="Autore" maxlength="40">
                    </div>
                    <div class="form-group">
                        <label for="Genere" class="form-label" style="color: #fff;">Genere</label>
                        <input type="text" class="form-control" name="Genere" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="AnnoPubblicazione" class="form-label" style="color: #fff;">Anno di Pubblicazione</label>
                        <input type="number" class="form-control" name="AnnoPubblicazione" maxlength="15">
                    </div>
                    <div class="form-group">
                        <label for="ISBN" class="form-label" style="color: #fff;">ISBN</label>
                        <input type="text" class="form-control" name="ISBN" maxlength="30">
                    </div>
                    <label for="AltreInformazioni" class="form-label" style="color: #fff;">Altre Informazioni</label>
                    <div class="form-group">
                        <textarea id="AltreInformazioni" name="AltreInformazioni" class="form-control" aria-label="With textarea" rows="4" style="resize: none; height: 100px;"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required style="cursor: pointer;">
                            <label class="form-check-label" for="invalidCheck" style="color: #fff;">
                                Accetto la <a href="#" target="_blank" style="color: #fff;">normativa sulla privacy</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="register">Inserisci!</button>
                    </div>
                </form>
            </div>
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
            color: #fff; /* White text color */
        }
        .container {
            padding-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 700px;
        }
        .form-check-label a {
            color: #007bff;
            text-decoration: none;
        }
        .form-check-label a:hover {
            text-decoration: underline;
        }
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }
        .form-container {
            background-color: #F4623A;
            padding: 20px;
            border-radius: 10px;
        }
    </style>