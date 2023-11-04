<?php
session_start();
?>
<!DOCTYPE html>
<?php
$conn = new mysqli('localhost', 'root', '', 'qrfeedback');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gujarat Police</title>
    <link rel="stylesheet" href="kuldeep/style.css">
    <link rel="shortcut icon" href="kuldeep/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand fs-4" href="index.html"><img src="kuldeep/images/gujaratpolice.logo.png"
                    class="img-fluid nav-logo" /> Gujarat Police Feedback</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end fs-6" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-1">
                        <a class="nav-link" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li class="nav-item ms-1">
                        <a class="nav-link" href="kuldeep/contact_details.html"><i class="fa-solid fa-phone"></i> Contact
                            Details</a>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn me-2 mb-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <!-- <img src="images/user.png" class="img-fluid img-thumbnail"/> -->
                            <i class="fa-solid fa-user"></i> User
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header text-bg-secondary">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i
                                                class="fa-solid fa-user"></i> User Profile</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <?php 
                                    $email = $_SESSION['user'];
                                    $query = "SELECT * FROM login_details WHERE email='$email'"
                                    $result = mysqli_query($con,$query);
                                    ?>
                                    <div class="modal-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">Full Name</li>
                                            <li class="list-group-item"><?php echo $_SESSION['user']; ?></li>
                                            
                                        </ul>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid custom-main">
            <div class="row">
                <div class="col-12 mt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a class="btn btn-info " role="button" href="#">Link 1</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="btn btn-info" role="button" href="#">Link 2</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="btn btn-info" role="button" href="#">Link 3</a>
                            </li>
                        </ul>
                </div>
            <div class="col-12">
                <div class="center-container">
                    <img src="images/gujaratpolice_bg.png" class="img-fluid img-thumbnail mt-5" />
                </div>
            </div>
            <div class="col-12">
                <div class="h2 text-light text-center">Welcome to</div>
                <div class="h2 text-light text-center">Gujarat Police Feedback Management System</div>
            </div>
            <div class="col-12 text-center text-sm-center mb-5">
                <a class="btn btn-info w-50" href="police_station_unit.html" role="button">Police Station/unit</a>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-dark custom-footer">
            <div class="row text-center">
                <div class="col-12 col-sm-4">
                    <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Terms & Condition
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header text-bg-secondary">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Conditions</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group list-group-flush list-group-numbered text-start">
                                        <li class="list-group-item">Acceptance of Terms:
                                            By using the Gujarat Police Feedback Management System, you agree to be
                                            bound by these Terms
                                            and any future revisions or updates.
                                            These Terms may be subject to change, and it is your responsibility to
                                            review them
                                            periodically to stay informed of any updates.</li>
                                        <li class="list-group-item">User Eligibility:
                                            You must be at least 18 years of age to use the System. By using the System,
                                            you represent
                                            that you meet this age requirement.</li>
                                        <li class="list-group-item">Feedback Submission:
                                            The Gujarat Police Feedback Management System allows users to provide
                                            feedback on the services
                                            and actions of the Gujarat Police.
                                            All feedback must be accurate and honest. Submitting false or misleading
                                            information is
                                            strictly prohibited.</li>
                                        <li class="list-group-item">Privacy:
                                            The Gujarat Police is committed to safeguarding your privacy. Please refer
                                            to our Privacy
                                            Policy for detailed information about
                                            how we collect, use, and protect your personal information.</li>
                                        <li class="list-group-item">Termination:
                                            The Gujarat Police reserves the right to terminate your access to the
                                            Feedback Management
                                            System at its sole discretion if you
                                            violate these Terms or engage in any inappropriate conduct. You may also
                                            request termination
                                            of your account by contacting us.</li>
                                        <li class="list-group-item">Governing Law:
                                            These Terms are governed by and construed in accordance with the laws of the
                                            State of Gujarat,
                                            India. Any legal actions related to
                                            these Terms or the System shall be exclusively filed in the appropriate
                                            court in Gujarat.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#FAQModal">
                        FAQ
                    </button>
                    <div class="modal fade" id="FAQModal" tabindex="-1" aria-labelledby="FAQModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header text-bg-secondary">
                                    <h1 class="modal-title fs-5" id="FAQModalLabel">Frequently asked Questions for
                                        Citizen Portal</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group list-group-flush list-group-numbered text-start">
                                        <li class="list-group-item"> How to reset Password in Citizen Portal?
                                            To reset the password, you need to click on FORGOT PASSWORD option on login
                                            page of Citizen
                                            Portal. After clicking on forgot
                                            password you need to enter your username and then you need to select the
                                            security question and
                                            write its answer that you have
                                            entered at the time of registration on Citizen Portal. On entering asked
                                            details you will have the
                                            text box to enter the new
                                            password and confirm new password. On submitting the details your password
                                            will get reset.
                                            These Terms may be subject to change, and it is your responsibility to
                                            review them
                                            periodically to stay informed of any updates.</li>
                                        <li class="list-group-item">How to view the status of the request applied?
                                            For viewing the status of the request applied you have to go to the option
                                            MY REQUEST LIST on
                                            portal home page.</li>
                                        <li class="list-group-item"> Why security questions are not displayed in the
                                            drop down?
                                            If security questions are not displayed in the drop down then kindly check
                                            that your phone is
                                            updated to latest Operating System
                                            and in Google play store update the application named Android System Web
                                            View.</li>
                                        <li class="list-group-item"> How can I edit my personal details?
                                            For editing personal details you can click on MY PROFILE option near your
                                            profile photo or you can
                                            go to MY ACCOUNT menu.</li>
                                        <li class="list-group-item"> Where can I complaint for the issues faced on
                                            Citizen Portal?
                                            For complaint you can send a mail or call to the respective department given
                                            the CONTACT DETAILS.
                                            Kindly mention the mobile number
                                            in the mail.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <a href="#" class="btn btn-link ps-2"><i class="fa-brands fa-facebook"></i> Facebook</a>
                    <a href="#" class="btn btn-link ps-2"><i class="fa-brands fa-twitter"></i> Twitter</a>
                    <a href="#" class="btn btn-link ps-2"><i class="fa-brands fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20994dd270.js" crossorigin="anonymous"></script>
</body>

</html>