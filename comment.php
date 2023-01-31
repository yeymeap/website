<?php
function setComments($link) //Kommentek beírása az adatbázisba
{
    if (isset($_POST['commentSubmit'])) {
        $pid = $_GET['id']; //Termék id lekérése
        $name = htmlspecialchars($_SESSION['email']); //Név lekérése
        $comment = $_POST['comment']; //Komment lekérése
        if (empty(trim($comment))) { //Megnézi üres e a komment
        } else {
            $stmt = $link->prepare("INSERT INTO comments (pid, name, comment) VALUES (?, ?, ?)"); //Beírás adatbázisba
            $stmt->bind_param("iss", $pid, $name, $comment);
            $stmt->execute();
            $stmt->close();
        }
    }
}


function getComments($link)
{
    $pid = $_GET['id'];
    $stmt = $link->prepare("SELECT * FROM comments WHERE pid = ?"); //Kommentek kiolvasása adatbázisból
    $stmt->bind_param("i", $pid);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) { //While loop segítségével írjuk ki a kommenteket
        $name = $row['name']; //email kiolvasása
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) { //Megnézi be e vagyunk jelentkezve
            echo "<div class='comment-box'><p>";
            echo $row['name'] . "<br>"; //Email cím kiírása
            echo $row['time'] . "<br>"; //Idő kiírása
            echo nl2br($row['comment']); //Komment kiírása
            echo "</p></div>";
        } elseif ($_SESSION['isadmin'] == 1 or $name == $_SESSION['email']) { //Megnézi be e vagyunk jelentkezve
            echo "<div class='comment-box'><p>";
            echo $row['name'] . "<br>"; //Email cím kiírása
            echo $row['time'] . "<br>"; //Idő kiírása
            echo nl2br($row['comment']); //Komment kiírása
            echo "</p>
        <form class='delete-comment' method='POST' action='" . deleteComments($link) . "'>
        <input type='hidden' name='cid' value='" . $row['cid'] . "'>
        <button class='btn btn-backblack fa fa-trash' name='commentDelete'></button></form>
        </div>"; //Törlés gomb kiírása
        } else {
            echo "<div class='comment-box'><p>";
            echo $row['name'] . "<br>"; //Email kiírása
            echo $row['time'] . "<br>"; //Idő kiírása
            echo nl2br($row['comment']); //Komment kiírása
            echo "</p></div>";
        }
    }
    $stmt->close();
}

function deleteComments($link)
{
    if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid']; //Komment id
        $stmt = $link->prepare("DELETE FROM comments WHERE cid = ?"); //Komment törlése
        $stmt->bind_param("i", $cid);
        $stmt->execute();
        $stmt->close();
        echo "<script>location.reload(0)</script>"; //Oldal frissítése
    }
}
