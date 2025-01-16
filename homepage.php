<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cake Point</title>

    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin&family=Herr+Von+Muellerhoff&family=Poiret+One&family=Source+Sans+Pro:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="mycart.js"></script>
    <script src="myscript.js"></script>
    <script>
      /* F O R   N A V I G A T I O N */

      function myFunction() {
        var x = document.getElementById("mynavTop");
        if (x.className === "navtop") {
          x.className += " responsive";
        } else {
          x.className = "navtop";
        }
      }

      /* F O R   S L I D E S H O W */

      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 7) {
          counter = 1;
        }
      }, 3500);
    </script>

    <style>
      :root {
        --main-font: "Source Sans Pro", sans-serif;
        --secondary-font: "Poiret One", cursive;
        --body-font: "Cabin", sans-serif;
        --headings-font: "Herr Von Muellerhoff", cursive;
      }

      body {
        background-color: #664d4d;
        font-family: var(--body-font);
        font-size: 10px;
        scroll-behavior: smooth;
        margin: 0px;
      }

      /* N A V I G A T I O N */

      .navtop {
        overflow: hidden;
        background-image: linear-gradient(to bottom,rgba(0,0,0,0.5), transparent);
      }

      .navtop a {
        float: left;
        display: block;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }
      
      .navtop .icon {
        display: none;
      }

      .drop_down {
        float: left;
        overflow: hidden;
      }

      .drop_down .dropdown_btn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }

      .drop-content {
        display: none;
        position: absolute;
        background-color: #664d4d;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      .drop-content a {
        float: none;
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .navtop a:hover,
      .drop_down:hover .dropdown_btn,
      .search-container button:hover {
        background-color: rgb(169, 125, 125);
        color: white;
      }

      .drop-content a:hover {
        background-color: rgb(169, 125, 125);
        color: white;
      }

      .drop_down:hover .drop-content {
        display: block;
      }

      @media screen and (max-width: 920px) {
        .navtop input[type="text"] {
          display: none;
        }
      }

      @media screen and (max-width: 698px) {
        .navtop a:not(:first-child),
        .dropdown .dropbtn {
          display: none;
        }

        .navtop a.icon {
          float: right;
          display: block;
        }
      }

      @media screen and (max-width: 698px) {
        .navtop.responsive {
          position: relative;
        }
        .navtop.responsive .icon {
          position: absolute;
          right: 0;
          top: 0;
        }

        .navtop.responsive a {
          float: none;
          display: block;
          text-align: left;
        }

        .navtop.responsive .drop_down {
          float: none;
        }
        .navtop.responsive .drop-content {
          position: relative;
        }
        .navtop.responsive .drop_down .dropdown_btn {
          display: block;
          width: 100%;
          text-align: left;
        }

        .navtop input[type="text"] {
          display: inline;
          padding: 6px;
          margin-top: 8px;
          font-size: 17px;
          border: none;
        }
      }

      @media screen and (max-width: 488px) {
        .navtop input[type="text"] {
          display: none;
        }
      }

      .search-container {
        float: right;
      }

      .navtop input[type="text"] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
      }

      .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: rgb(169, 125, 125);
        font-size: 17px;
        border: none;
      }

      /* M A I N - C O N T E N T */

      /*  B A K E R Y   N A M E   A N D   I C O N  */

      #bakery-name img {
        height: 120%;
        width: 100%;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      /*  S L I D E S H O W  */

      .slider {
        width: 100vh;
        height: 88vh;
        overflow: hidden;
        position: relative;
        left: 45vh;
        top: -10vh;
        align-items: center;
        
      }

      .slides {
        width: 500%;
        height: 200vh;
        display: flex;
        position: relative;
        top: 23vh;
      }

      .slides input {
        display: none;

      }

      .slide {
        width: 20%;
        transition: 2s;
        align-items: center;
      }

      .slide img {
        width: 100vh;
        height: 60vh;

      }

      /* css for manual slide navigation */
      .navigation-manual {
        position: absolute;
        width: 100vh;
        margin-top: -730px;
        display: flex;
        justify-content: center;
      }

      .manual-btn {
        border: 2px solid black;
        padding: 5px;
        border-radius: 10px;
        cursor: pointer;
        transition: 1s;
      }

      .manual-btn:not(:last-child) {
        margin-right: 40px;
      }

      .manual-btn:hover {
        background: grey;
      }

      #radio1:checked ~ .first {
        margin-left: 0;
      }

      #radio2:checked ~ .first {
        margin-left: -20%;
      }

      #radio3:checked ~ .first {
        margin-left: -40%;
      }

      #radio4:checked ~ .first {
        margin-left: -60%;
      }

      #radio5:checked ~ .first {
        margin-left: -80%;
      }

      #radio6:checked ~ .first {
        margin-left: -100%;
      }

      #radio7:checked ~ .first {
        margin-left: -120%;
      }

      /* css for automatic navigation */
      .navigation-auto {
        position: absolute;
        display: flex;
        width: 800px;
        justify-content: center;
        margin-top: 460px;
      }

      .navigation-auto div {
        border: 2px solid black;
        padding: 5px;
        border-radius: 10px;
        transition: 1s;
      }

      .navigation-auto div:not(:last-child) {
        margin-right: 40px;
      }

      #radio1:checked ~ .navigation-auto .auto-btn1 {
        background: gray;
      }

      #radio2:checked ~ .navigation-auto .auto-btn2 {
        background: gray;
      }

      #radio3:checked ~ .navigation-auto .auto-btn3 {
        background: gray;
      }

      #radio4:checked ~ .navigation-auto .auto-btn4 {
        background: gray;
      }

      #radio5:checked ~ .navigation-auto .auto-btn5 {
        background: gray;
      }

      #radio6:checked ~ .navigation-auto .auto-btn6 {
        background: gray;
      }

      #radio7:checked ~ .navigation-auto .auto-btn7 {
        background: gray;
      }
      

    


      /*  I T E M S   D I V S  */

      #items-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: #664d4d;
        background-image: linear-gradient(to bottom,rgba(86, 53, 53, 0.5), transparent);
        margin: 50px;

      }

      .items {
        border: 1.5px solid black;
        margin: 30px;
        box-shadow: 3px 3px 15px grey;
        transition: 1s ease-in-out;

      }

      .items img {
        height: 200px;
        width: 200px;
      }

      .items:hover {
        box-shadow: 5px 5px 25px white;
      }

      .item-names {
        background-color: white;
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        margin: 0px;
        padding: 2%;
      }

      a:link {
        text-decoration: none;
        color: black;
      }

      a:visited {
        text-decoration: none;
        color: #454545;
      }

     
     

      /* P O L L   S E C T I O N */
      
      .flex-container {
        display: flex;
        flex-wrap: wrap;
        padding: 4%;
      }

      .flex-child {
        font-family: var(--body-font);
        flex: 1;
        background-color: rgb(177, 153, 121);
        padding: 2%;
        margin-bottom: 2rem;
      }

      .flex-child:first-child {
        margin-right: 20px;
      }

      .poll1 {
        display: flex;
        height: 260px;
        width: 300px;
        margin-left: 70px;
        flex-direction: row;
        flex-wrap: wrap-reverse;
        position: relative;
        background-color: #f0e9e9;
        border-radius: 7px;
      }

      .poll {
        width: 22px;
        margin-left: 40px;
        border-radius: 8px;
        color: white;
        font-size: 20px;
        text-indent: 30px;
      }

      #div1 {
        height: 200px;
        background-color: #b33380;
        writing-mode: vertical-rl;
      }

      #div2 {
        height: 260px;
        background-color: pink;
        writing-mode: vertical-rl;
      }

      #div3 {
        height: 100px;
        background-color: #b33380;
        writing-mode: vertical-rl;
      }

      #div8 {
        height: 90px;
        background-color: pink;
        writing-mode: vertical-rl;
      }

      /* S P E C I A L S   +   F E E D B A C K */

      #new-item-container {
        margin: 2% 0%;
        padding: 2%;

      }

      .newitem {
        border-radius: 18px;
        margin: 4% 0%;
      }

      #special-heading-p {
        color: purple;
        font-family: var(--secondary-font);
        font-size: 30px;
        padding: 5px;
        margin-left: 120px;
      }
      #special-heading-t {
        color: turquoise;
        font-family: var(--secondary-font);
        font-size: 30px;
        padding: 5px;
        margin-left: 120px;
      }

      
      .special-image {
        height: 280px;
        width: 90%;
        margin: 2%;
        margin-left: 25px;
      }
      .rating-image{
        height: 350px;
        width: 70%;
        margin: 2%;
        margin-left: 75px;
      }

      .blink {
        color: white;
        font-size: 60px;
        font-family: var(--headings-font);
        margin-left: 120px;
        animation: blink 2.5s infinite alternate;
      }

      @keyframes blink {
        0% {
          color: white;
        }
        100% {
          color: brown;
        }
      }

      

      /* G A L L E R Y */

      #gallery {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        position: relative;
        justify-content: center;
        align-items: right;
      }
      #gallery b{
        color: white;
        font-size: 70px;
        font-family: var(--headings-font);
        animation: blink 2.5s infinite alternate;
      }

      @keyframes b {
        0% {
          color: white;
        }
        100% {
          color: brown;
        }
        

      }

      .pics {
        height: 300px;
        width: 470px;
       
        margin: 2% 0 0 5%;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        margin: 30px;
        transition: 1s ease-in-out;
      }

      div.pics:hover {
        transform: scaleX(1.1);
        box-shadow: 1px 1px 2px brown, 0 0 25px white, 0 0 5px darkblue;
      }

      #pic1 {
        background-image: url("https://cdn.pixabay.com/photo/2014/06/30/11/40/cupcakes-380178_1280.jpg");
      }

      #pic2 {
        background-image: url("https://cdn.pixabay.com/photo/2022/08/02/18/30/birthday-party-7361026_1280.jpg");
      }

      #pic3 {
        background-image: url("https://cdn.pixabay.com/photo/2020/03/05/16/07/happy-birthday-4904779_1280.jpg");
      
      }

      #pic4 {
        background-image: url("https://cdn.pixabay.com/photo/2022/04/02/14/40/hearts-7107142_1280.jpg");
      }

      #pic5 {
        background-image: url("https://cdn.pixabay.com/photo/2024/04/13/11/29/muffins-8693748_1280.jpg");
      }

      #pic6 {
        background-image: url("https://cdn.pixabay.com/photo/2020/07/05/17/16/wedding-cake-5373757_1280.jpg");
      }
      #pic7 {
        background-image: url("https://cdn.pixabay.com/photo/2020/02/09/11/49/donut-4832823_1280.jpg");
      }

      #pic9 {
        background-image: url("https://cdn.pixabay.com/photo/2020/02/09/11/50/donut-4832826_1280.jpg");
      }

      /* A B O U T */

      #about {
        border: 3px solid black;
        margin: 5%;
        padding: 3% 5% 0% 5%;
      }

      #values-img {
        height: 10px;
        width: 100%;
        margin: 2% 0%;
      }

      #details-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        margin: 50px;
        padding: 2%;
      }

      .details-child {
        margin: 2% 5%;
      }

      .about-subheading {
          font-style: italic;
          text-align: center;
          color:chocolate;
          font-size: 24px;
          font-family: var(--secondary-font)
      }

      .subheading-content {
        text-align: justify;
        color:rgb(199, 186, 186);
        font-size: 18px;
      }

      /* F O O T E R  */

      .footer{
        align-items: center;
        height:40vh;
        margin-left: 15vh;
      }

      .last-image{
        height: 75%;
        width: 90%;
      }

      .googlemap {
        position: relative;
        padding-bottom: 40%;
        height: 0;
        overflow: hidden;
      }

      .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
      }
    </style>
  </head>

  <body>
    <!--  N A V I G A T I O N  -->

    <div class="topnav" id="myTopnav">
      <div class="navtop" id="mynavTop">
        <a style="
          color:white" href="Homepage.html">Home</a>
        <div class="drop_down">
          <button class="dropdown_btn">
            Items
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="drop-content">
            <a style="color:white"href="Cakes.html">Cakes</a>
            <a style="color:white"href="Pastries.html">Pastries</a>
            <a style="color:white"href="BiscuitsAndCookies.html">Cookies</a>
            <a style="color:white"href="Donut.html">Donuts</a>
          </div>
        </div>
        <a style="color:white"href="KitchenPage.html">Our Kitchen</a>
        <a style="color:white"href="Gallery.html">Gallery</a>
        <a href="" style="float: right" data-toggle="modal" data-target="#cart"
          ><i class="fas fa-shopping-cart"></i
          ><span class="cart-items">( 0 )</span></a
