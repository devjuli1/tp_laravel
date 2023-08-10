<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>

    <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="{{ route('users') }}"  method='post'>
                    @csrf
					<span class="login100-form-title">
					Liste des utilisateurs
					</span>
					<table>
					<thead>
    <tr>
      <th scope="col">password</th>
      <th scope="col">nom</th>
      <th scope="col">prénom</th>
      <th scope="col">numero</th>
      <th scope="col">domicile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  

  <tbody>
    @foreach($users as $item)
     
    <tr>
      <th scope="row"></th>
      <td>{{$item->nom}}</td>
      <td>{{$item->prenom}}</td>
      <td>{{$item->numero}}</td>
      <td>{{$item->domicile}}</td>
	  <td>{{$item->role_id->1}}</td>
  
     
        <a href="#" class="btn btn-info">Ajouter</a>
        <a href="#" class="btn btn-danger">Retirer</a>
      </td>
    </tr>

	<tr>
      <th scope="row"></th>
      <td>{{$item->nom}}</td>
      <td>{{$item->prenom}}</td>
      <td>{{$item->numero}}</td>
      <td>{{$item->domicile}}</td>
	  <td>{{$item->role_id->2}}</td>
  
     
        <a href="#" class="btn btn-info">Ajouter</a>
        <a href="#" class="btn btn-danger">Retirer</a>
      </td>
    </tr>
    @endforeach

  </tbody>		
					</table>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
</body>
</html>