<x-mylayouts.layout-default>



    @include('pages.default.author-profile-area')




    <!-- Nav tabs -->
    <ul class="nav nav-tabs my-5">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Social Media</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            @include('pages.default.author-portfolio-area')

        </div>
        <div class="tab-pane container fade" id="menu1">
            <ul>
                <li><a href="">Twitter (X)</a></li>
                <li><a href="">Twitter (X)</a></li>
            </ul>
        </div>
        <div class="tab-pane container fade" id="menu2">...</div>
    </div>



</x-mylayouts.layout-default>
