<?php
define('PAGE','home');
$metadescription = "Freelancers based in Paris. We create and develop unique websites. Specialized in web design, re-design, integration and web development. We offer SEO and content management solutions for websites.";
$metatitle = "Krm-web The digital team | Website creation, Web design and development";
$metarobots = "index, follow"
?>

<?php include 'includes/header.php'; ?>
<?php include_once("includes/analyticstracking.php") ?>

 <div class="page-wrapper">
  <header id="header">
  <div class="wave header-background"></div>
  <div class="wave2 header-background"></div>
  <div class="wave3 header-background"></div>
    <nav class="clearfix">
      <a href="#" class="logo" title="Krm web">
      <picture>
          <source media="(max-width: 768px)" srcset="img/logo-krm-mobile.svg">
          <img id="logo-krm" src="img/logo-krm.svg" alt="logo krm-web">
        </picture></a>
      <div class="menu-trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu">
        <a class="logo" href="index.php">
        <picture>
          <source media="(max-width: 768px)" srcset="img/logo-krm-mobile.svg">
          <img id="logo-krm" class="center-block" src="img/logo-krm.svg" alt="logo krm-web">
        </picture>

        </a>
        <ul>
          <li class="menu-item"><a href="#about">About</a></li>
          <li class="menu-item"><a href="#we-do">What we do</a></li>
          <li class="menu-item"><a href="#work">Our work</a></li>
          <li class="menu-item"><a href="#contact">Contact us</a></li>
        </ul>
      </div>

    </nav>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-8 col-md-10">
          <span class="element"></span>
          <div id="typed-strings">
            <p>KRM WEB IS A <span>DIGITAL TEAM</span></p>
            <p>KRM WEB IS <span>A</span> DEDICADED & <span>PASSIONATED</span> DIGITAL <span>TEAM SPECIALISED IN WEB</span> PROJECTS</p>
          </div>
          <p id="typed" class="main-title" ></p>
          <h1 class="mobile">KRM WEB IS <span>A</span> DEDICADED & <span>PASSIONATED</span> DIGITAL <span>TEAM SPECIALISED IN WEB</span> PROJECTS</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-2">
        <p class="intro-text wow">hello worlWe are not another web agency ... We are a team of <strong>professional web designers and web developers based in paris</strong>, involved in the <strong>web community</strong>. We offer our services not only to companies but also to startups. We believe that the web is an efficient communication solution and we invision your website as the rocket to achieve your goals. Do not wait any longer and get to know us !</p>
        </div>
      </div>
      <img class="center-block line" src="img/vertical-line.svg">
    </div>
  </header>
  <main>

  <div class="about" id="scrollax">
    <div class="side-text" data-enllax-ratio="-.1" data-enllax-type="foreground" data-enllax-direction="vertical">
    <p>We are thinkers</p>
    </div>
    <div class="container-fluid" id="about">
      <div class="row">
        <div class="col-text col-md-4 col-md-offset-1" id="scrollax">
          <h2 class="wow fadeIn">About</h2>
          <img src="img/about-bck.png" class="about-bck img-responsive" data-enllax-ratio="0.2" data-enllax-type="foreground" data-enllax-direction="horizontal">
          <p class="text-right wow fadeIn">Krm-web, is two freelancers, Juline and Kristopher, with a strong and diverse professional background, but above all, it is a team that works every day towards proposing the best solutions and staying relevant within the professional stage. We make it a point of honor to always take a step back on our work aiming to go further in our achievements. Our availability and our determination make krm-web a solid and open-minded partnership.</p>
          <p class="text-left wow fadeIn">We like to be aware of the latest news, and because we think that the exchange between professionals is important, we also regularly work on creating a <strong>community of professional web designers and web developers</strong> from around the world to discuss about the present and future of the industry.</p>
          <div class="hint wow fadeInLeftBig">
            <div class="rounded-ex"><a href="https://www.facebook.com/DEVToolsTips/" target="_blank"></a>
            </div>
            <a class="link" href="https://www.facebook.com/DEVToolsTips/" target="_blank" >Get to know the Dev:tools & tips community</a>
          </div>

        </div>
        <div class="col-md-4 col-md-offset-3">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 767 634.13">
            <defs></defs>
            <title>imac</title>
          <path class="cls-1 ecran" d="M768,534.32H42.82a20.46,20.46,0,0,1-20.4-20.4V28.83a20.46,20.46,0,0,1,20.4-20.4H768a20.46,20.46,0,0,1,20.4,20.4v485.1A20.46,20.46,0,0,1,768,534.32Zm-745.6-69h766" transform="translate(-21.92 -7.93)"/>
          <path class="cls-1 intern" d="M760.23,37.59H51.58V436.14H760.23Z" transform="translate(-21.92 -7.93)"/>
          <path class="cls-1 pied" d="M332.14,534.32l-9.19,76a5.1,5.1,0,0,1-1.46,3L302,632.85a5.1,5.1,0,0,0,3.47,8.7l102.83-.3,97.09.3a5.1,5.1,0,0,0,3.47-8.7l-19.52-19.52a5.1,5.1,0,0,1-1.46-3l-9.19-76" transform="translate(-21.92 -7.93)"/>
          </svg>
          <div class="quote" id="scrollax">
            <p class="text-left wow fadeIn">Teamwork is the secret that makes common people achieve uncommon results.</p>
            <p class="text-left wow fadeInUp">Ifeanyi Onuoha, author & entreprenor</p>
            <img src="img/quote.png" data-enllax-ratio="0.2" data-enllax-type="foreground" data-enllax-direction="vertical">
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="gradient-bg">
    <div class="we-do" id="we-do">
    <div class="side-text" data-enllax-ratio="-.1" data-enllax-type="foreground" data-enllax-direction="vertical">
    <p>expert mode : on</p>
    </div>

      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 col-md-4 col-md-push-8" id="scrollax">
            <h2 class="text-center wow fadeIn">What we do</h2>
            <img src="img/whatwedo-bck.png" class="whatwedo-bck img-responsive" data-enllax-ratio="0.1" data-enllax-type="foreground" data-enllax-direction="horizontal">

          </div>
          <div class="col-sm-6 col-md-3 col-md-pull-4">
            <span class="wow fadeIn">01</span>
            <h3 class="wow fadeIn wow fadeIn">Strategy</h3>
            <p class="text-left wow fadeInUp">Based on your objectives, we set a custom <strong>strategic plan,</strong> starting from <strong>design,</strong> including <strong>UI/UX</strong> all the way to the production of the website, by choosing the best <strong>integration and development solutions</strong> without forgetting <strong>SEO and webmarketing.</strong></p>
          </div>
          <div class="col-sm-6 col-md-3 col-md-offset-2 col-md-pull-4">
            <span class="wow fadeIn" data-wow-delay="0.3s">02</span>
            <h3 class="wow fadeIn" data-wow-delay="0.3s">design</h3>
            <p class="text-left wow fadeInUp" data-wow-delay="0.3s">We like to tell stories with our designs and that is why our approach is to put ourselves in the users shoes. Our goal is to create the <strong>best user's experience</strong> possible through the "wow" effect.</p>
          </div>

        </div>
        <div class="row">
          <div class="col-sm-6 col-md-3 col-md-offset-3">
            <span class="wow fadeIn" data-wow-delay="0.6s">03</span>
            <h3 class="wow fadeIn" data-wow-delay="0.6s">web development</h3>
            <p class="text-left wow fadeInUp" data-wow-delay="0.6s"> We choose the tools we work with very carefully depending on your project. We make sure your website is built with the most <strong>efficient</strong>, <strong>performing</strong> and <strong>scalable</strong> technologies to achive your goals.</p>
          </div>
          <div class="col-sm-6 col-md-3 col-md-offset-2">
            <span class="wow fadeIn" data-wow-delay="0.9s">04</span>
            <h3 class="wow fadeIn" data-wow-delay="0.9s">maintenance</h3>
            <p class="text-left wow fadeInUp" data-wow-delay="0.9s"> To make our relationship a long lasting one, we also propose to our customers a <strong>technical maintenance care solution</strong> combine with <strong>content update</strong> on your website.</p>
          </div>

          <div class="hint wow fadeInLeftBig">
            <div class="rounded-ex"><a href="https://www.linkedin.com/in/juline-legué-09343b25" target="_blank"></a>
          </div>
          <a href="https://www.linkedin.com/in/juline-legué-09343b25" class="link">Read more about Juline's work</a>
          </div>
          <div class="hint second wow fadeInRightBig">
            <a href="https://www.linkedin.com/in/kristopher-recinos-5592b160/" class="link">Read more about Kristopher's skills</a>
            <div class="rounded-ex"><a href="https://www.linkedin.com/in/kristopher-recinos-5592b160/" target="_blank"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
    <img class="center-block line" src="img/vertical-line-white.svg">
    <div class="work" id="work">
     <div class="side-text" data-enllax-ratio="-.1" data-enllax-type="foreground" data-enllax-direction="vertical">
    <p>creative minds</p>
    </div>
      <div class="container-fluid">
        <div class="row" id="scrollax">
          <div class="col-md-12">
            <h2 class="text-center wow fadeIn">our work</h2>
            <img src="img/work-bck.png" class="work-bck img-responsive" data-enllax-ratio="-.2" data-enllax-type="foreground" data-enllax-direction="horizontal">
            <p class="text-center wow fadeInUp">We had the opportunity to work with companies from diverse fields.<br>We are thrill to present you some of our <strong>latest work !</strong></p>
            <img class="drag center-block wow bounceInRight" src="img/drag.svg">
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="slick" id="scrollax">
              <div class="slick-item wow fadeInUp" data-wow-delay="0.3s">
                <img data-lazy="img/cresus.jpg" class="img-responsive" alt="website Crésus Île-de-France Paris">
                <div class="caption">
                  <h4 class="text-center">Crésus</h4>
                  <p class="text-center">Website design & development</p>
                  <div class="center-block">
                    <span class="text-center"><a href="portfolio.php#firstPage" >see more</a></span>
                  </div>
                </div>
              </div>
              <div class="slick-item wow fadeInUp">
                <img data-lazy="img/linkky.jpg" class="img-responsive" alt="web app Linkky">
                <div class="caption">
                  <h4 class="text-center">linkky</h4>
                  <p class="text-center">integration for LINKKY web app</p>
                  <div class="center-block">
                    <span class="text-center"><a href="portfolio.php#firstPage/1" >see more</a></span>
                  </div>
                </div>
              </div>
              <div class="slick-item wow fadeInUp" data-wow-delay="0.6s">
                <img data-lazy="img/nhcs.jpg" class="img-responsive" alt="website Natural Horse Care solution">
                <div class="caption">
                  <h4 class="text-center">nhcs</h4>
                  <p class="text-center">Website design & development</p>
                  <div class="center-block">
                    <span class="text-center"><a href="portfolio.php#firstPage/2" >see more</a></span>
                  </div>
                </div>
              </div>
              <div class="slick-item wow fadeInUp">
                <img data-lazy="img/chatbot.jpg" class="img-responsive" alt="Chatbot krm-web">
                <div class="caption">
                  <h4 class="text-center">chatbot</h4>
                  <p class="text-center">Web app design</p>
                  <div class="center-block">
                    <span class="text-center"><a href="portfolio.php#firstPage/3" >see more</a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="contact" id="contact">
     <div class="side-text" data-enllax-ratio="-.1" data-enllax-type="foreground" data-enllax-direction="vertical">
    <p>say hi</p>
    </div>
      <div class="container-fluid">
        <div class="row" id="scrollax">
            <h2 class="text-center wow fadeIn">Let's keep in touch !</h2>
            <img src="img/contact-bck.png" class="contact-bck img-responsive" data-enllax-ratio="0.15" data-enllax-type="foreground" data-enllax-direction="horizontal">
        </div>
        <div class="row">
          <form id="contact-form" action="includes/contact.php" method="post">
            <div class="form-inline text-right">
              <div class="form-group">
                <label class="sr-only" for="fullnameInput">Fullname</label>
                <input type="text" class="form-control label_better name" id="fullnameInput" name="fullName" data-new-placeholder="Fullname" placeholder="Fullname">
              </div>
              <div class="form-group">
                <label class="sr-only" for="emailInput">Email Adress</label>
                <input type="email" class="form-control label_better email" id="emailInput" name="emailAdress" data-new-placeholder="Email Adress" placeholder="Email Adress">
              </div>
            </div>
            <div class="form-horizontal">
              <div class="form-group">
                <div class="col-md-12">
                  <label class="sr-only" for="messageInput">Your message</label>
                  <input type="text" class="form-control label_better message" id="messageInput" name="message" data-new-placeholder="Message" placeholder="Message">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <button type="submit" class="btn" name="submit">Send</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <p class="text-center copyright">&copy; All rigth reserved KRM-web 2017 - <a href="credits.php">Privacy policy</a></p>
    </div>


  </div>
</main>
</div>



<?php include 'includes/footer.php'; ?>
