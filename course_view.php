<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php
    include 'assets/topbar.php';
    ?>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php
    include 'assets/header.php';
    ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">

            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <div class="d-inline-flex text-white">
                    <h3 class="m-0 text-uppercase"><a class="text-white" href="">Home</a></h3>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <h3 class="m-0 text-uppercase">Course name</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h1 class="mb-5">Course Name</h1>

                        <video class="img-fluid rounded w-100 mb-4" width="320" height="240" controls
                            controlsList="nodownload">
                            <source src="videos/demo.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>


                        <h3 class="mb-3" style="color:#007a51;">Description</h3>

                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.</p>
                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.</p>

                        <img class="img-fluid rounded w-50 float-left mr-4 mb-3" src="img/coverimg.jpg" alt="Image">
                    </div>


                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px; background-color:#fbb040;">Course
                            Details
                        </h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p class="text-decoration-none h6 m-0">Course Category</p>
                                <span class="badge badge-pill"
                                    style="background-color: #007a51; color: white;">Islam</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p class="text-decoration-none h6 m-0">Course Duration</p>

                                <span class="badge badge-pill" style="background-color: #007a51; color: white;">5 HRS
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p class="text-decoration-none h6 m-0">Upload Date</p>
                                <span class="badge badge-pill" style="background-color: #007a51; color: white;">1/2024
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p class="text-decoration-none h6 m-0">Language</p>
                                <span class="badge badge-pill" style="background-color: #007a51; color: white;">Urdu
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <p class="text-decoration-none h6 m-0">Course Price</p>
                                <span class="badge badge-pill"
                                    style="background-color: #fbb040; color: black; font-weight-semi-bold;font-size:20px;">$500
                                    
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <input type="submit" value="Buy Now" class="btn btn-primary py-md-2 px-md-4">

                            </li>
                        </ul>
                    </div>

                    <br><br><br><br><br><br>
                    <!-- Comment List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Featured review</h3>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum
                                            et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                            Gubergren clita aliquyam consetetur, at tempor amet ipsum diam tempor at
                                            sit.</p>
                                        <button class="btn btn-sm btn-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="bg-secondary rounded p-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control border-0" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control border-0" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control border-0" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Comment"
                                    class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->

                    <!-- Search Form -->
                    <div class="mb-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Category List -->


                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">More Courses</h3>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href=""
                            style="background-color:#007a51;">
                            <img class="img-fluid rounded" src="img/course-1.jpg" width="30%" alt="">
                            <div class="pl-3">
                                <h6 class="m-1" style="color:white">Quran in urdu</h6>
                            </div>
                        </a>

                        <a class="d-flex align-items-center text-decoration-none mb-3" href=""
                            style="background-color:#007a51;">
                            <img class="img-fluid rounded" src="img/course-1.jpg" width="30%" alt="">
                            <div class="pl-3">
                                <h6 class="m-1" style="color:white">Quran in urdu</h6>
                            </div>
                        </a>
                    </div>

                    <!-- Tag Cloud -->

                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Footer Start -->
    <?php
    include 'assets/footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>