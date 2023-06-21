
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Document</title>
</head>
<style>
  
  .text {
    color:white;
    text-align:left;
    flex: 1;
  }

  .title{
    margin-bottom:25px;
  }
  #div1{
    width:45%;
    float:left;
  }

  #div2{
    width:45%;
    float:right;
  }
  .container{
    background-color:black;
    background: rgba(0, 0, 0, 0.5);
    padding-top:35px;
    padding-bottom:35px;
    margin-top:75px;
    display:flex;
  }
.video{
  flex: 1;
}
  btn-primay{
    color:grey;
    
  }
  :root {
    --white: #fff;
  }
  body {
    font: 16px / 24px "Rubik", sans-serif;
    color: var(--black);
    background: url("data:image/jpeg;base64,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");
    max-width:100%;
  }
  
  .cards {
    display: flex;
    padding: 25px 0px;
    list-style: none;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
    max-width:100%;
  }
  
  .card {
    display: flex;
    flex-direction: column;
    flex: 0 0 100%;
    padding: 20px;
    background: var(--white);
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 15%);
    scroll-snap-align: start;
    transition: all 0.2s;
    max-width:100%;
  }
  
  .btn-primary{
    background-color:grey;
    color:grey;
    border-color:grey;
  }
  .card:hover {
    color: var(--white);
    background: var(--grey);
  }
  
  .card .card-title {
    font-size: 20px;
    text-align:center;
  }
  
  .card .card-content {
    margin: 20px 0;
    max-width: 100%;
    text-align:center;
  }
  
  
  .card .card-link-wrapper {
    margin-top: auto;
  }
  
  .card .card-link {
    display: inline-block;
    text-decoration: none;
    color: white;
    background: var(--red);
    padding: 6px 12px;
    border-radius: 8px;
    transition: background 0.2s;
  }
  
  .card:hover .card-link {
    background: var(--darkred);
  }
  
  .cards::-webkit-scrollbar {
    height: 12px;
    
  }
  
  .cards::-webkit-scrollbar-thumb,
  .cards::-webkit-scrollbar-track {
    border-radius: 50px;
    
  }
  
  .cards::-webkit-scrollbar-thumb {
    background: var(--darkred);
    
  }
  
  .cards::-webkit-scrollbar-track {
    background: var(--thumb);
    
  }

  .modal-body{
    color:Black;
  }
  .modal-header{
    color:black;
  }
  
  button{
    margin-top:75px;
  }
  
  
  @media (min-width: 700px) {
    .card {
      flex-basis: calc(calc(100% / 3) - 20px);
      
    }
    .card:not(:last-child) {
      margin-right: 30px;
      
    }
  }
  
  
  @media (min-width: 1100px) {
    .card {
      flex-basis: calc(25% - 30px);
      
    }
    
    .card:not(:last-child) {
      margin-right: 40px;
      
    }
  }
  
  
  h2{
    
    margin-top:20px;
    height:100px;
    color:white;
    border:1px solid black;
    background-color:rgb(255, 47, 71);
    text-align:center;
    padding:25px;
   
   
  }
  
  img{
    padding-left:54px;
    width:350px;
    height:150px;
  }

#img1{
  padding-left:0px;
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

.carousel > img{
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
  background-color:rgb(255, 47, 71, .2);
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
  background-color:rgb(255, 47, 71, .7);
  text-align:center;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
  width:100%;
}

#scrollButton {
        display: none;
        position: fixed; 
        bottom: 20px; 
        right: 20px; 
        z-index: 99; 
        font-size: 16px;
        padding: 10px;
        border: none;
        outline: none;
        background-color: #555;
        color: #fff;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.3s;
      }

      #scrollButton:hover {
        opacity: 1;
      }
</style>
@include('layouts.header')
<body>
<h2>VALORANT</h2>
  <div class="container">
    <div id="div1">
    <div class="text">
      <div class="title">
        <h1>Information about VALORANT</h1>
      </div>
      <p>Valorant is a free-to-play first-person hero shooter developed and published by Riot Games, for Microsoft Windows.</p>
      <p> Teased under the codename Project A in October 2019,</p>
      <p> the game began a closed beta period with limited access on April 7, 2020, followed by a release on June 2, 2020.</p>
      <p>  The development of the game started in 2014. Valorant takes inspiration from the Counter-Strike series of tactical shooters, </p>
      <p>  borrowing several mechanics such as the buy menu, spray patterns, and inaccuracy while moving.</p>
      </div> 
</div>
    
      <div id="div2">
<div class="video">
      <h1 style="color:white; text-align:center" > What is VALORANT? </h1>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/IEN1sWst-RU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  </div>
