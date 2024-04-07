<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        body {
            background-color: #04364A;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #DAFFFB;
            font-size: 17px;
            color: #black;
            border: none;
        }

        .navbar-brand {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 50px;
            font-weight: bold;
        }

        .dropdown-menu li a {
            color: #333;
        }

        .jumbotron {
            background-image: url('images/img3.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 3.5em;
            color: wheat;
            font-family: Georgia, 'Times New Roman', Times;
            margin-top: 150px;
            backdrop-filter: blur(10px);
            background-size: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .carousel-inner img {
            width: 100%;
            height: 250px;
        }

        .col-md-4 img {
            background-color: black;
            width: 100%;
            height: 300px;
            border-radius: 10px;
        }

        .col-md-7 {
            border-radius: 15px;
            height: 320px;
            background-color: #64CCC5;
            padding: 20px;
        }

        .col-md-5 {
            border-radius: 15px;

            background-color: teal;
            padding: 0;
        }

        .col-md-5 p {
            color: #fff;
        }

        .marquee {
            border-radius: 15px;
            background-color: #DAFFFB;
            height: 280px;
            padding: 20px;
        }

        .marquee p {
            margin: 10px 0;
        }

        .h3 {


            background-size: 50px;
            border-radius: 5px;
            color: #333333;

        }


        .about-us {
            background-color: #64CCC5;
            padding: 20px;
        }

        .about-us h3 {
            color: #000;
            font-weight: 700;
        }

        .about-us p {
            font-size: large;
            color: #000;
            font-family: sans-serif;
            margin: ;
        }

        .credits {
            text-align: center;
            background-color: #f0f0f0;


            padding: 20px;
            color: #333;
        }

        .button1 {
            background-color: rgb(100, 204, 197);
            color: rgb(4, 54, 74);
            border: none;
            border-radius: 5px;
            padding: 15px 20px;
            cursor: pointer;

            margin: 3px
        }

        .button1:hover {
            background-color: rgb(4, 54, 74);
            color: black;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Website</title>
</head>

<body>
    <div class="jumbotron">
        <h1>Sahā Nirvana</h1>

    </div>

    <div class="container" style="background-color: #176B87">
        <div class="navbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color : #333333">AREA
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Pune</a></li>
                        <li><a href="#">Mumbai</a></li>
                        <li><a href="#">Delhi</a></li>
                    </ul>
                </li>
                <li><a href="#" style="color : #333333">Facilities</a></li>
                <li><a href="#" style="color : #333333">About us</a></li>
                <li style="margin-left: 645px; border-radius: 15px;"><a href="login.php" class="button1">Login</a>
                </li>
                <li style="margin-left: 10px; border-radius: 15px;"><a href="signup.php" class="button1">Signup</a>
                </li>

            </ul>
        </div>

        <div class="row">
            <div class="col-md-7">
                <h2>Information</h2>
                <p>The Sahā Nirvana Tourism Website is a project that aims to provide a comprehensive platform for
                    travelers to explore tourist destinations. It offers a visually appealing and user-friendly
                    interface, coupled with a robust architecture that ensures efficient data management. The project
                    allowed us to apply various web technologies and frameworks, enhancing our skills in web
                    development. We learned the importance of responsive design and tackling challenges in the
                    development process.</p>
            </div>
            <div class="col-md-5" style="border-radius : 10px">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/img1.jpg" alt="Los Angeles" style="border-radius : 10px">
                            <div class="carousel-caption">
                                <p style="backdrop-filter: blur(10px);">Summer forest</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/img2.jpg" alt="Chicago" style="border-radius : 10px">
                            <div class="carousel-caption">
                                <p style="backdrop-filter: blur(10px);">Rain Forest</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/img3.jpg" alt="New York" style="border-radius : 10px">
                            <div class="carousel-caption">
                                <p style="backdrop-filter: blur(10px);">Sunset</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br>

        <div class="row" style="background-color : #64CCC5; border-radius: 10px;margin: px;">
            <div class="col-md-4">
                <h3 class="h3">Tourist Activities</h3>
                <img src="images/down_img.jpg" style="height: 300px; width: 100%; border-radius: 10px;"
                    alt="Tourist Activities">
            </div>
            <div class="col-md-4">
                <h3 class="h3">More Information</h3>
                <p>Tourism is a social, cultural and economic phenomenon which entails the movement of people to
                    countries or places outside their usual environment for personal or business/professional purposes.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="h3">Headlines about Tourism</h3>
                <div class="marquee">
                    <marquee behavior="scroll" direction="up" scrollamount="2">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus possimus ea perferendis
                            quisquam ex obcaecati temporibus libero necessitatibus voluptatibus sapiente distinctio,
                            officia, architecto rem odio soluta ipsum optio molestias cum?</p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus possimus ea perferendis
                        quisquam ex obcaecati temporibus libero necessitatibus voluptatibus sapiente distinctio,
                        officia, architecto rem odio soluta ipsum optio molestias cum?


                    </marquee>

                </div>
            </div>
        </div>
        <br>

        <div class="row" style="background-color : #64CCC5; border-radius: 10px;margin: px;">
            
            <div class="col-md-12" style = "padding : 20px">
            <h3 class="h3">Upload Images</h3>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                  <input type="file" class="form-control" id="inputGroupFile02" name="files"></input>
                </div>
                <div class="col-md-6">
                  <button type="submit" name="submit">Upload</button>
                  <button type="submit" name="exit">Cancel</button>
                </div>
              </form>
              
            </div>

            </div>

        </div>


        <br>

        <div class="row" style="margin : 10px">
            <div class="col-md-4">
                <img src="images/slide_2.jpg" height="250px" width="400" alt="About Us">
            </div>
            <div class="col-md-7 about-us">
                <h3>About Us</h3>
                <p>The Sahā Nirvana Tourism Website is a web application designed to promote and provide information
                    about various tourist destinations and activities. The project aims to offer an engaging and
                    informative platform for travelers to explore different areas, discover tourist activities, and
                    access essential information. Our choice of web technology for this application was driven by the
                    need to reach a broad audience, provide rich content, and ensure accessibility from various devices
                    and platforms.
                </p>
            </div>

        </div>



    </div>
    <div class="credits" style="margin : 0px 49.9px ; border-radius: 5px; ">
        <b>This Website is created by Jonel Mathew</b>
        <marquee behavior="scroll" direction="right">
            <b>....THANK YOU FOR VISITING....</b>
        </marquee>
    </div>
</body>

</html>