<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Travel Guide</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <?php include ("include/header.php")?>
        
        <!-- book section starts  -->

<section class="book" id="book">

<h1 class="heading">
    <span>b</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
    <span class="space"></span>
    <span>n</span>
    <span>o</span>
    <span>w</span>
</h1>

<div class="row">

    <div class="image">
        <img src="image/book-img.svg" alt="">
    </div>

    <form action="">
        <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name">
        </div>
        <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guests">
        </div>
        <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date">
        </div>
        <div class="inputBox">
            <h3>leaving</h3>
            <input type="date">
        </div>
        <input type="submit" class="btn" value="book now">
    </form>

</div>

</section>

<!-- book section ends -->
        
        <?php include ("include/footer.php")?>
        <script src="js/script.js"></script>
    </body>
</html>