>
        <a target="_blank" style="float: right"
          ><i class="fas fa-user"></i
        ></a>
        <a
          href="javascript:void(0);"
          style="font-size: 15px"
          class="icon"
          onclick="myFunction()"
          >&#9776;</a
        >

        <div class="search-container">
          <input
            type="text"
            placeholder="Search"
            name="search"
            pattern="[A-Za-z]"
          />
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>

    <!--  B A K E R Y   N A M E   D I V  -->

    <div id="bakery-name">
      <img src="final.png" />
    </div>

    <!--   S L I D E S H O W   -->

    <div class="slideshow">
      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
          <input type="radio" name="radio-btn" id="radio4" />
          <input type="radio" name="radio-btn" id="radio5" />
          <input type="radio" name="radio-btn" id="radio6" />
          <input type="radio" name="radio-btn" id="radio7" />

          <div class="slide first">
            <img
              src="https://cdn.pixabay.com/photo/2020/06/23/09/06/donut-5331966_1280.jpg"
            />
          </div>

          <div class="slide">
            <img
              src="https://cdn.pixabay.com/photo/2017/06/05/03/34/cookies-2372836_1280.jpg"
            />
          </div>

          <div class="slide">
            <img
              src="https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2020/02/Paleo-Chocolate-Cupcake-8.jpg"
            />
          </div>

          <div class="slide">
            <img
              src="https://cdn.pixabay.com/photo/2019/09/14/08/10/donut-4475458_1280.jpg"
            />
          </div>

          <div class="slide">
            <img src="https://wallpapercave.com/wp/wp3031763.jpg" />
          </div>

          <div class="slide">
            <img
              src="https://cdn.pixabay.com/photo/2021/07/06/11/29/cake-6391351_1280.jpg"
            />
          </div>

          <div class="slide">
            <img src="https://cdn.pixabay.com/photo/2023/03/13/21/43/macarons-7850852_1280.jpg" />
          </div>

          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
            <div class="auto-btn6"></div>
            <div class="auto-btn7"></div>
          </div>
        </div>

        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
          <label for="radio5" class="manual-btn"></label>
          <label for="radio6" class="manual-btn"></label>
          <label for="radio7" class="manual-btn"></label>
        </div>
      </div>
    </div>

    <!--  I T E M S  -->

    <div id="items-container">
      <a href="cakes.html">
        <div class="items">
          <img
            src="https://i.pinimg.com/originals/72/23/5d/72235dbf0d178dc9d6ab60b8ecf6157e.jpg"
          />
          <p class="item-names">Cakes</p>
        </div>
      </a>

      <a href="pastries.html">
        <div class="items">
          <img
            src="https://i.pinimg.com/originals/55/d3/ec/55d3ec4a9f46d69a323a2cf539e4fd4a.jpg"
          />
          <p class="item-names">Pastries</p>
        </div>
      </a>


      <a href="BiscuitsAndCookies.html">
        <div class="items">
          <img
            src="https://cdn.pixabay.com/photo/2016/03/18/02/16/cookies-1264263_1280.jpg"
          />
          <p class="item-names">Cookies</p>
        </div>
      </a>

      <a href="Donut.html">
        <div class="items">
          <img
            src="https://cdn.pixabay.com/photo/2019/11/17/17/58/donuts-4633030_1280.jpg"
          />
          <p class="item-names">Donuts</p>
        </div>
      </a>

   

    <!-- P O L L  A N D   N E W   I T E M S -->

    <div class="flex-container">
      <div class="flex-child">
        <h1 class="blink">Today's Poll!</h1>
        <p style="font-size: 20px">
          Take a look at the best selling items today and choose the perfect one for you!
        </p>

        <div id="div" class="poll1">
          <div id="div1" class="poll">Cookies</div>
          <div id="div2" class="poll">Pastries</div>
          <div id="div3" class="poll">Donuts</div>
          <div id="div8" class="poll">Cakes</div>
        </div>

        <p style="font-size: 20px">
          <i>
            Order our top 3 rated items now and get <b>20% off</b>!</i>
        </p>
        <button type="button" class="btn btn-outline-secondary btn-sm">
          <a href="#items-container">Order Now</a></button
        ><br />

        <div id="new-item-container">
          <h1 class="blink">Specials!</h1>

          <p style="font-size: 20px">
            Try out some of our specials which are the best in quality and we are excited to serve our customers the latest in the trend. So, here we bring two new mouth watering
            special desserts for you!
          </p>

          <div class="newitem">
            <h1 id="special-heading-p"><b>Purple Passion</b></h1>
            <p style="font-size: 20px">
                A decadent delight featuring a fluffy cake donut dipped in rich purple glaze and topped with a sprinkle of colorful sugar crystals. Each bite is a burst of sweet and tangy flavor, perfect for satisfying your cravings.
            </p>
            <img
              src="https://cdn.pixabay.com/photo/2021/09/20/01/42/donut-6639452_1280.jpg"
              class="special-image"
            />
            <br />
            <button
              type="button"
              onclick="add_to_cart('1','Purple Passion','99')"
              class="btn btn-outline-secondary btn-sm"
            >
              Order Now
            </button>
          </div>

          <div class="newitem">
            <h1 id="special-heading-t"><b>Turquoise Treasure</b></h1>
            <p style="font-size: 20px">
                This cupcake is a treasure trove of flavor and beauty. The vanilla cake is topped with a swirl of turquoise buttercream frosting and a sprinkle of sugar crystals. It's a delicious and visually stunning treat that's sure to impress.
            </p>
            <img
              src="https://cdn.pixabay.com/photo/2017/08/07/22/50/food-2608803_1280.jpg "
              class="special-image"
            />
            <br />
            <button
              type="button"
              class="btn btn-outline-secondary btn-sm"
              onclick="add_to_cart('2','Cheese Cake','250')"
            >
              Order Now
            </button>
          </div>
        </div>

        <div class="new-item-container">
          <h1 class="blink">Customer's Feedback</h1>
          <i
            ><p style="font-size: 22px">
              "The cakes are absolutely amazing! So moist and flavorful. The staff is always so friendly and helpful. Definitely my go-to bakery."<br /> -Saravanan P
              <br /><br />"The cupcakes here are to die for! The frosting is so creamy and the cake is perfectly moist. I've never had a better cupcake. The quality of their ingredients is top-notch, and the pastries are always fresh and flavorful."<br /> -Aditya K
              <br /><br />"I ordered a custom cake for my daughter's birthday and it was absolutely beautiful. It tasted as good as it looked. The staff was so helpful and accommodating throughout the entire process."<br /> -Senthil Krishna
              <br /><br />"This bakery is a hidden gem. The bread is always fresh and the pastries are so delicious. I love coming here for a quick snack or a special treat.The staff is friendly and efficient, and the atmosphere is cozy and inviting."<br /> -Ashwin M<br />
            </p></i
          >
          
          <img
            src="rat.jpg"
            class="rating-image"
          />
        </div>
      </div>

      <!-- G A L L E R Y -->

      <div class="flex-child">
        <div id="gallery">
          <h1
            align="right"
            style="
              font-size: 3.5em;
              color: purple;
              margin: 2%;
              text-align: center;
              width: 100%;
            "
          >
            <b>Gallery</b>
          </h1>
          <div class="pics" id="pic1"></div>
          <div class="pics" id="pic2"></div>
          <div class="pics" id="pic3"></div>
          <div class="pics" id="pic4"></div>
          <div class="pics" id="pic5"></div>
          <div class="pics" id="pic6"></div>
          <div class="pics" id="pic7"></div>
          <div class="pics" id="pic9"></div>
        
         
        </div>
        <br />
        <button
          type="button"
          class="btn btn-outline-secondary btn-bg"
          style="margin-left: 10%"
        >
          <a href="Gallery.html">View More</a>
        </button>
      </div>
    </div>

    <!--  O U R   K I T C H E N  -->

    <div id="props">
      <img
        src="https://5.imimg.com/data5/BJ/LA/MY-53886860/bakery-kitchen-setup-1000x1000.jpg";
      />
      <div id="props-text">
        <a href="KitchenPage.html">
          <h3 style="
            text-align: center;
            color:white;
            font-size: 60px;
            font-family:var(--headings-font);
            ">
            Our Kitchen</h3>
        </a>
      </div>
    </div>

    <!-- A B O U T -->

    <div id="about">
      <h1 style="text-align: center; 
      font-family:var(--headings-font);
      color: burlywood;
      font-size: 70px;"><b>Presence</b></h1>
      <h4
        style="
          font-style: italic;
          text-align: center;
          color:chocolate;
          font-size: 24px;
          font-family: var(--secondary-font);
          "
      >
        "Our aim is to continue enriching the global sweet market."
      </h4>
      <br />
      <p style="text-align: justify;
      color:rgb(199, 186, 186);
      font-size: 18px;">
        Consisting of a team of field experts and talented management board, we
        are collectively concentrating our effort to spread the goodness of
        organically baked goods as far as possible. Over the course of the
        production, we have been challenging ourselves every single step. In
        search for a unique and fulfilling experience for our customers, our
        sweet team has been sharing and discussing the tastes and knowledge with
        our quality-demanding food experts from numerous cafés, restaurants, and
        hotels worldwide. We are trying to smoothly build a healthy,
        medium-sized company; placing emphasis on creating and maintaining a
        warm relationships with our customers and business partners.
      </p>
      <div>
        <img
          src="http://www.sweetdelight.eu/archiv/about1.jpg"
          id="values-img"
        />
      </div>

      <h1 style="text-align: center; 
      font-family:var(--headings-font);
      color: burlywood;
      font-size: 70px;"><b>Values</b></h1>
      <h4
        style="
          font-style: italic;
          text-align: center;
          color:chocolate;
          font-size: 24px;
          font-family: var(--secondary-font);
        "
      >
        "We believe in uniqueness."
      </h4>
      <br />
      <p style="text-align: justify;
      color:rgb(199, 186, 186);
      font-size: 18px;">
        Our philosophy is baked from the freshest of ingredients. We have
        combined systematic and inspiring collaboration with our employees by
        using the best raw materials and machines, together with customers’
        expectations, high technological approaches to producing sweets our
        aspirations, as well as undying respect for quality and safety. We
        believe that the results will always be absolutely unique and
        fulfilling!
      </p>
      <div>
        <img
          src="http://www.sweetdelight.eu/archiv/about1.jpg"
          id="values-img"
        />
      </div>

      <div id="details-container">
        <div class="details-child">
          <h3 class="about-subheading"><b>10 years</b></h3>
          <h4 class="subheading-content">
            delivering the unmatched<br />quality to all passionate<br />cake
            lovers.
          </h4>
        </div>

        <div class="details-child">
          <h3 class="about-subheading"><b>50 employees</b></h3>
          <h4 class="subheading-content">
            producing the unique sweet<br />solutions delighting<br />customers'
            demands.
          </h4>
        </div>

        <div class="details-child">
          <h3 class="about-subheading"><b>7,500,000 Kg</b></h3>
          <h4 class="subheading-content">
            of baked goodies adored,<br />eaten and appreciated<br />by
            customers.
          </h4>
        </div>

        <div class="details-child">
          <h3 class="about-subheading"><b>25 destinations</b></h3>
          <h4 class="subheading-content">
            all around the world <br />taking pleasure<br /> in our cakes.
          </h4>
        </div>

        <div class="googlemap">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.0407859324396!2d80.15085337494118!3d12.840640987462793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5259af8e491f67%3A0x944b42131b757d2d!2sVellore%20Institute%20of%20Technology%20-%20Chennai!5e0!3m2!1sen!2sin!4v1731846604007!5m2!1sen!2sin"
            width="900"
            height="1200"
            style="border: 0"
            allowfullscreen=""
            
          ></iframe>
        </div>
      </div>
    </div>

    <!-- F O O T E R   S O C I A L   I C O N S -->

    <div class="footer">
      <img class="last-image"
      src="footer.png"/>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="cart"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3
              class="modal-title"
              id="exampleModalLabel"
              style="font-weight: bold"
            >
              Your Cart
            </h3>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="cart-body"></div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <a href="Checkout.html" target="_blank">
              <button
                type="button"
                class="btn btn-primary checkout-btn"
                onclick="Checkout()"
              >
                Checkout
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>