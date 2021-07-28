<html>
<body>

<form method= "POST" action= "login.php">

<label for="fname">Username:</label><br>
<input type="text"  name="uname" placeholder="Username"><br>

<label for="pw">Password:</label><br>
<input type="password"  name="password" placeholder="Password"><br>

<input type="submit"  name="submit">

<?php if (isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php
} ?>

</form>


</body>
</html> 