$(document).ready(function(){   
    
    $("#file-upload").change(function(){
        showPreview(this);
    })

    function showPreview(objFileInput) {
        console.log("prev");
		if (objFileInput.files[0]) {
            var fileReader = new FileReader();
			fileReader.onload = function (e) {
                $("#profipic").attr("src",e.target.result);
			}
			fileReader.readAsDataURL(objFileInput.files[0]);
		}
    }


    $("#profile-picture-uploader").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../php_logic/inside/upload_profile_picture.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            processData:false,
            success: function()
            {
                alert("Siker");
            },
            error: function() 
            {
                alert("Nemjó");
            } 	        
       });
    }));

})