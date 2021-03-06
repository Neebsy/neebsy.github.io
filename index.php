<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>My Portfolio</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous" ></script>
    <script src="Js/jquery.js"></script>
<script type="text/javascript">
        


$(document).ready(function(){



 // function fetch_user()
 //  {
 //    $.ajax({
 //      url:"process",
 //      method:"POST",
 //      success:function(data){
 //        $('#out1').html(data);
 //      }
 //    })\
 //  }


 $(".btnc").click(function(){
   $("#out1").hide();    
 $("#process").show();


setTimeout(disableElement, 0000)

  
  


       });

 
function disableElement() {
  document.getElementById(".btnc").disabled = true;
}

function enable() {
 document.getElementById(".btnc").disabled = false;
}




$(document).on('click', '.btnc', function(){
 

var name = $('#name').val();
var email = $('#email').val();
var msg = $('#msg').val();
// aler(pass);
$.ajax({
url: "promsg",
type: "POST",
data:{name:name,email:email,msg:msg},  
success: function(data){

$("#process").hide();
$("#out1").html(data);
  $("#out1").show();

  


},
error: function(){} 
         
});
});
       
    

   
  
  });




      </script>


      <style type="text/css">
          

          #process{
            display: none;
            background-color: green;
            color:white;
             height: auto;
             width: auto;
          }
          #out1{
             display: none;
            background-color: blue;
            color:white;
             height: auto;
             width: auto;
          }
      </style>
</head>

<body>
    <!--main -->
    <section id="main">
        <!-- navigation -->
        <nav>
            <a href="#" class="logo">ANNE'NEEBSY</a>
            <!-- Bar icon -->
            <div class="toggle"></div>
            <!-- menu -->
            <ul class="menu">
                <li><a href="#main" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact-form">Contact</a></li>
            </ul>
            <a href="#" class="lang">En</a>
        </nav>
        <div class="name">
            <p style="font-size:25px"><span>Hello,</span></p>
            <h1><span> I'm ANNE</span></h1>
            <div class="details">
                <span style="color:rgb(167, 39, 39)">i</span>
                <span><strong>D</strong></span>
                <span><strong>E</strong></span>
                <span><strong>S</strong></span>
                <span><strong>I</strong></span>
                <span><strong>G</strong></span>
                <span><strong>N</strong></span>
            </div>
            <a href="./pdf/AnneÁmedu_Resume.pdf" class="cv-btn" download>View Résumé</a>
        </div>
        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="arrow"></div>
    </section>
    <section id="about">
        <div class="about-text">
            <h1>About Me</h1>
            <h2>Product Designer</h2>
            <p>I started off as a designer after realizing the impact of the digital world in the agriculural economy.
                Having studied the concept of economics in Agriculture, capitalizing on digital marketing platforms
                and a great user experience fosters brand development.</p>
                <button>More details</button>
        </div>
        <div class="about-model">
            <img src="./pic/pot.png">
        </div>
    </section>
    <section id="services">
        <div class="s-heading">
            <h1>Services</h1>
            <p>Searching for design services? I'm at your service.</p>
        </div>
        <div class="s-b-container">
            <!-- box 1 -->
            <div class="s-box">
                <div class="s-b-img">
                    <div class="s-type">UI/UX Design</div>
                    <img src="./pic/stde.png" alt="">
                </div>
                <div class="s-b-text">
                    <a href="#"> Design is visible intelligence. I aim to make products desirable to users creating a great user experience
                        plays a pivotal role in business conversion and customer satisfaction. </a>
                </div>
            </div>
            <!-- box 2 -->
            <div class="s-box">
                <div class="s-b-img">
                    <div class="s-type">Branding</div>
                    <img src="./pic/Branding-Header-Mobile.png" alt="">
                </div>
                <div class="s-b-text">
                    <a href="#"> Your brand identity is important to you. I render brand identity services ranging from logo design to business card to
                        letterhead paper and a lot more. </a>
                </div>
            </div>
            <!-- box 3 -->
            <div class="s-box">
                <div class="s-b-img">
                    <div class="s-type">Graphic Design</div>
                    <img src="./pic/Scope-of-Graphic-Designing-in-Future-870x432.png" alt="">
                </div>
                <div class="s-b-text">
                    <a href="#"> For your visual communication and problem-solving through the use of typography, illustration,imagery, colours and iconography.
                                I design visual contents that inspire, inform a </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Portfolio section -->
    <section id="portfolio">
        <h1 class="p-heading">Portfolio</h1>
        <div class="p-b-container">
            <!-- Box 1 -->
            <div class="p-box">
                <div class="text-overlay">
                    <h1>Redrock Finance app</h1>
                    <p>The loan app was designed to simplify financial access to well-meaning Nigerians accross the 36 states.</p>
                </div>
                <img src="./pic/fig.png2.png" alt="portfolio">
            </div>
            <!-- Box 2 -->
            <div class="p-box">
                <div class="text-overlay">
                    <h1>Music app</h1>
                    <p> This app was designed for music lovers to have access to instrumentals.</p>
                </div>
                <img src="./pic/music.png" alt="portfolio">
            </div>
            <!-- Box 3 -->
            <div class="p-box">
                <div class="text-overlay">
                    <h1>UI/UX Mobile app</h1>
                    <p>Baby skin care</p>
                </div>
                <img src="./pic/seb.png" alt="portfolio">
            </div>
            <!-- Box 4 -->
            <div class="p-box">
                <div class="text-overlay">
                    <h1>Graphic Design</h1>
                    <p>imagery and colour play</p>
                </div>
                <img src="./pic/lex.png" alt="portfolio">
            </div>
            <!-- Box 5 -->
            <div class="p-box">
                <div class="text-overlay">
                    <h1>Website Design</h1>
                    <p>This was designed to bridge the gap between input suppliers and final consumers
                        in the value chain of agriculural products.</p>
                </div>
                <img src="./pic/agripx.png" alt="portfolio">
            </div>
            <!-- Box 6 -->
            <div class="p-box">
                <div class="text-overlay">
                    <h1>Landing page</h1>
                    <p>photography website</p>
                </div>
                <img src="./pic/photog.png" alt="portfolio">
            </div>
        </div>
    </section>
    <!-- Contact btn -->
    <section id="contact-btn">
        <h1>Do you have any project in mind? Contact me.</h1>
        <a href="#contact-form">Contact Me</a>
    </section>
    <!-- Contact-form -->
    <section id="contact-form">
      <form action="javascript:login();">
            <div id="process"> processing...!!!</div>
            <div id="out1"> </div>
            <div class="contact-left">
                <h1 class="c-l-heading"><font style="border-bottom:3px solid #1ed98b;">Contac</font>t Me</h1>
                <div class="f-name">
                    <font>Name</font>
                    <input type="text" name="name" id="name"  placeholder="Full Name" >
                </div>
                <!-- Email -->
                <div class="f-email">
                    <font>Email</font>
                    <input type="email"  name="email" id="email" placeholder="forexample@smail.com" >
                </div>
            </div>
            <div class="contact-right">
                <div class="message">
                    <font>Message</font>
                    <textarea name="msg" id="msg" row="5" cols="20" placeholder="Write Message..." ></textarea>
                </div>
                <!-- submit button -->
               <input type="submit" value="Submit" class="btnc">  
            </div>
        </form>
    </section>
<!-- jquery -->

<!-- For change bar icon to X -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('nav ul').toggleClass('active-menu')
        })
    })
</script>


</body>
</html>