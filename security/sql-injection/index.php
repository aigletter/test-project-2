<?php

session_start();

$pdo = new PDO('mysql:dbname=test_project;host=127.0.0.1', 'root', '1q2w3e');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = $_POST['order_id'];
    $title = strip_tags($_POST['title']);
    $content = htmlentities($_POST['content']);
    $sql = "INSERT INTO comments (order_id, title, content) VALUES ($orderId, '$title', '$content')";
    $pdo->query($sql);
    header("Location: " . $_SERVER['REQUEST_URI']);
    die();
}

$userId = 1;

//$sql = "SELECT * FROM orders WHERE user_id = $userId AND id = " . (int) $_GET['id'];
//$result = $pdo->query($sql);
//$order = $result->fetch(PDO::FETCH_ASSOC);

$statement = $pdo->prepare("SELECT * FROM orders WHERE user_id = :user_id AND id = :id");
$result = $statement->execute([
    'user_id' => $userId,
    'id' => $_GET['id']
]);
$order = $statement->fetch(PDO::FETCH_ASSOC);


$result = $pdo->query("SELECT * FROM comments WHERE order_id = " . (int) $_GET['id']);
$comments = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
    <title>Order <?= $order['id'] ?></title>
</head>
<body>
    <div>
        <h1>Order <?= $order['id'] ?></h1>
        <p><?= $order['products'] ?></p>
        <br><br>
        <hr>
        <br><br>
        <div>
            <h3>Comments:</h3>
            <br>
            <?php if (!empty($comments)): ?>
                <?php foreach($comments as $comment): ?>
                    <h5><?php echo strip_tags($comment['title']) ?></h5>
                    <p><?php echo htmlentities($comment['content']) ?></p>
                    <hr>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No comments</p>
            <?php endif; ?>
        </div>
        <br><br>
        <form method="POST">
            <input type="hidden" name="order_id" value="<?php echo (int) $_GET['id'] ?>">
            <label>Title</label>
            <br>
            <input name="title">
            <br>
            <label>Comment</label>
            <br>
            <textarea name="content"></textarea>
            <br>
            <input type="submit">
        </form>
    </div>
</body>
</html>
