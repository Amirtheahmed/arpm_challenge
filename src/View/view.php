<?php
$content = $folder ? "I'm in $folder" : "I'm in the homepage";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page</title>
</head>
<body>
<h1>Hi</h1>
<div><?= htmlspecialchars($content) ?></div>
</body>
</html>
