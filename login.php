<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="login1.js"></script>  
    <link rel="stylesheet" href="frm.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col-md-6 col-lg-6 form_column mx-auto mt-5 ml-5 offset-lg-4 d-flex justify-content-center align-item-center">
                    <fieldset>
                        <legend class="pb-4 ml-5 pl-5 pt-3 legn">............... LOGIN............</legend>
                    <form class="pl-2 pr-2" action="" id="adminForm" method="POST">
                        <div class="form-row">
                          <div class="col-md-6 col-lg-12 mb-3 pl-2 pr-2">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="uname" id="uname" value="" onkeyup="test.nameValidate()" required>
                            <span id="unameMessage"></span><br>
                          </div>
                          <div class="col-md-6 col-lg-12 mb-3 pl-2 pr-2">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" name="pwd" id="pwd" value="" onkeyup="test.pwdValidate()"  required >
                            <span id="pwdMessage"></span><br>
                          </div>
                        </div>
                        
                         <div class="col-md-5 mt-4 mb-5 pl-3 pr-2 offset-lg-4">
                        <button type="submit" class="btn_login" name ="btn_login" id="btn">Login</button>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="form.js"></script> -->
    
</body>
</html>