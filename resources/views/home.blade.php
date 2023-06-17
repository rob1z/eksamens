<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    <div class="imgbackground"> 
    <style>
        body {
            background-image: linear-gradient(to bottom, black , rgba(35, 7, 172, 0.8), black);

}
        .main{
            text-align: center;
            margin:50px;
            display: flex;
            padding:20px;
            padding-bottom:85px;
            padding-left:40px;
        }
        .imgshadow {

            transition: 0.3s;
            border-radius:50x;
            margin:50px;
        }
        

        .imgsize{
            overflow: hidden;
            background-image:fill;
        }
        .img2 {
  border-radius: 30%;
  height:200px;
  width:100%;

}
.img2:hover {
  opacity: 0.6;

}

img{    height: 200px;
    width: 200px;}

    .texttop{
        text-align:center;
        color:white;
        padding:15px;
        margin:150px
    }
    h1{
        color:white;
    }

    p{
        color:white;
        padding:30px;
        padding-left:20px;
    }

   .solid {
    border-style: solid;
    width:100%;
    color:rgb(7, 7, 90);
}
.topt{
    padding:40px;

   display:flex;
}

.bott{
    display:flex;
    padding:50px;
}
    </style>
</head>
<body>
<div class="texttop">
    <b><h1> Gaming Community</h1></b>
    <b><p> Game Updates and E-sport.</p></b>
</div>
    <div class="container">
        <div class="main">
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg">CS</button> --}}
                <div class="imgshadow">
                    <h1>CSGO</h1>
                <a href="csgo">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG8hqYGB_OhqinBCokeqRLTYY51fKmzxGEig&usqp=CAU" alt="Avatar" class="imgsize, img2">
                </a>
            </div>
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg">VALO</button> --}}
                <div class="imgshadow">
                    <h1>VALORANT</h1>
                <a href="valorant">

                    <img src="data:image/jpeg;base64,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" alt="Avatar" class="imgsize, img2">
                    
                </a>
            </div>
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg">RL</button> --}}
                <div class="imgshadow">
                    <h1>Rocket-League</h1>
                <a href="rocketleague">
                    <img src="https://cdn.sanity.io/images/ccckgjf9/production/2b8746df61614b89b4e5053b17bb001f48101744-1250x703.jpg?rect=98,0,1055,703&w=600&h=400&auto=format" alt="Avatar" class="imgsize, img2">
                </a>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="solid">
    <div class="topt">

    <h1>What do we offer?</h1>
    <p> Latest information and e-sport news about your favorite games from dependable sources. </p>


    <img src="data:image/png;base64,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">
    </div>
</div>
</div>
<div class="container">
    <div class="solid">
    <div class="bott">
     <h1>How does it work?</h1>

        <p> We post the latest patches and information about the game. <br>
     Our job is to notify and educate you about the game and make you the smartest person in your lobby. </p>
     

    <img src="data:image/png;base64,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">
    </div>
</div>
</div>
</body>
</html>