<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="green_n.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />


  
		<!-- Bootstrap CSS -->
		<link href="publicsite/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="publicsite/css/tiny-slider.css" rel="stylesheet">
		<link href="publicsite/css/style.css" rel="stylesheet">
		<title>NUVAST Furnitures</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <style>
        .custom-alert {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            max-width: 300px;
            background-color: #28a745;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            font-size: 14px;
            line-height: 1.5;
        }
        .custom-alert .close-btn {
            float: right;
            margin-left: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        .custom-alert.success {
            background-color: #28a745;
        }
        .custom-alert.error {
            background-color: #dc3545;
        }

                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        
            /* Hero section animations */


            .intro-excerpt {
                opacity: 0;
                transform: translateY(50px);
                animation: fadeInUp 1s ease-out forwards;
                animation-delay: 0.2s;
            }

            .hero-img-wrap img {
                opacity: 0;
                transform: translateX(50px);
                animation: slideInRight 1s ease-out forwards;
                animation-delay: 0.5s;
            }

            /* Keyframes for animations */
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(50px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes slideInRight {
                0% {
                    opacity: 0;
                    transform: translateX(50px);
                }
                100% {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            /* Button hover animations */
            .btn-secondary, .btn-white-outline {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .btn-secondary:hover, .btn-white-outline:hover {
                transform: translateY(-3px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
    </style>
</head>
<body>
    <div class="main-wrapper">
        @include('layouts.nav-2')

            <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
                                <h1 style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Contact</h1>
								<p class="mb-4">We’re here to help. Whether you have questions, feedback, or need design advice — let’s connect.</p>
								<p><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="btn btn-secondary me-2">Shop Now</a><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="publicsite/images/Aquila_SOfa_Made_In_Melbourne_Australia_1.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div> 


            





        <div class="contact-area bg-white py-5">
            <div class="container">
                <div class="row g-4 align-items-stretch">
                    <!-- Contact Form Column (Left) -->
                    <div class="col-lg-6">
                        <div class="contact-form p-4 h-100">
                            <div class="contact-title mb-4">
                            <h2 class="title" style="font-family: 'Orbitron', sans-serif; font-size: 26px;">
                                Send A Request
                            </h2>                              
                              <p class="text-muted" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Fill out the form and we'll get back to you soon</p>
                            </div>
                            <form class="contact-form-style" id="contact-form" action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input name="name" class="form-control" placeholder="Name*" type="text" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;;" required />
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" class="form-control" placeholder="Email*" type="email"  style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"required />
                                    </div>
                                    <div class="col-md-6">
                                        <input name="tel" class="form-control" placeholder="Telephone Number*" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;" type="text" required />
                                    </div>
                                    <div class="col-md-6">
                                        <input name="subject" class="form-control" placeholder="Subject*" type="text" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;" required />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" placeholder="Your Message*" rows="5" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;" required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary px-4 py-2" type="submit" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;" id="submit-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Map Column (Right) -->
                    <div class="col-lg-6">
                        <div class="contact-map h-100">
                            <div class="map-container h-100">
                                <iframe id="gmap_canvas" 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1173434426637!2d80.54642697413173!3d5.948566929857624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae137c55c2bb4c5%3A0x49fd7e3a36b85b9e!2sMatara!5e0!3m2!1sen!2slk!4v1722000000000!5m2!1sen!2slk" 
                                    width="100%" 
                                    height="100%" 
                                    style="border:0; min-height: 450px;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Info Row (Below on all screens) -->

            </div>
        </div>

        <!-- Custom Alert Box -->
        <div class="custom-alert" id="custom-alert">
            <span class="close-btn" id="close-alert">&times;</span>
            <span id="alert-message"></span>
        </div>

<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">


            <div class="col-md-8 col-lg-8 pb-4">


              <div class="row ">
                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>43 Raymouth Rd. Baltemoer, London 3910</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>info@yourdomain.com</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>+1 294 3925 3939</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>
              </div>

              

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>




        @include('layouts.footer2')
    </div>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/scrollUp.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            var isSubmitting = false;

            // Show custom alert
            function showCustomAlert(message, type = 'success') {
                var alertBox = $('#custom-alert');
                var alertMessage = $('#alert-message');
                alertBox.removeClass('success error').addClass(type);
                alertMessage.text(message);
                alertBox.fadeIn(300);

                // Auto-hide after 5 seconds
                setTimeout(function() {
                    alertBox.fadeOut(300);
                }, 5000);
            }

            // Close alert on click
            $('#close-alert').on('click', function() {
                $('#custom-alert').fadeOut(300);
            });

            $('#contact-form').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                if (isSubmitting) {
                    return; // Prevent multiple submissions
                }

                var submitBtn = $('#submit-btn');
                var formMessage = $('#form-message');

                isSubmitting = true;
                submitBtn.prop('disabled', true).text('Sending...');
                formMessage.empty(); // Clear previous messages

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        showCustomAlert(response.success, 'success');
                        $('#contact-form')[0].reset(); // Reset form
                    },
                    error: function(xhr) {
                        var errorMessage = xhr.responseJSON && xhr.responseJSON.errors
                            ? Object.values(xhr.responseJSON.errors)[0][0]
                            : 'An error occurred. Please try again.';
                        showCustomAlert(errorMessage, 'error');
                    },
                    complete: function() {
                        isSubmitting = false;
                        submitBtn.prop('disabled', false).text('Send Message');
                    }
                });
            });
        });
    </script>
</body>
</html>



		<script src="publicsite/js/bootstrap.bundle.min.js"></script>
		<script src="publicsite/js/tiny-slider.js"></script>
		<script src="publicsite/js/custom.js"></script>