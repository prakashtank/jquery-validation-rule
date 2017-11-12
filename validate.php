<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript">
// Wait for the DOM to be ready
$(function() {
  
  $("#f").validate({
    // Specify validation rules
    rules: {
     
      firstname: "required",
      lastname: "required",
      email: {
                required: true,
                email: true
             },
      password: {
                required: true,
                minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    
    submitHandler: function(form) {
      //form.submit();
      $.ajax({
                        url: 'response.php',
                        type: 'POST',
                        data: $(form).serialize(),
                        success: function(response) {
                           alert(response);
                        }            
                    });


    }
  });
});

</script>
<style>
  .error {
    color: #ff0000;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Registration</h2>
      <form action="" name="registration" id="f">

        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="John">

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Doe">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="john@doe.com">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">

        <button type="submit">Register</button>
      </form>
</div> 
</body>
</html>
