<html>
<body style="font-family:Arial;background:#EFE">
	<h1>Things To-Do</h1>
	<h2><?php print $todo->name; ?></h2>
	<p>
		<strong>Description</strong><br>
		<?php print $todo->description; ?>
	</p>
	<p><?php print anchor('todo', 'Back to list'); ?></p>
</body>
</html>