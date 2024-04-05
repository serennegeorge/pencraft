<x-mylayouts.layout-default>



    <h1>Profile</h1>
    <p>Author name:{{ $data->name }}</p>
    <p>Bio: {{ $data->bio }}</p>



    <h2>Social Media</h2>
    <p>Facebook: <a href="#">Link</a></p>
    <p>Linkedin: <a href="#">Link</a></p>
    <p>Instagram: <a href="#">Link</a></p>
    <p>X (Twitter): <a href="#">Link</a></p>


    <h2>Portfolio</h2>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <p>Author: [name]</p>
                <p>Author: [bio]</p>
                <p><a href="#">Link</a></p>
            </div>

        </div>
    </div>




</x-mylayouts.layout-default>