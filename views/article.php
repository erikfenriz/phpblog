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
        </header>
        <section class="article">
            <h3>
               <?=$article['title']?>
            </h3>
            <em>Published: <?=$article['date']?></em>
            <p>
                <?=$article['content']?>
            </p>
        </section>
        <footer>
            The blog belongs to Erik Ernestovich<br> Copyright &copy; 2017
        </footer>
    </div>
</body>

</html>
