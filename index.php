<?php include ('database.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alain CRUD with AJAX</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
  	<form class="comment_form">
      <div>
        <label for="name">Name: </label>
      	<input type="text" name="name" id="name">
      </div>
      <div>
      	<label for="comment">Comment: </label>
      	<textarea name="comment" id="comment" cols="30" rows="5"></textarea>
      </div>
      <button type="button" id="submit_btn">POST</button>
      <button type="button" id="update_btn" style="display: none;">UPDATE</button>
  	</form>
  </div>
</body>
</html>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>