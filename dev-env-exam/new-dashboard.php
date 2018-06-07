

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<link rel="stylesheet" href="styles.css">
	<title>LOGIN</title>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
</head>
<body class="">
<div class="container col-xl-12 col-sm-12">
         <div class="row my-2">
            <div class="container col-12 bg-light">
                <h1 class="overskrift1"><br>TOXIC INDUSTRIE A/S</h1>
            </div>
        </div>

        <div class="row">
            <div class="container-fluid bg-dark text-white lead">
				<div class="row">
					<div class="col-8">DESPATCH / DELIVERY / JOBS / LOGS</div>
                	<div class="col-4 text-right small text-white-50">Peter Madsen (0403)</div>
				</div>
				
            </div>
        </div>

        <div class="row my-2">

            <div class="col bg-light mr-2">
                <div class="container mt-2">

                    <h1 class="display-4">DELIVERY</h1>
					<br>
					request type: A<br>
					amount: 5<br>
					depot stock: 6<br>
					location: warehouse 2<br>
					job: D2018-23 <br> <br> <br> <br> 
                </div>
                
            </div>
            <div class="col bg-dark text-white display-4">
                    A
            </div>
            
        </div>

        <div class="row">
			<div class="col bg-info text-white">
				<br>
				DRIVER ARRIVED <br> 
				12.45<br><br>
			</div>
				
			<div class="col mx-2 bg-warning">
				 <br>
				STOCK CHECK <br>
				--
			</div>
            <div class="col bg-light"> 
			<br>
				COMPLETE  <br>
				--
			</div>
			
        </div>

        <div class="row">
            <div class="col-md-6 text-dark text-center display-4 my-auto"> PROCEDURES</div>
            <div class="col-md-6 my-auto py-1">
                <button id="btn-free" class="btn my-1 mx-1" onclick="runStep('1')">TICKET</button>
                <button id="btn-pole" class="btn my-1 mx-1" onclick="runStep('2')">STOCK</button>
                <button id="btn-dance" class="btn my-1 mx-1" onclick="runStep('3')">FINAL</button>
            </div>
        </div>

        <div class="row mb-2">
 
                <div id="monday" class="col-sm-12 col-md px-0 bg-white pl-md-0 px-1"> 
                    <div class="container-fluid bg-dark text-light text-center">12.45: Driver arrival</div>
                </div>

                <div id="tuesday" class="col-sm-12 col-md px-0 bg-white pl-md-0 px-1"> 
                    <div class="container-fluid bg-dark text-light text-center">12.45: stock checked - 6</div>
                </div>

                <div id="wednesday" class="col-sm-12 col-md px-0 bg-white pl-md-0 px-1"> 
                    <div class="container-fluid bg-dark text-light text-center">12.45: Job created - D2018-23</div>
                </div>

                <div id="thursday" class="col-sm-12 col-md px-0 bg-white pl-md-0 px-1"> 
                    <div class="container-fluid bg-dark text-light text-center">--- : ---</div>
                </div>

                <div id="friday" class="col-sm-12 col-md px-0 bg-white pl-md-0 px-1"> 
                    <div class="container-fluid bg-dark text-light text-center">--- : ---</div>
                </div>

                <div id="saturday" class="col-sm-12 col-md px-0 bg-white pl-md-0 px-1"> 
                    <div class="container-fluid bg-dark text-light text-center">--- : ---</div>
                </div>

                <div id="sunday" class="col-sm-12 col-md px-0 bg-white px-md-0 px-1"> 
                    <div class="container-fluid bg-dark text-light text-center">--- : ---</div>
                </div>
                
            
        </div>

        <div class="row" id="test">

        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>


	//----------------------------------------------------------------------//
	//								CLICK EVENTS
	//----------------------------------------------------------------------//


	//----------------------------------------------------------------------//
	//						LOGIN / LOGOUT / CHECK USER
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//						CSS TRANSITIONS
	//----------------------------------------------------------------------//



</script>

</body>
</html>