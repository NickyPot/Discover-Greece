$(document).ready(function(){
	function getReading(){
		
		 $.ajax({url: "../View/show-readings.php", success: function(result){
      $("#test").html(result);
    }});
		
		
	}
	
	 t = setInterval(getReading,5000);
});
