<!Doctype html>
<html>
<head>
    <link href="style/style.css" type "text/css" rel="stylesheet">
    <link href="style/loginScreen.css" type "text/css" rel="stylesheet">
    <title>Welcome</title>
</head>

<body>
    <div class = "background">

        <div class = "header">
        <h1> Welcome!</h1>
        </div>

        <div class = "signOut">
            <button class = "button" id= "signOut">Sign Out </button>
        </div>

        <div class = "actions">
            <a class = "button" id="startMessage">Message</a>
            <a class = "button" id="viewMessages">View Messages</a>
        </div>

    </div>
    <script type ="text/javascript">
    document.getElementById("signOut").onclick = function() {
            location.href = "index.php?signOut"
    }
    </script>
</body>
</html>
