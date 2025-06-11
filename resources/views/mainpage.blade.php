@extends('master.layout')
@section('content')


    <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container-fluid hero-container" data-aos="fade-up">
        <div class="row g-0 align-items-center">
          <div class="col-lg-6 content-col">
            <div class="content-wrapper">
              <div class="status-badge">Library Open</div>
              <h2>Unlock Wisdom, One Page at a Time</h2>
              <p>Discover a treasure trove of knowledge at Ikhwah Library. Immerse yourself in a transformative learning experience crafted with wisdom and wonder</p>

              <div class="opening-hours" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <span>Opening Hours: Mon-Fri 8am - 8pm, Sat 9am - 5pm</span>
              </div>

              <div class="social-links">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 swiper-col">
            <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 800,
                  "autoplay": {
                    "delay": 5000
                  },
                  "effect": "fade",
                  "slidesPerView": 1,
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/Book/blog-raising-readers-tips-for-parents-featured-image.webp" alt="Restaurant Ambience">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/Book/daria-nepriakhina-xY55bL5mZAM-unsplash-scaled.webp" alt="Signature Dish">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/Book/ghows-AR-a125d677-9c27-6d67-e053-0100007f063a-6064a438.webp" alt="Expert Chefs">
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content">
              <h3>Ikhwah Library History</h3>
              <p class="fst-italic">A center for knowledge, learning, and community engagement.</p>
              <p>The vision of Ikhwah Library began in 2015 with a simple dream: to create a sanctuary of learning where minds could flourish and wisdom could be shared. What started as an ambitious project on empty land soon became a beacon of hope for our community, with construction commencing through careful planning and unwavering dedication. For two years, we meticulously crafted every corner while simultaneously embarking on a fundraising journey, gathering support from generous donors who believed in the transformative power of knowledge. The community rallied behind our cause, contributing not just financially but with their time, expertise, and encouragement as local architects donated skills and families pledged their support. In 2019, Ikhwah Library opened its doors as a testament to collective effort and shared dreams. Today, it serves as more than just a repository of books; it is a thriving hub where students find academic support, families discover the joy of reading together, and individuals embark on personal journeys of intellectual exploration and spiritual growth</p>

              <div class="chef-signature mt-4">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/person/Librarian_-_teaser4-opt.webp" class="chef-avatar rounded-circle" alt="Chef Portrait">
                  </div>
                  <div class="col">
                    <p class="chef-message mb-2">""Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers."</p>
                    <p class="chef-name">Head Librarian</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="about-image-wrapper">
              <img src="assets/img/Book/a20230612062101.webp" class="img-fluid main-image shadow" alt="Reading Books">
              <img src="assets/img/Book/KABK_Library2.webp" class="img-fluid accent-image shadow" alt="Reading Books">
              <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2015</span>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 features-section">
          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-book"></i>
              </div>
              <h4>Extensive Collection</h4>
              <p>Over 50,000 books across various genres and subjects for all age groups.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Community Hub</h4>
              <p>Regular events, workshops, and reading clubs for community engagement.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-laptop"></i>
              </div>
              <h4>Digital Resources</h4>
              <p>Access to e-books, online journals, and research databases.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-calendar-check"></i>
              </div>
              <h4>Online System</h4>
              <p>Manage your account, reserve books, and check due dates online.</p>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="stats-container">
              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="50000" data-purecounter-duration="0" class="purecounter">50000</span></span>
                <p class="stat-label">Books</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="0" class="purecounter">10000</span></span>
                <p class="stat-label">Members</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="0" class="purecounter">50</span></span>
                <p class="stat-label">Events Yearly</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">5</span></span>
                <p class="stat-label">Years Serving</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>Comprehensive library services to meet all your reading and learning needs</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-book-half"></i>
              </div>
              <h3>Book Borrowing</h3>
              <p>Borrow up to 5 books for 2 weeks with options to renew online. Manage your loans through your member dashboard.</p>
              <a href="#" class="read-more">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-calendar-check"></i>
              </div>
              <h3>Book Reservation</h3>
              <p>Reserve books that are currently checked out and get notified when they become available.</p>
              <a href="#" class="read-more">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-laptop"></i>
              </div>
              <h3>Digital Resources</h3>
              <p>Access our collection of e-books, audiobooks, and online research databases from anywhere.</p>
              <a href="#" class="read-more">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-people"></i>
              </div>
              <h3>Reading Programs</h3>
              <p>Join our book clubs, reading challenges, and author events for all age groups.</p>
              <a href="#" class="read-more">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-cash-coin"></i>
              </div>
              <h3>Fine Payment</h3>
              <p>Pay overdue fines online and request refunds if applicable through your account.</p>
              <a href="#" class="read-more">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-search"></i>
              </div>
              <h3>Research Assistance</h3>
              <p>Get help from our librarians with research projects, citations, and resource finding.</p>
              <a href="#" class="read-more">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Membership Section -->
    <section id="membership" class="chefs section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Membership Plans</h2>
        <p>Choose the membership that fits your reading needs</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-card">
              <div class="pricing-header">
                <h3>Basic</h3>
                <div class="price"><span>$0</span> / year</div>
                <p>For casual readers</p>
              </div>
              <ul class="pricing-features">
                <li><i class="bi bi-check"></i> Borrow up to 3 books</li>
                <li><i class="bi bi-check"></i> 2 week loan period</li>
                <li><i class="bi bi-check"></i> Access to physical collection</li>
                <li><i class="bi bi-x"></i> No e-book access</li>
                <li><i class="bi bi-x"></i> No reservation privileges</li>
              </ul>
              <div class="pricing-footer">
                <a href="register" class="btn-get-started">Sign Up Free</a>
              </div>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="250">
            <div class="pricing-card featured">
              <div class="pricing-header">
                <h3>Standard</h3>
                <div class="price"><span>$25</span> / year</div>
                <p>Most popular choice</p>
              </div>
              <ul class="pricing-features">
                <li><i class="bi bi-check"></i> Borrow up to 5 books</li>
                <li><i class="bi bi-check"></i> 3 week loan period</li>
                <li><i class="bi bi-check"></i> Access to physical collection</li>
                <li><i class="bi bi-check"></i> Limited e-book access</li>
                <li><i class="bi bi-check"></i> Book reservation privileges</li>
              </ul>
              <div class="pricing-footer">
                <a href="register" class="btn-get-started">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-card">
              <div class="pricing-header">
                <h3>Premium</h3>
                <div class="price"><span>$50</span> / year</div>
                <p>For avid readers</p>
              </div>
              <ul class="pricing-features">
                <li><i class="bi bi-check"></i> Borrow up to 10 books</li>
                <li><i class="bi bi-check"></i> 4 week loan period</li>
                <li><i class="bi bi-check"></i> Access to all collections</li>
                <li><i class="bi bi-check"></i> Full e-book access</li>
                <li><i class="bi bi-check"></i> Priority reservations</li>
              </ul>
              <div class="pricing-footer">
                <a href="register" class="btn-get-started">Get Premium</a>
              </div>
            </div>
          </div>
        </div>

        <div class="membership-benefits mt-5" data-aos="fade-up" data-aos-delay="200">
          <h3 class="text-center mb-4">All Members Enjoy</h3>
          <div class="row g-4">
            <div class="col-md-4">
              <div class="benefit-item">
                <i class="bi bi-person-check"></i>
                <h4>Personal Account</h4>
                <p>Track your loans, reservations, and fines through your personal dashboard.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="benefit-item">
                <i class="bi bi-bell"></i>
                <h4>Due Date Alerts</h4>
                <p>Get email and SMS reminders before your books are due.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="benefit-item">
                <i class="bi bi-arrow-clockwise"></i>
                <h4>Online Renewals</h4>
                <p>Renew your books online if no one else has reserved them.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Membership Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p>Have questions? Reach out to our friendly staff</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="contact-info" data-aos="fade-right" data-aos-delay="200">
              <h3>Visit Us</h3>
              <p>Our library is located in the heart of the community, with ample parking and accessible facilities.</p>

              <div class="contact-details mt-4">
                <div class="detail-item">
                  <i class="bi bi-geo-alt"></i>
                  <div>
                    <h5>Address</h5>
                    <p>Sg Pusu<br>53100 Gombak, Malaysia</p>
                  </div>
                </div>

                <div class="detail-item">
                  <i class="bi bi-telephone"></i>
                  <div>
                    <h5>Phone</h5>
                    <p>+6 0312345678</p>
                  </div>
                </div>

                <div class="detail-item">
                  <i class="bi bi-envelope"></i>
                  <div>
                    <h5>Email</h5>
                    <p>info@ikhwahlibrary.org</p>
                  </div>
                </div>

                <div class="detail-item">
                  <i class="bi bi-clock"></i>
                  <div>
                    <h5>Hours</h5>
                    <p>Monday-Friday: 8am - 8pm<br>
                      Saturday: 9am - 5pm<br>
                      Sunday: Closed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="contact-form-wrapper">
              <h3>Send Us a Message</h3>
              <form action="contact.submit" method="post" class="php-email-form">
                @csrf
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="map-section mt-5" data-aos="fade-up" data-aos-delay="200">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15931.87295495733!2d101.72805525!3d3.2529339499999965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc39d83806e5db%3A0xf1fd01f59a7a971b!2sInternational%20Islamic%20University%20Malaysia%20(IIUM)%20Gombak%20Campus!5e0!3m2!1sen!2smy!4v1718100101234!5m2!1sen!2smy"
width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </section><!-- /Contact Section -->



@endsection()
