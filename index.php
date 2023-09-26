<?php
include('structure/header.php');
include('structure/nav.php');
?>
  <main id="main">

    <!-- ======= Why Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reasons for current project setup</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12">
            <p>
              My reasons for choosing this framework, programming language, etc.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Most popular in the market, therefore most documentation and additional info, most free integrations such as direct selenium webdriver, slack support,
               able to add any paid integrations such as browserstack in case in the future some test might wanted to be run on number of different devices and browsers</li>
              <li><i class="ri-check-double-line"></i>Javascript is easier to understand for beginners compared to Java selenium implementation</li>
              <li><i class="ri-check-double-line"></i>After going through even javascript basics easily readable and understandable code without additional unnecessary information</li>
              <li><i class="ri-check-double-line"></i>Differently from other frameworks mocha auto clears previous auto input values which throughout bigger project would save bunch of lines of code</li>
              <li><i class="ri-check-double-line"></i>Support for various types of selectors which can be widely used to catch elements without classes, ids or some very unique elements</li>
              <li><i class="ri-check-double-line"></i>Able to auto add multiple elements with same selectors to an array and select any element without additional functions</li>
              <li><i class="ri-check-double-line"></i>Since it is js based simplified modals and iframes selection</li>
              <li><i class="ri-check-double-line"></i>Easy to run on all browsers, update all libraries</li>
            </ul>
          </div>

          <!-- <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Google bard reasons for mocha
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>POM and OOP to separate everything by models or even environments if we will decide to go with testing and staging and in the future code and tests are easily readable</li>
              <li><i class="ri-check-double-line"></i>Additional autocompletion dependencies installed for auto complete in any editor which additionally gives selection of all available methods</li>
              <li><i class="ri-check-double-line"></i>Increased timeout in addition for test not to timeout cause of some internet lag or similar issues</li>
              <li><i class="ri-check-double-line"></i>Integrated additional assertions for easy additional tests result checking</li>
              <li><i class="ri-check-double-line"></i>Written first functions that I assume will be needed constantly in order to simplify code in the future</li>
              <li><i class="ri-check-double-line"></i>Added info file (spera) there info for new users would be displayed in order to save search time while thinking about what function to use, data format and so on.</li>
              <li><i class="ri-check-double-line"></i>Created a github repo for info file in case anyone wants to add info and have it on the internet as a site. Later on I guess would be smart to move too google docs or sheets https://vaidasgoramp.github.io/</li>
              <li><i class="ri-check-double-line"></i>Chosen first and easiest test as an example and commented some of core parts so it would be understandable for any user who is new to a project (commented Login test)</li>
              <li><i class="ri-check-double-line"></i>According to webdriver.io documentation in the newest webdriver.io version it’s safer to have one main object which initializes the browser object and other classes extends the page. Similar structure what would be typically used in Java language.</li>
            </ul>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div> -->
        </div>
      </div>
    </section>
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Google bard reasons for mocha</strong></h3>
            </div>
            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Mocha is simpler to use.<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Cucumber is a BDD framework, while Mocha is a unit testing framework. This means that Cucumber is more complex and has a steeper learning curve. On the other hand, Mocha is much simpler and easier to get started with.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>Mocha is more flexible<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Mocha can be used to test any type of JavaScript code, including unit tests, integration tests, and end-to-end tests. Cucumber is primarily designed for BDD testing, which can limit its flexibility.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Mocha is more extensible.<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Mocha has a rich ecosystem of plugins and extensions, which makes it easy to customize for your specific needs. Cucumber does not have as extensive an ecosystem, which can make it more difficult to customize.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span>Mocha is more performant.<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Mocha is generally faster than Cucumber, especially when running large suites of tests. This is because Mocha does not have the overhead of parsing and executing Gherkin feature files.
                    </p>
                  </div>
                </li><li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span>Mocha has a larger community.<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Mocha is a more popular JavaScript testing framework than Cucumber. This means that there is a larger community of users and developers who can provide support and assistance.
                    </p>
                  </div>
                </li>
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Done Section ======= -->
    <section id="done" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Already implemented in current version</h2>
        </div>
        <div class="row content">
          <div class="col-lg-12">
            <p>
              Already implemented
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>POM and OOP to separate everything by models or even environments if we will decide to go with testing and staging and in the future code and tests are easily readable</li>
              <li><i class="ri-check-double-line"></i>Additional autocompletion dependencies installed for auto complete in any editor which additionally gives selection of all available methods</li>
              <li><i class="ri-check-double-line"></i>Increased timeout in addition for test not to timeout cause of some internet lag or similar issues</li>
              <li><i class="ri-check-double-line"></i>Integrated additional assertions for easy additional tests result checking</li>
              <li><i class="ri-check-double-line"></i>Written first functions that I assume will be needed constantly in order to simplify code in the future</li>
              <li><i class="ri-check-double-line"></i>Added info file (spera) there info for new users would be displayed in order to save search time while thinking about what function to use, data format and so on.</li>
              <li><i class="ri-check-double-line"></i>Created a github repo for info file in case anyone wants to add info and have it on the internet as a site. Later on I will be moved too google docs & sheets mix https://vaidasgoramp.github.io/</li>
              <li><i class="ri-check-double-line"></i>Chosen first and easiest test as an example and commented some of core parts so it would be understandable for any user who is new to a project (commented Login test)</li>
              <li><i class="ri-check-double-line"></i>According to webdriver.io documentation in the newest webdriver.io version it’s safer to have one main object which initializes the browser object and other classes extends the page. So implemented this structure which is more similar to Java selenium.</li>
            </ul>
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Done Section -->

    <!-- ======= Tips Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cheat sheat</h2>
          <p>Main info to check to get you going as soon as possible</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <!-- <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div> -->
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="functions.php" target="_blank">Functions</a></h4>
              <p>Predifiend custom functions with assertions to make testing even quicker</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="runner.php" target="_blank">Runner</a></h4>
              <p>List of lines to run the tests you actually want</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <!-- <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Tips Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Collaborators</h2>
          <p>It's so empty right now, make commits, add your info here :) Not sure how to start, just ask.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vaidas Pocius</h4>
                <span>QA</span>
                <!-- <p></p> -->
                <div class="social">
                  <a href="https://www.facebook.com/vaidas.pocius.1/" target="_blank"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.linkedin.com/in/vaidas-pocius/" target="_blank"> <i class="ri-linkedin-box-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>??</h4>
                <!-- <span>??</span> -->
                <!-- <p>Aut maiores voluptates amet et quis praesentium qui senda para</p> -->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>??</h4>
                <!-- <span>??</span> -->
                <!-- <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p> -->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>??</h4>
                <!-- <span>??</span> -->
                <!-- <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p> -->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Team Section -->

    <div class="container footer-bottom">
      <!-- <div class="copyright">
        Creator <strong><span>Vaidas</span></strong>.
      </div>
      <div class="credits">
      </div>
    </div> -->
  </footer><!-- End Footer -->

  </main><!-- End #main -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include('structure/footer.php');?>
