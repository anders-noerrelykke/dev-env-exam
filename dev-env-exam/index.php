

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
	<link rel="stylesheet" href="style.css">
	<title>LOGIN</title>
	
</head>
<body>

	<div id="loginPage" class="front">
	
		<!-- LEFT SIDE -->
		<div class="half">

			<!-- REGISTER -->
			<div class="form">
				<p class="title">NEW USER<p>
				<div id="registerErrorMessage"></div>
				<form id="frmRegister">
					<input type="text" name="inputUsername" placeholder="Username" value="" class="nobullshit" maxlength="30">
					<input type="text" name="inputFirstname" placeholder="Firstname" value="" class="nobullshit" maxlength="30">
					<input type="text" name="inputLastname" placeholder="Lastname" value="" class="nobullshit" maxlength="30">
					<input type="email" name="inputEmail" placeholder="Email" value="" class="nobullshit" maxlength="50">
					<input type="password" name="inputPassword"	id="inputPassword" placeholder="Password" value="" class="nobullshit" maxlength="60">
					<input type="password" name="inputRetypePassword" id="inputRetypePassword"	placeholder="Retype Password" value="" class="nobullshit" maxlength="60">
					<button id="btnRegister" type="button" onclick="registerNewUser()">REGISTER</button>
				</form>
			</div>

			<!-- OVERLAY SLIDING PICTURE-->
			<div class="pic1 pic half"></div>
			<div class="overlay pic half">
				<p id="slider" onclick="moveSlider('left50')">></p>
			</div>

		</div>

		<!-- RIGHT SIDE -->
		<div class="half">

			<!-- LOG IN FORM -->
			<div class="form">
				<p class="title">ACCOUNT LOGIN<p>
				<div id="loginErrorMessage"></div>
				<form id="frmLogin">
					<input type="text" name="inputUsername" placeholder="Username" value="" class="nobullshit" maxlength="30">
					<input type="password" name="inputPassword"	placeholder="Password" value="" class="nobullshit" maxlength="60">
					<button id="btnLogin" type="button">LOGIN</button>
				</form>
				<p class="forgot"> Forgot <a href="#">Username</a> / <a href="#">Password</a></p>
			</div>

			<!-- SIGN UP BUTTON -->
			<p id="signup" class="signup" onclick="moveSlider('left50')">Sign up</p>
		</div>

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

	//----------------------------------------------------------------------//
	//				REGISTERING A NEW USER
	//----------------------------------------------------------------------//
/*<script>alert('du er en ged');*/
	function registerNewUser(){
		//CHECK IF PASSWORD MATCH
		var sPassword = $("#inputPassword").val();
		var sRetypePassword = $("#inputRetypePassword").val();

		//CHECK PASSWORDS INPUT FIELDS MATCH
		if(sPassword == sRetypePassword){
			console.log("matched passwords");

			//SERIALIZE DATA
			var dataFromForm = $("#frmRegister").serialize();

			//CLEAN DATA WITH SANITAZION
			var cleanData = sanitizeData(dataFromForm);

			//IF DATA IS CLEAN
			if (cleanData ){
				console.log("clean stuff received",cleanData);

				//POST DATA TO API
				$.post("api-save-user.php",cleanData, function(sResponse){
					//console.log("saving user");
					//var jResponse = JSON.parse(sResponse);
					console.log(sResponse);
					
					//IF API RETURNS MESSAGE
					if(sResponse){
						$("#registerErrorMessage").empty();
						$("#registerErrorMessage").append(sResponse);
						$("#frmRegister input").val("");
						
					}else{ // IF API FAILS
						$("#registerErrorMessage").empty();
						$("#registerErrorMessage").append("Error, could not register new user");
						console.log("API FAILED");
					}
				});
			}else{ // IF DATA DOES NOT COME BACK FROM SANITAZION
				console.log("not clean data from function");
			}

		}else{// IF PASSWORDS DONT MATCH IN FORM
			console.log("password does not match");
			$("#registerErrorMessage").empty();
			$("#registerErrorMessage").append("Error, passwords must match");
		}
		
	}//END OF USER REGISTRATION


    //----------------------------------------------------------------------//
	//				INPUT FORMS WHITELIST AND BLACKLIST
	//----------------------------------------------------------------------//

	//BLACKLIST THESE SYMBOLS FROM KEYPRESS: < = >
	$(".nobullshit").on("keypress keyup blur",function (event) {
	    var ew = event.which;
	    if(60 <= ew && ew <= 62) return false; // < > =
		if(34 <= ew && ew <= 44) return false; // ,' " # and so on
	});

	//----------------------------------------------------------------------//
	//								CLICK EVENTS
	//----------------------------------------------------------------------//

	$("#btnLogin").click(						function(){ 	login();				});		//login
	$(document).on('click', '#btnLogOut', 		function(){		logout();				});		//logout
	
	//----------------------------------------------------------------------//
	//						LOGIN / LOGOUT / CHECK USER
	//----------------------------------------------------------------------//
	function login(){
		var loginData = $("#frmLogin").serialize();
		console.log(1,"inside login");

		//GET SANITIZED DATA
		var cleanData = sanitizeData(loginData);
		
		$.post("api-login.php",cleanData, function(sResponse){
			//var jResponse = JSON.parse(sResponse);
			if(sResponse==true){
				window.location.replace("dashboard.php");
			}else{
				$("#loginErrorMessage").empty();
				$("#loginErrorMessage").append("error");
				console.log(sResponse);
			}
		});
	}

	function sanitizeData(data){
		if (data.indexOf("%3Cscript%3E") != -1 || data.indexOf("<script>") != -1  ){
			let dataNew = data.replace("%3Cscript%3E","");
			console.log("%cCleaning up script: ","color: red; font-size:15px;",data );
			console.log("%cNew version: ","color: blue; font-size:15px;",dataNew );
			sanitizeData(dataNew);
		}
		if(data.indexOf("\"")!= -1 || data.indexOf("%5C")!= -1){
			let dataNew = data.replace("\"","").replace("%5C","");
			console.log("%cCleaning up \": ","color: red; font-size:15px;",data );
			console.log("%cNew version: ","color: blue; font-size:15px;",dataNew );
			sanitizeData(dataNew);
		}
		else{
			data = encodeURI(data);
			console.log("%cClean: ","color: green; font-size:15px;",data);
			return data;	
		}
	}

	//----------------------------------------------------------------------//
	//						CSS TRANSITIONS
	//----------------------------------------------------------------------//

	function moveSlider(newPosition){
		if(newPosition=="left50"){
			$(".pic").css("left","50%");
			$("#slider").attr("onclick","moveSlider('left0')").html("<");
		}else{
			$(".pic").css("left","0px");
			$("#slider").attr("onclick","moveSlider('left50')").html(">");
		}
	}

</script>

</body>
</html>