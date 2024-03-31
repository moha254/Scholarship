<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-BHjE6qWEiqg6hy2emEyt3jp8rUVZ4R1qtoK5QjmEj5W8A4bgv6moK2rOTF+9OzCmMflM7qzVQ6/zk/NOz1Oukw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <title>SCHOLARSHIPS</title>
    <style media="screen">
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");

        body {
            background: #f9f9f9;
            font-family: "roboto", sans-serif;
        }

        .main-content {
            padding: 100px 0;
            position: relative;
            bottom: 10rem;
        }

        .shadow {
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .profile-card {
            padding-bottom: 60px !important;
        }

        .profile-card .profile-card_image img {
            width: 100px;
            height: 100px;
            border-radius: 100%;
            object-fit: cover;
            border: 4px solid #fff;
        }

        .profile-card .profile-card_social {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .profile-card .profile-card_social img {
            width: 33px;
            margin: 5px 10px;
        }
    </style>
</head>

<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="custom-section container">
            <div class="logos d-flex align-items-center gap-3">
                <img src="mora.jpg" alt="Zetech University Logo" width="150" height="auto">
                <h4 class="logo fw-bold">Scholarship Opportunity</h4>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Scholarships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Adminlogin.php">Login</a>
                    </li>
                </ul>
            </div>
    </nav>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="">
                <a class="page-scroll" href="#about">About</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#services">Services</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#portfolio">Portfolio</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#team">Team</a>
            </li>
            <li class="">
                <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
    </div>
    </nav>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome to our Scholarship Opportunity</div>
                <div class="intro-heading">Empowering Future Leaders</div>
                <a href="#services" class="page-scroll btn btn-primary">Learn More</a>
            </div>
        </div>
    </header>
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Unlock Your Potential with Our Services</h2>
                    <h3 class="section-subheading text-muted">Advanced tools tailored to your needs.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="service-item">
                        <i class="fas fa-user-graduate fa-4x text-primary"></i>
                        <h3 class="service-heading">College Acceptance Estimation</h3>

                        <p class="text-muted">Discover your likelihood of acceptance to your dream college.</p>
                        <button class="btn btn-primary">Find Out Now</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <i class="fas fa-search fa-4x text-primary"></i>
                        <h3 class="service-heading">College Fit Score</h3>

                        <p class="text-muted">Find colleges that match your preferences and interests.</p>
                        <button class="btn btn-primary">Find Your Fit</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <i class="fas fa-user-tie fa-4x text-primary"></i>
                        <h3 class="service-heading">Career and Major Guidance</h3>

                        <p class="text-muted">Explore careers aligned with your personality and majors to achieve your
                            goals.</p>
                        <button class="btn btn-primary">Take The Quiz</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
   <section id="portfolio" class="bg-light-gray">
    <main class="container">
        <div class="row">
            <h2 class="section-title">Showing All Scholarships</h2>
            <?php
            require_once 'Connection.php';

            // Retrieve data from the database
            $sql = "SELECT * FROM details";
            $result = $conn->query($sql);

            // Check if the query was successful
            if ($result && $result->num_rows > 0) {
                // Output cards for each row in the result
                $count = 0; // Initialize count variable
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-6 col-md-6 mb-4'>"; // Adjusted column classes for two columns
                    echo "<div class='card'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'><a href='" . htmlspecialchars($row["url"]) . "' class='card-link'>" . ($row["title"] !== null ? htmlspecialchars($row["title"]) : "Untitled") . "</a></h5>"; // Check if title is null
                    echo "<p class='card-text'><strong>Sponsor:</strong> " . htmlspecialchars($row["sponsor"]) . "</p>"; // Added sponsor
                    // Convert opening date to "Month Day, Year" format
                    echo "<p class='card-text'><strong>Opening Date:</strong> " . date('F d, Y', strtotime($row["opening_date"])) . "</p>";
                    // Convert closing date to "Month Day, Year" format
                    echo "<p class='card-text'><strong>Closing Date:</strong> " . date('F d, Y', strtotime($row["closing_date"])) . "</p>";
                    echo "<p class='card-text'><strong>Description:</strong> " . htmlspecialchars($row["description"]) . "</p>";

                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    $count++;
                    if ($count % 2 == 0) { // Changed to start a new row after every two cards
                        echo "</div><div class='row'>"; // Start a new row after every two cards
                    }
                }
            } else {
                // If no details found, display a message
                echo "<p>No scholarships found.</p>";
            }

            // Close the database connection after retrieving data
            $conn->close();
            ?>
        </div>
    </main>
</section>


    <!-- Team Section -->
    <section class="main-content">
        <div class="container">
            <h1 class="text-center">Meet Our <b>Scholarship Team</b></h1>
            <p class="text-center text-muted">Our dedicated scholarship team is here to support you on your educational
                journey.</p>
            <br><br>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
                        <div class="profile-card_image">
                            <img src="https://1.bp.blogspot.com/-9KexyoXNAoE/YTK0516QMGI/AAAAAAAACcQ/S7q2zoOR5pYN-g4dbXkqhSl_-7LD7iP_QCNcBGAsYHQ/s0/user2.jpg" alt="User" class="mb-4 shadow">
                        </div>
                        <div class="profile-card_details">
                            <h3 class="mb-0">Sam Parker</h3>
                            <p class="text-muted">Lead Scholarship Advisor</p>
                            <p class="text-muted">Sam has over a decade of experience in mentoring students to achieve
                                their academic goals. She is dedicated to ensuring equal opportunities for all aspiring
                                scholars.!</p>
                        </div>
                        <div class="profile-card_social text-center p-4">
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-2T3ElKxwhro/YTK02oRhFxI/AAAAAAAACcE/wQdMNs35txc01qOrMv748b4OdSG4yYq_QCNcBGAsYHQ/s0/linkedin.png" alt="Linkedin">
                            </a>
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-kB-HafhdoFg/YTK02gWPBAI/AAAAAAAACcA/bwRGH_Z6ldkbGj45SgdW1F779j9MMWFdwCNcBGAsYHQ/s0/twitter.png" alt="Twitter">
                            </a>
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-d5BmOdx1z5Q/YTK02eiYNtI/AAAAAAAACcI/KFCUt7e26QEoqeR6KFgQQxk42O5jjysEQCNcBGAsYHQ/s0/facebook.png" alt="Facebook">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
                        <div class="profile-card_image">
                            <img src="https://1.bp.blogspot.com/-YUWsGqZafG0/YTK05kzQd8I/AAAAAAAACcU/4uu8uGYvULoh4X2C1JhB4T3hihxEaOm8wCNcBGAsYHQ/s0/user3.jpg" alt="User" class="mb-4 shadow">
                        </div>
                        <div class="profile-card_details">
                            <h3 class="mb-0">Larry Garland</h3>
                            <p class="text-muted">Lead Scholarship Coordinator</p>
                            <p class="text-muted">Larry is passionate about connecting students with scholarship
                                opportunities. With his extensive experience in education administration, he strives to
                                make the application process seamless for all applicants.</p>
                        </div>
                        <div class="profile-card_social text-center p-4">
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-2T3ElKxwhro/YTK02oRhFxI/AAAAAAAACcE/wQdMNs35txc01qOrMv748b4OdSG4yYq_QCNcBGAsYHQ/s0/linkedin.png" alt="Linkedin">
                            </a>
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-kB-HafhdoFg/YTK02gWPBAI/AAAAAAAACcA/bwRGH_Z6ldkbGj45SgdW1F779j9MMWFdwCNcBGAsYHQ/s0/twitter.png" alt="Twitter">
                            </a>
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-d5BmOdx1z5Q/YTK02eiYNtI/AAAAAAAACcI/KFCUt7e26QEoqeR6KFgQQxk42O5jjysEQCNcBGAsYHQ/s0/facebook.png" alt="Facebook">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
                        <div class="profile-card_image">
                            <img src="https://1.bp.blogspot.com/-zKZqFgX99QU/YTK054tU9SI/AAAAAAAACcM/2Ka5z51lu_EbMcJZ0TVy8maRRuvMjs2-gCNcBGAsYHQ/s0/user4.jpg" alt="User" class="mb-4 shadow">
                        </div>
                        <div class="profile-card_details">
                            <h3 class="mb-0">Diana Pertersen</h3>
                            <p class="text-muted">Lead Scholarship Advisor</p>
                            <p class="text-muted">Diana brings a wealth of knowledge in scholarship management and
                                student support services. She is dedicated to guiding students toward achieving their
                                academic and career goals through scholarship opportunities.</p>
                        </div>
                        <div class="profile-card_social text-center p-4">
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-2T3ElKxwhro/YTK02oRhFxI/AAAAAAAACcE/wQdMNs35txc01qOrMv748b4OdSG4yYq_QCNcBGAsYHQ/s0/linkedin.png" alt="Linkedin">
                            </a>
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-kB-HafhdoFg/YTK02gWPBAI/AAAAAAAACcA/bwRGH_Z6ldkbGj45SgdW1F779j9MMWFdwCNcBGAsYHQ/s0/twitter.png" alt="Twitter">
                            </a>
                            <a href="#!" class="d-inline-block">
                                <img src="https://1.bp.blogspot.com/-d5BmOdx1z5Q/YTK02eiYNtI/AAAAAAAACcI/KFCUt7e26QEoqeR6KFgQQxk42O5jjysEQCNcBGAsYHQ/s0/facebook.png" alt="Facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Clients Aside -->


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright © Your Website 2024</span>
                </div>
                <div class="col-md-4">
                    <div class="footer-social-icons">
                        <h4 class="_14">Follow us on</h4>
                        <ul class="social-icons">
                            <li><a href="#" class="social-icon"> <i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" class="social-icon"> <i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="social-icon"> <i class="fas fa-rss"></i></a></li>
                            <li><a href="#" class="social-icon"> <i class="fab fa-youtube"></i></a></li>
                            <li><a href="#" class="social-icon"> <i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" class="social-icon"> <i class="fab fa-github"></i></a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>

    <!-- jQuery Version 1.11.0 -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js">
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/bootstrap.min.js">
    </script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/classie.js">
    </script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/cbpAnimatedHeader.js">
    </script>

    <!-- Contact Form JavaScript -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jqBootstrapValidation.js">
    </script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/contact_me.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>