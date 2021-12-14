<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link href="css/bootstrap.css" type="text/css" rel="stylesheet" /> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="imgSlider/imgslider2.css" type="text/css" rel="stylesheet" />
    <link href="css/main.css" type="text/css" rel="stylesheet" />
    <!-- --------------------------------------------------------------------- -->
    <!-- <script type="text/javascript">

        var slideimages = new Array() // create new array to preload images
        slideimages[0] = new Image() // create new instance of image object
        slideimages[0].src = "img/banner11.png" // set image src property to image path, preloading image in the process
        slideimages[1] = new Image()
        slideimages[1].src = "img/banner12.png"
        slideimages[2] = new Image()
        slideimages[2].src = "img/banner13.png"
        
    </script> -->
    <!-- --------------------------------------------------------------------- -->
</head>
<body>
    
<!-- --------------------------------------------------------------------- -->

<div class="sliderbody">
  <div class="slider">
    <div class="slide active">
      <img src="../board/img/banner11.png" alt="">
      <!-- <div class="info">
        <h2>Winter Mountains</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div> -->
    </div>
    <div class="slide">
      <img src="img/banner12.png" alt="">
      <!-- <div class="info">
        <h2>Tropical Desert</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div> -->
    </div>
    <div class="slide">
      <img src="img/banner13.png" alt="">
      <!-- <div class="info">
        <h2>Steaming Volcanoes</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div> -->
    </div>
    
    <div class="navigation">
      <i class="fas fa-chevron-left prev-btn"></i>
      <i class="fas fa-chevron-right next-btn"></i>
    </div>
    <div class="navigation-visibility">
      <div class="slide-icon active"></div>
      <div class="slide-icon"></div>
      <div class="slide-icon"></div>
    </div>
  </div>

  <script type="text/javascript">
      const slider = document.querySelector(".slider");
      const nextBtn = document.querySelector(".next-btn");
      const prevBtn = document.querySelector(".prev-btn");
      const slides = document.querySelectorAll(".slide");
      const slideIcons = document.querySelectorAll(".slide-icon");
      const numberOfSlides = slides.length;
      var slideNumber = 0;

      //image slider next button
      nextBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });

        slideNumber++;

        if(slideNumber > (numberOfSlides - 1)){
          slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      });

      //image slider previous button
      prevBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });

        slideNumber--;

        if(slideNumber < 0){
          slideNumber = numberOfSlides - 1;
        }
        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      });

      //image slider autoplay
      var playSlider;
      var repeater = () => {
        playSlider = setInterval(function(){
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });

          slideNumber++;

          if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0;
          }

          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        }, 3500);
      }
      repeater();

      //stop the image slider autoplay on mouseover
      slider.addEventListener("mouseover", () => {
        clearInterval(playSlider);
      });

      //start the image slider autoplay again on mouseout
      slider.addEventListener("mouseout", () => {
        repeater();
      });
  </script>
</div>


<!-- --------------------------------------------------------------------- -->

        <div class="mains1">
            <table>
                <td>
                    <div class=box>
                        <img src="img/main1_deliv.png" 
                        onmouseover="this.src='img/main1_deliv_over.png'" 
                        onmouseout="this.src='img/main1_deliv.png'">
                    </div>
                </td>
                <td>
                    <div class=box>
                        <img src="img/main1_design.png" 
                        onmouseover="this.src='img/main1_design_over.png'" 
                        onmouseout="this.src='img/main1_design.png'">
                    </div>
                </td>
                <td>
                    <div class=box>
                        <img src="img/main1_plan.png" 
                        onmouseover="this.src='img/main1_plan_over.png'" 
                        onmouseout="this.src='img/main1_plan.png'">
                    </div>
                </td>
                <td>
                    <div class=box>
                        <img src="img/main1_struct.png" 
                        onmouseover="this.src='img/main1_struct_over.png'" 
                        onmouseout="this.src='img/main1_struct.png'">
                    </div>
                </td>
        </table>
        </div>
        <div id="mains2">
            <div class="mline"><img src="img/main2_line.png"></div>
            <div><img src="img/main2_contents2.png"></div>
            <div class="c3"><img src="img/main2_contents3.png"></div>
            <div><img src="img/main2_contents4.png"></div>
        </div>
    </div>

    <!-- <div class="mainc">
            <div><img src="img/banner11.png"></div>
            <div class="mains1">
                <table>
                    <td><div><img src="img/main1_deliv_over.png"></div></td>
                    <td><div><img src="img/main1_design_over.png"> </div></td>
                    <td><div><img src="img/main1_plan_over.png"></div></td>
                    <td><div><img src="img/main1_struct_over.png"></div></td>
            </table>
            </div>
            <div class="mains2">
                <div class="mline"><img src="img/main2_line.png"></div>
                <div><img src="img/main2_contents2.png"></div>
                <div><img src="img/main2_contents3.png"></div>
                <div><img src="img/main2_contents4.png"></div>
            </div>
        </div> -->

</body>
</html>