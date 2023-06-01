<footer class="py-3 my-4" id="footer">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <?php 
        	      			if(!isset($_SESSION["user_id"])) {
                                echo "<a class='nav-item nav-link' href='/login'>Login</a>";
                            }
                            if(!isset($_SESSION["user_id"])) {
                                                    echo "<a class='nav-item nav-link' href='/register'>Register</a>";
                                                }
                                                 if(isset($_SESSION["user_id"])) {
                                                                                                                echo "<a class='nav-item nav-link' href='/logout'>LogOut</a>";
                                                                                                            }
                            ?>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
</footer>
<style>
    #footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
