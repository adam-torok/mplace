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

    $("#delete-post").on("click",function(){
        var postId = $(this).data('id');
        $.ajax({
            url:"../../php_logic/inside/delete_user_post.php",
            data: {id:postId},
            type: "POST",
            success: function(){
                location.reload();
            },
            error:function(){

            }
        })
        
    })

    const theme = localStorage.getItem('theme');

    if(theme == "dark"){
        $("#background").toggleClass("bg-gray-800");
        $("body").toggleClass("bg-gray-800");
        $("#sidebar").toggleClass("bg-gray-900");
        $("#profsec").toggleClass("bg-gray-800");
        $("#profesc2").toggleClass("bg-gray-700")
        $("#profesc2").children().children().children().toggleClass("text-gray-900");
        $("#profdesc").toggleClass("text-gray-400");
        $("#name").toggleClass("text-white");
        $(".home").toggleClass("text-white");
        $("#sidebar2").toggleClass("bg-gray-900");
        $("#topmenu").toggleClass("bg-gray-900");
        $(".counter").toggleClass("text-gray-400");
        $("#post-text").toggleClass("bg-gray-400");
        $(".post-text").toggleClass("text-gray-600");
        $("#post-writer").toggleClass("bg-gray-900");
        $(".card").toggleClass("bg-gray-900");
        $(".post-header-text").toggleClass("text-gray-400");
        $("#weather> p").toggleClass("text-gray-400");
        $(".sidebar-item").toggleClass("text-gray-400");
        $(".rounded-full").toggleClass("bg-gray-800");
        $(".rounded-full").toggleClass("text-gray-400");
    }else{
        $("#background").removeClass("bg-gray-800");
        $("body").removeClass("bg-gray-800");
        $("#sidebar").removeClass("bg-gray-900");
        $("#profsec").removeClass("bg-gray-800");
        $("#profesc2").removeClass("bg-gray-700")
        $("#profesc2").children().children().children().removeClass("text-gray-900");
        $("#profdesc").removeClass("text-gray-400");
        $("#name").removeClass("text-white");
        $(".home").removeClass("text-white");
        $("#sidebar2").removeClass("bg-gray-900");
        $("#topmenu").removeClass("bg-gray-900");
        $(".counter").removeClass("text-gray-400");
        $("#post-text").removeClass("bg-gray-400");
        $(".post-text").removeClass("text-gray-600");
        $("#post-writer").removeClass("bg-gray-900");
        $(".card").removeClass("bg-gray-900");
        $(".post-header-text").removeClass("text-gray-400");
        $(".sidebar-item").removeClass("text-gray-400");
        $(".rounded-full").removeClass("bg-gray-800");
        $(".rounded-full").removeClass("text-gray-400");

    }

    $("#nightmode").click(function(){
        $("#background").toggleClass("bg-gray-800");
        $("body").toggleClass("bg-gray-800");
        $("#sidebar").toggleClass("bg-gray-900");
        $("#profsec").toggleClass("bg-gray-800");
        $(".text-sm").children().toggleClass("text-white");
        $("#profesc2").toggleClass("bg-gray-700")
        $("#profesc2").children().children().children().toggleClass("text-gray-900");
        $("#profdesc").toggleClass("text-gray-400");
        $("#name").toggleClass("text-white");
        $(".home").toggleClass("text-white");
        $("#sidebar2").toggleClass("bg-gray-900");
        $("#topmenu").toggleClass("bg-gray-900");
        $(".counter").toggleClass("text-gray-400");
        $("#post-text").toggleClass("bg-gray-400");
        $(".post-text").toggleClass("text-gray-600");
        $("#post-writer").toggleClass("bg-gray-900");
        $("#weather> p").toggleClass("text-gray-900");
        $(".card").toggleClass("bg-gray-900");
        $(".post-header-text").toggleClass("text-gray-400");
        $(".sidebar-item").toggleClass("text-gray-400");
        $(".rounded-full").toggleClass("bg-gray-800");
        $(".rounded-full").toggleClass("text-gray-400");
        localStorage.setItem('theme','dark');
    });

    
    $("#lightmode").click(function(){
        $("#background").removeClass("bg-gray-800");
        $("body").removeClass("bg-gray-800");
        $("#sidebar").removeClass("bg-gray-900");
        $("#profsec").removeClass("bg-gray-800");
        $("#profesc2").removeClass("bg-gray-700")
        $("#profesc2").children().children().children().removeClass("text-gray-900");
        $("#profdesc").removeClass("text-gray-400");
        $("#name").removeClass("text-white");
        $(".home").removeClass("text-white");
        $("#sidebar2").removeClass("bg-gray-900");
        $("#topmenu").removeClass("bg-gray-900");
        $(".counter").removeClass("text-gray-400");
        $("#post-text").removeClass("bg-gray-400");
        $(".post-text").removeClass("text-gray-600");
        $("#post-writer").removeClass("bg-gray-900");
        $(".card").removeClass("bg-gray-900");
        $(".post-header-text").removeClass("text-gray-400");
        $(".sidebar-item").removeClass("text-gray-400");
        $(".rounded-full").removeClass("bg-gray-800");
        $(".rounded-full").removeClass("text-gray-400");
        localStorage.setItem('theme','light');
    });

    $("#post-writer").on('submit',(function(e) {
        var post = $("#post-text").val();
        $.ajax({
            url: "../../php_logic/inside/post_a_post.php",
            type: "POST",
            data: {post:post},
            success: function()
            {
            },
            error: function() 
            {
                alert("Nemjó");
            } 	        
       });
    }));

    
    $("#user-bio").focusout(function(){
        var textOfInput = $(this).text();
        $.ajax({
            url: "../../php_logic/inside/update_user_bio.php",
            type: "POST",
            data: {input:textOfInput},
            success: function(){

            },
            error :function(){

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
            },
            error: function() 
            {
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