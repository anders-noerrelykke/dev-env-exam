<?php 
session_start();

if(!isset($_SESSION["login"]))
{
	echo 'you need to log in <a href="index">here</a>';
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans">
	<link rel="stylesheet" href="style.css">
	<title>Dashboard</title>
</head>

<body>
    <!-- HEADER -->
    <div class="header" id="header">
        <ul class="menu">
            <li class="menu">LOGS</li>
            <li class="menu" id="menuDelivery">Delivery (1)</li>
            <li class="menu" id="btnMenuChat">Despatch	(2)</li>
        </ul>
        <div id="btnLogOut" class="profilepic">X</div>
    </div>

    <!-- MAIN SECTION -->
    <div id="main">

		<!-- LEFT SECTION -->
        <div class="onlineUsers">
			<p class="margin10">DELIVERY of 3256:</p>
			<div class="profilepic margin10 done" id="step1">1</div>
			<div class="profilepic margin10" id="step2">2</div>
			<div class="profilepic margin10" id="step3">3</div>
			<div class="profilepic margin10" id="step4">4</div>
		</div>

		<!-- MIDDLE SECTION -->
		
		<div class="mid">
		<div id="bar"></div>	

			<!-- SEE CHAT HERE -->
			<div  class="absolute" id="boxStep1">
				DELIVERY 3256 <br> Step 1: Enter data from ticket<br>
				<input type="checkbox" class="step1"> A
				<input type="checkbox" class="step1"> B
				<input type="checkbox" class="step1"> C <br>
				<input type="number" class="number"> KiloUnits<br><br>
				<button class="profilepic" onClick="clickSubmit('1')">submit</button>
			</div>
			<div class="absolute" id="boxStep2" style="display:none;">
				DELIVERY 3256 <br><br>
				JOB CREATED: "ticket data here" <br>
				Capacity is 80% <br>
				<input type="checkbox" class="step1"> OK, continue to warehouse 5c
				<br><br>
				<button class="profilepic" onClick="clickSubmit('2')">submit</button>
			</div>
			<div class="absolute" id="boxStep3" style="display:none;">
				DELIVERY 3256<br><br>
				AT WAREHOUSE: 5c <br>
				Check if shipment matches:<br> "ticket data here" <br><br>
				<input type="checkbox" class="step1"> it matches.
				<br><br>
				<button class="profilepic" onClick="clickSubmit('3')">submit</button>
			</div>
			<div class="absolute" id="boxStep4" style="display:none;">
				AT WAREHOUSE: 5c <br><br>
				Finish delivery of:<br> "ticket data here" <br><br>
				<input type="checkbox" class="step1"> Barrels have been placed.
				<br><br>
				<button class="profilepic" onClick="clickSubmit('4')">submit</button>
			</div>
			<div class="absolute" id="end" style="display:none;">
				DELIVERY COMPLETE. <br><br>
				message:<br> "confirmed" <br><br>
			</div>

			
		</div>
        
		<!-- RIGHT SECTION -->
        <div class="userSettings pic1"></div>

    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="functions.js"></script>
<script>
	function clickSubmit(step){
		console.log(step);
		if(step==1){
			$("#step2").addClass("done");
			$("#boxStep1").fadeOut();
			$("#boxStep2").fadeIn();
			$("#bar").css("width","25%");
		}
		if(step==2){
			$("#step3").addClass("done");
			$("#boxStep2").fadeOut();
			$("#boxStep3").fadeIn();
			$("#bar").css("width","50%");
		}
		if(step==3){
			$("#step4").addClass("done");
			$("#boxStep3").fadeOut();
			$("#boxStep4").fadeIn();
			$("#bar").css("width","75%");
		}
		if(step==4){
			$(".done").css("background","#434854").css("box-shadow","none");
			$("#boxStep4").fadeOut();
			$("#end").fadeIn();
			$("#bar").css("width","100%");
			$("#menuDelivery").html("Delivery");
		}
		
	}

	

</script>

</body>
</html>