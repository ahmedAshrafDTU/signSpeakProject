<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignSpeek</title>
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/media.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>
    <header class="head" id="head">
      <div class="logo">
          <a href="#"><span>Sign</span>Speak</a>
        </div>

      <nav class="nav1">
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="bx bx-menu"></i>
        </label>
        <ul class="links">
          <li><a href="#" id="a1" onclick="home()">Home</a></li>
          <li><a href="#sec2" id="a2" onclick="about()">Services</a></li>
          <li><a href="#" id="a5" onclick="services()">Translate</a></li>
          <li><a href="/chatbot/index.html" id="">Chatbot</a></li>
          <li><a href="#" id="a4" onclick="contact()">Contact Us</a></li>
        </ul>
      </nav>
    <div class="list">
        <a href="/login"
          ><button class="sign" id="signin">Sign In</button></a
        >
        <a href="/register"
          ><button class="sign" id="Signup">Sign Up</button></a
        >
      </div>
    </header>

    <section class="sec1">
      <div class="text">
        <span class="blur"></span>
        <span class="blur"></span>

        <div class="body-title">
          <!-- <img src="../logo1.png" alt=""> -->

          <span class="hi">Hi, There</span><br />
          This application aims<br />
          to enhance communication <br />
          between normal people and special needs <br /><span id="d"
            >(Deaf and Mute)</span
          >
        </div>
        <div class="assist">
          If you need help using the app, talk to the chatbot.
        </div>
        <div class="image">
          <img src="/img/upscalemedia-transformed.png" alt="" />
        </div>
        <div class="button">
          <a href="#">
            <button>
              Get Started
            </button>
          </a>
        </div>
      </div>
    </section>
<section class="sec2" id="sec2">
  <div class="container">
    <h1>Services</h1>
    <div class="all-card">
      <!-- Card 1 -->
      <div class="card">
        <div class="icon">
          <i class="fa-solid fa-globe"></i>
        </div>
        <h3>
          Translate <br />
          <span>Text <i class="fa-solid fa-arrow-right"></i> Sign</span>
        </h3>
        <div class="new-card">
          <i class="fa-solid fa-circle-dot"></i>
          Convert audio speech to sign language using a 3D model.
        </div>
        <a href="#"><button>Check</button></a>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <div class="icon">
            <i class="fa-solid fa-hands-asl-interpreting"></i>
        </div>
        <h3>
          Translate <br />
          <span>Sign <i class="fa-solid fa-arrow-right"></i> Text</span>
        </h3>
        <div class="new-card">
          <i class="fa-solid fa-circle-dot"></i>
          Analyze hand signals and convert them into written text or audio, facilitating communication with non-signers.
        </div>
        <a href="#"><button>Check</button></a>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <div class="icon">
          <i class="fa-brands fa-slack"></i>
        </div>
        <h3>ChatBot</h3>
        <div class="new-card">
          <i class="fa-solid fa-circle-dot"></i>
          An integrated chatbot to guide users and assist with understanding sign language.
        </div>
        <a href="#"><button>Check</button></a>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <div class="icon">
            <i class="fa-solid fa-language"></i>
        </div>
        <h3>
          Sign Language <br />
          Dictionary
        </h3>
        <div class="new-card">
          <i class="fa-solid fa-circle-dot"></i>
          Access a library of translated signs to learn and communicate more effectively.
        </div>
        <a href="#"><button>Check</button></a>
      </div>
    </div>
  </div>
