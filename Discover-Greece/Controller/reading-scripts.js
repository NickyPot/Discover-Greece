//this function is used to retrieve the last inserted row of readings every 5 seconds
$(document).ready(function(){
	function getReading(){

		 $.ajax({url: "../View/show-readings.php", success: function(result){
      $("#test").html(result);
    }});


	}

	 t = setInterval(getReading,5000);
});
