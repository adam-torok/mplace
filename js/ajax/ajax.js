$(document).ready(function(){   

    $("#user-study").focusout(function(){
        var textOfInput = $(this).text();
        $.ajax({
            url: "../../php_logic/inside/update_user_study.php",
            type: "POST",
            data: {input:textOfInput},
            succes: function(){
                alert("Sikeres frissítés");
            },
            error :function(){
                alert("Sikerestelen frissítés");
            }
        })
    })

    
    $("#user-bio").focusout(function(){
        var textOfInput = $(this).text();
        $.ajax({
            url: "../../php_logic/inside/update_user_bio.php",
            type: "POST",
            data: {input:textOfInput},
            succes: function(){
                alert("Sikeres frissítés");
            },
            error :function(){
                alert("Sikerestelen frissítés");
            }
        })
    })


    $("#user-workplace").focusout(function(){
        var textOfInput = $(this).text();
        $.ajax({
            url: "../../php_logic/inside/update_user_workplace.php",
            type: "POST",
            data: {input:textOfInput},
            succes: function(){
                alert("Sikeres frissítés");
            },
            error :function(){
                alert("Sikerestelen frissítés");
            }
        })
    })


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

    
    $("#bg-uploader").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../php_logic/inside/upload_profile_background.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            processData:false,
            success: function()
            {
                showPreviewOfBg(this);
                alert("Siker");
            },
            error: function() 
            {
                alert("Nemjó");
            } 	        
       });
    }));

    function showPreviewOfProfPic(objFileInput) {
        console.log("prev");
		if (objFileInput.files[0]) {
            var fileReader = new FileReader();
			fileReader.onload = function (e) {
                $("#profipic").attr("src",e.target.result);
			}
			fileReader.readAsDataURL(objFileInput.files[0]);
		}
    }

    function showPreviewOfBg(objFileInput) {
        console.log("prevbg");
		if (objFileInput.files[0]) {
            var fileReader = new FileReader();
			fileReader.onload = function (e) {
                $('#bg-holder').css('background-image', 'url(' + e.target.result + ')');
			}
			fileReader.readAsDataURL(objFileInput.files[0]);
		}
    }

    $("#file-upload").change(function(){
        showPreviewOfProfPic(this);
    })

    $("#bg-upload").change(function(){
        showPreviewOfBg(this);
        location.reload();
        $("#bg-uploader").submit();
    })
})