<?php


session_start();

if (isset($_GET['logout'])) {

    //Simple exit message
    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>" . $_SESSION['name'] . "</b> has left the chat session.</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);

    session_destroy();
    header("Location: index.php"); //Redirect the user
}

if (isset($_POST['enter'])) {
    if ($_POST['name'] != "") {
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    } else {
        echo '<span class="error">Please type in a name</span>';
    }
}

function loginForm()
{
    echo
    '
    <section>
    <ul class="icon-list">
    <li class="icon-item">
    <a href="/login_success/index.html" class="icon-link"><i id="back-btn-log" class="fa-solid fa-arrow-left"></i></a>
    </li>   
    </ul>
    </section>
    <p class="p-form">Please enter your name to continue!</p>
    <form action="index.php" method="post">
    <div class="form-group">
    <span>Name</span>
    <input class="form-field" name="name" type="text" placeholder="Youe sweet name">
    <input type="submit" id="unique" class="form__submit" name="enter" value="Enter" />
    </div>
    </form>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/c4c4d8f233.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <style>
        * {
            font-family: sans-serif;
        }
    </style>
    <title>CJ Community</title>
    <meta name="description" content="Tuts+ Chat Application" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style2.css" />
</head>

<body>
    <?php
    if (!isset($_SESSION['name'])) {
        loginForm();
    } else {
    ?>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
                <p class="logout"><a id="exit" href="#">Logout</a></p>
            </div>

            <div id="chatbox">
                <?php
                if (file_exists("log.html") && filesize("log.html") > 0) {
                    $contents = file_get_contents("log.html");
                    echo $contents;
                }
                ?>
            </div>

            <form class="form__group field">
                <input type="text" class="form__field" autocomplete="off" placeholder="Message" name="usermsg" id='usermsg' />
                <label for="usermsg" class="form__label">Your message...</label>
                <input type="submit" class="form__submit" value="Send" name="submitmsg" id='submitmsg' />
            </form>

        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function() {
                $("#submitmsg").click(function() {
                    var clientmsg = $("#usermsg").val();
                    $.post("post.php", {
                        text: clientmsg
                    });
                    $("#usermsg").val("");
                    return false;
                });

                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request

                    $.ajax({
                        url: "log.html",
                        cache: false,
                        success: function(html) {
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div

                            //Auto-scroll           
                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                            if (newscrollHeight > oldscrollHeight) {
                                $("#chatbox").animate({
                                    scrollTop: newscrollHeight
                                }, 'normal'); //Autoscroll to bottom of div
                            }
                        }
                    });
                }

                setInterval(loadLog, 2500);

                $("#exit").click(function() {
                    var exit = confirm("Are you sure you want to end the session?");
                    if (exit == true) {
                        window.location = "index.php?logout=true";
                    }
                });
            });
        </script>
</body>

</html>
<?php
    }
?>