</div>
 
  

  <h2>All Valorant agents</h2>
  <ul class="cards">
    <li class="card">
      <div>
        <h3 class="card-title">Astra</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p> Ghanaian Agent Astra harnesses the energies of the cosmos to reshape battlefields to her whim.</p>
        </div>
      </div>
      <!--modal-->
    </div>
  </div>
    <div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#astra" style="margin-top:75px;">Learn More</button>
        <div class="modal fade" id="astra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Controller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="1">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Breach</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Breach, the bionic Swede, fires powerful,  targeted kinetic blasts to aggressively clear a path through enemy ground.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Breach">Learn More</button>
        <div class="modal fade" id="Breach" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Initiator</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="2">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Brimstone</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Brimstone is a VALORANT agent, specializing in supporting allies and damaging enemies all over the map.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Brim">Learn More</button>
        <div class="modal fade" id="Brim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Controller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="3">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Chamber</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Well dressed and well armed, French weapons designer Chamber expels aggressors with deadly precision.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Chamb">Learn More</button>
        <div class="modal fade" id="Chamb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sentinel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="4">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Cypher</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemy's every move.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Cypher">Learn More</button>
        <div class="modal fade" id="Cypher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sentinel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="5">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Fade</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          
          <p>Fade is no stranger to sacrifice. She deals with peoples' darkest fears and most upsetting thoughts to wield her nightmarish powers while sacrificing her own sanity and comfort.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Fade">Learn More</button>
        <div class="modal fade" id="Fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Initiator</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="6">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Harbor</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Hailing from India’s coast, Harbor storms the field wielding ancient technology with dominion over water.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Harbor">Learn More</button>
        <div class="modal fade" id="Harbor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Controller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="7">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Jett</h3>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0SBIJeRJ9HXCzls0tfb4vyY2fnavTzXDvFQ&usqp=CAU">
        <div class="card-content">
          <p>Representing her home country of South Korea, Jett's agile and evasive fighting style lets her take risks no one else can.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jett">Learn More</button>
        <div class="modal fade" id="jett" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Dualist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="8">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Kay/O</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p> KAY/O is a machine of war built for a single purpose: neutralizing radiants.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kayo">Learn More</button>
        <div class="modal fade" id="kayo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Initiator</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="9">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Killjoy</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>The genius of Germany. Killjoy secures the battlefield with ease using her arsenal of inventions.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#killjoy">Learn More</button>
        <div class="modal fade" id="killjoy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sentinel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="10">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Neon</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Filipino Agent Neon surges forward at shocking speeds, discharging bursts of bioelectric radiance as fast as her body generates it. </p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#neon">Learn More</button>
        <div class="modal fade" id="neon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Dualist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="11">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Omen</h3>
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFRYYGRgaHBwaGhgaHRocGh4kGiQdHxoeGRocIS4lHh4rIRwaJzgmKzAxNTU1HCQ7QDs0Py40NTEBDAwMEA8QHxISHjQrJCs9NDQ2NjQ0NDQ0NDQ0NDQ2NDQ0NDQ0NDQ0NjQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAKgBLAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAABAIDBQEGB//EAD8QAAIBAgQDBQYEBQMDBQEAAAECEQADBBIhMUFRYQUicYGRBhMyobHwQmLB0RQjUuHxcoKSBzOiFWNzstIW/8QAGgEAAwEBAQEAAAAAAAAAAAAAAAECAwQFBv/EACcRAAICAgICAAUFAAAAAAAAAAABAhEhMQNBEmEEMlFxgRMUM7Hw/9oADAMBAAIRAxEAPwD5XRRRWpmFFFFABRRRQAUUUUAW4f4qbpBWgzTiOD+1NCYXLeauW7eWrKKYgpd/jFWu4G9LI0sD1pMaOXviNctnvDxqzEjXyqkGkM0K4TRNel7F7HCC3exCEi6T7hCNGAibjg/gGYZR+I6/CIakm3SEkeSwvHy/Wma9f2r7OK5a4hyOdTJ7hjTbh5eleQuIVJVtCDBHhVz45Q2SnYteWWAqdlvwncVBz3xVzqD486zKOus6Goe4XlUwa7NMQuFAcAfe9M0ux7w8P3q+aSAWxHxeX71faaQKoxG/l+9SwzaRR2PoYpa9GbXlTE0riPi8qGCIkjl9ajI5VyikM6Y61yiigAooooAKKKKACipvaYbgjrw9ahQAUUUUAFFFFABRRRQAValgnpUbKywp2mkJsX/h+tH8P1piiihWKPYI21qtFkxT9LFYcUUOyL2YEzXLdvNxpthIil8PoxH3pRQWbfsV2KMRjsPadcyFs7iJGVAWIb8pgL/ur3/tj2kt3GWwsZbTe7Ebd0jPHgSR/trE9k8QnZ9i9jLpUXrlvJh7e7gNqXYcAxCEDchZ2M1nez3att1cXN0ZWUHchmyuzNzUlWgcAa1+HSc8/ZC5Z+ELPSYhGKhRz+nOvGe1fZkPnGmgzmNCNlfpwB8q9b2l2gtg35M5Lotoq6s3dl2JOgA7vrXku0e3LruqqqrOiqWVt9NTtHhy30rflnGqZnCaemeeS3qJmPuKl/Dda0O1sKiOiI+d8s3I2DccpG438IqidI4b1x006ZrYt/DdaP4brTNFFCsT913ss1P+G610/GPvgaYoodij2YEzUESTFOOJBFK4f4qQE/4brVTpBinqUxHxeVNoEyqiiikMKKKKACiiigAooooAvs3X2WT+Xf5caYa2j6E5H2IIIE9R9npSLrBINW28SyxBGmgJAJHgd46bdKdjTIXbZUwwg/eo5ioVpreW8pRhD72yNi2pK9A0bc4rLFJgztFFFAgoorpGk+P6UAWYf4vKtJMG5UPEKdm3HERpsdDoazcP8XlXoew8eqzauRkc6E7BjoPAHTXgYq4eN50SzFxoy6A1DDNvW3217PXQZtjOszoRmHiDE+XpWLaRlJDKVOmjAg+hokqk8D6LqXf4x986YqzAdmXsRcC2LT3Dscikgb/E3wr5kVLBIrqWFwN27cVbNtrjn8CKWMcyBsNdSdK+n+zX/Ta2EZu0NHmVtpdAhYHxwB3pnZiNa72h2Fhrauow6JEBAtx2vof63uDNr+XNl5g0k/J0i1Dt6PmuIwea5kuuM5iHDh1UnZTlJXfQgbGsx7ToxAg7gFDmU8wCOmnWvYJ/AWDJh35KfeGR6qp9KknbzOwXD4cLP4ng/IaD1rocE+8+jOzzowWIxLk5LhzaliMoJO+rQOHCtjs72OJYZ3RWnZDmYTzmFXzBrdTA3nIF68BOyA5Z47aE6dPOqcT7RYbCjJaBvPt3NRPIvsB0UHrTkoxzLLBKlUcE7n/T5E773nWNSzFI9YgV5/tvspLcNZuC4kd5w6NBmAAF1jrtrXbXbD32l2Y3NQZQFLY2As2ySOJ7zbabmCun/wCiuO/mdwV1V7wkTIZTbRCmoJ3YiudzWkilFvs8heaBpS3vW50zilgEcjHoehNLsoCjmST5DQepzf8AEUMSO2mJYT96U3SVkwwmmwwOxoQMlStsQ8eNNVQw746ihiRfSmI+LypulMR8XlQxoqooopDCiiigAooooAKKKlloA08RcXuBhIbSeW0a+dI4nDFPCYH1+/CrMLczqEMSuqHquw++FN494TxjQ1W8ltJoylYgggwRqDyjY1djEhpiM4W4B/rAbToCSPKqK0e0GV7Vl13VfdsSI1UKRHMCTrUkmdRRRQIKtUSh6Gaqq3DtBjnQAYf4vKrcSJQ1DLlaeB+VMMJEU0I3/Zbt4vFm6e9Hcc/ij8LfmjY8Y57+nuW1YQyhhyIBHoa+UFCDx0Oh21HI1t9me01213XJuLwDHvDwfU+s+VbR5aVSGezsdlYZXV2sI4G6EsEPiqkD9OYNe0s+1MZEtWrdlBpzCgcFAAA5bV4Lsrt2zfIVSVc7I8KT0UzDHpM9K1XQ6jYjfp41TjCWRp1g2u0u3GckZmYctQvmvGvNdp2ldSrAOG1IZmCTzgak+A86Xv8AalhQxa7IGhIJIn+kQYLdBJ4xXl+0PaZ3JWwuQf1bufP8Hlr1qbjFUgfs0b+Ew2H1uEZv6EBzf8ZkDqxUUpe9oLkRh0W0m2YAM/8AyIhfIedebOhOaSZPUzx860cFg2dWKvbWIhWzF2J4IFUyZ0rPzlJ0iXSVsa7Pw1++4QOSG3LszLBkGROpMHTjXvW9msLh8M11Fb+IRSWcqTodMyBRlWJgE697UnSvH9l9vLaQoiEXZCgkEgbmFUas2ZtvDwqr3mLxQZ87ZEmQzqh8lYj0UGs2/YK+i3su4A75BbnOVDOim4JEnVxA3ILGTppG9bKXGSZIJP5g3oQTXmewENu/3xJmQTuGOoPpxr6Jdxtl9Ul+cd0a7gMBr5COtCeBpez5t2hYyuytzn11pdrasAYgAKIkcuXUyek16D2kyoZyAl51aDAIYQIUMCNCDPDWZrBU6VdYsm2KFO9lH3pUWQjerR8f3ypgilQ7E0ukcfWrVuAkcDr9KrupBMeNV0hmhSmI+Lyrtq9Gh2rmI38qYiqiiikMK6rQQRuNR5VygCdBqToBQBNtZYAASJA21nYctDUK2Gs2bKlHOd2gPl2TYwOZ5+FZd+3lYj08OFNobQWLeZgKuxdiGjoKjgEzOOmY+gJpjEPr4aVUVaBCGFeGBPA/LjTPajnOOUfX/HypAGnnui4U01g5o6a6eU1lF4oplFpC5CqJJ2ArS7dthDbtDZEknmzmWPyFZ6O6AANl3PdPUg95d9Qa5dus7FnJZjuTvVJ4JwQooooEFFFFADdt8wg+dTURS2H+LypumiWL4nYUYYaHyoxOwow3Hyo7H0T7R7Ne3bS62XK5IAGvCQTGmuvpRe7WuXdbzs4EBbUlU02LAQIHqeJHHNIMkdduEjjFW2rcmB61DlbwUWlnuHU6DQcFUclUaAdBV1tcrZRtFWogAgVDFgIqt+JtugG+noPWr0hbIgyjydRcBjjBBGh8vlWjavKmqCWEqI1PlwEiNeu+tSwPZDPZa/BAd1S2DoGyibj6jZZUA/mblTWOtknuADIoQ5YDNl4lt9oHl1NSvRE8YY12BbDXAzozESmVRJLOIcg8WAyqI17u1d7a9p7Jb3C4K2EURmdEFxzrLsSuYLOwHDjSvZV0rtjBhjopDLnHemMqsY3mSIjXpKmLd3OS+w7hJDjVGjiCvHTTx31ml2XF0izDYRnyBFA96wC8IAIGfkonSOOorX7CutL2lY5RLFgcqkaQ0iNCI3NeexNuUULJVRoD4ztz1b1r1vsR2ccmeDLE5QApJjdiW21Gkcq0aSQvF2Z3tHh8tvbWQ36ceGvyrzN7C90OOWo/UeVey9pbyjOhU5hmzFjOgScuhOuYxINeUxLlbYHEiPXf5UL5SktiFj4h5/SmqowVks2n4RJPoPqRWujrag5Qz/m26gDhyn6UJCqzKJ7/AIiq71uNRtWr7Q4VUdLiCFcTA2kQdOUg7dDSbLIik0DwI0V1hBiuUgCiiigCzDWs7qkgZiFBO0nQT5xW3dwaYVQ7EXLp+ARCgj8UbmP223pP2dj36kjYMfDTSOv71L2kZjfObgAB4an9Z86pasa1ZlsxJJJkkyTzJ3NNWbXvFiRnXYH+n9YpSm+ykJuLHCWPkP7gedSCHMBhSmZmiSCojxUt8v1qjFJ3q0GBGh9PH7FUvcQGCRPlWipF0efqS/5ph8P/ANtR8bjM3QMe4D/tAbwYVddwuVFbiN/P/NYKIrtWhZFkgSBJAk7CeJjhUZrtRG9UQSooiuoRrInQjciDwOnLlTA5RRV2GtKxl2yoNzEnwUcTQBC08GacBow+Gt3GyIXUmchcghiNYIVRl0G8mqntMjFT3WG6t+4pg0TdAd6EQDaug1FgeB8jQSV3bWZhGkbn741zKA4A4V338bj0NUq/ek0sDPQezuA99iFUgFFDXLkmFCWwWbOYMKSApP5qX7PR8TiraoiOzse6yrky5ZfTKcoC5zIEroQJimB2h7jCXLYRhdxOUMxgZbS97IBvLtqfyheYr0v/AE9t3LeDxOItW/5i3UVHkScikMO9oqqHYltQcwnRdc5M2iq39yztbtu26I6JlVMOqon4UZo0AgEhGOQcworyOFuyCYYheTAAngJP66a072hjLeUosOxP4B/KXUnTOCX4aAAA6gsKz8diCypcdiCO4xMnvIBl9UC+lVhRpGTi5SbZ6H2dwAzM9xLb50hree0ywdxkBLZvznYjgNKr9oOy0QXGw9sqkKWVSWVRMkgHVR3QSdtTyNZeBxz6MljNydnCADmJ28ZqWPxrAaWQsgqzo+dSGEHPI033pqthXRn2sSAVU8Z1+lfQ+wsYEwoIH4RH5Z1MDhrPnXy92Gca17q3eCYCVgM6gSIzd4idRrO9VY7dGHfVnLM8gGSZ1Ik6AiZBgAAHgOVJ4qyG22B0n9Y41eGhQs/mI9Qs+Ukf6qquPlE+Q8TtTVUOKxkTw7lHy7BgJHhqD8qtxUz5Ukzy4M+frTl9wSoJA0HzoWhdUW9tYwFfc5YCMMh5gBlM+OhpK0ZUVTinlp++NSw7iIJpXkTycxK8aopq8QVOoqlVlT0NJiRXRXCaBSKOg1feuF1BYksDBJJJIO0k+BFUVfhUDEqeI08RqPlNMEUU12dfVHBb4SCD50s6kGCIIqJoEeogd7NqV08ROn31rzvaR/mNHT6Ct26dfED6CvP9op/MPWD8qctGhf2Rl953uR+kftWniUBVhwg1kdlibqDnI+Rrau25XX8QI/SiGgRhXXzGYA0UadABPiYk9SaLSFmAHGu3bZUwatwHxweIIpdkJVghf+IjaO6B0XQeu/iaqq+9IaH1PPY9Nai9sZQy7HQ9DQBWiyYFduNwGw2/U1ZbWEZvBR56n5fWuW2y96Nfwzw/NHTh18NQDQ7PvJh5dgWukEKnBQY7zngTy3jxpa6pdmdz3mMmNBVFjVteppumJsq9wvKj3C8qsJrhcQTyookSvEAwK0ey7Si22JKm4bTqAmgtgtqjXCTLAkNCgfgM6Gshm3J8a9L2nGHtW8JMOo99f5+8caKf/jSB/rz86iTNoqslvYfYTY5r2IuXMtuynvb7aNcM5zlRToWbI3eOg312rvbHtITaXDWh7nDJOWyrFnckyWvOdXYnWNFGnIGqfZXHXAMZbtlUW7h2Ls891LXeOUAGWKkqNtTNZWBwAIz3Addl1nxJqEN6Fmxx2Xuj5+vDyq/CMxbODLDUDaOq8J9IrmOw66leXH/EmkrF5lMr6bj0qrJo9J/G5oN9FY8Hgox8SvdfzBPWrmw6P8LqgIgKy93X/wBxAZ8wKzMN2k0ZPdnUzKyZ8Jret5lRJRVR0zaosFmUayuz7aTpGoprIvueXu4aHyDXqDp6mNOpr6B23hjZsWsOCGIUAxqCzQDHMS/yrx+HuE3mQAGRlzQNeUaabkTXq+xUm4rsx/lQQWMgRGuvSatZwS8Hk2tN7xmRSZIAHQhck/7So8a7i8LCnOxLnSBGVRxA8RpNM4PFBc+Ud50Vf9MHUjmSNPAmlcUdvOirWStRwZ3uhnC86b9yCWfXQED0geg1qeHwjlwxUgRoTpw+nWp40hbZHCI8Sdz98qOhJCFyyAJE1VaWTBphDmXxFU4f4qRJb/DjrUcMNCKYqqyPi8aYChFFSufEfGo0hkZ1qxHKkEbgz6VCK7SGalwrfBIhXGscx0PEf5rLZSJ023+n1prs1wHE9R6iPpNMta/n5Bs4ZfUET8garoe8jrDWOUD00/Ss+2M0sdyT5dKbu3SFLNvufH/NKYP4fM1a+gSZnYYkMCoJjXQE/SvSO+YT0B/f6zWFgMVk0PwnXwrTwmNV3y/hYGeYI+96zi1RQr2omqny/b9az8xGo3Gor0L2wQQYK8fvnWbfwQIlDI5TPoapr6EtZsZuWkuqHEgAQeYjcH9+vWqjYCa6lD8YOpjmPCkMLiWQkcDoVOmu09DW8mwU8oOnzNKLsqjPxOGAyKD3Sx+f9gRWezSZrYxyKU12VgRHHcR04a1jMZM0MiRbh/i8qbpTD/F5U2iyQBuSBrAGvMnQUIhi+J2FVoCQQOJA/f6VZidhUsDbLHKolmKqo5ljAHrFHZSGexbCJda4651tKHVSJVnJARX1EgGXI4hCONJ4sszuzEsznM7NvLEsZ/8AGeoNeh7YsZHNqNLcoepUwxy8M0Kdd8x5V5y+A10xqJ1/X5zWby8GjdYNLsZFW1eJ1a5ktr/pU+8fTxWx/wAiOdUYhyfCq7LhcwBGmmpg67x0gIPKq3vUJUEnaSK7z6x50moI15GD5zH0NXCTMVoYDCh0dOJUsOpTvf8A1DetFXkWsEMBfKDgRMEHYjcfXetm3eVlPLWV3+XGvP2AVZ0bQgnTwMfrTNq4ykMvnQmMbe0qS9otn0KkE6REhep19aFvuiugYw8E6zBKwwHDcn7AqKP3WYbr8Q01B2I5HcdYpZLuaTEU4vJEtWW2D3h1MetaptqpzEKT+DjHWsq2wDAtpT7Hbw/etErHHRJ7zERNZ2PtFsonidPLf75022x1jTflWYMTmdYJI1meA+xQ60xydIrwTbjlrXUEP61zDNLsRx/U1Yw74PQ1K0Q9l1RUb+NSzdB9+NcZ4E1RIk51PjUa6518ROnieHlXKkoKKKKALcM4VwTt++lbduz3g8/9udOeYQPnWKloyBAk8DsOMt+1atk90d7N1GxqksUUhbtG5C5ef6VWLgtgKRqQGI5ZtQD1iD50xirK5ke4wCT8O5aJLactI46nzrIxuKLuzn8RmOQ2A9AKG0tg1bLcfdVrjughGZmVSPwlmyj0rQw1hYRwMpjhseBkbHjSeEw4uIwHxpJHUEaD1B/5Ux2Vj1UZHMLqB4EyR0M6gnTTWpjvPYLCpdCzK6GJI6jY0JimBmfHkfEc+tauPRVDTDqNQRImdR1G4rJTIRJbLrBG7dIgajr/AGlvDoK7QtefMxPMkx41p4DFFoVjJObffSCPkT6Uk9pS4CGQ0xzBg7+dV4Y99dQDOhOwPCenOoi2mUbt5AVIaY0JjjHCsrF2wrSs5W1Wd4kiD1BEVrrJEkb9QQR0I0Iqq7hlYAGdNorRqxNWZeH+LypuqHw7I2h/vU1uc9D8vWkjNojeExy1J8AJP0rY9jrOe9nhQMOrYhmJKj+WJQErqCXKAEQdTvFYy3wLig7CQZ6it9Llu3hFsowL4r+diSpkJbtk+7tEjQMZLMNxmWdhUSfSLiqyzJ7SxzFcxnM8HUydtCSQCdNfFhSuDQLlzzBIJygZgOMToTG08TS+Ium47Nw1jwFMzIQ/f3pTS7BlmOxQdy4tpbEAKqj4QugBbd25udSekAI3WoxN2JjSlwpInep9DJpdjbqIra7KaHtn8wB8GMH5E1jIM2n4iYHIDnWrh2y5Tvlg9dIppEsr7Z7uJc7DOZ8wD+tSCacxzGoPgaze0cY1x2ZhlLGSPoPAaVLAYsoYJ0P3r0pIpjly0TtHSf1jhVzkScq5RwXePPjVnvUI1hT8vL9qrN1W1WY/qOk+A5VUcYJlnJEinbPwjwpWxbzHoPuKeArSI4qiu8e6ayrqZVYgRJInoYMfp4CnL6ktmbuog+I8SRsvMnbTlWZfvFj04D741MnQPLGMENDz+/71e4kg9f3qHZ6AqSTEaemv608ESJ09ZoisCcW3YtVV8gAE7TtzMHTw29aYKhSM2pJhVUSzHgABSWJZi3eAEbAEEDzGh8aGJKtlMHc8dfscqKaw2ELAnarGwqKRmfyMCfCkkOmxW1bUyWcKB0LMxMwFXbhqSQB4wDy3zPDh1O3lofSnH7PnVSN9Brt41Y+EHdBIyLM8Jp0wUXYpYtMQSNZ0/ck/e9atlVRCWPdRdY3J4KOpNKHGogCrJj+n9zvSeOxecgD4RsOZO5P0/wAmn5JFVRRicQzuXbc6ADYAbAdBXPdGuFYMeFM3lE6tHSsmrYWLZoiJB4kHrII5f2rRs2RfDEiHUSzKPiG2Yr9Y11HOKpw3ZN57ZuJbLIs5ipUkRqcygyNNdqXwuJa24dTDDY7jXcEcQRwojjawTadqLTa/2Sy6LiJlLEodiDKHoDw8NPClh/j5euk+tezazYbD+/g2S0hhupPVW0YEaiIYjjXnj2aApcsDb2FxcxWeR0lWj8LR41coNaM+PnjO9qnX5I9l3ATlaNNVnccwDS+BNsXB70Ep3w0b6qwUjqDB8qex3YjIi3VcPabRbi7T/Sw3Vuh/tWSRUO1SaNFJTi6eMr2OdnXWEqvLMRuukCSPEjUQaZTtQTDoR1Uz46N+9Vdm22WLiQQCVIkSOjToARtOhgg8JnewgdjlPeBhkO9WvJLBVja3UeBvOqyCJjcrI14jTlUmtrxA18qRVV2KhSIGYCGEbHrVz31hg5WQBseMfh86ad7GvZnYhP5hUCe8IB2O2hrZxqs4cA5c2UcTCqNFGvEyT6Vj2Fb/ALhmAwk8oiZHKK0MZjwrAKNI7wO+YHUAg8qmNdiwK/weSAd9QTwM8qpsOfgPAmtlodR/g+fWsbHIEusFbMAQQ0ZZ0B24ayPKqaoVZFroneurtWjiVBtoTHMnjDbAfKlrCBidOJP7ClQWLotaFh5H30qrDvmJzKNOnyq4aMR4fMCjQnkrt4QXXy7FmCg9ToPKYpLF4RrblGIJ0267T1rT7O/7iH86H/yrntRrfLgRmG42JUx6wFqWuxrQhbtsWCtMDTiJ6VpWhJyjb9uVV3r6uWZdNaue+quFgL3VB8QoBJP5jJ6SKawwq2NgBVkwqjcnYfuem5rPx+PeFCZkWJkGGfkWjb/TPGpY7NcARO8FzNAjcwD4wB8zVfabqVXKeJgTMDl5aDXlVyeHRQncckCZjcTrJ2LHmdI8ophcLCM7b8PPT9al2ZYDHMSDGy/qRU+0blsqMrlmzfCBCKoB3J3Yk8NABvJgZpYtibqhbDNt47ctN/GmHugGBq3IUjbBJgcfs1p4RAvDYZpO/Q/WiOcCatiVlznJO+s/Q/KRTqYctrEDmazsOe+JMSdT41rC+WaBtRH2Oldl4WBC/f71j4q2dWZsx22+nQVu4u8qWJjvs5CjjlAGY+APzrCWyW1Y+C6zry4D+9XOtCUrvGnQuHI2J9TVlm2znKCfMmK0LPZrRn0VebGBpvvSt3EQ0W+E97eY3IEaLuaiq2NSTKcThyhgkTw8OZ5V3CrqTVTuSZJk86d7MsZ82sARJ5DXWklbwMUcw54gN6gH9qncYTxPgdPKtx/Zq7dPvENsK/eUEmYbUSMuh12rn/8AIXv67fq3/wCahckU9nR+x55JNRYl7Pdsthbucd5D3bicGHEeI3B/Qms+6q5mCk5ZYKSNSBOWRwJEetcoqrdHH4JS8vrv8Hou0+3rV/ChCGW6CugAyd3czOgIJ7saHprWDgsY9psyGJEMDqrA7qynQqeRooqpSbeRcfDCCcEsFyY9kze6JVXEPbPeTw70yORPeXn+IqO068eNFFSy4pI2PZVM9425ALLpPErrA8QT6U17V4O5Ye2T3W1ysBEhcvHiQfr1oordfxfk4uTlkvjI8a00zPHaCNqwOYgyYkT+tZZPE+NFFYNs7x1c9hgHVlDCYIiQdmXgfEaGq3xTNALQEzFZEkydjA49dNKKKJSawjLjk5RTZ3DYohiWO/l8hpFVYy+HYELG4JmZ1MGI0008q7RTUnRocw4llB1k5QD123q+zcOZwo8BsBGlcorSJLLMMoeFQH3pZgV4NmK5Asa5gc3qKstrmB074iddxwI++FFFD0EdtFvZV5FvJnKgBgSW+EePhVHaWLR0KpOjysjddQD0O2lFFZlCeGtlmCLuxA10GmpJ6fpTz2F70mcomebMQPSAdOlFFUtB2X9n28oLRpGUdeZ+XzrNxYG/4iz5vI6GiinL5UCIYW0GbV8g/qgtHkuvpVbgSYMjgYiescKKKz6FeQVoMj751pYhgQqB1GfKWdpiCQATlB04mBspooprTKZl072a75+6ucnSDOWTsSfGiiiG0J6Nix2BduXWUEtkkFiCFzcVQcp+WukxWx/6EtpWzFAFnM5LE6b9I8KKK64wSi5Hhc3xnL+qoJ4PH9qY43Wn8K91READgSODGJ+5pcXiEKgASe82uYgbKTMZZ1jiYJmBBRXG3k9xJUiqmED+7eAckqXbhP4QTsdyQN+PDQooQ5OqPe4K0/usOyECLahlOxBUa7fECJHmONPWLGVQAS25LHckkkz5miiuGTPtfh1UU/S/o//Z">
        <div class="card-content">
          <p>A phantom of a memory, Omen hunts in the shadows.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Omen">Learn More</button>
        <div class="modal fade" id="Omen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Controller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="11">
                <p> Q - Paranoia (Reducing the vision range)</p>
                <p> E - Dark Cover (Smoke)</p>
                <p> C - Shrouded Step (Teleport)</p>
                
                <p> X - From The Shadows (Teleports to any spot on the map)
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Phoenix</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Hailing from the U.K., Phoenix's star power shines through in his fighting style, igniting the battlefield with flash and flare.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#phoenix">Learn More</button>
        <div class="modal fade" id="phoenix" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Dualist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="12">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Raze</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Raze explodes out of Brazil with her big personality and big guns. </p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#raze">Learn More</button>
        <div class="modal fade" id="raze" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Dualist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="13">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Reyna</h3>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCznx5BryBeVWrSvNv_e_alFi6pScaXjJxZQ&usqp=CAU">
        <div class="card-content">
          <p>Forged in the heart of Mexico, Reyna dominates single combat, popping off with each kill she scores.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reyna">Learn More</button>
        <div class="modal fade" id="reyna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Dualist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="14">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Sage</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>The stronghold of China, Sage creates safety for herself and her team wherever she goes.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sage">Learn More</button>
        <div class="modal fade" id="sage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sentinel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="15">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Skye</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Hailing from Australia, Skye and her band of beasts trail-blaze the way through hostile territory.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#skye">Learn More</button>
        <div class="modal fade" id="skye" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Initiator</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="16">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Sova</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>Born from the eternal winter of Russia's tundra, Sova tracks, finds, and eliminates enemies with ruthless efficiency and precision.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sova">Learn More</button>
        <div class="modal fade" id="sova" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Inititator</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="17">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Viper</h3>
        <img src="data:image/jpeg;base64,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">
        <div class="card-content">
          <p>The American chemist, Viper deploys an array of poisonous chemical devices to control the battlefield and cripple the enemy's vision.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viper">Learn More</button>
        <div class="modal fade" id="viper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Controller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="18">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Yoru</h3>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0ScOR1zwKXp-uh0r0kWWwjnAtelwHhKyi4w&usqp=CAU">
        <div class="card-content">
          <p>Japanese native, Yoru, rips holes straight through reality to infiltrate enemy lines unseen.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Yoru">Learn More</button>
        <div class="modal fade" id="Yoru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Dualist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="19">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>


    </li>
  </ul>
