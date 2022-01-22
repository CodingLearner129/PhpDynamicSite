<!-- Contact Form Start -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="tel" name="mobile" id="mobile" pattern="[789]{1}[0-9]{9}" maxlength="10" autocomplete="off" class="form-control" title="Phone number with 7-9 and remaing 9 digit with 0-9" required>
            </div>
            <div class="form-group">
                <label for="comment">Comments</label>
                <textarea class="form-control" name="comment" id="comment" cols="10" rows="10"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>    
<!-- Contact Form End -->