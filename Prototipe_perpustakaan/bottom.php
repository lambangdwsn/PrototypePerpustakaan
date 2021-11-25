</div>
<footer>
<p>Dikembangkan oleh : Lambang DWSN<br>
<b> lambangdwsn@gmail.com</b></p>
</footer>
</body>
</html>
<div class="login">
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/noprofile.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="logincontainer">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="loginbutton" style="text-align: center;">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="logincontainer" style="background-color:#f1f1f1;padding: 50px;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button><span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
