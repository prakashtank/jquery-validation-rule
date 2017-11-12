<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Makes "field" required and a url.</title>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
</head>
<body>
<form class="cmxform" id="commentForm" method="get" action="">
  <fieldset>
    <legend>Please provide your name, email address (won't be published) and a comment</legend>
    <p>
      <label for="cname">Name (required, at least 2 characters)</label>
      <input id="cname" name="name" minlength="2" type="text" required>
    </p>
    <p>
      <label for="cemail">E-Mail (required)</label>
      <input id="cemail" type="email" name="email" required>
    </p>
    <p>
      <label for="curl">URL (optional)</label>
      <input id="curl" type="url" name="url">
    </p>
    <p>
      <label for="ccomment">Your comment (required)</label>
      <textarea id="ccomment" name="comment" required></textarea>
    </p>
    <p>
      <input class="submit" type="submit" value="Submit">

      <button id="first" name="dfsdf"></button>
    </p>
  </fieldset>
</form>
<script>
$("#commentForm").validate();
</script>
<script type="text/javascript">
	$('#first'). on('click', function() { $("#commentForm").validate(); });
</script>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


</body>
</html>
