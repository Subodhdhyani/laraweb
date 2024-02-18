<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imgs/Tlogo.png">
    <link rel = "stylesheet" type ="text/css" href="css/file.css">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .carousel-inner {
            width: 90%;
            max-height: 500px;
            left: 5%;
            
        }
        .w3-third img {
            margin-bottom: -6px;
            opacity: 0.8;
            cursor: pointer
        }

        .w3-third img:hover {
            opacity: 1
        }
       
    </style>

</head>

<body>

 
    <x-header/>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade my-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1500">
                <img src="imgs/s1.jpg" class="d-block w-100" alt="img">
                
            </div>
            <div class="carousel-item" data-bs-interval="1500">
                <img src="imgs/s2.jpg" class="d-block w-100" alt="img">
            </div>
            <div class="carousel-item" data-bs-interval="1500">
                <img src="imgs/s3.jpg" class="d-block w-100" alt="img">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="px-4 pt-5 my-4 text-center border-bottom">
        <h1 class="display-6 fw-bold">Explore the world of Captcha Photography</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 ">Photography is the art, application, and practice of creating durable images by
                recording light, either electronically by means of an image sensor, or chemically by means of a
                light-sensitive material such as photographic film.</p>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-1  w3-third">
                    <a href="{{route('portfolio')}}"><img src="imgs/portrait.jpg"></a>
                </div>
                <div class="col-lg-4 my-1  w3-third">
                    <a href="{{route('portfolio')}}"><img src="imgs/travel.jpg"></a>
                </div>
                   <div class="col-lg-4 my-1  w3-third">
                    <a href="{{route('portfolio')}}"><img src="imgs/nature.jpg"></a>
                </div>

            </div>

        </div>
        <div class="container my-4">
            <a href="{{route('portfolio')}}"><button type="button" class="btn btn-outline-primary btn-lg">Learn More</button></a>
        </div>
        <hr>
    </div>
    
    <x-footer/>


    
<!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>