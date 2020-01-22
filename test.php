<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <script src="js/jquery-3.3.1.min.js"></script> 
     <link rel="stylesheet" href="js/toastr.min.css"> 
    <script src="js/popper.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/body_toast.js"></script>      
</head>
<body>
    
</body>
</html>


<script>
$(document).ready(function() {
    toastr["warning"]("Mensaje de prueba", "Demo");  //llamando al toast
});


</script>