


//Source:https://www.geeksforgeeks.org/preview-an-image-before-uploading-using-jquery/
$(document).ready(() => {
    const photoInp = $("#image");
    let file;

    $('#formBtn').click((e)=>{
        e.preventDefault();
        if(file){
            alert("The image is uploaded successfully!!");
        }
        else{
            alert("Please select a Image first!!");
        }

    });

    photoInp.change(function (e) {
        file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $("#image_preview")
                    .attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});
