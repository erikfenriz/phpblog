<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>XAMPP testing</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<body>
    <div class="container">
        <header>
            <h1>Erik's blog</h1>
            <a href="admin">Admin Panel</a>
        </header>
        <?php foreach($articles as $a): ?>
        <section class="article">
            <h3>
               <a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a>
            </h3>
            <em>Published: <?=$a['date']?></em>
            <p>
                <?=$a['content']?>
            </p>
            <?php endforeach ?>
        </section>
        <footer>
            The blog belongs to Erik Ernestovich<br> Copyright &copy; <?php echo date("Y");?>
        </footer>
    </div>
</body>

</html>
