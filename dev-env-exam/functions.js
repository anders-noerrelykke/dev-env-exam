// BASIC HTTP REQUEST - REUSE!!
function http(method, api, callback, form) {
	var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            callback(this.responseText);
        };
    };
	ajax.open( method, api, true );
	if(form){
		ajax.send(form);
	}else{
		ajax.send();
	}
}

function getWarehouses(){
	var dataToFetch = "warehouse";
	http("get", "api-get-warehouses.php?table="+dataToFetch, function(data){
		console.log(JSON.parse(data));
	});
}

getWarehouses();





// NAVIGATION

function navigateTo(page){
	switch(page){
		case "despatch":
			console.log("Despatch");
			break;
		case "delivery":
			console.log("Delivery");
			break;
		case "jobs":
			console.log("Jobs");
			break;
		case "logs":
			console.log("Logs");
			break;
		case "overview":
			console.log("Overview");
			break;
	}
}
   
checkLogin();

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