</div>

<h2> Valorant Weapons</h2>
<ul class="cards">
    <li class="card">
      <div>
        <h3 class="card-title">Vandal</h3>
        <img src ="https://fpschampion.com/wp-content/uploads/2022/07/Standard-2.jpg">
        <div class="card-content">
          <p> The Vandal is a Rifle that is a primary weapon in VALORANT.</p>
        </div>
      </div>
    </div>
  </div>
    <div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Vandal" style="margin-top:75px;">Learn More</button>
        <div class="modal fade" id="Vandal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Controller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Rifle </p>
                <p> Costs - 2900</p>
                <p> Magazine - 25 / 50 (75)</p>
                <p> Fire Mode - Auto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </li>

    <li class="card">
      <div>
        <h3 class="card-title">Phantom</h3>
        <img src="https://prod.assets.earlygamecdn.com/images/ValorantPhantom.jpg?x=0.5&y=0.5">
        <div class="card-content">
          <p>The Vandal is a Rifle that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Phantom">Learn More</button>
        <div class="modal fade" id="Phantom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Phantom</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Rifle</p>
                <p> Cost - 2900</p>
                <p> Magazine - 30 / 60 (90)</p>
                <p> Fire Mode - Rifle</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Guardian</h3>
        <img src="https://s.yimg.com/ny/api/res/1.2/ckTNgi7qmJ1YCb0fRq7ctw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTU0MDtjZj13ZWJw/https://s.yimg.com/os/creatr-uploaded-images/2021-10/96a62940-2276-11ec-80fe-25a96f53df0f">
        <div class="card-content">
          <p>The Vandal is a Rifle that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Guardian">Learn More</button>
        <div class="modal fade" id="Guardian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Guardian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Rifle</p>
                <p> Cost - 2250</p>
                <p> Magazine - 12 / 24 (36)</p>
                <p> Fire Mode - Semi-autimatic</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Bulldog</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/07/standard.jpg">
        <div class="card-content">
          <p>The Vandal is a Rifle that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Bulldog">Learn More</button>
        <div class="modal fade" id="Bulldog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Bulldog</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Rifle</p>
                <p> Cost - 2050</p>
                <p> Magazine - 24 / 48 (72)</p>
                <p> Fire Mode - Auto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Marshall</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/04/Marhsall-in-Valorant-Skin.jpg">
        <div class="card-content">
          <p>The Vandal is a Sniper-Rifle that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Marshall">Learn More</button>
        <div class="modal fade" id="Marshall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Marshall</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Sniper-Rifle</p>
                <p> Cost - 950</p>
                <p> Magazine - 5 / 10 (15)</p>
                <p> Fire Mode - Semi</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Operator</h3>
        <img src="https://prod.assets.earlygamecdn.com/images/ValorantOperator.jpg?x=0.5&y=0.5">
        <div class="card-content">
          <p>The Vandal is a Sniper-Rifle that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Operator">Learn More</button>
        <div class="modal fade" id="Operator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Operator</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Sniper-Rifle</p>
                <p> Cost - 4700</p>
                <p> Magazine - 5 / 5 (10)</p>
                <p> Fire Mode - Semi</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Ares</h3>
        <img src="https://prod.assets.earlygamecdn.com/images/valorant-ares.jpg?transform=article3x_webp&x=0.5&y=0.5">
        <div class="card-content">
          <p>The Vandal is a Machine-Gun that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Ares">Learn More</button>
        <div class="modal fade" id="Ares" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ares</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Machine Gun</p>
                <p> Cost - 1600</p>
                <p> Magazine - 50 / 50 (100)</p>
                <p> Fire Mode - Auto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Odin</h3>
        <img src="https://prod.assets.earlygamecdn.com/images/valorant-odin.png?x=0.5&y=0.5">
        <div class="card-content">
          <p>The Vandal is a Machine-Gun that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Odin">Learn More</button>
        <div class="modal fade" id="Odin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Odin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Rifle</p>
                <p> Cost - 3200</p>
                <p> Magazine - 100 / 100 (200)</p>
                <p> Fire Mode - Auto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Classic</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/08/standard-4-768x377.jpg">
        <div class="card-content">
          <p>The Vandal is a Sidearm in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Classic">Learn More</button>
        <div class="modal fade" id="Classic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Classic</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Sidearm</p>
                <p> Cost - Free</p>
                <p> Magazine - 12 / 24 (36)</p>
                <p> Fire Mode - Semi-Autimatic</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Shorty</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/08/standard.jpg">
        <div class="card-content">
          <p>The Vandal is a Sidearm in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Shorty">Learn More</button>
        <div class="modal fade" id="Shorty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Shorty</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Sidearm</p>
                <p> Cost - 300</p>
                <p> Magazine - 2 / 4</p>
                <p> Fire Mode - Semi</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Frenzy</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/07/standard-3.jpg">
        <div class="card-content">
          <p>The Vandal is a Sidearm in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Frenzy">Learn More</button>
        <div class="modal fade" id="Frenzy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Frenzy</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Sidearm</p>
                <p> Cost - 450</p>
                <p> Magazine - 13 / 26 (39)</p>
                <p> Fire Mode - Auto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Ghost</h3>
        <img src="https://static1-es.millenium.gg/articles/1/51/00/1/@/282172-ghost-valorant-1-article_cover_bd-1.jpg">
        <div class="card-content">
          <p>The Vandal is a Sidearm VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Ghost">Learn More</button>
        <div class="modal fade" id="Ghost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ghost</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Sidearm</p>
                <p> Cost - 500</p>
                <p> Magazine - 15 / 30 (45)</p>
                <p> Fire Mode - Semi</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Sheriff</h3>
        <img src="https://cdn.sanity.io/images/dmtcrhxp/production/962b9b9572f2f64b8caa8835a59ee4fa8eb2014c-1600x843.png?rect=51,0,1499,843&w=1920&h=1080&q=30&auto=format">
        <div class="card-content">
          <p>The Vandal is a Sidearm in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Sheriff">Learn More</button>
        <div class="modal fade" id="Sheriff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sheriff</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Sidearm</p>
                <p> Cost - 800</p>
                <p> Magazine - 6 / 18 (24)</p>
                <p> Fire Mode - Semi</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Stinger</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/07/Standard-7-1024x501.avif">
        <div class="card-content">
          <p>The Vandal is an SMG that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Stinger">Learn More</button>
        <div class="modal fade" id="Stinger" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Stinger</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - SMG</p>
                <p> Cost - 1100</p>
                <p> Magazine - 20 / 40 (60)</p>
                <p> Fire Mode - Auto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Spectre</h3>
        <img src="https://prod.assets.earlygamecdn.com/images/ValorantSpectre.jpg?transform=article3x_webp&x=0.5&y=0.5">
        <div class="card-content">
          <p>The Vandal is an SMG that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Spectre">Learn More</button>
        <div class="modal fade" id="Spectre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Spectre</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - SMG</p>
                <p> Cost - 1600</p>
                <p> Magazine - 30 / 60 (90)</p>
                <p> Fire Mode - Fully Automatic</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Bucky</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/07/Standard-1.jpg">
        <div class="card-content">
          <p>The Vandal is a Shotgun that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Bucky">Learn More</button>
        <div class="modal fade" id="Bucky" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Bucky</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Shotgun</p>
                <p> Cost - 850</p>
                <p> Magazine - 5 / 10 (15)</p>
                <p> Fire Mode - Semi</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
        
      </div>
    </li>
    <li class="card">
      <div>
        <h3 class="card-title">Judge</h3>
        <img src="https://fpschampion.com/wp-content/uploads/2022/07/standard-5.jpg">
        <div class="card-content">
          <p>The Vandal is a Shotgun that is a primary weapon in VALORANT.</p>
        </div>
      </div>
      <div class="card-link-wrapper">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Judge">Learn More</button>
        <div class="modal fade" id="Judge" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Judge</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Type - Shotgun</p>
                <p> Cost - 1850</p>
                <p> Magazine - 7 / 21 (28)</p>
                <p> Fire Mode - Auto</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
