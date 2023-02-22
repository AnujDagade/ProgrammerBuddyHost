<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/register.css">
    <title>SendInfo</title>
    <style>
        #id{
            display:none;
        }
    </style>
</head>
<body>
   <div class="flex-container">
   <form action="sendMail.php" method="post">
        <textarea rows="4" name="msg" id="msg" placeholder="Enter your message" ></textarea>
        <input type="email" name="email" id="email" placeholder="Your email" required>
        <input type="email" name="id" id="id" value=<?php echo $_POST['id']; ?> hidden> 
        <input type="submit" value="Submit" class="btn">
    </form>
   </div>
</body>
</html>
