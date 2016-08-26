<!doctype html>
<head>
	<title>TESTS</title>
		<script type="text/javascript" src="js/jquery/jquery.js"></script>
		<script type="text/javascript" src="js/jqueryui/jquery-ui.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
		<script type="text/javascript" src="js/angular-route.min.js"></script>
		<script type="text/javascript" src="js/functionsAngular.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		 <meta charset="UTF-8"> 
</head>
	<body>
		<div class="container">
			<h1>Hola</h1>
			<hr /><br />
			<div ng-app="miApp" ng-controller="controller" class="container" style="margin: 0 auto">
				<h2>{{hola}}</h2>
				<br />
				<div ng-app="miApp2" ng-controller="dataController">
				<form>

					Nombre: <input type="text" class="input" ng-model="nombre"></input><br />
					Apellido p:<input type="text" class="input" ng-model="apellidop"></input><br />
					Apellido m:<input type="text" class="input" ng-model="apellidom"></input><br />
					<input type="button" value="Enviar" ng-click="insertdata()">

				</form>
				</div>
				<br />
				{{pal}}
				<br />
				<a href="#aloha" id="mostrarInfo">Mostrar datos</a>
				<div ng-view></div>
    	</div>
    	</div>
    	</div>
    	<br />



			
		
	</body>
</html>