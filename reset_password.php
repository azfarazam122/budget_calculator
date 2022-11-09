<?php 
    // if(!isset($_GET['token'])){
    //     header('Location: login.html');
    // }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css"
        integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"
        integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Reset Password</title>
    <style>
    input {
        border: none;
    }

    button:focus {
        outline: none;
    }

    ::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.65);
    }

    ::-webkit-input-placeholder .input-line:focus+ ::input-placeholder {
        color: #fff;
    }

    .highlight {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 400;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .highlight:hover {
        color: #fff;
        transition: color 0.2s ease;
    }

    .spacing {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        height: 120px;
        font-weight: 300;
        text-align: center;
        margin-top: 10px;
        color: rgba(255, 255, 255, 0.65);
    }

    .input-line:focus {
        outline: none;
        border-color: #fff;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    .ghost-round {
        cursor: pointer;
        background: none;
        border: 1px solid rgba(255, 255, 255, 0.65);
        border-radius: 25px;
        color: rgba(255, 255, 255, 0.65);
        -webkit-align-self: flex-end;
        -ms-flex-item-align: end;
        align-self: flex-end;
        font-size: 19px;
        font-size: 1.2rem;
        font-family: roboto;
        font-weight: 300;
        line-height: 2.5em;
        margin-top: auto;
        margin-bottom: 25px;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    .ghost-round:hover {
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    .input-line {
        background: none;
        margin-bottom: 10px;
        line-height: 2.4em;
        color: #fff;
        font-family: roboto;
        font-weight: 300;
        letter-spacing: 0px;
        letter-spacing: 0.02rem;
        font-size: 19px;
        font-size: 1.2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.65);
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    .full-width {
        width: 100%;
    }

    .input-fields {
        margin-top: 25px;
    }

    .container {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 100%;
    }

    .content {
        padding-left: 25px;
        padding-right: 25px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: column;
        -ms-flex-flow: column;
        flex-flow: column;
        z-index: 5;
    }

    .welcome {
        font-weight: 200;
        margin-top: 75px;
        text-align: center;
        font-size: 40px;
        font-size: 2.5rem;
        letter-spacing: 0px;
        letter-spacing: 0.05rem;
    }

    .subtitle {
        text-align: center;
        line-height: 1em;
        font-weight: 100;
        letter-spacing: 0px;
        letter-spacing: 0.02rem;
    }

    .menu {
        background: rgba(0, 0, 0, 0.2);
        width: 100%;
        height: 50px;
    }

    .window {
        z-index: 100;
        color: #fff;
        font-family: roboto;
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: column;
        -ms-flex-flow: column;
        flex-flow: column;
        box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        height: 500px;
        width: 360px;
        background: #fff;
        background: url("https://pexels.imgix.net/photos/27718/pexels-photo-27718.jpg?fit=crop&w=1280&h=823") top left no-repeat;
    }

    .overlay {
        background: -webkit-linear-gradient(#c84182, #0e0b02);
        background: linear-gradient(#c84182, #0e0b02);
        opacity: 0.85;
        filter: alpha(opacity=85);
        height: 500px;
        position: absolute;
        width: 360px;
        z-index: 1;
    }

    .bold-line {
        position: absolute;
        top: 0px;
        bottom: 0px;
        margin: auto;
        width: 100%;
    }

    @media (max-width: 500px) {
        .window {
            width: 100%;
            height: 100%;
        }

        .overlay {
            width: 100%;
            height: 100%;
        }
    }
    </style>
</head>

<body>
    <!-- <p class="display-5 text-center">Reset Password</p>
    <div class="container  mt-5 p-5 text-center" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="text-start">
            <label for="resetpassword" class="lead fs-4 mb-2">New Password </label>
            <input id="resetpassword" class="form-control col-md-6" type="text" placeholder="Enter new password">
        </div>
        <div class=" text-end">
            <button id='submit' class="btn  btn-dark " onclick="updatepassword()">Submit</button>
        </div>

    </div> -->

    <!-- ____________________________ -->
    <div class="bold-line"></div>
    <div class="container mt-5">
        <div class="window mt-5">
            <div class="overlay"></div>
            <div class="content">
                <div class="welcome">Reset Password!</div>
                <div class="subtitle">
                </div>
                <div class="input-fields">
                    <input type="text" class="input-line full-width" id="resetpassword"
                        placeholder="Enter New Password" />
                    <input type="text" class="input-line full-width" id="confirmpassword"
                        placeholder="Confirm Password" />
                </div>

                <div class="mt-5 pt-5">
                    <button class="ghost-round full-width" onclick="updatepassword()">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ____________________________ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function updatepassword() {

        if (document.getElementById('resetpassword').value == document.getElementById('confirmpassword').value) {

            $.ajax({
                type: "POST",
                url: "php/updatePassword.php",
                data: {

                    update_Password: document.getElementById('resetpassword').value
                },
                success: function(response) {

                    if (response == "success") {
                        Swal.fire({
                            icon: "success",
                            title: "Successful...",
                            text: "Password Changed Successfully",
                        });
                        window.location.href = "login.html";
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Reset Password Failed...",
                            text: "",
                        });
                    }
                },

                error: function(response) {
                    console.log(response);
                },
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Password Doesn't Match ...",
                text: "Password and Confirm Password must match!",
            });
        }

    }
    </script>
</body>


</html>