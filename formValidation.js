

$().ready (function(){
    
    $("#form").validate ({
        rules:{
            username:{
                required:true,
                minlength: 5
                
            },
            email:{
                required:true
            },
            password:{
                required:true,
                minlength: 5
            },
            confirm_password:{
                required:true
            }
            
        },
        messages:{
            useername:{
                required: "Username must be required",
                username: "Username must contains only letters"
            },
            password:{
                required: "Password must be required field"
            },
            confirm_password:{
                required: "Confirm Password is also required"
            },
            email:{
                required: "E-mail is required",
                email: "Please Enter an valid E-mail"
            }
        },

    })
})

