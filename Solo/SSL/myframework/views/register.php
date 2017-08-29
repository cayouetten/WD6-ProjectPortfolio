<style>
    #contactForm {
        margin-left: auto;
        margin-right: auto;
        width: 65%;
    }
    #formSuccess {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 50px;
    }
</style>

<!-- CONTENT -->
<!-- captcha -->
<?
function create_image($cap) {
    unlink("./assets/images/image1.png");

    global $image;

    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 255, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);
    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

    for ($i = 0; $i < 3; $i++) {
        imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
    }

    for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }

    $text_color = imagecolorallocate($image, 0, 0, 0);
    ImageString($image, 22, 30, 22, $cap, $text_color);

    //session var
    $_SESSION["captchaImg"] = $cap;

    imagepng($image, "./assets/images/image1.png");
}

create_image($data["cap"]);
?>

<form id="contactForm" method="POST" action="/register/contactRecv">
    <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <!-- email error -->
    <div class=form-group">
        <p id="emailErr" class="text-danger"></p>
    </div>


    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>

    <!-- password error -->
    <div class=form-group">
        <p id="passwordErr" class="text-danger"></p>
    </div>


    <div class="form-group">
        <label for="select">Level</label>
        <select name="select" class="form-control" id="select">
            <option>Amateur</option>
            <option>Beginner</option>
            <option>Intermediate</option>
            <option>Advanced</option>
            <option>Expert</option>
        </select>
    </div>

    <div class="form-group">
        <label for="textarea">Experience</label>
        <textarea name="textarea" class="form-control" id="textarea" rows="3"></textarea>
    </div>

    <!-- textarea error -->
    <div class=form-group">
        <p id="textareaErr" class="text-danger"></p>
    </div>


    <div class="form-group">
        <label for="input">File Input</label>
        <input name="input" type="file" class="form-control-file" id="input" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Upload file here.</small>
    </div>

    <fieldset class="form-group">
        <label>Role</label>
        <div class="form-check">
            <label class="form-check-label">
                <input name="radios1" type="radio" class="form-check-input radios" id="radios1" value="SSL" checked>
                SSL
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input  name="radios2" type="radio" class="form-check-input radios" id="radios2" value="CSL">
                CSL
            </label>
        </div>
    </fieldset>

    <!-- submission error -->
    <div class=form-group">
        <p id="submissionErr" class="text-danger"></p>
    </div>


    <!-- captcha -->
    <? echo "<img src='../assets/images/image1.png'>"; ?>
    <div>
        <label for="captcha">Enter Captcha </label>
        <input name="captcha" type="captcha" id="captcha"  placeholder="">
    </div>


<!--    <button type="submit" class="btn btn-primary">Submit</button>-->

    <input type="button" value="Submit"  id="addUserButton" class="btn btn-primary"/>
</form>

<!--form submission successful-->
<div id="formSuccess" class="form-group"></div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>

<script>
    $("#addUserButton").click(function(){

        var email = $("#email").val();
        var password = $("#password").val();
        var select = $("#select").val();
        var textarea = $("#textarea").val();
        var input = $("#input").val();
        var radio = $(".radios:checked").val();
        var captcha = $("#captcha").val();

        var complete = false;

        if(email === "") {
            document.getElementById("emailErr").innerHTML = "Please enter email";
            complete = false;
        } else {
            document.getElementById("emailErr").innerHTML = "";
            complete = true;
        }

        if (password === "") {
            document.getElementById("passwordErr").innerHTML = "Please enter password";
            complete = false;
        } else {
            document.getElementById("passwordErr").innerHTML = "";
            complete = true;
        }

        if (textarea === "") {
            document.getElementById("textareaErr").innerHTML = "Please enter text";
            complete = false;
        } else {
            document.getElementById("textareaErr").innerHTML = "";
            complete = true;
        }

        if(complete) {
            $.ajax({
                method: "POST",
                url: "/register/addUser",
                data: {
                    "email" : email,
                    "password" : password,
                    "select" : select,
                    "textarea" : textarea,
                    "input" : input,
                    "radio" : radio,

                    "captcha" : captcha
                },
                success: function(msg) {
                    if(msg === "welcome") {
                        document.getElementById("emailErr").innerHTML = "";
                        document.getElementById("passwordErr").innerHTML = "";
                        document.getElementById("submissionErr").innerHTML = "";

                        //show form submission
                        document.getElementById("contactForm").innerHTML = "";
                        document.getElementById("formSuccess").innerHTML = "<h2>Registration successful!</h2>" +
                            "<h4>"+ email +"</h4>" +
                            "<h4>"+ select +"</h4>" +
                            "<h4>"+ textarea +"</h4>" +
                            "<h4>"+ input +"</h4>" +
                            "<h4>"+ radio +"</h4>" +
                            "<a href='/register/deleteUser/"+email+"'>DELETE</a>" +
                            "<a href='/register/showEditUserForm/"+email+"'>EDIT</a>";
                    } else if(msg === "emailErr") {
                        document.getElementById("emailErr").innerHTML = "Please enter a valid email";
                    } else if(msg === "emailExistsErr") {
                        document.getElementById("emailErr").innerHTML = "Email already taken. Please try again";
                    } else if(msg === "passwordErr") {
                        document.getElementById("passwordErr").innerHTML = "Password invalid. No special characters allowed";
                    } else if (msg === "captchaErr") {
                        document.getElementById("submissionErr").innerHTML = "Could not validate captcha";
                    } else {
                        console.log("error" + msg);
                    }
                }
            })
        }
    });
</script>