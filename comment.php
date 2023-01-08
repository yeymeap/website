<?php
function setComments($link)
{
    if (isset($_POST['commentSubmit'])) {
        $pid = $_GET['id'];
        $email = htmlspecialchars($_SESSION['email']);
        $comment = $_POST['comment'];
        if (empty($comment)) {
        } else {
            $sql = "INSERT INTO comments (pid, email, comment) VALUES ('$pid', '$email', '$comment')";
            $result = $link->query($sql);
        }
    }
}

function getComments($link)
{
    $pid = $_GET['id'];
    $sql = "SELECT * FROM comments WHERE pid=$pid";
    $result = $link->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-box'><p>";
        echo $row['email'] . "<br>";
        echo $row['time'] . "<br>";
        echo nl2br($row['comment']);
        echo "</p></div>";
    }
}