</div>
            </div>
            </div>
        </div>
      </div>
    </li>

 





  </ul>
  </div>


<h2> Active Duty Maps:</h2>
<section aria-label="Newest Maps">
  <div class="carousel" data-carousel>
    <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
    <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
  <ul data-slides>
    <li class="slide" data-active>
      <div class="carousel-content">
    <h1> Ascent </h1>
    </div>
      <img src="https://s3-eu-central-1.amazonaws.com/www-staging.esports.com/WP%20Media%20Folder%20-%20esports-com/app/uploads/2021/08/Ascent-720x405.jpg" alt="Map Image #1" id="img1">
    </li>
    <li class="slide">
      <div class="carousel-content">
        <h1>Split</h1>
      </div>
    <img src="https://images.adsttc.com/media/images/6250/5229/3e4b/314f/7800/0010/large_jpg/split4-2.jpg?1649431077" alt="Map Image #2" id="img1">
  </li>
  <li class="slide">
      <div class="carousel-content">
        <h1>Haven</h1>
      </div>
    <img src="https://images.adsttc.com/media/images/6250/5209/3e4b/315d/6d00/0013/large_jpg/haven4.jpg?1649431045" alt="Map Image #3" id="img1">
  </li>
  <li class="slide">
      <div class="carousel-content">
        <h1>Bind</h1>
      </div>
    <img src="https://prod.assets.earlygamecdn.com/images/bind-map_2023-03-30-191424_bpjs.jpg?mtime=1680203665" alt="Map Image #4" id="img1">
  </li>
  <li class="slide">
      <div class="carousel-content">
        <h1>Fracture</h1>
      </div>
    <img src="https://prod.assets.earlygamecdn.com/images/Fracture-Map.png?mtime=1666013217" alt="Map Image #5" id="img1">
  </li>
  <li class="slide">
      <div class="carousel-content">
        <h1>Pearl</h1>
      </div>
    <img src="https://cdn.oneesports.gg/cdn-data/2022/06/Valorant_Pearl_Statue.webp" alt="Map Image #6" id="img1">
  </li>
  <li class="slide">
      <div class="carousel-content">
        <h1>Lotus</h1>
      </div>
    <img src="https://dotesports.com/wp-content/uploads/2023/01/06145542/6-1MediaKit_Lotus10.png" alt="Map Image #7" id="img1">
  </li>
  </ul>
</div>
</section>
  </div>
<button onclick="scrollToTop()" id="scrollButton" title="Go to top">Top</button>
</body>

</html>
@include("layouts.footer")

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js%22%3E">
  axios.get('127.0.0.1:8000/abilityData').then(resp => {

console.log(resp.data);
});
</script>
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
  window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        var scrollButton = document.getElementById("scrollButton");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          scrollButton.style.display = "block";
        } else {
          scrollButton.style.display = "none";
        }
      }
      function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      };


      $.ajax({
                url: 'http://127.0.0.1:8000/abilityData',
                type: 'get',
                success: function( response ) {
                  response.forEach(elem => {
             $(`#${elem.abilityID}`).append(`<p>${elem.abilityKey} - ${elem.abilityName} ${elem.abilityDesc}</p>`)
          })
                },
                error: function(response) {
                    alert(response.responseJSON.error)
                }
            })
  




</script>
