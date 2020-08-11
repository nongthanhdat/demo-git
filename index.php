  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validate form</title>
	<link rel="stylesheet">
</head>
<body>

<div class="container">
  <h2>Register Form</h2>
  <div id="error_message"></div>
  <form onsubmit="return validate();">
    <div class="input">
        <input type="text" placeholder="Name" id="name">
    </div>
    <div class="input">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    <div class="input">
        <input type="text" placeholder="Email" id="email">
    </div>
    <div class = "btn">
   	<input type="submit" name="register" value="Register">
   	</div>
  </form>
</div>

</body>
</html>
<script type="text/javascript">
function validate(){
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var error_message = document.getElementById("error_message");
  
  
  var text;
  if(name.length == " "){
    text = "Vui long nhap ten";
    error_message.innerHTML = text;
    return false;
    }
  if(isNaN(phone) || phone.length != 10 ){
    text = "Vui long nhap so dien thoai";
    error_message.innerHTML = text;
    return false;
    }
  if(email.indexOf("@") == -1 ||// khong co ky tu @
    email.indexOf("@") == 0 || // @ nam o vi tri dau tien
    email.lastIndexOf(".") == -1 || // khong co dau "."
    email.indexOf(" ") != -1 )// co dau cach)
    {
    text = "Vui long nhap dia chi email";
    error_message.innerHTML = text;
    return false;
  }
  alert ("Form Submitted Successfully!");
  return true;
}
</script>
<style>
    input{
      width: 200px;
      padding: 10px 15px;
      margin: 6px;
      border: 1.5px solid #B2B196;     
    }
    h2{
      padding: 10px;
    }
    #error_message{
      padding: 10px;
      color : red;
    }
</style>

