<?php 
    require_once("includes/db.php");
    require_once("includes/functions.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = prep_input($_POST['title']); 
        $content = prep_input($_POST['content']); 
        $important = prep_input($_POST['important']);

        $sql = "INSERT INTO notes (title, content, important) VALUES ('$title', '$content', $important)";

        if(mysqli_query($conn, $sql)){
            echo "Success!";
        } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Notes App</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <header>
                Notes App
    </header>

    <div class="titleDiv">
            <div class="backLink"><a class="nav-link" href="index.php"> Home</a></div>
            <div class="head">New Note</div>
    </div>
    <form action="new.php" method="post">     

            <span class="label">Title</span>
            <input type="text" name="title" />
            
            <span class="label">Content</span>
            <textarea name="content"> </textarea>

            <div class="chkgroup">
                <span class="label-in">Important</span>
                <input type="hidden" name="important" value="0" />
                <input type="checkbox" class="theme-checkbox " name="important" value="1" />
            </div>
            <br/>
            <button class="btn" type="submit">
                 Submit
            </button>

   
    
</html>