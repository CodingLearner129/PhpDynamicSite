<?php
    include "header.php";
?>    
    <div class="jumbotron">
        <h1>Dhgp :) </h1>
        <p>We are The Web Developer.</p>
    </div>
    <!-- Update Form Start -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Sign Up</h2>
        </div>
        <div class="form-w m-auto">
            <form action="send_sign_up.php" method="POST">
                <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" name="username" id="username" autocomplete="off" class="form-control"  required >
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" class="form-control" required >
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="tel" name="mobile" id="mobile" pattern="[789]{1}[0-9]{9}" maxlength="10" autocomplete="off" class="form-control" title="Phone number with 7-9 and remaing 9 digit with 0-9" required >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" class="form-control" minlength="8" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                    <span class="material-icons" id="visibilityPass" onclick="show()" >visibility</span>
                    <span class="material-icons" id="visibilityOffPass" onclick="show()" >visibility_off</span>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" class="form-control" minlength="8" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                    <span class="material-icons" id="visibilityConfirm" onclick="showConfirm()" >visibility</span>
                    <span class="material-icons" id="visibilityOffConfirm" onclick="showConfirm()" >visibility_off</span>
                </div>
                <!-- <div class="form-group">
                    <input type="checkbox" name="showPassword" id="showPassword" onclick="show()">
                    <label for="showPassword">Show Password</label>
                </div> -->
                <!-- <div class="form-group">
                    <label for="comment">Comments</label>
                    <textarea class="form-control" name="comment" id="comment" cols="10" rows="10"></textarea>
                </div> -->
                <button type="submit" name="signup" id="signup" onclick="same()" class="btn btn-success">Sign up</button>
                <span class="pt-3 pl-2 block">Already have an account? &nbsp; <a class="block" href="log_in.php"><u> Log In</u> </a></span>
            </form>
        </div>
    </section>    
    <!-- Update Form End -->
    <script>
        function show(){
            let show = document.querySelector("#password");
            let visible = document.querySelector("#visibilityPass");
            let visibleOff = document.querySelector("#visibilityOffPass");
            if(show.type === "password"){
                show.type = "text";
                visible.style.display="none";
                visibleOff.style.display="block";
            } else{
                show.type = "password";
                visible.style.display="block";
                visibleOff.style.display="none";
            }
        }
        function showConfirm(){
            let showConfirm = document.querySelector("#confirmPassword");
            let visibleConfirm = document.querySelector("#visibilityConfirm");
            let visibleOffConfirm = document.querySelector("#visibilityOffConfirm");
            if(showConfirm.type === "password"){
                showConfirm.type = "text";
                visibleConfirm.style.display="none";
                visibleOffConfirm.style.display="block";
            } else{
                showConfirm.type = "password";
                visibleConfirm.style.display="block";
                visibleOffConfirm.style.display="none";
            }
        }
        function same(){
            let password = document.querySelector("#password").value;
            let confirmPassword = document.querySelector("#confirmPassword").value;
            if(password != confirmPassword){
                alert("Password and ConfirmPassword must be same!");
            }
        }
    </script>
<?php
    // header(location:"");
    include "footer.php";
?>