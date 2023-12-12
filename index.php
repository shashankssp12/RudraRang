<?php
$conn = new mysqli("localhost","root","","new");

// Check connection
// if ($conn) {
//   echo "success";
  
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolute</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <header class="header">
        <div class="logo">GLA Events</div>
        <nav class="navigation" id="navigation">
            <section class="navigation__icon" id="navigation__icon">
                <span class="topBar"></span>
                <span class="middleBar"></span>
                <span class="bottomBar"></span>
            </section>
            <ul class="navigation__ul">
                <li><a href="">HOME</a></li>
                <li><a href="">GALLERY</a></li>
                <li><a href="">TEAM</a></li>
                <li><a href="">CLIENT</a></li>
                <li><a href="loginMain.html" target="_blank">LOGIN</a></li>
            </ul>
        </nav>
        <video width="500" height="100vh" autoplay muted loop>
            <source src="Intro.mp4" type="video/mp4">
        </video>
        <div class="textAni">
            One Place For Everything
        </div>
    </header>
    <section class="sliderBox">
        <h1>Ongoing and Upcoming Events</h1>

        <!-- <div class="wave">
            <img src="up.png" class="up" alt="up">
            <img src="down.png" class="down" alt="down">
        </div> -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/00006955.jpg" alt="img1">
                </div>
                <div class="swiper-slide">
                    <img src="images/audience-g2b85bb3a5_1920.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/ticket-g14cad16f4_1920.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/WhatsApp Image 2023-04-07 at 02.09.58.jpg" alt="">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <h1 class="tagline">Get Yourself Register</h1>
    <div class="container" id="new">
    <?php

        $sql="SELECT * FROM event;";
        $res=mysqli_query($conn,$sql);
        $check=mysqli_num_rows($res);


        if($check>0){
            while($row=mysqli_fetch_assoc($res)){?>
              <div class="card">
              <div class="imgBox">
                  <img src="images/ticket-g14cad16f4_1920.jpg" alt="img">
                  <div class="date">
                      <span><?php 
                      $date = (string)$row['date'];
                      echo substr($date,5,2); 
                      $time=strtotime($row['date']);
                      $month=date("F",$time);
                       ?></span>
                      <span><?php echo $month; ?></span>
                  </div>
              </div>
              <div class="content">
                  <div class="title"><?php echo $row['evena']; ?></div>
                  <div class="subtitle"> <?php echo $row['tic_pr']; ?> </div>
                  <div class="details">
                    <div>

                        <img src="images/time.png" class="locat" alt="time">
                        <?php echo $row['date']; ?>
                    </div>
                        <div>
                            <img src="images/ffi.png" class="locat" alt="venue">GLA University, Mathura
                        </div>                      
                  </div>
                  <button class="btn">Tickets & Details</button>
              </div>
          </div>
           <?php }
        }
?>
    </div>
    
    <div class="clubs">
        <div class="head">Our Popular Clubs</div>
        <div class="design">
            <div class="club">
                <div class="name">DedSec</div>
                <div class="tag">Welcome to Our Universe</div>
                <div class="data">The main objective of our club is to create a strong pragmatic environment where
                    the students are made aware of real-life scenarios and have hands-on practice in creating models and
                    deploying them in the technical industry.

                    Another outlook is through research and projects where the students can form groups, divide
                    responsibilities and assemble to solve real-life problems. These research papers if approved would
                    be rewarded with funding and patents.</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">NINAD MUSIC CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">NINAD - the music hub of GLA University is a place where passionate music lovers
                    find their home. Music explains and connects people when words fail to do so. After a long day of
                    studies and other academic activities, music is the best therapy that rejuvenates the soul. This
                    isnt just a club, this is more like a family of music lovers who stay committed towards their
                    passion for music which reflects in our stage performances, practice sessions, workshops, etc.</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">DedSec</div>
                <div class="tag">Welcome to Our Universe</div>
                <div class="data">The main objective of our club is to create a strong pragmatic environment where
                    the students are made aware of real-life scenarios and have hands-on practice in creating models and
                    deploying them in the technical industry.

                    Another outlook is through research and projects where the students can form groups, divide
                    responsibilities and assemble to solve real-life problems. These research papers if approved would
                    be rewarded with funding and patents.</div>
                <div class="readMore">Explore</div>
            </div>
            <div class="club">
                <div class="name">NINAD MUSIC CLUB</div>
                <div class="tag">Feel the Dance</div>
                <div class="data">NINAD - the music hub of GLA University is a place where passionate music lovers
                    find their home. Music explains and connects people when words fail to do so. After a long day of
                    studies and other academic activities, music is the best therapy that rejuvenates the soul. This
                    isnt just a club, this is more like a family of music lovers who stay committed towards their
                    passion for music which reflects in our stage performances, practice sessions, workshops, etc.</div>
                <div class="readMore">Explore</div>
            </div>
        </div>
    </div>
        <button class="leave" id="leave">
            Apply for
            <br>
            Leave
        </button>
    <div class="formPop show" id="formPop">
        <div class="classPop show" id="classPop">
            <h3>Select Your Subject Code:</h3>
            <fieldset>
                <legend>Choose your Subject Code</legend>
                <div>
                  <input type="checkbox" id="BCSG002" name="subCode" value="BCSG002" />
                  <label for="coding">BCSG002</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG001" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG003" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG004" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                <div>
                  <input type="checkbox" id="BCSG005" name="subCode" value="BCSG001" />
                  <label for="music">BCSG001</label>
                </div>
                    <div>
                    <input type="checkbox" id="BCSG007" name="subCode" value="BCSG001" />
                    <label for="music">BCSG001</label>
                    </div>
              </fieldset>
        </div>
        <div class="form">
            <!-- <div class="formTitle">Apply For Leave</div>
            <div class="formSubtitle">Enter your details</div> -->
            <div class="input-container ic1">
                <select id="event" name="event" class="sel">
                    <option disabled selected value="">Select an Option</option>
                    <option value="Event#1">New Event</option>
                    <option value="Event#2">Event</option>
                    <option value="Event#3">Event</option>
                    <option value="Event#4">Event</option>
                    <option value="Event#5">Event</option>
                </select>
                <div class="cut"></div>
            </div>
            <div class="input-container ic1">
                <input id="ticketId" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="ticketId" class="placeholder">Ticket Id</label>
            </div>
            <div class="input-container ic2">
                <input id="name" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="name" class="placeholder">Name</label>
            </div>
            <div class="input-container ic2">
                <input id="rollno" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="rollno" class="placeholder">University Roll No</label>
            </div>
            <div class="input-container ic1">
                <input id="firstname" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">Section</label>
            </div>
            <div class="input-container ic1">
                <input id="date" class="input" disabled type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="date" class="placeholder">Date</label>
            </div>
            <div class="input-container ic1">
                <input id="time" class="input" disabled type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="time" class="placeholder">Timing</label>
            </div>
            <div class="input-container ic1">
                <div id="sel" class="sel">Select Classes</div>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="ticket" class="placeholder">Attendance Percentange</label>
            </div>
            <button type="text" class="submit">Submit</button>
        </div>
    </div>


    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>