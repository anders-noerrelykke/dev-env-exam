
    
    checkLogin();
//conflicting

	// COMMEEEENT
	var user = "";

	function checkLogin(){
		$.post("api-check-login.php", (sResponse)=>{
			
			console.log("the user is: "+sResponse);

			if(sResponse==false){
				console.log("not logged in");
				//logOut();
			}else{
				user = sResponse;
				console.log("logged in as "+sResponse);
				console.log(user);
			}

		});
	}


	//----------------------------------------------------------------------//
	//								CLICK EVENTS
	//----------------------------------------------------------------------//


	$("#btnLogOut").click( ()=>{ 	logOut();			}); // LOG OUT


	// LOG OUT
	function logOut(){
		console.log("logging out");
		$.post('api-logout.php', (sResponse)=>{
			if(sResponse == true){
				window.location.replace("index.php");
			}else{
				console.log(sResponse);
			}
		});
	}