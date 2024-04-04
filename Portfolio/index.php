<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
  </head>
  <body>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    


    <style>
        body{
            background-color:rgb(14, 61, 61);;
            height: 100%;
        }
        .col1{
            width: 700px;
            height: 80vh;
            
            
        }

        /* nav{
            justify-content: space-around;
            align-items: center;
            display: flex;
        } */

        .nav-link:hover{

            color: white;
            font-size: 1.4rem;
        }


        .col2{
            
            width: 600px;
            
        }
        .img{
            border-radius: 20%;
            height: 50vh;
            margin-top: 23vh;
            
        }

        .intro-section{

            color: rgb(234, 190, 109);
            font-size: 20px;
            margin-top: 40%;
            margin-left: 20%;
            
            
            
        }
        .btn:hover{
            font-size: 1.2rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.5s;

        }

        .social-icons{
            margin-top: 20px;
        }
        
        .social-icons ul li{
        display:inline;
        margin: 0 10px;
        list-style: none;
        
        
        }

        .social-icons li a:hover{
            text-decoration: none;
            color: yellow;
            font-size: 1.3rem;
            
            
        }
        
        .social-icons a {
        color: #fff;
        /* margin: 20px 10px; */
        font-size: 20px;
        text-decoration: none;
        }

    
        .about-section{
            display: inline;
            padding: 15px 30px;
            
            
        }
  
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 20%;
            margin: auto;
            border: 2px solid white;
            width: 100px; 
            height: 100px;
        }

        
       
    </style>
</head>
<body>

    

        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(10, 44, 44);">
            
            <div class="collapse navbar-collapse justify-content-evenly " id="navbarNavAltMarkup">
                <a class="nav-link active fs-5 fw-bold m-3" style="color: white;" href="#">Suhrath's Portfolio</a>
                <div class="navbar-nav">  
                  <a class="nav-link active fs-5 fw-bold m-3" aria-current="page" href="index.php">Home</a>
                  <a class="nav-link active fs-5 fw-bold m-3" href="#">Skills</a>
                  <a class="nav-link active fs-5 fw-bold m-3" href="#">Experience</a>
                  
                </div>
              </div>
        </nav>
    
        <div class="row m-3 p-3">
    <div class="col1 text-align">
    
    <!-- <header class=" header-section mt-5"> -->
        <div class="intro-section">
        <p class="fw-bold fs-4">Hello Welcome! <br>
        <h3 class="fw-light">This is me, Suhrath. </h3>

        <div class="button mt-3">
        <a href="resume/CV (2).pdf" class="btn bg-warning"> See My Resume </a>
        <a href="contact.php" class="btn bg-warning"> Contact </a>
        </div>

        

        
    </div>
    <!-- </header> -->

    
    </div>

    <div class="col2 text-center mt-5">
        <img class="img"src="images/pic.png" alt="">

        <div class="social-icons">
            <ul>
            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab  fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
    </div>

    
    <div class="about-section">
        <h1 class="text-center text-warning mt-5">About Me</h1>
        <h4 class="text-center mt-3">Let me introduce myself</h4>

        <p class="about m-2 p-3 fs-5 text-light text-center">My name is Suhrath Tahra, I'm a web developer from Sylhet, Bangladesh.

            I am a graduate Computer Science Student and a passionate programmer who loves designing and developing websites. I specialize in front-end development but at times I can get my hands dirty with some backend stuff.
            
            I am currently available for freelance or any web design work. So if you have a project or creative need that I can help with than get in touch.</p>
            
            <p class="text-center fs-5 text-light m-2 p-3">I love to face new challenges and solve various coding issues myself.

            I am keen to learn new technologies and can quickly adapt myself into a new environment.
        
            Below you can see some of the technologies I’ve had experience in.</p>

    </div>

    <div class="skills-section d-flex justify-content-evenly mt-5">
        <div class="card ">
            <img src="images/html-5.png" class="m-2">
            <p class="mt-3 fs-6 text-center fw-bold text-warning"> Html 5</p>
        </div>

        <div class="card ">
            <img src="images/css-file.png" class="m-2">
            <p class="mt-3 fs-6 text-center fw-bold text-warning"> CSS</p>
        </div>

        <div class="card ">
            <img src="images/bootstrap (1).png" class="m-2">
            <p class="mt-3 fs-6 text-center fw-bold text-warning"> Bootstrap </p>
        </div>

        <div class="card ">
            <img src="images/php-code.png" class="m-2">
            <p class="mt-3 fs-6 text-center fw-bold text-warning"> php</p>
        </div>
    </div>

    </div>


    

</body>
</html>