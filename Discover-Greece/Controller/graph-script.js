window.onload = function () {
 
  var internal =[];
  var external =[];
  var lightLevel =[];
  var voltage =[];
 $('.internal').each(function(){
	 
	 internal.push(parseInt($(this).text(),10));
	 external.push(parseInt($('.external').text(),10));
	 lightLevel.push(parseInt($('.lightLevel').text(),10));
	 voltage.push(parseInt($('.voltage').text(),10));
	 
 });


var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Internal Temperature"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: internal[0] },
			{ y: internal[1]},
			{ y: internal[2]}, 
			{ y: internal[3] },
			{ y: internal[4] },
			{ y: internal[5] },
			{ y: internal[6] },
			{ y: internal[7] },
			{ y: internal[8] }, 
			{ y: internal[9] },
			{ y: internal[10] }
		]
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "External Temperature"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: external[0] },
			{ y: external[1]},
			{ y: external[2]}, 
			{ y: external[3] },
			{ y: external[4] },
			{ y: external[5] },
			{ y: external[6] },
			{ y: external[7] },
			{ y: external[8] }, 
			{ y: external[9] },
			{ y: external[10] }
		]
	}]
});

var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Light Level"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: lightLevel[0] },
			{ y: lightLevel[1]},
			{ y: lightLevel[2]}, 
			{ y: lightLevel[3] },
			{ y: lightLevel[4] },
			{ y: lightLevel[5] },
			{ y: lightLevel[6] },
			{ y: lightLevel[7] },
			{ y: lightLevel[8] }, 
			{ y: lightLevel[9] },
			{ y: lightLevel[10] }
		]
	}]
});

var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Voltage"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: voltage[0] },
			{ y: voltage[1]},
			{ y: voltage[2]}, 
			{ y: voltage[3] },
			{ y: voltage[4] },
			{ y: voltage[5] },
			{ y: voltage[6] },
			{ y: voltage[7] },
			{ y: voltage[8] }, 
			{ y: voltage[9] },
			{ y: voltage[10] }
		]
	}
	
]
});


chart1.render();
chart2.render();
chart3.render();
chart4.render();
$( "#graphBtn" ).click(function() {
  chart1.render();
});

 
}                           