</section>

    <section class="sec3">
      <img class="image-gradient" src="/img/gradient.png" alt="">
      <div class="layer-blur"></div>
      <main>
        <div class="content">
          <div class="tag-box">
            <div class="tag">Translate &wedbar;</div>
          </div>
          <h1>We are <br> here
            to help you</h1>
          <p class="description">
            Being different isn’t a weakness — <br> it’s a strength that helps us see life from a more beautiful perspective.          </p>
          <div class="buttons">
            <a href="http://localhost:3005/sign-kit/convert" class="btn-get-started">
              <div><span>
                <i class="fa-solid fa-globe"></i>
                  Text
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                  Sign</span
                >
              </div></a>
            <a href="#" class="btn-sign-main"><span>
              <i class="fa-solid fa-language"></i>
              Sign
              <span><i class="fa-solid fa-arrow-right"></i></span>
              Text</span></a>
          </div>
        </div>
      </main>
      <'<spline-viewer class="robot-3d-1" url="https://prod.spline.design/fXa0FXm76Z3Zl-vd/scene.splinecode"></spline-viewer>
    </section>

    <section class="sec4">
      <div class="layer-blur"></div>
      <div class="layer-blur"></div>

      <main>
        <div class="content">
          <div class="tag-box">
            <div class="tag">Dictionary &Wfr;</div>
          </div>
          <h1>Different, not less</h1>
          <p class="description">
            Being different isn’t a weakness — <br> it’s a strength that helps us see life from a more beautiful perspective.          </p>
          </p>
          <div class="buttons">

            <a href="#" class="btn-sign-main">
              <span><i class="fa-solid fa-hexagon-nodes"></i></span>
              Start learning</a>
          </div>
        </div>
      </main>
      <!-- <spline-viewer class="robot-3d-2" url="https://prod.spline.design/C-t82yr86uqOqiVC/scene.splinecode"></spline-viewer>     -->
      <div class="layer-blur-2"></div>
      <div class="layer-blur-2"></div>

    </section>
    <!-- <section class="chat">
      <div class="container">
        <img src="/img/chat-2.png" alt="">
        <div class="title">
          <h1>Chatbot</h1>
          <p>
            Our chatbot is designed to assist you in learning sign language and answering your questions. <br> It can help you understand the basics of sign language, <br> provide translations, and offer guidance on how to use our services effectively.
          </p>
          <a href="#"><button>Start Chatting</button></a>
        </div>
        <div class="image">
          <img src="/img/chat.png" alt="">
        </div>
      </div>
    </section> -->
    <section class="sec5">
      <h1>Contact <span>Us</span></h1>
      <div class="contact">
        <div class="social">
          <div class="address">
            <div id="i">
              <a href="https://www.google.com/maps/place/%D9%82%D8%B3%D9%85+%D8%A7%D9%84%D9%81%D9%8A%D9%88%D9%85%D8%8C+%D8%A3%D9%88%D9%84+%D8%A7%D9%84%D9%81%D9%8A%D9%88%D9%85%D8%8C+%D9%85%D8%AD%D8%A7%D9%81%D8%B8%D8%A9+%D8%A7%D9%84%D9%81%D9%8A%D9%88%D9%85%E2%80%AD/@29.3134729,30.8529795,13z/data=!3m1!4b1!4m6!3m5!1s0x145978ded6fa8625:0x3058877f13a61332!8m2!3d29.3152712!4d30.844152!16s%2Fg%2F1td22fdy?entry=ttu">
              <i class="fa-solid fa-location-dot"></i>
              </a>
            </div>
            <div class="info">
              <h3>Address</h3>
              <p>'Egypt,Fayoum'</p>
            </div>
          </div>
          <div class="mail">
            <div id="i">
              <a href="">
              <i class="fa-solid fa-envelope"></i>
              </a>
            </div>
            <div class="info">
              <h3>E-mail</h3>
              <p>signspeak@gmail.com</p>
            </div>
          </div>

          <div class="whats">
            <div id="i">
              <a href="tel: +201062166414" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
            </div>
            <div class="info">
              <h3>Whatsapp</h3>
              <p><span>+20</span>1062166414</p>
            </div>
          </div>
      </div>
      <div class="msg">
        <form action="#">
          <h2>Massage</h2>
          <div class="input-box">
            <input type="text" name="" id="">
            <span>Username</span>
            <input type="email" name="" id="">
            <span>E-mail</span>
            <textarea name="" id=""></textarea>
            <span>Your Massage...</span>
            <input type="submit" value="Send">
          </div>
        </form>
      </div>
      </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.js"></script>
    <script src="/Js/home.js"></script>
    <script src="/Js/header.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer"></script>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.82/build/spline-viewer.js"></script>
    <script src="/Js/chatbot.js"></script>
  </body>
</html>
