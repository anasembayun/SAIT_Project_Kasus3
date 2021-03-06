<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SAIT | KASUS 3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="../kasus3_movie/assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
        }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../kasus3_movie/pricing.css" rel="stylesheet">
    </head>
    <body>
    
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">SAIT Kasus 3</h5>
            <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="film.php">Home</a>
            </nav>
        </div>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h2>Tambah Data Film</h2>
        </div>
        <div class="container" style="background-color:#F7F7F6; padding:40px;">  
            <form action="insert.php" method="post" id="form">
                <div class="form-group">
                    <strong>ID :</strong>
                    <input type="text" name="id" class="form-control" placeholder="ID">
                </div>
                <div class="form-group">
                    <strong>Judul Film :</strong>
                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div>
                <div class="form-group">
                    <strong>Genre :</strong>
                    <input type="text" name="genre" class="form-control" placeholder="Genre">
                </div>
                <div class="form-group">
                    <strong>Tanggal Rilis :</strong>
                    <input type="text" name="tgl_rilis" class="form-control" placeholder="Tgl Rilis">
                </div>                      
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        <a href="film.php" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </body>
    <br>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">?? 2022 Ana Sembayun, 464386</span>
        </div>
    </footer>
</html>
