<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fresh Cart</title>
        <link rel="stylesheet" href="/assets/css/init.css">
        <link rel="stylesheet" href="/assets/css/footer.css">
        <?php $path = $_SERVER['PATH_INFO'] ?? null; ?>
        <?php switch($path) {
            case null: $path = 'home'; break;
            case '/home': $path = 'home'; break;
            case '/signup': $path = 'sign'; break;
            case '/signin': $path = 'sign'; break;
            case '/reset': $path = 'sign'; break;
            case '/wishlist': $path = 'wishlist'; break;
            case '/admin': $path = 'admin'; break;
        }?>
        <?php if($path === 'wishlist' || $path === 'home'): ?>
            <link rel="stylesheet" href="/assets/css/home.css">
            <link rel="stylesheet" href="/assets/css/wishlist.css">
        <?php endif; ?>
        <?php if($path === 'sign'): ?>
            <link rel="stylesheet" href="/assets/css/sign.css">
        <?php endif; ?>
        <?php if($path === 'admin'): ?>
            <link rel="stylesheet" href="/assets/css/view.css">
            <link rel="stylesheet" href="/assets/css/admin.css">
        <?php endif; ?>
        <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1129195909796860029/1177757899800465429/icon.png?ex=6573ab84&is=65613684&hm=be8d91607f53ee0aff36df26d6e45a7ea3ae164f6b248fb10ea6181f918e7cfb&">
        <!-- Font Awesome CSS link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap Icons link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <!-- Slick sliders CSS link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <?php require_once __DIR__ . '/../views/partials/view.php'; ?>
        <?= $content ?>
        <?php require_once __DIR__.'/../views/partials/footer.php'; ?>
        <!-- Slick sliders JQuery and JS scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <?php if($path === 'sign'): ?>
        <script src="/assets/js/eye.js"></script>
        <?php endif; ?>
        <?php if($path === 'home'): ?>
        <script src="/assets/js/home.js"></script>
        <script src="/assets/js/sliders.js"></script>
        <?php endif; ?>
        <?php if($path === 'wishlist'): ?>
        <script src="/assets/js/home.js"></script>
        <script src="/assets/js/wishlist.js"></script>
        <?php endif; ?>
        <?php if($path === 'admin'): ?>
            <script src="/assets/js/admin.js"></script>
        <?php endif; ?>
    </body>
</html>