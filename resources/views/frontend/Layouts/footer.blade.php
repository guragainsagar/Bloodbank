
<!-- Info Section -->
<section class="info_section bg-dark">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-3 info_logo">
          <div class="logo-box">
            <img src="{{url("frontend/assets/logos/logo.png")}}" alt="">
            <span>
              Blood
            </span>
          </div>
          <p>
            Blood For Life
          </p>
          <div class="info_social">
            <div>
              <a href="">
                <i class="fab fa-2x fa-facebook"></i>
              </a>
            </div>
            <div>
              <a href="">
                <i class="fab fa-2x fa-twitter"></i>
              </a>
            </div>
            <div>
              <a href="">
                <i class="fab fa-2x fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 info_address">
          <h5>
            Address
          </h5>
          <p>
            Sushma Godawari College, Itahari
          </p>
          <p>
            025-581052
          </p>
          <p>
            +977 9800966705
          </p>
          <p>
            <a href="">
              blood@gmail.com
            </a>
          </p>
        </div>
        <div class="col-md-3 info_links">

          <div class="info_nav ">
            <nav class="">
              <ul>
                <h5>
                  Links
                </h5>
                <li>
                  <a href="{{route('dashboard')}}"> Home</a>
                </li>
                <li>
                  <a href="{{route('about.create')}}">About</a>
                </li>
                <li>
                  <a href="{{route('request.create')}}">Blood Requests</a>
                </li>
                <li>
                  <a href="{{route('hospital.index')}}"> Hospitals</a>
                </li>
                <li>
                  <a href="{{route('bloodbank.index')}}">Blood Banks</a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-3 info_news">
          <h5>
           Contact Us
          </h5>
          <form action="">
            <div>
              <input type="text" placeholder="Your Name">
            </div>
            <div>
              <input type="email" placeholder="Email">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit">
                Email
              </button>
            </div>
          </form>
        </div>
      </div>


    </div>
  </section>

      <!-- FOOTER -->
      <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2023 All Rights Reserved By
      <a href="{{route('home.create')}}">Blood.com</a>
    </p>
  </section>
   
   <script src="{{url("frontend/static/js/jquery-3.3.1.min.js")}}"></script>
   <script src="{{url("frontend/static/js/popper.min.js")}}"></script>
   <script src="{{url("frontend/static/js/bootstrap.min.js")}}"></script>
   <script src="{{url("frontend/static/js/owl.carousel.min.js")}}"></script>
   <script src="{{url("frontend/static/js/main.js")}}"></script>

   <script>
     $(document).ready(function() {
           $(".comment-btn").click(function() {
             $(this).closest(".card").find(".comment-section").toggle();
           });
         });

   </script>
   
 
   </body>
</html>