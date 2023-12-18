<html>
<body>

<form action="" method="post">
    Only brackets: <input type="text" name="name"><br>
    <input type="submit">
    <p>
        <?php
            $brackets = $_POST["name"];
            $ans = 0;
            for ($i=0; $i<strlen($brackets); $i++){
                if($brackets[$i] == '(') $ans ++;
                else $ans--;
                if($ans < 0) {
                    echo -1;
                    return;
                }
            }
            echo 1;
        ?>
    </p>
</form>

</body>
</html>