
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .container{
            width:100vw;
            text-align:center;
            margin-top:100px;
            display:flex;
            justify-content: center;
            flex-direction:column;
            align-items:center;
            
        }
        .container form{
            display:flex;
            justify-content: center;
            align-items:center;
            padding:20px;
            width:60%;
            border-radius:10px;
            box-sizing: inherit;
        }
        form .div1,.div2{
            display:flex;
            width: 100%;
            flex-direction:column;
            justify-content:start;
            align-items:start;
        }
        .container form .btS{
            width: 100%;
            margin-top:1rem;
        }
        .container form h1,div{
            margin:20px;
        }
        @media (max-width:430px) {
            .container form{
                width: 100%;
            }
        }
        @media (max-width:920px) {
            .container form{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="addUser.php" method="post" class="row " autocomplete="off">
        <h1 class="col-12">Mangment My items</h1>
        <div class="col-12 div1 ">
            <label for="validationCustom01" class="form-label" >Enter User Name</label>
            <input type="text" class="form-control" id="validationCustom01" required  name="user-name">
        </div>
        <div class="col-12 div2">
            <label for="validationCustom0" class="form-label" >Enter Email</label>
            <input type="email" class="form-control" id="validationCustom0" required name="user-email">
        </div>
        <div class="col-12 div2">
            <label for="validationCustom0" class="form-label" >Enter Password</label>
            <input type="password" class="form-control" id="validationCustom0" required name="user-pass">
        </div>
        
        
            <input type="submit" value="LOG IN" class="btn btn-primary btS" name="sbT" >
        <div >
            have account?<a href="index.html">Log In</a>
        </div>
    </form>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="scrpit.js"></script>
</body>
</html>
