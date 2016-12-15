<html>   
   
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="kuvat/favicon.ico">
        <link rel="stylesheet" type="text/css" href="tyyli.css">
        <meta name="robots" content="none">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kuvapalvelu</title>
    </head>

<form method="POST" action="saveRating.php">
<fieldset class="rating">
    <legend>Arvostele:</legend>
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Upea!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Ihan hieno!">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Ok!">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kamala!">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Todella hirveä!">1 star</label>
</fieldset>
</form>
</html>