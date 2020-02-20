<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<form action="store" method="post" enctype="multipart/form-data">
 <label for="Fname">First Name:</label><br>
 <input type="text" name="Fname"><br>
 <label for="Sname">Second Name:</label><br>
 <input type="text" name="Sname"><br>
 <label for="BirthDate">BirthDate:</label><br>
 <input type="Date" name="BirthDate"><br>
 <label for="Age">Age:</label><br>
 <input type="number" name="Age"><br>
 <label for="Gender">Gender:</label><br>
 <input type="text" name="Gender"><br>
 <label for="PhysicalAddress">Physical Address:</label><br>
 <input type="text" name="PhysicalAddress"><br>
 <label for="PostalAddress">Postal Address:</label><br>
 <input type="text" name="PostalAddress"><br>
 <input type="hidden" name="_token" value="{{csrf_token()}}">

 <input type="submit" value="submit">
</form>
</div>

    
    <script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </script>
</body>
</html>