<?php
  $con = mysqli_connect('localhost','root','','portfolio');
  if(isset($_POST['sub'])){
    $fname = $_POST['First_Name'];
    $lname = $_POST['Last_Name'];
    $email = $_POST['email'];
    $msg = $_POST['textarea'];

      $qr = mysqli_query($con,"insert into contact(F_name,L_name,email,msg) values ('$fname','$lname','$email','$msg')");
      if($qr){
          echo "<script>alert('submitted')</script>";
      }else{
          header('location:punit.rf.gd');
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="cursor"></div>
    <div class="main">
      <div class="sidebar">
        <div class="info">  
          <div class="home">
           <div> <a href="#about-me"><i class='bx bx-home-alt-2'></i></a> <p>Home</p>
           </div>
           <div> <a href="#skills"><i class='bx bx-code-curly' ></i></a> <p>Skills</p>
           </div>
           <div> <a href="#div4"><i class='bx bxs-chalkboard' ></i></a> <p>FeedBacks</p>
           </div>


          </div>
          <h1>SOCIALS</h1>
          <div class="social">
            <div href=""> <a href="https://github.com/thepunitcoder" target="_blank"><i class='bx bxl-github' ></i></a> <p>Github</p>
            </div>
            <div> <a href="https://www.upwork.com/freelancers/~013608acb2b8d9b39c?mp_source=share" target ="_blank"><i class='bx bxl-upwork' ></i></a> <p>UpWork</p>
            </div>
            <div> <a href=""><i class='bx bxl-instagram' ></i></a> <p>Instagram</p>
            </div>
            <div> <a href="https://www.linkedin.com/in/punit-b191a32ab/" target ="_blank"><i class='bx bxl-linkedin' ></i></a> <p>Linkedin</p>
            </div>
            <div> <a href=""><i class='bx bxl-youtube' ></i></a><p>Youtube  </p>
            </div>
            
          </div>
        </div>
      </div>

        <div class="div1">
          <div class="menu">
            <i class='bx bx-menu'></i>
          </div>
          <div class="header">
            <div class="head">
              <div class="logo">
                <img src="./my logo (2).png" alt="" />
                <h1>
                  Punit <br />
                  @Full Stack-Developer
                </h1>
              </div>
    
              <div class="header-linked">
                <i class="bx bxl-linkedin-square"></i>
                <a href="">Folow me on Linkedin</a>
              </div>
            </div>
          </div>

          <div class="about-me" id="about-me">
            <div class="about">
              <span class="points">ABOUT ME</span>
            </div>
            <div class="myinfo">
              Experienced UI/UX Design, Web Developer with a demonstrated history
              of working in the education and IT industry. Skilled in web
              designing and back-end logics, Educational Technology, Instructional
              Design, Web Development, and Teacher Training. Strong media and
              communication professional with a BCA - Bachelor of Computer
              Applications from Indra Gandhi Open University.
            </div>
          </div>
          <div class="div2">
            <div class="projects">
              <span class="points">PROJECTS</span>
              <div class="cards">
                <div class="card">
                  <div class="card2">
                    <div class="card-content image1"></div>
                    <div class="content">
                      <h1>Discord</h1>
                      <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Sint, delectus.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card2">
                    <div class="card-content image2"></div>
                    <div class="content">
                      <h1>Spotify</h1>
                      <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Sint, delectus.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card2">
                    <div class="card-content image3"></div>
                    <div class="content">
                      <h1>Instagram</h1>
                      <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Sint, delectus.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card2">
                    <div class="card-content image4"></div>
                    <div class="content">
                      <h1>Ecommerse App</h1>
                      <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Sint, delectus.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="div3" id="skills">
            <span class="points">What i Know</span>
          <div class="skills">
             <div>
              <span class="border-red-500">Html</span>
              <span>React.Js</span>
              <span>CSS</span>
              <span class="border-green-500">Bootstrap</span>
              <span>JavaScript</span>
              <span class="border-cyan-400">TailwindCSS</span>
            </div>  

            <div>
              <span class="border-cyan-500">PHP</span>
              <span>Python</span>
              <span>Node.Js</span>
              <span>C++</span>
              <span>Express.Js</span>
            </div>
            <div>
              <span>SQL</span>
              <span>MySQL</span>
              <span>Node.Js</span>
              
            </div>
            <div>
              <span>Adobe XD</span>
              <span>Figma</span>
              <span>Photoshop</span>
            
            </div>
          </div>
          </div>
          <div class="div4" id="div4">
            <span class="points">Feedbacks</span>
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php
              $fetxh = mysqli_query($con,'select * from contact');

              while($exe = mysqli_fetch_array($fetxh)){
            ?>
            <div class="swiper-slide">
              <a><?php echo $exe['F_name']?></a>
              <p>
                <?php echo $exe['msg']?>
              </p>
            </div>
            <?php
              }
            ?>
        
              </div>
          </div>

          </div>

          <div class="div5">
            <span class="points">Contacts</span>
            <div class="form-container">
              <form class="form" method="POST" action="">
                <div class="form-group">
                  <input type="text" placeholder="First_Name" name="First_Name" class="name">
                  <input type="text" placeholder="Last_Name" name="Last_Name" class="name">
                </div>
                 <div class="form-group">
                  <label for="email">Company Email</label>
                  <input type="text" id="email" name="email" required="">
                 </div>
                <div class="form-group">
                  <label for="textarea">How Can We Help You?</label>
                  <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
                </div>
                <input type="submit" name="sub" class="form-submit-btn" />
              </form>
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
