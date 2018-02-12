$(document).ready(function(){

	$("#upload").on("click", function(){

		//ajax
		$("#myFile").upload("http://localhost/jsUploadFileTest/fileUpload.php",function(data){
			console.log("done",data);
		})
	})

})
