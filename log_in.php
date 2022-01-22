<?php
    include "header.php";
?>    
    <div class="jumbotron">
        <h1>Dhgp :) </h1>
        <p>We are The Web Developer.</p>
    </div>
    <!-- Sign Form Start -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Log In</h2>
        </div>
        <div class="form-w m-auto">
            <form action="send_log_in.php" method="POST">
                <!-- <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" autocomplete="off" class="form-control"  required >
                </div> -->
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" class="form-control" required >
                </div>
                <!-- <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" id="mobile" pattern="[789]{1}[0-9]{9}" autocomplete="off" class="form-control" title="Phone number with 7-9 and remaing 9 digit with 0-9" required >
                </div> -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" class="form-control" minlength="8" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                    <span class="material-icons" id="visibility" onclick="show()" >visibility</span>
                    <span class="material-icons" id="visibilityOff" onclick="show()" >visibility_off</span>
                </div>
                <!-- <div class="form-group">
                    <input type="checkbox" name="showPassword" id="showPassword" onclick="show()">
                    <label for="showPassword">Show Password</label>
                </div> -->
                <!-- <div class="form-group">
                    <label for="comment">Comments</label>
                    <textarea class="form-control" name="comment" id="comment" cols="10" rows="10"></textarea>
                </div> -->
                <button type="submit" name="login" class="btn btn-success">Log In</button>
                <span class="pt-3 pl-2 block">Don't have an account? <a class="pl-1 block" href="sign_up.php"><u> Sign Up</u></a> Here</span>
            </form>
        </div>
    </section>
    <!-- Sign Form End -->
    <script>
        function show(){
            let show = document.querySelector("#password");
            let visible = document.querySelector("#visibility");
            let visibleOff = document.querySelector("#visibilityOff");
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
    </script>
<?php
    include "footer.php";
?>