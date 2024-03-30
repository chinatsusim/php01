<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="ロゴ" />
        </div>
            <ul class="menu">
                <a href="javascript:void(0);" id="m01"><li>Dashboard</li></a>
                <a href="javascript:void(0);" id="m02"><li>User Management</li></a>
                <a href="javascript:void(0);" id="m03"><li>News</li></a>
            </ul>
            <ul class="menu bottom-menu">
                <li><a href=""><span class="material-symbols-outlined">
settings
</span>Settings</a></li>
                <li><a href=""><span class="material-symbols-outlined">
logout
</span>Log Out</a></li>
            </ul>
    </header>
    <main>
    <!-- Dash Borad -->
    <?php include 'dashboard.php'; ?> 
    </main>

    <script>
        $("#m02").on("click",function(e){
            e.preventDefault();
        
            $("main").load("form.html");
            
        });

        $("#m01").on("click",function(e){
            e.preventDefault();
        
            $("main").load("dashboard.php");
            
        });



        // メニューハイライトの制御
        $(document).ready(function() {  
            $("#m01").addClass("active");

            $(".menu a").on("click",function(e){
                e.preventDefault();
        
                $(".menu a").removeClass("active");
                $(this).addClass("active"); 
        
            });
        });
        
        
    </script>
</body>
</html>