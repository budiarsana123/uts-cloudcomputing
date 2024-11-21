
@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <span class="badge badge-danger"> GR </span>
    <h1>TOYOTA GAZOO RACING DATABASE</h1>

    <!-- Add Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Add favicon -->
    <link rel="icon" href="path/to/favicon.ico" type="image/x-icon">
    
    <style>
        .gallery-container {
            text-align: center;
        }
        
        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }
        
        div.gallery {
            margin: 15px;
            border: 1px solid #ccc;
            display: inline-block;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 300px; /* Set the desired width */
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .button-container a {
            margin: 0 10px;
            font-size: 18px; /* Set the desired font size */
            padding: 10px 20px; /* Set the desired padding */
        }
    </style>
</head>
<body>
<div class="gallery-container">
    <div class="gallery">
        <a target="_blank" href="img/gr 86.jpg">
            <img src="img/gr 86.jpg" alt="Toyota GR 86" width="600" height="400">
        </a>
        <div class="desc">Toyota GR 86</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img/toyota gr yaris.jpg">
            <img src="img/toyota gr yaris.jpg" alt="Toyota GR Yaris" width="600" height="400">
        </a>
        <div class="desc">Toyota GR Yaris</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img/toyota gr corrola.jpg">
            <img src="img/toyota gr corrola.jpg" alt="Toyota GR Corolla" width="600" height="400">
        </a>
        <div class="desc">Toyota GR Corolla</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img/supra.jpg">
            <img src="img/supra.jpg" alt="Toyota GR Supra" width="600" height="400">
        </a>
        <div class="desc">Toyota GR Supra</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="img/toyota gr agya.png">
            <img src="img/toyota gr agya.png" alt="Toyota GR AGYA" width="600" height="400">
        </a>
        <div class="desc">Toyota GR Agya</div>
    </div>
</div>
<br>
<br>
<h2>Menu</h2>
<div class="button-container">
    <!-- Add Bootstrap JS script links -->
    <a href="/mobil" class="btn btn-primary">Data Mobil</a>
    <a href="/sparepart" class="btn btn-secondary">Data Sparepart</a>
</div>

<!-- Add Bootstrap JS script links -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>
</html>

@endsection