<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imgs/Tlogo.png">
    <link rel = "stylesheet" type ="text/css" href="css/file.css">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .imgg {
            width: 100%;
            max-height: 500px;
            min-height: 450px;
        }

        .w3-third img {
            margin-bottom: -6px;
            opacity: 0.8;
            cursor: pointer
        }

        .w3-third img:hover {
            opacity: 1
        }
        .left
        {
           
          text-align: center;

        }
    </style>

</head>

<body>


    
    <x-header/>
    <div class="container">
        <div class="row">
            <h1 class="w3-center w3-animate-fading" style="text-align: center;">
                <i> Potrait Photography</i>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 my-2 w3-third">
                <img src="imgs/portrait/p1.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/portrait/p2.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/portrait/p3.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>

        </div>



        <div class="row">
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/portrait/p4.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/portrait/p5.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/portrait/p6.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <h1 class="w3-center w3-animate-fading" style="text-align: center;">
                <i>Travel Photography</i>
            </h1>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/travel/t1.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/travel/t2.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/travel/t3.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>

        </div>



        <div class="row">
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/travel/t4.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/travel/t5.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/travel/t6.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <h1 class="w3-center w3-animate-fading" style="text-align: center;">
                <i> Nature Photography</i>
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/nature/n1.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/nature/n2.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/nature/n3.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>

        </div>



        <div class="row">
            <div class="col-lg-4 my-2  w3-third ">
                <img src="imgs/nature/n4.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/nature/n5.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
            <div class="col-lg-4 my-2  w3-third">
                <img src="imgs/nature/n6.jpg" class="imgg w3-animate-zoom" onclick="onClick(this)">
            </div>
        </div>
        
    </div>
    <div class="container left col-2 my-4">
        <a href="{{route('contact')}}"><button type="button" class="btn btn-outline-primary btn-lg left ">
          Contact </button></a>
    </div>

 


    <div id="modal01" class="w3-modal" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">x</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>
        </div>
    </div>
    <x-footer/>
   
    
   
    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }

</script>





<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>