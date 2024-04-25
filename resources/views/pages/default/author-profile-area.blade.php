{{-- Source: https://bootdey.com/snippets/view/Profile-bio --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .card {
        -moz-border-radius: 2%;
        -webkit-border-radius: 2%;
        border-radius: 2%;
        box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.08);
    }

    .profile .profile-body {
        padding: 20px;
        background: #f7f7f7;
    }

    .profile .profile-bio {
        background: #fff;
        position: relative;
        padding: 15px 10px 5px 15px;
    }

    /* .profile .profile-bio a {
        left: 50%;
        bottom: 20px;
        margin: -62px;
        text-align: center;
        position: absolute;
    } */

    .profile .profile-bio h2 {
        margin-top: 0;
        font-weight: 200;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #585f69;
        margin-top: 5px;
        text-shadow: none;
        font-weight: normal;
        font-family: 'Open Sans', sans-serif;
    }

    h2 {
        font-size: 24px;
        line-height: 33px;
    }

    p,
    li,
    li a {
        color: #555;
    }
</style>




<div class="container bootstrap snippets bootdey">
    <div class="profile card">
        <div class="profile-body">
            <div class="profile-bio">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="img-thumbnail md-margin-bottom-10" src="{{ $data->getImage() }}" alt="">
                    </div>
                    <div class="col-md-7">
                        <h2>{{ $data->name }}</h2>
                        <span><strong>Job:</strong> Web Developer</span>
                        <span><strong>Position:</strong> Web Designer</span>
                        <hr>
                        <h5>Bio</h5>
                        <p>{{ $data->bio }}</p>


                        <h5>Follow on Social Media</h5>
                        <a style="background-color: rgb(209, 120, 17)" class="border border-1 p-5 d-inline-block"
                            href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f text-light"></i></a>
                        <a style="background-color: rgb(209, 120, 17)" class="border border-1 p-5 d-inline-block"
                            href="https://www.facebook.com/"><i class="fa-brands fa-linkedin-in text-light"></i></a>
                        <a style="background-color: rgb(209, 120, 17)" class="border border-1 p-5 d-inline-block"
                            href="https://www.facebook.com/"><i class="fa-brands fa-x-twitter text-light"></i></a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
