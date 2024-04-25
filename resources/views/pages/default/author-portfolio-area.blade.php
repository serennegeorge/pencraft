@import url("https://fonts.googleapis.com/css?family=Lato:300,400");

body{
font-family: 'Lato', sans-serif;
}

.page-navbar.navbar{
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.page-navbar .navbar-nav .nav-item a{
font-weight: bold;
}

.page-navbar.navbar-dark .navbar-nav .nav-link {
color: #fff;
}

.page-navbar .logo{
font-size: 1.5rem;
}

.page-navbar.fixed-top + .page{
padding-top: 62px;
}

.download-template{
color: #fff;
background-color: #ed36ad;
border: none;
font-weight: bold;
text-transform: uppercase;
font-size: 13px;
padding: 10px 24px;
border-radius: 40px;
}

.download-template:hover{
background-color: #fb5ec4;
}

.gradient{
background: linear-gradient(120deg, #7f70f5, #0ea0ff);
color: #fff !important;
}

.cv-block{
padding-bottom: 60px;
padding-top: 60px;
}

.cv-block.block-intro{
text-align: center;
max-width: 850px;
margin: auto;
}

.cv-block.block-intro .about-me{
max-width: 800px;
margin: auto;
}

.cv-block.block-intro p{
font-size: 1.5em;
font-weight: 300;
margin-bottom: 30px;
}

.cv-block.block-intro .btn {
padding: 0.375rem 1rem;
border-radius: 2em;
}

.cv-block.block-intro .avatar{
width: 150px;
height: 150px;
background-size: cover;
background-repeat: no-repeat;
margin: auto;
border-radius: 100px;
margin-bottom: 30px;
}

.cv-block.info{
padding-top: 70px;
}

.cv-block.info h2{
font-weight: bold;
margin-bottom: 70px;
}

.cv-block.info h3{
font-size: 1.3rem;
}

.cv-block.info .group{
max-width: 800px;
margin: auto;
}

.cv-block.info .group:not(:first-child){
margin-top: 90px;
}

.cv-block.info .group .period{
font-size: 0.8rem;
float: none;
font-weight: bold;
margin-top: 4px;
color: #6c757d;
opacity: 0.8;
}

.cv-block.info .group .organization{
font-size: 0.85em;
background-color: #0ea0ff;
display: inline-block;
color: #fff;
padding: 2px 8px;
border-radius: 2em;
}

.cv-block.info .education.group .organization{
background-color: #20c997;
}

.cv-block.info .group .item{
padding-bottom: 10px;
margin-bottom: 25px;
border-bottom: 1px solid #eee;
}

.cv-block.info .group h2 + .item{
padding-top:25px;
border-top: 1px solid #eee;
}

.cv-block.info .group .item .row{
margin-bottom: 5px;
}

.cv-block.info .work-experience h3,
.cv-block.info .education h3{
font-weight: bold;
}

.cv-block .info-card{
padding: 40px;
box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
height: 100%;
}

.cv-block .info-card h2{
margin-top: 0;
margin-bottom: 24px !important;
font-size: 1.4rem;
}

.cv-block .info-card.skills h3{
margin-top: 25px;
font-size: 1rem;
font-weight: bold;
}

.cv-block .info-card.skills .progress{
height: 3px;
}

.cv-block .info-card.contact-info .icon{
font-size: 1.3em;
color: #c9c9c9;
position: relative;
bottom: 4px;
}

.cv-block.info .hobbies p{
max-width: 700px;
margin: auto;
font-size: 1.2em;
}

.page-footer{
padding-top: 32px;
border-top: 1px solid #ddd;
text-align: center;
padding-bottom: 20px;
}

.page-footer a{
display: inline-block;
margin: 0px 10px;
color: #282b2d;
font-size: 18px;
}

.page-footer .links{
display: inline-block;
}

.page-footer .social-icons{
margin-top: 20px;
margin-bottom: 16px;
}

.page-footer .social-icons a{
font-size: 18px;
margin: 0 3px;
color: #ffffff;
border: 1px solid;
opacity: 0.75;
border-radius: 50%;
width: 36px;
display: inline-block;
height: 36px;
text-align: center;
background-color: #c5c9d2;
line-height: 34px;
}

.page-footer .social-icons a:hover{
opacity: 1;
}

@media (min-width: 768px) {

.cv-block {
padding-bottom: 120px;
padding-top: 120px;
}

.cv-block.info .group .period {
float: right;
}
}

@media (min-width: 576px){
.navbar {
padding-top: 1.2rem;
padding-bottom:1.2rem;
}

.portfolio-navbar.fixed-top + .page{
padding-top: 6rem;
}
}

@foreach ($writing_data as $writing)

<!-- Project One -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beautiful CV Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark page-navbar gradient">
        <div class="container">
            <a class="navbar-brand logo" href="#">My CV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item item">
                    <li class="nav-item item">
                        <a class="nav-link" href="#work-experience">Work Experience</a>
                    </li>
                    <li class="nav-item item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item item">
                        <a class="nav-link" href="#hobbies">Hobbies</a>
                    </li>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn btn-danger download-template" role="button" aria-disabled="true">Download</a>
        </div>
    </nav>
    <main class="page cv-page">
        <section class="cv-block block-intro border-bottom">
            <div class="container">
                <div class="avatar">
                    <img class="img-fluid rounded-circle" src="assets/img/avatar.jpg">
                </div>
                <p>Hello! I am <strong>John Smith</strong>. I work as interface and front end developer. I have passion
                    for pixel perfect, minimal and easy to use interfaces.</p>
                <a href="#" class="btn btn-outline-primary">Hire Me</a>
            </div>
        </section>
        <section class="cv-block info">
            <div class="container">
                <div class="work-experience group" id="work-experience">
                    <h2 class="text-center">Work Experience</h2>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Web Developer</h3>
                                <h4 class="organization">Amazing Co.</h4>
                            </div>
                            <div class="col-md-6">
                                <time class="period">10/2013 - 04/2015</time>
                            </div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit
                            ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Front End Developer</h3>
                                <h4 class="organization">Innovative Org.</h4>
                            </div>
                            <div class="col-md-6">
                                <time class="period">05/2015 - 12/2017</time>
                            </div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit
                            ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Web Developer</h3>
                                <h4 class="organization">Special Inc.</h4>
                            </div>
                            <div class="col-md-6">
                                <time class="period">12/2017 - Present</time>
                            </div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit
                            ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                </div>
                <div class="education group" id="education">
                    <h2 class="text-center">Education</h2>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>High School</h3>
                                <h4 class="organization">Albert Einstein School</h4>
                            </div>
                            <div class="col-md-6">
                                <time class="period">09/2005 - 05/2010</time>
                            </div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit
                            ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Applied Physics</h3>
                                <h4 class="organization">Stephen Hawking College</h4>
                            </div>
                            <div class="col-md-6">
                                <time class="period">09/2010 - 06/2015</time>
                            </div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit
                            ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                </div>
                <div class="group" id="skills">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skills info-card">
                                <h2>Skills</h2>
                                <h3>HTML</h3>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width:100%">
                                    </div>
                                </div>
                                <h3>PHP</h3>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width:90%">
                                    </div>
                                </div>
                                <h3>JavaScript</h3>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width:80%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info info-card">
                                <h2>Contact Info</h2>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="ion-android-calendar icon"></i>
                                    </div>
                                    <div class="col-9">
                                        <span>10/10/1990</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="ion-person icon"></i>
                                    </div>
                                    <div class="col-9">
                                        <span>John Smith</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="ion-ios-telephone icon"></i>
                                    </div>
                                    <div class="col-9">
                                        <span>+235 3217 424</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="ion-at icon"></i>
                                    </div>
                                    <div class="col-9">
                                        <span>lorem@email.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbies group" id="hobbies">
                    <h2 class="text-center">Hobbies</h2>
                    <p class="text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                        risus ligula, iaculis ut metus sit amet, luctus pharetra mauris. Aliquam purus felis, pretium
                        vel pretium vitae, dapibus sodales ante. Suspendisse potenti. Duis nunc eros.</p>
                </div>
            </div>
        </section>
        <footer class="page-footer">
            <div class="container">
                <div class="social-icons">
                    <a href="#"><i class="ion-social-facebook" title="Facebook"></i></a>
                    <a href="#"><i class="ion-social-instagram-outline" title="Instagram"></i></a>
                    <a href="#"><i class="ion-social-twitter" title="Twitter"></i></a>
                </div>
            </div>
        </footer>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

</html>


<h3>{{ $writing->title }}</h3>
<p>{{ $writing->type }}</p>
<p>{{ substr($writing->description, 0, 30) }}</p>
<a class="btn btn-primary" href="{{ $writing->getLink($data->id, $writing->id) }}">View</a>
</div>
</div>
<!-- /.row -->

<hr>
@endforeach



<!-- Pagination -->
<ul class="pagination justify-content-center">
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
        </a>
    </li>
</ul>

</div>
<!-- /.container -->