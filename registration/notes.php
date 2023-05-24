<?php
$mysql = new mysqli('localhost', 'root', '', 'registration');
$query = "SELECT * FROM notes";
$result = $mysql->query($query);

if (isset($_POST["submit"])) {
  $title = $_POST["title"];
  $content = $_POST["content"];
  $created_at = date('Y-m-d H:i:s');
  $query = "INSERT INTO notes (title, content, created_at) VALUES ('$title', '$content', '$created_at')";
  $result = $mysql->query($query);

  if ($result) {
    header("Location: /registration/notes.php?theme=" . $_GET['theme']);
    exit();
  } else {
    echo "Error while adding the note.";
  }
}

if (isset($_POST["clear"])) {
  $query = "DELETE FROM notes";
  $result = $mysql->query($query);

  if ($result) {
    header("Location: /registration/notes.php?theme=" . $_GET['theme']);
    exit();
  } else {
    echo "Error while clearing the notes.";
  }
}

$theme = isset($_GET['theme']) ? $_GET['theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($theme === 'dark') : ?>
    <link rel="stylesheet" href="../css/notes-dark.css">
    <?php else : ?>
    <link rel="stylesheet" href="../css/notes-light.css">
    <?php endif; ?>
    <title>Notes</title>
</head>
<body>
    <h1>Notes</h1>
    <div class="theme-toggle">
        <a href="?theme=light">Light</a>
        <span class="separator">|</span>
        <a href="?theme=dark">Dark</a>
    </div>
    <form action="notes.php?theme=<?php echo $theme; ?>" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title"><br>
        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea><br>
        <div>
            <input type="submit" name="submit" value="Add Note">
            <input type="submit" name="clear" value="Clear Notes" onclick="return confirm('Are you sure you want to clear all notes?')">
            <a href="/login.php" class="back-to-account">Back to account</a>
        </div>
    </form>

    <?php while ($row = $result->fetch_assoc()) : ?>
        <div>
            <h2><?php echo $row["title"]; ?></h2>
            <p><?php echo $row["content"]; ?></p>
            <p>Created at: <?php echo $row["created_at"]; ?></p>
        </div>
    <?php endwhile; ?>

</body>
</html>
