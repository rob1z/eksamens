

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<style>
*, *::before, *::after {
    box-sizing:border-box;
}
.text {
    color:white;
    text-align:left;
    flex: 1;
  }
  #div1{
    width:45%;
    float:left;
  }
  #div2{
    width:45%;
    float:right;
  }
body{   
   background-image: url('https://steamcdn-a.akamaihd.net/apps/csgo/blog/images/wallpaper_nologo.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-position: center;
  margin: 0;
  padding: 0;
}
.carousel{
    width:1000px;
    height:600px;
    position: relative; 
    margin: auto;
    background: rgba(0, 0, 0, 0.5);
}

.carousel > ul{
  margin:0;
  padding:0;
  list-style: none; 

}

.slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: 200ms opacity ease-in-out;
    transition-delay: 200ms;
}
.slide > img {
    display:block;
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:center;
}
.carousel-button {
    position:absolute;
    z-index: 2;
    background:none;
    border:none;
    font-size:4rem;
    top:50%;
    transform:translateY(-50%);
    color: rgba(255,255,255,.5);
    cursor: pointer;
    border-radius:.25rem;
    padding: 0 .5rem;
    background-color:rgba(0, 0, 0, .1)
}
.carousel-button:hover,
.carousel-button:focus{
  color:white;
  background-color:rgba(0, 0, 0, .2)
}

.carousel-button:focus{
  outline: 1px solid black;
}
.slide[data-active] {
    opacity: 1;
    transition-delay:0;
}
.carousel-button.prev{
  left:1rem;
}
.carousel-button.next{
  right:1rem;
}
.carousel-content {
  position:absolute;
  background: rgba(0, 0, 0, 0.2);
  text-align:center;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
  width:100%;
}
    .text {
        color:white;
        text-align:center;
    }

    .title{
        margin-bottom:15px;
    }
    .container{
        background: rgba(0, 0, 0, 0.5);
        padding:100px;
        margin-top:75px;
        margin-bottom:75px;
        display:flex;
        justify-content:center;
    }
    .button{
        text-align:center;
    }

</style>
@include('layouts.header')
<body>



  <div class="container">
    <div id="div1">
    <div class="text">
      <div class="title">
      <h2>Information about CS:GO</h2>
      </div>
      <p>Counter-Strike: Global Offensive (CS:GO) is a 2012 multiplayer tactical first-person shooter developed by Valve and Hidden Path Entertainment.</p>
        <p> It is the fourth game in the Counter-Strike series. Developed for over two years,</p>
         <p> Global Offensive was released for OS X, PlayStation 3, Windows, and Xbox 360 in August 2012, and for Linux in 2014.</p>
         <p>  Valve still regularly updates the game, both with smaller balancing patches and larger content additions.</p>
       <p> The game pits two teams, Terrorists and Counter-Terrorists, against each other in different objective-based game modes.</p>

      </div> 
</div>
    
      <div id="div2">
<div class="video">
      <h1 style="text-align:center ;  color:white">What is CS:GO? [Animated]</h1>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/RIZWzT_RL6Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  </div>
</div>





<h1 style="color:white; text-align:center; font-size:60px; padding-bottom:20px">Active Duty Maps:</h1>
<section aria-label="Newest Maps">
  <div class="carousel" data-carousel>
    <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
    <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
  <ul data-slides>
    <li class="slide" data-active>
      <div class="carousel-content">
      <h1>Anubis</h1>
      </div>
      <img src="https://cdn.akamai.steamstatic.com/apps/csgo/images/blog/anubis_map.jpg" alt="Map Image #1">
    </li>
    <li class="slide">
      <div class="carousel-content">
        <h1>Ancient</h1>
      </div>
    <img src="https://cdn1.dotesports.com/wp-content/uploads/2021/05/03174829/ancient.jpg" alt="Map Image #2">
  </li>
  <li class="slide">
    <div class="carousel-content">
      <h1>Inferno</h1>
    </div>
  <img src="https://cdn.akamai.steamstatic.com/apps/csgo/images/inferno/beautyshot.jpg" alt="Map Image #3">
</li>
<li class="slide">
  <div class="carousel-content">
    <h1>Mirage</h1>
  </div>
<img src="https://cdn1.dotesports.com/wp-content/uploads/2018/08/11092438/518dab97-9d71-4a88-aef1-75cc4d60ec76.jpg" alt="Map Image #4">
</li>
    <li class="slide">
        <div class="carousel-content">
        <h1>Nuke</h1>
        </div>
      <img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2018/02/12/874f5eb9-cb62-431e-aca7-49c5b430d8b6/csgo-nuke-rework" alt="Map Image #5">
    </li>
    <li class="slide">
      <div class="carousel-content">
        <h1>Overpass</h1>
        </div>
      <img src="https://cdn.mos.cms.futurecdn.net/89b974cb4ebabbf368ecc0574308e20f.jpg" alt="Map Image #6">
    </li>
    <li class="slide">
      <div class="carousel-content">
        <h1>Vertigo</h1>
        </div>
      <img src="https://pbs.twimg.com/media/D3J8GQ3XQAE0eyA.jpg" alt="Map Image #7">
    </li>
  </ul>
</div>
</section>

</body>
@include("layouts.footer")
</html>

<script>
  const buttons = document.querySelectorAll("[data-carousel-button]")

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const offset = button.dataset.carouselButton === "next" ? 1 : -1
      const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]")

      const activeSlide = slides.querySelector("[data-active]")
      let newIndex = [...slides.children].indexOf(activeSlide) + offset
      if (newIndex < 0) newIndex = slides.children.length -1
      if (newIndex >= slides.children.length) newIndex = 0

      slides.children[newIndex].dataset.active = true
      delete activeSlide.dataset.active
    })
  })

  </script>