<?php
$err ="";
$ses = "";


if (isset($_POST['btn'])) {

$otp = rand(1111,9999);

$no = $_POST['num'];
if(preg_match("/^\d+\.?\d*$/",$no) && strlen($no)==10){

$fields = array(
"variables_values" => "$otp",
"route" => "otp",
"numbers" => "$no",
);

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_SSL_VERIFYHOST => 0,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => json_encode($fields),
CURLOPT_HTTPHEADER => array(
"authorization: your_api_key",
"accept: */*",
"cache-control: no-cache",
"content-type: application/json"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
} else {
$data = json_decode($response);
$sts = $data->return;
if ($sts == false) {
$err = "Otp Not Send";
}else{
$ses = "Your OTP is send";
}
}


}else{
$err = "Invalied Mobile Number";
}

}

?>



<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Dhurva Club</title>
  <link rel="stylesheet" href="dhurva.css" />
  <head>
    <body>
      <header>
        <a href="#" class="logo">Nit Hamirpur<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
          <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
          <li><a href="#about" onclick="toggleMenu();">About</a></li>
          <li><a href="#activities" onclick="toggleMenu();">Activities</a></li>
          <li><a href="#mentor" onclick="toggleMenu();">Mentor</a></li>
          <li>
            <a href="#testimonials" onclick="toggleMenu();">Testimonials</a>
          </li>
          <li><a href="#contact" onclick="toggleMenu();">Join Us</a></li>
        </ul>
      </header>
      <section class="banner" id="banner">
        <div class="content">
          <a href="#" class="ourobjective">Our Objectives</a>
        </div>
      </section>
      <section class="about" id="about">
        <div class="row">
          <div class="col50">
            <h2 class="titleText"><span>A</span>bout Us</h2>

            <h5>
              DHRUVA is an active social service club working towards
              enlightenment & empowerment of youth of India. DHRUVA stands for
              its motto of Blending Character Competence for individual and
              collective growth.<br /><br />To help new generation to imbibe
              character and competence for their bright future.To make the
              students to participate in the development of the institute and
              develop their career, personality and to expand horizon and
              inculcate the habit of thinking out of box amongst students with
              respect to designing their cultural activities.
            </h5>
          </div>
          <div class="col50">
            <div class="imgBx">
              <img src="succes.jpg" />
            </div>
          </div>
        </div>
      </section>

      <section class="activities" id="activities">
        <div class="title">
          <h2 class="titleText">Our<span>A</span>ctivities</h2>
          <h5>Events</h5>
        </div>
        <div class="content">
          <div class="box">
            <div class="imgBx"><img src="nischal sir.jpg" /></div>
            <div class="text">
              <h3>Special Sessions</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx"><img src="dr mohit.jpg" /></div>
            <div class="text">
              <h3>Special Sessions</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx"><img src="gs-1.jpeg" /></div>
            <div class="text">
              <h3>Bhagwat-Geeta Classes</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx"><img src="renc.jpeg" /></div>
            <div class="text">
              <h3>Certification</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx"><img src="Renince.jpg" /></div>
            <div class="text">
              <h3>Renasissance</h3>
            </div>
          </div>
          <div class="box">
            <div class="imgBx"><img src="group rennc.jpg" /></div>
            <div class="text">
              <h3>Renasissance</h3>
            </div>
          </div>
        </div>
        <div class="title"><a href="#" class="btn">View All</a></div>
      </section>
      <section class="mentor" id="mentor">
        <div class="title">
          <h2 class="titleText">Our<span>M</span>entor</h2>
          <h6>Mentor is must!!</h6>
        </div>
        <div class="content">
          <div class="box">
            <div class="imgBx">
              <img src="exprt2.jpg" />
            </div>
            <div class="text">
              <h3>Mr. Diwakar Mourya</h3>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials" id="testimonials">
        <div class="title white">
          <h2 class="titleText">They<span>S</span>aid About Us</h2>
          <h6>Testimonials</h6>
        </div>
        <div class="content">
          <div class="box">
            <div class="imgBx"><img src="sachin sir.png" /></div>
            <div class="text">
              <h5>
                Heartfelt Gratitude Lyn for your support and valuable Coaching.
                At a time when we are all experiencing the impact and ripple
                effect of Change and uncertainty, it’s been so important to seek
                help in staying grounded, rising strong, and finding Clarity and
                focus whilst moving forward. The Coaching/Counselling Modality
                is crucial for our Physical, Mental, Emotional and Spiritual
                Wellness. Thank You. l feel honoured and fortunate to share my
                Be ing with You. With Love & Gratitude.
              </h5>
              <h3>Sachin Jaat</h3>
              <h6>Intern at Unreal AI</h6>
            </div>
          </div>
          <div class="box">
            <div class="imgBx"><img src="manishpr.png" /></div>
            <div class="text">
              <h5>
                Heartfelt Gratitude Lyn for your support and valuable Coaching.
                At a time when we are all experiencing the impact and ripple
                effect of Change and uncertainty, it’s been so important to seek
                help in staying grounded, rising strong, and finding Clarity and
                focus whilst moving forward. The Coaching/Counselling Modality
                is crucial for our Physical, Mental, Emotional and Spiritual
                Wellness. Thank You. l feel honoured and fortunate to share my
                Be ing with You. With Love & Gratitude.
              </h5>
              <h3>Manish Kumar</h3>
              <h6>Intern at Unreal AI</h6>
            </div>
          </div>
          <div class="box">
            <div class="imgBx"><img src="sha2nkpr.jpg" /></div>
            <div class="text">
              <h5>
                Heartfelt Gratitude Lyn for your support and valuable Coaching.
                At a time when we are all experiencing the impact and ripple
                effect of Change and uncertainty, it’s been so important to seek
                help in staying grounded, rising strong, and finding Clarity and
                focus whilst moving forward. The Coaching/Counselling Modality
                is crucial for our Physical, Mental, Emotional and Spiritual
                Wellness. Thank You. l feel honoured and fortunate to share my
                Be ing with You. With Love & Gratitude.
              </h5>
              <h3>Shashank Sharma</h3>
              <h6>Intern at Unreal AI</h6>
            </div>
          </div>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="title">
          <h2 class="titleText"><span>J</span>oin Us</h2>
          <h6>Don't Hesitate</h6>
        </div>
        <ul class="sci">
          <li>
            <a
              href="https://www.instagram.com/dhruvaclub/?hl=en"
              target="_blank"
              ><img class="socialM" src="instagram.png" />
            </a>
          </li>
          <li>
            <a
              href="https://www.facebook.com/DhruvaClubOfficial/"
              target="_blank"
              ><img class="socialM" src="facebook.png"
            /></a>
          </li>
        </ul>
        <div class="contactForm">
          <!-- <h3>To Join Us</h3> -->
          <div class="inputBox">
            <input type="text" placeholder="Name" />
          </div>
          <div class="inputBox">
            <input type="text" placeholder="E-mail" />
          </div>
          <div class="inputBox">
            <form action="" method="post">
            <input type="text" placeholder="Whatsapp Number" name="num"/>
          </div>
          <div class="inputBox1">
            <input type="submit" class="btn btn-primary" value="Send OTP" name="btn" />
          </div>
          <div class="inputBox">
            <input type="text" placeholder="Enter OTP" />
          </div>

          <!-- <div class="inputBox">
            <textarea placeholder="Message"></textarea>
          </div> -->
          <div class="inputBox">
            <input type="submit" value="Submit" />
          </div>
        </div>
      </section>
      <div class="copyrightText">
        <h5>
          Copyright 2022 <a href="#"> Dhurva Club </a>. All Right Reserved
        </h5>
      </div>
      <script type="text/javascript">
        window.addEventListener('scroll', function () {
          const header = document.querySelector('header');
          header.classList.toggle('sticky', window.scrollY > 0);
        });

        function toggleMenu() {
          const menuToggle = document.querySelector('.menuToggle');
          const navigation = document.querySelector('.navigation');
          menuToggle.classList.toggle('active');
          navigation.classList.toggle('active');
        }
      </script>
    </body>
  </head>
</html>
