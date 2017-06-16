<!DOCTYPE html>
<html>
<head>
	<title>CustomerList</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<div class="row">
	<!--NAVBAR -->
		<nav class="navbar navbar-inverse">
			<div class="container">
				<ul class="nav nav-pills">
 			 	<li role="presentation" class="active"><a href="/">Home</a></li>
  				<li role="presentation"><a href="/customers">Customers</a></li>
  				<li role="presentation"><a href="#">Login</a></li>
			</ul>
			</div>
		</nav>
	<!--end of NAVBAR -->
	
	<div class="form-group">

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Customers</th>
      <th>Statuscode</th>
      <th>URL's</th>
    </tr>
  </thead>
  <tbody>@foreach($customers as $customer)
    <tr>
      <td>{{$customer->customerId}}</td>
      <td>{{$customer->customerName}}</td>
      <td>#</td>
      <td>{{$customer->customerURLs}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
	</div>
</div>
</body>


<style type="text/css">
	<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
</style>

</html>