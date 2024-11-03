<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <script src="additional-methods.js"></script>  
    <script>
        $(document).ready(function(){$.validator.addMethod("StrongPassword", function(value) {
    return /((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);
}, "Please enter a strong password with a minimum length of 8 characters.");

            $('#form1').validate({
                rules:{
                    usernames:{
                        required:true,
                        minlength:3,
                        nowhitespace:true,
                     lettersonly:true
                    
                    },
                    email:
                    {
                        required:true,
                        email:true
                      
                    },
                    psw:
                    {
                        required:true,
                        StrongPassword:true,
                        minlength:8

                    
                    },
                    con:{
                        required:true,
                        equalTo:"#psw"
                    },
                    fname:{
                     required:true,  
                     nowhitespace:true,
                     lettersonly:true
                    },
                    link:{
                        required:true,
                        url:true
                    },
                    'gender[]':{
                        required:true
                    },
                    check:{
                        required:true
                    },
                    age:{
                        required:true,
                        range:[10,100]
                    }
                },
                highlight:function(element){
                   $(element).addClass("c1");
                   $(element).removeClass("c2");

                },
                 unhighlight:function(element){
                    $(element).addClass("c2");
                },
                invalidHandler:function(element)
                {
                  var validator = $("#form1").validate();    
                $("#summary").text(validator.numberOfInvalids() + "fields are invalid..")
                },
               
                messages:{
                    usernames:{
                        required:"Name is mandatory",
                        minlenght:"At least enter 3 character",
                        nowhitespace:"space should not be name",
                        lettersonly:"only letters are allowed"
                    

                    },
                    email:{
                    required:"email is mandatory",
                    email:"enter valid email"
                    },
                    psw:{
                        required:"password is mandatory",
                        StrongPassword:"enter password including upper case,lowercase and special symbol and digits",
                        minlength:"enter atleast 8 digit"
                    },
                    con:{
                        required:" confirm password is mandatory",
                        equalTo:"Both password be same"
                    
                    },
                    fname:{
                        nowhitespace:"space should not be name",
                        lettersonly:"only letters are allowed"
                    },
                    link:{
                        url:"only valid url is allowed"
                    }
                    
                }
            })
        })
    </script>
    <style>
        .error{
            color:red;
        }
        .c1
        {
         border:2px red ridge;   
        }
        .c2
        {
         border:2px rgb(19, 230, 100) ridge;   
        }

    </style>
</head>
<body>
    <div class="container"><br><br>
        <h1 class="text-center text-warning">jquery form validation</h1>
    </div>
    <div class="col-lg-8 m-auto d-block">
        <form id="form1">
            <label for="fname">firstname:</label>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="enter first name"><br>
                <label for="usernames">lastname:</label>
                <input type="text" name="usernames" id="usernames" class="form-control" placeholder="enter last name"><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="enter email"><br>
                <label for="psw">password:</label>
                <input type="text" name="psw" id="psw" class="form-control" placeholder="enter password"><br>
                <label for="con">Confirm:</label>
                <input type="text" name="con" id="con" class="form-control" placeholder="enter confirm password"><br>      
                <label for="link">portfolio:</label>
                <input type="text" name="link" id="link" class="form-control" placeholder="enter your portfolio link"><br>   
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender[]" id="male">Male <br>
                    <input type="radio" name="gender[]" id="female">Female <br>
                    <label for="gender[]" class="error" style="display: none;"></label>
                </fieldset>   <br>
                <input type="checkbox" name="check" id="check">
                Accept the terms and policy <br>
                <label for="check" class="error" style="display: none;"></label>  <br>
                <label for="age">Age:</label>
                <input type="text" name="age" id="age" class="form-control" placeholder="enter your age"><br>      
                
                <input type="submit" value="submit" class="btn btn-info btn-block">    
        </form>
        <h2 id="summary"></h2>
    </div>
 </form>
</body>
</html>