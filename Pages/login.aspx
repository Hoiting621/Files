<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login.aspx.cs" Inherits="WebApplication1.Web.Pages.WebForm3" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Log In</title>
        <link href='../../Content/bootstrap.min.css' rel='stylesheet'/>
      <link href="../../css/styles.css" rel="stylesheet"/>
</head>
<body class="container">
    <form id="form1" runat="server">
        <div>

          
    
        
    <div class="row">
       
        <div class="col-lg-12 well">
            <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
               
                </form>
            </div>
            <a href="register.aspx" class="text-center new-account">Create an account </a>
        </div>
    </div>
            





        </div>
    </form>


      <script src='../../Scripts/jquery-3.0.0.min.js'></script>
    <script src='../../Scripts/popper.min.js'></script>
    <script src='../../Scripts/bootstrap.min.js'></script>
</body>

</html>
