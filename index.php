<?php 
$user = (object) [
    'name' => 'Jane Doe',
    'email' => 'janedoe@gmail.com',
    'logged' => true
];

?>
<!doctype html>
<html lang="en">
    <head>
        <title>WWS React, Bootstrap 5 &amp; PHP Playground</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/app/assets/css/app.css" type="text/css">
    </head>
    <script type="text/javascript">
        var STATIC_URL = 'http://localhost/my-app';
        var myApp = {
            user : <?php echo json_encode($user); ?>,
            logged : <?php echo $user->logged; ?>
        };
    </script>
    <body>

        <div id="app"></div>

        <script type="text/javascript" src="/app/assets/bundle/main.bundle.js" ></script>

    </body>
</html>
