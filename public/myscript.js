/**
 *
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 */


// Source: https://www.geeksforgeeks.org/preview-an-image-before-uploading-using-jquery/
$(document).ready(() => {
    const photoInp = $("#image");
    let file;


    photoInp.change(function (e) {
        file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $(".image_preview")
                    .attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});


// Source: https://www.w3schools.com/bootstrap/bootstrap_filters.asp
// Wait
$(document).ready(function () {
    // clicked
    $(".filter-btn").on("click", function () {
        var value = $(this).text().toLowerCase();
        // Filter
        $(".filter-block").filter(function () {
            var type = $(this).find('.filter-name').text();
            if (type.toLowerCase().indexOf(value) !== -1) {
                $(this).show(true);
            } else {
                $(this).hide(340);

            }

            if (value == 'all') {
                $(this).show(500);
            }
        });
    });
});


// Source: https://www.w3schools.com/bootstrap/bootstrap_filters.asp
// Wait
$(document).ready(function () {
    // clicked
    $(".filter-search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        // Filter
        $(".filter-block").filter(function () {
            var type = $(this).find('.filter-name').text();
            if (type.toLowerCase().indexOf(value) !== -1) {
                $(this).show(true);
            } else {
                $(this).hide(340);

            }

        });
    });
});
