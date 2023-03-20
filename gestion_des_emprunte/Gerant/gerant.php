<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="gerants.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><img src="img/Ajouter_un_titre-removebg-preview.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="stock.php">le stock</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header>
            <div id="img">
                <style>
                    #img{
                        background-image:url(img/téléchargement.jfif);
                        height: 300px;
                        width: 100%;
                    }
                </style>
            </div>
        </header>
        <!-- Section-->
    <section>

        <form action="" method="POST">
            <div class="d-flex justify-content-around text-light">
                <div>
                    <select class="form-select" name="categorie">
                        <option selected>categorie</option>
                        <option value="Location">Location</option>
                        <option value="Vente">Vente</option>
                    </select>
                </div>
                <div>
                    <select class="form-select" name="type_annonce">
                        <option selected>type</option>
                        <option value="appartement">appartement</option>
                        <option value="maison">maison</option>
                        <option value="villa">villa</option>
                        <option value="bureau">bureau</option>
                        <option value="terrain">terrain</option>
                    </select>
                </div>
                <div>
                    <select class="form-select" name="ville">
                        <option selected>Ville</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Tétouan">Tétouan</option>
                        <option value="Hoceïma">Hoceïma</option>
                        <option value="Assilah">Assilah</option>
                        <option value="Chefchaouen">Chefchaouen</option>
                    </select>
                </div>
                <div class="d-flex">
                    <h3 class="m-2">Prix :</h3>
                    <p class="m-2">Min</p>
                    <input class="m-1" type="number" name="min" >
                    <p class="m-2">Max</p>
                    <input class="m-1" type="number" name="max">
                    <input type="submit" name="Search" value="search" id="button">
                </div>
            </div>
        </form>

            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/interieur-mistral-1100x600-1.jpg" alt="livre" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                                </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
    </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    
    </body>
</html>
