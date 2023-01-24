<?php
function setComments($link)
{
    if (isset($_POST['commentSubmit'])) {
        $pid = $_GET['id'];
        $name = htmlspecialchars($_SESSION['email']);
        $comment = $_POST['comment'];
        if (empty(trim($comment))) {
        } else {
            $sql = "INSERT INTO comments (pid, name, comment) VALUES ('$pid', '$name', '$comment')";
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
        $name = $row['name'];
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo "<div class='comment-box'><p>";
            echo $row['name'] . "<br>";
            echo $row['time'] . "<br>";
            echo nl2br($row['comment']);
            echo "</p></div>";
        } elseif ($_SESSION['isadmin'] == 1 or $name == $_SESSION['email']) {
            echo "<div class='comment-box'><p>";
            echo $row['name'] . "<br>";
            echo $row['time'] . "<br>";
            echo nl2br($row['comment']);
            echo "</p>
        <form class='delete-comment' method='POST' action='" . deleteComments($link) . "'>
        <input type='hidden' name='cid' value='" . $row['cid'] . "'>
        <button onclick=refresh() class='btn btn-backblack fa fa-trash' name='commentDelete'></button></form>
        </div>";
        } else {
            echo "<div class='comment-box'><p>";
            echo $row['name'] . "<br>";
            echo $row['time'] . "<br>";
            echo nl2br($row['comment']);
            echo "</p></div>";
        }
    }
}

function deleteComments($link)
{
    if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];
        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $link->query($sql);
        echo "<script>location.reload(0)</script>";
    }
}
