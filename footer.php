    <!-- Footer Start -->
    <footer>
        <a id="back-to-top" href="#" class="btn btn-dark btn-lg text-warning" role="button">
        <span class="material-icons">keyboard_double_arrow_up</span>
        </a>
        <p class="p-3 mb-0 bg-dark text-white text-center">@Dhgp Production</p>
    </footer>
    <!-- Footer End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

        //Get the button
        let mybutton = document.getElementById("back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
        scrollFunction();
        };

        function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>